function mostrarDatos() {
    $.ajax({
        url: "./mostrarDatos.php",
        success: function (r) {
            $('#tablaDatos').html(r);
        }
    });
}

function agregarDatos(idNombre) {
    $.ajax({
        type: "POST",
        data: $('#agregarDatos').serialize(),
        url: "./agregarDatos.php",
        success: function (r) {
            console.log(r);
            if (r == 1) {
                swal("Agregado con exito...");
            } else {
                swal("Verifique los datos, no se pudo agregar...");
            }
        }
    });
}
function eliminarDatos() {
    swal({
        title: "¿Seguro que desea eliminar este dato?",
        text: "Una vez eliminado ya no se podra recuperar!!!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("El registro ha sido eliminado correctamente!!!", {
                    icon: "success",
                });
            } else {
                swal("Verifica bien tus datos antes de eliminar");
            }
        });
}

