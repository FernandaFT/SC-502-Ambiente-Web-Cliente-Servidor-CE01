<?php

function OpenDataBase()
{
    mysqli_report(MYSQLI_REPORT_ERROR);
    return mysqli_connect("127.0.0.1","root","","practica2");
}

function CloseDataBase($context)
{
    mysqli_close($context);
}