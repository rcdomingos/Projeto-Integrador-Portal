<?php
$indie_pt = array("Mundo Indie",);
$indie_en = array("Indie World",);
$indie_es = array("El Mondo Indie",);
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

    <!-- Conteúdo da Página -->
    <main id="content">
        
        <!-- Imagem wide -->
        <section class="container my-5">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <img class="rounded img-fluid shadow" src="../images/indie/karol.jpg" alt="Foto da cantora Karol Conka fantasiada no fund azul.">
                </div>
            </div>
        </section>

        <!-- Contéudo Principal - Título / Suntítulo / Texto -->
        <article class="container">
            <section class="row text-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" id="indieorigem">
                    <h1 tabindex="0" class="display-9 mb-0"> <?php echo $indie[$ID][0]; ?> </h1>
                    <blockquote class="blockquote mt-0"><small class="text-muted">Lorem ipsum dolor sit amet.</small></blockquote>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in mollis mi. Aenean nec consectetur nisl, et dictum sapien. Sed sed nisi quis augue rhoncus hendrerit. Sed quis tortor ac nunc elementum lacinia eget at orci. Duis id lectus ut arcu tincidunt efficitur. Duis quis erat ultricies, consequat nisi eget, porta augue. Duis placerat a ligula nec convallis. Sed mollis consequat ipsum eget sagittis. Vivamus ut est magna. Phasellus tincidunt leo rutrum, porta urna ac, consectetur dui. Phasellus elit augue, vulputate ut fringilla a, tempus nec nulla. Vivamus id laoreet eros. Fusce ultricies justo in volutpat ultrices. Etiam enim dui, rhoncus et vehicula nec, maximus ut odio. Ut malesuada nulla velit, at consectetur massa faucibus et.</p>
                </div>
            </section>
        </article>

        <!-- Imagem 1:1 -->
        <section class="container mt-5 mb-4">
            <div class="card">
                <img class="card-img shadow" src="../images/indie/dk.jpg" alt="Foto do cantor DK 47 de boné vermelho e camiseta preta, ao fundo um muro cheio de folhas.">
                <div class="card-img-overlay">
                    <h5 class="card-title"><a href="https://www.instagram.com/adl_dk/" target="_blank" class="text-white"><u>DK - 47</u></a></h5>
                    <p class="card-text text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </section>

        <!-- Segunda e Terceica Imagens / 1:1 -->

        <section class="container mb-5"> 
            <div class="row">
                <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                    <img class="card-img shadow" src="../images/indie/rebecca.jpg" alt="Foto da cantora Rebecca de costas usando uma roupa preta e branca.">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/mcrebecca/" target="_blank" class="text-white"><u>Rebecca</u></a></h5>
                        <p class="card-text ml-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <img class="card-img shadow" src="../images/indie/sain.jpg" alt="Foto do cantor Sain fazend careta em preto e branco.">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/sainktt/" target="_blank" class="text-white"><u>Sain</u></a></h5>
                        <p class="card-text ml-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--  3x - Título / Sub. / Texto / Imagem / Texto -->
        <section class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" id="indieorigem">
                    <h2 tabindex="0" class="display-9 mb-0"> <?php echo $indie[$ID][0]; ?> </h1>
                    <blockquote class="blockquote mt-0"><small class="text-muted">Lorem ipsum dolor sit amet.</small></blockquote>
                </div>
            </div>

            <div class="row text-justify">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                </div>
            </div>    
        </section>

    </main>

<!-- FOOTER -->
<?php
include('../imports/footer-secundario.php');
?>
</body>
</html>