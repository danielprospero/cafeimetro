<?php
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