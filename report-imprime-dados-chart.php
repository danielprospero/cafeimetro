<?php
$consumos_dia_semana = listaConsumoPorDiaSemana($conexao);
foreach ($consumos_dia_semana as $consumo)
{
   $dia = $consumo['dia_semana'];
   $qtd = $consumo['qtd'];
   echo "['{$dia} ({$qtd})', {$qtd}],";
}