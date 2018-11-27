<?php
$indie_pt = array("Fique Por Dentro Dos Principais Lançamentos");
$indie_en = array("Stay tuned for major releases");
$indie_es = array("Se queda por dentro de los principales lanzamientos");
$indie = array('PT' => $indie_pt, 'EN' => $indie_en, 'ES' => $indie_es);
// print_r($sertanejo);
//usar $ID para os Vetores
?>
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

        <!-- Carrocel -->
        <div class="container">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators my-carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img class="first-slide" src="../images/indie/the-strokes-carrocel.jpg" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>The Strokes</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="second-slide" src="../images/indie/the-killers-carrocel.jpg" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>The Killers</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="third-slide" src="../images/indie/arctic-monkeys-carrocel.jpg" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>Arctic Monkeys</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="four-slide" src="../images/indie/florence-and-the-machine-carrocel.jpg" alt="Four slide">
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>Florence and The Machine</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
        <br>
        <!-- Final Carrocel -->

        <!-- Imagens -->
        <div class="container">

            <!-- Primeria Linha -->
            <div class="row">

                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">

                    <img src="../images/indie/the-strokes.jpg" class="img-fluid" alt="Imagem responsiva">

                    <a href="http://thestrokes.com/" class="indietexto">The Strokes</a>

                    <p class="indietexto">Lorem ipsum dolor.</p>

                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">

                    <img src="../images/indie/arctic-monkeys-cover.jpg" class="img-fluid" alt="Imagem responsiva">

                    <a href="https://www.arcticmonkeys.com/" class="indietexto">Arctic Mokeys</a>

                    <p class="indietexto">Lorem ipsum dolor.</p>

                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">

                    <img src="../images/indie/the-neighbourhood-cover.jpg" class="img-fluid" alt="Imagem responsiva">

                    <a href="https://thenbhd.com/" class="indietexto">The Neighbourhood</a>

                    <p class="indietexto">Lorem ipsum dolor.</p>

                </div>

                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">

                    <img src="../images/indie/muse-cover.jpg" class="img-fluid" alt="Imagem responsiva">

                    <a href="https://simulationtheory.muse.mu/" class="indietexto">MUSE</a>

                    <p class="indietexto">Lorem ipsum dolor.</p>

                </div>

            </div>

        </div>

        <br><br>
        <!-- Título & Subtítulo -->
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2><?php echo $indie[$ID][0]; ?></h2>
                    <h3 class="titulos-indie">Tudo que você precisa saber sobre o mundo Indie em um só lugar.</h3>
                </div>
            </div>
        </div>
        <br>

        <!-- Texto -->
        <div class="container">
            <div class="row text-justify">
                <div class="col-12" id="tt">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                </div>
            </div>
        </div>
        <br><br><br><br>

    </main>

    <!-- FOOTER -->
<?php
include('../imports/footer-secundario.php');
?>

</body>

</html>
