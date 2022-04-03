<?php
function listaTipo($conexao)
{
    $tipos  = array();

    $query = "SELECT id, nome FROM tipo ";
    $resultado = mysqli_query($conexao, $query);
    while ($tipo = mysqli_fetch_assoc($resultado))
    {
        array_push($tipos, $tipo);
    }

    return $tipos;

}