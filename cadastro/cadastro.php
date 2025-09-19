<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

echo "Deu certo paizão";

$fs = fopen("dados.txt","a");
$quebra=chr(13).chr(10); /* chr 10 é enter e chr 13 retorna o cursor inicio linha*/

fwrite ($fs,"Paciente: ".$nome.$quebra);
fwrite ($fs,"telefone: ".$nome.$telefone);
fwrite ($fs,"Email: ".$nome.$quebra);
fwrite($quebra);
fwrite($fs,"++++++++++++++++++".$quebra);
fclose($fs); 
?>