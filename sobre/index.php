<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Pet-Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar -->
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
                <li><a href="#">Sobre</a></li>
                <li><a href="../agendamento/index.php">Agendar</a></li>
                <li><a href="#localizacao">Localização</a></li>
            </ul>
        </div>
    </nav>

    <div class="overlay"></div>
         
    <!-- Slide -->
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">

        <!-- Itens do Carousel -->
        <div class="carousel-inner">
            <div class="item active" style="background-image: url('../img/slideSobre1.jpg');">
                <div class="carousel-caption">
                    <h2>Bem-vindo ao Pet-Shop!</h2>
                    <p>Cuidados especiais para o seu pet.</p>
                </div>
            </div>
            <div class="item" style="background-image: url('../img/slideSobre2.jpg');">
                <div class="carousel-caption">
                    <h2>Produtos de Qualidade</h2>
                    <p>Temos tudo para seu pet ficar feliz!</p>
                </div>
            </div>
            <div class="item" style="background-image: url('../img/slideSobre3.jpg');">
                <div class="carousel-caption">
                    <h2>Agende um Serviço</h2>
                    <p>Banho, tosa e muito mais!</p>
                </div>
            </div>
        </div>

        <!-- Controles de navegação -->
        <a class="carousel-control left" href="#carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
  
    <!-- Seção Sobre -->
    <section class="sobre">
        <div class="sobre-item">
            <img src="../img/imgEstabelecimentoSobre.jpg" alt="Imagem do Estabelecimento">
            <div class="conteudo">
                <h2 class="titulo">Sobre seu estabelecimento</h2>
                <p class="texto">
                    Aqui você pode colocar informações sobre o seu estabelecimento. Fale sobre a história da sua empresa, 
                    sua missão, valores e o que torna seu negócio único. Destaque os diferenciais do seu espaço, a qualidade 
                    dos serviços e produtos oferecidos, e como o seu pet shop se preocupa com o bem-estar dos animais e 
                    a satisfação dos clientes.
                </p>
            </div>
        </div>

        <div class="sobre-item">
            <img src="../img/imgEquipeSobre.jpg" alt="Imagem da Equipe">
            <div class="conteudo">
                <h2 class="titulo">Sobre sua equipe</h2>
                <p class="texto">
                    Aqui você pode apresentar a sua equipe de profissionais. Fale sobre a experiência, formação e dedicação 
                    de cada membro para garantir o melhor atendimento aos clientes e seus pets. Destaque o compromisso da equipe 
                    em oferecer um serviço de qualidade, carinho e respeito aos animais, criando um ambiente acolhedor e confiável 
                    para todos.
                </p>
            </div>
        </div>
    </section>

<!-- Seção de Qualidades -->
<h1 class="tituloQualidades">Nossas principais qualidades</h1>
<section class="qualidades">
    <div class="qualidade-item">
        <img src="../img/icone1.png" alt="Ícone Qualidade 1">
        <h3>Atendimento Especializado</h3>
        <p>Nosso time é composto por profissionais altamente capacitados e apaixonados por animais. Cada membro da equipe 
        é treinado para oferecer um atendimento atencioso e personalizado, garantindo que seu pet receba o melhor cuidado possível. 
        Desde a recepção até os serviços de banho, tosa e consultas, buscamos sempre um relacionamento próximo com os clientes, 
        ouvindo suas necessidades e proporcionando um serviço diferenciado que prioriza o bem-estar e a segurança dos pets.</p>
    </div>
    <div class="qualidade-item">
        <img src="../img/icone2.png" alt="Ícone Qualidade 2">
        <h3>Produtos de Alta Qualidade</h3>
        <p>Trabalhamos apenas com os melhores produtos disponíveis no mercado, selecionando cuidadosamente cada item para garantir a 
        saúde e o conforto do seu pet. Desde shampoos dermatologicamente testados, rações premium, acessórios ergonômicos e brinquedos 
        seguros, nossa loja é abastecida com tudo o que seu animal de estimação precisa para viver com mais qualidade de vida. Nosso 
        compromisso é oferecer produtos confiáveis e eficazes, escolhidos com base em critérios rigorosos de segurança e bem-estar animal.</p>
    </div>
    <div class="qualidade-item">
        <img src="../img/icone3.png" alt="Ícone Qualidade 3">
        <h3>Ambiente Confortável</h3>
        <p>Nosso espaço foi planejado para garantir um ambiente tranquilo e aconchegante tanto para os pets quanto para seus tutores. 
        Contamos com áreas climatizadas, espaços amplos e higienizados regularmente, além de salas de atendimento adaptadas para proporcionar 
        uma experiência confortável. Cada detalhe do nosso pet shop foi pensado para minimizar o estresse dos animais e oferecer um local 
        acolhedor, onde eles possam se sentir seguros e bem cuidados, tornando cada visita uma experiência agradável.</p>
    </div>
</section>

<!-- Seção de Localização -->
<section class="localizacao" id="localizacao">
    <h1 class="tituloLocalizacao">Nossa Localização</h1>
    <p class="descricaoLocalizacao">Venha nos visitar! Estamos localizados em um espaço acolhedor e de fácil acesso, prontos para 
    atender você e seu pet com muito carinho.</p>
    
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13496.674642523643!2d-43.94860121478928!3d-19.920582185139406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699fb5bf17949%3A0xf670baaa33ff416e!2sPra%C3%A7a%20Sete%20de%20Setembro%20-%20Centro%2C%20Belo%20Horizonte%20-%20MG%2C%2069400-266!5e0!3m2!1spt-BR!2sbr!4v1740877149206!5m2!1spt-BR!2sbr" 
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<footer class="footer-section">
        <div class="container">
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

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.pkgd.min.js"></script>
    <script src="script.js"></script>
</body>
</html>