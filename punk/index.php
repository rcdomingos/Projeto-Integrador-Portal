<?php
$punk_pt = array("Artistas", "Destaques", "Classificação", "Impacto Social", "Lancamentos","Voltar ao topo");
$punk_en = array("Artists", "Highlights", "Ranking", "Social Impact", "Releases","Back to the top");
$punk_es = array("Artistas", "Refrejos", "Classificacion", "Impacto Social", "Comunicados","Volver al principio");
$punk = array('PT' => $punk_pt, 'EN' => $punk_en, 'ES' => $punk_es);

?>
<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    $titlePagina = array('PT' => "Punk | Pagina inicial", 'EN' => "Punk | Home", 'ES' => "Punk | Pagina principal");
   //importando o head da pagina
     include('../imports/head.php');
   ?>
<body>
    <?php
    include('../imports/menu-secundario.php');
    ?>
    <!--<main class="corpopunk">-->
    <main id="content">
        <article>
            <div class="container col-lg-6">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center p-4" tabindex="0">PUNK</h1>
                    </div>
                </div>

                <div class="row ">
                    <div class="text-center">
                        <figure class="figure">
                            <a href="artistas.php">
                                <img src="../images/punk/mini-ramones.jpg" class="img-fluid" alt="Loren Ipsum sit amet consectur.">
                                <figcaption class="figure-caption text-white text-center">
                                    <h3 id="importancia3"><?php echo $punk[$ID][0] ?></h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-6 p-0">

                        <figure class="figure ">
                            <a href="index.php">
                                <img src="../images/punk/mini-bad-religion.jpg" class="img-fluid" alt="Loren Ipsum sit amet consectur.">
                                <figcaption class="figure-caption  text-white text-center">
                                    <h3 id="importancia3"><?php echo $punk[$ID][1] ?></h3>
                                </figcaption>
                            </a>
                        </figure>

                    </div>
                    <div class="col-lg-6 p-0">

                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-colera.jpg" class="img-fluid" alt="Loren Ipsum sit amet consectur.">
                                <figcaption class="figure-caption  text-white text-center">
                                    <h3 id="importancia3"><?php echo $punk[$ID][2] ?></h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>

                </div>
                <div class="row">

                    <div class="col-lg-6 p-0">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-dk.jpg" class="img-fluid" alt="Loren Ipsum sit amet consectur.">
                                <figcaption class="figure-caption text-white text-center">
                                    <h3 id="importancia3"> <?php echo $punk[$ID][3] ?> </h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-6 p-0">

                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-flicts.jpg" class="img-fluid" alt="Loren Ipsum sit amet consectur.">
                                <figcaption class="figure-caption text-white text-center">
                                    <h3 id="importancia3"><?php echo $punk[$ID][4] ?></h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </article>
        <div class="skippy">
            <a class="sr-only sr-only-focusable text-light text-center" href="#topo"><?php echo $punk[$ID][5]?></a>
        </div>
        </main>
    <?php
    include('../imports/footer-secundario.php')

    ?>

</body>

</html>
