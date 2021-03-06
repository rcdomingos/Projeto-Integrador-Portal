<?php
$hiphop_pt = array("Destaques: Premiações", "O AMA é uma premiação reconhecida mundialmente, ao lado das premiações Grammy e Billboard.", "Comentário de Artistas", "Prêmio", "Entre as diferentes manifestações artísticas do movimento hip hop, a música se insere como papel primordial para inúmeras variações existentes em nossos dias.");
$hiphop_en = array("Highlights: Awards", "The AMA is a world-renowned award, alongside the Grammy and Billboard awards.", "Artists Commentary", "Award", "Among the different artistic manifestations of the hip hop movement, music is inserted as a primordial role for the innumerable variations existing in our days.");
$hiphop_es = array("Destacados: premios", "El AMA es una premiación reconocida mundialmente, junto a los premios Grammy y Billboard.", "Comentario de Artistas", "Premio", "Entre las diferentes manifestaciones artísticas del movimiento hip hop la música se inserta como papel primordial para innumerables variaciones existentes en nuestros días.");
$hiphop = array('PT' => $hiphop_pt, 'EN' => $hiphop_en, 'ES' => $hiphop_es);
// print_r($sertanejo);
//usar $ID para os Vetores
//tag<title>  Titulo das paginas;
$titlePagina = array('PT' => "Hip Hop | Pagina inicial", 'EN' => "Hip Hop | Home", 'ES' => "Hip Hop | Pagina principal");

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
  <main id="content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 mt-4 mb-4">
          <h1 id="preto" class="text-white bg-dark text-center font-italic font-weight-bold" tabindex="0"><?php echo $hiphop[$ID][0] ?></h1>
          <div class="jumbotron mt-4">
            <h1 class="display-4">American Music Awards</h1>
            <hr class="my-4">
            <p><?php echo $hiphop[$ID][1] ?></p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-7">
            <h4 id="preto" class="text-white bg-dark text-center" tabindex="0"><?php echo $hiphop[$ID][2] ?></h4>
            <div class="row">
              <div class="col-12 mt-4">
                <div class="card">
                  <div class="card-header">
                    AMA
                  </div>
                  <div class="card-body">
                    <blockquote class="blockquote mb-0" tabindex="0">
                      <p><?php echo $hiphop[$ID][4] ?></p>
                      <footer class="blockquote-footer"><cite title="Título da fonte"><?php echo $hiphop[$ID][3] ?></cite></footer>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 mt-4">
                <div class="card">
                  <div class="card-header" tabindex="0">
                    Billboard
                  </div>
                  <div class="card-body">
                    <blockquote class="blockquote mb-0" tabindex="0">
                      <p><?php echo $hiphop[$ID][4] ?></p>
                      <footer class="blockquote-footer">Drake <cite title="Título da fonte"><?php echo $hiphop[$ID][3] ?></cite></footer>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 mt-4 mb-4">
                <div class="card">
                  <div class="card-header" tabindex="0">
                    Grammy
                  </div>
                  <div class="card-body">
                    <blockquote class="blockquote mb-0" tabindex="0">
                      <p><?php echo $hiphop[$ID][4] ?></p>
                      <footer class="blockquote-footer">Blackbear <cite title="Título da fonte"><?php echo $hiphop[$ID][3] ?></cite></footer>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-5 mb-2">
            <h4 id="preto" class="text-white bg-dark text-center" tabindex="0"><?php echo $hiphop[$ID][3] ?></h4>
            <div class="d-flex align-self-center ">
              <div class="text-center p-2 flex-fill flex flex-column items-center justify-center  w-100">
                <a href="https://www.theamas.com/" class="btn btn btn-outline-warning btn-lg w-100" title="AMA">
                  <span class="menu-icon-dest"><i class="fas fa-bookmark"></i></span><br>
                  <span class="menu-text-dest">AMA</span>
                </a>
              </div>
            </div>
            <div class="text-center p-2 flex-fill flex flex-column items-center justify-center  w-100">
              <a href="https://www.theamas.com/" class="btn btn btn-outline-warning btn-lg w-100" title="Billboard">
                <span class="menu-icon-dest"><i class="fas fa-bookmark"></i></span><br>
                <span class="menu-text-dest">Billboard</span>
              </a>
            </div>
            <div class="d-flex align-self-center flex-fill">
              <div class="text-center p-2 flex-fill flex flex-column items-center justify-center w-100 ">
                <a href="https://www.theamas.com/" class="btn btn btn-outline-warning btn-lg w-100" title="Grammy">
                  <span class="menu-icon-dest"><i class="fas fa-bookmark"></i></span><br>
                  <span class="menu-text-dest">Grammy</span>
                </a>
              </div>
            </div>
            <div class="text-center p-2 flex-fill flex flex-column items-center justify-center w-100">
              <a href="https://www.theamas.com/" class="btn btn btn btn-outline-warning btn-lg w-100" title="Grammy Latino">
                <span class="menu-icon-dest"><i class="fas fa-bookmark"></i></span><br>
                <span class="menu-text-dest">Grammy Latino</span>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </main>
  <!-- importando o footer da pagina -->
  <?php
  include('../imports/footer-secundario.php');
  ?>
</body>

</html>
