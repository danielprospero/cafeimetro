<h3>Relatório de consumo em <?=$data_hoje?></h3>
<table class="table">
    <?php
	$consumos = listaConsumo($conexao);	
	foreach ($consumos as $consumo)
	{
		$valor_total += $consumo['preco'];
		$ml_total += $consumo['qtd'];
		$cafe_total++;
	?>
	    <tr>
			<td><?=$consumo['data_consumo']?></td>
			<td><?=$consumo['hora_consumo']?></td>
			<td><?=$consumo['dia_semana']?></td>
			<td><?=$consumo['cafe_nome']?></td>
			<td><?=$consumo['qtd']?>ml</td>
			<td>R$ <?=number_format($consumo['preco'],2,',','.')?></td>
		</tr>
	<?php
	}
	?>	
</table>