
function GetDetail(str) {
    if (str.length == 0) {
        document.getElementById("nombre").value = "";
        document.getElementById("cedula").value = "";
        document.getElementById("edad").value = "";
        document.getElementById("telefono").value = "";
        document.getElementById("correo").value = "";
        document.getElementById("password").value = "";
        document.getElementById("vacuna").value = "";
        return;
    }
    else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 &&  this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                  
                document.getElementById
                    ("cedula").value = myObj[0];
                  
                document.getElementById(
                    "nombre").value = myObj[1];

                document.getElementById(
                    "correo").value = myObj[2];

                $("#genero").val(myObj[3]);
                $('#genero').change();

                document.getElementById(
                    "edad").value = myObj[4];

                document.getElementById(
                    "telefono").value = myObj[5];

                document.getElementById(
                    "vacuna").value = myObj[6];

                $("#dosis").val(myObj[7]);
                $('#dosis').change();

                $("#riesgo").val(myObj[8]);
                $('#riesgo').change();

                document.getElementById(
                    "password").value = myObj[9];
            }
        };

        xmlhttp.open("GET", "../../modelo/llenarDatosPaciente.php?buscar1=" + str, true);
          
        xmlhttp.send();
    }
}

function Buscar(){
    GetDetail(document.getElementById('buscar1').value);
}

function mostrarAlerta(){

    Swal.fire({
        title: 'Esta seguro que desea modificar el Medico?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, Modificalo'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Modificado!',
            'El medico ha sido modificado.',
            'success'
          )
        }
      })
}