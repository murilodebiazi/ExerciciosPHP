<?php

    echo "<h1> relatorio de clientes </h1>";

    $fs = fopen("dados.txt","r"); // abre o aquivo no modo leitura

    while (!feof($fs)){
        $linha = fgets($fs,500);
        echo "<br>";
        echo $linha;

    }

    fclose($fs); //fechar arquivo
?>