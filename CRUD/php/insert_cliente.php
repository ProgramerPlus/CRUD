<?php 

include 'conexao.php';

//recebendo dados do formulário 

$nm_empresa = $_POST['nm_empresa'];
$nr_contato = $_POST['nr_contato'];
$nm_contato = $_POST['nm_contato']; 


$insert = "INSERT INTO tb_cliente values(NULL, '$nm_empresa', '$nr_contato', '$nm_contato')";

$query = $conexao->query($insert);

if ($query == true ) {

echo "<script> alert ('Cliente cadastrado com sucesso!'); history.back() </script>";


}


?>