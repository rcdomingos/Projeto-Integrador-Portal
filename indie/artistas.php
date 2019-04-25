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

    <!-- Conteúdo da Página -->
    <main>

        <!-- Primeira Linha -->
        <br>
        <div class="container">
        <div class="row text-center">

                <!-- Primeira Imagem -->
                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                    <a><img class="img-fluid" src="../images/indie/of-monster-and-man.jpg" alt="Generic placeholder image"></a>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h2 class="hdois">Of Monster adn Man</h2>
                    <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>
                    <a href="http://www.ofmonstersandmen.com/">www.ofmonstersandmen.com</a>
                </div>

                <!-- Segunda Imagem -->
                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                    <a><img class="img-fluid" src="../images/indie/radio-head.jpg" alt="Generic placeholder image"></a>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h2 class="hdois">Radiohead</h2>
                    <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>
                    <a href="https://www.radiohead.com">www.radiohead.com</a>
                </div>

            </div>
        </div>

        <!-- Segunda Linha -->
        <br>
        <div class="container">
        <div class="row text-center">

                <!-- Primeira Imagem -->
                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                    <a href="#"><img class="img-fluid" src="../images/indie/arcade-fire.jpg" alt="Generic placeholder image"></a>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h2 class="hdois">Arcade Fire</h2>
                    <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>
                    <a href="http://arcadefire.com">www.arcadefire.com</a>
                </div>

                <!-- Segunda Imagem -->
                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                    <a href="#"><img class="img-fluid" src="../images/indie/the-neighbourhood.jpg" alt="Generic placeholder image"></a>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h2 class="hdois">The Neighbourhood</h2>
                    <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>
                  <a href="https://thenbhd.com/">www.thenbhd.com/</a>
                </div>

            </div>
        </div>

        <!-- Terceira Linha -->
        <br>
        <div class="container">
        <div class="row text-center">

                <!-- Primeira Imagem -->
                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                    <a href="#"><img class="img-fluid" src="../images/indie/tame-impala.jpg" alt="Generic placeholder image"></a>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h2 class="hdois">Tame Impala</h2>
                    <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>
                    <a href="https://us.tameimpala.com/">us.tameimpala.com/</a>
                </div>

                <!-- Segunda Imagem -->
                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                    <a href="#"><img class="img-fluid" src="../images/indie/twenty-one-pilots.jpg" alt="Generic placeholder image"></a>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h2 class="hdois">Twenty One Pilots</h2>
                    <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>
                    <a href="http://www.twentyonepilots.com/">www.twentyonepilots.com/</a>
                </div>

            </div>
        </div>

        <!-- Quarta Linha -->
        <br>
        <div class="container">
            <div class="row text-center">

                <!-- Primeira Imagem -->
                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                    <a href="#"><img class="img-fluid" src="../images/indie/florence-and-the-machine.jpg" alt="Generic placeholder image"></a>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h2 class="hdois">Florence and The Machine</h2>
                    <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>
                    <a href="https://florenceandthemachine.net/">www.florenceandthemachine.net/</a>
                </div>

                <!-- Segunda Imagem -->
                <div class="col-sm-12 col-md-12 col-lg-2 col-xl-2">
                    <a href="#"><img class="img-fluid" src="../images/indie/kings-of-leon.jpg" alt="Generic placeholder image"></a>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h2 class="hdois">Kings Of Leon</h2>
                    <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>
                    <a href="http://kingsofleon.com/">www.kingsofleon.com/</a>
                </div>

            </div>
        </div>

        <br>

    </main>

<!-- FOOTER -->
<?php
include('../imports/footer-secundario.php');
?>

</body>

</html>