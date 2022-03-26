<!DOCTYPE html>

<html>
<head>
</head>
<body>
    <table border="1">

<?php
$conexao = mysqli_connect("raspberrypi:3306", "root", "192345", "cafeimetrodb");
$query = "SELECT id, nome, descricao, tipo_id FROM cafe ";
$resultado = mysqli_query($conexao, $query);

while ($cafe = mysqli_fetch_assoc($resultado))
{
 ?>   
    <tr>
        <td><?=$cafe['nome']?></td>
        <td><?=$cafe['descricao']?></td>
        <td><?=$cafe['tipo_id']?></td>
     </tr> 
<?php
}
?>
    </table>
</body>
</html>
