<?php

require_once("src/Models/Conexion.php");
require_once "src/Models/Docente.php";
require_once("src/Models/Materia.php");
require_once("src/Models/Especialidad.php");
require_once("src/Models/Comunidad.php");
$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

$urlControl = array(
    $_SERVER['SERVER_NAME'] . "/Ingenieria-Mecatronica/",
    $_SERVER['SERVER_NAME'] . "/Ingenieria-Mecatronica/?option=0"
);

$programaId = 6;
$api = 'http://localhost:3010';
$PATH_DOCENTE =  $GLOBALS['api'] . '/imagenes/Ing-Mecatronica/docentes/';
$PATH_COMUNIDAD =  $GLOBALS['api'] . '/imagenes/Ing-Mecatronica/comunidades/';
$PATH_ICONO =  $GLOBALS['api'] . '/imagenes/Ing-Mecatronica/iconos/';

$conn = new Conexion();
$conn->connect();
$docente = new Docente();
$docente->setConnection($conn->getDB());
$materia = new Materia();
$materia->setConnection($conn->getDB());
$especialidad = new Especialidad();
$especialidad->setConnection($conn->getDB());
$comunidad = new Comunidad();
$comunidad->setConnection($conn->getDB());
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Ingeniería Mecátronica">
    <meta name="author" content="Tecnológico Nacional de México Veracruz">
    <link rel="icon" href="img/itver-logo.PNG" />

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Ingeniería Mecatrónica</title>
</head>
<?php
include_once "src/View/header.php";
for ($i = 0; $i < 2; $i++) {
    if ($url == $urlControl[$i]) {
        include_once "src/View/inicio.php";
    }
}
if (isset($_GET['option'])) {
    include_once "src/Controllers/page-controller.php";
} else {
    include_once "src/View/inicio.php";
}
?>
<?php
include_once "src/View/footer.php";
?>

</html>