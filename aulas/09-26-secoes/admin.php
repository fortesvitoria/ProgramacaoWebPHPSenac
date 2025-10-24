<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel adm do site</title>
</head>
<body>
    <?php if (isset($_SESSION['ativa'])) { ?>
    
    <h1>Painel adm do site</h1>
    <h2>Bem vindo, <?php echo $_SESSION['usuario'];?></h2>

    <a href="deslogar.php">Sair</a>

    <?php
    } else {
        echo "Você não tem acesso a esta página.";
    }
    ?>
    
</body>
</html>