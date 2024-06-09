<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ação entre Amigos - CSL</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Ação entre Amigos - CSL</h1>
        <h2>Prêmio: <?php echo $premio; ?></h2>
        <p>Valor do bilhete: R$ <?php echo number_format($valor, 2, ',', '.'); ?></p>
        
        <!-- Imagem do prêmio (opcional) -->
        <img src="premio.jpg" alt="Imagem do Prêmio" class="premio-img">

        <div class="bilhetes">
            <?php
                $premio = "Rádio JBL";
                $valor = 5.00;
                $quantNum = 5;

                for ($i = 1; $i <= $quantNum; $i++) {
                    echo "<div class='bilhete'>Bilhete Número: $i</div>";
                }
            ?>
        </div>

        <form action="process.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            
            <button type="submit">Participar</button>
        </form>
    </div>
</body>
</html>
