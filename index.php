<?php
$home_pt = array('O Seu Portal da Música', 'Os melhores artistas e as musicas mais tocadas no momento você encontra aqui no Ecletic.Music.', "Navegue pelo site e aproveite todo o conteúdo feito para você que adora e curte boa musica.",
  'As músicas do Momento', "Aumente o Som e ouça nossas indicações", "Quer tocar aquela Musica?", "Veja Mais", "Notícias e Novidades", "Fique por dentro das novidades do Mundo da Música", "Daniel Realiza sonho de família em Ibiúna",
  "O novo sucesso da Katy Perry", "Entrevista com The Strokes", "Noticias", "Novidades", "As melhores músicas", "classificação completa", "Curte boa Música?", "Confira então nossas indicações", "Playlists",
  "Confira nossas playlists com as melhores seleções","semanal","mensal", "anual");
$home_en = array('Your Music Portal', 'The best artists and the most played songs at the moment you can find it here at Ecletic.Music.', "Browse the site and enjoy all the content made for you who loves and enjoy good music.",
  "Momento's Songs", "Increase the Sound and hear our indications", "Quer tocar aquela Musica?", "See more", "News and Updates", "Stay tuned for the news of the World of Music", "Daniel Realizes family dream in Ibiúna",
  "The new success of Katy Perry", "Interview with The Strokes", "News", "News", "The best songs", "complete rankings", "Enjoy good music?", "Check out our indications", "Playlists", "
  Check out our playlists as the best selections","weekly","monthly", "annual");
  $home_es = array('Tu portal de música','Los mejores artistas y las canciones más reproducidas en este momento, lo puedes encontrar aquí en Ecletic.Music.',"Navega por el sitio y disfruta de todo el contenido creado para ti que ama y disfruta de la buena música.",
  "Canciones del Momento","Aumentar el sonido y escuchar nuestras indicaciones","¿Quiere tocar esa música?","Mira más", "Noticias y actualizaciones","Manténgase atento a las noticias del mundo de la música","Daniel realiza el sueño familiar en Ibiúna",
  "El nuevo éxito de Katy Perry","Entrevista con The Strokes","Noticias","Noticias","Las mejores canciones","Clasificación completa","¿Disfrutar de buena música?","Echa un vistazo a nuestras indicaciones","Listas de reproducción","
   Echa un vistazo a nuestras listas de reproducción como las mejores selecciones","semanal","mensuales","anual");
  $home = array('PT'=> $home_pt,'EN' => $home_en,'ES'=> $home_es);
//usar $ID para os Vetores
?>
<?php
//PHP para verificar qual o idioma do html
include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang ="<?php echo $lang ?>">
  <?php
  //importando o head da pagina
  include('imports/head.php');
  ?>
  <body>
    <!-- Menu top das paginas -->
    <?php
    include('imports/menu.php');
    ?>
    <!-- Conteúdo do pagina -->
   <main>
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators my-carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <article class="carousel-item active">
          <div class="first-slide slide-carrocel slide-1"></div>
          <div class="container">
            <div class="carousel-caption text-left">
              <h1><?php echo $home[$ID][0] ?></h1>
              <p><?php echo $home[$ID][1] ?></p>
              <p><?php echo $home[$ID][2] ?></p>
            </div>
          </div>
        </article>
        <section class="carousel-item">
          <div class="second-slide slide-carrocel slide-2"></div>
          <div class="container">
            <div class="carousel-caption">
              <h1><?php echo $home[$ID][3] ?></h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-sm btn-outline-light" href="<?php echo "ranking.php" . $link ?>"  role="button"><?php echo $home[$ID][6] ?></a></p>
            </div>
          </div>
        </section>
        <section class="carousel-item">
          <div class="third-slide slide-carrocel slide-3"></div>
          <div class="container">
            <div class="carousel-caption text-right">
              <h1><?php echo $home[$ID][4] ?></h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-sm btn-outline-light" href="<?php echo "indicacoes.php" . $link ?>" role="button"><?php echo $home[$ID][6] ?></a></p>
            </div>
          </div>
        </section>
        <section class="carousel-item">
          <div class="four-slide slide-carrocel slide-4"></div>
          <div class="container">
            <div class="carousel-caption text-right">
              <h1><?php echo $home[$ID][5] ?></h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-sm btn-outline-light" href="<?php echo "cifras.php" . $link ?>" role="button"><?php echo $home[$ID][6] ?></a></p>
            </div>
          </div>
        </section>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
    <div class="container mt-5">
      <!-- As colun com os testos das Noticias -->
      <aside class="art-home mt-3">
        <div class="row">
          <div class="col">
            <h2><?php echo $home[$ID][7] ?></h2>
            <p><a href="<?php echo "noticias.php" . $link ?>"><?php echo $home[$ID][8] ?></a></p>
          </div>
        </div>
        <div class="row text-center home-geral">
          <div class="col-12 col-lg-4">
            <a href="<?php echo "noticias.php" . $link ?>"><img class="rounded img-fluid" src="images/principal/home-1.jpg" alt="Generic placeholder image"></a>
            <h2><?php echo $home[$ID][9] ?></h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
              vehicula ut id elit. <span class="badge badge-info"><?php echo $home[$ID][12] ?></span></p>
          </div>
          <div class="col-12 col-lg-4">
            <a href="<?php echo "noticias.php" . $link ?>"><img class="rounded img-fluid" src="images/noticias/slide/slide-01.jpg" alt="Generic placeholder image"></a>
            <h2><?php echo $home[$ID][10] ?></h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
              vehicula ut id elit.<span class="badge badge-success"><?php echo $home[$ID][13] ?></span></p>
          </div>
          <div class="col-12 col-lg-4">
            <a href="<?php echo "noticias.php" . $link ?>"><img class="rounded img-fluid" src="images/principal/home-3.jpg" alt="Generic placeholder image"></a>
            <h2><?php echo $home[$ID][11] ?></h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
              vehicula ut id elit. <span class="badge badge-success"><?php echo $home[$ID][13] ?></span></p>
          </div>
        </div>
      </aside>
    </div><!-- /.container -->
    <div class="container mt-5">
      <div class="row">
        <!--Section com o resumo dos rankings -->
        <div class="col-lg-4 mt-2">
          <section class="rank p-3 mb-5 rounded">
            <div class="row">
              <div class="col">
                <h2 class="h4 text-center"><?php echo $home[$ID][14] ?></h2>
              </div>
            </div>
            <div class="row no-gutters align-items-center">
              <div class="col-5">
                <img class="img-fluid" src="images/principal/ranking.png" alt="Top da Paradas">
                <p class="tt-rank">Top <img src="images/principal/star-solid.png"
                alt="icone estrela"> 10 <?php echo $home[$ID][20] ?></p>
              </div>
              <div class="col-7">
                <ol>
                  <li class="r-item">Lorem ipsum dolor sit amet</li>
                  <li class="r-item">Consectetur adipiscing elit</li>
                  <li class="r-item">Suspendisse aliquam felis</li>
                </ol>
              </div>
            </div>
            <div class="row no-gutters align-items-center">
              <div class="col-5">
                <img class="img-fluid" src="images/principal/ranking.png" alt="Top da Paradas">
                <p class="tt-rank">Top <img src="images/principal/star-solid.png"
                alt="icone estrela"> 10 <?php echo $home[$ID][21] ?></p>
              </div>
              <div class="col-7">
                <ol>
                  <li class="r-item">Dui sodales euismod</li>
                  <li class="r-item">Vestibulum mollis justo</li>
                  <li class="r-item">At tortor suscipit</li>
                </ol>
              </div>
            </div>
            <div class="row no-gutters align-items-center">
              <div class="col-5">
                <img class="img-fluid" src="images/principal/ranking.png" alt="Top da Paradas">
                <p class="tt-rank">Top <img src="images/principal/star-solid.png"
                alt="icone estrela"> 10 <?php echo $home[$ID][22] ?></p>
              </div>
              <div class="col-7">
                <ol>
                  <li class="r-item">In viverra libero laoreet</li>
                  <li class="r-item">Integer sit amet massa</li>
                  <li class="r-item">Molestie tortor non</li>
                </ol>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p><a href="<?php echo "ranking.php" . $link ?>"><?php echo $home[$ID][15] ?></a></p>
              </div>
            </div>
          </section>
        </div>
        <!-- section com as sugestões de musicas -->
        <div class="col-lg-8">
          <div class="row">
            <section class="home-indica">
              <div class="container-fluid">
                <h2><?php echo $home[$ID][16] ?></h2>
                <p><a href="<?php echo "indicacoes.php" . $link ?>"><?php echo $home[$ID][17] ?></a></p>
                <!-- Linha 1 da sugestão -->
                <div class="row justify-content-md-center text-center">
                  <div class="col-6 col-md-4">
                    <img class="rounded img-fluid" src="images/hip-hop/home4.jpg" alt="CD The Weeknd">
                    <p>The Weeknd</p>
                  </div>
                  <div class="col-6 col-md-4">
                    <img class="rounded img-fluid" src="images/pop/lady.jpg" alt="CD Lady Gaga">
                    <p>Lady Gaga</p>
                  </div>
                  <div class="no-display col-6 col-md-4">
                    <img class="rounded img-fluid" src="images/indie/imagine-dragons-destaques.jpg" alt="CD Imagine Dragons">
                    <p>Imagine Dragons</p>
                  </div>
                </div>
                <!-- Linha 2 da sugestão -->
                <div class="row justify-content-md-center align-items-center text-center">
                  <div class="col-6 col-md-4">
                    <img class="rounded img-fluid" src="images/indie/nirvana-destaques.jpg" alt="CD Nirvana">
                    <p>Nirvana</p>
                  </div>
                  <div class="col-6 col-md-4">
                    <img class="rounded img-fluid" src="images/sertanejo/lancamento-01.jpg" alt="CD Luan Santana">
                    <p>Luan Santana</p>
                  </div>
                  <div class="no-display col-6 col-md-4">
                    <img class="rounded img-fluid" src="images/principal/home-8.jpg" alt="CD Zé Neto e Cristiano">
                    <p>Zé Neto e Cristiano</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="row no-gutters mb-md-4 mb-lg-0">
            <div class="col-12">
              <section class="playlists">
                <h3><?php echo $home[$ID][18] ?></h3>
                <p><?php echo $home[$ID][19] ?></p>
                <div class="row text-center">
                  <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                    <a href="https://www.spotify.com/br" target="_blank">
                      <img class="rounded img-fluid" src="images/principal/spotify.jpg" alt="Playlist Spotify.">
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                    <a href="https://www.deezer.com/br/" target="_blank">
                      <img class="rounded img-fluid" src="images/principal/deezer.jpg" alt="Playlist Deezer.">
                    </a>
                  </div>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- importando o footer da pagina -->
  <?php
  include('imports/footer.php');
  ?>

  </body>
</html>
