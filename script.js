// script.js

document.addEventListener('DOMContentLoaded', () => {
    const productListContainer = document.getElementById('product-list');
    const linkOfertas = document.getElementById('link-ofertas'); // Obtener el enlace de ofertas

    // Función para obtener y mostrar productos en la página principal
    const loadProducts = async (onlyOffers = false) => {
        // Mostrar un mensaje de carga inicial
        productListContainer.innerHTML = `
            <div class="col-span-full text-center py-8 text-gray-500">
                <i class="fas fa-spinner fa-spin text-3xl mb-4"></i>
                <p>Cargando productos...</p>
            </div>
        `;

        try {
            // Asegúrate de que esta URL sea correcta. Si get_products.php está en otro subdirectorio, ajústalo.
            const response = await fetch('get_products.php'); 
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            const products = await response.json();

            productListContainer.innerHTML = ''; // Limpiar el mensaje de carga

            const productsToDisplay = onlyOffers 
                ? products.filter(product => product.en_oferta)
                : products;

            if (productsToDisplay.length === 0) {
                productListContainer.innerHTML = `
                    <div class="col-span-full text-center py-8 text-gray-500">
                        <p>${onlyOffers ? 'No hay productos en oferta actualmente.' : 'No hay productos disponibles en este momento.'}</p>
                    </div>
                `;
                return;
            }

            productsToDisplay.forEach(product => {
                const productCard = document.createElement('div');
                // Clases de Tailwind CSS para el estilo de la tarjeta del producto
                productCard.className = `
                    bg-white rounded-lg shadow-lg overflow-hidden flex flex-col 
                    transform transition duration-300 hover:scale-105 hover:shadow-xl
                    relative
                    ${product.en_oferta ? 'border-2 border-green-500' : ''}
                `;

                // Formatear precio para la visualización
                const formattedPrice = `$${parseFloat(product.precio).toLocaleString('es-CL', { minimumFractionDigits: 0, maximumFractionDigits: 0 })}`; // Cambiado a 0 decimales

                productCard.innerHTML = `
                    <img src="${product.imagen_url || 'https://placehold.co/400x300?text=No+Image'}" 
                         alt="${product.nombre}" 
                         class="w-full h-48 object-cover">
                    <div class="p-4 flex-grow flex flex-col">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">${product.nombre}</h3>
                        <p class="text-gray-700 text-lg font-bold mb-4 mt-auto">${formattedPrice}</p>
                        ${product.en_oferta ? '<span class="bg-green-500 text-white text-xs font-bold px-2 py-1 rounded-full absolute top-2 right-2">¡OFERTA!</span>' : ''}
                        
                        <ul class="text-sm text-gray-600 mb-4 space-y-1">
                            ${product.atributo1 ? `<li><i class="fas fa-check-circle text-blue-500 mr-2"></i>${product.atributo1}</li>` : ''}
                            ${product.atributo2 ? `<li><i class="fas fa-check-circle text-blue-500 mr-2"></i>${product.atributo2}</li>` : ''}
                            ${product.atributo3 ? `<li><i class="fas fa-check-circle text-blue-500 mr-2"></i>${product.atributo3}</li>` : ''}
                            ${product.atributo4 ? `<li><i class="fas fa-check-circle text-blue-500 mr-2"></i>${product.atributo4}</li>` : ''}
                            ${product.atributo5 ? `<li><i class="fas fa-check-circle text-blue-500 mr-2"></i>${product.atributo5}</li>` : ''}
                            ${product.atributo6 ? `<li><i class="fas fa-check-circle text-blue-500 mr-2"></i>${product.atributo6}</li>` : ''}
                            ${product.atributo7 ? `<li><i class="fas fa-check-circle text-blue-500 mr-2"></i>${product.atributo7}</li>` : ''}
                        </ul>
                        
                        ${product.mas_detalles_url ? `<a href="${product.mas_detalles_url}" target="_blank" class="text-blue-600 hover:underline text-sm block mb-4">Más detalles</a>` : ''}
                    </div>
                    <div class="p-4 bg-gray-50 border-t border-gray-100 mt-auto">
                        <button class="add-to-cart-btn w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition duration-300 flex items-center justify-center">
                            <i class="fas fa-cart-plus mr-2"></i> Añadir al Carrito
                        </button>
                    </div>
                `;
                productListContainer.appendChild(productCard);
            });
            // Las siguientes líneas ya no son necesarias porque el grid se define en el HTML
            // productListContainer.style.display = 'grid';
            // productListContainer.style.gridTemplateColumns = 'repeat(auto-fit, minmax(280px, 1fr))';
            // productListContainer.style.gap = '24px'; // gap-6 de Tailwind
        } catch (error) {
            console.error('Error al cargar productos para la página principal:', error);
            productListContainer.innerHTML = `
                <div class="col-span-full text-center py-8 text-red-600">
                    <p><i class="fas fa-exclamation-circle mr-2"></i>Error al cargar productos. Por favor, inténtalo de nuevo más tarde.</p>
                </div>
            `;
        }
    };

    // Cargar todos los productos al inicio
    loadProducts(false);

    // Evento para el enlace de "Ofertas"
    linkOfertas.addEventListener('click', (event) => {
        event.preventDefault(); // Evitar el comportamiento por defecto del enlace
        loadProducts(true); // Cargar solo productos en oferta
        // Opcional: Desplazarse a la sección de productos si no está visible
        document.getElementById('productos').scrollIntoView({ behavior: 'smooth' });
    });
});