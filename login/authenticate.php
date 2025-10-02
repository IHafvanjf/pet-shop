<?php
include 'config.php';
session_start();

function registerUser($email, $password, $name) {
    global $conn;

    if (empty($email) || empty($password) || empty($name)) {
        $_SESSION['register_error_message'] = "Todos os campos são obrigatórios.";
        header("Location: index.php");
        exit;
    }

    // Verifica se o email já está cadastrado
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['register_error_message'] = "Usuário já cadastrado com este email.";
        $stmt->close();
        header("Location: index.php");
        exit;
    }
    $stmt->close();

    // Criptografa a senha
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insere o usuário no banco
    $stmt = $conn->prepare("INSERT INTO usuarios (email, senha, nome) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $hashedPassword, $name);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Cadastro realizado com sucesso! Faça login.";
        header("Location: index.php");
        exit;
    } else {
        $_SESSION['register_error_message'] = "Erro ao cadastrar usuário: " . $stmt->error;
    }

    $stmt->close();
    header("Location: index.php");
    exit;
}

function loginUser($email, $password) {
    global $conn;

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['senha'])) { // Ajustado de 'password' para 'senha'
            $_SESSION['user_id'] = $user['UsuarioID'];
            $_SESSION['nome'] = $user['nome'];
            $_SESSION["user_email"] = $user["email"];

            header("Location: ../agendamento/index.php");
            exit;
        } else {
            $_SESSION['error_message'] = "Senha incorreta.";
        }
    } else {
        $_SESSION['error_message'] = "Usuário não encontrado.";
    }
}
?>
