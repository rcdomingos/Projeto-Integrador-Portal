<?php
    $classica_pt = array("Compositores","Conheça mais sobre os compositores mais famosos");
    $classica_en = array("Composers","Know more about the most famous composers");
    $classica_es = array("Compositores","Conoce más sobre los compositores más famosos");

    $classica = array('PT'=> $classica_pt,'EN' => $classica_en,'ES' => $classica_es);
?>
<?php
    $testeartistas = array("");
?>
<?php
 //PHP para verificar qual o idioma do html Conheça um pouco dos vários compositores talentosos da história da música clássica
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
    <!--NAV ENDS-->

    <!--ARTICLE-->
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-sm-12 col-md-12 col-lg-12">
                
            </div>
        </div>
    </div>
    <!--FIM ARTICLE-->

    <!--FOOTER-->
    <?php 
    include('../imports/footer-secundario.php');
?>
    <!--FIM FOOTER-->

</body>

</html>
