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

    <!-- Conteúdo da pagina -->
    <main>

        <!-- Imagem Wide-->
        <section class="container my-5">
            <div class="row">
                <div class="text-white col-12">
                    <img class="card-img shadow" src="../images/indie/racionais.jpg" alt="Foto do Racionais Mc's em preto e branco">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/racionaiscn/" target="_blank" class="text-white"><u>Racionais Mc's</u></a></h5>
                        <p class="card-text ml-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>    
        </section>

        <!-- Contéudo Principal - Título / Suntítulo / Texto / Imagem Wide / Texto -->
        <article class="container mb-5">
            <section class="row text-center">
                <div class="col-12">
                    <h1 class="display-9 mb-0"> Lorem Ipsum </h1>
                    <blockquote class="blockquote mt-0"><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </small></blockquote>
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
                    <h5 class="card-title"><a href="https://www.instagram.com/mcmarechal/?hl=pt-br" target="_blanbk" class="text-white"><u>Marechal</u></a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/mvbill/" target="_blank" class="text-white"><u>Mv Bill</u></a></h5>
                        <p class="card-text ml-3">Lorem ipsum dolor sit amet.</p>                    
                    </div>
                </div>  

                <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <img class="card-img shadow" src="../images/indie/sabotage.jpg" alt="Foto do cantor Rubel em frente ao microfone em Preto e Branco">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/sabotageoficial/" target="_blank" class="text-white"><u>Sabotage</u></a></h5>
                        <p class="card-text ml-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Último Texto -->
        <section class="container my-5">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2 class="display-9 mb-0"> Lorem Ipsum. </h2>
                    <blockquote class="blockquote mt-0"><small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small></blockquote>
                </div>
            </div>

            <div class="row text-justify">
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
