<?php
    #pegar os dados que vieram do formulario
    $cliente = $_POST['nome'];
    $telefone = $_POST['celular'];
    $email = $_POST['email'];

    #mostrar os dados
    echo "Cadastro realizado com sucesso!";
    echo "<br> <br>";
    echo "Cliente: " .$cliente;
    echo "<br> <br>";
    echo "Celular: " .$telefone;
    echo "<br> <br>";
    echo "E-mail: " .$email;

    #script para gravar os dados em arquivo txt
    $fs = fopen("dados.txt", "a");
    /*quebra linha - chr(10) é enter e chr(13) retorna cursos inicio linha */
    $quebra = chr(13).chr(10);
    fwrite ($fs,"Paciente: ".$cliente.$quebra);
    fwrite ($fs,"Telefone: ".$telefone.$quebra);
    fwrite ($fs,"E-mail: ".$email.$quebra);
    fwrite ($fs,"==============================".$quebra);
    fclose($fs); //fechar o arquivo
?>