<?php
$indie_pt = array("Jean Tassy","Não é só de raiva que vive o rap"        ,"PK","A cena do funk no rap"       ,"Tiago Mac","O flow que soa como punch line"      ,"Kayuá","O leão ao norte"      ,"BK","Entre castelos e ruínas"  ,"A aparição do rap na cena nacional"         ,"Entenda como o rap chegou em todo o território nacional"  ,"1","2","3","4","5","6");
$indie_en = array("Jean Tassy","It's not just about anger that rap lives","PK","The funk scene in rap"       ,"Tiago Mac","The flow that sounds like punch line","Kayuá","The lion to the north","BK","Between castles and ruins","The appearance of rap on the national scene","Understand how rap has reached the national territory"    ,"1","2","3","4","5","6");
$indie_es = array("Jean Tassy","No es sólo de raiva que vive el rap"     ,"PK","La escena del funk en el rap","Tiago Mac","El flow que suena como punch line"   ,"Kayuá","El león al norte"     ,"BK","Entre castillos y ruinas" ,"La aparición del rap en la escena nacional" ,"Entiende cómo el rap llegó en todo el territorio nacional","1","2","3","4","5","6");
$indie = array('PT' => $indie_pt, 'EN' => $indie_en, 'ES' => $indie_es);
?>

<!-- PHP para adicionar o titulo da página -->
<?php $titlePagina = array('PT' => "Indie | Destaques", 'EN' => "Indie | Highlights", 'ES' => "Indie | Reflejos"); ?>

<!-- PHP para verificar qual o idioma do html -->
<?php include('../imports/idioma.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo $lang?>">

<!-- Importando o head da página -->
<?php include('../imports/head.php'); ?>

<body>

  <!-- Menu -->
  <?php include('../imports/menu-secundario.php'); ?>

  <!-- Conteúdo da pagina -->
  <main id="content">

    <!-- Imagem Wide -->
    <section class="container my-5">
      <div class="card text-white">
        <img tabindex="0" class="card-img shadow" src="../images/indie/baco.jpg"
          alt="Foto do cantor Baco Exu do Blues ao fundo uma porta de aço.">
      </div>
    </section>

    <!-- 3x - Título / Sub. / Texto / Imagem / Texto  -->
    <section class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2 tabindex="0" class="display-9 mb-0 text-center"><?php echo $indie[$ID][0]; ?></h2>
          <blockquote class="blockquote mt-0 text-center"><small
              class="text-muted"><?php echo $indie[$ID][1]; ?></small></blockquote>
          <p class="my-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum
            molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum.
            Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue
            tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus,
            scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem.
            Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
          <img class="card-img shadow" src="../images/indie/jean.jpg"
            alt="Foto do cantor Jean Tassy ao fundo o por do sol.">
          <p class="my-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum
            molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum.
            Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue
            tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus,
            scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem.
            Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2 tabindex="0" class="display-9 mb-0 text-center"><?php echo $indie[$ID][2]; ?></h2>
          <blockquote class="blockquote mt-0 text-center"><small
              class="text-muted"><?php echo $indie[$ID][3]; ?></small></blockquote>
          <p class="my-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum
            molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum.
            Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue
            tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus,
            scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem.
            Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
          <img class="card-img shadow" src="../images/indie/pk.jpg"
            alt="Foto do cantor PK de boné rosa no fundo preto.">
          <p class="my-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum
            molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum.
            Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue
            tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus,
            scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem.
            Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2 tabindex="0" class="display-9 mb-0 text-center"><?php echo $indie[$ID][4]; ?></h2>
          <blockquote class="blockquote mt-0 text-center"><small
              class="text-muted"><?php echo $indie[$ID][5]; ?></small></blockquote>
          <p class="my-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum
            molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum.
            Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue
            tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus,
            scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem.
            Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
          <img class="card-img shadow" src="../images/indie/tiago.jpg"
            alt="Foto do cantor Tiago Mac em preto e branco de óculos escuro.">
          <p class="my-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum
            molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum.
            Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue
            tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus,
            scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem.
            Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
        </div>
      </div>
    </section>

    <!-- Segunda e Terceira Imagem / 1:1 -->
    <section class="container my-5">
      <div class="row">
        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3 text-shadow"><a href="https://www.instagram.com/kayua_/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][6]; ?></u></a></h5>
            <p class="card-text ml-3 text-shadow"><?php echo $indie[$ID][7]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/kayua.jpg"
            alt="Foto do cantor Kayua rindo de camiseta preta.">
        </div>

        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/bkttlapa/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][8]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][9]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/bk.jpg"
            alt="Foto do cantor Rubel em frente ao microfone em Preto e Branco">
        </div>
      </div>
    </section>


    <!-- Contéudo Principal - Título / Suntítulo / Texto -->
    <article class="container mb-5">
      <section class="row text-center  mb-3">
        <div class="col-lg-12">
          <h1 tabindex="0" class="display-9 mb-0"><?php echo $indie[$ID][10]; ?></h2>
            <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][11]; ?></small>
            </blockquote>
        </div>
      </section>

      <section class="row text-justify">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor.
            Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam
            lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor,
            imperdiet quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque
            accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et
            pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id
            ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a
            est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet quis, luctus
            sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in.
            Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam
            sagittis, egestas tellus eget, faucibus .</p>
        </div>
      </section>
    </article>

  </main>

  <!-- FOOTER -->
  <?php include('../imports/footer-secundario.php'); ?>

</body>

</html>
