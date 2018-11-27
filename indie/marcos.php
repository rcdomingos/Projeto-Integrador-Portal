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

        <!-- Primeiro Bloco -->
        <br><br>
        <div class="container">

            <div class="row text-left">

                <!-- Imagem -->
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <a href="#"><img class=" img-fluid" src="../images/indie/lab-fantasma.jpg" alt="Generic placeholder image"></a>
                </div>

                <!-- Texto -->

                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 text-left">
                    <h2>Laboratório Fantasma</h2>
                    <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>

                    <div class="text-justify" id="tt">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    </div>

                </div>

            </div>

        </div>

        <!-- Segundo Bloco -->
        <br>
        <div class="container">

            <div class="row text-left">

                <!-- Imagem -->
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <a href="#"><img class=" img-fluid" src="../images/indie/marechal.jpg" alt="Generic placeholder image"></a>
                </div>

                <!-- Texto -->

                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 text-left">
                    <h2>Mc Marechal</h2>
                    <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>

                    <div class="text-justify" id="tt">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    </div>

                </div>

            </div>

        </div>

        <!-- Terceiro Bloco -->
        <br>
        <div class="container">

            <div class="row text-left">

                <!-- Imagem -->
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <a href="#"><img class=" img-fluid" src="../images/indie/arcade-fire-marco.jpg" alt="Generic placeholder image"></a>
                </div>

                <!-- Texto -->

                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 text-left">
                    <h2>Arcade Fire</h2>
                    <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>

                    <div class="text-justify" id="tt">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    </div>

                </div>

            </div>

        </div>
        <br><br>
    </main>

<!-- FOOTER -->
<br>
<?php
include('../imports/footer-secundario.php');
?>

</body>

</html>
