<h3>Totalizador</h3>
<table class="table table-striped table-bordered">
	<tr style="text-align: center">
		<td>Cafés:</td><td><?=$cafe_total?></td>
		<td>Qtd ml</td><td><?=$ml_total?></td>
		<td>R$</td><td><?=number_format($valor_total,2,',','.')?></td>
	</tr>
</table>

<div id="piechart" style="width: 900px; height: 500px;"></div>