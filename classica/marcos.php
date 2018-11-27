<?php
    $classica_pt = array("Clássica ou erudita?","Leia mais","Características","Leia mais","Música brega?","Leia mais","Como se vestir em um concerto?","Leia mais","Gioachino Rossini e a embriaguez","Leia mais","A maldição dos compositores","Leia mais");
    $classica_en = array("Classical or erudite?","Read more","Caracteristics","Read more","Old music?","Read more","What you need wear in a concert?","Read more","Gioachino Rossini and drunkenness","Read more","The compositor's curse","Read more");
    $classica_es = array("Clásica o erudita?","Leer más","Características","Leer más","Música brega?","Leer más","¿Cómo vestirse en un concierto?","Leer más","Gioachino Rossini y la embriaguez","Leer más","La maldición de los compositores","Leer más");

    $classica = array('PT'=> $classica_pt,'EN' => $classica_en,'ES' => $classica_es);
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

<!--FINAL HEAD-->

<body>

    <!--NAV-->
    <?php 
      include('../imports/menu-secundario.php');
    ?>
    <!--FIM NAV-->
    <!--ARTICLE-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mt-4">
                <section>
                    <img src="../images/classica/curiosidades-01.jpg" class="img-fluid rounded imagensmarcosclassica" alt="notícia cinco">
                    <a href="#" class="marcoshover">
                    <h5 class="tmarcos font-weight-bold"><?php echo $classica[$ID][0]?></h5>
                    </a>
                    <p class="pmarcos text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais"><?php echo $classica[$ID][1]?></a></p>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-4">
                <section>
                    <img src="../images/classica/curiosidades-02.jpg" class="img-fluid rounded imagensmarcosclassica" alt="notícia cinco">
                    <a href="#" class="marcoshover">
                    <h5 class="tmarcos font-weight-bold"><?php echo $classica[$ID][2]?></h5>
                    </a>
                    <p class="pmarcos text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais"><?php echo $classica[$ID][3]?></a></p>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-4">
                <section>
                    <img src="../images/classica/curiosidades-03.jpg" class="img-fluid rounded imagensmarcosclassica" alt="notícia cinco">
                    <a href="#" class="marcoshover">
                    <h5 class="tmarcos font-weight-bold"><?php echo $classica[$ID][4]?></h5>
                    </a>
                    <p class="pmarcos text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais"><?php echo $classica[$ID][5]?></a></p>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-4">
                <section>
                    <img src="../images/classica/curiosidades-04.jpg" class="img-fluid rounded imagensmarcosclassica" alt="notícia cinco">
                    <a href="#" class="marcoshover">
                    <h5 class="tmarcos font-weight-bold"><?php echo $classica[$ID][6]?></h5>
                    </a>
                    <p class="pmarcos text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais"><?php echo $classica[$ID][7]?></a></p>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-4">
                <section>
                    <img src="../images/classica/curiosidades-05.jpg" class="img-fluid rounded imagensmarcosclassica" alt="notícia cinco">
                    <a href="#" class="marcoshover">
                    <h5 class="tmarcos font-weight-bold"><?php echo $classica[$ID][8]?></h5>
                    </a>
                    <p class="pmarcos text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais"><?php echo $classica[$ID][9]?></a></p>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-4 mb-4">
                <section>
                    <img src="../images/classica/curiosidades-06.jpg" class="img-fluid rounded imagensmarcosclassica" alt="notícia cinco">
                    <a href="#" class="marcoshover">
                    <h5 class="tmarcos font-weight-bold"><?php echo $classica[$ID][10]?></h5>
                    </a>
                    <p class="pmarcos text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais"><?php echo $classica[$ID][11]?></a></p>

                </section>
            </div>
        </div>
    </div>
    <!-- ARTICLE ENDS -->

    <!--FOOTER-->
    <?php 
      include('../imports/footer-secundario.php');
    ?>
    <!--FIM FOOTER-->


</body>

</html>
