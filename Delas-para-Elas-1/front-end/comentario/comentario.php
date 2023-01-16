<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatos</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico.png">

</head>
<body>

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
                    <li><a href="../tipos-violencia/tp-violencia.html" target="_blank">Tipos de Violencia</a></li>
                    <li><a href="../legislacao/legislacao.html" target="_blank">Legislação</a></li>
                    <li><a href="../publicacao/publicacao.php" target="_blank">Publicações</a></li>
                    <li><a href="../home/logout.php" target="_blank">Logout</a></li>
                </ul>
            </nav>
        </header>
        </div>

        <script src="mobile-navbar.js"></script>

  

  <div class="title-conteiner">
    <h1>RELATOS</h1>
    <p></p>
  </div>

  
  <!-- The App Section
  <div class="container">
    <div class="row">
      <div class="column-66">
        <h1 class="xlarge-font"><b>The App</b></h1>
        <h1 class="large-font" style="color:MediumSeaGreen;"><b>Why buy it?</b></h1>
        <p><span style="font-size:36px">Take photos like a pro.</span> You should buy this app because lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button class="button">Download Application</button>
      </div>
      <div class="column-33">
          <img src="/w3images/img_app.jpg" width="335" height="471">
      </div>
    </div>
  </div>
   -->
  <!-- Clarity Section -->
  <div class="container">
    <div class="row">
      <div class="column-33">
        <img src="./img/relatos-banner.png" alt="App" width="335" height="471">
      </div>
      <div class="column-66">
        <h1 class="xlarge-font"><b>Sobre os Relatos</b></h1>
        <h1 class="large-font" style="color:white"><b>Por que usar?</b></h1>
        <p><span style="font-size:24px">Nos Relatos, sua voz é realmente ouvida.</span> Aqui, o Delas lhe oferece seu principal serviço: os Relatos, um ambiente virtual que promove a fala das mulheres por meio da divulgação de histórias impactantes e inspiradoras. Logo abaixo, você poderá se sentir livre para escrever seu histórico de violência ou mesmo desabafar sobre a sua realidade, de maneira totalmente anônima. Nunca deixe-os te calarem!</p>
        <br>
        <h1 class="large-font" style="color:white"><b>Por que usar?</b></h1>
        <p><span style="font-size:24px">É simples e fácil.</span> Basta registrar um título principal, que ficará disponível á todos na página de Publicações. Um pouco abaixo, há o registro de seu nome ou apelido, sendo algo totalmente opcional, já que registros anônimos são amplamente aceitos. Por fim, se liberte e conte ao mundo pelo o que você já viveu. Histórias de abuso, negligência, agressão moral ou mesmo sua realidade atual: o importante é ouvirmos seu desabafo. Vale ressaltar que usuários cadastrados poderão curtir e comentar seus relatos.</p>

      
      
      </div>
    </div>
  </div>
<!--   
  The App Section
  <div class="container">
    <div class="row">
      <div class="column-66">
        <h1 class="xlarge-font"><b>The App</b></h1>
        <h1 class="large-font" style="color:MediumSeaGreen;"><b>Why buy it?</b></h1>
        <p><span style="font-size:36px">Take photos like a pro.</span> You should buy this app because lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        <button class="button">Download Application</button>
      </div>
      <div class="column-33">
          <img src="/w3images/img_app.jpg" width="335" height="471" >
      </div>
    </div>
  </div> -->
  


  <br>
  <br>
  <div class="container-relato">
  <form action="../../back-end/processa.php"  method ="POST">
    <div class="row">
      <div class="col-25">
        <label for="titulo">Titulo</label>
      </div>
      <div class="col-75">
        <input type="text" id="titulo" name="titulo" placeholder="Titulo do seu relato..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="name">Autora</label>
      </div>
      <div class="col-75">
        <input type="text" id="name" name="autora" placeholder="Nome ou apelido..">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="relato">Relato</label>
      </div>
      <div class="col-75">
        <textarea id="relato" name="relato" placeholder="Diga ao mundo o que você já viveu.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Enviar">
    </div>
  </form>
</div>

<div class="conteiner-footer"></div>


</body>
</html>

