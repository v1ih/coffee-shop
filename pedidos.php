<?php include 'includes/header.php'; ?>

<main>
    <h1>Faça seu Pedido</h1>
    <form action="pedidos.php" method="POST">
        <label for="produto">Escolha um Produto:</label>
        <select id="produto" name="produto">
            <option value="cafe">Café Expresso</option>
            <option value="bolo">Bolo de Chocolate</option>
            <option value="sanduiche">Sanduíche Natural</option>
        </select>

        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" min="1" required>

        <label for="endereco">Endereço de Entrega:</label>
        <input type="text" id="endereco" name="endereco" required>

        <button type="submit">Enviar Pedido</button>
    </form>
</main>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $produto = $_POST['produto'];
        $quantidade = $_POST['quantidade'];
        $endereco = $_POST['endereco'];
    
        // Aqui você pode salvar os dados em um banco de dados ou enviar por e-mail
        echo "<p>Pedido recebido: $quantidade de $produto para entrega em $endereco.</p>";
    }
?>

<?php include 'includes/footer.php'; ?>
