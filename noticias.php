<?php 
    $classica_pt = array("O novo sucesso da Katy Perry","Conheça mais sobre a nova estrelinha do sertanejo","Punk: Uma crítica ao sistema","Veja mais sobre o novo álbum do The Neighbourhood","A maior orquestra brasileira","Gusttavo Lima e o sucesso","Leia mais","Por que você precisa ouvir Ratos de Porão?","Leia mais","Topo das paradas: Bateu Os Beatles!","Leia mais","Novo albúm: The Neighbourhood","Leia mais");
    $classica_en = array("The new Katy Perry success","Know more about the new sertanejo's star","Punk: One criticism for the system","See more about the new's The Neighbourhood album","The biggest brazilian orchestra","Gusttavo Lima and the succes","Read more","Why listen Ratos do Porão?","Read more","TOP: He passed The Beatles!","Read more","The new album: The Neighbourhood","Read more");
    $classica_es = array("El nuevo éxito de katy perry","Conoce más sobre la estrella del sertanejo","Punk: una crítica al sistema","Mira más sobre el nuevo álbum de The Neighbourhood","La mayor orquesta brasileña","Gusttavo Lima y el éxito","Leer más","¿Por qué escuchar a Ratos do Porão?","Leer más","TOP: ¡Pasó a The Beatles!","Leer más","El nuevo álbum: The Neighborhood","Leer más");

    $classica = array('PT'=> $classica_pt,'EN' => $classica_en,'ES' => $classica_es);
?>
<?php
//PHP para verificar qual o idioma do html
  include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang ="<?php echo $lang?>">
  <?php
  //importando o head da pagina
    include('imports/head.php');
  ?>
  <body>
    <!--NAV-->
    <?php
    include('imports/menu.php');
?>
    <!--NAV ENDS-->

    <div class="container">
        <!---INICIO CARROSSEL-->
        <div id="carouselnoticias" class="carousel slide mb-3" data-ride="carousel">

            <div class="carousel-inner">



                <div class="carousel-item active noticiasajuste">

                    <img src="images/noticias/slide/slide-01.jpg" class="img-fluid d-block noticiasajuste" alt="primeiro slide">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#" class="hnoticias">
                            <h3 class="tcarousel text-left font-weight-bold text-white pl-0 pb-3"><?php echo $classica[$ID][0]?></h3>
                            <p class="pcarousel text-left text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque.</p>
                        </a>
                    </div>
                </div>

                <div class="carousel-item noticiasajuste">

                    <img src="images/noticias/slide/slide-02.jpg" class="img-fluid d-block noticiasajuste" alt="segundo slide">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#" class="hnoticias">
                            <h3 class="tcarousel text-left font-weight-bold text-white pl-0 pb-3"><?php echo $classica[$ID][1]?></h3>
                            <p class="pcarousel text-left text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque.</p>
                        </a>
                    </div>

                </div>

                <div class="carousel-item noticiasajuste">

                    <img src="images/noticias/slide/slide-03.jpg" class="img-fluid d-block noticiasajuste" alt="terceiro slide">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#" class="hnoticias">
                            <h3 class="tcarousel text-left font-weight-bold text-white pl-0 pb-3"><?php echo $classica[$ID][2]?></h3>
                            <p class="pcarousel text-left text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque.</p>
                        </a>
                    </div>

                </div>

                <div class="carousel-item noticiasajuste">

                    <img src="images/noticias/slide/slide-04.jpg" class="img-fluid d-block noticiasajuste" alt="terceiro slide">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#" class="hnoticias">
                            <h3 class="tcarousel text-left font-weight-bold text-white pl-0 pb-3"><?php echo $classica[$ID][3]?></h3>
                            <p class="pcarrossel text-left text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque.</p>
                        </a>
                    </div>

                </div>

                <div class="carousel-item noticiasajuste">

                    <img src="images/noticias/slide/slide-05.jpg" class="img-fluid d-block noticiasajuste" alt="terceiro slide">
                    <div class="carousel-caption d-none d-md-block">
                        <a href="#" class="hnoticias">
                            <h3 class="tcarousel text-left font-weight-bold text-white pl-0 pb-3"><?php echo $classica[$ID][4]?></h3>
                            <p class="pcarousel text-left text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque.</p>
                        </a>
                    </div>

                </div>

            </div>

            <a class="carousel-control-prev" href="#carouselnoticias" role="button" data-slide="prev">

                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Anterior</span>

            </a>

            <a class="carousel-control-next" href="#carouselnoticias" role="button" data-slide="next">

                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Próximo</span>

            </a>


        </div>

        <!--FINAL CARROSSEL-->

        <!--ARTICLE-->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 ">
                <img src="images/noticias/noticias-01.jpg" class="img-fluid mt-3" alt="Gusttavo Lima">
            </div>
            <article class="col-12 col-md-6 col-lg-3 ">
                <div>
                    <h3 class="tnoticias font-weight-bold mt-3 text-left"><?php echo $classica[$ID][5]?></h3>
                    <p class="pnoticias text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum ipsum id dictum volutpat. Nam volutpat placerat sit amet... <a href="#" class="lnoticias"><?php echo $classica[$ID][6]?></a></p>
                </div>
            </article>
            <div class="col-12 col-md-6 col-lg-3 ">
                <img src="images/noticias/noticias-02.jpg" class="img-fluid  mt-3" alt="Ratos de Porão">
            </div>
            <article class="col-12 col-md-6 col-lg-3">
                <div>
                    <h3 class="tnoticias font-weight-bold mt-3 noticiasfonte text-left"><?php echo $classica[$ID][7]?></h3>
                    <p class="pnoticias text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum ipsum id dictum volutpat. Nam volutpat placerat sit amet...  <a href="#" class="lnoticias"><?php echo $classica[$ID][8]?></a></p>
                </div>
            </article>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mt-3">
                <img src="images/noticias/noticias-03.jpg" class="img-fluid" alt="Drake">
            </div>
            <article class="col-12 col-md-6 col-lg-3 mt-3 mb-4">
                <div>
                    <h3 class="tnoticias font-weight-bold text-left"><?php echo $classica[$ID][9]?></h3>
                    <p class="pnoticias text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum ipsum id dictum volutpat. Nam volutpat placerat sit amet... <a href="#" class="lnoticias"><?php echo $classica[$ID][10]?></a></p>
                </div>
            </article>
            <div class="col-12 col-md-6 col-lg-3 mt-3">
                <img src="images/noticias/noticias-04.jpg" class="img-fluid" alt="The Neighbourhood">
            </div>
            <article class="col-12 col-md-6 col-lg-3 mt-3 mb-4">
                <div>
                    <h3 class="tnoticias font-weight-bold text-left"><?php echo $classica[$ID][11]?></h3>
                    <p class="pnoticias text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum ipsum id dictum volutpat. Nam volutpat placerat sit amet... <a href="#" class="lnoticias"><?php echo $classica[$ID][12]?></a></p>
                </div>
            </article>
        </div>
    </div>

    <!--FIM ARTICLE-->



    <!--FOOTER-->
    <?php
    include('imports/footer.php');
?>
    <!--FIM FOOTER-->

</body>

</html>
