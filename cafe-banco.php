<?php
function adicionaCafe($conexao, $nome, $descricao, $tipo_id)
{
    $query = "INSERT INTO cafe (nome, descricao, tipo_id) VALUES (?, ?, ?) ";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('ssi', $nome, $descricao, $tipo_id);
    return $instrucao->execute();
}

function removeCafe($conexao, $id)
{
    $query = "DELETE FROM cafe WHERE id = ? ";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('i', $id);
    return $instrucao->execute();
}

function alteraCafe($conexao, $id, $nome, $descricao, $tipo_id)
{
	$query = "update cafe set nome = ?, descricao = ?, tipo_id = ? where id = ? ";
	$instrucao = $conexao->prepare($query);
	$instrucao->bind_param('ssii', $nome, $descricao, $tipo_id, $id);
	return $instrucao->execute();
}

function listaCafe($conexao)
{
    $cafes  = array();

    $query = "select c.id, c.nome as nome_cafe, c.descricao, t.nome as nome_tipo from cafe c ";
    $query .= " inner join tipo t on (c.tipo_id = t.id)";
    $instrucao = $conexao->prepare($query);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    while ($cafe = $resultado->fetch_assoc())
    {
        array_push($cafes, $cafe);
    }

    return $cafes;

}

function buscaCafePorID($conexao, $id)
{
    $query = "SELECT id, nome, descricao, tipo_id FROM cafe WHERE id = ? ";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('i', $id);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    return $resultado->fetch_assoc();
}