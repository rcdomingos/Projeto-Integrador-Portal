<?php
//matrix com os idiomas utilizados na pagina usar $ID para os Vetores EX: <?php echo $jazz[$ID][2]>
$jazz_pt = array("JAZZ");
$jazz_en = array("JAZZ");
$jazz_es = array("JAZZ");
$jazz = array('PT' => $jazz_pt, 'EN' => $jazz_en, 'ES' => $jazz_es);

//tag<title>  Titulo das paginas;
$titlePagina = array('PT' => "Jazz | Pagina inicial", 'EN' => "Jazz | Home", 'ES' => "Jazz | Pagina principal");
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
  <!--importandoo menu da pagina -->
  <?php
  include('../imports/menu-secundario.php');
  ?>
  <!-- Conteudo da pagina  -->
  <main id="content" class="font-jazz">
    <div class="home-jazz">
      <div class="container">
        <div class="row">
          <div class="col-7">
            <header role="banner" class="text-white pt-md-5 pt-sm-1">
              <h1 tabindex="0">O jazz não morreu</h1>
              <p>O século XX criou o Jazz, que imortalizou diversos artistas que formam a cultura do Jazz e hoje são considerados
                os melhores cantores de todos os tempos.</p>
            </header>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-md-4 mt-sm-2">
        <div class="col">
          <article class="text-center">
            <h2 class="jazz-h2 mb-3" tabindex="0">Conheça a historia do Jazz</h2>
            <p class="lead">O Jazz é um estilo musical e uma expressão artística que surgiu nos Estados Unidos, entre o final do
              século XIX e início do século XX. Uma manifestação musical que se originou principalmente de um legado religioso
              afro-americano, que influenciou diretamente na cultura do país.</p>
            <p class="lead">Não se sabe ao certo a origem da palavra jazz, mas era uma gíria usada entre os norte-americanos antes mesmo do surgimento da manifestação artística.</p>
            <p class="lead">Se você quer saber mais sobre essa manifestação musical, sua história, principais artistas e músicas, continue navegando no Portal!</p>
            <p class="lead"><a href="#" class="btn btn-lg btn-outline-dark" aria-label='Botão para ir para pagina origem,'>Veja mais</a></p>
          </article>
        </div>
      </div>
      <aside>
        <div class="row mt-md-4 mb-1">
          <div class="col-12 col-md-4 mb-3">
            <a href="artistas.php">
              <div id="jazz-home-1" class="d-inline-block rounded jazz-home-sct p-2">
                <h2 class="text-left">Artistas</h2>
                <p class="texto-home text-right">Conheça alguns artistas do jazz</p>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-4 mb-3">
            <a href="marcos.php">
              <div id="jazz-home-2" class="d-inline-block rounded jazz-home-sct p-2">
                <h2 class="text-left">Fatos e Marcos</h2>
                <p class="texto-home text-center">Veja os fatos que marcaram o ritmo</p>
              </div>
            </a>
          </div>
          <div class="col-12 col-md-4 mb-3">
            <a href="marcos.php">
              <div id="jazz-home-3" class="d-inline-block rounded jazz-home-sct p-2">
                <h2 class="text-left">Lançamentos</h2>
                <p class="texto-home">Confira os lançamentos</p>
              </div>
            </a>
          </div>
        </div>
      </aside>
    </div>
  </main>

  <!-- importando o footer da pagina -->
  <?php
  include('../imports/footer-secundario.php');
  ?>
</body>

</html>
