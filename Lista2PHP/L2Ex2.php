<?php
    $nome = $_POST['nome'];
    $media = $_POST['media'];

    if($media >= 7.0)
    {
        echo "<p>";
        echo $nome;
        echo " foi aprovado";
        echo "</p>";
    }
    else
    {
        echo "<p>";
        echo $nome;
        echo " ficou de recuperação";
        echo "</p>";
    }
?>