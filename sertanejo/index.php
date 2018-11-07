<?php
  $sertanejo_pt = array("Destaques","Os Destaques e Notícias do Mundo Setanejo","Lançamentos","Acompanhe todos os lançamentos","Veja mais","A História",
                  "Conheça a história do sertanejo","Artistas","Veja os melhores artistas sertanejo","Fatos e Marcos","Veja os fatos que marcaram o ritmo");
  $sertanejo_en = array("Highlights","Highlights and News Sertanejo Word","Released","Follow all releases","View More"," History","Learn the history of Sertanejo music",
                  "Artists","See the best sertanejo songs artists","Facts","See the facts that marked the rhythm");
  $sertanejo = array('PT'=> $sertanejo_pt,'EN' => $sertanejo_en);
// print_r($sertanejo);
//usar $ID para os Vetores
 ?>
 <?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
 <!DOCTYPE html>
 <html lang ="<?php echo $lang?>">
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
  <main>
    <div class="container mb-3">
      <div class="row no-gutters">
        <div class="align-self-center mt-3 col-12 col-lg-6">
          <div id="carouselSertanejo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="first-slide mx-auto" src="../images/sertanejo/musicas.jpg" alt="First slide">
                <div class="carousel-caption d-none d-block">
                  <h1><?php echo $sertanejo[$ID][0]?></h1>
                  <p><?php echo $sertanejo[$ID][1]?></p>
                  <p><a class="btn btn-sm btn-outline-light" href="destaques.php" role="button"><?php echo $sertanejo[$ID][4]?></a></p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="second-slide mx-auto" src="../images/sertanejo/lancamentos.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-block">
                  <h1><?php echo $sertanejo[$ID][2]?></h1>
                  <p><?php echo $sertanejo[$ID][3]?>.</p>
                  <p><a class="btn btn-sm btn-outline-light" href="lancamentos.php" role="button"><?php echo $sertanejo[$ID][4]?></a></p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselSertanejo" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselSertanejo" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-lg-6 mt-3">
          <div class="container-fluid">
            <div class="row section-home">
              <div class="col-lg-12">
                <section class="w-auto sect-1-home-sert">
                  <a href="origem.php">
                    <div class="fundo-texto">
                      <h2 class="text-left"><?php echo $sertanejo[$ID][5]?></h2>
                      <p class="text-left"><?php echo $sertanejo[$ID][6]?>.</p>
                    </div>
                  </a>
                  <!-- <div class="fundo-texto">
                    <h2 class="text-left">A Historia</h2>
                    <p class="text-left"><a href="origem.php">Conheça a historia do sertanejo.</a></p>
                  </div> -->
                </section>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="mt-3 col-lg-6 ">
                <section class="mr-lg-3 sect-2-home-sert">
                  <a href="artistas.php">
                    <div class="fundo-texto">
                      <h2 class="text-left"><?php echo $sertanejo[$ID][7]?></h2>
                      <p class="text-left"><?php echo $sertanejo[$ID][8]?>.</p>
                    </div>
                  </a>
                  <!-- <div class="fundo-texto">
                    <h2 class="text-left">Artistas</h2>
                    <p class="text-left"><a href="artistas.php">Veja os melhores artistas sertanejo.</a></p>
                  </div> -->
                </section>
              </div>
              <div class="mt-3 col-lg-6">
                <section class="sect-3-home-sert ">
                  <a href="marcos.php">
                    <div class="fundo-texto">
                      <h2 class="text-left"><?php echo $sertanejo[$ID][9]?></h2>
                      <p class="text-left"><?php echo $sertanejo[$ID][10]?>.</p>
                    </div>
                  </a>
                  <!-- <div class="fundo-texto">
                    <h2 class="text-left">Fatos e Marcos</h2>
                    <p class="text-left"><a href="marcos.php">Veja os fatos que marcaram o ritmo.</a></p>
                  </div> -->
                </section>
              </div>
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
