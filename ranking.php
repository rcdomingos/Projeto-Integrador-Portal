<?php
//Arrays com os idiomas da pagina
$ranking_pt = array("semanal","mensal", "anual");
$ranking_en = array("weekly","monthly", "annual");
$ranking_es = array("semanal","mensuales","anual");
$ranking = array('PT' => $ranking_pt, 'EN' => $ranking_en, 'ES' => $ranking_es);
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
    <!--importandoo menu da pagina -->
    <?php
    include('imports/menu.php');
    ?>
    <!-- conteudo da pagina -->
    <div class="container mb-4">
      <!-- <header>
        <div class="row ">
          <div class="col">
            <h1>Só as Melhores</h1>
          </div>
        </div>
      </header> -->
      <div tabindex='0'>
      <article class="art-ranking">
        <div class="row">
          <div class="col-6 col-lg-2 pt-4 text-center">
            <img src="images/principal/ranking.png" alt="Imagem do ranking Top 10" class="img-fluid">
            <h2 class="tt-rank">Top <img src="images/principal/star-solid.png" 
                alt="icone estrela"> 10 <?php echo $ranking[$ID][0]?></h2>
          </div>
          <div class="col-6 col-lg-2 pt-4">
            <ol>
              <li><strong>Lorem ipsum</strong></li>
              <li><strong>Consectetur</strong></li>
              <li><strong>Suspendisse</strong></li>
              <li class="text-secondary">Lorem ipsum</li>
              <li class="text-secondary">Consectetur</li>
              <li class="text-secondary">Suspendisse</li>
              <li class="text-secondary">Lorem ipsum</li>
              <li class="text-secondary">Consectetur a</li>
              <li class="text-secondary">Suspendisse</li>
              <li class="text-secondary">Lorem ipsum</li>
            </ol>
          </div>
          <div class="col-6 col-lg-2 pt-4 text-center bg-mobile">
            <img src="images/principal/ranking.png" alt="Imagem do ranking Top 10" class="img-fluid">
            <h2 class="tt-rank">Top <img src="images/principal/star-solid.png" 
                alt="icone estrela"> 10 <?php echo $ranking[$ID][1]?></h2>
          </div>
          <div class="col-6 col-lg-2 pt-4 bg-mobile">
            <ol>
              <li><strong>Lorem ipsum</strong></li>
              <li><strong>Consectetur</strong></li>
              <li><strong>Suspendisse</strong></li>
              <li class="text-secondary">Lorem ipsum</li>
              <li class="text-secondary">Consectetur</li>
              <li class="text-secondary">Suspendisse</li>
              <li class="text-secondary">Lorem ipsum</li>
              <li class="text-secondary">Consectetur a</li>
              <li class="text-secondary">Suspendisse</li>
              <li class="text-secondary">Lorem ipsum</li>
            </ol>
          </div>
          <div class="col-6 col-lg-2 text-center pt-4">
            <img src="images/principal/ranking.png" alt="Imagem do ranking Top 10" class="img-fluid">
            <h2 class="tt-rank">Top <img src="images/principal/star-solid.png" 
                alt="icone estrela"> 10 <?php echo $ranking[$ID][2]?></h2>
          </div>
          <div class="col-6 col-lg-2 pt-4">
            <ol>
              <li><strong>Lorem ipsum</strong></li>
              <li><strong>Consectetur</strong></li>
              <li><strong>Suspendisse</strong></li>
              <li class="text-secondary">Lorem ipsum</li>
              <li class="text-secondary">Consectetur</li>
              <li class="text-secondary">Suspendisse</li>
              <li class="text-secondary">Lorem ipsum</li>
              <li class="text-secondary">Consectetur a</li>
              <li class="text-secondary">Suspendisse</li>
              <li class="text-secondary">Lorem ipsum</li>
            </ol>
          </div>
        </div>
        </div>
      </article>
    </div>

    <!-- importando o footer da pagina -->
    <?php
    include('imports/footer.php');
    ?>
  </body>
</html>