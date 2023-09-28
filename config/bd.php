<?php

$host="localhost";
$db="personal";
$usuario="root";
$pass="admin";

try {
    $conexion=new PDO("mysql:host =$host;dbname=$db",$usuario,$pass);
    if($conexion){echo "";}
} catch (Exception $ex) {
    echo $ex->getMessage();
}
    //throw $th;    ?>