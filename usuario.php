<?php
session_start();
if (!isset($_SESSION["USUARIO"]))
{
    $usuaio = array();
    $usuaio["EMAIL"] = null;
    $usuaio["SENHHA"] = null;


    $_SESSION["USUARIO"] = $usuaio;
}