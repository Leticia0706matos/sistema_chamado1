<?php
//variaveis que receberam os dados para inserir na função de conexão

$servidor = "localhost";
$usuario = "root";
$senha = "root";
$bancodedados = " bd_sistema_chamado";

//Função de conexão com o banco de dados
$conexão = new mysqli($servidor, $usuario , $senha, $bancodedados );

if ($conexão ->connect_error) {
    die("error". $conexão->connect_error);
}

?>