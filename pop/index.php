<?php
    $pop_pt = array("Bem vindo ao Universo POP","Tudo o que você precisa saber sobre os artistas em alta, origens, musicas, lançamentos e muito mais você encontra aqui!","Do universo POP para o mundo");
    $pop_en = array("Welcome to the POP Universe", "
    Everything you need to know about the artists in high, origins, musics, releases and much more you find here!", "From the POP universe to the world");
    $pop_es = array("Bienvenidos al Universo POP", "Todo lo que necesitas saber sobre los artistas en alta, orígenes, música, lanzamientos y mucho más te encuentras aquí!", "Del universo POP al mundo");

    $pop = array('PT'=> $pop_pt,'EN' => $pop_en,'ES' => $pop_es);
?>
<?php
 //Php para verificar idioma!
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
   //importando o head
     include('../imports/head.php');
   ?>

<body>
    <!--importando o menu -->
    <?php
    include('../imports/menu-secundario.php');
  ?>

    <!-- Conteudo da pagina  -->
    <main>
    <article>
        <section class="container">
            <blockquote class="blockquote text-center pt-3">
                <h1 class="pt-4"><?php echo $pop[$ID][0]?></h1>
                <p class="text-black-50"><?php echo $pop[$ID][1]?></p>
            </blockquote>
        <div class="card text-white">
                <img class="card-img shadow" src="../images/pop/five-pop.jpg" alt="Foto dos integrantes da bando Marron Five">
            </div>
        </section>

        <section class="container my-5 my-md-5 my-lg-5 my-xl-5">
                    <div class="col-lg-12">
                    <h2 class="text-center"><?php echo $pop[$ID][2]?></h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla mauris, commodo at nibh ut, luctus sagittis tortor. Duis ut rhoncus mi, in congue lorem. Pellentesque in risus dignissim, cursus turpis ac, auctor magna. Quisque semper, purus pharetra consectetur elementum, risus massa laoreet erat, sed vulputate diam dolor in nisi. Fusce interdum odio eu convallis convallis. Maecenas lorem ex, facilisis luctus posuere sit amet, rhoncus non enim. Maecenas at tellus justo. In ut augue arcu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla tincidunt tempor lacinia. Proin et mi sit amet lacus faucibus posuere in sed felis.Quisque sodales, tellus ut aliquet volutpat, magna odio efficitur justo, et pharetra eros sapien consectetur ex. Aliquam varius mauris metus, at fermentum purus lacinia id. Curabitur faucibus sed orci iaculis consectetur. Maecenas imperdiet enim in urna egestas sollicitudin. Nunc tristique nunc sit amet lacinia fermentum. Aliquam nec ipsum quis ligula maximus aliquam at quis diam. Sed eget libero vel tortor feugiat bibendum at a erat. Sed turpis magna, consectetur sed erat nec, suscipit iaculis magna. Nulla eu lorem at dui bibendum finibus sed sed augue. Sed metus mauris, pulvinar nec tellus vitae, mollis egestas mauris. Donec mollis bibendum mi, nec cursus metus. In nec mi lacus. Praesent placerat ac velit at suscipit. Nulla vitae convallis turpis, nec efficitur leo. Ut aliquam metus id diam vulputate venenatis. Integer sagittis metus in enim elementum lacinia vel eu odio. Proin lorem odio, convallis sed rutrum sit amet, tempor ac nisi. Sed fermentum pellentesque libero, vitae tincidunt dui feugiat eget. Sed porttitor elementum nibh vel pretium. Pellentesque vitae ex neque. Integer ultrices fermentum ligula vitae ullamcorper. Phasellus vitae tempor urna, id aliquet lectus. Suspendisse in enim tristique, rutrum mauris id, bibendum nulla. Proin non ultrices lectus.</p>
                    </div>
                </section>
        </article>

        <section class="container">
            <div class="row">
                <section class="col-lg-6 col-md-6 col-sm-12">
                <img class="card-img mb-3 shadow" src="../images/pop/gaga-pop.jpg" alt="Foto da cantora Lady Gaga em preto e branco">
                    <h2 class="display-9 mb-0 text-center">Lorem Ipsun</h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted">Lorem ipsum dolor sit amet</small></blockquote>
                    <p class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                </section>

                <section class="col-lg-6 col-md-6 col-sm-12">
                <img class="card-img mb-3 shadow" src="../images/pop/gaga-pop.jpg" alt="Foto da cantora Lady Gaga em preto e branco">
                    <h2 class="display-9 mb-0 text-center">Lorem Ipsun</h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted">Lorem ipsum dolor sit amet</small></blockquote>
                    <p class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                </section>
            </div>
        </section>
    </main>

    <!-- importando o footer da pagina -->
    <?php
    include('../imports/footer-secundario.php');
  ?>

</body>

</html>
