function iniciar(){
    $('#datosMedicos').on("submit",function(e){
        guardarDatos(e);
    })
}


function guardarDatos(e){
    e.preventDefault();
    var formData = new FormData($("#datosMedicos")[0]);

        $.ajax({
            url: "../../controller/Medico.php?opc=insert",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            
            success: function(datos){
                $('#nombre').val('');
                $('#cedula').val('');
                $('#edad').val('');
                $('#apellidos').val('');
                $('#usuario').val('');
                $('#password').val('');

                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'El medico ha sido registrado',
                    showConfirmButton: false,
                    timer: 1500
                  })
            },

            error: function (datos) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'No se registro el medico',
                    showConfirmButton: false,
                    timer: 1500
                  })
            }

        })
}
iniciar();