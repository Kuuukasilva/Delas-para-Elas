<?php





 //require_once '../../../back-end/conexao.php';
 //require_once '../../../back-end/repdados.php';
 //require_once '../../perfil-user/html/perfil.php';
//$repositorio = new RepositorioNomeMySQL();
 //$nome_usuario = $_POST['nome'];
  //$email_usuario=$_POST['email'];

  ?>




 











<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil User</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico.png">

  </head>
  

<?php 



//$variavel = $repositorio->Nome($nome_usuario,$email_usuario);

session_start();

//foreach ($variavel as $key) {
  //$nome = $key['nome_usuario'];
  //$email=$key['email_usuario'];




?>

  <!---------------------------------NAVBAR----------------------------------->
  <div class="navbar">
      <header>
        <nav>
          <a class="logo-img" href="../home/index.html">
            <img src="./img/delas-para-elas.png" alt="">
          </a>
          <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
          </div>
          <ul class="nav-list">
            <li><a href="../sobre-nos/sobrenos.html" target="_blank">Sobre Nós</a></li>
            <li><a href="../tipos-violencia/" target="_blank">Tipos de Violencia</a></li>
            <li><a href="../legislacao/legislacao.html" target="_blank">Legislação</a></li>
            <li><a href="../publicacao/publicacao.php" target="_blank">Publicações</a></li>
            <li><a href="../home/logout.php" target="_blank">Logout</a></li>
           
          </ul>
        </nav>
      </header>
    </div>

    <button> <a href='../../back-end/delete.php'>delete</a> </button

    <script src="mobile-navbar.js"></script>



    <!-- ------------------------------------   Imagem user  -------------------------------- -->

      <div class="container">
        <img class="avatar" src="./img/user.png" alt="Image-user" />
        <p class="username"></p>
      
        <ul>
          <li> 
            <p>nome usuario é:  <?php echo $_SESSION['nome'];?> </p>
          </li>
          <li>
            <p>email do usuario é: <?php echo   $_SESSION['email'];?></p>
          </li>
      </ul>

      <div class="title-publication">
        <h2>
          Publicações do Usuario
        </h2>
      </div>

      <br>

      

      <div class="row-publi">  

      

        <!-- coluna1 -->


        <div class="column-publi">
    
          <div class="card">
            <h1>Titulo: <?php  echo $_SESSION['titulo']?></h1>
            <b class="price"><?php echo $_SESSION['autora'] ; 
               echo $_SESSION['nome'] ?></b>
            <p>Relato: <?php   echo $_SESSION ['relato']; ?></p>;
             <a href='../../back-end/delete.php'>delete</a> 
         
            <div class="card-footer"> </div>
          </div>
    
          <div class="card">
            <h1>Titulo</h1>
            <b class="price"><?php echo $_SESSION['nome'] ?></b>
            <p>Relato:</p>
            <div class="card-footer"> </div>

          </div>
    
        </div>
    
        <!-- coluna2 -->

        <div class="column-publi">
          <div class="card">
            <h1>Titulo</h1>
            <b class="price"><?php echo $_SESSION['nome'] ?></b>
            <p>Relato:</p>
            <div class="card-footer"> </div>
          </div>
    
          <div class="card">
            <h1>Titulo</h1>
            <b class="price"><?php echo $_SESSION['nome'] ?></b>
            <p>Relato:</p>
            <div class="card-footer"> </div>
          </div>
    
    
        </div>
    
    
        </div>
      </div>
    
  <footer>  
    <div class="footer-mobile">
        <div class="footer-link">
          <div class="list-footer">
            <a href="../sobre-nos/sobrenos.html"  target="_blank">Sobre</a>
            <a href="../comentario/comentario.php" target="_blank">Comentar</a>
        </div>
      </div>
    </div>

  </footer>
    




      </div>

  </body>
</html>

          