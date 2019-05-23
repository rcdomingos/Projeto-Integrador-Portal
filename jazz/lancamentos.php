<?php
//matrix com os idiomas utilizados na pagina usar $ID para os Vetores EX: <?php echo $jazz[$ID][2]>
$jazz_pt = array("JAZZ");
$jazz_en = array("JAZZ");
$jazz_es = array("JAZZ");
$jazz = array('PT' => $jazz_pt, 'EN' => $jazz_en, 'ES' => $jazz_es);

//tag<title>  Titulo das paginas;
$titlePagina = array('PT' => "Jazz | Lançamentos", 'EN' => "Jazz | Releases", 'ES' => "Jazz | Lanzamientos");
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
  <main id="content" class="destaque-jazz font-jazz">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8">
          <section>
            <div class="row mb-5">
              <div class="col">
                <h1 class="jazz-h1 mb-3" tabindex="0">Para desbravar o mundo do Jazz</h1>
                <p>Mais do que um gênero musical, o Jazz é uma manifestação artístico-cultural que surgiu em New Orleans, nos Estados Unidos,
                  no final do século XIX e início do XX. Ele tem raízes na música popular e se desenvolveu a partir de elementos do
                  Blues e Ragtime, sendo um dos espaços mais importantes de expressão da comunidade afro-americana.</p>
                <p>Considerado um dos gêneros mais ricos, pela mistura de instrumentos e elementos de outros ritmos, o
                  Jazz é a epítome do lifestyle masculino, sempre com boas referências e um estilo que inspira suavidade e elegância.</p>
                <p>Para quem está começando a desbravar esse mundo,selecionamos algumas playlists que vão trilhar o seu dia a dia e suas noites.</p>
              </div>
            </div>
            <!-- seção com as novidades do jazz -->
            <div class="card border-light mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="../images/jazz/jazzParaLeigos.jpg" class="card-img" alt="foto de um homem em pé tocando saxophone">
                </div>
                <div class="col-md-8">
                  <a href="https://open.spotify.com/user/manualdohomemmoderno/playlist/6ocOFWhGLzb4XatAIfiU3T" target="_blank" rel="noopener" class="card-link">
                    <div class="card-body">
                      <h5 class=" jazz-h5 card-title">O clássico é o primeiro passo.</h5>
                      <p class="card-text  mt-md-4 mt-1">O canal do Manual do Homem Moderno, no Spotify, fez uma playlist especial para quem não entende muito sobre o gênero, mas quer começar a ouvir algumas músicas e mergulhar nesse mundo.</p>
                      <p class="card-text"><small class="text-muted">Atualizado: 18/04/2019 - 14:35</small></p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="card border-light mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="../images/jazz/collJazz.jpg" class="card-img" alt="desenho de uma mulher deitada na piscina em cima de uma boia com a mão na agua">
                </div>
                <div class="col-md-8">
                  <a href="https://open.spotify.com/playlist/1GCVFbpYypodLFGepkhsxN" target="_blank" rel="noopener" class="card-link">
                    <div class="card-body">
                      <h5 class="jazz-h5 card-title">Relaxe com com um som cool.</h5>
                      <p class="card-text mt-md-4 mt-1">Dia estressante? Viagem longa? Ou você só está querendo relaxar em casa? Essa playlist foi feita para quem gosta de uma música ambiente cool e bem chill.</p>
                      <p class="card-text"><small class="text-muted">Atualizado: 18/02/2019 - 16:23</small></p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="card border-light mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="../images/jazz/lateNightJazz.jpg" class="card-img" alt="desenho de disco tocando musica">
                </div>
                <div class="col-md-8">
                  <a href="https://open.spotify.com/user/spotify/playlist/2clF8IuETuB6DzmQn7I4RM" target="_blank" rel="noopener" class="card-link">
                    <div class="card-body">
                      <h5 class="jazz-h5 card-title">Late night Jazz</h5>
                      <p class="card-text  mt-md-4 mt-1">A perfeita trilha de background para quando você quiser aproveitar sua noite. As músicas da playlist combinam com ambientes intimistas e aconchegantes, que fazem a criatividade e inspiração fervilhar.</p>
                      <p class="card-text"><small class="text-muted">Atualizado: 18/02/2019 - 18:23</small></p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-4">
          <aside class="bg-light">
            <img class="img-fluid" src="../images/jazz/top_100_jazz.jpg" alt="">
            <h2 id="info" tabindex="0" class="jazz-h2  text-right">As 100 maiores canções de jazz da história</h2>
            <p class="text-justify p-1">O sites especializados em música fizeram uma enquete mundial para eleger as 100 melhores canções da
              história do jazz. Foram citadas 1500 faixas por cerca de 10 mil participantes. As mais votadas integram a
              playlist do Spotify que você ouve logo abaixo.</p>
            <!-- Lista de musicas spotify -->
            <div aria-label="Reprodutor de da lista com as musicas" aria-describedby="info">
              <p><iframe src="https://embed.spotify.com/?uri=spotify%3Auser%3A124006003%3Aplaylist%3A6Q4JDAtMiarvYQlCAdV9ri" width="350" height="380"></iframe></p>
            </div>
            <a class="sr-only sr-only-focusable" href="https://open.spotify.com/playlist/6Q4JDAtMiarvYQlCAdV9ri">clique para ouvir as musicas no spotify</a>
          </aside>
        </div>
      </div>
    </div>
  </main>
  <!-- footer da pagina -->
  <?php
  //importando o footer da pagina 
  include('../imports/footer-secundario.php');
  ?>
</body>

</html>
