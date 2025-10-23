<?php
// Habilita a exibição de erros na página
ini_set('display_errors', 0);
error_reporting(E_ALL);
require_once '../php/verificar_sessao.php'; 
?>
<!DOCTYPE html>
<html>
 <head>
 <link href="../css/estilo.css" rel="stylesheet" type="text/css">
 <meta charset="UTF-8">
 <title></title>
 </head>
 <body>
<div id="container">
<div id="topo">   <h2> Administração - Sistema Cadastro de Produtos 2025 </h2> </div>
  <div id="menu">
    <a href="../php/form-cadastrar.php">  Cadastrar  </a>    
    <a href="../php/listar.php">  Atualizar/Excluir  </a>
    <a href="../php/sair.php">Sair</a>
	</div>
<div id="conteudo">
   <div id="imagem"> 
     <center> <img src="../img/restrito.png" /> <center>  
   </div>
</div>
</div>    
</body> 
</html>