$(document).ready(function () {
    $('#button-pedido').click(function () {
        mostrarMensaje();
    });

    function mostrarMensaje() {
        Swal.fire({
            title: '¿Estás seguro de realizar el pedido?',
            text: '',
            showCancelButton: true,
            confirmButtonText: 'Si',
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Pedido realizado con exito",
                    text: "",
                    icon: "success",
                    confirmButtonText: "Ok"
                }).then((result) => {
                    window.location.href = "factura.php";
                    setTimeout(function () {
                        location.reload();
                    }, 1000);
                });
            }
        });
    }
});


$(document).ready(function () {
    $('.quitar-producto').click(function () {
        const index = $(this).data('id');
        console.log(index);
        $.ajax({
            type: 'POST',
            url: 'eliminar_producto.php',
            data: {
                productId: index
            },
            success: function (response) {
                if (response === 'success') {
                    $(this).closest('.producto').remove();
                    Swal.fire({
                        title: 'Producto eliminado correctamente',
                        text: '',
                        icon: 'success',
                        confirmButtonText: "Ok"
                    }).then((result) => {
                        window.location.reload();
                    })
                } else {
                    Swal.fire({
                        title: 'Error al eliminar el producto',
                        text: '',
                        icon: 'error',
                        confirmButtonText: "Ok"
                    })
                }
            }
        });
    });
});

/*$(document).ready(function () {
    $('.quitar-producto').click(function () {
        const index = $(this).data('id');

        $.ajax({
            type: 'POST',
            url: 'eliminar_producto.php',
            data: {
                productId: index
            },
            success: function (response) {
                if (response === 'success') {
                    // Realizar una solicitud AJAX para obtener el nuevo contenido del pedido
                    $.ajax({
                        type: 'GET', // O tipo de solicitud que estés utilizando para obtener el contenido
                        url: 'obtener_pedido.php', // Ruta al script PHP que obtendrá el contenido actualizado
                        success: function (pedidoHtml) {
                            // Actualizar el contenido del contenedor del pedido
                            $('#pedido-container').html(pedidoHtml);

                            Swal.fire({
                                title: 'Producto eliminado correctamente',
                                text: '',
                                icon: 'success',
                                confirmButtonText: 'Ok'
                            });
                        },
                        error: function () {
                            Swal.fire({
                                title: 'Error al obtener el nuevo contenido del pedido',
                                text: '',
                                icon: 'error',
                                confirmButtonText: 'Ok'
                            });
                        }
                    });
                } else {
                    Swal.fire({
                        title: 'Error al eliminar el producto',
                        text: '',
                        icon: 'error',
                        confirmButtonText: 'Ok'
                    });
                }
            }
        });
    });
});*/
