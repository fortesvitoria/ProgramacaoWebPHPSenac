<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC CURSOS</title>
    <link rel="stylesheet" href="09-05-aula07-style.css">
</head>
<body>
    <!-- TOPO -->
    <?php require "09-05-aula07-layout/09-05-aula07-topo.php"; ?>
    <!-- require - para arquivos com funções -->


    <!-- MENU -->
    <?php include "09-05-aula07-layout/09-05-aula07-menu.php"; ?>
    <!-- include - para incluir partes -->
    <!-- include_once "09-05-aula07-layout/09-05-aula07-menu.php"; -->
    <!-- include_once - para incluir partes, once impede repetição, é boa pratica utilizar once -->


    <!-- BANNER -->
    <section id="banner">BANNER</section>

    <!-- MAIN -->
    <main>
        <h1>ABC CURSOS</h1>
        <p>Conheça nossos cursos</p>
    </main>

    <!-- FOOTER -->
    <footer>
    <?php require_once "09-05-aula07-layout/09-05-aula07-rodape.php"; ?>
    <?php require_once "09-05-aula07-layout/09-05-aula07-rodape.php"; ?>
    <!-- require_once - para arquivos com funções, once impede repetição, é boa pratica utilizar once -->
    </footer>

</body>
</html>