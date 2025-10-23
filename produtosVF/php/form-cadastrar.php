<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastrar Produto</title>
  <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<?php
// Exibir erros apenas em ambiente de desenvolvimento
ini_set('display_errors', 0);
error_reporting(E_ALL);

require_once("../php/conectar.php");
require_once("../php/verificar_sessao.php");
?>
<div class="container">

  <!-- Cabeçalho -->
  <header class="header">
    <a href="#" class="brand">
      <img src="../img/restrito.png" alt="Logo do sistema">
      <span>Área Administrativa</span>
    </a>
    <nav class="nav">
      <a href="../php/form-cadastrar.php" class="btn small">Cadastrar</a>
      <a href="../php/listar.php">Atualizar/Excluir</a>
      <a href="../php/sair.php" class="btn small ghost">Sair</a>
    </nav>
  </header>

  <!-- Conteúdo -->
  <main class="card" style="max-width: 500px; margin: 50px auto; padding: 30px;">
    <h1 class="h1 text-center">Cadastro de Produtos</h1>
    <p class="lead text-center">Preencha os dados abaixo para incluir um novo produto.</p>

    <form action="../php/exec-cadastrar.php" method="post" enctype="multipart/form-data" class="form mt-6">

      <div class="form-group">
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do produto" required>
      </div>

      <div class="form-group">
        <label for="imagem">Imagem do Produto:</label>
        <input type="file" name="imagem" id="imagem" accept="image/*">
      </div>

      <div class="text-center mt-6">
        <button type="submit" class="btn">Cadastrar</button>
      </div>
    </form>
    <?php
      //Exibir alerta de sucesso se houver retorno na URL
      if (isset($_GET['retorno']) && $_GET['retorno'] === 'ok') {
        echo '<div class="mensagem-sucesso text-center mt-6">Produto cadastrado com sucesso!</div>';
      }
    ?>
  </main>
  <!-- Rodapé -->
  <footer class="footer text-center">
    <p>Sistema de Cadastro de Produtos 2025 &copy; </p>
  </footer>
</div>
</body>
</html>
