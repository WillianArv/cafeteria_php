<?php
// Incluye la librería de DomPDF
require 'libreries/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

session_start();
ob_clean();
date_default_timezone_set('America/El_Salvador');
$fechaHora = date("d-m-y h:i A");
// Crea una instancia de Dompdf
$dompdf = new Dompdf();

// El código HTML que deseas convertir en PDF
$html = '
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura de Compra</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 100px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .info p {
            margin: 0;
        }

        .items {
            border-collapse: collapse;
            width: 100%;
        }

        .items th,
        .items td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .items th {
            background-color: #f2f2f2;
        }

        .total {
            text-align: right;
            margin-top: 20px;
        }

        .total p {
            margin: 0;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Factura de Compra</h1>
        </div>
        <div class="info">
            <div>
                <p>Fecha: ' . $fechaHora . '</p>
            </div>
            <div>
                <p>Número de Factura: ' . rand(1, 5000) . '6</p>
            </div>
        </div>
        <table class="items">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>';

foreach ($_SESSION["productos"] as $index => $producto) {
    $nombreProducto = $producto["nombreProducto"];
    $precioProducto = $producto["precioProducto"];
    $totalProducto = $precioProducto;

    $html .= '
                <tr>
                    <td>' . $nombreProducto . '</td>
                    <td>$' . $precioProducto . '</td>
                    <td>$' . $totalProducto . '</td>
                </tr>';
}

$html .= '
            </tbody>
        </table>
        <div class="total">
            <p>Total:' . (isset($_SESSION["total"]) ? "$" . number_format($_SESSION["total"], 2) : "$0.00") . '</p>
        </div>
        <div class="footer">
            <p>Gracias por su compra</p>
        </div>
    </div>
</body>

</html>';

// Carga el contenido HTML en DomPDF
$dompdf->loadHtml($html);

// Configura el tamaño y orientación de la página (por ejemplo, 'letter' para carta)
$dompdf->setPaper('letter', 'portrait');

// Renderiza el PDF (opcional: establece el modo de renderizado a "fullpage" para procesar estilos CSS completos)
$dompdf->render();

// Genera el PDF en la salida (puede guardar el PDF en lugar de mostrarlo en el navegador)
$dompdf->stream('mi_pdf_generado.pdf', array('Attachment' => 0));
