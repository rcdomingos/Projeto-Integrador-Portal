<?php
$indie_pt = array("Fique por dentro da cena"    ,"Os principais laçamentos e apostas do rap br","Dalsin","Conheça o pesadelo de quem não dorme há dias"          ,"Vietnã","Inferno Rua","Rashid","Mal com o mundo","Voltando as origens do mestre de cerimônia"     ,"Muito mais que 18k","Wc no Beat","Do trap ao funk"   ,"1","2","3","4","5");
$indie_en = array("Stay inside the scene"       ,"The main loops and bets of rap"              ,"Dalsin","Meet the nightmare of those who do not sleep the days" ,"Vietnã","Inferno Rua","Rashid","Mal com o mundo","Back to the origins of the master of ceremony"  ,"Much more than 18k","Wc no Beat","From trap to funk" ,"1","2","3","4","5");
$indie_es = array("Mantente dentro de la escena","Los principales lazos y apuestas del rap"    ,"Dalsin","Conoce la pesadilla de quien no duerme a días"         ,"Vietnã","Inferno Rua","Rashid","Mal com o mundo","Volviendo los orígenes del maestro de ceremonia","Mucho más que 18k" ,"Wc no Beat","De lo trap al funk","1","2","3","4","5");
$indie = array('PT' => $indie_pt, 'EN' => $indie_en, 'ES' => $indie_es);
?>

<!-- PHP para adicionar o titulo da página -->
<?php $titlePagina = array('PT' => "Indie | Lançamentos", 'EN' => "Indie | Releases", 'ES' => "Indie | Lanzamientos"); ?>

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

    <!-- Imagem wide -->
    <section class="container my-5">
      <div class="card text-white shadow">
        <img tabindex="0" class="card-img" src="../images/indie/froid.jpg"
          alt="Foto do cantor Froid em preto e branco de óculos escuros, ao fundo uma parede de tijolos.">
      </div>
    </section>

    <!-- Contéudo Principal - Título / Suntítulo / Texto -->
    <article class="container">
      <section class="row text-center">
        <div class="col-12">
          <h1 tabindex="0" class="display-9 mt-4 mb-0"><?php echo $indie[$ID][0]; ?></h1>
          <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][1]; ?></small>
          </blockquote>
          <p class="text-justify mt-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum
            molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum.
            Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue
            tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus,
            scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem.
            Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
        </div>
      </Section>
    </article>

    <!-- 3x - Título / Sub. / Texto / Imagem / Texto -->
    <section class="container my-5">
      <div class="row">
        <div class="text-white col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-3">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/dalsiin_/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][2]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][3]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/dalsin.jpg"
            alt="Foto do cantor Dalsin de perfil em preto e branco no fundo preto.">
        </div>

        <div class="text-white col-sm-12 col-md-12 col-lg-4 col-xl-4 mb-3">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.facebook.com/vietnarap011/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][4]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][5]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/vietna.jpg"
            alt="Foto do cantor Vietnã no lançamento do seu album de mesmo nome.">
        </div>

        <div class="text-white col-sm-12 col-md-12 col-lg-4 col-xl-4">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/mcrashid/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][6]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][7]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/rashid.jpg" alt="Foto do cantor Rashid sentado numa ponte">
        </div>
      </div>
    </section>

    <!-- Segundo Text - Título / Sub. / Texto / Imagem wide / Texto -->
    <section class="container mb-5">
      <div class="row text-center">
        <div class="col-12">
          <h2 tabindex="0" class="display-9 mb-0"><?php echo $indie[$ID][8]; ?></h1>
            <blockquote class="blockquote mt-0 mb-3"><small class="test-muted"><?php echo $indie[$ID][9]; ?></small>
            </blockquote>
        </div>
      </div>

      <div class="row text-justify">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor.
            Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam
            lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor,
            imperdiet quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque
            accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et
            pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor.
            Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam
            lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor,
            imperdiet quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque
            accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et
            pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
        </div>
      </div>

      <div class="card text-white">
        <div class="card-img-overlay">
          <h5 class="card-title"><a href="https://www.instagram.com/wcnobeat/?hl=pt-br" target="_blank"
              class="text-white"><u><?php echo $indie[$ID][10]; ?></u></a></h5>
          <p class="card-text"><?php echo $indie[$ID][11]; ?></p>
        </div>
        <img class="card-img shadow" src="../images/indie/wc.jpg" alt="Foto do produtor WC no Beat de blusa branca.">
      </div>

      <div class="row text-justify">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="mt-3 ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor.
            Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam
            lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor,
            imperdiet quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque
            accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et
            pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor.
            Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam
            lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor,
            imperdiet quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque
            accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et
            pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <?php include('../imports/footer-secundario.php'); ?>

</body>

</html>
