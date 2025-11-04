<?php

session_start();
//limpar os caches
session_unset();
//Encerra a sessão
session_destroy();

header("location: login.php");