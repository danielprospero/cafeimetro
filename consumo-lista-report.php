<?php
date_default_timezone_set('Brazil/East');

include 'conecta.php';
include 'consumo-banco.php';

$valor_total = 0;
$ml_total = 0;
$cafe_total = 0;
$data_hoje = date('d/m/Y H:m:s');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cafeímetro</title>
		<meta charset="utf-8">
		<link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
		<link href="css/cafeimetro.css" rel="stylesheet" />
	</head>
	<body>

		<button type="button" name="btn_criapdf" class="btn btn-secondary" onclick="geraPDF()">Gera PDF</button>

		<div class="container" id="div-report">
				<div class="principal">
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
				<br>			
				<h3>Totalizador</h3>
				<table class="table table-striped table-bordered">

					<tr style="text-align: center">
						<td>Cafés:</td><td><?=$cafe_total?></td>
						<td>Qtd ml</td><td><?=$ml_total?></td>
						<td>R$</td><td><?=number_format($valor_total,2,',','.')?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>