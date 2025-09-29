<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>
</head>
<body>
    <h2>Cadastro de Produtos</h2>
    <form action="../php/exec-cadastrar.php" method="post" enctype="multipart/form-data">
        <label>Nome do Produto:</label>
        <input type="text" name="nome" id="nome" size="50" required />
        <br><br>
		<input type="file" name="imagem" /> <br> <br>  
        <button type="submit">Cadastrar</button>
    </form>

<?php if (isset($_GET['status']) && $_GET['status'] === 'ok'): ?>
    <script type="text/javascript">
        alert("Produto cadastrado com sucesso!");
    </script>
<?php endif; ?>

</body>
</html>
