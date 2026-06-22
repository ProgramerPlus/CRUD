<?php
$servidor = 'localhost';
$usuario_servidor = 'root';
$senha_servidor = 'root';
$banco_dados = 'db_clientes';


$conexao = new mysqli($servidor,$usuario_servidor,$senha_servidor,$banco_dados);


if (!$conexao) {

die('falha na conexão');

}


?>