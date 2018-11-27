<?php
    $classica_pt = array("A história da música clássica","Veja mais:","Períodos da música clássica","Orquestras mais conhecidas","Por que ouvir música clássica?");
    $classica_en = array("The history of classical music","See more:","Classical music's periods","The best known orchestras","Why listen classical music?");
    $classica_es = array("La historia de la música clásica","Mira más:","Períodos de la música clásica","Las orquestras más populares","¿Por qué escuchar música clásica?");

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

<!--FINAL DO HEAD-->

<body>

    <!--NAV-->
    <?php 
      include('../imports/menu-secundario.php');
    ?>
    <!--FIM NAV-->
    <!--ARTICLE-->
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <h3 class="text-center font-weight-bold mt-4 mb-4" id="titulorigemc">
                <?php echo $classica[$ID][0]?>
            </h3>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-12 col-lg-8">
                <article>

                    <img src="../images/classica/origem-01.jpg" alt="origem" class="img-fluid origemajustar">

                    <p class="porigem text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Donec id pretium leo. etiam nisi metolist. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Praesent sed justo finibus, fringilla velit quis, porta erat. Donec blandit metus ut arcu iaculis iaculis. </p>
                
                    <img src="../images/classica/origem-02.jpg" alt="origem" class="img-fluid origemajustar">

                    <p class="porigem text-justify mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Vivamus vehicula dignissim augue et scelerisque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Etiam quam nisi, molestie ac dolor in, tincidunt tincidunt arcu. Donec id pretium leo. etiam nisi metolist. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Praesent sed justo finibus, fringilla velit quis, porta erat. </p>
                </article>
            </div>

            <div class="col-12 col-md-12 col-lg-4 mb-4">
                <aside>
                    <div id="boxorigem">
                        <h5 class="text-center ajustevejamais font-weight-bold">
                            <?php echo $classica[$ID][1]?>
                        </h5>
                    </div>

                    <div class="col-12 col-md-12 col-lg-12">
                        <a href="#" class="origemhover">
                            <h5 class="tboxorigem origemhover">
                                <?php echo $classica[$ID][2]?>
                            </h5>
                            <p class="text-muted tamanhop text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in urna sem. Vivamus... </p>
                        </a>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12">
                        <a href="#" class="origemhover">
                            <h5 class="tboxorigem origemhover">
                                <?php echo $classica[$ID][3]?>
                            </h5>
                            <p class="text-muted tamanhop text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in urna sem. Vivamus... </p>
                        </a>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12">
                        <a href="#" class="origemhover">
                            <h5 class="tboxorigem origemhover">
                                <?php echo $classica[$ID][4]?>
                            </h5>
                            <p class="text-muted tamanhop text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in urna sem. Vivamus... </p>
                        </a>
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
