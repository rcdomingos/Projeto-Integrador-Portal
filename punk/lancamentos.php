<?php
$punk_pt = array("Lançamentos","Voltar ao topo");
$punk_en = array("Releases","Back to the top");
$punk_es = array("Comunicados","Volver al principio");
$punk = array('PT' => $punk_pt, 'EN' => $punk_en, 'ES' => $punk_es);

?>
<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    $titlePagina = array('PT' => "Punk | Lançamentos", 'EN' => "Punk | Releases", 'ES' => "Punk | Lanzamientos");
   //importando o head da pagina
     include('../imports/head.php');
   ?>
<body class="corpopunk">
    <?php
    include('../imports/menu-secundario.php');
    
    ?>
    <main id="content">
        <article>
            <div class="container text-light">
                <div class="row">
                    <div class="col-12">
                        <h1 tabindex="0" class="text-center p-4"><?php echo $punk[$ID][0] ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <img alt="Lorem ipsum dolor sit amet." tabindex="0" class="img-fluid" src="../images/punk/mini-bad-religion.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">Bad Religion</h4>
                        <h5 tabindex="0">Suffer</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                    <div class="col-lg-3 col-6">
                        <img alt="Lorem ipsum dolor sit amet." tabindex="0" class="img-fluid" src="../images/punk/mini-colera.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">Colera</h4>
                        <h5 tabindex="0">Tente mudar o amanha</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <img alt="Lorem ipsum dolor sit amet." tabindex="0" class="img-fluid" src="../images/punk/mini-dk.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">Dead Kennedys</h4>
                        <h5 tabindex="0">Holiday in Cambodia</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                    <div class="col-lg-3 col-6">
                        <img alt="Lorem ipsum dolor sit amet." tabindex="0" class="img-fluid" src="../images/punk/mini-dri.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">D.R.I</h4>
                        <h5 tabindex="0">Dirty Rotten Imbecilles</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <img alt="Lorem ipsum dolor sit amet." tabindex="0" class="img-fluid" src="../images/punk/mini-flicts.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">Flicts</h4>
                        <h5 tabindex="0">Sonhos Corrompidos</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                    <div class="col-lg-3 col-6">
                        <img alt="Lorme ipsum dolor sit amet." tabindex="0" class="img-fluid" src="../images/punk/mini-kaos64.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">Kaos-64</h4>
                        <h5 tabindex="0">Kaos Total</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <img alt="Lorem ipsum dolor sit amet." tabindex="0" class="img-fluid" src="../images/punk/mini-olhoseco.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">Olho Seco</h4>
                        <h5 tabindex="0">Bostas, Fuzis e Capacetes</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                    <div class="col-lg-3 col-6">
                        <img alt="Lorem ipsum dolor sit amet." tabindex="0" class="img-fluid" src="../images/punk/mini-ramones.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">Ramones</h4>
                        <h5 tabindex="0">Pet Cematery</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
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
