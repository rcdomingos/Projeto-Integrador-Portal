<?php
  $hiphop_pt = array("Artistas","Mais Ouvidas","Lançamentos","Premiações","Marcos");
  $hiphop_en = array("Artist","Most Played","Released","Awards", "History");
  $hiphop_es = array("Artistas", "Más escuchadas", "Comunicados", "Premios", "Marcos");
  $hiphop = array('PT'=> $hiphop_pt,'EN' => $hiphop_en, 'ES' => $hiphop_es);
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
<main id="content">
<div class="container">
    <div class="row">
        <div class="col-12">
                    <div class="row no-gutters" class="hp-home-sct">
                        <div class="col-12 col-sm-6 mt-3 mb-1 pr-2">
                            <div class="card bg-dark text-white">
                                <img src="../images/hip-hop/home1.jpg" class="img-fluid" alt="Responsive image">
                                <div class="card-img-overlay">
                                        <div class="posi">
                                    <h5><a href="artistas.php" class="text-white"><?php echo $hiphop[$ID][0]?></a></h5>
                                        </div>
                                </div>
                            </div>  
                        </div>
                            
                        <div class="col-12 col-sm-6 mt-3 mb-1 pr-2">
                            <div class="card bg-dark text-white">
                                <img src="../images/hip-hop/home2.jpg" class="img-fluid" alt="Responsive image">
                                <div class="card-img-overlay">
                                        <div class="posi">
                                    <h5><a href="marcos.php" class="text-left text-white" tabindex="0"><?php echo $hiphop[$ID][1]?></a></h5>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row no-gutters">
                        <div class="col-12 col-sm-4 mt-1 mb-5 pr-2">
                            <div class="card bg-dark text-white">
                                <img src="../images/hip-hop/home3.jpg" class="img-fluid" alt="Responsive image">
                                <div class="card-img-overlay">
                                        <div class="posi">
                                    <h5><a href="lancamentos.php" class="text-left text-white"><?php echo $hiphop[$ID][2]?></a></h5>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 mt-1 mb-5 pr-2">
                            <div class="card bg-dark text-white">
                                <img src="../images/hip-hop/home4.jpg" class="img-fluid" alt="Responsive image">
                                <div class="card-img-overlay">
                                        <div class="posi">
                                    <h5><a href="destaques.php" class="text-left text-white"><?php echo $hiphop[$ID][3]?></a></h5>
                                        </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-12 col-sm-4 mt-1 mb-5 pr-2">
                        <div class="card bg-dark text-white">
                            <img src="../images/hip-hop/home5.jpg" class="img-fluid" alt="Responsive image">
                            <div class="card-img-overlay">
                                    <div class="posi">
                                <h5><a href="origem.php" class="text-left text-white"><?php echo $hiphop[$ID][4]?></a></h5>
                                    </div>
                            </div>
                        </div>
                    </div>
                    </div>
            </main>
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
