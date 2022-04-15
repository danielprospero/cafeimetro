<?php
include 'cabecalho-menu.php';
include 'conecta.php';
include 'tipo-banco.php';

$nome = $_POST['nome'];

$temEsteTipo = temTipoPorNome($conexao, $nome);
if ($temEsteTipo == 0)
	{
	$adicinou = adicionaTipo($conexao, $nome);
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
}
else {
?>
	<p class="text-danger">"<?=$nome?>" já existe no cadastro de tipos.</p>
<?php
}
include 'rodape.php';
?>