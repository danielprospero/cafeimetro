<?php
include 'conecta.php';
include 'consumo-banco.php';

$o_arquivo = "meu-consumo.xls";

$html = "<meta charset='utf-8'>";
$html .= "<table border='1'>
			<tr>
				<td>Data Consumo</td>
				<td>Hora Consumo</td>
				<td>Dia Semana</td>
				<td>Café</td>
				<td>Qtd</td>
				<td>R$ Preço</td>
			</tr>";

		$consumos = listaConsumo($conexao);	
		foreach ($consumos as $consumo)
		{
			$html .= "<tr>
						<td>{$consumo["data_consumo"]}</td>
						<td>{$consumo["hora_consumo"]}</td>
						<td>{$consumo["dia_semana"]}</td>
						<td>{$consumo["cafe_nome"]}</td>
						<td>{$consumo["qtd"]}</td>
						<td>{$consumo["preco"]}</td>
					</tr>";
		}

$html .= "</table>";

header("content-Type: application/xls");
header("content-Disposition:attachment; filename=" . $o_arquivo);
header("content-Discription: Dados gerados via PHP.");

echo $html;



