<?php
require_once "../php/conectar.php";
//pegar nome do produto - ESTE IF É IMPORTANTÍSSIMO: EVITAR INJEÇÃO DE SQL, GRAVAR REGISTRO VAZIO
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['nome']))
 { 
   $nome = $_POST['nome'];
 } 
 else 
 { 
 $msg = urlencode('Acesso negado!'); 
 header("location: ../php/entrar.php?retorno=$msg"); 
 exit; 
}
//pegar o nome do arquivo da imagem do produto
$imagem = $_FILES['imagem']['tmp_name'];

$sql = "INSERT INTO cadastro (nome) VALUES ('$nome')";
mysqli_query($conexao, $sql);
//rotina php para UPLOAD da foto do produto
//pegar o ultimo código gerado pelo mySQL
$ultimocod=mysqli_insert_id($conexao);
//modificar o nome do arquivo para codigo+extenção .png
$arquivo='../fotos/'.$ultimocod.'.png';
//fazer o upLoad da imagem do produto
move_uploaded_file($imagem,$arquivo);
mysqli_close($conexao); //fechar a conexão com BD
//voltar para form-cadastrar e passsar parâmetro por GET com mensagem de: OK
       $msg= urlencode('ok');
       header("location: ../php/form-cadastrar.php?retorno=$msg");
?>