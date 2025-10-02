<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet-Shop</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- loader -->
    <div id="splash">
        <div class="anim">
            <div id="loader">
                <div class="container">
                    <div class="container">
                        <div class="dog">
                            <div class="dog-head">
                                <div class="dog-ears ears-left"></div>
                                <div class="dog-ears ears-right"></div>
                                <div class="dog-eyes"></div>
                                <div class="dog-mouth">
                                    <div class="dog-nose"></div>
                                    <div class="dog-tongue"></div>
                                </div>
                            </div>
                            <div class="dog-tail"></div>
                            <div class="dog-body">
                                <div class="dog-foot"></div>
                            </div>
                            <div class="ball"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
                <li><a href="#home">Início</a></li>
                <li><a href="sobre/index.php">Sobre</a></li>
                <li><a href="./agendamento/index.php">Agendar</a></li>
                <li><a href="sobre/index.php#localizacao">Localização</a></li>
            </ul>
        </div>
    </nav>

    <div class="overlay"></div>

    <!-- slide -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/slide1.jpg" alt="Primeiro slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Melhores Cuidados para seu Pet</h5>
                <p>Agende um banho e tosa com carinho e qualidade.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/slide2.jpg" alt="Segundo slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Produtos de Qualidade</h5>
                <p>Encontre os melhores produtos para o seu pet.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/slide3.jpg" alt="Terceiro slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Serviços Veterinários</h5>
                <p>Cuide da saúde do seu pet com nossos especialistas.</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>


    <!-- serviços -->
    <section class="previaServiços">
        <div class="service">
            <a href="">
            <div class="service-box">
                <img src="img/icone4.png" alt="" id="iconeServico">                
                <p>vacinas</p>
            </div>
            </a>
            
        </div>
        <div class="service">
            <a href="">
                <div class="service-box">
                <img src="img/icone2.png" alt="" id="iconeServico">                
                <p>banho e tosa</p>
            </div>
            </a>
        </div>
        <div class="service">
            <a href="">
                <div class="service-box">
                <img src="img/icone3.png" alt="" id="iconeServico">                
                <p>consulta</p>
            </div>
            </a>
        </div>
        <div class="service">
            <a href="">
                <div class="service-box">
                    <img src="img/icone1.png" alt="" id="iconeServico">                
                    <p>exames</p>
                </div>
            </a>
        </div>
        <div class="service">
            <a href="">
                <div class="service-box">
                <img src="img/icone5.png" alt="" id="iconeServico">                
                <p>Estética Animal</p>
            </div>
            </a>
        </div>
    </section>
    
    <!-- Produtos para Cachorros -->
    <section class="produtos-container">
        <h2 class="tituloSection">Tudo para seu dog</h2>
        
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                
                <!-- Produto 1 -->
                <div class="swiper-slide card">
                    <img src="img/produtoDog1.png" alt="Produto 1">
                    <h3>Produto 1</h3>
                    <p>R$20,90</p>
                    <button class="comprar-btn"
                    data-img="img/produtoDog1.png"
                    data-nome="Spray Higienizador para Cães"
                    data-desc="Mantém o pelo limpo e perfumado entre os banhos. Ideal para higiene rápida."
                    data-preco="20.90">
                    Comprar
                </button>
                                </div>

                <!-- Produto 2 -->
                <div class="swiper-slide card">
                <img src="img/produtoDog2.png" alt="Produto 2">
                <h3>Produto 2</h3>
                <p>R$10,50</p>
                <button class="comprar-btn"
                    data-img="img/produtoDog2.png"
                    data-nome="Bola de Borracha para Cães"
                    data-desc="Brinquedo interativo e resistente, ótimo para estimular a mastigação e reduzir o tédio."
                    data-preco="10.50">
                    Comprar
                </button>
            </div>

            <!-- Produto 3 -->
            <div class="swiper-slide card">
                <img src="img/produtoDog3.png" alt="Produto 3">
                <h3>Produto 3</h3>
                <p>R$40,99</p>
                <button class="comprar-btn"
                    data-img="img/produtoDog3.png"
                    data-nome="Biscoitos Caninos Sabor Frango"
                    data-desc="Deliciosos e crocantes, ideais para treinos e como recompensa."
                    data-preco="40.99">
                    Comprar
                </button>
            </div>

            <!-- Produto 4 -->
            <div class="swiper-slide card">
                <img src="img/produtoDog4.png" alt="Produto 4">
                <h3>Produto 4</h3>
                <p>R$10,00</p>
                <button class="comprar-btn"
                    data-img="img/produtoDog4.png"
                    data-nome="Comedouro Elevado para Cães"
                    data-desc="Facilita a alimentação e melhora a digestão, indicado para cães de médio e grande porte."
                    data-preco="10.00">
                    Comprar
                </button>
            </div>

            <!-- Produto 5 -->
            <div class="swiper-slide card">
                <img src="img/produtoDOg5.png" alt="Produto 5">
                <h3>Produto 5</h3>
                <p>R$55,90</p>
                <button class="comprar-btn"
                    data-img="img/produtoDOg5.png"
                    data-nome="Cama Macia para Cachorros"
                    data-desc="Feita com material confortável e lavável, ideal para o descanso do seu pet."
                    data-preco="55.90">
                    Comprar
                </button>
            </div>
            </div>
            
            <!-- Botões de navegação -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            
            <!-- Paginação -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Produtos para gatos -->
    <section class="produtos-container">
        <h2 class="tituloSection">Tudo para seu felino</h2>
        
        <div class="swiper mySwiperGatos">
            <div class="swiper-wrapper">
                
                <!-- Produto 7 -->
            <div class="swiper-slide card">
                <img src="img/produtoGato1.png" alt="Produto 7">
                <h3>Produto 7</h3>
                <p>R$150,00</p>
                <button class="comprar-btn"
                    data-img="img/produtoGato1.png"
                    data-nome="Túnel Interativo para Gatos"
                    data-desc="Ótimo para estimular a curiosidade e o instinto de caça dos felinos."
                    data-preco="150.00">
                    Comprar
                </button>
            </div>

            <!-- Produto 8 -->
            <div class="swiper-slide card">
                <img src="img/produtoGato2.png" alt="Produto 8">
                <h3>Produto 8</h3>
                <p>R$40,90</p>
                <button class="comprar-btn"
                    data-img="img/produtoGato2.png"
                    data-nome="Ração Premium para Gatos Adultos"
                    data-desc="Nutrição completa para gatos, com ingredientes selecionados para um pelo saudável."
                    data-preco="40.90">
                    Comprar
                </button>
            </div>

            <!-- Produto 9 -->
            <div class="swiper-slide card">
                <img src="img/produtoGato3.png" alt="Produto 9">
                <h3>Produto 9</h3>
                <p>R$30,00</p>
                <button class="comprar-btn"
                    data-img="img/produtoGato3.png"
                    data-nome="Arranhador de Sisal para Gatos"
                    data-desc="Mantém as garras afiadas e protege os móveis da sua casa."
                    data-preco="30.00">
                    Comprar
                </button>
            </div>

            <!-- Produto 10 -->
            <div class="swiper-slide card">
                <img src="img/produtoGato4.png" alt="Produto 10">
                <h3>Produto 10</h3>
                <p>R$10,90</p>
                <button class="comprar-btn"
                    data-img="img/produtoGato4.png"
                    data-nome="Coleira Peitoral para Gatos"
                    data-desc="Confortável e segura para passeios externos, com ajuste anatômico."
                    data-preco="10.90">
                    Comprar
                </button>
            </div>

            <!-- Produto 11 -->
            <div class="swiper-slide card">
                <img src="img/produtoGato5.png" alt="Produto 11">
                <h3>Produto 11</h3>
                <p>R$150,00</p>
                <button class="comprar-btn"
                    data-img="img/produtoGato5.png"
                    data-nome="Fonte de Água Automática para Gatos"
                    data-desc="Mantém a água sempre fresca e filtrada, incentivando a hidratação do pet."
                    data-preco="150.00">
                    Comprar
                </button>
            </div>

            <!-- Produto 12 -->
            <div class="swiper-slide card">
                <img src="img/produtoGato6.png" alt="Produto 12">
                <h3>Produto 12</h3>
                <p>R$20,50</p>
                <button class="comprar-btn"
                    data-img="img/produtoGato6.png"
                    data-nome="Brinquedo Interativo em Formato de Abacate"
                    data-desc="Estimula o instinto de caça e mantém seu gato entretido por horas."
                    data-preco="20.50">
                    Comprar
                </button>
            </div>
    
            </div>
            
            <!-- Botões de navegação -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            
            <!-- Paginação -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
    
    

    <!-- Modais produtos cachorro -->
