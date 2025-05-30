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
