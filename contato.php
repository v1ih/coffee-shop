<?php include 'includes/header.php'; ?>

<main>
    <h1>Contato</h1>
    <form action="contato.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" required></textarea>

        <button type="submit">Enviar</button>
    </form>
</main>

<?php include 'includes/footer.php'; ?>