<div id="modalCompra" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <div class="modal-info">
            <img src="img/produtoDog1.png" alt="Produto" class="modal-img" id="modalImg">
            <div class="modal-text">
                <h2 id="modalNome">Spray Higienizador para Cães</h2>
                <p id="modalDesc">Mantém o pelo limpo e perfumado entre os banhos. Ideal para higiene rápida.</p>
                <p id="modalPreco">R$20,90</p>
                <div class="modal-buttons">
                    <button class="continuar-btn">Continuar comprando</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalCompra" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <div class="modal-info">
            <img src="img/produtoDog2.png" alt="Produto" class="modal-img" id="modalImg">
            <div class="modal-text">
                <h2 id="modalNome">Bola de Borracha para Cães</h2>
                <p id="modalDesc">Brinquedo interativo e resistente, ótimo para estimular a mastigação e reduzir o tédio.</p>
                <p id="modalPreco">R$10,50</p>
                <div class="modal-buttons">
                    <button class="finalizar-btn">Finalizar</button>
                    <button class="continuar-btn">Continuar comprando</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalCompra" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <div class="modal-info">
            <img src="img/produtoDog3.png" alt="Produto" class="modal-img" id="modalImg">
            <div class="modal-text">
                <h2 id="modalNome">Ração Seca Premium</h2>
                <p id="modalDesc">Alimento completo e balanceado para cães adultos, com vitaminas essenciais.</p>
                <p id="modalPreco">R$40,99</p>
                <div class="modal-buttons">
                    <button class="finalizar-btn">Finalizar</button>
                    <button class="continuar-btn">Continuar comprando</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalCompra" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <div class="modal-info">
            <img src="img/produtoDog4.png" alt="Produto" class="modal-img" id="modalImg">
            <div class="modal-text">
                <h2 id="modalNome">Comedouro Elevado</h2>
                <p id="modalDesc">Projetado para melhorar a digestão e reduzir a tensão no pescoço do seu pet.</p>
                <p id="modalPreco">R$10,00</p>
                <div class="modal-buttons">
                    <button class="finalizar-btn">Finalizar</button>
                    <button class="continuar-btn">Continuar comprando</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="modalCompra" class="modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        <div class="modal-info">
            <img src="img/produtoDOg5.png" alt="Produto" class="modal-img" id="modalImg">
            <div class="modal-text">
                <h2 id="modalNome">Caminha Confortável</h2>
                <p id="modalDesc">Cama macia e aconchegante para garantir o descanso perfeito do seu pet.</p>
                <p id="modalPreco">R$55,90</p>
                <div class="modal-buttons">
                    <button class="finalizar-btn">Finalizar</button>
                    <button class="continuar-btn">Continuar comprando</button>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Modais produtos gatos -->
    <div id="modalCompra" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div class="modal-info">
                <img src="img/produtoDog1.png" alt="Produto" class="modal-img" id="modalImg">
                <div class="modal-text">
                    <h2 id="modalNome">Nome do produto</h2>
                    <p id="modalDesc">Descrição do produto</p>
                    <div class="modal-buttons">
                        <button class="finalizar-btn">Finalizar</button>
                        <button class="continuar-btn">Continuar comprando</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modalCompra" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div class="modal-info">
                <img src="img/produtoDog2.png" alt="Produto" class="modal-img" id="modalImg">
                <div class="modal-text">
                    <h2 id="modalNome">Nome do produto</h2>
                    <p id="modalDesc">Descrição do produto</p>
                    <div class="modal-buttons">
                        <button class="finalizar-btn">Finalizar</button>
                        <button class="continuar-btn">Continuar comprando</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modalCompra" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div class="modal-info">
                <img src="img/produtoDog3.png" alt="Produto" class="modal-img" id="modalImg">
                <div class="modal-text">
                    <h2 id="modalNome">Nome do produto</h2>
                    <p id="modalDesc">Descrição do produto</p>
                    <div class="modal-buttons">
                        <button class="finalizar-btn">Finalizar</button>
                        <button class="continuar-btn">Continuar comprando</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modalCompra" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div class="modal-info">
                <img src="img/produtoDog4.png" alt="Produto" class="modal-img" id="modalImg">
                <div class="modal-text">
                    <h2 id="modalNome">Nome do produto</h2>
                    <p id="modalDesc">Descrição do produto</p>
                    <div class="modal-buttons">
                        <button class="finalizar-btn">Finalizar</button>
                        <button class="continuar-btn">Continuar comprando</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modalCompra" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div class="modal-info">
                <img src="img/produtoDOg5.png" alt="Produto" class="modal-img" id="modalImg">
                <div class="modal-text">
                    <h2 id="modalNome">Nome do produto</h2>
                    <p id="modalDesc">Descrição do produto</p>
                    <p id="modalPreco">12</p>
                    <div class="modal-buttons">
                        <button class="finalizar-btn">Finalizar</button>
                        <button class="continuar-btn">Continuar comprando</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modalCompra" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <div class="modal-info">
                <img src="img/produtoDog6.png" alt="Produto" class="modal-img" id="modalImg">
                <div class="modal-text">
                    <h2 id="modalNome">Nome do produto</h2>
                    <p id="modalDesc">Descrição do produto</p>
                    <p id="modalPreco">12</p>
                    <div class="modal-buttons">
                        <button class="finalizar-btn">Finalizar</button>
                        <button class="continuar-btn">Continuar comprando</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- carrinho -->
    <div id="cart-icon-container">
        <img src="img/cartIcon.png" alt="cartIcon" class="cartIcon">
        <span id="cart-count"></span>
    </div>

    <!-- Carrinho -->
    <div id="cart-container">
        <div class="cart-header">
            <h3>Seu Carrinho</h3>
            <span id="close-cart">&times;</span>
        </div>
        <ul id="cart-items"></ul>
        <button id="checkout-button">Finalizar Compra</button>
    </div>

    <form action="./pagamento/index.php" method="post">
    <div id="confirmar-compra-modal" class="modal">
        <div class="modal-content">
            <span id="close-confirm-modal" class="close-btn">&times;</span>
            <h3>Confirmar Compra</h3>
            <ul id="confirm-cart-items"></ul> <!-- 🔹 ESSA LISTA PRECISA EXISTIR -->
            <p>Total: <span id="total-price">R$0.00</span></p>
            <input type="hidden" id="total-value" name="total" value="0">
            <button id="confirm-purchase">Pagar</button>
            <button id="cancel-purchase">Cancelar</button>
        </div>
    </div>
    </form>
    

    <!-- Galeria -->
    <div class="gallery-container">
        <h1 class="tituloGaleria">Sua galeria aqui!</h1>
        <main>
            <ul id="gallery-list">
                <li id="lista">
                    <article>
                        <div>
                            <img src="img/galeria1.jpg" alt="teste">
                        </div>
                    </article>
                </li>
                <li id="lista">
                    <article>
                        <div>
                            <img src="img/galeria2.jpg" alt="teste">
                        </div>
                    </article>
                </li>
                <li id="lista">
                    <article>
                        <div>
                            <img src="img/galeria3.jpg" alt="teste">
                        </div>
                    </article>
                </li>
                <li id="lista">
                    <article>
                        <div>
                            <img src="img/galeria4.jpg" alt="teste">
                        </div>
                    </article>
                </li>
                <li id="lista">
                    <article>
                        <div>
                            <img src="img/galeria5.jpg" alt="teste">
                        </div>
                    </article>
                </li>
                <li id="lista">
                    <article>
                        <div>
                            <img src="img/galeria6.jpg" alt="teste">
                        </div>
                    </article>
                </li>
                <li id="lista">
                    <article>
                        <div>
                            <img src="img/galeria7.jpg" alt="teste">
                        </div>
                    </article>
                </li>
                <li id="lista">
                    <article>
                        <div>
                            <img src="img/galeria8.jpg" alt="teste">
                        </div>
                    </article>
                </li>
                <li id="lista">
                    <article>
                        <div>
                            <img src="img/galeria9.jpg" alt="teste">
                        </div>
                    </article>
                </li>
                <li id="lista">
                    <article>
                        <div>
                            <img src="img/galeria10.jpg" alt="teste">
                        </div>
                    </article>
                </li>
            </ul>
        </main>
    </div>

    <!-- comentarios -->
    <div class="testimonial-container">
        <h2 class="testimonial-title">comentários do nossos clientes</h2>
        
        <div class="testimonial-carousel">
            <div class="testimonial-slide active">
                
                <div class="client-rating">★★★★★</div>
                <p class="client-text">"Melhor pet shop da região! Atendimento impecável e muito carinho com os animais. Meu cachorro sempre sai feliz e cheiroso!"</p>
                <p class="client-name">Luna</p>
                <p class="client-role">2 semanas atrás</p>
            </div>
    
            <div class="testimonial-slide">
                
                <div class="client-rating">★★★★☆</div>
                <p class="client-text">"Ótimos produtos e serviços! Só não dou 5 estrelas porque às vezes há fila para o banho e tosa, mas vale a pena esperar."</p>
                <p class="client-name">Henrique</p>
                <p class="client-role">3 meses atrás</p>
            </div>
    
            <div class="testimonial-slide">
                
                <div class="client-rating">★★★★★</div>
                <p class="client-text">"Minha gata é muito bem tratada aqui! A equipe é super cuidadosa e atenciosa. Recomendo para todos os tutores!"</p>
                <p class="client-name">Gabi</p>
                <p class="client-role">4 dias atrás</p>
            </div>
    

        </div>
    
        <div class="dots">
            <span class="dot active" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>            

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
                                <a><img src="./img/logoAlltech.png" class="img-fluid" alt="logo"></a>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script type="module" src="script.js"></script>
</body>
</html>
