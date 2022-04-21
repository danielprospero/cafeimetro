<?php
function validaUsuario($conexao, $email, $senha)
{
 
    $query = "select id, email, senha from usuario where email = ? ";
    $instrucao = $conexao->prepare($query);
    $instrucao->bind_param('s', $email);
    $instrucao->execute();
    $resultado = $instrucao->get_result();
    return $resultado->fetch_assoc();

}
