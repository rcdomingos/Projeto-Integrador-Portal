<?php
$sertanejo_pt = array("Os Melhores Artistas Sertanejo", "Álbuns", "Anterior", "Próximo");
$sertanejo_en = array("The Best Sertanejo Artists", "Albums", "Previous", "Next");
$sertanejo_es = array("Los Mejores Artistas Sertanejo", "Álbumes", "Anterior", "Siguiente");
$sertanejo = array('PT' => $sertanejo_pt, 'EN' => $sertanejo_en, 'ES' => $sertanejo_es);
// print_r($sertanejo);
//usar $ID para os Vetores
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
    <div class="container">
      <article class="mt-3 mb-3">
        <?php
        //alterar a cor do background de acordo o numero gerado
        $numbk = rand(1, 10);
        if ($numbk >= 1 and $numbk < 3) {
          $corbk = "bk-sertanejo";
        } elseif ($numbk >= 3 and $numbk < 6) {
          $corbk = "bk-sertanejo-2";
        } elseif ($numbk >= 6 and $numbk < 9) {
          $corbk = "bk-sertanejo-3";
        } else {
          $corbk = "bk-sertanejo-4";
        }
        ?>
        <header>
          <h1><?php echo $sertanejo[$ID][0] ?></h1>
        </header>
        <div class="card-deck">
          <div class="card text-white mb-3 <?php echo $corbk ?>">
            <img class="card-img-top rounded-circle py-2 px-2" src="../images/sertanejo/artista-1.jpg" alt="Michel Teló">
            <div class="card-body">
              <h5 class="card-title">Michel Teló</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation.</p>
            </div>
            <div class="card-footer">
              <small><?php echo $sertanejo[$ID][1] ?>:</small>
              <ul class="list-albuns">
                <li> <img class="w-25" src="../images/sertanejo/michel1.jpg" alt="Bem Sertanejo"></li>
                <li> <img class="w-25" src="../images/sertanejo/michel2.jpg" alt="Sunset"></li>
                <li> <img class="w-25" src="../images/sertanejo/michel3.jpg" alt="Na Balada"></li>
              </ul>
            </div>
          </div>
          <div class="card text-white mb-3 <?php echo $corbk ?>">
            <img class="card-img-top rounded-circle py-2 px-2" src="../images/sertanejo/artista-2.jpg" alt="Luan Santana">
            <div class="card-body">
              <h5 class="card-title">Luan Santana</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation.</p>
            </div>
            <div class="card-footer">
              <small><?php echo $sertanejo[$ID][1] ?>:</small>
              <ul class="list-albuns">
                <li> <img class="w-25" src="../images/sertanejo/lancamento-01.jpg" alt="CD-Duetos"></li>
              </ul>
            </div>
          </div>
          <div class="card text-white mb-3 <?php echo $corbk ?>">
            <img class="card-img-top rounded-circle py-2 px-2" src="../images/sertanejo/artista-3.jpg" alt="Chitãozinho & Xororó">
            <div class="card-body">
              <h5 class="card-title">Chitãozinho & Xororó</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation.</p>
            </div>
            <div class="card-footer">
              <small><?php echo $sertanejo[$ID][1] ?>:</small>
              <ul class="list-albuns">
                <li> <img class="w-25" src="../images/sertanejo/lancamento-04.jpg" alt="Albun-Acustico"></li>
              </ul>
            </div>
          </div>
          <div class="card text-white mb-3 <?php echo $corbk ?>">
            <img class="card-img-top rounded-circle py-2 px-2" src="../images/sertanejo/artista-4.jpg" alt="Simone & Simaria">
            <div class="card-body">
              <h5 class="card-title">Simone & Simaria</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation.</p>
            </div>
            <div class="card-footer">
              <small><?php echo $sertanejo[$ID][1] ?>:</small>
              <ul class="list-albuns">
                <li> <img class="w-25" src="../images/sertanejo/lancamento-02.jpg" alt="CD- Simone e Simara"></li>
                <li> <img class="w-25" src="../images/sertanejo/lancamento-03.jpg" alt="CD- Simone e Simara"></li>
              </ul>
            </div>
          </div>
        </div>
      </article>
      <nav aria-label="Navegação das paginas de artistas">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" aria-label="Anterior">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only"><?php echo $sertanejo[$ID][2] ?></span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Próximo">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only"><?php echo $sertanejo[$ID][3] ?></span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <!-- importando o footer da pagina -->
    <?php
    include('../imports/footer-secundario.php');
    ?>
  </body>
</html>
