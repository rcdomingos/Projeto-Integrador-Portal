<?php
$punk_pt = array("LANCAMENTOS","Voltar ao topo");
$punk_en = array("RELEASES","Back to the top");
$punk_es = array("LANZIAMENTOS","Volver al principio");
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
            <div class="container text-black">
                <div class="row">
                    <div class="col-12 text-black">
                        <h1 tabindex="0" class="text-center p-4 text-black"><?php echo $punk[$ID][0] ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <img alt="Imagem da banda Bad Religion, ambos estão em pé encarando a câmera" tabindex="0" class="img-fluid" src="../images/punk/mini-bad-religion.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">Bad Religion</h4>
                        <h5 tabindex="0">Suffer</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                    <div class="col-lg-3 col-6">
                        <img alt="Foto da melhor banda de Punk de todo o mundo, Cólera, ambos em pé olhando seriamente para a camera" tabindex="0" class="img-fluid" src="../images/punk/mini-colera.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">Colera</h4>
                        <h5 tabindex="0">Tente mudar o amanha</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <img alt="Foto de quando o Dead kennedys era bom, com o Jello Biafra, ambos olhando seriamente para a camera" tabindex="0" class="img-fluid" src="../images/punk/mini-dk.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">Dead Kennedys</h4>
                        <h5 tabindex="0">Holiday in Cambodia</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                    <div class="col-lg-3 col-6">
                        <img alt="Foto da banda que praticamente fundou o Crossover, D.R.I. , só pra variar eles estão em pé olhando seriamente a camera" tabindex="0" class="img-fluid" src="../images/punk/mini-dri.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">D.R.I</h4>
                        <h5 tabindex="0">Dirty Rotten Imbecilles</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <img alt="Foto de uma das melhores bandas de Punk tradicional do país, Flicts, estão em um túnel olhando seriamente a camera" tabindex="0" class="img-fluid" src="../images/punk/mini-flicts.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">Flicts</h4>
                        <h5 tabindex="0">Sonhos Corrompidos</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                    <div class="col-lg-3 col-6">
                        <img alt="foto da banda Kaos 64 em um show, estão no palco bem iluminado" tabindex="0" class="img-fluid" src="../images/punk/mini-kaos64.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">Kaos-64</h4>
                        <h5 tabindex="0">Kaos Total</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <img alt="Foto da banda que enraizou o punk no brasil, Olho Seco, ambos estão se abraçando e sorrindo" tabindex="0" class="img-fluid" src="../images/punk/mini-olhoseco.jpg">
                    </div>
                    <div class="col-lg-3 col-6 text-black">
                        <h4 tabindex="0">Olho Seco</h4>
                        <h5 tabindex="0">Bostas, Fuzis e Capacetes</h5>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
                    </div>
                    <div class="col-lg-3 col-6">
                        <img alt="Foto da banda Ramones, para muitos a banda que criou o punk, ambos escorados em uma parede fazendo pose" tabindex="0" class="img-fluid" src="../images/punk/mini-ramones.jpg">
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
