<?php
    $classica_pt = array("Artistas da história", "Jovens talentos", "Artistas atuais","Saiba mais sobre os artistas mais conhecidos e aclamados da história da música clássica","Artistas como Mozart, Bethoveen, Bach, Chopin e muito mais.","Conheça alguns compositores jovens que estão fazendo muito sucesso","Artistas atuais que já são os preferidos dos amantes da música clássica");
    $classica_en = array("Historical artists", "Young talents", "Nowadays artists","Learn about some of the best known and acclaimed artists in the history of classical music","Artists like Mozart, Bethoveen, Bach, Chopin and more.","Meet some young composers who are doing a lot of success", "Current artists that are already the favorite of lovers of classical music");
    $classica_es = array("Artistas de la historia","Jóvenes talentos","Artistas actuales","Aprende más sobre los artistas más conocidos y aclamados de la historia de la música clásica", "Artistas como Mozart, Bethoveen, Bach, Chopin y mucho más.", "Conozca a algunos compositores jóvenes que están haciendo mucho éxito", "Artistas actuales que ya son los favoritos de los amantes de la música clásica");

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
                            <h2 class="titulosartistasclassica text-light">
                                <strong><?php echo $classica[$ID][0]?></strong>
                            </h2>
                        </a>
                        <a href="#" tabindex="0">
                            <p class="text-light" id="textoprincipalclassicaartistas"><strong><?php echo $classica[$ID][3]?></strong></p>
                        </a>
                        <p tabindex="0" id="textoprincipal2classicaartistas"><?php echo $classica[$ID][4]?></p>
                    </article>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <aside class="artistas2classica mt-4">
                        <a href="#" tabindex="0">
                            <h2 class="text-light titulosartistasclassica">
                                <strong><?php echo $classica[$ID][1]?></strong>
                            </h2>
                        </a>
                        <a href="#" tabindex="0">
                            <p class="text-light textosecundarioclassicaartistas"><strong><?php echo $classica[$ID][5]?></strong></p>
                        </a>
                    </aside>
                    <aside class="artistas3classica mt-4">
                        <a href="#" tabindex="0">
                            <h2 class="text-light titulosartistasclassica">
                                <strong><?php echo $classica[$ID][2]?></strong>
                            </h2>
                        </a>
                        <a href="#" tabindex="0">
                            <p class="text-light textosecundarioclassicaartistas"><strong><?php echo $classica[$ID][6]?></strong></p>
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
