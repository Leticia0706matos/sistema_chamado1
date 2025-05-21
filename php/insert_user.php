<?php
//CHAMANDO O ARQUIVO DE CONEXÃO COM O BANCO DE DADOS
include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (null, 'Jose', 'ze@gmail.com', 'secretaria' , '12345')";

$query = $conexao->query($insert);

if ($conexao->query($insert)){
    echo "<script>alert ('usuário cadastro com sucesso!')" location.href = '..'
}