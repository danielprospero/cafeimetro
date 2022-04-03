<?php
function adicionaCafe($conexao, $nome, $descricao, $tipo_id)
{
    $query = "INSERT INTO cafe (nome, descricao, tipo_id) VALUES ('$nome', '$descricao', $tipo_id) ";
    return mysqli_query($conexao, $query);
}

function removeCafe($conexao, $id)
{
    $query = "DELETE FROM cafe WHERE id = '$id' ";
    return mysqli_query($conexao, $query);
}

function alteraCafe($conexao, $id, $nome, $descricao, $tipo_id)
{
    $query = "UPDATE cafe SET id = '$id', nome = '$nome', descricao = '$descricao', tipo_id =  '$tipo_id' WHERE id = '$id' ";
    return mysqli_query($conexao, $query);
}

function listaCafe($conexao)
{
    $cafes  = array();

    $query = "SELECT c.id, c.nome as nome_cafe, c.descricao, t.nome as nome_tipo FROM cafe c ";
    $query .= " inner join tipo t on (c.tipo_id = t.id)";
    $resultado = mysqli_query($conexao, $query);
    while ($cafe = mysqli_fetch_assoc($resultado))
    {
        array_push($cafes, $cafe);
    }

    return $cafes;

}

function buscaCafePorID($conexao, $id)
{
    $query = "SELECT id, nome, descricao, tipo_id FROM cafe WHERE id = {$id} ";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}