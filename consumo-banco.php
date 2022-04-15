<?php
function listaConsumo($conexao)
{
    $consumos  = array();

    $query = "select co.id as consumo_id, date_format(co.data, '%d/%m/%Y') as data_consumo, ";
    $query .= "date_format(co.hora, '%H:%i') as hora_consumo, co.dia_semana, ";
    $query .= "co.preco, co.qtd, ca.nome as cafe_nome ";
    $query .= "from consumo co ";
    $query .= " inner join cafe ca on (ca.id = co.cafe_id) ";
    $query .= "where 1=1 ";

    $instrucao = $conexao->prepare($query);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    while ($consumo = $resultado->fetch_assoc())
    {
        array_push($consumos, $consumo);
    }

    return $consumos;

}
