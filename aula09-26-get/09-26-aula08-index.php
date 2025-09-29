<?php require_once "09-26-aula08-get.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="09-05-aula07-style.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        
    </header>

    <!-- MAIN -->
    <main>
        <h1>Usuarios Cadastrados</h1>
        <?php
        $order = "asc";
            if (isset($_GET['order'])) {
                if ($_GET['order'] == "asc") {
                    asort($dados);
                        $order = "desc";
                } else {
                    rsort($dados);
                }
            } 
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>
                        <a href="?order=<?php echo $order;?>">Nome</a>
                    </th>
                    <th>
                        <a href="?order=<?php echo $order;?>">E-mail</a>
                    </th>
                    <th>Telefone</th>
                    <th>Data de cadastro</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach ($dados as $dado) {
            ?>
            <tr>
                <td><?php echo $dado['nome'] ?></td>
                <td><?php echo $dado['email'] ?></td>
                <td><?php echo $dado['telefone'] ?></td>
                <td><?php echo $dado['cadastro'] ?></td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        <br>
        <form action="" method="GET">
            <input type="text" name="nome">
            <input type="text" name="email">
            <input type="submit" name="enviar">
        </form>
        
    </main>

    <!-- FOOTER -->
    <footer>
    </footer>

</body>
</html>