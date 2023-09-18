<?php

session_start();

$_SESSION["total"];

if (isset($_POST["nombreProducto"]) && isset($_POST["precioProducto"])) {
    $nombre = $_POST["nombreProducto"];
    $precio = $_POST["precioProducto"];
    $imagen = $_POST["nombreImagen"];
    $total = 0;
    // Verificar si la sesión ya contiene un array para estos datos
    if (!isset($_SESSION["productos"])) {
        $_SESSION["productos"] = array();
    }

    // Agregar los nuevos datos al array dentro de la sesión
    $_SESSION["productos"][] = array(
        "nombreProducto" => $nombre,
        "precioProducto" => $precio,
        "imagenProducto" => $imagen
    );

    if (isset($_SESSION["productos"])) {
        foreach ($_SESSION["productos"] as $producto) {
            $total += floatval($producto["precioProducto"]);
            $_SESSION["total"] = $total;
        }
    }
    echo "success";
} else {
    echo "error";
}
