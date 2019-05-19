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
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2 class="text-center mt-4">A história da música clássica</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <article>
                    <img src="../images/classica/origem-01.jpg" class="img-fluid">
                    <p>In nec velit at felis hendrerit bibendum in eu turpis. In ac feugiat purus. Morbi auctor, leo eu fringilla faucibus, magna mi blandit diam, a faucibus lorem libero at eros. Pellentesque leo turpis, ultrices at fermentum ac, mattis id eros. Vestibulum vestibulum laoreet enim eget aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi porttitor iaculis fringilla. Fusce nec rhoncus orci, et fringilla orci. Morbi venenatis, est vehicula semper lobortis, libero lacus venenatis mauris, ut pharetra diam dolor vitae velit. Vestibulum sit amet iaculis nibh, et scelerisque ligula. Donec ut finibus magna, sit amet aliquet ante. Aenean id tempor mauris. Vestibulum vestibulum rutrum sapien, at vehicula lectus venenatis nec. Vivamus ex augue, congue vitae massa quis, congue ultricies lectus. In sit amet magna posuere, porta tellus ultricies, scelerisque odio. Donec ut eros congue, pharetra massa sed, ultrices lorem. Nulla ac rutrum orci, vel placerat neque.</p>
                </article>
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
