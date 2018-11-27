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
                    <?php
                    if ($ID=='PT'){
                        echo "Artistas em Alta";
                    }
                    if ($ID=='EN'){
                        echo "Artists In Top";
                    }
                    if ($ID=='ES'){
                        echo "Artistas en Alta";
                    }
                    ?>
                </h1>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3">
                    <img class="img-fluid shadow mb-5 bg-white rounded" src="../images/pop/justin.jpg" alt="Justin">
                </div>
                <div class="col-6  col-md-3 col-lg-2 col-xl-2 mt-3 pt-2">
                    <h4>Justin Bieber</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. </p>
                </div>
                <div class="col-6  col-md-3 col-lg-2 col-xl-2 mt-3">
                    <img class="img-fluid shadow mb-5 bg-white rounded" src="../images/pop/taylor.jpg" alt="Taylor">
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3 pt-2">
                    <h4>Taylor Swift</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. </p>
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3 ">
                    <img class="img-fluid shadow mb-5 bg-white rounded" src="../images/pop/lady.jpg" alt="Lady Gaga">
                </div>
                <div class="col-6  col-md-3 col-lg-2 col-xl-2 mt-3 pt-2">
                    <h4>Lady Gaga</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. </p>
                </div>
                <div class="col-6  col-md-3 col-lg-2 col-xl-2 mt-3">
                    <img class="img-fluid shadow mb-5 bg-white rounded" src="../images/pop/rihanna.jpg" alt="Rihanna">
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3 pt-2">
                    <h4>Rihanna</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. </p>
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3">
                    <img class="img-fluid shadow mb-5 bg-white rounded" src="../images/pop/taylor.jpg" alt="Taylor">
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3 pt-2">
                    <h4>Taylor Swift</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. </p>
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3">
                    <img class="img-fluid shadow mb-5 bg-white rounded" src="../images/pop/justin.jpg" alt="Justin">
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3 pt-2">
                    <h4>Justin Bieber</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. </p>
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3">
                    <img class="img-fluid shadow mb-5 bg-white rounded" src="../images/pop/lady.jpg" alt="Lady Gaga">
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3 pt-2">
                    <h4>Lady Gaga</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. </p>
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3">
                    <img class="img-fluid shadow mb-5 bg-white rounded" src="../images/pop/rihanna.jpg" alt="Rihanna">
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3 pt-2">
                    <h4>Rihanna</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. </p>
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3">
                    <img class="img-fluid shadow mb-5 bg-white rounded" src="../images/pop/lady.jpg" alt="Lady Gaga">
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3 pt-2">
                    <h4>Lady Gaga</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. </p>
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3">
                    <img class="img-fluid shadow mb-5 bg-white rounded" src="../images/pop/taylor.jpg" alt="Taylor">
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3 pt-2">
                    <h4>Taylor Swift</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. </p>
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3">
                    <img class="img-fluid shadow mb-5 bg-white rounded" src="../images/pop/rihanna.jpg" alt="Rihanna">
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3 pt-2">
                    <h4>Rihanna</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. </p>
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3 mb-4">
                    <img class="img-fluid shadow mb-5 bg-white rounded" src="../images/pop/justin.jpg" alt="Justin">
                </div>
                <div class="col-6 col-md-3 col-lg-2 col-xl-2 mt-3 pt-2">
                    <h4>Justin Bieber</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id elit diam. </p>
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
