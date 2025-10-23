<?php
//Exibir erros apenas em ambiente de desenvolvimento
ini_set('display_errors', 0);
error_reporting(E_ALL);

require_once("../php/conectar.php");
require_once("../php/verificar_sessao.php");

// Valida o ID recebido
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id <= 0) {
  die("ID inválido.");
}

// Busca o produto pelo ID
$resultado = mysqli_query($conexao, "SELECT * FROM cadastro WHERE id = $id");
$linha = mysqli_fetch_assoc($resultado);

if (!$linha) {
  die("Produto não encontrado.");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Editar Produto</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

<div class="container">

 <!-- Cabeçalho -->
  <header class="header">
    <a href="#" class="brand">
      <img src="../img/restrito.png" alt="Logo do sistema">
      <span>Área Administrativa</span>
    </a>
    <nav class="nav">
      <a href="../php/form-cadastrar.php">Cadastrar</a>
      <a href="../php/listar.php" class="btn small">Listar</a>
      <a href="../php/sair.php" class="btn small ghost">Sair</a>
    </nav>
  </header>

  <!-- Conteúdo principal -->
  <main class="card" style="max-width: 500px; margin: 50px auto; padding: 30px;">
    <h1 class="h1 text-center">Editar Produto</h1>
    <p class="lead text-center">Atualize as informações do produto selecionado.</p>

    <form action="../php/exec-atualizar.php" method="post" class="form mt-6">
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($linha['id']); ?>">

      <div class="form-group">
        <label for="nome">Nome do Produto:</label>
        <input 
          type="text" 
          id="nome" 
          name="nome" 
          value="<?php echo htmlspecialchars($linha['nome']); ?>" 
          placeholder="Digite o novo nome" 
          required
        >
      </div>

      <div class="text-center mt-6">
        <button type="submit" class="btn">Atualizar</button>
        <a href="../php/listar.php" class="btn ghost">Voltar</a>
      </div>
    </form>

  </main>

  <!-- Rodapé -->
  <footer class="footer text-center">
    <p>Sistema de Cadastro de Produtos 2025&copy;</p>
  </footer>

</div>

</body>
</html>
