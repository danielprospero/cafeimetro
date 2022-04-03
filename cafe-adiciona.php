<?php
include 'cabecalho-menu.php';
include 'conecta.php';
include 'cafe-banco.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$tipo_id = $_POST['tipo_id'];

$adicinou = adicionaCafe($conexao, $nome, $descricao, $tipo_id);
if ($adicinou)
{
?>
	<p class="text-sucess"><?=$nome?> inserido com sucesso.</p>
<?php
}
else {
?>
	<p class="text-danger">Erro ao tentar inserir o <?=$nome?>.</p>
<?php
}
include 'rodape.php';
?>