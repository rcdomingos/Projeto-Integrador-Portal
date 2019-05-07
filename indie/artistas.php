<?php
$indie_pt = array("Quem Ouvir?"      ,"Conheça os principais artistas do momento"    ,"Kayuá & Sant","Leões da Norte part. II","Menestrel","Conheça o rapper paulista" ,"Coruja BC1","O rap fora de SP vive"  ,"Sant","O legado de Marechal"  ,"Filipe Ret","A velha nova cara do rap RJ","Marcelo D2","O legado dos anos 90 que continua vivo"   ,"Não é só de punch line que vive o rap"   ,"Descubra o motivo de todos estarem gravando com Cynthia Luz"   ,"Cynthia Luz","Conheça o novo álbum da cantora, Efeito Violeta"      ,"1","2","3","4","5","6","7");
$indie_en = array("Who to Listen to?","Meet the main artists of the moment"          ,"Kayuá & Sant","Leões da Norte part. II","Menestrel","Meet the São Paulo rapper" ,"Coruja BC1","Rap off SP lives"       ,"Sant","The legacy of Marechal","Filipe Ret","The old new face of rap RJ" ,"Marcelo D2","The legacy of the 90's that remains alive","It's not just punch line that rap lives" ,"Discover why everyone is recording with Cynthia Luz"           ,"Cynthia Luz","Meet the new album by the singer, Efeito Violeta"     ,"1","2","3","4","5","6","7");
$indie_es = array("¿Quem Ouvir?"     ,"Conoce a los principales artistas del momento","Kayuá & Sant","Leões da Norte part. II","Menestrel","Conozca el rapero paulista","Coruja BC1","El rap fuera de SP vive","Sant","El legado de Marechal" ,"Filipe Ret","La vieja cara del rap RJ"   ,"Marcelo D2","El legado de los años 90 que sigue vivo"  ,"No es sólo de punch line que vive el rap","Descubre el motivo de que todos estén grabando con Cynthia Luz","Cynthia Luz","Conozca el nuevo álbum de la cantante, Efeito Violeta","1","2","3","4","5","6","7");
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

        <!-- Contéudo Principal - Título / Suntítulo / Texto / Imagem 1:1 -->
        <article class="container my-5">
            <section class="row text-center mb-3">
                <div class="col-lg-12">
                    <h1 tabindex="0" class="display-9 mb-0"><?php echo $indie[$ID][0]; ?></h1>
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
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/kayua_/" target="_blank" class="text-white"><u><?php echo $indie[$ID][2]; ?></u></a></h5>
                        <p class="card-text ml-3"><?php echo $indie[$ID][3]; ?></p>
                    </div>
                    <img class="card-img shadow" src="../images/indie/sant&kayua.jpg" alt="Foto dos cantores Sant e Kayuá para a promoção da música leõs da norte, foto em preto e branco com ambos segurando placas com os dizeres RJ - ZN,seus nomes e Registro com a data de 31 de novembro de 2011, Kayuá olhando para frente e Sant olhando para o lado">
                </div>    
            </section>
        </article>

        <!-- 3x - Colunas de Informação / Título / Sub. / Text / Imagem 1:1 / Texto -->
        <section class="container mb-5">
            <div class="row">
                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h2 tabindex="0" class="display-9 mb-0 text-center"><?php echo $indie[$ID][4]; ?></h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted"><?php echo $indie[$ID][5]; ?></small></blockquote>
                    <p class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    <img class="card-img mb-3 shadow" src="../images/indie/menestrel.jpg" alt="Foto do cantor Menestrel de camiseta laranja, óculos escuro e sidebag preta, ao fundo o céu azul e um coqueiro a sua esquerda">
                    <p class="text-justify mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    <a href="https://dittomusic.lnk.to/MenestrelBlackMirror?fbclid=IwAR0ZNFIEgtOOGLJ6QZ_5tQj6OaTTvHesfvmNYsiVviBCTwnEShDP3oB0Tz4" target="_blank" class="mt-0 p-0"><u>mais...</u></a>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h2 tabindex="0" class="display-9 mb-0 text-center"><?php echo $indie[$ID][6]; ?></h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted"><?php echo $indie[$ID][7]; ?></small></blockquote>
                    <p class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    <img class="card-img mb-3 shadow" src="../images/indie/coruja.jpg" alt="Foto do cantor Coruja BC1 usando uma camisa xadrez vermelha e azul no fundo cinza, aparentemente dançando.">
                    <p class="text-justify mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    <a href="http://corujabc1oficial.tnb.art.br/" target="_blank" class="mt-0 p-0"><u>mais...</u></a>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12">
                    <h2 tabindex="0" class="display-9 mb-0 text-center"><?php echo $indie[$ID][8]; ?></h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted"><?php echo $indie[$ID][9]; ?></small></blockquote>
                    <p class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    <img class="card-img mb-3 shadow" src="../images/indie/sant.jpg" alt="Foto do cantor Sant usando uma camiseta listrada cinza em alto contraste dando um ar obscuro no fundo preto.">
                    <p class="text-justify mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                    <a href="http://www.vvar.com.br/sant/" target="_blank" class="mt-0 p-0"><u>mais...</u></a>
                </section>
            </div>    
        </section>  

        <!-- Segunda e Terceica Imagens / 1:1 -->
        <section class="container mb-5">
            <div class="row">
                <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/filiperet/" target="_blank" class="text-white"><u><?php echo $indie[$ID][10]; ?></u></a></h5>
                        <p class="card-text ml-3"><?php echo $indie[$ID][11]; ?></p>
                    </div>
                    <img class="card-img shadow" src="../images/indie/ret.jpg" alt="Foto do cantor Filipe Ret sorrindo sentado de pernas cruzadas, bermuda verde, sem camiseta e com cordão de ouro ao fundo cadeiras de vime.">
                </div>

                <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="card-img-overlay">
                        <h5 class="card-title ml-3"><a href="https://www.instagram.com/marcelod2/" target="_blank" class="text-white"><u><?php echo $indie[$ID][12]; ?></u></a></h5>
                        <p class="card-text ml-3"><?php echo $indie[$ID][13]; ?></p>
                    </div>
                    <img class="card-img shadow" src="../images/indie/d2.jpg" alt="Foto do cantor Marcelo D2 em pé com as mãos na cabeça, camiseta preta, blusa jeans preta sem mangas e barba por fazer no fundo cinza.">
                </div>
            </div>
        </section>
        
        <!--  3x - Título / Sub. / Texto / Imagem / Texto -->
        <section class="container mb-5">
            <section class="row text-center">
                <div class="col-lg-12">
                    <h2 tabindex="0" class="display-9 mb-0"><?php echo $indie[$ID][14]; ?></h2>
                    <blockquote class="blockquote mt-0 mb-3"><small class="text-muted"><?php echo $indie[$ID][15]; ?></small></blockquote>
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
                <div class="card-img-overlay">
                    <h5 class="card-title"><a href="https://www.instagram.com/cyssluz/?hl=pt-br" target="_blank" class="text-white"><u><?php echo $indie[$ID][16]; ?></u></a></h5>
                    <p class="card-text"><?php echo $indie[$ID][17]; ?></p>
                </div>
                <img class="card-img shadow" src="../images/indie/luz.jpg" alt="Foto da cantora Cynthia Luz ao que parece em uma área urbana com árvoes, de lhos fechados, óculos escuro, e blusa laranja com o rosto voltado para a luz. ">
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