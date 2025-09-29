<?php
// Habilita a exibição de erros na página
ini_set('display_erros', 1);

// Habilita a exibição de erros durante a inicialização do PHP
ini_set('display_startup_erros', 1);

// Define o nível de erro para mostrar todos os erros
error_reporting(E_ALL);

$ip = 'localhost';
$usuario = 'root';
$senha = 'root';
$bd = 'produtos';

//comando para conectar com BD mysql
$conexao = mysqli_connect("$ip", "$usuario", "$senha", "$bd");
mysqli_query($conexao,"set NAMES utf8");
//testar se a conexão foi efetuada com sucesso

if (!$conexao) {
    die ("Status: Falha de conexão com MySQL: ");
}
echo "Status: Conectado com sucesso ao Banco de Dados: ".$bd;    
?>