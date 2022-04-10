<?php
include 'cabecalho-menu.php';
include 'conecta.php';
include 'tipo-banco.php';

$id = $_POST['id'];
$nome = $_POST['nome'];


$alterou = alteraTipo($conexao, $id, $nome, $descricao, $tipo_id);
if ($alterou)
{
?>
	<p class="text-sucess">Registro <?=$nome?> alterado com sucesso.</p>
<?php
}
else {
?>
	<p class="text-danger">Erro ao tentar alterado o registro <?=$nome?>.</p>
<?php

}
include 'rodape.php';
?>