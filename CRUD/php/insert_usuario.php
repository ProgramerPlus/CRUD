<?php 

include 'conexao.php';


$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha']; 


$insert = "INSERT INTO tb_usuario values(NULL, '$nome', '$email', '$usuario', '$senha' ) ";

$query = $conexao->query($insert);

if ($query == true ) {

echo "<script> alert ('usuario cadastrado com sucesso!'); history.back() </script>";



}


?>