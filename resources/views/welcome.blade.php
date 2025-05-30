<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glamour Studio - Salón de Belleza</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Animaciones personalizadas */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }

        /* Efecto hover para tarjetas de servicios */
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Estilo para el botón de WhatsApp flotante */
        .whatsapp-float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 30px;
            right: 30px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .whatsapp-float:hover {
            background-color: #128C7E;
            transform: scale(1.1);
        }
    </style>
</head>

<body class="font-sans bg-gray-50 text-gray-800">
    <!-- WhatsApp flotante -->
    <a href="https://wa.me/50251671135" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>


    <!-- Header/Navbar -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <img src="{{ asset('img/logo_transparente.png') }}" alt="Logo" class="h-12 w-12 object-contain">
                <h1 class="text-2xl font-bold text-pink-600">Salon de belleza Nauvoo</h1>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#inicio" class="text-pink-600 font-medium hover:text-pink-800 transition">Inicio</a>
                <a href="#servicios" class="text-gray-600 hover:text-pink-600 transition">Servicios</a>
                <a href="#galeria" class="text-gray-600 hover:text-pink-600 transition">Galería</a>
                <a href="#nosotros" class="text-gray-600 hover:text-pink-600 transition">Nosotros</a>
                <a href="#contacto" class="text-gray-600 hover:text-pink-600 transition">Contacto</a>
            </nav>

            <button id="menu-btn" class="md:hidden text-gray-600 focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Menú móvil -->
        <div id="mobile-menu" class="hidden md:hidden bg-white py-4 px-4 shadow-lg">
            <a href="#inicio" class="block py-2 text-pink-600 font-medium">Inicio</a>
            <a href="#servicios" class="block py-2 text-gray-600 hover:text-pink-600">Servicios</a>
            <a href="#galeria" class="block py-2 text-gray-600 hover:text-pink-600">Galería</a>
            <a href="#nosotros" class="block py-2 text-gray-600 hover:text-pink-600">Nosotros</a>
            <a href="#contacto" class="block py-2 text-gray-600 hover:text-pink-600">Contacto</a>
        </div>
    </header>


    <!-- Hero Section -->
    @include('secciones.header')

    <!-- Servicios -->
    @include('secciones.servicios')

    <!-- Galería -->
    @include('secciones.galeria')
    <!-- Sobre Nosotros -->
   @include('secciones.sobreNosotros')

    <!-- Contacto -->
    @include('secciones.contacto')

    <!-- MAPA -->
    @include('secciones.mapa')
    <!-- Footer -->
   @include('secciones.footer')


    <script>
        // Menú móvil
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Animaciones al hacer scroll
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.animate-fade-in');

            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const screenPosition = window.innerHeight / 1.3;

                if (elementPosition < screenPosition) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        };

        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);

        // Formulario de contacto
        const contactForm = document.getElementById('contact-form');

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Aquí iría la lógica para enviar el formulario
            alert('Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.');
            contactForm.reset();
        });

        // Smooth scrolling para los enlaces del menú
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });

                    // Cerrar menú móvil si está abierto
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
    </script>
</body>

</html>
