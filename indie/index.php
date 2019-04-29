<?php
$indie_pt = array("Mundo Indie","Tudo que você precisa saber sobre o mundo Indie em um só lugar.");
$indie_en = array("Indie World","Everithing you need to now about que indie world in one single place.");
$indie_es = array("El Mondo Indie","Todo lo que necesitas saber sobre el mundo Indie en un solo lugar.");
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

    <!-- Conteúdo da Página -->
    <main>

        <!-- Contéudo Principal - Título / Suntítulo / Texto -->
        <article lang="pt-BR" class="container my-5 my-md-5 my-lg-5 my-xl-5">
                <section class="row text-center">
                    <div class="col-lg-12">
                        <h1 class="display-9 mb-0"> <?php echo $indie[$ID][0]; ?> </h1>
                        <blockquote class="blockquote mt-0 mb-3"><small class="text-muted"><?php echo $indie[$ID][1]; ?></small></blockquote>
                    </div>
                </section>
           
                <section class="row text-justify">
                    <div class="col-lg-12">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                    </div>
                </section>
        </article>

        <!-- Primeira Imagem - Wide -->
        <section class="container">
            <div class="card text-white">
                <img class="card-img shadow" src="../images/indie/criolo.jpg" alt="Foto do rosto do cantor Criolo em preto e branco.">
                <div class="card-img-overlay">
                    <h5 class="card-title"><a href="https://www.instagram.com/criolomc/" target="_blank" class="text-white"><u>Criolo</u></a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
        </section>

        <!-- Segunda e Terceica Imagens / 1:1 -->

        <section class="container mt-4 mt-md-4 mt-lg-4 mt-xl-4 mb-5">
            <div class="row">
                <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
                    <img class="card-img shadow" src="../images/indie/emicida.jpg" alt="Foto do cantor Emicida de óculos escuro em um fundo vermelho.">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/emicida/" target="_blank" class="text-white"><u>Emicida</u></a></h5>
                        <p class="card-text ml-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <img class="card-img shadow" src="../images/indie/flora.jpg" alt="Foto da cantora Flora Matos sentada em um fundo rosa.">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/floramatos/" target="_blank" class="text-white"><u>Flora Matos</u></a></h5>
                        <p class="card-text ml-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Segundo texto - Título / Sub. / Texto / Imagem 1:1 / Texto -->
        <section class="container mb-5">
            <section class="row text-center mb-3">
                <div class="col-lg-12">
                    <h2 class="display-9 mb-0"> <?php echo $indie[$ID][0]; ?> </h2>
                    <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][1]; ?></small></blockquote>
                </div>
            </section>
            
            <section class="row text-justify">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
            </section>

            <section class="row my-3">
                <div class="col-12">
                    <div class="card text-white">
                        <img class="card-img shadow" src="../images/indie/djonga.jpg" alt="Foto do cantor Djonga vestido de branco no clipe Favela Vive 3">
                    </div>
                </div>    
            </section>

            <section class="row text-justify">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
            </section>
        </section>

    </main>

<!-- FOOTER -->
<?php
include('../imports/footer-secundario.php');
?>
</body>
</html>