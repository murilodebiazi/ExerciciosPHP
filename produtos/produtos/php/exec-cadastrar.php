<?php
require_once "../php/conectar.php";
//pegar o nome do produto
$nome = $_POST['nome'];
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

//voltar para o formulario de cadastro e passar parametro ok por GET
header("Location: ../php/form-cadastrar.php?status=ok");
exit;
?>