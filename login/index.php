 <?php

include 'authenticate.php';

$errorMessage = $registerErrorMessage = $successMessage = '';
$showRegister = false; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        registerUser($_POST['register_email'], $_POST['register_password'], $_POST['register_name']); // Ajustado para os nomes corretos
    } elseif (isset($_POST['login'])) {
        loginUser($_POST['email'], $_POST['password']);
    }
}

?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pet Shop</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="main">  	
        <input type="checkbox" id="chk" aria-hidden="true">

        <!--Formulário de Cadastro -->
        <div class="signup">
    <form action="index.php" method="post">
        <label for="chk" aria-hidden="true">Cadastrar</label>
        <input type="text" name="register_name" placeholder="Nome de usuário" required> 
        <input type="email" name="register_email" placeholder="Email" required> 
        <input type="password" name="register_password" placeholder="Senha" required> 
        <button type="submit" name="register">Cadastrar</button>
    </form>

        </div>

        <!--Formulário de Login -->
        <div class="login" id="loginForm">
            <form action="index.php" method="post">
                <label for="chk" aria-hidden="true">Entrar</label>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Senha" required>
                <button type="submit" class="submit" name="login" id="entrar">Entrar</button>
                <a href="#" id="esqueciSenha">Esqueci minha senha</a>
            </form>
        </div>

        <!--Formulário de Recuperação de Senha -->
        <div class="forgot-password" id="forgotPasswordForm" style="display: none;">
            <form action="recuperar_senha.php" method="post">
                <label>Recuperar Senha</label>
                <input type="email" name="forgot_email" placeholder="Digite seu e-mail" required>
                <button type="submit" name="send_code">Enviar Código</button>
            </form>
        </div>

        <!--Formulário de Código de Verificação -->
        <div class="verify-code" id="verifyCodeForm" style="display: none;">
            <form action="verificar_codigo.php" method="post">
                <label>Verificar Código</label>
                <input type="text" name="verification_code" placeholder="Digite o código recebido" required>
                <button type="submit" name="verify_code">Confirmar</button>
            </form>
        </div>

        <!--Formulário de Redefinição de Senha -->
        <div class="reset-password" id="resetPasswordForm" style="display: none;">
            <form action="resetar_senha.php" method="post">
                <label>Nova Senha</label>
                <input type="password" name="new_password" placeholder="Nova senha" required>
                <input type="password" name="confirm_password" placeholder="Repita a nova senha" required>
                <button type="submit" name="reset_password">Confirmar</button>
            </form>
        </div>

        <!--Mensagem de Sucesso -->
        <div class="success-message" id="successMessage" style="display: none;">
            <label>Sua senha foi atualizada!</label>
            <button type="button" id="voltarLogin">Voltar ao Login</button>
        </div>
    </div>

    <script>
        // Exibe o formulário de recuperação de senha
        document.getElementById("esqueciSenha").addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById("loginForm").style.display = "none";
            document.getElementById("forgotPasswordForm").style.display = "block";
        });

        // Voltar ao login após redefinir a senha
        document.getElementById("voltarLogin").addEventListener("click", function() {
            document.getElementById("successMessage").style.display = "none";
            document.getElementById("loginForm").style.display = "block";
        });
    </script>
</body>
</html>
