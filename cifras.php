<?php
  $hiphop_pt = array("Cifras","2 dias atrás","3 dias atrás","4 dias atrás","5 dias atrás","Albúm","Letra","Artista","Música");
  $hiphop_en = array("Lyrics","2 days ago", "3 days ago", "4 days ago", "5 days ago","Album","Lyrics","Artist","Music");
  $hiphop_es = array("Cifras", "Hace 2 días", "Hace 3 días", "Hace 4 días", "Hace 5 días", "Álbum", "Carta", "Artistas", "Música");
  $hiphop = array('PT'=> $hiphop_pt,'EN' => $hiphop_en, 'ES' => $hiphop_es);
// print_r($sertanejo);
//usar $ID para os Vetores
 ?>
 <?php
 //PHP para verificar qual o idioma do html
   include('imports/idioma.php');
 ?>
 <!DOCTYPE html>
 <html lang ="<?php echo $lang?>">
   <?php
   //importando o head da pagina
     include('imports/head.php');
   ?>
<body>
  <!--importandoo menu da pagina -->
  <?php
    include('imports/menu.php');
  ?>
    
        <main>
        <div class="container">
            <div class="row">
                <div class="col-12 mt-4 mb-4">
                    <h1 class="text-white bg-dark text-center font-italic font-weight-bold"><?php echo $hiphop[$ID][0]?></h1>
                </div>
            </div>
            <div class="row">
                
                <div class="col-12 col-sm-4">
                            <div class="list-group">
                                <a href="cifras1.php" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5>Drake</h5>
                                        <small class="text-muted"><?php echo $hiphop[$ID][1]?></small>
                                    </div>
                                    <p class="mb-1">Don't Matter To me</p>
                                    <small class="text-muted">Scorpion</small>
                                </a>
                                <a href="cifras1.php" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5>Blackbear</h5>
                                        <small class="text-muted"><?php echo $hiphop[$ID][1]?></small>
                                    </div>
                                    <p class="mb-1"><?php echo $hiphop[$ID][8]?> 2</p>
                                    <small class="text-muted">Album</small>
                                </a>
                                <a href="cifras1.php" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5>Tyga</h5>
                                        <small class="text-muted"><?php echo $hiphop[$ID][2]?></small>
                                    </div>
                                    <p class="mb-1"><?php echo $hiphop[$ID][8]?> 3</p>
                                    <small class="text-muted"><?php echo $hiphop[$ID][5]?></small>
                                </a>

                                <a href="cifras1.php" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5>Offset</h5>
                                        <small class="text-muted"><?php echo $hiphop[$ID][2]?></small>
                                    </div>
                                    <p class="mb-1"><?php echo $hiphop[$ID][8]?> 4</p>
                                    <small class="text-muted"><?php echo $hiphop[$ID][5]?></small>
                                </a>

                                <a href="cifras1.php" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5>Mac Miller</h5>
                                        <small class="text-muted"><?php echo $hiphop[$ID][3]?></small>
                                    </div>
                                    <p class="mb-1"><?php echo $hiphop[$ID][8]?> 5</p>
                                    <small class="text-muted"><?php echo $hiphop[$ID][5]?></small>
                                </a>

                                <a href="cifras1.php" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5>Lyl Wayne</h5>
                                        <small class="text-muted"><?php echo $hiphop[$ID][3]?></small>
                                    </div>
                                    <p class="mb-1"><?php echo $hiphop[$ID][8]?> 6</p>
                                    <small class="text-muted"><?php echo $hiphop[$ID][5]?></small>
                                </a>
                                
                                <a href="cifras1.php" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5>Eminem</h5>
                                        <small class="text-muted"><?php echo $hiphop[$ID][4]?></small>
                                    </div>
                                    <p class="mb-1"><?php echo $hiphop[$ID][8]?> 7</p>
                                    <small class="text-muted"><?php echo $hiphop[$ID][5]?></small>
                                </a>
                                
                                <a href="cifras1.php" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5>Lyl Wayne</h5>
                                        <small class="text-muted"><?php echo $hiphop[$ID][4]?></small>
                                    </div>
                                    <p class="mb-1"><?php echo $hiphop[$ID][8]?> 8</p>
                                    <small class="text-muted"><?php echo $hiphop[$ID][5]?></small>
                                </a>
                            </div>
                        </div>
                
                <div class="col-sm-8">
                    <div class="container">
                        <div class="row">
                <div class="col-6 col-sm-3">
                    <img src="images/hip-hop/defitiniva2.jpg" class="img-fluid mt-4" alt="Responsive image">
                    <h4 class="text-center">Nonstop 1</h4>
                    <h5 class="text-muted text-center mb-2">Drake</h5>
                    <a href="cifras1.php" class="btn btn-outline-warning btn-block active mb-2" role="button" aria-pressed="true"><?php echo $hiphop[$ID][6]?></a>
                </div>

                <div class="col-6 col-sm-3 mt-4">
                    <img src="images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                    <h4 class="text-center"><?php echo $hiphop[$ID][8]?> 2</h4>
                    <h5 class="text-muted text-center"><?php echo $hiphop[$ID][7]?> 2</h5>
                    <a href="cifras1.php" class="btn btn-outline-warning btn-block active mb-2" role="button" aria-pressed="true"><?php echo $hiphop[$ID][6]?></a>
                </div>

                <div class="col-6 col-sm-3 mt-4">
                    <img src="images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                    <h4 class="text-center"><?php echo $hiphop[$ID][8]?> 3</h4>
                    <h5 class="text-muted text-center"><?php echo $hiphop[$ID][7]?> 3</h5>
                    <a href="cifras1.php" class="btn btn-outline-warning btn-block active mb-2" role="button" aria-pressed="true"><?php echo $hiphop[$ID][6]?></a>
                </div>
                            
                <div class="col-6 col-sm-3 mt-4">
                    <img src="images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                    <h4 class="text-center"><?php echo $hiphop[$ID][8]?> 4</h4>
                    <h5 class="text-muted text-center"><?php echo $hiphop[$ID][7]?> 4</h5>
                    <a href="cifras1.php" class="btn btn-outline-warning btn-block active mb-2" role="button" aria-pressed="true"><?php echo $hiphop[$ID][6]?></a>
                </div>
                            
                <div class="col-6 col-sm-3 mt-4 mb-4">
                    <img src="images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                    <h4 class="text-center"><?php echo $hiphop[$ID][8]?> 5</h4>
                    <h5 class="text-muted text-center"><?php echo $hiphop[$ID][7]?> 5</h5>
                    <a href="cifras1.php" class="btn btn-outline-warning btn-block active mb-2" role="button" aria-pressed="true"><?php echo $hiphop[$ID][6]?></a>
                </div>
                            
                <div class="col-6 col-sm-3 mt-4 mb-4">
                    <img src="images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                    <h4 class="text-center"><?php echo $hiphop[$ID][8]?> 6</h4>
                    <h5 class="text-muted text-center"><?php echo $hiphop[$ID][7]?> 6</h5>
                    <a href="cifras1.php" class="btn btn-outline-warning btn-block active mb-2" role="button" aria-pressed="true"><?php echo $hiphop[$ID][6]?></a>
                </div>
                            
                <div class="col-6 col-sm-3 mt-4 mb-4">
                    <img src="images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                    <h4 class="text-center"><?php echo $hiphop[$ID][8]?> 7</h4>
                    <h5 class="text-muted text-center"><?php echo $hiphop[$ID][7]?> 7</h5>
                    <a href="cifras1.php" class="btn btn-outline-warning btn-block active mb-2" role="button" aria-pressed="true"><?php echo $hiphop[$ID][6]?></a>
                </div>
                                
                <div class="col-6 col-sm-3 mt-4 mb-4">
                    <img src="images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                    <h4 class="text-center"><?php echo $hiphop[$ID][8]?> 8</h4>
                    <h5 class="text-muted text-center"><?php echo $hiphop[$ID][7]?> 8</h5>
                    <a href="cifras1.php" class="btn btn-outline-warning btn-block active mb-2" role="button" aria-pressed="true"><?php echo $hiphop[$ID][6]?></a>
                </div>
                                
                <div class="col-6 col-sm-3">
                    <img src="images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                    <h4 class="text-center"><?php echo $hiphop[$ID][8]?> 9</h4>
                    <h5 class="text-muted text-center mb-2"><?php echo $hiphop[$ID][7]?> 09</h5>
                    <a href="cifras1.php" class="btn btn-outline-warning btn-block active mb-2" role="button" aria-pressed="true"><?php echo $hiphop[$ID][6]?></a>
                </div>
                            
                <div class="col-6 col-sm-3 mb-4">
                    <img src="images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                    <h4 class="text-center"><?php echo $hiphop[$ID][8]?> 10</h4>
                    <h5 class="text-muted text-center"><?php echo $hiphop[$ID][7]?> 10</h5>
                    <a href="cifras1.php" class="btn btn-outline-warning btn-block active mb-2" role="button" aria-pressed="true"><?php echo $hiphop[$ID][6]?></a>
                </div>
                            
                <div class="col-6 col-sm-3 mb-4">
                    <img src="images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                    <h4 class="text-center"><?php echo $hiphop[$ID][8]?> 11</h4>
                    <h5 class="text-muted text-center"><?php echo $hiphop[$ID][7]?> 11</h5>
                    <a href="cifras1.php" class="btn btn-outline-warning btn-block active mb-2" role="button" aria-pressed="true"><?php echo $hiphop[$ID][6]?></a>
                </div>
                            
                <div class="col-6 col-sm-3 mb-4">
                    <img src="images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                    <h4 class="text-center"><?php echo $hiphop[$ID][8]?> 12</h4>
                    <h5 class="text-muted text-center"><?php echo $hiphop[$ID][7]?> 12</h5>
                    <a href="cifras1.php" class="btn btn-outline-warning btn-block active mb-2" role="button" aria-pressed="true"><?php echo $hiphop[$ID][6]?></a>
                </div>
                </div>
                </div>
                </div>
                    </div>
                </div>
    </main>
        
                 <!-- FOOTER -->
        <?php
            include('imports/footer.php');
        ?>
    </body>
</html>