<?php
$indie_pt = array("Racionais Mc's","A velha guarda ainda vive","Não é só de SP que vive o rap","Conheça as referências de outros estados","Marechal","A lenda sem álbum","Mv Bill","O Falcão do morro","Sabotage","Canão sente falta","O legado que eles deixaram","Conheça o impacto de suas letras imortalizadas em novos versos");
$indie_en = array("Racionais Mc's","The old school still lives","It's not just SP that lives the rap","Know the references of other states","Marechal","The legend without album","Mv Bill","The Hawk of the Hill","Sabotage","Canão feels lack","The legacy they left behind","Know the impact of your immortalized lyrics on new verses");
$indie_es = array("Racionais Mc's","La vieja guardia todavía vive","No es sólo de SP que vive el rap","Conozca las referencias de otros estados","Marechal","La leyenda sin álbum","Mv Bill","El Halcón de la colina","Sabotage","Canão siente falta","El legado que dejaron","Conozca el impacto de sus letras inmortalizadas en nuevos versos");
$indie = array('PT' => $indie_pt, 'EN' => $indie_en, 'ES' => $indie_es);
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
<!-- Menu -->
<?php
include('../imports/menu-secundario.php');
?>

    <!-- Conteúdo da pagina -->
    <main id="content">

        <!-- Imagem Wide-->
        <section class="container my-5">
            <div class="row">
                <div class="text-white col-12">
                    <img class="card-img shadow" src="../images/indie/racionais.jpg" alt="Foto do Racionais Mc's em preto e branco">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/racionaiscn/" target="_blank" class="text-white"><u><?php echo $indie[$ID][0]; ?></u></a></h5>
                        <p class="card-text ml-3"><?php echo $indie[$ID][1]; ?></p>
                    </div>
                </div>
            </div>    
        </section>

        <!-- Contéudo Principal - Título / Suntítulo / Texto / Imagem Wide / Texto -->
        <article class="container mb-5">
            <section class="row text-center">
                <div class="col-12">
                    <h1 tabindex="0" class="display-9 mb-0"> <?php echo $indie[$ID][2]; ?> </h1>
                    <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][3]; ?></small></blockquote>
                </div>
            </section>

            <section class="row text-justify mt-3">
                <div class="col-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
            </section>

            <section class="card text-white my-3">
                <img class="card-img shadow" src="../images/indie/marechal.jpg" alt="Foto da cantor Marechal em um show cantando.">
                <div class="card-img-overlay">
                    <h5 class="card-title"><a href="https://www.instagram.com/mcmarechal/?hl=pt-br" target="_blanbk" class="text-white"><u><?php echo $indie[$ID][4]; ?></u></a></h5>
                    <p class="card-text"><?php echo $indie[$ID][5]; ?></p>
                </div>
            </section>

            <section class="row text-justify">
                <div class="col-lg-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
            </section>
        </article>

        <!-- Segunda e Terceira Imagem 1:1  -->
        <section class="container">
            <div class="row">
                <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                    <img class="card-img shadow" src="../images/indie/bill.jpg" alt="Foto do cantor Mv Bill de preta na frente de um muro de tijolos vermelhos.">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/mvbill/" target="_blank" class="text-white"><u><?php echo $indie[$ID][6]; ?></u></a></h5>
                        <p class="card-text ml-3"><?php echo $indie[$ID][7]; ?></p>                    
                    </div>
                </div>  

                <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <img class="card-img shadow" src="../images/indie/sabotage.jpg" alt="Foto do cantor Rubel em frente ao microfone em Preto e Branco">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/sabotageoficial/" target="_blank" class="text-white"><u><?php echo $indie[$ID][8]; ?></u></a></h5>
                        <p class="card-text ml-3"><?php echo $indie[$ID][9]; ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Último Texto -->
        <section class="container my-5">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 tabindex="0" class="display-9 mb-0"><?php echo $indie[$ID][10]; ?></h2>
                    <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][11]; ?></small></blockquote>
                </div>
            </div>

            <div class="row text-justify mt-3">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
            </div>
        </section>

    </main>

<!-- FOOTER -->
<br>
<?php
include('../imports/footer-secundario.php');
?>

</body>

</html>
