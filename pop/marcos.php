<?php
    $pop_pt = array("Marcos Históricos do Mundo POP", "Albúm de Lady Gaga bate record de vendas no mundo todo", "Justin Ganha Prêmio de melhor cantor", "Taylor Swift ganha prêmio do YouTube");
    $pop_en = array("Historical Landmarks of the POP World", "Lady Gaga's Album Gives Record Sales Worldwide", "Justin Wins Best Singer Award", "Taylor Swift Wins YouTube Award");
    $pop_es = array("Marcos Históricos del Mundo POP", "Albú de Lady Gaga golpea el registro de ventas en todo el mundo", "Justin ganó el premio al mejor cantante", "Taylor Swift ganó el premio de YouTube");

    $pop = array('PT'=> $pop_pt,'EN' => $pop_en,'ES' => $pop_es);
?>
<?php
 //Php para verificar o idioma!
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
   //Importando o head
     include('../imports/head.php');
   ?>

<body>
    <!--Importando o menu -->
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
        <div class="container">
            <div class="row">
                <div class="col-3 mt-3 ">
                    <img class="img-fluid shadow mb-4 bg-white rounded" src="../images/pop/lady.jpg" alt="Lady Gaga">
                </div>
                <div class="col-9 mt-3 pt-2">
                    <h4>
                        <?php echo $pop[$ID][1]?>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh consectetur adipiscing elit ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh consectetur adipiscing elit ultricies vehicula ut id elit.Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-3  col-md-3 mt-3">
                    <img class="img-fluid shadow mb-4 bg-white rounded" src="../images/pop/justin.jpg" alt="Justin">
                </div>
                <div class="col-9 col-md-3 mt-3 pt-2">
                    <h4>
                        <?php echo $pop[$ID][2]?>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. Curabitur id elit diam. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. </p>
                </div>
                <div class="col-3 col-md-3 mt-3">
                    <img class="img-fluid shadow mb-4 bg-white rounded" src="../images/pop/taylor.jpg" alt="Taylor">
                </div>
                <div class="col-9 col-md-3 mt-3 pt-2">
                    <h4>
                        <?php echo $pop[$ID][3]?>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. Curabitur id elit diam. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-3 mt-3 ">
                    <img class="img-fluid shadow mb-4 bg-white rounded" src="../images/pop/lady.jpg" alt="Lady Gaga">
                </div>
                <div class="col-9 mt-3 pt-2">
                    <h4>
                        <?php echo $pop[$ID][1]?>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh consectetur adipiscing elit ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh consectetur adipiscing elit ultricies vehicula ut id elit.Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-3  col-md-3 mt-3">
                    <img class="img-fluid shadow mb-4 bg-white rounded" src="../images/pop/justin.jpg" alt="Justin">
                </div>
                <div class="col-9 col-md-3 mt-3 pt-2">
                    <h4>
                        <?php echo $pop[$ID][2]?>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. Curabitur id elit diam. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. </p>
                </div>
                <div class="col-3 col-md-3 mt-3 mb-3 mb-3">
                    <img class="img-fluid shadow mb-4 bg-white rounded" src="../images/pop/taylor.jpg" alt="Taylor">
                </div>
                <div class="col-9 col-md-3 mt-3 pt-2">
                    <h4>
                        <?php echo $pop[$ID][3]?>
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. Curabitur id elit diam. Etiam porta sem malesuada magna mollis euismod. Etiam porta sem malesuada magna mollis euismod. </p>
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
