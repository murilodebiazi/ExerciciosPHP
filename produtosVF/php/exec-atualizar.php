<?php
require_once ("../php/conectar.php");
require_once("../php/verificar_sessao.php");

// Verifica se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['nome'])) {

    $id = intval($_POST['id']); // Protege contra injeção
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);

    $sql = "UPDATE cadastro SET nome='$nome' WHERE id=$id";

    if (mysqli_query($conexao, $sql)) {
        // Redireciona para listar.php com mensagem de sucesso
        $msg = urlencode('Produto atualizado com sucesso!');
        header("Location: ../php/listar.php?retorno=$msg");
        exit;
    } else {
        // Em caso de erro, exibe mensagem
        echo "Erro ao atualizar produto: " . mysqli_error($conexao);
    }

} else {
    // Acesso direto ou dados inválidos
    $msg = urlencode('Acesso negado!');
    header("Location: ../php/listar.php?retorno=$msg");
    exit;
}

mysqli_close($conexao);
?>
