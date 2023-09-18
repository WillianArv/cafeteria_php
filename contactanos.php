<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafetería</title>
    <link rel="shortcut icon" href="imagenes/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css?v=" <?= rand(1, 500) ?>>
    <link rel="stylesheet" href="css/contactanos.css?v=" <?= rand(1, 500) ?>>
    <script src="https://kit.fontawesome.com/be49cbc3fc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- SweetAlert JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/contac.js?v=" <?= rand(1, 500) ?>></script>
    <script src="js/script.js"></script>
    <style>

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
            <div class="container-form">
                <h2>Contáctanos</h2>
                <p>Si tienes algun comentario o consejo, puedes enviarnoslo</p>
                <form action="#" method="POST" id="form-contact">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name">

                    <label for="email">Correo Electrónico:</label>
                    <input type="email" id="email" name="email">

                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message"></textarea>

                    <div class="container-button">
                        <button type="submit" id="btn-enviar">Enviar</button>
                    </div>
                </form>
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