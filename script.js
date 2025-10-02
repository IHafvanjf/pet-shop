document.addEventListener("DOMContentLoaded", function () {
    // Navbar
    const navbar = document.querySelector('.navbar');
    const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
    const navLinks = document.querySelector('.nav-links');
    const overlay = document.querySelector('.overlay');
    let isMenuOpen = false;

    // Loader antes da página carregar
    const splash = document.getElementById("splash");
    if (splash) {
        window.addEventListener("load", () => {
            setTimeout(() => {
                splash.style.display = "none";
            }, 3000);
        });
    }
    
     document.addEventListener("DOMContentLoaded", function () {
            const closeCartButton = document.getElementById("close-cart");
            const cartContainer = document.getElementById("cart-container");
        
            closeCartButton.addEventListener("click", function () {
                
                cartContainer?.classList.remove("active");
            });
        });

    // Efeito de scroll na navbar
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar?.classList.add('scrolled');
        } else {
            navbar?.classList.remove('scrolled');
        }
    });

    // Toggle do menu mobile
    function toggleMenu() {
        isMenuOpen = !isMenuOpen;
        mobileNavToggle?.classList.toggle('active');
        navLinks?.classList.toggle('active');
        overlay?.classList.toggle('active');
        document.body.style.overflow = isMenuOpen ? 'hidden' : '';
    }

    mobileNavToggle?.addEventListener('click', toggleMenu);
    overlay?.addEventListener('click', toggleMenu);

    // Fechar menu ao clicar num link
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            if (isMenuOpen) toggleMenu();
        });
    });

    // Fechar menu com tecla ESC
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && isMenuOpen) toggleMenu();
    });

    // Evitar scroll quando o menu estiver aberto
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768 && isMenuOpen) {
            toggleMenu();
        }
    });


// Slide dos produtos para cachorros
var swiperDogs = new Swiper(".mySwiper", {
    slidesPerView: 1,  
    spaceBetween: 20, 
    loop: true, 
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 2, 
        },
        1024: {
            slidesPerView: 3, 
        },
    },
});

