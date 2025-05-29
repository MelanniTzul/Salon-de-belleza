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
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        .delay-100 { animation-delay: 0.1s; }
        .delay-200 { animation-delay: 0.2s; }
        .delay-300 { animation-delay: 0.3s; }

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
                <i class="fas fa-spa text-3xl text-pink-500 mr-2"></i>
                <h1 class="text-2xl font-bold text-pink-600">Salon de belleza</h1>
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
    <section id="inicio" class="relative bg-gradient-to-r from-pink-100 to-purple-100 py-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0 animate-fade-in">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Tu belleza es nuestra pasión</h2>
                <p class="text-lg text-gray-600 mb-6">En Glamour Studio te ayudamos a resaltar tu belleza natural con nuestros servicios profesionales de estética y bienestar.</p>
                <div class="flex space-x-4">
                    <a href="#contacto" class="bg-pink-600 hover:bg-pink-700 text-white px-6 py-3 rounded-full font-medium transition shadow-lg">Reserva ahora</a>
                    <a href="#servicios" class="border-2 border-pink-600 text-pink-600 hover:bg-pink-600 hover:text-white px-6 py-3 rounded-full font-medium transition">Nuestros servicios</a>
                </div>
            </div>
            <div class="md:w-1/2 animate-fade-in delay-100">
                <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" alt="Salón de belleza" class="rounded-lg shadow-2xl w-full h-auto max-h-[500px] object-cover">
            </div>
        </div>
    </section>


    <!-- Servicios -->
    <section id="servicios" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16 animate-fade-in">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Nuestros Servicios</h2>
                <div class="w-20 h-1 bg-pink-500 mx-auto mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Ofrecemos una amplia gama de servicios de belleza y bienestar realizados por profesionales certificados.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Servicio 1 -->
                <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300 hover:shadow-xl animate-fade-in delay-100">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1886&q=80" alt="Corte de cabello" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-scissors text-pink-500 mr-2"></i>
                            <h3 class="text-xl font-semibold">Cortes y Peinados</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Desde cortes clásicos hasta los estilos más modernos, nuestros estilistas te asesorarán para encontrar el look perfecto para ti.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-pink-600">Desde $250</span>
                            <button class="text-pink-600 hover:text-pink-800 font-medium">Más info</button>
                        </div>
                    </div>
                </div>

                <!-- Servicio 2 -->
                <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300 hover:shadow-xl animate-fade-in delay-200">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1780&q=80" alt="Coloración" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-paint-brush text-pink-500 mr-2"></i>
                            <h3 class="text-xl font-semibold">Coloración</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Tintes, mechas, balayage y más. Utilizamos productos de alta calidad que protegen tu cabello mientras le dan vida y color.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-pink-600">Desde $500</span>
                            <button class="text-pink-600 hover:text-pink-800 font-medium">Más info</button>
                        </div>
                    </div>
                </div>

                <!-- Servicio 3 -->
                <div class="service-card bg-white rounded-lg overflow-hidden shadow-md transition duration-300 hover:shadow-xl animate-fade-in delay-300">
                    <div class="h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1780&q=80" alt="Tratamientos faciales" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-spa text-pink-500 mr-2"></i>
                            <h3 class="text-xl font-semibold">Tratamientos Faciales</h3>
                        </div>
                        <p class="text-gray-600 mb-4">Rejuvenece tu piel con nuestros tratamientos faciales personalizados según tu tipo de piel y necesidades específicas.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-bold text-pink-600">Desde $600</span>
                            <button class="text-pink-600 hover:text-pink-800 font-medium">Más info</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#" class="inline-block border-2 border-pink-600 text-pink-600 hover:bg-pink-600 hover:text-white px-6 py-3 rounded-full font-medium transition">Ver todos los servicios</a>
            </div>
        </div>
    </section>


    <!-- Galería -->
    <section id="galeria" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Nuestra Galería</h2>
                <div class="w-20 h-1 bg-pink-500 mx-auto mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Algunos de nuestros trabajos y el ambiente de nuestro salón.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1595476108010-b4d1f102b1b1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1888&q=80" alt="Trabajo 1" class="w-full h-48 object-cover hover:scale-105 transition duration-500">
                </div>
                <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1512201076880-543b274a4a1b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" alt="Trabajo 2" class="w-full h-48 object-cover hover:scale-105 transition duration-500">
                </div>
                <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1559599101-f09722fb4948?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1869&q=80" alt="Trabajo 3" class="w-full h-48 object-cover hover:scale-105 transition duration-500">
                </div>
                <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1780&q=80" alt="Trabajo 4" class="w-full h-48 object-cover hover:scale-105 transition duration-500">
                </div>
                <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1886&q=80" alt="Trabajo 5" class="w-full h-48 object-cover hover:scale-105 transition duration-500">
                </div>
                <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1519699047748-de8e457a634e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1780&q=80" alt="Trabajo 6" class="w-full h-48 object-cover hover:scale-105 transition duration-500">
                </div>
                <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" alt="Trabajo 7" class="w-full h-48 object-cover hover:scale-105 transition duration-500">
                </div>
                <div class="overflow-hidden rounded-lg shadow-md hover:shadow-xl transition duration-300">
                    <img src="https://images.unsplash.com/photo-1492106087820-71f1a00d2b11?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" alt="Trabajo 8" class="w-full h-48 object-cover hover:scale-105 transition duration-500">
                </div>
            </div>
        </div>
    </section>


    <!-- Sobre Nosotros -->
    <section id="nosotros" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <img src="https://images.unsplash.com/photo-1580618672591-ebea9e167ad7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" alt="Nuestro salón" class="rounded-lg shadow-xl w-full">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-6">Sobre Glamour Studio</h2>
                    <div class="w-20 h-1 bg-pink-500 mb-6"></div>
                    <p class="text-gray-600 mb-4">Fundado en 2010, Glamour Studio nació con la visión de crear un espacio donde la belleza y el bienestar se fusionan para ofrecer experiencias únicas a nuestros clientes.</p>
                    <p class="text-gray-600 mb-6">Nuestro equipo está compuesto por profesionales altamente capacitados y apasionados por su trabajo, que se mantienen constantemente actualizados con las últimas técnicas y tendencias en el mundo de la belleza.</p>

                    <div class="grid grid-cols-2 gap-4 mb-6">
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Productos de calidad</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Profesionales certificados</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Ambiente higiénico</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-pink-500 mr-2"></i>
                            <span class="text-gray-700">Atención personalizada</span>
                        </div>
                    </div>

                    <a href="#" class="inline-block bg-pink-600 hover:bg-pink-700 text-white px-6 py-3 rounded-full font-medium transition shadow-lg">Conoce nuestro equipo</a>
                </div>
            </div>
        </div>
    </section>





    <!-- Contacto -->
    <section id="contacto" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Contáctanos</h2>
                <div class="w-20 h-1 bg-pink-500 mx-auto mb-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto">Estamos aquí para responder todas tus preguntas y ayudarte a reservar tu cita.</p>
            </div>

            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-6">Información de contacto</h3>

                        <div class="mb-6">
                            <div class="flex items-start mb-4">
                                <i class="fas fa-map-marker-alt text-pink-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-medium text-gray-800">Dirección</h4>
                                    <p class="text-gray-600">Av. Principal 123, Col. Centro, Ciudad de México</p>
                                </div>
                            </div>

                            <div class="flex items-start mb-4">
                                <i class="fas fa-phone-alt text-pink-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-medium text-gray-800">Teléfono</h4>
                                    <p class="text-gray-600">+52 55 1234 5678</p>
                                </div>
                            </div>

                            <div class="flex items-start mb-4">
                                <i class="fas fa-envelope text-pink-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-medium text-gray-800">Email</h4>
                                    <p class="text-gray-600">info@glamourstudio.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="fas fa-clock text-pink-500 mt-1 mr-3"></i>
                                <div>
                                    <h4 class="font-medium text-gray-800">Horario</h4>
                                    <p class="text-gray-600">Lunes a Sábado: 9:00 am - 8:00 pm</p>
                                    <p class="text-gray-600">Domingo: 10:00 am - 4:00 pm</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h4 class="font-medium text-gray-800 mb-3">Síguenos</h4>
                            <div class="flex space-x-4">
                                <a href="#" class="w-10 h-10 rounded-full bg-pink-500 text-white flex items-center justify-center hover:bg-pink-600 transition">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-pink-500 text-white flex items-center justify-center hover:bg-pink-600 transition">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="w-10 h-10 rounded-full bg-pink-500 text-white flex items-center justify-center hover:bg-pink-600 transition">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2">
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold mb-6">Envía un mensaje</h3>
                        <form id="contact-form">
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 mb-2">Nombre completo</label>
                                <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" required>
                            </div>

                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 mb-2">Email</label>
                                <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" required>
                            </div>

                            <div class="mb-4">
                                <label for="phone" class="block text-gray-700 mb-2">Teléfono</label>
                                <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent" required>
                            </div>

                            <div class="mb-4">
                                <label for="service" class="block text-gray-700 mb-2">Servicio de interés</label>
                                <select id="service" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent">
                                    <option value="">Selecciona un servicio</option>
                                    <option value="corte">Corte de cabello</option>
                                    <option value="color">Coloración</option>
                                    <option value="facial">Tratamiento facial</option>
                                    <option value="manicure">Manicure/Pedicure</option>
                                    <option value="maquillaje">Maquillaje profesional</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="message" class="block text-gray-700 mb-2">Mensaje</label>
                                <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-transparent"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-pink-600 hover:bg-pink-700 text-white px-6 py-3 rounded-lg font-medium transition shadow-lg">Enviar mensaje</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Mapa -->
    <div class="h-96 w-full">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.8887842830426!2d-99.1687499246406!3d19.42702048186818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff35f5bd1563%3A0x6c366f0e2de02ff7!2sEl%20%C3%81ngel%20de%20la%20Independencia!5e0!3m2!1ses-419!2smx!4v1689362531833!5m2!1ses-419!2smx" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-spa text-2xl text-pink-500 mr-2"></i>
                        <h3 class="text-xl font-bold">Glamour Studio</h3>
                    </div>
                    <p class="text-gray-400">Tu belleza es nuestra pasión. Ofrecemos servicios profesionales de estética y bienestar.</p>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Enlaces rápidos</h4>
                    <ul class="space-y-2">
                        <li><a href="#inicio" class="text-gray-400 hover:text-pink-500 transition">Inicio</a></li>
                        <li><a href="#servicios" class="text-gray-400 hover:text-pink-500 transition">Servicios</a></li>
                        <li><a href="#galeria" class="text-gray-400 hover:text-pink-500 transition">Galería</a></li>
                        <li><a href="#nosotros" class="text-gray-400 hover:text-pink-500 transition">Sobre nosotros</a></li>
                        <li><a href="#contacto" class="text-gray-400 hover:text-pink-500 transition">Contacto</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Servicios</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-pink-500 transition">Cortes y peinados</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-pink-500 transition">Coloración</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-pink-500 transition">Tratamientos faciales</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-pink-500 transition">Manicure/Pedicure</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-pink-500 transition">Maquillaje</a></li>
                    </ul>
                </div>

                <!-- <div>
                    <h4 class="text-lg font-semibold mb-4">Newsletter</h4>
                    <p class="text-gray-400 mb-4">Suscríbete para recibir promociones y consejos de belleza.</p>
                    <form class="flex">
                        <input type="email" placeholder="Tu email" class="px-4 py-2 rounded-l-lg focus:outline-none text-gray-800 w-full">
                        <button type="submit" class="bg-pink-600 hover:bg-pink-700 px-4 py-2 rounded-r-lg transition">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div> -->
            </div>

            <div class="border-t border-gray-700 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">© 2023 Glamour Studio. Todos los derechos reservados.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-pink-500 transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-gray-400 hover:text-pink-500 transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-pink-500 transition"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="text-gray-400 hover:text-pink-500 transition"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>


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

                if(elementPosition < screenPosition) {
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
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if(targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });

                    // Cerrar menú móvil si está abierto
                    if(!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                }
            });
        });
    </script>
</body>
</html>

