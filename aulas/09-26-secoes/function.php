<?php 

if (isset($_POST['logar'])) {
    if (!empty($_POST['usuario']) and !empty($_POST['senha'])) {
        if ($_POST['usuario'] == "admin" and $_POST['senha'] == "123") {
            session_start();
            $_SESSION['usuario'] = $_POST['usuario'];
            $_SESSION['ativa'] = true;
            
            echo "<a href='admin.php'>Acessar</a>";
            
            //redireciona páginas
			header("location: admin.php");
            
        } else {
            echo "Usuário ou senha inválidos.";
            echo "<a href='login.php'>Voltar</a>";
        }
    }
}

// inica sessao
// session_start();
// $_SESSION['usuario'] = "Fernando";
// $_SESSION['email'] = "fe@gmail.com";
// $_SESSION['ativa'] = true;
