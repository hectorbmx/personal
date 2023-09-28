<?php
include("config/bd.php");

date_default_timezone_set('America/Mexico_City');

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
$correo = (isset($_POST['correo'])) ? $_POST['correo'] : "";
$celular = (isset($_POST['celular'])) ? $_POST['celular'] : "";
$pass = (isset($_POST['password'])) ? $_POST['password'] : "";
$ciudad = (isset($_POST['ciudad'])) ? $_POST['ciudad'] : "";
$fechaNac = (isset($_POST['fechaNac'])) ? $_POST['fechaNac'] : "";

$hoy = (date("Y-m-d"));

try {
    $sql = $conexion->prepare("INSERT INTO atletas (nombre, correo, celular, ciudad, fechaNac, password, estatus,rol)
                                VALUES (:nombre, :correo, :celular, :ciudad, :fechaNac, :password, 1,1)");
    $sql->bindParam(':nombre', $nombre);
    $sql->bindParam(':correo', $correo);
    $sql->bindParam(':celular', $celular);
    $sql->bindParam(':ciudad', $ciudad);
    $sql->bindParam(':fechaNac', $fechaNac);
    $sql->bindParam(':password', $pass);

    if ($sql->execute()) {
        // La consulta se ejecutó con éxito, devuelve un objeto JSON con "success: true"
        echo json_encode(array("success" => true));
    } else {
        // La consulta falló, devuelve un objeto JSON con "success: false"
        echo json_encode(array("success" => false));
    }
} catch (PDOException $e) {
    // En caso de un error en la conexión o consulta, puedes manejarlo aquí
    echo json_encode(array("success" => false));
}
?>
