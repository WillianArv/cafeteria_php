<?php
session_start();

if (isset($_POST['productId'])) {
    $productId = $_POST['productId'];

    // Verificar si la sesión contiene productos
    if (isset($_SESSION["productos"]) && is_array($_SESSION["productos"])) {
        // Eliminar el producto del array de la sesión según el ID
        if (array_key_exists($productId, $_SESSION["productos"])) {
            $_SESSION["total"] -= $_SESSION["productos"][$productId]["precioProducto"];
            unset($_SESSION["productos"][$productId]);
            echo "success";
        } else {
            echo "error";
        }
    }
} else {
    echo "error";
}
