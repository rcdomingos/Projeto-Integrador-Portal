<?php
$punk_pt = array("ORIGEM","Voltar ao topo");
$punk_en = array("ORIGIN","Back to the top");
$punk_es = array("FUENTE","Volver al principio");
$punk = array('PT' => $punk_pt, 'EN' => $punk_en, 'ES' => $punk_es);

?>
<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    $titlePagina = array('PT' => "Punk | Origem", 'EN' => "Punk | Origin", 'ES' => "Punk | Fuente");
   //importando o head da pagina
     include('../imports/head.php');
   ?>
<body>
    <?php
    include('../imports/menu-secundario.php');
    ?>
<main id="content">
    <article>
        <div class="container">
        </div>
        <div class="container col-9">
            <div class="col-12 text-center p-4">
                <h1 tabindex="0"><?php echo $punk[$ID][0] ?></h1>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <img alt="#" class=" img-fluid mx-auto d-block p-2" src="../images/punk/imagem-punk-origem.jpg" tabindex="0" alt="Lorem ipsum dolor sit amet.">
                </div>
                <div class="row">
                    <div class="text-center">
                        <div class="col-lg-12 text-black">
                            <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed nec tellus auctor, vehicula diam vel, faucibus sapien. Morbi dictum, dui et vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis. Pellentesque in risus vestibulum sem lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. lacinia dictum vitae quis leo.</p>
                            <p tabindex="0">Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. Pellentesque in risus vestibulum sem lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed nec tellus auctor, vehicula diam vel, faucibus sapien. Morbi dictum, dui et vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    </main>
    <?php
    include('../imports/footer-secundario.php')
    
    ?>

</body>

</html>
