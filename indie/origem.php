<?php
$indie_pt = array("A nova velha guarda"   ,"Conheça as referências da nova geração do rap"         ,"DK - 47","Consagrado no rap pelo grupo ADL, faz linha de frente para Favela Vive"      ,"Rebecca","Destaque no funk se lança no rap ao lado de WC-Nobeat"    ,"Sain","Filho de lenda, lenda é!"     ,"Da punch line para batida mesclada"   ,"Os novos nomes da velha guarda carregando o peso de sua história"      ,"1","2","3","4");
$indie_en = array("The new old school"    ,"Meet the references of the new generation of rap"      ,"DK - 47","Consecrated in rap by the ADL group, it makes front line for Favela Vive"    ,"Rebecca","Featured in the funk is released on rap next to WC-Nobeat","Sain","Son of a legend, legend!"     ,"From the punch line to the mixed beat","The new names of the old guard carrying the weight of their story"     ,"1","2","3","4");
$indie_es = array("La nueva vieja guardia","Conozca las referencias de la nueva generación del rap","DK - 47","Consagrado en el rap por el grupo ADL, hace línea de frente para Favela Vive","Rebecca","En el funk se lanza al rap al lado de WC-Nobeat"          ,"Sain","¡Hijo de leyenda, leyenda es!","De la punch line para batir mezclada" ,"Los nuevos nombres de la vieja guardia cargando el peso de su historia","1","2","3","4");
$indie = array('PT' => $indie_pt, 'EN' => $indie_en, 'ES' => $indie_es);
?>

<!-- PHP para adicionar o titulo da página -->
<?php $titlePagina = array('PT' => "Indie | Origem", 'EN' => "Indie | Origin", 'ES' => "Indie | Fuente"); ?>

<!-- PHP para verificar qual o idioma do html -->
<?php include('../imports/idioma.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo $lang?>">

<!-- Importando o head da página -->
<?php include('../imports/head.php'); ?>

<body>

  <!-- Menu -->
  <?php include('../imports/menu-secundario.php'); ?>

  <!-- Conteúdo da Página -->
  <main id="content">

    <!-- Imagem wide -->
    <section class="container my-5">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <img tabindex="0" class="rounded img-fluid shadow" src="../images/indie/karol.jpg"
            alt="Foto da cantora Karol Conka fantasiada no fund azul.">
        </div>
      </div>
    </section>

    <!-- Contéudo Principal - Título / Suntítulo / Texto -->
    <article class="container">
      <section class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" id="indieorigem">
          <h1 tabindex="0" class="display-9 mb-0"> <?php echo $indie[$ID][0]; ?> </h1>
          <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][1]; ?></small>
          </blockquote>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in mollis mi.
            Aenean nec consectetur nisl, et dictum sapien. Sed sed nisi quis augue rhoncus hendrerit. Sed quis tortor ac
            nunc elementum lacinia eget at orci. Duis id lectus ut arcu tincidunt efficitur. Duis quis erat ultricies,
            consequat nisi eget, porta augue. Duis placerat a ligula nec convallis. Sed mollis consequat ipsum eget
            sagittis. Vivamus ut est magna. Phasellus tincidunt leo rutrum, porta urna ac, consectetur dui. Phasellus
            elit augue, vulputate ut fringilla a, tempus nec nulla. Vivamus id laoreet eros. Fusce ultricies justo in
            volutpat ultrices. Etiam enim dui, rhoncus et vehicula nec, maximus ut odio. Ut malesuada nulla velit, at
            consectetur massa faucibus et.</p>
        </div>
      </section>
    </article>

    <!-- Imagem 1:1 -->
    <section class="container mt-5 mb-4">
      <div class="card">
        <div class="card-img-overlay">
          <h5 class="card-title"><a href="https://www.instagram.com/adl_dk/" target="_blank"
              class="text-white"><u><?php echo $indie[$ID][2]; ?></u></a></h5>
          <p class="card-text text-white"><?php echo $indie[$ID][3]; ?></p>
        </div>
        <img class="card-img shadow" src="../images/indie/dk.jpg"
          alt="Foto do cantor DK 47 de boné vermelho e camiseta preta, ao fundo um muro cheio de folhas.">
      </div>
    </section>

    <!-- Segunda e Terceica Imagens / 1:1 -->

    <section class="container mb-5">
      <div class="row">
        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/mcrebecca/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][4]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][5]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/rebecca.jpg"
            alt="Foto da cantora Rebecca de costas usando uma roupa preta e branca.">
        </div>

        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/sainktt/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][6]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][7]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/sain.jpg"
            alt="Foto do cantor Sain fazend careta em preto e branco.">
        </div>
      </div>
    </section>

    <!--  3x - Título / Sub. / Texto / Imagem / Texto -->
    <section class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" id="indieorigem">
          <h2 tabindex="0" class="display-9 mb-0"> <?php echo $indie[$ID][8]; ?> </h1>
            <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][9]; ?></small>
            </blockquote>
        </div>
      </div>

      <div class="row text-justify">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor.
            Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam
            lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor,
            imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque
            accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et
            pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor.
            Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam
            lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor,
            imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque
            accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et
            pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor.
            Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam
            lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor,
            imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque
            accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et
            pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
        </div>
      </div>
    </section>

  </main>

  <!-- FOOTER -->
  <?php include('../imports/footer-secundario.php'); ?>

</body>

</html>
