<?php 

session_start();

//Limpar os caches
session_unset();
//Encerra a sessão
session_destroy();

//Redireciona 
header("location: index.php");