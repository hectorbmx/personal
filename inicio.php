<?php include("assets/index.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de atletas</title>
</head>
<body>


    <div class="container">
       
    <div class="menu">
    <div class="menu-button">
        <div class="menu-button-item">
            <a href="#" class="menu-button-link">Botón 1</a>
        </div>
        <div class="menu-button-item">
            <a href="#" class="menu-button-link">Botón 2</a>
        </div>
        <div class="menu-button-item">
            <a href="#" class="menu-button-link">Botón 3</a>
        </div>
        <div class="menu-button-item">
            <a href="#" class="menu-button-link">Botón 4</a>
        </div>
    </div>
</div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Crea un atleta</h5>
                <table class="table table-dark">
                    <tbody>
                        <tr>
                            <td colspan="3">Captura los datos del atleta</td>
                        </tr>
                        
                        <tr>
                            <td>
                            <label for="">Nombre</label>    
                            <input type="text" name="" id="nombre" class="form-control" placeholder="nombre" autocomplete="off"></td>
                            
                            <td>
                            <label for="">Correo</label>        
                            <input type="text" name="" id="correo" class="form-control" placeholder="correo" autocomplete="off"></td>
                            <td>
                            <label for="">Celular</label>        
                            <input type="number" name="celular" id="celular" class="form-control" placeholder="celular" autocomplete ="off"></td>
                        </tr>
                        <tr>
                            <td>
                            <label for="">Password</label>     
                            <input type="password" name="" id="password" class="form-control" placeholder="password" autocomplete="off"></td>
                            <td>
                            <label for="">Confirma Password</label>     
                            <input type="password" name="" id="password2" class="form-control" placeholder="password2" autocomplete="off"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                            <label for="">Ciudad</label>     
                            <input type="text" name="" id="ciudad" class="form-control" placeholder="ciudad" autocomplete="off"></td>
                            <td>
                            <label for="">fecha Nacimiento</label>     
                            <input type="date" name="" id="fechaNac" class="form-control"></td>
                            <td><button class="btn btn-success" id="guardaAtleta"><i class="fa-solid fa-floppy-disk"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    var botonGuardaAtleta = document.getElementById('guardaAtleta');

    botonGuardaAtleta.onclick = function () {
        // Obtener los valores de los inputs por ID
        var nombre = document.getElementById('nombre').value;
        var correo = document.getElementById('correo').value;
        var celular = document.getElementById('celular').value;
        var password = document.getElementById('password').value;
        var ciudad = document.getElementById('ciudad').value;
        var fechaNac = document.getElementById('fechaNac').value;

        // Validar y sanear los datos si es necesario

        // Hacer lo que quieras con los valores (por ejemplo, mostrarlos en la consola)
        // console.log('Nombre:', nombre);
        // console.log('Correo:', correo);
        // console.log('Celular:', celular);
        // console.log('Ciudad:', ciudad);
        // console.log('Fecha de Nacimiento:', fechaNac);

        // Realizar la solicitud AJAX
        $.ajax({
            type: "POST",
            url: "guardaAtleta.php",
            data: {
                nombre: nombre,
                correo: correo,
                celular: celular,
                password: password,
                ciudad: ciudad,
                fechaNac: fechaNac
            },
            dataType: "json", // Corrección aquí
            success: function (response) {
                console.log(response)
                // Manejar la respuesta del servidor
                if (response.success === true) {
                    alert("Éxito: Atleta guardado correctamente");
                } else {
                    alert("Error: No se pudo guardar al atleta");
                }
            },
            error: function (xhr, status, error) {
                // Manejar errores de la solicitud AJAX
                console.error('Error en la solicitud AJAX: ' + status + ' - ' + error);
            }
        });
    };
});

    </script>