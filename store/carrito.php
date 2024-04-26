<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Carrito de Compras</title>
</head>

<body>
    <!-- Barra de navegación -->
    <header>
        <nav class="navbar-top">
            <ul class="navbar-top-ul">
                <li class="navbar-top-item">
                    <a href="#" class="nav-top-links">Carrito</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Fin de la barra de navegación -->

    <!-- Contenido principal -->
    <section class="section">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-10">
                    <h1 class="title">Carrito de Compras</h1>
                    <div id="cart-content">
                        <!-- Aquí se mostrarán los productos agregados al carrito -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin del contenido principal -->

    <!-- JavaScript -->
    <script>
        // Función para mostrar los productos agregados al carrito
        function showCartItems() {
            // Obtener los productos del carrito almacenados en localStorage
            var cartItems = JSON.parse(localStorage.getItem('cartItems'));

            // Verificar si hay productos en el carrito
            if (cartItems && cartItems.length > 0) {
                var cartContent = document.getElementById('cart-content');

                // Limpiar cualquier contenido anterior en el carrito
                cartContent.innerHTML = '';

                // Crear un elemento <ul> para mostrar los productos
                var productList = document.createElement('ul');
                productList.classList.add('cart-product-list');

                // Iterar sobre cada producto en el carrito
                cartItems.forEach(function (item) {
                    // Crear un elemento <li> para cada producto
                    var productItem = document.createElement('li');
                    productItem.classList.add('cart-product-item');
                    productItem.textContent = item.quantity + 'x ' + item.color + ', ' + item.size;

                    // Agregar el elemento <li> al <ul> de productos
                    productList.appendChild(productItem);
                });

                // Agregar la lista de productos al contenedor del carrito
                cartContent.appendChild(productList);
            } else {
                // Si no hay productos en el carrito, mostrar un mensaje
                document.getElementById('cart-content').textContent = 'El carrito está vacío.';
            }
        }

        // Llamar a la función para mostrar los productos del carrito cuando la página se cargue
        window.onload = function () {
            showCartItems();
        };
    </script>
</body>

</html>
