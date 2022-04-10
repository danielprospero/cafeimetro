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

function buscaTipoPorID($conexao, $id)
{
	$query = "select id, nome from tipo where id = ? ";
	$instrucao = $conexao->prepare($query);
	$instrucao->bind_param('i', $id);
	$instrucao->execute();
	$resultado = $instrucao->get_result();
	return $resultado->fetch_assoc();		
}

function alteratipo($conexao, $id, $nome)
{
	$query = "update tipo set nome = ? where id = ? ";
	$instrucao = $conexao->prepare($query);
	$instrucao->bind_param('si', $nome, $id);
	return $instrucao->execute();
}

