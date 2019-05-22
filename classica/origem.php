<?php
    $classica_pt = array("História: Tudo o que você não sabia sobre a música clássica","Um lugar muito grande de construção luxuosa possui várias poltronas e luzes. É o lugar onde ocorrem os concertos musicais","A origem","Várias folhas de partituras sendo folheadas","Voltar ao topo");
    $classica_en = array("History: Everything you did not know about classical music","A very large luxurious building has several armchairs and lights. It is the place where musical concerts take place","The origin","Several sheets of sheet music being clad","Back to the top");
    $classica_es = array("Historia: Todo lo que no sabía acerca de la música clásica","Un lugar muy grande de construcción de lujo tiene varios sillones y luces. Es el lugar donde ocurren los conciertos musicales","El origen","Varias hojas de partituras siendo revestidas","Votar a la cima");

    $classica = array('PT'=> $classica_pt,'EN' => $classica_en,'ES' => $classica_es);
?>
<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    $titlePagina = array('PT' => "Clássica | Origem", 'EN' => "Classic | Origin", 'ES' => "Clásico | Fuente");
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
    <main id="content">
        <div class="container mb-4">
            <div class="row linhadestaquesc mb-4">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <article class="mt-4">
                        <h2 class="text-left titulocorigem" tabindex="0"><?php echo $classica[$ID][0]?></h2>
                        <p tabindex="0" id="texto2c">Quisque tincidunt blandit viverra. Curabitur maximus sagittis ante sed varius. Donec ac vulputate metus. Maecenas ac facilisis massa, aliquet tincidunt nunc.</p>
                    </article>
                </div>
            </div>
        </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <section>
                            <img src="../images/classica/origem-01.jpg" tabindex="0" class="img-fluid rounded mx-auto d-block" alt="<?php echo $classica[$ID][1]?>">
                        </section>
                    </div>
                </div>
            </div>
        <div class="container mb-4">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mt-4"><?php echo $classica[$ID][2]?></h2>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec convallis viverra scelerisque. Vivamus in ipsum quis turpis laoreet.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mt-4">
                    <img src="../images/classica/origem-03.jpg" class="img-fluid" alt="<?php echo $classica[$ID][3]?>">
                </div>
                <div class="col-6 mt-4">
                    <p>Etiam et erat consequat, blandit dolor nec, iaculis eros. Nullam ultrices nec felis sit amet finibus. Nulla sed nisl id felis finibus lacinia at et urna. Cras tincidunt blandit urna, eu sagittis ante pretium non. Fusce vitae ligula at nisi cursus tristique. Cras eu odio elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec aliquet felis eu tortor consectetur dignissim. Phasellus sagittis tincidunt efficitur. Sed et dolor diam. Donec posuere velit sed tortor posuere, et scelerisque ante finibus. In in justo in elit laoreet lobortis non a turpis. Mauris non arcu faucibus, interdum eros luctus, ullamcorper quam. Mauris congue nulla efficitur orci sollicitudin posuere. Cras faucibus, magna non fermentum varius, orci tortor dapibus nulla, sit amet tempor turpis purus ut arcu. Nam sagittis mi leo, id tempor leo malesuada et. Donec suscipit purus in est pulvinar, at vestibulum libero efficitur. Vivamus sit amet magna id ante venenatis convallis vel non augue. Cras eu odio elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec aliquet felis eu tortor consectetur dignissim. Phasellus sagittis tincidunt efficitur. Sed et dolor diam. Donec posuere velit sed tortor posuere, et scelerisque ante finibus. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4">
                    <p>Etiam et erat consequat, blandit dolor nec, iaculis eros. Nullam ultrices nec felis sit amet finibus. Nulla sed nisl id felis finibus lacinia at et urna. Cras tincidunt blandit urna, eu sagittis ante pretium non. Fusce vitae ligula at nisi cursus tristique. Cras eu odio elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec aliquet felis eu tortor consectetur dignissim. Phasellus sagittis tincidunt efficitur. Sed et dolor diam. Donec posuere velit sed tortor posuere, et scelerisque ante finibus. In in justo in elit laoreet lobortis non a turpis. Mauris non arcu faucibus, interdum eros luctus, ullamcorper quam. Mauris congue nulla efficitur orci sollicitudin posuere. Cras faucibus, magna non fermentum varius, orci tortor dapibus nulla, sit amet tempor turpis purus ut arcu. Nam sagittis mi leo, id tempor leo malesuada et. Donec suscipit purus in est pulvinar, at vestibulum libero efficitur. Vivamus sit amet magna id ante venenatis convallis vel non augue. Cras eu odio elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec aliquet felis eu tortor consectetur dignissim. Phasellus sagittis tincidunt efficitur. Sed et dolor diam. Donec posuere velit sed tortor posuere, et scelerisque ante finibus. </p>
                </div>
            </div>
        </div>
        <div class="skippy">
            <a class="sr-only sr-only-focusable text-light text-center" href="#topo"><?php echo $classica[$ID][4]?></a>
        </div>
    </main>
    <!-- ARTICLE ENDS -->

    <!--FOOTER-->
    <?php 
      include('../imports/footer-secundario.php');
    ?>
    <!--FIM FOOTER-->

</body>

</html>
