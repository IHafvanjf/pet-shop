<?php

include '../login/authenticate.php';

session_start();
 if(!isset($_SESSION['user_id'])){
   header("location: ../login/index.php");
   exit;
 }
$emailUsuario = $_SESSION["user_email"];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento - Pet Shop</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar">
        <div class="logo">PetShop</div>
        <div class="navbar-container">
            <button class="mobile-nav-toggle" aria-label="Abrir menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            <ul class="nav-links">
                <li><a href="../index.php">Início</a></li>
                <li><a href="../sobre/index.php">Sobre</a></li>
                <li><a href="#">Agendar</a></li>
                <li><a href="../sobre/index.php#localizacao">Localização</a></li>
            </ul>
        </div>
    </nav>
    
    <main class="bg-yellow-400 text-gray-800 flex justify-center items-center h-screen">
    <!-- Navbar -->
    <div class="overlay"></div>
    
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-lg rounded-lg text-center">
        <div id="fase1" class="grid grid-cols-2 gap-6">
            <div class="bg-yellow-100 p-6 rounded-lg shadow-lg text-center border border-gray-300">
                <img src="../img/imgVan.png" alt="Nosso Transporte" class="mx-auto w-16 h-16 mb-4">
                <p class="font-semibold">Seu pet</p>
                <p class="text-sm text-gray-600">Nosso transporte</p>
                <button class="mt-4 bg-blue-700 text-white px-4 py-2 rounded-lg select-option" data-target="fase2" data-taxi="sim">Confirmar</button>
            </div>
            <div class="bg-yellow-100 p-6 rounded-lg shadow-lg text-center border border-gray-300">
                <img src="../img/imgDog.png" alt="Sem Transporte" class="mx-auto w-16 h-16 mb-4">
                <p class="font-semibold">Irei levar</p>
                <p class="text-sm text-gray-600">Sem transporte</p>
                <button class="mt-4 bg-blue-700 text-white px-4 py-2 rounded-lg select-option" data-target="fase2" data-taxi="nao">Confirmar</button>
            </div>
        </div>

           <div id="fase2" class="hidden mt-6 px-4">
            <h2 class="text-2xl font-bold text-blue-900 mb-6 text-center" id="tituloServiços">Seleção de Serviços</h2>
            <div id="servicos-list" class="grid grid-cols-2 md:grid-cols-3 gap-6">
                <div class="service-card bg-white p-6 rounded-lg shadow-lg border border-gray-300" data-tipo="cachorro" data-preco="40" data-duracao="30">
                    <p class="service-title font-semibold text-lg">Banho Terapêutico - R$40,00</p>
                    <button class="service-btn w-full mt-4 bg-blue-700 text-white px-6 py-3 rounded-lg" onclick="this.parentElement.classList.toggle('selected')">Selecionar</button>
                </div>
                <div class="service-card bg-white p-6 rounded-lg shadow-lg border border-gray-300" data-tipo="cachorro" data-preco="60" data-duracao="30">
                    <p class="service-title font-semibold text-lg">Tosa Completa - R$60,00</p>
                    <button class="service-btn w-full mt-4 bg-blue-700 text-white px-6 py-3 rounded-lg" onclick="this.parentElement.classList.toggle('selected')">Selecionar</button>
                </div>
                <div class="service-card bg-white p-6 rounded-lg shadow-lg border border-gray-300" data-tipo="cachorro" data-preco="20" data-duracao="30">
                    <p class="service-title font-semibold text-lg">Corte de Unhas - R$20,00</p>
                    <button class="service-btn w-full mt-4 bg-blue-700 text-white px-6 py-3 rounded-lg" onclick="this.parentElement.classList.toggle('selected')">Selecionar</button>
                </div>
                <div class="service-card bg-white p-6 rounded-lg shadow-lg border border-gray-300" data-tipo="gato" data-preco="30" data-duracao="30">
                    <p class="service-title font-semibold text-lg">Escovação Dental - R$30,00</p>
                    <button class="service-btn w-full mt-4 bg-blue-700 text-white px-6 py-3 rounded-lg" onclick="this.parentElement.classList.toggle('selected')">Selecionar</button>
                </div>
                <div class="service-card bg-white p-6 rounded-lg shadow-lg border border-gray-300" data-tipo="gato" data-preco="50" data-duracao="30">
                    <p class="service-title font-semibold text-lg">Hidratação Profunda - R$50,00</p>
                    <button class="service-btn w-full mt-4 bg-blue-700 text-white px-6 py-3 rounded-lg" onclick="this.parentElement.classList.toggle('selected')">Selecionar</button>
                </div>
                <div class="service-card bg-white p-6 rounded-lg shadow-lg border border-gray-300" data-tipo="gato" data-preco="25" data-duracao="30">
                    <p class="service-title font-semibold text-lg">Limpeza de Ouvidos - R$25,00</p>
                    <button class="service-btn w-full mt-4 bg-blue-700 text-white px-6 py-3 rounded-lg" onclick="this.parentElement.classList.toggle('selected')">Selecionar</button>
                </div>
            </div>            
            <div class="mt-6">
                <label class="font-semibold block text-lg">Observação (Opcional)</label>
                <textarea class="obs-textarea w-full border p-3 rounded-lg mt-2" placeholder="Ex: Não corte muito o pelo das orelhas"></textarea>
                <button id="salvar-servicos" class="salvar-btn mt-4 bg-blue-700 text-white px-6 py-3 rounded-lg w-full">Salvar</button>
            </div>
        </div> 
        


        <div id="fase3" class="hidden mt-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6">Informações do Cliente</h2>
            <div id="form-basico">
            <input type="text" id="nome" placeholder="Nome" class="w-full border p-2 rounded mt-2">
                <input type="email" placeholder="E-mail" class="w-full border p-2 rounded mt-2" name="email" value="<?= $emailUsuario ?>" />
                <input type="tel" id="telefone" placeholder="Telefone" class="w-full border p-2 rounded mt-2">

                </div>
            <div id="form-taxi" class="hidden">
                <select id="bairro" class="w-full border p-2 rounded mt-2">
                    <option value="">Selecione seu bairro</option>
                    <option value="Bairro 1">Bairro 1 - R$(frete)</option>
                    <option value="Bairro 2">Bairro 2 - R$(frete)</option>
                    <option value="Bairro 3">Bairro 3 - R$(frete)</option>
                </select>
                <input type="text" placeholder="Rua e número" class="w-full border p-2 rounded mt-2">
                <input type="text" placeholder="Complemento" class="w-full border p-2 rounded mt-2">
                <input type="hidden" id="duracao" value="30"> <!-- Duração padrão em minutos -->

            </div>
            <button id="proximo-calendario" class="mt-4 bg-blue-700 text-white px-6 py-2 rounded-lg">Próximo</button>
        </div>

        <div id="fase4" class="hidden mt-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6">Escolha a Data</h2>
            <div id="calendario-container" class="flex justify-center">
                <input id="calendario" class="hidden">
                <div id="inline-calendario"></div>
            </div>
            <button id="proximo-horarios" class="mt-4 bg-blue-700 text-white px-6 py-2 rounded-lg">Próximo</button>
        </div>

        <div id="fase5" class="hidden mt-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-6">Escolha o Horário</h2>
            <div class="legenda-horarios mb-4">
    <p class="text-sm">
        <span class="inline-block w-4 h-4 legenda-vermelho mr-2"></span> Horário ocupado
    </p>
    <p class="text-sm">
        <span class="inline-block w-4 h-4 legenda-laranja mr-2"></span> Horário bloqueado (excesso de serviços)
    </p>
    <p class="text-sm">
        <span class="inline-block w-4 h-4 legenda-verde mr-2"></span> Horário disponível
    </p>