// Slide dos produtos para gatos
var mySwiperGatos = new Swiper(".mySwiperGatos", {
    slidesPerView: 1, 
    spaceBetween: 20, 
    loop: true, 
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        640: {
            slidesPerView: 2, 
        },
        1024: {
            slidesPerView: 3,
        },
    },
});


    
    // Modal de compra
    const comprarBtns = document.querySelectorAll(".comprar-btn");
    const modal = document.getElementById("modalCompra");
    const closeBtn = modal?.querySelector(".close-btn");
    const modalImg = document.getElementById("modalImg");
    const modalNome = document.getElementById("modalNome");
    const modalDesc = document.getElementById("modalDesc");
    const modalPreco = document.getElementById("modalPreco");
    const finalizarBtn = document.querySelector(".finalizar-btn");
    const continuarBtn = document.querySelector(".continuar-btn");

    comprarBtns.forEach(btn => {
        btn.addEventListener("click", function () {
            if (!modal) return;
            modalImg.src = this.getAttribute("data-img");
            modalNome.innerText = this.getAttribute("data-nome");
            modalDesc.innerText = this.getAttribute("data-desc");
            modalPreco.innerText = this.getAttribute("data-preco");
            modal.classList.add("show");
            document.body.classList.add("modal-open");
        });
    });

    closeBtn.addEventListener("click", () => {
        modal?.classList.remove("show");
        document.body.classList.remove("modal-open");
    });

    window.addEventListener("click", event => {
        if (event.target === modal) {
            modal?.classList.remove("show");
            document.body.classList.remove("modal-open");
        }
    });

    // Carrinho de compras
    const cartIconContainer = document.getElementById("cart-icon-container");
    const cartContainer = document.getElementById("cart-container");
    const cartItemsList = document.getElementById("cart-items");
    const checkoutButton = document.getElementById("checkout-button");
    const cartCount = document.getElementById("cart-count");

    // Modal de confirmação da compra
    const confirmModal = document.getElementById("confirmar-compra-modal");
    const confirmCartItemsList = document.getElementById("confirm-cart-items");
    const totalPriceElement = document.getElementById("total-price");
    let totalValueInput = document.getElementById("total-value");
    const closeConfirmModal = document.getElementById("close-confirm-modal");
    const confirmPurchaseButton = document.getElementById("confirm-purchase");
    const cancelPurchaseButton = document.getElementById("cancel-purchase");

    let cart = [];

    // Alternar visibilidade do carrinho
    cartIconContainer?.addEventListener("click", function () {
        cartContainer?.classList.toggle("active");
    });

    function addToCart(productTitle, productImage, productPrice) {
        
        const existingProduct = cart.find(item => item.title === productTitle);
        if (existingProduct) {
            existingProduct.quantity++;
        } else {
            cart.push({ title: productTitle, image: productImage, quantity: 1, price: productPrice });
        }
        updateCart();
    }

    function removeFromCart(productTitle) {
        cart = cart.filter(item => item.title !== productTitle);
        updateCart();
    }

    function updateCart() {
        if (!cartItemsList || !cartCount) return;
        
        cartItemsList.innerHTML = "";
        cartCount.innerText = cart.length;

        if (cart.length === 0) {
            cartContainer?.classList.remove("active");
        }

        cart.forEach(item => {
            const li = document.createElement("li");
            li.innerHTML = `
                <div class="cart-item">
                    <img src="${item.image}" alt="${item.title}" class="cart-item-image">
                    <div class="cart-item-text">
                        <span class="cart-item-title">${item.title}</span>
                        <span class="cart-item-quantity">x${item.quantity}</span>
                        <span class="cart-item-price">R$${(item.price * item.quantity).toFixed(2)}</span>
                    </div>
                    <button class="remove-btn" data-title="${item.title}">
                        <img src="img/lixeira.png" alt="Remover">
                    </button>
                </div>
            `;
            cartItemsList.appendChild(li);
        });

        document.querySelectorAll(".remove-btn").forEach(btn => {
            btn.addEventListener("click", function () {
                removeFromCart(this.getAttribute("data-title"));
            });
        });
    }

    continuarBtn.addEventListener("click", function () {
        const productTitle = modalNome?.innerText;
        const productImage = modalImg?.src;
        const productPrice = modalPreco?.innerText;

        if (!productTitle || !productImage || isNaN(productPrice)) {
            console.error("Erro ao adicionar item ao carrinho.");
            return;
        }
       
        addToCart(productTitle, productImage, productPrice);
        
        modal?.classList.remove("show");
        document.body.classList.remove("modal-open");
    });

    checkoutButton?.addEventListener("click", function () {
        if (cart.length === 0) {
            alert("Seu carrinho está vazio!");
            return;
        }

        confirmCartItemsList.innerHTML = "";
        let totalPrice = 0;

        cart.forEach(item => {
            totalPrice += item.price * item.quantity;
            const li = document.createElement("li");
            li.innerHTML = `
                <div class="cart-item">
                    <img src="${item.image}" alt="${item.title}" class="cart-item-image">
                    <div class="cart-item-text">
                        <span class="cart-item-title">${item.title}</span>
                        <span class="cart-item-quantity">x${item.quantity}</span>
                        <span class="cart-item-price">R$${(item.price * item.quantity).toFixed(2)}</span>
                    </div>
                </div>
            `;
            confirmCartItemsList.appendChild(li);
        });

        totalPriceElement.innerText = `R$${totalPrice.toFixed(2)}`;
        totalValueInput.value = totalPrice.toFixed(2);
        confirmModal.classList.add("show");
        document.body.classList.add("modal-open");

        cartContainer?.classList.remove("active");
    });

    confirmPurchaseButton?.addEventListener("click", function () {
        window.location.href = "pagamento/index.php"; 
    });

    cancelPurchaseButton?.addEventListener("click", function () {
        confirmModal?.classList.remove("show");
        document.body.classList.remove("modal-open");
    });
});

let slideIndex = 1;
        showSlides(slideIndex);

        function changeSlide(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let slides = document.getElementsByClassName("testimonial-slide");
            let dots = document.getElementsByClassName("dot");
            
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            
            for (let i = 0; i < slides.length; i++) {
                slides[i].classList.remove("active");
            }
            
            for (let i = 0; i < dots.length; i++) {
                dots[i].classList.remove("active");
            }
            
            slides[slideIndex - 1].classList.add("active");
            dots[slideIndex - 1].classList.add("active");
        }

        setInterval(() => {
            changeSlide(1);
        }, 5000);

       