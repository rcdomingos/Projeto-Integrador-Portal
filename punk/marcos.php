<?php
$punk_pt = array("Marcos","Voltar ao topo");
$punk_en = array("Marck","Back to the top");
$punk_es = array("Marcas","Volver al principio");
$punk = array('PT' => $punk_pt, 'EN' => $punk_en, 'ES' => $punk_es);

?>
<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    $titlePagina = array('PT' => "Punk | Marcos", 'EN' => "Punk | Mark", 'ES' => "Punk | Hitos");
   //importando o head da pagina
     include('../imports/head.php');
  ?>
<body>
    <?php
    include('../imports/menu-secundario.php');    
    ?>
    
<main id="content">
        <article>
            <div class="container col-lg-10">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center p-4" tabindex="0"><?php echo $punk[$ID][0] ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed nec tellus auctor, vehicula diam vel, faucibus sapien. Morbi dictum, dui et vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis. Pellentesque in risus vestibulum sem lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. Mauris tincidunt elit nec ex sagittis laoreet. Vestibulum sed mattis dui. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus.</p>
                    </div>
                    <div class="col-lg-3">
                        <img alt="Lorem ipsum dolor sit amet." tabindex="0" class="img-fluid" src="../images/punk/mini-kaos64.jpg">
                    </div>
                </div>
                <div class="row linha-punk">
                    <div class="col-lg-3">
                        <img alt="Lorem ipsum dolor sit amet." tabindex="0" class="img-fluid" src="../images/punk/mini-ulster.jpg">
                    </div>
                    <div class="col-lg-9">
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed nec tellus auctor, vehicula diam vel, faucibus sapien. Morbi dictum, dui et vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis. Pellentesque in risus vestibulum sem lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus.</p>

                    </div>
                </div>
            </div>
        </article>
    </main>
    <?php
    include('../imports/footer-secundario.php');
    
    ?>

</body>



</html>
