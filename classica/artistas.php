<?php
    $classica_pt = array("Artistas da história", "Jovens talentos", "Artistas atuais","Voltar ao topo");
    $classica_en = array("Historical artists", "Young talents", "Nowadays artists","Back to the top");
    $classica_es = array("Artistas de la historia","Jóvenes talentos","Artistas actuales","Volver al principio");

    $classica = array('PT'=> $classica_pt,'EN' => $classica_en,'ES' => $classica_es);
?>

<?php
 //PHP para verificar qual o idioma do html Conheça um pouco dos vários compositores talentosos da história da música clássica
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    $titlePagina = array('PT' => "Clássica | Artistas", 'EN' => "Classic | Artists", 'ES' => "Clásico | Artistas");
   //importando o head da pagina
     include('../imports/head.php');
   ?>

<body>
    <!--NAV-->
    <?php 
    include('../imports/menu-secundario.php');
?>
    <!--NAV ENDS-->

    <!--ARTICLE-->
    <main id="content">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <article class="artistas1classica mt-4">
                        <a href="#" tabindex="0">
                            <h2 class="titulosartistasclassica">
                                <?php echo $classica[$ID][0]?>
                            </h2>
                        </a>
                        <a href="#" tabindex="0">
                            <p id="textoprincipalclassicaartistas">Lorem ipsum dolor sit amet, consectetur adipiscing elit duis </p>
                        </a>
                        <p tabindex="0" id="textoprincipal2classicaartistas">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac risus et arcu.</p>
                    </article>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <aside class="artistas2classica mt-4">
                        <a href="#" tabindex="0">
                            <h2 class="titulosartistasclassica">
                                <?php echo $classica[$ID][1]?>
                            </h2>
                        </a>
                        <a href="#" tabindex="0">
                            <p class="textosecundarioclassicaartistas">Lorem ipsum dolor sit amet, consectetur adipiscing elit duis </p>
                        </a>
                    </aside>
                    <aside class="artistas3classica mt-4">
                        <a href="#" tabindex="0">
                            <h2 class="titulosartistasclassica">
                                <?php echo $classica[$ID][2]?>
                            </h2>
                        </a>
                        <a href="#" tabindex="0">
                            <p class="textosecundarioclassicaartistas">Lorem ipsum dolor sit amet, consectetur adipiscing elit duis </p>
                        </a>
                    </aside>
                </div>
            </div>
        </div>
    </main>
    <!--FIM ARTICLE-->

    <!--FOOTER-->
    <?php 
    include('../imports/footer-secundario.php');
?>
    <!--FIM FOOTER-->

</body>

</html>
