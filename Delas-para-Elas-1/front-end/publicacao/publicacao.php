
<?php

session_start();

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico.png">
    <title>Publicação</title>
</head>
<body>

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
          <li><a href="#">Publicações</a></li>
         
        </ul>
      </nav>
    </header>
  </div>

  <script src="mobile-navbar.js"></script>
 


  <div class="title-conteiner">
    <h1>
      PUBLICAÇÕES
    </h1>

    <p>
      <b>Ressalte sua voz e nos conte a sua história. </b> Na aba de Publicações, você encontrará os Relatos: fatos e vivências de mulheres que sofreram ou ainda sofrem com a violência. Explore casos e, com um cadastro, comente naqueles que mais lhe impactaram. Se sinta livre também para criar seus próprios registros, sendo eles totalmente anônimos ou não: este é o <b>seu</b> espaço.
    </p>
  </div>
  <div class="conteiner-button"> 

  <div class="row-publi">  

    <div class="column-publi">

      <div class="card">
          <br>
            <div id="id01" class="w3-modal">
            <div class="w3-modal-content">
              <div class="w3-container">
                <br>
                <br>
             
                <h2>Titulo    :    <?php 
                
                
                echo $_SESSION['titulo'];
                ?></h2>
                <b class="price">user: <?php 
               echo $_SESSION['autora'];?></b>

                <h3>Relatos:</h3>
                <p><?php 
                  echo $_SESSION['relato'];?>.</p>
                <div class="card-footer"> </div>

              </div>
            </div>
          </div>       
      </div>
      
      <div class="card">
      <br>
      <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
          <div class="w3-container">
            <br>
            <br>

            <h2>Com um grupo de amigas</h2>
            <b class="price">Carla Dias</b>

            <h3>Relatos:</h3>
            <p>
            O caso que me deixou até meio traumatizada
            foi uma vez que eu estava na Barra, indo para
             o camarote com algumas amigas. Eu estava indo
              e o cara vindo. Ele era muito alto, muito grande.
               Ele veio, meteu a mão em mim, na frente, na... e
                apertou. Eu fiquei tão assustada que não tive reação.
                 Eu tenho 1,70m, olhei para cima, ele devia ter uns 
                 2 metros, olhei assustada e saí. Foi aquele segundo
                  que você fica olhando para a pessoa e ele saiu dando
                   aquele riso malicioso. Se eu tivesse num lugar deserto,
                    vazio, eu teria sido estuprada. Eu tinha uns 28 anos.
                     A gente estava numa filinha, então a amiga que estava
                      atrás de mim viu, me puxou, mas foram aqueles segundos
                       intermináveis. Ele estava sozinho, não foi nem nada 
                       em grupo. Mas ele foi invasivo, tocou numa parte íntima.
                        Foi bem difícil, você se sente impotente, não tinha polícia,
                         não tinha ninguém perto. 
            </p>
            <div class="card-footer"> </div>

          </div>
        </div>
      </div>       
  </div>

    <div class="card">
      <br>
      <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
          <div class="w3-container">
            <br>
            <br>

            <h2>Titulo O Passado de Minha Mãe </h2>
            <b class="price"> (perfil do usuário original do TCC) </b>

            <h3>Relatos:</h3>
            <p>
            Bom, venho utilizando bastante o Delas nos últimos dias: é um relato mais impactante
             do que o outro!! Por isso, pensei em descrever uma antiga história de minha mãe, com
              o marido anterior daquele que seria meu pai. Ela me conta como ele era totalmente 
              abusivo dentro e fora de casa. Talvez seja algo da época, mas eu duvido muito. Era
               alcoólatra e, mesmo sendo bem diferente no começo, se tornou um pesadelo para minha
                mãe nos anos seguintes. Ela conseguiu encerrar o contato com o ex-marido por conta
                 do meu pai, que a conheceu e forneceu um auxílio com justiça por ser um policial.
             Me imagino nesse ambiente e penso: eu jamais conseguiria viver com um homem desses!! 
            </p>
            <div class="card-footer"> </div>

          </div>
        </div>
      </div>       
  </div>

  </div>

    <div class="column-publi">

      <div class="card">
          <br>
          <div id="id01" class="w3-modal">
            <div class="w3-modal-content">
              <div class="w3-container">
                <br>
                <br>

                <h2>No Metrô</h2>
                <b class="price"> Anônima </b>

                <h3>Relatos:</h3>
                <p>
                Constantemente, sou vítima de assédio no ônibus e no metrô.
                 Os homens aproveitam-se da lotação para abusar da gente.
                  No metrô, geralmente, mudo de vagão quando ocorre isso.
                   Acho que falta informação para as mulheres fazerem a denúncia.
                    Acredito que essa campanha pode ajudar a diminuir ou coibir esse
                     tipo de abuso que ocorre diariamente 
                </p>
                <div class="card-footer"> </div>
              </div>
            </div>
          </div>       
      </div>

    <div class="card">
      <br>
      <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
          <div class="w3-container">
            <br>
            <br>

            <h2>Fui casada com o meu pior inimigo</h2>
            <b class="price"> Iane Santos </b>

            <h3>Relatos:</h3>
            <p>
            Era ele quem mandava em casa, era ele quem sustentava. Eu me vi obrigada a obedecer. Por mais que ele melhorasse, não demorava três dias e começava a agir como antes. Quando eu disse a ele que não queria mais o casamento, ele gargalhou. Me chamou de fracassada, de derrotada. Eu me sentia um lixo e por muito tempo acreditei em tudo que ele falava ao meu respeito. Foram muitas piadas e provocações até eu conseguir superar tudo isso, até quando eu decidi ir na delegacia e pedi a medida protetiva. Hoje eu estou bem, realizando meu sonho. Hoje eu sei que sou exemplo para outras mulheres, antes tinha medo até de falar, mas hoje eu sei a importância de contar a minha história. Eu sinto orgulho de ter sobrevivido. 
            </p>
            <div class="card-footer"> </div>

          </div>
        </div>
      </div>       
  </div>

    <div class="card">
      <br>
      <div id="id01" class="w3-modal">
        <div class="w3-modal-content">
          <div class="w3-container">
            <br>
            <br>

            <h2>Estou sendo abusada?</h2>
            <b class="price">Anônima</b>

            <h3>Relatos:</h3>

            <p>
            Olá a todos. Nesses meses passados, venho desconfiando de meu marido 
            e de algumas de suas condutas. Somos casados há 6 anos e ele sempre foi
             alguém totalmente doce e respeitoso. Porém, desde que perdeu o emprego,
              ele tem se tornado outra pessoa. Tem gritado comigo em momentos desnecessários
               e até pediu a senha do meu Instagram. Teve até uma vez onde ele me agarrou pelo
                braço e me puxou, pra sair da frente. Ele sempre nega esses ocorridos e eu repenso
                 se isso é apenas algo da minha cabeça. Mas, com ele consigo ver um 
            futuro melhor e uma família. Vocês acham mesmo que estou sendo abusada?
            </p>
          
            <div class="card-footer"> </div>

          </div>
        </div>
      </div>       
  </div>

  </div>

  <div class="column-publi">

    <div class="card">
        <br>
        <div id="id01" class="w3-modal">
          <div class="w3-modal-content">
            <div class="w3-container">
              <br>
              <br>

              <h2>Por Conta da Minha Roupa </h2>
              <b class="price"> Laís Guimarães </b>

              <h3>Relatos:</h3>
              <p>
              Certo dia, ainda quando cursava o ensino fundamental II,
               fui de shorts a escola, e me recordo de um dos meus professores 
               ter acariciado as minhas coxas e a minha virilha, na hora e devido
                a falta de informação daquilo ser certo ou não, fiquei sem saber o
                 que fazer e como reagir. Apenas anos depois, me dei conta do quão 
                 grave aquilo era, e o quão importante é sermos ensinadas desde muito
                  novas a como lidar e a quem recorrer caso ocorram situações semelhantes a essa. 
              </p>
              <div class="card-footer"> </div>
            </div>
          </div>
        </div>       
    </div>

  <div class="card">
    <br>
    <div id="id01" class="w3-modal">
      <div class="w3-modal-content">
        <div class="w3-container">
          <br>
          <br>

          <h2>Quando Era Mais Nova</h2>
          <b class="price">Anônima</b>

          <h3>Relatos:</h3>
          <p>
          Acho que a maioria das meninas já foram assediadas um dia, e o pior,
           nem sempre a gente sabe que foi assédio. Desde meus 10 anos lembro de
            ouvir de homens mais velhos palavras absurdas sobre o meu corpo. Mas
             o pesadelo veio aos 14 anos, numa noite de março. Lembro que tinha 
             ido a uma festa e perdi meu brinco, eu tinha bebido e estava procurando 
             o tal brinco. Quando o namorado de uma amiga minha me viu no banheiro, 
             falou que ia me ajudar a procurar. Mas ele me levou para um quarto, me 
             segurou e me estuprou. Eu lembro de sentir o cheiro do sangue, o desespero
              de gritar e de ter alguém segurando a porta. Claro que não contei para ninguém 
              porque me senti culpada. Senti que meu comportamento me levou àquilo. 
          </p>
          <div class="card-footer"> </div>

        </div>
      </div>
    </div>       
