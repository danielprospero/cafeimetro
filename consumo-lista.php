<?php
include 'cabecalho-menu.php';
include 'conecta.php';
include 'consumo-banco.php';
?>
	<table class="table table-striped table-bordered">

		<?php
		$consumos = listaConsumo($conexao);	
		foreach ($consumos as $consumo)
		{
		?>
			<tr>
				<td><?=$consumo['data_consumo']?></td>
				<td><?=$consumo['hora_consumo']?></td>
				<td><?=$consumo['dia_semana']?></td>
				<td><?=$consumo['cafe_nome']?></td>
				<td><?=$consumo['qtd']?>ml</td>
				<td>R$ <?=number_format($consumo['preco'],2,',','.')?></td>
				<td>
					<form name="form-remove" method="post" action="consumo-exclui.pho">
						<input type="hidden" name="id" value="<?=$consumo['id']?>" />
						<button class="btn btn-danger">remove</button>
					</form>
				</td>
			</tr>
		<?php
		}
		?>	

	</table>
				
<?php
include 'rodape.php';
?>