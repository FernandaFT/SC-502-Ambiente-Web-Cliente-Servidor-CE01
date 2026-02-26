<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-CE01/Model/HomeModel.php";

$mensaje = "";

// Dropdown (tipos)
$tiposEjercicio = ConsultaEjercicio();

// Consulta (ejercicios)
$ejercicios = ConsultarEjercicios();

if (isset($_POST["btnRegistrarEjercicio"])) {

    $identificacion = $_POST["Identificacion"];
    $monto = $_POST["Monto"];
    $tipoejercicio = $_POST["TipoEjercicio"];

    $result = RegistrarEjercicio($identificacion, $monto, $tipoejercicio);

    if ($result) {
        header("Location: ../../View/vHome/ejercicio-consulta.php");
        exit;
    } else {
        $mensaje = "Su información no fue registrada correctamente";
    }
}