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
        <div class="row mb-4">
            <div class="col-sm-12 col-md-12 col-lg-12">
                
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
