<?php
    $classica_pt = array("A maior orquetra brasileira","Composições que marcaram o Brasil","Instrumentos principais","A música clássica hoje","Leia mais","Para estudar e relaxar","Leia mais","Sucessos nos desenhos","Leia mais");
    $classica_en = array("The bigest brazilian orchestra","Historical compositions for Brazil","Main instruments","The classical music today","Read more","For studying and relaxing","Read more","Success on cartoons","Read more");
    $classica_es = array("La mayor orquesta brasileña","Composiciones que marcaron el Brasil","Instrumentos principales","La música clásica hoy","Leer más","Para estudiar y relajarse","Leer más","Sucesos en los dibujos","Leer más");

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

    <!--CARROSEL-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div id="carouseldestaques" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active destaqueajustar">
                            <img src="../images/classica/slide/slide-01.jpg" class="img-fluid d-block destaqueajustar" alt="primeiro slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="carrosselhover">
                                    <a href="#" class="carrosselhover">
                                        <h3 class="tcarousel text-left font-weight-bold pl-0 pb-3">
                                            <?php echo $classica[$ID][0]?>
                                        </h3>
                                        <p class="pcarousel text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque...</p>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="carousel-item destaqueajustar">

                            <img src="../images/classica/slide/slide-02.jpg" class="img-fluid d-block destaqueajustar" alt="segundo slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="carrosselhover">
                                <a href="#" class="carrosselhover">
                                    <h3 class="tcarousel text-left font-weight-bold pl-0 pb-3">
                                        <?php echo $classica[$ID][1]?>
                                    </h3>
                                    <p class="pcarousel text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque...</p>
                                </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item destaqueajustar">

                            <img src="../images/classica/slide/slide-03.jpg" class="img-fluid d-block destaqueajustar" alt="terceiro slide">
                            <div class="carousel-caption d-none d-md-block text-white">
                                <div class="carrosselhover">
                                <a href="#" class="carrosselhover">
                                    <h3 class="tcarousel text-left font-weight-bold pl-0 pb-3">
                                        <?php echo $classica[$ID][2]?>
                                    </h3>
                                    <p class="pcarousel text-left ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque...</p>
                                </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouseldestaques" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouseldestaques" role="button" data-slide="next" id="slidethree">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
        </div>
        <!--FIM CARROSEL-->
        <!--ARTICLE-->
        <div class="row mt-4 mb-2">
            <div class="col-12 col-md-4 col-lg-4">
                <article>
                    <a href="#" class="tdestaqueslink destaqueshover">
                        <h3 class="tdestaques text-center destaqueshover">
                            <?php echo $classica[$ID][3]?>
                        </h3>
                    </a>
                    <img src="../images/classica/destaque-01.jpg" class="img-fluid rounded imagensdestaquesclassica" alt="notícia um: a música clássica hoje">
                    <p class="pdestaques text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais"><?php echo $classica[$ID][4]?></a></p>
                </article>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <article>
                    <a href="#" class="tdestaqueslink destaqueshover">
                        <h3 class="tdestaques text-center destaqueshover">
                            <?php echo $classica[$ID][5]?>
                        </h3>
                    </a>
                    <img src="../images/classica/destaque-02.jpg" class="img-fluid  imagensdestaquesclassica" alt="notícia dois: para estudar e ralaxar">
                    <p class="pdestaques text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais">
                            <?php echo $classica[$ID][6]?></a></p>
                </article>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <article>
                    <a href="#" class="tdestaqueslink destaqueshover">
                        <h3 class="tdestaques text-center destaqueshover">
                            <?php echo $classica[$ID][7]?>
                        </h3>
                    </a>
                    <img src="../images/classica/destaque-03.jpg" class="img-fluid rounded imagensdestaquesclassica" alt="notícia três: sucesso nos desenhos">
                    <p class="pdestaques text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais">
                            <?php echo $classica[$ID][8]?></a></p>
                </article>
            </div>
        </div>
        <!--FIM ARTICLE-->

    </div>

    <!--FOOTER-->
    <?php 
    include('../imports/footer-secundario.php');
    ?>
    <!--FIM FOOTER-->

</body>

</html>
