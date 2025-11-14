<?php require_once "function_upload.php"; ?>
<?php require_once "function_exibir_img.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Uploads</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <div class="form">
            <!-- enctype para realizar Uploads -->
            <form method="post" enctype="multipart/form-data" action="app.php">
<label for="arquivo">Faça o upload de seus arquivos:</label>
                <div class="itens-upload">
                    
                <input type="file" name="arquivo" id="arquivo" required>

                <button name="enviar">Enviar Arquivo</button>
            </div>

            </form>

            <?php uploadImages(); ?>
        </div>

        <div class="container">
            <h2>Galeria de Imagens</h2>
            <?php exibirImg(); ?>
        </div>
        
        <footer>Vitoria Fortes 2025</footer>
</body>

</html>