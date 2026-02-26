<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor-CE01/Model/UtilitarioModel.php";

function RegistrarEjercicio($identificacion, $monto, $tipoejercicio)
{
    $context = OpenDataBase();

    $sp = "CALL sp_RegistrarEjercicio('$identificacion', $monto, $tipoejercicio)";
    $result = $context->query($sp);

    CloseDataBase($context);
    return $result;
}

function ConsultaEjercicio()
{
    $context = OpenDataBase();

    $sql = "CALL sp_ConsultarTiposEjercicio()";
    $result = $context->query($sql);

    CloseDataBase($context);
    return $result;
}

function ConsultarEjercicios()
{
    $context = OpenDataBase();
    $sql = "CALL sp_ConsultarEjercicios()";
    $result = $context->query($sql);

    while ($context->more_results() && $context->next_result()) { ; }

    CloseDataBase($context);
    return $result;
}