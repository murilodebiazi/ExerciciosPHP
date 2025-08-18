<?php
    $nome = $_POST['nome'];
    $salarioAntigo = $_POST['salario'];
    $salarioNovo = $salarioAntigo * 1.2;
    echo "<h1>";
    echo $nome;
    echo "</h1>";
    
    echo "<h1>";
    echo "Salario Antigo";
    echo "</h1>";
    
    echo "<p>";
    echo "R$ " .$salarioAntigo;
    echo "</p>";

    echo "<h1>";
    echo "Salario Novo";
    echo "</h1>";

    echo "<p>";
    echo "R$ " .$salarioNovo;
    echo "</p>";
?>