function mostrarDatos() {
    $.ajax({
        url: "mostrarDatos.php",
        success: function (r) {
            $('#tablaDatos').html(r);
        }
    });
}

function agregarDatos() {

    if ($('#año').val() == "") {
        swal("Camara joto");
        return false;
    }
    $.ajax({
        type: "POST",
        data: $('#frmAgregarDatos'),
        url: "agregarDatos.php",
        success: function (r) {
            console.log(r);
            if (r == 1) {
                swal("Exito al insertar");
            } else {
                swal("Fallo al insertar");
            }
        }
    });
}

function eliminarDatos(idNombre) {
    swal({
        title: "Estas seguro de eliminar este registro?",
        text: "Una vez que elimines este registro, no podra ser recuperado!!!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                    icon: "success",
                });
            } else {
                swal("Your imaginary file is safe!");
            }
        });
}