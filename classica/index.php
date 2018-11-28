<?php
    $classica_pt = array("Compositores famosos","História","Obras","Destaques","Para saber mais");
    $classica_en = array("Famous composers","History","Compositions","Highlights","Know more");
    $classica_es = array("Compositores famosos","Historia","Composiciones","Reflejos","Para saber más");

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

<body>

    <!--NAV-->
    <?php 
    include('../imports/menu-secundario.php');
?>
    <!--FIM NAV-->
    <!--ARTICLE-->
    <div class="container">
        <div class="row mt-4">
            <div class="col-12 col-md-8 col-lg-8 mb-4">
                <a href="artistas.php">
                    <article id="artistas">
                        <div class="tboxmenu">
                            <h2 class="tmenu">
                                <?php echo $classica[$ID][0]?>
                            </h2>
                            <p class="pmenu">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Donec id pretium leo. Lorem Ipsum.</p>
                        </div>
                    </article>
                </a>

            </div>
            <div class="col-6 col-md-4 col-lg-4 mb-4">
                <a href="origem.php">
                    <section id="origem">
                        <div class="tboxmenu">
                            <h2 class="tmenu">
                                <?php echo $classica[$ID][1]?>
                            </h2>
                            <p class="pmenu">Lorem ipsum dolor sit amet. Donec id pretium leo. Pellentesque luctus. </p>
                        </div>
                    </section>
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg-4">
                <a href="lancamentos.php">
                    <section id="famosas">
                        <div class="tboxmenu">
                            <h2 class="tmenu">
                                <?php echo $classica[$ID][2]?>
                            </h2>
                            <p class="pmenu">Lorem ipsum dolor sit amet. Donec id pretium leo. Pellentesque luctus. </p>
                        </div>
                    </section>
                </a>
            </div>
            <div class="col-12 col-md-8 col-lg-8">
                <a href="destaques.php">
                    <section id="destaques">
                        <div class="tboxmenu">
                            <h2 class="tmenu">
                                <?php echo $classica[$ID][3]?>
                            </h2>
                            <p class="pmenu">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Donec id pretium leo. Lorem Ipsum.</p>
                        </div>
                    </section>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 mb-4 mt-4">
                <a href="marcos.php">
                    <section id="curiosidades">
                        <div class="tboxmenu">
                            <h2 class="tmenu">
                                <?php echo $classica[$ID][4]?>
                            </h2>
                            <p class="pmenu">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet. Donec id pretium leo. Pellentesque luctus. Donec id pretium leo. Pellentesque. </p>
                        </div>
                    </section>
                </a> </div>
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
