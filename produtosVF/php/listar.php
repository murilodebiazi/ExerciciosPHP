<?php
require_once("../php/conectar.php");
require_once("../php/verificar_sessao.php");

// Consulta os produtos
$resultado = mysqli_query($conexao, "SELECT * FROM cadastro");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Lista de Produtos</title>
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
      <a href="../php/form-cadastrar.php" class="btn small">Cadastrar</a>
      <a href="../php/listar.php" class="btn small">Listar</a>
      <a href="../php/sair.php" class="btn small ghost">Sair</a>
    </nav>
  </header>

  <!-- Conteúdo principal -->
  <main class="card" style="padding: 30px;">
    <h1 class="h1 text-center">Lista de Produtos</h1>
    <p class="lead text-center">Gerencie os produtos cadastrados no sistema.</p>

    <!-- Mensagem de retorno -->
    <?php
      if (isset($_GET['retorno'])) {
          $retorno = $_GET['retorno'];
          if ($retorno === 'Produto excluído com sucesso!') {
              echo '<div class="mensagem-sucesso text-center mt-6">' . htmlspecialchars($retorno) . '</div>';
          } elseif ($retorno === 'Exclusão cancelada!') {
              echo '<div class="mensagem-sucesso text-center mt-6">' . htmlspecialchars($retorno) . '</div>';
          } elseif ($retorno === 'Produto atualizado com sucesso!') {
              echo '<div class="mensagem-sucesso text-center mt-6">' . htmlspecialchars($retorno) . '</div>';
          }
      }
    ?>

    <div class="mt-6">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome do Produto</th>
            <th style="width:150px;">Ações</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($linha = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
              <td><?php echo htmlspecialchars($linha['id']); ?></td>
              <td><?php echo htmlspecialchars($linha['nome']); ?></td>
              <td class="actions">
                <a href="form-editar.php?id=<?php echo $linha['id']; ?>" class="btn small">Atualizar</a>
                <a href="confirmar-excluir.php?id=<?php echo $linha['id']; ?>" class="btn small danger">Excluir</a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <?php
      mysqli_close($conexao);
    ?>

  </main>

  <!-- Rodapé -->
  <footer class="footer text-center">
    <p>Sistema de Cadastro de Produtos 2025&copy;</p>
  </footer>

</div>
</body>
</html>

