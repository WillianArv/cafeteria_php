<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafetería</title>
    <link rel="stylesheet" href="css/index.css?v=" <?= rand(1, 500) ?>>
    <link rel="stylesheet" href="css/main.css?v=" <?= rand(1, 500) ?>>
    <!-- FontAwesome  -->
    <script src="https://kit.fontawesome.com/be49cbc3fc.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagenes/logo.jpeg" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- CSS Swiper  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- Script Swiper  -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/script.js"></script>
    <style>
        .swiper {
            width: 66%;
            height: 470px;
            margin-top: 30px;
            padding-bottom: 60px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            z-index: 0;
        }
    </style>
</head>

<body>
    <div class="content">
        <header>
            <div class="header container">
                <div class="menu-hamburger">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="container-logo">
                    <img src="imagenes/logo.jpeg" alt="" srcset="">
                </div>
                <nav class="menu-nav-principal">
                    <ul class="menu-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="pedido.php">Pedidos</a></li>
                        <li><a href="contactanos.php">Contactos</a></li>
                    </ul>
                </nav>
            </div>

            <div class="menu-responsive">
                <h1 class="logo-responsive">Cafeteria</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab non inventore libero? Culpa, quae magni libero voluptatum a officiis aliquam?</p>
                <div class="container-social-responsive">
                    <a href="" class="facebook">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="" class="youtube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="" class="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="" class="twiter">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </div>

                <nav>
                    <ul class="menu-nav-responsive">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="pedido.php">Pedidos</a></li>
                        <li><a href="contactanos.php">Contactos</a></li>
                    </ul>
                </nav>
                <div class="btn-close-responsive"><i class="fa-solid fa-xmark"></i></div>
            </div>
            <div id="overlay"></div>
        </header>
        <main>


            <section class="productos-populares">
                <div class="title-products">
                    <h1>Productos más pedidos</h1>
                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-img-slide">
                                    <img src="imagenes/imagenes-productos/plato1.jpg" alt="plato1.jpg" srcset="">
                                </div>
                                <div class="card-info">
                                    <p class="text-title">Frijoles, arroz y platanos</p>
                                    <p class="text-body">Porción de arroz, frijoles, platanos, queso fresco y aguacate</p>
                                </div>
                                <div class="card-footer">
                                    <span class="text-precio">$1.50</span>
                                    <div class="card-button-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                            <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                            <path d="M7 2v20" />
                                            <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-img-slide">
                                    <img src="imagenes/imagenes-productos/sanwich.jpg" alt="sanwich.jpg" srcset="">
                                </div>
                                <div class="card-info">
                                    <p class="text-title">Sanwich de jamón</p>
                                    <p class="text-body">Un delicioso sandwich de jamón con queso</p>
                                </div>
                                <div class="card-footer">
                                    <span class="text-precio">$0.75</span>
                                    <div class="card-button-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                            <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                            <path d="M7 2v20" />
                                            <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-img-slide">
                                    <img src="imagenes/imagenes-productos/capuchino.jpeg" alt="capuchino.jpeg" srcset="">
                                </div>
                                <div class="card-info">
                                    <p class="text-title">Cappuccino</p>
                                    <p class="text-body">Un delicioso café cappuccino</p>
                                </div>
                                <div class="card-footer">
                                    <span class="text-precio">$1.00</span>
                                    <div class="card-button-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                            <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                            <path d="M7 2v20" />
                                            <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-img-slide">
                                    <img src="imagenes/imagenes-productos/quesadilla.jpg" alt="quesadilla.jpg" srcset="">
                                </div>
                                <div class="card-info">
                                    <p class="text-title">Quesadilla + café</p>
                                    <p class="text-body">Una deliciosa quesadilla, acompañada con un café</p>
                                </div>
                                <div class="card-footer">
                                    <span class="text-precio">$1.00</span>
                                    <div class="card-button-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                            <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                            <path d="M7 2v20" />
                                            <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-img-slide"><img src="imagenes/imagenes-productos/pupusas.jpeg" alt="pupusas.jpeg" srcset=""></div>
                                <div class="card-info">
                                    <p class="text-title">Pupusas</p>
                                    <p class="text-body">Ricas pupusas de queso, chicharrón o revueltas</p>
                                </div>
                                <div class="card-footer">
                                    <span class="text-precio">2 x $1.00</span>
                                    <div class="card-button-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                            <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                            <path d="M7 2v20" />
                                            <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-img-slide">
                                    <img src="imagenes/imagenes-productos/plato4.jpg" alt="plato4.jpg" srcset="">
                                </div>
                                <div class="card-info">
                                    <p class="text-title">Pollo guisado</p>
                                    <p class="text-body">Pollo guisado en salsa de tomate, con arroz y ensalda fresca</p>
                                </div>
                                <div class="card-footer">
                                    <span class="text-precio">$1.50</span>
                                    <div class="card-button-slide">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                            <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                            <path d="M7 2v20" />
                                            <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <section class="productos-desayunos">
                <div class="title-products">
                    <h1>Desayunos</h1>
                </div>
                <div class="cards-products">
                    <div class="card">
                        <div class="card-img"><img src="imagenes/imagenes-productos/pupusas.jpeg" alt="pupusas.jpeg" srcset=""></div>
                        <div class="card-info">
                            <p class="text-title">Pupusas</p>
                            <p class="text-body">Ricas pupusas de queso, chicharrón o revueltas (3 x $1.00)</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$1.00</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="imagenes/imagenes-productos/huevosConCarne.jpeg" alt="huevosConCarne.jpeg" srcset="">
                        </div>
                        <div class="card-info">
                            <p class="text-title">Huevos fritos con carne</p>
                            <p class="text-body">Unos deliciosos huevos fritos con una porción de carne</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$1.25</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="imagenes/imagenes-productos/frijoles.jpeg" alt="frijoles.jpeg" srcset="">
                        </div>
                        <div class="card-info">
                            <p class="text-title">Frijoles con carne</p>
                            <p class="text-body">Frijoles con carne asada</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$1.50</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="imagenes/imagenes-productos/arroz-frijoles.jpg" alt="arroz-frijoles.jpg" srcset="">
                        </div>
                        <div class="card-info">
                            <p class="text-title">Arroz con frijoles y huevo</p>
                            <p class="text-body">Un plato con arroz blanco, frijoles, huevo frito, chorizo y ensalada</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$1.50</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="productos-almuerzos">
                <div class="title-products">
                    <h1>Almuerzos</h1>
                </div>
                <div class="cards-products">
                    <div class="card">
                        <div class="card-img"><img src="imagenes/imagenes-productos/plato1.jpg" alt="plato1.jpg" srcset=""></div>
                        <div class="card-info">
                            <p class="text-title">Frijoles, arroz y platanos</p>
                            <p class="text-body">Porción de arroz, frijoles, platanos, queso fresco y aguacate</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$1.50</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="imagenes/imagenes-productos/plato2.jpg" alt="plato2.jpg" srcset="">
                        </div>
                        <div class="card-info">
                            <p class="text-title">Pollo a la plancha</p>
                            <p class="text-body">Porción de pollo, acompañado con arroz y ensalada fresca</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$1.50</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="imagenes/imagenes-productos/Plato3.jpg" alt="Plato3.jpg" srcset="">
                        </div>
                        <div class="card-info">
                            <p class="text-title">Pescado frito</p>
                            <p class="text-body">Pescado frito, con papitas fritas y ensalada fresca</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-price">$1.50</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="imagenes/imagenes-productos/plato4.jpg" alt="plato4.jpg" srcset="">
                        </div>
                        <div class="card-info">
                            <p class="text-title">Pollo guisado</p>
                            <p class="text-body">Pollo guisado en salsa de tomate, con arroz y ensalda fresca</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$1.50</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="productos-aperitivos">
                <div class="title-products">
                    <h1>Aperitivos</h1>
                </div>
                <div class="cards-products">
                    <div class="card">
                        <div class="card-img"><img src="imagenes/imagenes-productos/sanwich.jpg" alt="sanwich.jpg" srcset=""></div>
                        <div class="card-info">
                            <p class="text-title">Sanwich de jamón</p>
                            <p class="text-body">Un delicioso sandwich de jamón con queso</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$0.75</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="imagenes/imagenes-productos/croissants.jpg" alt="croissants.jpg" srcset="">
                        </div>
                        <div class="card-info">
                            <p class="text-title">Crossaint</p>
                            <p class="text-body">Un delicioso pan relleno de miel</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$0.75</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="imagenes/imagenes-productos/quesadilla.jpg" alt="quesadilla.jpg" srcset="">
                        </div>
                        <div class="card-info">
                            <p class="text-title">Quesadilla + café</p>
                            <p class="text-body">Una deliciosa quesadilla, acompañada con un café</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$1.00</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="imagenes/imagenes-productos/flauta.jpg" alt="flauta.jpg" srcset="">
                        </div>
                        <div class="card-info">
                            <p class="text-title">Torta de jamón y queso</p>
                            <p class="text-body">Una deliciosa torta de jamón con queso</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$1.00</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="productos-bebidas">
                <div class="title-products">
                    <h1>Bebidas</h1>
                </div>
                <div class="cards-products">
                    <div class="card">
                        <div class="card-img"><img src="imagenes/imagenes-productos/licuado-banano.jpg" alt="licuado-banano.jpg" srcset=""></div>
                        <div class="card-info">
                            <p class="text-title">Licuado de guineo</p>
                            <p class="text-body">Un delicioso licuado de guineo</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$0.50</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="imagenes/imagenes-productos/licuado-zanahoria.jpeg" alt="licuado-zanahoria.jpeg" srcset="">
                        </div>
                        <div class="card-info">
                            <p class="text-title">Licuado de zanahoria</p>
                            <p class="text-body">Un delicioso licuado de zanahoria fresca</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$0.50</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="imagenes/imagenes-productos/limonada2.webp" alt="limonada2.webp" srcset="">
                        </div>
                        <div class="card-info">
                            <p class="text-title">Limonada</p>
                            <p class="text-body">Una deliciosa limonada</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$0.35</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img">
                            <img src="imagenes/imagenes-productos/jugo-tamarindo.jpeg" alt="jugo-tamarindo.jpeg" srcset="">
                        </div>
                        <div class="card-info">
                            <p class="text-title">Fresco de tamarindo</p>
                            <p class="text-body">Un delicioso fresco de tamarindo natural</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$0.35</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cards-products">
                    <div class="card">
                        <div class="card-img"><img src="imagenes/imagenes-productos/licuado-oreo-leche.jpeg" alt="licuado-oreo-leche.jpeg" srcset=""></div>
                        <div class="card-info">
                            <p class="text-title">Licuado de galleta oreo con leche</p>
                            <p class="text-body">Un delicioso licuado de galleta oreo con leche</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$1.00</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-img"><img src="imagenes/imagenes-productos/capuchino.jpeg" alt="capuchino.jpeg" srcset=""></div>
                        <div class="card-info">
                            <p class="text-title">Cappuccino</p>
                            <p class="text-body">Un delicioso café cappuccino</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-precio">$1.00</span>
                            <div class="card-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-utensils">
                                    <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2" />
                                    <path d="M7 2v20" />
                                    <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>
    </div>
    <footer>
        <div class="container footer">
            <div class="container-logo-footer">
                <img src="imagenes/logo.jpeg" alt="" srcset="">
            </div>
            <div class="container-social">
                <table>
                    <tr class="facebook">
                        <td>
                            <i class="fa-brands fa-facebook"></i>
                        </td>
                        <td>
                            <a href="">
                                <span>Facebook</span>
                            </a>
                        </td>
                    </tr>
                    <tr class="youtube">
                        <td>
                            <i class="fa-brands fa-youtube"></i>
                        </td>
                        <td>
                            <a href="">
                                <span>Youtube</span>
                            </a>
                        </td>
                    </tr>
                    <tr class="instagram">
                        <td>
                            <i class="fa-brands fa-instagram"></i>
                        </td>
                        <td>
                            <a href="">
                                <span>Instagram</span>
                            </a>
                        </td>
                    </tr>
                    <tr class="twiter">
                        <td>
                            <i class="fa-brands fa-twitter"></i>
                        </td>
                        <td>
                            <a href="">
                                <span>Twitter</span>
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="user-footer">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="pedido.php">Pedidos</a></li>
                    <li><a href="contactanos.php">Contactos</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>
<script>
    var swiper;

    function initSwiper() {
        var slidesPerView = 3; // Número de slides preview predeterminado

        if (window.innerWidth <= 768) { // Cambia el número de slides preview para pantallas más pequeñas
            slidesPerView = 2;
        }

        if (window.innerWidth <= 520) {
            slidesPerView = 1;
        }

        swiper = new Swiper(".mySwiper", {
            slidesPerView: slidesPerView,
            spaceBetween: 20,
            centeredSlides: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    }

    // Inicializa Swiper en la carga inicial
    initSwiper();

    // Actualiza Swiper cuando cambia el tamaño de la ventana
    window.addEventListener("resize", function() {
        if (swiper) {
            swiper.destroy();
        }
        initSwiper();
    });
</script>


</html>