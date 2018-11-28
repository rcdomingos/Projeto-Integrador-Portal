<?php
$punk_pt = array("Artistas", "Destaques", "Classificacao", "Impacto Social", "Lancamentos");
$punk_en = array("Artists", "Highlights", "Ranking", "Social Impact", "Releases");
$punk_es = array("Artistas", "Refrejos", "Classificacion", "Impacto Social", "Comunicados");
$punk = array('PT' => $punk_pt, 'EN' => $punk_en, 'ES' => $punk_es);

?>
 <?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
 <!DOCTYPE html>
 <html lang ="<?php echo $lang?>">
   <?php
   //importando o head da pagina
     include('../imports/head.php');
   ?>
<body class="corpopunk">
    <?php
    include('../imports/menu-secundario.php')

    ?>

    <article>

        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <figure class="figure">
                        <a href="artistas.php">
                            <img src="../images/punk/ratosdeporao.jpg" class="figure-img img-fluid rounded" alt="Loren Ipsum sit amet consectur.">
                            <figcaption class="figure-caption">
                                <h3 id="importancia3"><?php echo $punk[$ID][0] ?></h3>
                            </figcaption>
                        </a>
                    </figure>
                </div>
                <div class="col-lg-6 ">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-6">

                                <figure class="figure ">
                                    <a href="index.php">
                                        <img src="../images/punk/homemulheres.jpg" class="figure-img img-fluid rounded" alt="Loren Ipsum sit amet consectur.">
                                        <figcaption class="figure-caption">
                                            <h3 id="importancia3"><?php echo $punk[$ID][1] ?></h3>
                                        </figcaption>
                                    </a>
                                </figure>

                            </div>
                            <div class="col-lg-6 col-6">

                                <figure class="figure">
                                    <a href="index.php">
                                        <img src="../images/punk/homemenstruacao.jpg" class="figure-img img-fluid rounded" alt="Loren Ipsum sit amet consectur.">
                                        <figcaption class="figure-caption">
                                            <h3 id="importancia3"><?php echo $punk[$ID][2] ?></h3>
                                        </figcaption>
                                    </a>
                                </figure>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-6 col-6">
                                <figure class="figure">
                                    <a href="index.php">
                                        <img src="../images/punk/impacto%20social.jpg" class="figure-img img-fluid rounded" alt="Loren Ipsum sit amet consectur.">
                                        <figcaption class="figure-caption">
                                            <h3 id="importancia3"> <?php echo $punk[$ID][3] ?> </h3>
                                        </figcaption>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-lg-6 col-6">

                                <figure class="figure">
                                    <a href="index.php">
                                        <img src="../images/punk/homebotas.jpg" class="figure-img img-fluid rounded" alt="Loren Ipsum sit amet consectur.">
                                        <figcaption class="figure-caption">
                                            <h3 id="importancia3"><?php echo $punk[$ID][4] ?></h3>
                                        </figcaption>
                                    </a>
                                </figure>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>




    </article>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




    <?php
    include('../imports/footer-secundario.php')

    ?>

</body>
</html>
