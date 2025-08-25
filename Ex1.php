<?php
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $altura = $_POST['altura'];

    if($sexo == "masculino")
    {
        $altura = (72.7 * $altura) - 58;
    }
    else
    {
        $altura = (62.1 * $altura) - 44.7;
    }

    echo "<p>";
    echo $nome;
    echo "<br>";
    echo "Altura ideal: " . $altura;
    echo "</p>";
?>