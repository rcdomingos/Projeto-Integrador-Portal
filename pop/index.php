<?php
    $pop_pt = array("Notícias do mundo POP","Lady Gaga se emociona com a platéia em show.","Justin lota estádio Palestra Itália.", "Rihanna em seu último show no Brasil.", "Taylor canta pela primeira vez música nova em show.");
    $pop_en = array("POP World News", "Lady Gaga is thrilled with the audience on show.", "Justin looses Palestra Italia stadium.", "Rihanna in his last show in Brazil.", "Taylor sings for the first time new music in show.");
    $pop_es = array("Noticias Del Mundo POP", "Lady Gaga se emociona con la audiencia en el show.", "Justin lota estadio Palestra Italia.", "Rihanna en su último show en Brasil.", "Taylor canta por primera vez música nueva en el show.");

    $pop = array('PT'=> $pop_pt,'EN' => $pop_en,'ES' => $pop_es);
?>
<?php
 //Php para verificar idioma!
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
   //importando o head
     include('../imports/head.php');
   ?>

<body>
    <!--importando o menu -->
    <?php
    include('../imports/menu-secundario.php');
  ?>

    <!-- Conteudo da pagina  -->
    <main>
        <div class="headerpop">
            <div class="jumbotron jumbotron-fluid">
                <h1 class="display-4 text-white text-center shadow-text">
                    <?php echo $pop[$ID][0]?>
                </h1>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row no-gutters">
                <div class="col-12 col-sm-6 mt-3 pr-3">
                    <div class="card text-white shadow mb-5 bg-white rounded">
                        <img src="../images/pop/lady-show.jpg" class="img-fluid " alt="lady gaga">
                        <div class="card-img-overlay">
                            <div class="caixaT1 pt-3 px-3">
                                <h5>
                                    <?php echo $pop[$ID][1]?>
                                </h5>
                                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 mt-3 pr-3">
                    <div class="card text-white shadow mb-5 bg-white rounded">
                        <img src="../images/pop/justin-show.jpg" class="img-fluid" alt="Justin">
                        <div class="card-img-overlay">
                            <div class="caixaT1 pt-3 px-3">
                                <h5>
                                    <?php echo $pop[$ID][2]?>
                                </h5>
                                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12 col-sm-6  pr-3">
                    <div class="card text-white shadow mb-5 bg-white rounded">
                        <img src="../images/pop/rihanna-show.jpg" class="img-fluid" alt="Rihanna">
                        <div class="card-img-overlay">
                            <div class="caixaT1 pt-3 px-3">
                                <h5>
                                    <?php echo $pop[$ID][3]?>
                                </h5>
                                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6  pr-3">
                    <div class="card text-white shadow mb-5 bg-white rounded">
                        <img src="../images/pop/taylor-show.jpg" class="img-fluid " alt="Taylor">
                        <div class="card-img-overlay">
                            <div class="caixaT1 pt-3 px-3">
                                <h5>
                                    <?php echo $pop[$ID][4]?>
                                </h5>
                                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12 col-sm-6 pr-3">
                    <div class="card text-white  shadow mb-5 bg-white rounded">
                        <img src="../images/pop/justin-show.jpg" class="img-fluid" alt="Justin">
                        <div class="card-img-overlay">
                            <div class="caixaT1 pt-3 px-3">
                                <h5>
                                    <?php echo $pop[$ID][2]?>
                                </h5>
                                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6  pr-3 ">
                    <div class="card text-white shadow mb-5 bg-white rounded">
                        <img src="../images/pop/lady-show.jpg" class="img-fluid" alt="Lady Gaga">
                        <div class="card-img-overlay">
                            <div class="caixaT1 pt-3 px-3">
                                <h5>
                                    <?php echo $pop[$ID][1]?>
                                </h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
