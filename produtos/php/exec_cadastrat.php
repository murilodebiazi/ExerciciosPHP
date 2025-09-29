<?php
require_once "../php/conectar.php";

$nome = $_POST['nome'];

// montar o comando SQL que vai gravar os dados na tabela cadastro
$sql = "insert into cadastro (nome) values ('$nome')";

// executar/gravar os dados na tabela
mysqli_query($sql) or die (mysqli_error());
?>