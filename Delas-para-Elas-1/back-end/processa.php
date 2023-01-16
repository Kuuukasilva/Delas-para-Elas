<?php

//require_once 'repositorio_relatos.php';
//require_once 'conexao.php';

$server ="localhost";
$user ="root";
$password ="";
$database="delas_para_elas" ;
$conn =mysqli_connect($server, $user , $password , $database );




session_start();
$titulo =$_POST['titulo'];
$autora = $_POST['autora'];
$relato= $_POST['relato'];
$_SESSION['log']="Ativo";
$_SESSION['titulo']=$titulo;
$_SESSION['autora']=$autora;
$_SESSION['relato']=$relato;



     
    $sql = "INSERT INTO tbl_postagem(titulo , autora , relato) VALUES ('$titulo','$autora','$relato')";
    echo($sql);

    if(mysqli_query($conn , $sql )){
           

        header('Location:../front-end/publicacao/publicacao.php');
        
    }


    


?>