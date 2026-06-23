<?php
//receber dados da tela de login


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


//conectar o este aqui no banco


include 'conexao.php';


//instrução de insert
$select = "SELECT * FROM tb_usuario WHERE ds_login = '$usuario'";


//executar a instrução dentro do banco=
$query = $conexao->query($select);


//Pegar o primeiro resultado da query
$resultado = mysqli_fetch_assoc($query);


//armazenar os dados do banco na variavel
$login_banco = $resultado['ds_login'];
$senha_banco = $resultado['ds_senha'];


//Comparar os dados vindo do formulario com os dados do banco


if ($usuario == $login_banco && $senha == $senha_banco) {
    header('location: ../listar_clientes.html');
}



?>