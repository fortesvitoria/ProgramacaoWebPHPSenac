<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3 - Formulário</title>
    <!-- <link rel="stylesheet" href="09-12-exericio-forms.css"> -->
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        :root {
        --fonte: "Montserrat", sans-serif;
        --off-white: #F9F6F3;
        --azul: #2176C4;
        --azul-hover: #246DB3;
        --sombra: 5px 5px 15px rgba(0,0,0,0.3);
        }

        body {
            font-family: var(--fonte);
            font-weight: 500;
            background: #006bd6;
            background: linear-gradient(90deg,rgba(0, 107, 214, 1) 0%, rgba(30, 176, 122, 1) 35%, rgba(102, 229, 255, 1) 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: var(--off-white);
            border-radius: 20px;
            box-shadow: var(--sombra);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 2em;
            width: 250px;
            margin: 1em;
        }

        .btn {
            background-color: var(--azul);
            color: var(--off-white);
            font-family: var(--fonte);
            font-size: 16px;
            font-weight: 500;
            margin: 1em 0 2em 0;
            cursor: pointer;
            border: none;
            border-radius: 50px;
            padding: 0.5em;
            
        }

        .btn:hover{
            background-color: var(--azul-hover);
        }

        label{
            margin: 0.4em 0;
        }

        input {
            font-family: var(--fonte);
            margin-bottom: 0.4em;
        }
    </style>
</head>
<body>

    <main>
        <form action="" method="post" class="card">
            <h2>Formulario:</h2>
            <label for="lado1">Digite o valor do 1º lado:</label>
            <input type="number" name="lado1" required>
    
            <label for="lado2">Digite o valor do 2º lado:</label>
            <input type="number" name="lado2" required>
    
            <label for="lado3">Digite o valor do 3º lado:</label>
            <input type="number" name="lado3" required>
    
            <button name="enviar" class="btn">Verificar</button>
        </form>
    </main>
    
</body>

<?php
        if (isset($_POST['enviar'])) {
            
        
            if ($_POST['lado1'] == $_POST['lado2'] and $_POST['lado1'] == $_POST['lado3'] ) {
                echo '
                <div class="card">
                    <p>Primeiro lado: ' . $_POST['lado1'] . ' <br>  Segundo lado: ' . $_POST['lado2'] . ' <br>  Terceiro lado: ' . $_POST['lado3'] . '</p>
                    <p>Triângulo com 3 lados iguais: Equilátero</p>
                </div>';
            }
            elseif ($_POST['lado1'] != $_POST['lado2'] and $_POST['lado1'] != $_POST['lado3'] and $_POST['lado2'] != $_POST['lado3'] ) {
                echo '
                <div class="card">
                    <p>Primeiro lado: ' . $_POST['lado1'] . ' <br>  Segundo lado: ' . $_POST['lado2'] . ' <br>  Terceiro lado: ' . $_POST['lado3'] . '</p>
                    <p>Triângulo com 3 lados diferentes: Escaleno</p>
                </div>';
            }
            elseif ($_POST['lado1'] == $_POST['lado2'] and $_POST['lado1']!== $_POST['lado3'] or $_POST['lado3'] == $_POST['lado2'] and $_POST['lado3']!== $_POST['lado1']  ) {
                echo '
                <div class="card">
                    <p>Primeiro lado: ' . $_POST['lado1'] . ' <br>  Segundo lado: ' . $_POST['lado2'] . ' <br>  Terceiro lado: ' . $_POST['lado3'] . '</p>
                    <p>Triângulo com 2 lados iguais e 1 diferente: Isósceles</p>
                </div>';
            }


        }
    ?>

</html>