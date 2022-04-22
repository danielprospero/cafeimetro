<?php
include 'usuario.php';
include 'conecta.php';
include 'usuario-banco.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

//$usuario = ???()...

$destino = "Location: login-erro.php"; //senha padrão...

$usuario = validaUsuario($conexao, $email, $senha);

if ($usuario !== null)
{
    $_SESSION["USUARIO"]["EMAIL"] = $email;
    $destino = "Location: plataforma.php";
}

header($destino);
die();
