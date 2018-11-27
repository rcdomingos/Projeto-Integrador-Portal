<?php
 //PHP para verificar qual o idioma do html
include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">

<?php
//importando o head da pagina
include('../imports/head.php');
?>


<body>

<!-- Menu -->
<?php
include('../imports/menu-secundario.php');
?>

    <!-- Conteúdo da pagina -->
    <main>
    <br><br>

        <!-- Primeira Linha -->
        <div class="container">

            <div class="row text-center home-geral">

                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <a href="#"><img class="img-fluid" src="../images/indie/emicida-destaques.jpg" alt="Generic placeholder image"></a>
                    <h3>E.M.I.C.I.D.A.</h3>
                    <p class="text-justify">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <a href="#"><img class="img-fluid" src="../images/indie/coruja-destaques.jpg" alt="Generic placeholder image"></a>
                    <h3>Coruja BC1</h3>
                    <p class="text-justify">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <a href="#"><img class="img-fluid" src="../images/indie/rael-destaques.png" alt="Generic placeholder image"></a>
                    <h3>Rael da Rima</h3>
                    <p class="text-justify">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <a href="#"><img class="img-fluid" src="../images/indie/sant-destaques.jpg" alt="Generic placeholder image"></a>
                    <h3>Sant</h3>
                    <p class="text-justify">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                </div>
            </div>
        </div>
        <br>

        <!-- Segunda Linha -->
        <div class="container">

            <div class="row text-center home-geral">

                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <a href="#"><img class="img-fluid" src="../images/indie/imagine-dragons-destaques.jpg" alt="Generic placeholder image"></a>
                    <h3>Imagine Dragons</h3>
                    <p class="text-justify">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <a href="#"><img class="img-fluid" src="../images/indie/nirvana-destaques.jpg" alt="Generic placeholder image"></a>
                    <h3>Nirvana</h3>
                    <p class="text-justify">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <a href="#"><img class="img-fluid" src="../images/indie/belle-destaques.jpg" alt="Generic placeholder image"></a>
                    <h3>Belle & Sebastian</h3>
                    <p class="text-justify">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <a href="#"><img class="img-fluid" src="../images/indie/lorde-destaques.jpg" alt="Generic placeholder image"></a>
                    <h3>Lorde</h3>
                    <p class="text-justify">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
                </div>
            </div>
        </div>
        <br>

    </main>

<!-- FOOTER -->
<br>
<?php
include('../imports/footer-secundario.php');
?>

</body>

</html>