</div>

  <div class="card">
    <br>
    <div id="id01" class="w3-modal">
      <div class="w3-modal-content">
        <div class="w3-container">
          <br>
          <br>

          <h2>Meu Maior Trauma</h2>
          <b class="price"> Regina de Souza </b>

          <h3>Relatos:</h3>
          
          <p>] Olá, boa tarde!! Acabei descobrindo esse site de Relatos pela indicação de uma colega
             de trabalho. Por isso, decidi contar uma história que sempre digo pra algumas amigas que
              conheço. Quando era criança, vivia junto a minha mãe e padrasto. Nunca gostei muito dele,
               pois sempre preferi meu pai e nunca entendia o por quê da separação: e isso me demorou 
               anos e muita maturidade. Este meu padrasto nunca se importou realmente com a família, por 
               isso, num dia estressante, durante uma discussão (que eu assistia a distância), ele se virou
                e deu um tapa muito forte no rosto na minha mãe. Fiquei totalmente perplexa e saí correndo pro quarto,
             chorei muito. Espero que as novas gerações nunca passem e nem presenciem algo do tipo!! 
            </p>

          <div class="card-footer"> </div>

        </div>
      </div>
    </div>       
</div>

</div>


  </div>
  </div>
  </div>
  </div>

  <script src="modal.js"></script>

  <!-- <div class="botton-coment">
    <a href="#" ><button>Veja Mais</button></a>
  </div>

  <div class="conteiner"></div>

  <div class="conteiner-white"></div>
 -->

 <footer>  
  <div class="footer-mobile">
      <div class="footer-link">
        <div class="list-footer">
          <a href="../sobre-nos/sobrenos.html"  target="_blank">Sobre</a>
          <a href="../comentario/comentario.php" target="_blank">Comentar</a>
          <a href="../perfil/perfil.php" target="_blank">Meu Perfil</a>
      </div>
    </div>
  </div>

</footer>
    




</body>
</html>
