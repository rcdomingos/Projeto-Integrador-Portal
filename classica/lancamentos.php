<?php
    $classica_pt = array("TOP 10","♫ Músicas clássicas mais famosas da história","Artistas","Composições","Período","Sonata ao Luar","Classicismo","Impressionismo","Romantismo","Classicismo","Romantismo","Século XX e XXI","Classicismo","Romantismo","Romantismo","Barroco");

    $classica_en = array("TOP 10","♫ Most famous classical musics of the history","Artists","Compositions","Period","Moonlight Sonata","Classicism","Impressionism","Romanticism","Classicism","Romanticism","20th and 21st Century","Classicism","Romanticism","Romanticism","Baroque",);

    $classica_es = array("TOP 10","♫ Canciones clásicas más famosas de la historia","Artistas","Composiciones","Período","Sonata Al Chiaro Di Luna","Classicismo","Impresionismo","Romanticismo","Classicismo","Romanticismo","Siglo XX y XXI","Classicismo","Romanticismo","Romanticismo","Barroco");

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
    <div class="container">
        <!--ARTICLE-->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-4">
                <article>
                    <h2 class="text-center">Novos sucessos do mundo da música clássica</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in viverra diam. Ut ullamcorper justo a odio pulvinar tristique. Vivamus consequat justo non gravida tincidunt. </p>
                </article>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-5 mt-2">
                    <figure>
                        <img src="../images/classica/lancamentos-01.jpg" class="img-fluid w-100" alt="">
                    </figure>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-7 mt-2">
                    <aside>
                        <h2>Yiruma</h2>
                        <p>Nullam hendrerit orci a dolor efficitur, ac blandit ante gravida. Donec quis sem scelerisque, malesuada dui non, dapibus nisi. Sed erat magna, convallis ut elit egestas, faucibus auctor justo. Morbi molestie, ante eget ullamcorper sagittis, erat mauris rutrum lorem, ut mattis ipsum odio non lacus. Fusce in condimentum tellus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim dapibus enim, non aliquam leo vulputate sed. Cras et quam eget leo euismod aliquet vitae vel justo. Nunc ornare est in mi finibus, ut condimentum erat semper. In gravida eleifend vehicula. Sed imperdiet turpis nec risus aliquam, nec facilisis lectus tempus. Sed condimentum risus ut commodo accumsan. Sed venenatis leo in diam venenatis, at finibus magna euismod. Suspendisse pulvinar odio felis, quis consequat lacus accumsan non.</p>
                    </aside>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 mt-2">
                    <article>
                        <h2>Alma Deutscher</h2>
                        <p>Nullam hendrerit orci a dolor efficitur, ac blandit ante gravida. Donec quis sem scelerisque, malesuada dui non, dapibus nisi. Sed erat magna, convallis ut elit egestas, faucibus auctor justo. Morbi molestie, ante eget ullamcorper sagittis, erat mauris rutrum lorem, ut mattis ipsum odio non lacus. Fusce in condimentum tellus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim dapibus enim, non aliquam leo vulputate sed. Cras et quam eget leo euismod aliquet vitae vel justo. Nunc ornare est in mi finibus, ut condimentum erat semper. In gravida eleifend vehicula. Sed imperdiet turpis nec risus aliquam, nec facilisis lectus tempus. Sed condimentum risus ut commodo accumsan. Sed venenatis leo in diam venenatis, at finibus magna euismod. Suspendisse pulvinar odio felis, quis consequat lacus accumsan non.</p>
                    </article>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5 mt-2">
                    <figure>
                        <img src="../images/classica/lancamentos-02.jpg" class="img-fluid w-100" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--FOOTER-->
    <?php 
      include('../imports/footer-secundario.php');
    ?>
    <!--FIM FOOTER-->

</body>

</html>
