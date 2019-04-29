<?php
    $classica_pt = array("Curiosidades no mundo da música clássica","Clássica ou erudita?","Leia mais","Características","Leia mais","Música brega?","Leia mais","Como se vestir em um concerto?","Leia mais","Gioachino Rossini e a embriaguez","Leia mais","A maldição dos compositores","Leia mais");
    $classica_en = array("The curiosities in the world of the classical music","Classical or erudite?","Read more","Caracteristics","Read more","Old music?","Read more","What you need wear in a concert?","Read more","Gioachino Rossini and drunkenness","Read more","The compositor's curse","Read more");
    $classica_es = array("Curiosidades en el mundo de la música clásica","Clásica o erudita?","Leer más","Características","Leer más","Música brega?","Leer más","¿Cómo vestirse en un concierto?","Leer más","Gioachino Rossini y la embriaguez","Leer más","La maldición de los compositores","Leer más");

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
            <div class="col-sm-12 col-md-12 col-lg-6">
                <section class="mt-4">
                    <div id="imgmarcosclassica1">
                        <div id="posicaotextoclassica">
                            <a href="#">
                                <p id="textomarcosclassica">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim dapibus enim, non aliquam leo vulputate sed. Cras et quam eget leo euismod aliquet vitae</p>
                            </a>
                            <p id="textomarcosclassica2" tabindex="0">Cras tempor tempor rhoncus. Ut in leo congue, scelerisque.</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <aside class="mt-4 mb-4">
                    <div id="imgmarcosclassica2">
                        <div id="posicaotextoclassica2">
                            <a href="#">
                                <h2 id="titulomarcosclassica1">Curiosidades</h2>
                            </a>
                            <a href="#">
                                <p id="textomarcosclassica3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </a>
                        </div>
                    </div>
                </aside>
                <aside class="mb-4">
                    <div id="imgmarcosclassica3">
                        <div id="posicaotextoclassica3">
                            <a href="#">
                                <h2 id="titulomarcosclassica2">Famosas</h2>
                            </a>
                            <a href="#">
                                <p id="textomarcosclassica4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </a>
                        </div>
                    </div>
                </aside>
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
