<?php
//matrix com os idiomas utilizados na pagina usar $ID para os Vetores EX: <?php echo $jazz[$ID][2]>
$jazz_pt = array("JAZZ");
$jazz_en = array("JAZZ");
$jazz_es = array("JAZZ");
$jazz = array('PT' => $jazz_pt, 'EN' => $jazz_en, 'ES' => $jazz_es);

//tag<title>  Titulo das paginas;
$titlePagina = array('PT' => "Jazz | Artistas", 'EN' => "Jazz | Artists", 'ES' => "Jazz | Artistas");

?>
<?php
//PHP para verificar qual o idioma do html
include('../imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<?php
//importando o head da pagina
include('../imports/head.php');
?>

<body>
  <!-- menu da pagina -->
  <?php
  //importando o menu da pagina 
  include('../imports/menu-secundario.php');
  ?>
  <!-- Conteudo da pagina  -->
  <main id="content" class="font-jazz">
    <article>
      <div class="container mt-5">
        <div class="row">
          <div class="col box-texto-1">
            <h1 class="jazz-h1 mb-3" tabindex="0">Melhores cantores de Jazz de todos os tempos</h1>
            <p>O século XX criou o Jazz, que imortalizou diversos artistas que formam a cultura do Jazz e hoje são
              considerados os melhores cantores de todos os tempos. Você deve conhecer muitos deles, pois são ícones do
              Jazz. Criamos uma lista com os melhores cantores e artistas de Jazz de todos os tempos,
              veja se você conhece algum(a):</p>
          </div>
        </div>
        <div class="row justify-content-between">
          <div class="col-12 col-md-6 card-artista mt-4">
            <div class="artista">
              <div class="artista-image">
                <h3 class="shadow-sm" tabindex="0">Billie Holliday</h3>
                <img class="shadow-sm" src="../images/jazz/Billie-Holiday.jpg" alt="Foto de Billie Holliday cantando com os olhos fechados">
                <!-- <div class="social-links">
                  <a href="https://twitter.com/music" target="_blank" rel="noopener" aria-label="Twitter Billie Holliday">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div> -->
              </div>
              <p>Billie Hollyday é uma das mais importantes vozes do Jazz. Começou a sua carreira na década de 30.
                Teve uma infância muito complicada e acabou se mudando para Nova Iorque aos 14 anos, onde passou a
                trabalhar como servente de bordéis. Morreu aos 44 anos, no ano de 1959, por seu vício em heroína.</p>
            </div>
          </div>
          <div class="mx-auto col-12 col-md-6 card-artista mt-4">
            <div class="artista">
              <div class="artista-image">
                <h3 class="shadow-sm" tabindex="0">Miles Davis</h3>
                <img class="shadow-sm" src="../images/jazz/Miles_Davis.jpg" alt="Foto de Miles Davis com cara de bravo fazendo o sinal de silêncio com as mãos">
              </div>
              <p>Brilhante trompetista, Miles Davis também é um dos nomes que fizeram um marco na história do jazz.
                Foi responsável por criar o “cool jazz”, um dos estilos ou subgêneros do Jazz. Em 1959 Mile Davis
                lançou o seu mais notável álbum, <em>Kind of Blue</em> e que também se tornou um dos álbuns mais memoráveis da
                história da música.</p>
            </div>
          </div>
          <div class="col-12 col-md-6 card-artista mt-4 mt-md-1">
            <div class="artista">
              <div class="artista-image">
                <h3 class="shadow-sm" tabindex="0">Ella Fitzgerald</h3>
                <img class="shadow-sm" src="../images/jazz/Ella_Fitzgerald.jpg" alt="Foto de Ella Fitzgerald cantando com os olhos fechados e sorrindo">
              </div>
              <p>Nascida em Virgínia, no ano de 1917, Ella Fitzgerald, também conhecida como “The first Lady song”
                ou “Primeira dama da canção”, é uma das mais notáveis cantoras de Jazz do século XX. Estreou nos palcos
                com apenas 17 anos e se consagrou como uma grande artista do jazz. Ella morreu aos 79, em 1996.</p>
            </div>
          </div>
          <div class="col-12 col-md-6 card-artista mt-4 mt-md-5">
            <div class="artista">
              <div class="artista-image">
                <h3 class="shadow-sm" tabindex="0">Louis Armstrong</h3>
                <img class="shadow-sm" src="../images/jazz/Louis_Armstrong.jpg" alt="Foto de Louis Armstrong sorrindo e segurando um trompete nas mãos">
              </div>
              <p>Quem nunca ouviu falar em Louis Armstrong, uma lenda do Jazz. Dono de uma voz marcante, o trompetista
                gravou jazz pela primeira vez no ano de 1917. Era um músico talentoso e você provavelmente já ouviu um
                dos seus maiores clássicos <em>What a wonderful world</em>.</p>
            </div>
          </div>
          <div class="col-12 col-md-6 card-artista mt-4">
            <div class="artista">
              <div class="artista-image">
                <h3 class="shadow-sm" tabindex="0">John Coltrane</h3>
                <img class="shadow-sm" src="../images/jazz/John_Coltrane.jpg" alt="Foto de John Coltrane olhando serio para frente ao lado de um saxopone">
              </div>
              <p>John Coltrane iniciou sua carreira no Jazz ao 20 anos. Esteve junto com Miles Davis porque fazia parte
                da banda do trompetista. A convivência dos dois artistas era conturbada porque John Coltrane era viciado
                em heroína. Aos 33 anos passou à carreira solo e morreu novo, com apenas 40 anos.</p>
            </div>
          </div>
          <div class="col-12 col-md-6 card-artista mt-4 mt-md-0">
            <div class="artista">
              <div class="artista-image">
                <h3 class="shadow-sm" tabindex="0">Duke Ellington</h3>
                <img class="shadow-sm" src="../images/jazz/Duke_Ellington.jpg" alt="Foto de Duke Ellington sentando em frente a um piano escrevendo uma música">
              </div>
              <p>Duke Ellington é uma lenda do jazz: foi compositor, pianista e líder de orquestra estadunidense. Ellington
                foi primeiro músico do gênero musical a entrar para a Real Academia de Música de Estocolmo. Até hoje ainda é
                a maior influência no gênero. Entre os seus maiores clássicos estão <em>Satin Doll, Rockin' in Rhythm, Mood Indigo</em>.</p>
            </div>
          </div>
          <div class="col-12 col-md-6 card-artista mt-4 mt-md-1">
            <div class="artista ">
              <div class="artista-image">
                <h3 class="shadow-sm" tabindex="0">Frank Sinatra</h3>
                <img class="shadow-sm" src="../images/jazz/Frank_Sinatra.jpg" alt="Foto de Frank Sinatra cantando e olhando para o publico com a mão esquerda levantada">
              </div>
              <p>Frank Sinatra se destacou na música cantando pop, blues e jazz. Sinatra contribiu como cantor e produtor
                musical para a evolução do jazz. Em 1960, o cantor abriu a sua própria gravadora, a Reprise Records. E por
                meio dela, fez parceria com grandes nomes do gênero, como Duke Ellington. O cantor também gravou com Ella Fitzgerald
                e Lena Horne. Sinatra é dono de clássicos do jazz, a música <em>Fly me to The Moon</em>.</p>
            </div>
          </div>
          <div class="col-12 col-md-6 card-artista mt-4 mt-md-5">
            <div class="artista">
              <div class="artista-image">
                <h3 class="shadow-sm" tabindex="0">Chet Baker</h3>
                <img class="shadow-sm" src="../images/jazz/Chet_Baker.jpg" alt="Foto de Chet Baker olhando para o lado, segurando um trompete e aguardando para tocar">
              </div>
              <p>Chet Baker foi um exímio trompetista, considerado um dos melhores do jazz no comando do instrumento.
                O músico ficou conhecido em 1952, quando passou a fazer parte da banda de Gerry Mulligan, que era saxofonista
                de jazz. Lá, Baker gravou a primeira versão de <em>My Funny Valentine</em>.</p>
            </div>
          </div>
        </div>
      </div>
    </article>
    <!-- <a class="sr-only sr-only-focusable" href="#navprincipal">clique para voltar a menu das paginas <?php echo ucwords($pagina) ?></a> -->
  </main>
  <!-- footer da pagina -->
  <?php
  //importando o footer da pagina 
  include('../imports/footer-secundario.php');
  ?>
</body>

</html>


<!-- <div class="recipient-wrapper">
  <div class="recipient">
    <div class="recipient-image">
      <h3>Jim Carrey</h3>
      <img src="images/recipient-jim-carrey.jpg">
      <div class="social-links">
        <a href="https://twitter.com/JimCarrey" target="_blank" class="social-link">
          <img src="images/social-twitter.png">
        </a>
      </div>
    </div>
    <p class="caption">Jim Carrey’s comedic energy caught the eye of Rodney early in his stand-up career, and he’s since gone on to become a household name.</p>
  </div>
</div> -->
