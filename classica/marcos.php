<?php
    $classica_pt = array("Curiosidades", "Famosas");
    $classica_en = array("Curiosities", "Famous");
    $classica_es = array("Curiosidades", "Famoso");

    $classica = array('PT'=> $classica_pt,'EN' => $classica_en,'ES' => $classica_es);
?>
<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    $titlePagina = array('PT' => "Clássica | Marcos", 'EN' => "Classic | Mark", 'ES' => "Clásico | Hitos");
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
    <main id="content">
        <div class="container">
            <div class="row">
                <h1>As curiosidades do mundo da música clássica</h1>
            </div>
        </div>
        <div class="skippy">
            <a class="sr-only sr-only-focusable text-light text-center" href="#topo">Voltar ao topo</a>
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
