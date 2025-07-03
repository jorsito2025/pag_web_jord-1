<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jordan Rojas y León - Tienda Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 font-inter text-gray-800 antialiased">
    
    <header class="bg-blue-700 text-white p-4 shadow-lg sticky top-0 z-40">
        <div class="container mx-auto flex flex-wrap justify-between items-center">
            <div class="logo">
                <h1 class="text-3xl font-bold">Jordan Rojas y León</h1>
            </div>
            <nav class="mt-4 md:mt-0">
                <ul class="flex space-x-6">
                    <li><a href="#inicio" class="hover:text-blue-200 transition duration-300">Inicio</a></li>
                    <li><a href="#productos" class="hover:text-blue-200 transition duration-300">Productos</a></li>
                    <li><a href="#promociones" id="link-ofertas" class="hover:text-blue-200 transition duration-300">Ofertas</a></li> <li><a href="#contacto" class="hover:text-blue-200 transition duration-300">Contacto</a></li>
                </ul>
            </nav>
            <div class="user-area flex items-center space-x-4 mt-4 md:mt-0">
                <input type="search" placeholder="Buscar..." class="bg-blue-600 text-white placeholder-blue-200 px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-300">
                <button class="bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600 transition duration-300">Login</button>
                <button class="bg-yellow-500 text-white px-4 py-2 rounded-full hover:bg-yellow-600 transition duration-300">
                    <i class="fas fa-shopping-cart mr-2"></i>Carrito
                </button>
                <a href="admin.html" class="bg-purple-600 text-white px-4 py-2 rounded-full hover:bg-purple-700 transition duration-300 ml-4">
                    Administrar Productos
                </a>
            </div>
        </div>
    </header>

    <main class="container mx-auto my-8 p-4">
        <section id="inicio" class="section-container">
            <h2 class="text-4xl font-bold text-center text-blue-600 mb-8">Novedades y Destacados</h2>
            <div class="content-wrapper flex flex-col md:flex-row gap-8">
                <aside class="sidebar w-full md:w-1/4 bg-blue-50 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-blue-800 mb-4 border-b pb-2">Categorías</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Smartphones</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Laptops</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Tablets</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Accesorios</a></li>
                        <li><a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Audio</a></li>
                    </ul>
                </aside>
                <div class="main-content w-full md:w-3/4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="card bg-gradient-to-br from-blue-100 to-white p-6 rounded-lg shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-shipping-fast text-blue-600 text-4xl mb-4"></i>
                        <h4 class="text-xl font-semibold text-blue-800 mb-2">Envío Rápido</h4>
                        <p class="text-gray-700">Entregamos tus productos en tiempo récord.</p>
                    </div>
                    <div class="card bg-gradient-to-br from-blue-100 to-white p-6 rounded-lg shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-shield-alt text-blue-600 text-4xl mb-4"></i>
                        <h4 class="text-xl font-semibold text-blue-800 mb-2">Garantía Asegurada</h4>
                        <p class="text-gray-700">Todos nuestros productos con garantía de fábrica.</p>
                    </div>
                    <div class="card bg-gradient-to-br from-blue-100 to-white p-6 rounded-lg shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                        <i class="fas fa-headset text-blue-600 text-4xl mb-4"></i>
                        <h4 class="text-xl font-semibold text-blue-800 mb-2">Soporte 24/7</h4>
                        <p class="text-gray-700">Atención al cliente disponible cuando la necesites.</p>
                    </div>
                    <div class="col-span-full mt-8">
                        <h3 class="text-2xl font-bold text-center text-blue-600 mb-4">¡Descubre más con nuestro video!</h3>
                        <div class="relative" style="padding-bottom: 56.25%;">
                            <iframe
                                src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                                class="absolute top-0 left-0 w-full h-full rounded-lg shadow-lg"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="productos" class="section-container mt-12">
            <h2 class="text-4xl font-bold text-center text-blue-600 mb-8">Nuestros Productos</h2>
            <div id="product-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <p class="col-span-full text-center text-gray-600">Cargando productos...</p>
            </div>
        </section>

        <section id="promociones" class="section-container mt-12">
            <h2 class="text-4xl font-bold text-center text-blue-600 mb-8">Promociones Exclusivas</h2>
            <div class="promotions-grid">
                <div class="promo-card bg-gradient-to-br from-green-50 to-white p-6 rounded-lg shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                    <img src="https://placehold.co/300x200/D1FAE5/000000?text=Promo+1" alt="Promoción 1" class="mb-4 rounded-md">
                    <h3 class="text-2xl font-bold text-green-700 mb-2">Descuento de Primavera</h3>
                    <p class="text-gray-700 mb-4">Hasta 30% de descuento en smartphones seleccionados.</p>
                    <a href="#" class="promo-button bg-green-500 text-white px-6 py-2 rounded-full hover:bg-green-600 transition duration-300">Ver Ofertas</a>
                </div>
                <div class="promo-card bg-gradient-to-br from-yellow-50 to-white p-6 rounded-lg shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                    <img src="https://placehold.co/300x200/FEF9C3/000000?text=Promo+2" alt="Promoción 2" class="mb-4 rounded-md">
                    <h3 class="text-2xl font-bold text-yellow-700 mb-2">Envío Gratis</h3>
                    <p class="text-gray-700 mb-4">En todas las compras superiores a $100. ¡Aprovecha ahora!</p>
                    <a href="#" class="promo-button bg-yellow-500 text-gray-800 px-6 py-2 rounded-full hover:bg-yellow-600 transition duration-300">Comprar</a>
                </div>
            </div>
        </section>

        <section id="contacto" class="section-container mt-12">
            <h2 class="text-4xl font-bold text-center text-blue-600 mb-8">Contáctanos</h2>
            <div class="contact-content flex flex-col md:flex-row gap-8">
                <div class="contact-form w-full md:w-2/3 bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">Envíanos un Mensaje</h3>
                    <form>
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-semibold mb-2">Nombre:</label>
                            <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
                            <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 font-semibold mb-2">Mensaje:</label>
                            <textarea id="message" name="message" rows="5" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                        </div>
                        <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition duration-300 shadow-md">Enviar Mensaje</button>
                    </form>
                </div>
                <div class="contact-info w-full md:w-1/3 bg-white p-8 rounded-lg shadow-md">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-6">Información de Contacto</h3>
                    <p class="text-gray-700 mb-4"><i class="fas fa-map-marker-alt text-blue-600 mr-3"></i>Av. Siempre Viva 742, Santiago, Chile</p>
                    <p class="text-gray-700 mb-4"><i class="fas fa-phone-alt text-blue-600 mr-3"></i>+56 9 1234 5678</p>
                    <p class="text-gray-700 mb-4"><i class="fas fa-envelope text-blue-600 mr-3"></i>contacto@jordanrojasleon.cl</p>
                    <div class="social-media flex justify-center space-x-6 mt-6">
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition duration-300 text-3xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition duration-300 text-3xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-blue-600 hover:text-blue-800 transition duration-300 text-3xl"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="map-placeholder mt-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.6966140507234!2d-70.5739347!3d-33.513437199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d0115006093d%3A0x6b0c201d4b6b1b6!2sAv.%20Siempre%20Viva%20742%2C%20Pe%C3%B1alol%C3%A9n%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses-419!2scl!4v1700000000000!5m2!1ses-419!2scl" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 text-gray-300 p-8 mt-12 shadow-inner">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="footer-content text-center md:text-left">
                <p>© 2025 Jordan Rojas y León Tienda. Todos los derechos reservados.</p>
                <p class="text-sm mt-2">Hecho con ❤️ en Peñalolén, Chile.</p>
            </div>
            <div class="footer-links flex flex-wrap justify-center md:justify-start gap-4">
                <a href="#" class="hover:text-white transition duration-300">Política de Privacidad</a>
                <a href="#" class="hover:text-white transition duration-300">Términos de Servicio</a>
                <a href="#" class="hover:text-white transition duration-300">Preguntas Frecuentes</a>
            </div>
            <div class="newsletter-signup text-center md:text-right">
                <h4 class="text-xl font-semibold text-white mb-3">Suscríbete a nuestro Newsletter</h4>
                <form class="flex flex-col sm:flex-row gap-3">
                    <input type="email" placeholder="Tu email" class="bg-gray-700 text-white placeholder-gray-400 px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition duration-300">Suscribirse</button>
                </form>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/56912345678" target="_blank" class="whatsapp-bubble">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="script.js"></script>
</body>
</html>