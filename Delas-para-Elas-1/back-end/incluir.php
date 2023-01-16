<?php

require_once 'repositorio_usuario.php';
require_once 'conexao.php';
$repositorio = new RepositoriousuarioMySQL();

$nome_usuario =$_POST['nome'];
$email_usuario = $_POST['email'];
$senha_usuario = $_POST['senha'];



$numeroLinhas = $repositorio->Loginusuario($email_usuario,$senha_usuario);


if($numeroLinhas > 0){
    session_start();
    $_SESSION['log']="Ativo";
    $_SESSION['nome']=$nome_usuario;
    $_SESSION['email']=$email_usuario;
    header('Location:../front-end/home/index.html');
    
} else {
    $usuario = new usuarios(NULL,$nome_usuario,$email_usuario,$senha_usuario);
    $cadastra_usuario = $repositorio->Cadastrausuario($usuario);
    header('Location:../front-end/login-cadastro/login.php');
}




?>