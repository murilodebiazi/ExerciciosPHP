<?php
    $nome = $_POST['nome'];
    $mercadoria = $_POST['mercadoria'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $valor = $preco * $quantidade;

    echo "<h1>";
    echo "Compra";
    echo "</h1>";

    echo "<p>";
    echo $nome;
    echo "</p>";

    echo "<p>";
    echo $mercadoria;
    echo "</p>";

    echo "<p>";
    echo "R$ " .$valor;
    echo "</p>";
?>