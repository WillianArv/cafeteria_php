document.addEventListener("DOMContentLoaded", function () {
    let overlay = document.querySelector("#overlay");
    let menuHamburger = document.querySelector(".menu-hamburger");
    let menuResponsive = document.querySelector(".menu-responsive");
    let btnClose = document.querySelector(".btn-close-responsive");

    menuHamburger.addEventListener("click", () => {
        menuResponsive.classList.add("active");
        overlay.style.display = "block";
        document.body.style.overflow = "hidden";
    });

    btnClose.addEventListener("click", () => {
        menuResponsive.classList.remove("active");
        overlay.style.display = "none";
        document.body.style.overflow = "auto";
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const currentPage = window.location.pathname.split("/").pop();
    const navLinks = document.querySelectorAll(".menu-nav a");

    navLinks.forEach(function (link) {
        if (link.getAttribute("href") === currentPage) {
            link.classList.add("active");
        }
    });
});


$(document).ready(function () {

    $('.card-button').click(function () {
        const $card = $(this).closest('.card'); // Obtener el card actual
        mostrarMensaje($card);
    });

    function mostrarMensaje($card) {
        const nombreProducto = $card.find('.text-title').text(); // Obtener el nombre del producto en el card actual
        const precioTexto = $card.find('.text-precio').text();
        const matchPrecio = precioTexto.match(/\d+\.\d+/);

        const $imagen = $card.find('.card-img img'); // Obtener la etiqueta de imagen dentro del card
        const nombreImagen = $imagen.attr('alt'); // Obtener el valor del atributo 'alt' de la imagen

        Swal.fire({
            title: '¿Quieres agregar el producto a tu pedido?',
            text: '',
            showCancelButton: true,
            confirmButtonText: 'Si',
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed) {
                // Realizar una solicitud AJAX para guardar los datos en la sesión PHP

                console.log(nombreProducto);
                const precio = matchPrecio[0];
                console.log(precio);
                console.log(nombreImagen);

                $.ajax({
                    type: 'POST',
                    url: 'guardar_session.php', // Ruta al script PHP que manejará la solicitud
                    data: {
                        nombreProducto: nombreProducto,
                        precioProducto: precio,
                        nombreImagen: nombreImagen
                    },
                    success: function (response) {
                        if (response === 'success') {
                            Swal.fire('Producto agregado', '', 'success');
                        } else {
                            Swal.fire('Error al agregar el producto', '', 'error');
                        }
                    }
                });
            }
        });
    }
});


$(document).ready(function () {

    $('.card-button-slide').click(function () {
        const $card = $(this).closest('.card'); // Obtener el card actual
        mostrarMensaje($card);
    });
    function mostrarMensaje($card) {
        const nombreProducto = $card.find('.text-title').text(); // Obtener el nombre del producto en el card actual
        const precioTexto = $card.find('.text-precio').text();
        const matchPrecio = precioTexto.match(/\d+\.\d+/);

        const $imagen = $card.find('.card-img-slide img'); // Obtener la etiqueta de imagen dentro del card
        const nombreImagen = $imagen.attr('alt'); // Obtener el valor del atributo 'alt' de la imagen

        Swal.fire({
            title: '¿Quieres agregar el producto a tu pedido?',
            text: '',
            showCancelButton: true,
            confirmButtonText: 'Si',
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed) {
                // Realizar una solicitud AJAX para guardar los datos en la sesión PHP

                console.log(nombreProducto);
                const precio = matchPrecio[0];
                console.log(precio);
                console.log(nombreImagen);

                $.ajax({
                    type: 'POST',
                    url: 'guardar_session.php', // Ruta al script PHP que manejará la solicitud
                    data: {
                        nombreProducto: nombreProducto,
                        precioProducto: precio,
                        nombreImagen: nombreImagen
                    },
                    success: function (response) {
                        if (response === 'success') {
                            Swal.fire('Producto agregado', '', 'success');
                        } else {
                            Swal.fire('Error al agregar el producto', '', 'error');
                        }
                    }
                });
            }
        });
    }
});


