<?php

// Fazer isset
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = sha1($_POST["senha"]);
$confSenha = sha1($_POST["conf-senha"]);

if ($senha != $confSenha){
    // throw error
}

?>