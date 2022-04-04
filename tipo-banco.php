<?php
function listaTipo($conexao)
{
    $tipos  = array();

    $query = "SELECT id, nome FROM tipo ";
    $instrucao = $conexao->prepare($query);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    while ($tipo = $resultado->fetch_assoc())
    {
        array_push($tipos, $tipo);
    }

    return $tipos;

}