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
                <h1 class="display-4 text-white text-center">
                    <?php 
                    if ($ID=='PT'){
                        echo "Destaques da Semana";
                    } 
                    if ($ID=='EN'){
                        echo "Highlights of the Week";
                    }
                    if ($ID=='ES'){
                        echo "Destacados de la Semana";
                    } 
                    ?>
                </h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3 mt-4">
                    <img src="../images/pop/justin.jpg" width=350px; class="img-fluid shadow bg-white rounded" alt="Justin">
                    <div class="px-2 py-2 text-center">
                        <h4>Justin Bieber</h4>
                        <p>lorem lorem lorem dounp dont</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 mt-4">
                    <img src="../images/pop/rihanna.jpg" width=350px; class="img-fluid shadow bg-white rounded" alt="Rihanna">
                    <div class="px-2 py-2 text-center">
                        <h4>Rihanna</h4>
                        <p>lorem lorem lorem dounp dont</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 mt-4">
                    <img src="../images/pop/taylor.jpg" width=350px; class="img-fluid shadow bg-white rounded" alt="Taylor">
                    <div class="px-2 py-2 text-center">
                        <h4>Taylor Swift</h4>
                        <p>lorem lorem lorem dounp dont</p>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 mt-4">
                    <img src="../images/pop/lady.jpg" width=350px; class="img-fluid shadow bg-white rounded" alt="Lady Gaga">
                    <div class="px-2 py-2 text-center">
                        <h4>Lady Gaga</h4>
                        <p>lorem lorem lorem dounp dont</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 mt-4">
                    <img src="../images/pop/rihanna.jpg" width=350px; class="img-fluid shadow bg-white rounded" alt="Rihanna">
                    <div class="px-2 py-2 text-center">
                        <h4>Rihanna</h4>
                        <p>lorem lorem lorem dounp dont</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 mt-4">
                    <img src="../images/pop/taylor.jpg" width=350px; class="img-fluid shadow bg-white rounded" alt="Taylor">
                    <div class="px-2 py-2 text-center">
                        <h4>Taylor Swift</h4>
                        <p>lorem lorem lorem dounp dont</p>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 mt-4">
                    <img src="../images/pop/lady.jpg" width=350px; class="img-fluid shadow bg-white rounded" alt="Lady Gaga">
                    <div class="px-2 py-2 text-center">
                        <h4>Lady Gaga</h4>
                        <p>lorem lorem lorem dounp dont</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 mt-4">
                    <img src="../images/pop/justin.jpg" width=350px; class="img-fluid shadow bg-white rounded" alt="Justin">
                    <div class="px-2 py-2 text-center">
                        <h4>Justin Bieber</h4>
                        <p>lorem lorem lorem dounp dont</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 mt-4">
                    <img src="../images/pop/taylor.jpg" width=350px; class="img-fluid shadow bg-white rounded" alt="Taylor">
                    <div class="px-2 py-2 text-center">
                        <h4>Taylor Swift</h4>
                        <p>lorem lorem lorem dounp dont</p>
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 mt-4">
                    <img src="../images/pop/lady.jpg" width=350px; class="img-fluid shadow  bg-white rounded" alt="Lady Gaga">
                    <div class="px-2 py-2 text-center">
                        <h4>Lady Gaga</h4>
                        <p>lorem lorem lorem dounp dont</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 mt-4">
                    <img src="../images/pop/justin.jpg" width=350px; class="img-fluid shadow bg-white rounded" alt="Justin">
                    <div class="px-2 py-2 text-center">
                        <h4>Justin Bieber</h4>
                        <p>lorem lorem lorem dounp dont</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-3 mt-4">
                    <img src="../images/pop/rihanna.jpg" width=350px; class="img-fluid shadow bg-white rounded" alt="Rihanna">
                    <div class="px-2 py-2 text-center">
                        <h4>Rihanna</h4>
                        <p>lorem lorem lorem dounp dont</p>
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
