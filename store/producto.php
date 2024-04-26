<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <!-- Barra de navegación -->
    <header>
        <nav class="navbar-top">
            <ul class="navbar-top-ul">
               <li class="navbar-top-item">
                   <a class="nav-top-links" href="#">Bienvenido <?php echo $_GET['nombre']; ?></a>
               </li>
                <li class="navbar-top-item">
                    <a href="login.html" class="navbar-top-links">Cerrar sesión</a>
                </li>
                <li class="navbar-top-item">
                    <a href="#" class="navbar-top-links">
                        <i class="zmdi zmdi-shopping-cart"></i> Carrito
                        <!-- <i class="zmdi zmdi-chevron-down"></i> -->
                    </a>
                </li>
            </ul>
        </nav>
        <nav class="navbar">
            <header class="nabvar-mobile is-size-5-mobile">
                <a class="navbar-mobile-link has-text-white" href="#" id="btn-mobile"><i class="zmdi zmdi-menu"></i></a>
                <a class="navbar-mobile-link has-text-white" href="index.html">Avenue Fashion</a>
                <a class="navbar-mobile-link has-text-white" href="#"><i class="zmdi zmdi-shopping-cart"></i> Vacio</a>
            </header>
            <nav class="nav-menu --nav-dark-light" id="mySidenav">
                <form class="form-group " action="#">
                    <div class="form-group-container">
                        <span class="form-group-icon"><i class="zmdi zmdi-search"></i></span>
                        <input type="text" class="form-group-input" placeholder="Buscar...">
                    </div>
                </form>

                <a class="is-hidden-mobile brand is-uppercase has-text-weight-bold has-text-dark" href="index.html">Avenue
                    Fashion</a>
                <ul class="nav-menu-ul">
                    <li class="nav-menu-item" id="men">
                        <a class="nav-menu-link link-submenu active" href="#">Hombre <i
                                class="zmdi zmdi-chevron-down"></i></a>
                        <div class="container-sub-menu">
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                    <a class="nav-menu-link" href="#">
                                        <strong>Casual</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisas Polo</a>
                                        </li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item"><a class="nav-menu-link" href="#">
                                        <strong>Formal</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Trajes</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="ads is-hidden-touch">
                                <h1 class="ads-h1">Ofertas de Verano</h1>
                                <h2 class="ads-h2">Desde el 50% de descuento</h2>
                            </div>
                        </div>
                    </li>
                    <li class="nav-menu-item" id="women">
                        <a href="#" class="nav-menu-link link-submenu">Mujer <i class="zmdi zmdi-chevron-down"></i> </a>
                        <div class="container-sub-menu">

                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                    <a class="nav-menu-link" href="#">
                                        <strong>Casual</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisas Polo</a>
                                        </li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item"><a class="nav-menu-link" href="#">
                                        <strong>Formal</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Trajes</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="ads is-hidden-touch">
                                <h1 class="ads-h1">Ofertas de Verano</h1>
                                <h2 class="ads-h2">Desde el 50% de descuento</h2>
                            </div>
                        </div>
                    </li>
                    <li class="nav-menu-item"><a href="brand.html" class="nav-menu-link">La Marca</a></li>
                    <li class="nav-menu-item"><a href="lookbook.html" class="nav-menu-link">Look Book</a></li>
                </ul>
            </nav>
        </nav>
    </header>
    <!-- Banner -->
    <div class="banner banner-second">
        <div class="banner-container ">
            <h1>La marca</h1>
            <h2>Slogan de la compañia</h2>
        </div>
    </div>


    <div class="container">
        <div class="columns">
            <div class="column is-two-fifths-desktop">
                <div class="slider" id="slider">
                    <div class="slider-img-container">
                        <img src="img/item-1.png" alt="camiseta" class="active slider-item">
                    </div>
                    <div class="slider-img-container">
                        <img src="img/item-2.png" alt="camiseta" class="slider-item">
                    </div>
                    <div class="slider-img-container">
                        <img src="img/item-5.png" alt="camiseta" class="slider-item">
                    </div>
                    <div class="slider-button-left slider-buttons" onclick="previus()">
                        <i class="zmdi zmdi-chevron-left zmdi-hc-3x"></i>
                    </div>
                    <div class="slider-button-right slider-buttons" onclick="next()">
                        <i class="zmdi zmdi-chevron-right zmdi-hc-3x"></i>
                    </div>
                </div>
            </div>
            <div class="column">
                <h3 class="is-size-4">Classic Sweatshirt</h3>
                <div class="course-rating-container">
                    <div class="rating-stars" style="--rating: 86%">
                    </div>
                </div>
                <p class=""> 3 comentarios | Compartir: <a class="icon-socials" href="#"><i
                            class="zmdi zmdi-facebook"></i></a>
                    <a class="icon-socials" href="#"><i class="zmdi zmdi-twitter"></i></a>
                    <a class="icon-socials" href="#"><i class="zmdi zmdi-instagram"></i></a>
                    <a class="icon-socials" href="#"><i class="zmdi zmdi-pinterest"></i></a>
                    <a class="icon-socials" href="#"><i class="zmdi zmdi-email"></i></a>
                </p>
                <h2 class="price is-size-4"><sup>$</sup>89.99</h2>
                <p class="has-text-grey"> <strong>Disponibilidad:</strong> En stock</p>
                <p class="has-text-grey"><strong>Código del procuto: </strong>#56843265</p>
                <p class="text-default">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure
                    repellat,
                    sequi doloremque accusamus, voluptates nihil commodi necessitatibus, ullam
                    fugit ea a illo maxime repudiandae. Iusto totam nemo nam ullam officiis?</p>
                <form action="#" class="form-control">
                    <div class="columns is-multiline">
                        <div class="column is-one-third">
                            <label for="color">Color</label>
                            <select class="form-control-field" id="color">
                                <option value="#">Color 1</option>
                                <option value="#">Color 2</option>
                                <option value="#">Color 3</option>
                            </select>

                        </div>
                        <div class="column is-one-third">

                            <label for="size">Tamaño</label>
                            <select class="form-control-field" id="size">
                                <option value="#">Tamaño 1</option>
                                <option value="#">Tamaño 2</option>
                                <option value="#">Tamaño 3</option>
                            </select>
                        </div>
                        <div class="column is-one-third">
                            <label for="quality">Cantidad</label>
                            <input class="form-control-field" type="number">
                        </div>
                        <div class="column is-full is-marginless">
                            <button class="btn btn-default btn-outline"><i class="zmdi zmdi-shopping-cart"></i>
                                Agregar al carrito</button>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
    <div class="container">

        <div class="columns is-tablet">
            <div class="column">
                <div class="tabs-container">
                    <ul class="tabs" id="tabs">
                        <li class="tabs-item active-tab">Descripción</li>
                        <li class="tabs-item">Video</li>
                        <li class="tabs-item">Tamaños</li>
                        <li class="tabs-item">Envío y reembolso</li>
                        <li class="tabs-item">Comentarios</li>
                    </ul>
                    <div class="tabs-panels">
                        <div class="tab-panel active-panel">
                            <div class="container">
                                <div class="columns">
                                    <div class="column">
                                        <h2 class="is-size-4">Descripción</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, natus.
                                            Doloribus
                                            neque
                                            tempore
                                            qui saepe voluptate. eserunt nihil doloribus facilis quos eos, tempore magni
                                            iure magnam
                                            impedit
                                            reiciendis eligendi dignissimos.</p>
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus nostrum
                                            ipsam
                                            officiis iste odit. Magnam corporis, assumenda ullam illum at voluptatem
                                            totam
                                            iure explicabo nesciunt sed neque officia odio in.
                                            Odit sunt harum expedita, sint quasi corporis provident dolorem animi
                                            excepturi,
                                            numquam possimus perferendis, natus sapiente hic temporibus? Temporibus,
                                            corporis. Optio quidem vel quod aspernatur eos itaque distinctio dolore
                                            blanditiis.
                                            Placeat magni similique laborum ipsa dolore, quia, labore necessitatibus,
                                            commodi rerum ad totam magnam vel officia culpa nobis! Voluptatum, ducimus
                                            veniam provident aliquam explicabo beatae neque odit voluptatem consequatur
                                            architecto!
                                            Expedita eos quia repellat quod ipsum architecto soluta, cum dolores officia
                                            sint sequi debitis culpa aperiam numquam fugiat libero! Illo, commodi!
                                            Minima
                                            pariatur sapiente qui eaque, delectus velit magnam adipisci?</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-panel">
                            <div class="container">
                                <div class="columns">
                                    <div class="column is-half">

                                        <div class="video-container">
                                            <iframe src="https://www.youtube.com/embed/MDgZLV6gqV0" frameborder="0"
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-pic
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="colulmn is-half">

                                        <h2 class="is-size-4">Video</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis,
                                            natus.
                                            Doloribus
                                            neque
                                            tempore
                                            qui saepe voluptate. eserunt nihil doloribus facilis quos eos, tempore
                                            magni
                                            iure magnam
                                            impedit
                                            reiciendis eligendi dignissimos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-panel">
                            <h2 class="is-size-4">Tamaños</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, natus. Doloribus
                                neque
                                tempore
                                qui saepe voluptate. eserunt nihil doloribus facilis quos eos, tempore magni iure
                                magnam
                                impedit
                                reiciendis eligendi dignissimos.</p>
                        </div>
                        <div class="tab-panel">
                            <h2 class="is-size-4">Envios y reembolsos</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, natus. Doloribus
                                neque
                                tempore
                                qui saepe voluptate. eserunt nihil doloribus facilis quos eos, tempore magni iure
                                magnam
                                impedit
                                reiciendis eligendi dignissimos.</p>
                        </div>
                        <div class="tab-panel">
                            <h2 class="is-size-4">Comentarios</h2>
                            <div class="container">
                                <div class="columns is-multiline">
                                    <div class="column is-full">
                                        <div class="comment-container">
                                            <img class="avatar" src="img/user-men.jpg" alt="">
                                            <div class="comment">
                                                <div class="course-rating-container">
                                                    <div class="rating-stars" style="--rating: 100%">
                                                    </div>
                                                    <h3 class="is-size-5">lorem</h3>
                                                </div>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam
                                                    nobis sed eveniet architecto iusto ex laborum, veniam facere.
                                                    Dolore ea repellendus possimus obcaecati, suscipit amet aut
                                                    quisquam
                                                    praesentium? Ea, enim!</p>
                                                <span class="text">7 de marzo 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column is-full">
                                        <div class="comment-container">
                                            <img class="avatar" src="img/user-men.jpg" alt="">
                                            <div class="comment">
                                                <div class="course-rating-container">
                                                    <div class="rating-stars" style="--rating: 100%">
                                                    </div>
                                                    <h3 class="is-size-5">lorem</h3>
                                                </div>
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam
                                                    nobis sed eveniet architecto iusto ex laborum, veniam facere.
                                                    Dolore ea repellendus possimus obcaecati, suscipit amet aut
                                                    quisquam
                                                    praesentium? Ea, enim!</p>
                                                <span class="text">7 de marzo 2019</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Información</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">La marca</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Local stores</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Servicios </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Mapa del sitio</a></li>
                    </ul>
                </div>

                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Porqué comprar</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Envios y retornos</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Envios seguros</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Testimonios </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Award waining</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Etival trading</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Tu cuenta</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Iniciar sesión</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Registro</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver carrito </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver catálogo</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Track an order</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Catalogo</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para hombres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para mujeres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver tu Catalogo </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Borrar tu catalogo</a></li>
                    </ul>
                </div>
                <div class="column">

                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Datos de contacto</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Head</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para mujeres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver tu Catalogo </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Borrar tu catalogo</a></li>
                    </ul>
                </div>
                <div class="column is-full">
                    <div class="footer-socials">
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-twitter"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-instagram"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bar-top">
            <div class="container">
                <a class="footer-bar-top-links" href="#">2019 Avenue Fashion</a>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>
</body>

</html>