<?php 
//receber dados da tela de login

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//conectar o este aqui no banco

include 'conexao.php';

//
$select="SELECT * FROM tb_usuario WHERE nm_usuario = '$usuario' AND ds_senha='$senha'";

// executar a instrução dentro do banco
$query = $conexao->query($select);

//Pegar o primeiro resultado da query
$resultado = mysqli_fetch_assoc($query);

print_r($resultado);


?>