</div>


            <div id="horarios-list" class="grid grid-cols-3 gap-4"></div>
            <button id="finalizarAgendamento" class="finalizar-agendamento mt-4 bg-blue-700 text-white px-6 py-2 rounded-lg">Finalizar Agendamento</button>
        </div>
    </div>
    
    <!-- Modal -->
    <div id="modal-confirmacao" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold text-blue-900">Confirmação</h2>
            <p id="detalhes-valor" class="mt-4 text-lg font-semibold"></p>
            <p class="mt-2 text-gray-700">O pagamento deve ser feito ao motorista na chegada.</p>
            <button class="mt-4 bg-blue-700 text-white px-6 py-2 rounded-lg fechar-modal">OK</button>
        </div>
    </div>
    </main>   
    <footer id="rodape" class="footer-section">
        <div class="container1">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Encontre-nos</h4>
                                <span>Belo Horizonte - MG</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Telefone</h4>
                                <span>3199794-1735</span><br>
                                <span>3198730-5141</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Email</h4>
                                <span>techinnova01@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a><img src="../img/logoAlltech.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>A AllTech é a revolução digital que sua empresa precisa! Especialistas em desenvolvimento de sites e aplicações web, transformamos ideias em experiências digitais envolventes, escaláveis e de alto desempenho. Seja para fortalecer sua presença online, aumentar suas conversões ou oferecer uma experiência digital impecável, criamos soluções sob medida para o seu negócio.</p>  
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Serviços</h3>
                        </div>
                        <ul>
                            <li><a href="#">Desenvolvimento de Sites</a></li>
                            <li><a href="#">Aplicações Web</a></li>
                            <li><a href="#">E-commerce</a></li>
                            <li><a href="#">Otimização de SEO</a></li>
                            <li><a href="#">Manutenção e Suporte</a></li>
                            <li><a href="#">Integração de APIs</a></li>
                            <li><a href="#">Sistemas Personalizados</a></li>
                            <li><a href="#">UX/UI Design</a></li>
                        </ul>
                    </div>                 
                </div>


                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
    <div class="footer-widget">
        <div class="footer-widget-heading">
            <h3>Fale Conosco</h3>
        </div>
        <div class="footer-text mb-25">
            <p>Precisa de um orçamento ou tem alguma dúvida? Fale conosco agora pelo WhatsApp!</p>
        </div>
        <div class="whatsapp-btn">
            <a href="https://wa.me/31997941735" target="_blank">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
        </div>
    </div>
</div>
        <div class="copyright-area">
            <div class="container1">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2025, Todos os direitos reservados, AllTech</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>