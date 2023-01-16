<html>
    <body>
        <?php
            
            if(isset($_POST['acao'])){
                $arquivo = $_FILES['file'];
                $arquivo = explode('.',$arquivo['name']);

                if($arquivo[sizeof($arquivo)-1] != 'png'){
                    die('Voc^|e não pode fazer upload deste tipo de arquivo');
                }else{
                    echo 'podemos continuar. ';
                    move_uploaded_file($arquivo['tmp_name'],'uploads/',$arquivos['name']);
                }

            }
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" name="acao" value="Enviar"/> 
        </form>
    </body>
</html>