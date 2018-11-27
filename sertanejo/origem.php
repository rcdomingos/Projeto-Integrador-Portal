<?php
$sertanejo_pt = array("A História do Sertanejo", "Conheça origem e história do sertanejo", "A Origem", "A História", "Os Primeiros Cantores");
$sertanejo_en = array("The History of Sertanejo Music", "Know the origin and history of the Sertanejo", "The Origin", "The History", "The First Singers");
$sertanejo_es = array("La Historia del Sertanejo", "Conozca origen e historia del sertanejo", "El Origen", "La Historia", "Los Primeros Cantantes");
$sertanejo = array('PT' => $sertanejo_pt, 'EN' => $sertanejo_en, 'ES' => $sertanejo_es);
?>
<?php
//PHP para verificar qual o idioma do html
include('../imports/idioma.php');
?>
<!DOCTYPE html>
<html lang ="<?php echo $lang ?>">
  <?php
  //importando o head da pagina
  include('../imports/head.php');
  ?>
  <body>
    <!--importandoo menu da pagina -->
    <?php
    include('../imports/menu-secundario.php');
    ?>
    <!-- conteudo da pagina -->
    <article class="origem-sert">
      <header class="jumbotron jumbotron-fluid">
        <div class="container text-center">
          <h1 class="display-4"><?php echo $sertanejo[$ID][0] ?></h1>
          <p class="lead"><?php echo $sertanejo[$ID][1] ?></p>
        </div>
      </header>
      <div class="container text-center text-md-left">
        <div class="row">
          <div class="col-12 col-lg-6">
            <h2><?php echo $sertanejo[$ID][2] ?></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <blockquote class="blockquote text-right">
                <p class="mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</p>
                <footer class="blockquote-footer">Alguém famoso na <cite title="Título da fonte">Web</cite></footer>
              </blockquote>
          </div>
          <div class="col-12 col-lg-6">
            <img src="../images/sertanejo/origem-1.jpg" class="img-fluid" alt="Homem com um violão na mão">
          </div>
        </div>
        <div class="row mt-4">
          <!-- <div class="col-12 order-12 col-lg-6">
            <img src="../images/sertanejo/origem-2.jpg" class="img-fluid" alt="Violão">
          </div> -->
          <div class="col-12 order-1 col-lg-12">
            <h2><?php echo $sertanejo[$ID][3] ?></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <img src="../images/sertanejo/origem-2.jpg" class="img-fluid float-left mr-4" alt="Violão">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </article>
    <aside>
      <div class="container mt-4">
        <div class="row">
          <div class="col">
            <h2><?php echo $sertanejo[$ID][4] ?></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </aside>
    <!-- importando o footer da pagina -->
    <?php
    include('../imports/footer-secundario.php');
    ?>
  </body>
</html>
