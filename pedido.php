<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafetería</title>
    <link rel="stylesheet" href="css/index.css?v=" <?= rand(1, 500) ?>>
    <link rel="stylesheet" href="css/main.css?v=" <?= rand(1, 500) ?>>
    <link rel="stylesheet" href="css/pedido.css?v=" <?= rand(1, 500) ?>>
    <script src="https://kit.fontawesome.com/be49cbc3fc.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagenes/logo.jpeg" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/pedido.js?v=" <?= rand(1, 500) ?>></script>
    <script src="js/script.js"></script>
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
                <h1 class="logo-responsive">MAJO</h1>
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
            <div class="pedido">
                <h2>Tu Pedido</h2>
                <div class="" id="pedido-container">
                    <?php
                    if (isset($_SESSION["productos"]) && is_array($_SESSION["productos"])) {
                        foreach ($_SESSION["productos"] as $index => $producto) {
                            $nombreProducto = $producto["nombreProducto"];
                            $precioProducto = $producto["precioProducto"];
                            $imagenProducto = $producto["imagenProducto"];
                            $totalProducto = $precioProducto; // El total de un producto por defecto es su precio

                            echo "<div class='producto'>";
                            echo "<img src='imagenes/imagenes-productos/$imagenProducto' alt='$nombreProducto'>";
                            echo "<div class='info'>";
                            echo "<h3>$nombreProducto</h3>";
                            echo "<p>Precio: $precioProducto</p>";
                            echo "</div>";
                            echo " <button class='quitar-producto' data-id='$index'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor'
                                        stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='lucide lucide-x'>
                                            <path d='M18 6 6 18' />
                                            <path d='m6 6 12 12' />
                                        </svg>
                                  </button>";
                            echo "</div>";
                        }
                    }
                    ?>
                    <div class="total">
                        <h3>Total:</h3>
                        <?php echo isset($_SESSION["total"]) ? "$" . number_format($_SESSION["total"], 2) : "$0.00"; ?>
                    </div>
                </div>
            </div>
            <div class="container-button">
                <button class="button-pedido" id="button-pedido" <?php echo (isset($_SESSION["total"])) ? (($_SESSION["total"] == 0) ? "disabled" : "") : "disabled" ?>> Realizar pedido </button>
            </div>

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

</html>