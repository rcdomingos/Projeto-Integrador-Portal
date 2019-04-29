<?php
$indie_pt = array("Fique Por Dentro Dos Principais Lançamentos");
$indie_en = array("Stay tuned for major releases");
$indie_es = array("Se queda por dentro de los principales lanzamientos");
$indie = array('PT' => $indie_pt, 'EN' => $indie_en, 'ES' => $indie_es);
// print_r($sertanejo);
//usar $ID para os Vetores
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

        <!-- Imagem wide -->
        <section class="container my-5">
                <div class="card text-white shadow">
                    <img class="card-img" src="../images/indie/froid.jpg" alt="Foto do cantor Froid em preto e branco de óculos escuros, ao fundo uma parede de tijolos.">
                </div>
        </section>

        <!-- Contéudo Principal - Título / Suntítulo / Texto -->
        <article class="container">
            <section class="row text-center">
                    <div class="col-12">
                        <h1 class="display-9 mt-4 mb-0"><?php echo $indie[$ID][0]; ?></h1>
                        <blockquote class="blockquote mt-0"><small class="text-muted">Tudo que você precisa saber sobre o mundo Indie em um só lugar.</small></blockquote>
                        <p class="text-justify mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    </div>
            </Section>
        </article>

        <!-- 3x - Título / Sub. / Texto / Imagem / Texto -->
        <section class="container my-5"> 
            <div class="row">
                <div class="text-white col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-3">
                    <img class="card-img shadow" src="../images/indie/dalsin.jpg" alt="Foto do cantor Dalsin de perfil em preto e branco no fundo preto.">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/dalsiin_/" target="_blank" class="text-white"><u>Dalsin</u></a></h5>
                        <p class="card-text ml-3">Lorem ipsum dolor sit amet.</p>
                        
                    </div>
                </div>

                <div class="text-white col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-3">
                    <img class="card-img shadow" src="../images/indie/vietna.jpg" alt="Foto do cantor Vietnã no lançamento do seu album de mesmo nome.">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.facebook.com/vietnarap011/" target="_blank" class="text-white"><u>Vietnã</u></a></h5>
                        <p class="card-text ml-3">Lorem ipsum dolor sit amet.</p>
                        
                    </div>
                </div>

                <div class="text-white col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <img class="card-img shadow" src="../images/indie/rashid.jpg" alt="Foto do cantor Rashid sentado numa ponte">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/mcrashid/" target="_blank" class="text-white"><u>Rashid</u></a></h5>
                        <p class="card-text ml-3">Lorem ipsum dolor sit amet.</p>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- Segundo Text - Título / Sub. / Texto / Imagem wide / Texto -->
        <section class="container mb-5">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="display-9 mb-0"><?php echo $indie[$ID][0]; ?></h1>
                    <blockquote class="blockquote mt-0 mb-3"><small class="test-muted">Tudo que você precisa saber sobre o mundo Indie em um só lugar.</small></blockquote>
                </div>
            </div>

            <div class="row text-justify">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
            </div>
       
                <div class="card text-white">
                    <img class="card-img shadow" src="../images/indie/wc.jpg" alt="Foto do produtor WC no Beat de blusa branca.">
                    <div class="card-img-overlay">
                        <h5 class="card-title"><a href="https://www.instagram.com/wcnobeat/?hl=pt-br" target="_blank" class="text-white"><u>WC no Beat</u></a></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>

            <div class="row text-justify">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="mt-3 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
            </div>
        </section>

    <!-- FOOTER -->
<?php
include('../imports/footer-secundario.php');
?>

</body>

</html>
