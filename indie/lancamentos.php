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
          <p class="text-justify mt-3 mb-4">preparados para problemas, mas os tiros se perderam na algazarra.
            Gigantescos anúncios luminosos espalhados pela praça propagandeavam as maravilhas das maiores marcas de
            computadores e robôs, de bancos apoiados por exércitos mercenários e da vida nas colônias espaciais.
            Mulheres seminuas em imensas imagens eletrônicas se contorciam de forma sensual, aparentemente excitadas por
            um par de tênis sendo anunciado. Um dirigível sobrevoou a praça, também exibindo anúncios animados em sua
            superfície, fazendo propaganda ao mesmo tempo em que despejava seu holofote na multidão abaixo. </p>
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
          <p class="mb-3">Ozob se cobriu de novo com a touca e o sobretudo. Não podia arriscar ser reconhecido. Então
            notou uma movimentação diferente. A poucas dezenas de metros, dois carros pararam. As pessoas começaram a
            abrir um círculo, empurrando-se para trás. Algo mecânico começou a ser montado com rapidez no meio do espaço
            vazio. Então os imensos luminosos da Times Square se apagaram. Um segundo depois, acenderam-se de novo,
            mostrando a imagem de um rapaz com camiseta rasgada e jeans puído, de pé sobre um grande amplificador
            sonoro. Ele usava um topete desgrenhado e tinha uma guitarra pendurada nos ombros. Atrás dele, um baterista.
            A </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="mb-3">seu lado, uma mulher de aparência selvagem, que parecia ser sua guarda-costas. Ozob tentou
            olhar para o círculo vazio, por sobre as cabeças das centenas de pessoas. É claro que a cena retratada nos
            anúncios eletrônicos era o que se passava ali, em tempo real, no espaço no meio da multidão. Então a Times
            Square foi tomada por um som ensurdecedor, quando o amplificador explodiu em decibéis. O homem com a
            guitarra deu um acorde e gritou: — Um, dois, três, quatro! A música começou, alta e agressiva. Os ouvidos de
            Ozob foram invadidos pela guitarra suja, beirando o desafinado. A bateria rápida marcava um ritmo intenso.
            No fundo, uma linha </p>
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
          <p class="mt-3 ">de baixo simples e ligeira — mas nenhum baixista era visível, então ele raciocinou que
            deveria ser uma inteligência artificial rudimentar, programada para acompanhar os dois músicos. O
            guitarrista também cantava. Era uma voz grave, nasalada, quase engraçada. Mas plena de revolta. Falando de
            desespero, falta de oportunidades, necessidade de diversão pura e simples. A Times Square tremeu com o
            volume, e as pessoas responderam. Os mais jovens imediatamente começaram a pular e se jogar uns contra os
            outros. Como se aquilo estivesse combinado, como se eles apenas soubessem o que fazer. Pessoas mais velhas
            ou apenas </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="mt-3">sensíveis pareceram hipnotizadas pela melodia. Era simples, raivosa. Não era apenas barulho,
            estranhamente convidava a dançar e acompanhar a letra. Ozob notou que sorria e abriu caminho com os
            cotovelos para mais perto do show improvisado. Em pouco mais de dois minutos, a primeira música acabou, tão
            súbita como tinha começado. — Eu sou Johnny Molotov — apresentou-se o guitarrista e vocalista. — E esta
            próxima se chama A boneca das emoções. Desta vez o baterista marcou o tempo: — Um, dois, três, quatro! A
            Times Square explodiu de novo em movimento frenético quando a multidão começou a dançar. Alguns tiravam
            fotos dos </p>
        </div>
      </div>
    </section>

    <!-- Direitos Autorais -->
    <?php include('texto.php'); ?>

  </main>

  <!-- FOOTER -->
  <?php include('../imports/footer-secundario.php'); ?>

</body>

</html>
