<?php
    $nome= $_POST['nome'];
    $horasTrabalhadas = $_POST['horasTotais'];
    $valorHora= $_POST['valorHora'];
    $numeroFilhos = $_POST['numeroFilhos'];
    $salarioFamilia= $numeroFilhos * 10;
    $salarioTotal = ($horasTrabalhadas * $valorHora) + $salarioFamilia;

    echo "<h1>Nome do Usuário:</h1>";
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo "<h1>Horas trabalhadas por mês:</h1>";
    echo "<br>";
    echo $horasTrabalhadas;
    echo "<br>";
    echo "<h1>Valor por hora:</h1>";
    echo "<br>";
    echo $valorHora;
    echo "<br>";
    echo "<h1>Valor do Salário Família:</h1>";
    echo "<br>";
    echo $salarioFamilia;
    echo "<br>";
    echo "<h1>SalarioTotal:</h1>";
    echo "<br>";
    echo $salarioTotal;
    echo "<br>";
?>