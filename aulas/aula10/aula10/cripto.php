<?php 

echo $senha = "admin123";
echo "<hr>";
echo $cript = base64_encode($senha);
echo "<hr>";
echo base64_decode($cript);
echo "<hr>";
echo md5($senha);
echo "<hr>";
echo sha1($senha);
echo "<hr>";
echo password_hash($senha, PASSWORD_DEFAULT);