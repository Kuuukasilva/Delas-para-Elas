<?php

require_once 'processa.php';




     
    $sql = "DELETE FROM  tbl_postagem WHERE autora=$titulo";
    echo($sql);

    if(mysqli_query($conn , $sql )){
           

        header('Location:../front-end/publicacao/publicacao.php');
        
    }


    


?>




