<?php
include 'cabecalho-menu.php';
include 'conecta.php';
include 'cafe-banco.php';
include 'tipo-banco.php';

$tipos = listaTipo($conexao);
?>

<h1>Adiciona Café</h1>
<form action="cafe-adiciona.php" method="post">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" value="" /></td>
        </tr>
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao" ></textarea></td>
        </tr>
		<tr>
            <td>Tipo</td>
            <td>
                <select class="form-control" name="tipo_id">
                    
                    <?php
                    foreach ($tipos as $tipo)
                    {
                    ?>

                        <option value="<?=$tipo['id']?>" > <?=$tipo['nome']?> </option>

                    <?php
                    }
                    ?>
                    
                </select>
            </td>
        </tr>
		<tr>
            <td><button class="btn btn-primary" type="submit">Adicionar</button></td>
        </tr>
    </table>
</form>

<?php
include 'rodape.php';
?>