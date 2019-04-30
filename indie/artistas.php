<?php
$indie_pt = array("Quem Ouvir?","Conheça os principais artistas do momento","Kayuá & Sant","Menestrel","Conheça o rapper paulista","Coruja BC1","O rap fora de SP vive","Sant","O legado de Marechal","Filipe Ret","Marcelo D2","Não é só de punch line que vive o rap","Descubra o motivo de todos estarem gravando com Cynthia Luz","Cynthia Luz");
$indie_en = array("Who to Listen to?","Meet the main artists of the moment","Kayuá & Sant","Menestrel","Meet the São Paulo rapper","Coruja BC1","Rap off SP lives","Sant","The legacy of Marechal","Filipe Ret","Marcelo D2","It's not just punch line that rap lives","Discover why everyone is recording with Cynthia Luz","Cynthia Luz");
$indie_es = array("¿Quem Ouvir?","Conoce a los principales artistas del momento","Kayuá & Sant","Menestrel","Conozca el rapero paulista","Coruja BC1","El rap fuera de SP vive","Sant","El legado de Marechal","Filipe Ret","Marcelo D2","No es sólo de punch line que vive el rap","Descubre el motivo de que todos estén grabando con Cynthia Luz","Cynthia Luz");
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
    <main>

        <!-- Contéudo Principal - Título / Suntítulo / Texto / Imagem 1:1 -->
        <article class="container my-5">
            <section class="row text-center mb-3">
                <div class="col-lg-12">
                    <h1 class="display-9 mb-0"><?php echo $indie[$ID][0]; ?></h1>
                    <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][1]; ?></small></blockquote>
                </div>
            </section>
            
            <section class="row text-justify">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus . Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
                </div>
            </section>

            <section class="row">
                <div class="text-white col-12">
                    <img class="card-img shadow" src="../images/indie/sant&kayua.jpg" alt="Foto dos cantores Sant e Kayuá para a promoção da música leõs da norte, foto em preto e branco simulando uma foto de prisão">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/kayua_/" target="_blank" class="text-white"><u><?php echo $indie[$ID][2]; ?></u></a></h5>
                        <p class="card-text ml-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>    
            </section>
        </article>

        <!-- 3x - Colunas de Informação / Título / Sub. / Text / Imagem 1:1 / Texto -->
        <section class="container mb-5">
            <div class="row">
                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h2 class="display-9 mb-0 text-center"><?php echo $indie[$ID][3]; ?></h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted"><?php echo $indie[$ID][4]; ?></small></blockquote>
                    <p class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    <img class="card-img mb-3 shadow" src="../images/indie/menestrel.jpg" alt="Foto do cantor Menestrel de camiseta laranja e óculos escuro, ao fundo o céu azul e um coqueiro">
                    <p class="text-justify mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    <a href="https://dittomusic.lnk.to/MenestrelBlackMirror?fbclid=IwAR0ZNFIEgtOOGLJ6QZ_5tQj6OaTTvHesfvmNYsiVviBCTwnEShDP3oB0Tz4" target="_blank" class="mt-0 p-0"><u>mais...</u></a>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h2 class="display-9 mb-0 text-center"><?php echo $indie[$ID][5]; ?></h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted"><?php echo $indie[$ID][6]; ?></small></blockquote>
                    <p class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    <img class="card-img mb-3 shadow" src="../images/indie/coruja.jpg" alt="Foto do cantor Coruja BC1 usando uma camisa xadrez vermelha e azul no fundo cinza.">
                    <p class="text-justify mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    <a href="http://corujabc1oficial.tnb.art.br/" target="_blank" class="mt-0 p-0"><u>mais...</u></a>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h2 class="display-9 mb-0 text-center"><?php echo $indie[$ID][7]; ?></h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted"><?php echo $indie[$ID][8]; ?></small></blockquote>
                    <p class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    <img class="card-img mb-3 shadow" src="../images/indie/sant.jpg" alt="Foto do cantor Sant no fundo preto.">
                    <p class="text-justify mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    <a href="http://www.vvar.com.br/sant/" target="_blank" class="mt-0 p-0"><u>mais...</u></a>
                </section>
            </div>    
        </section>  

        <!-- Segunda e Terceica Imagens / 1:1 -->
        <section class="container mb-5">
            <div class="row">
                <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                    <img class="card-img shadow" src="../images/indie/ret.jpg" alt="Foto do cantor Filipe Ret sentado ao fundo cadeiras de madeira.">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/filiperet/" target="_blank" class="text-white"><u><?php echo $indie[$ID][9]; ?></u></a></h5>
                        <p class="card-text ml-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>

                <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <img class="card-img shadow" src="../images/indie/d2.jpg" alt="Foto do cantor Marcelo D2 em pé com as mãos na cabeça, no fundo cinza.">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/marcelod2/" target="_blank" class="text-white"><u><?php echo $indie[$ID][10]; ?></u></a></h5>
                        <p class="card-text ml-3">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </section>
        
        <!--  3x - Título / Sub. / Texto / Imagem / Texto -->
        <section class="container mb-5">
            <section class="row text-center">
                <div class="col-lg-12">
                    <h2 class="display-9 mb-0"><?php echo $indie[$ID][11]; ?></h2>
                    <blockquote class="blockquote mt-0 mb-3"><small class="text-muted"><?php echo $indie[$ID][12]; ?></small></blockquote>
                </div>
            </section>
            
            <section class="row text-justify">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus . Lorem ipsum </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus . Lorem ipsum </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus . Lorem ipsum </p>
                </div>
            </section>

            <section class="card text-white mb-3 ">
                <img class="card-img shadow" src="../images/indie/luz.jpg" alt="Foto da cantora Cynthia Luz com um filtro retro.">
                <div class="card-img-overlay">
                    <h5 class="card-title"><a href="https://www.instagram.com/cyssluz/?hl=pt-br" target="_blank" class="text-white"><u><?php echo $indie[$ID][13]; ?></u></a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </section>

            <section class="row text-justify">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus . Lorem ipsum </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus . Lorem ipsum </p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet  quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus . Lorem ipsum </p>
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