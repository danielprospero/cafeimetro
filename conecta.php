<?php
    //$conexao = mysqli_connect("192.168.0.20:3306", "root", "192345", "cafeimetrodb");
    //mysqli_set_charset($conexao, 'utf8');

    $conexao = new mysqli("192.168.0.18:3306", "prospero", "192345", "cafeimetrodb");
    $conexao->set_charset('utf8');
?>