<?php
$indie_pt = array("Mundo Indie","Tudo que você precisa saber em um só lugar"  ,"Criolo","Conheça o novo álbum Espiral de Ilusão" ,"Emicida","10 anos de Triunfo!" ,"Flora Matos","O legado do Pretin"  ,"Artista do Ano"    ,'Conheça Djonga a mais nova revelação do rap br',"1","2","3","4");
$indie_en = array("Indie World","All you need to know in one place"           ,"Criolo","Meet the new album Espiral de Ilusão"   ,"Emicida","10 years of Triunfo!","Flora Matos","The legacy of Pretin","Artist of the Year",'Meet Djonga the newest revelation of rap br'   ,"1","2","3","4");
$indie_es = array("Mondo Indie","Todo lo que necesitas saber en un solo lugar","Criolo","Conoce el nuevo álbum Espiral de Ilusão","Emicida","10 años de Triunfo!" ,"Flora Matos","El legado del Pretin","Artista del Año"   ,'Conoce a la nueva revelación de rap br'        ,"1","2","3","4");
$indie = array('PT' => $indie_pt, 'EN' => $indie_en, 'ES' => $indie_es);
?>

<!-- PHP para adicionar o titulo da página -->
<?php $titlePagina = array('PT' => "Indie | Pagina inicial", 'EN' => "Indie | Home", 'ES' => "Indie | Pagina principal"); ?>

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

    <!-- Contéudo Principal - Título / Suntítulo / Texto -->
    <article class="container my-5 my-md-5 my-lg-5 my-xl-5">
      <section class="row text-center">
        <div class="col-lg-12">
          <h1 tabindex="0" class="display-9 mb-0"> <?php echo $indie[$ID][0]; ?> </h1>
          <blockquote class="blockquote mt-0 mb-3"><small class="text-muted"><?php echo $indie[$ID][1]; ?></small>
          </blockquote>
        </div>
      </section>

      <section class="row text-justify">
        <div class="col-lg-12">
          <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor.
            Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam
            lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor,
            imperdiet quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque
            accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et
            pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus .</p>
        </div>
      </section>
    </article>

    <!-- Primeira Imagem - Wide -->
    <section class="container">
      <div class="row p-3">
        <div class="card text-white p-0">
          <div class="card-img-overlay">
            <h5 class="card-title"><a href="https://www.instagram.com/criolomc/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][2]; ?></u></a></h5>
            <p class="card-text"><?php echo $indie[$ID][3]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/criolo.jpg"
            alt="Foto do busto do cantor Criolo usando um moletom camuflado com o capus cobrindo a cabeça olhando para frente ao fundo a cor amarela.">
        </div>
      </div>
    </section>

    <!-- Segunda e Terceica Imagens / 1:1 -->

    <section class="container mt-4 mt-md-4 mt-lg-4 mt-xl-4 mb-5">
      <div class="row">
        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/emicida/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][4]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][5]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/emicida.jpg"
            alt="Foto do cantor Emicida de óculos escuro camiseta preta e boné coçando a barba ao fundo a cor vermelha.">
        </div>

        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/floramatos/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][6]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][7]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/flora.jpg"
            alt="Foto da cantora Flora Matos agachada usando uma blusa branca e rosa cheia de anéis e pulseiras segurando o queixo com a mão direita ao fundo a cor rosa.">
        </div>
      </div>
    </section>

    <!-- Segundo texto - Título / Sub. / Texto / Imagem 1:1 / Texto -->
    <section class="container mb-5">
      <section class="row text-center mb-3">
        <div class="col-lg-12">
          <h2 tabindex="0" class="display-9 mb-0"> <?php echo $indie[$ID][8]; ?> </h2>
          <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][9]; ?></small>
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

      <section class="row mt-3 mb-0">
        <div class="col-12">
          <div class="card text-white">
            <img class="card-img shadow" src="../images/indie/djonga.jpg"
              alt="Foto do cantor Djonga no video clip da música Favela Vive 3 vestido com um moletom e uma camiseta branca com o cabelo descolorido fazendo um sinal de ok com a mão esquera enquanto canta.">
          </div>
        </div>
      </section>

      <div class="row mt-0 mb-3">
        <div class="col-12">
          <a href="https://www.instagram.com/djongador/" target="_blank" class="text-body"><u>Mais sobre o
              cantor.</u></a>
        </div>
      </div>

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
    </section>

  </main>

  <!-- FOOTER -->
  <?php include('../imports/footer-secundario.php'); ?>

</body>

</html>