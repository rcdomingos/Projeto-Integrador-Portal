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
          <p class="text-justify">Se esconder para a aglomeração da Times Square. Era um dos poucos pontos da Cidade
            Baixa ainda reconhecível como a Nova York dos séculos anteriores. A praça estava permanentemente cheia, a
            aglomeração era como uma boate com entrada barata. Há décadas as divisões entre calçadas e ruas haviam sido
            descartadas. Carros antigos e novos disputavam espaço com pedestres se empurrando, viciados jogados pelo
            chão, mendigos fazendo malabarismos na esperança de ganhar uns trocados, casais em uma rápida transa
            furtiva. Os prédios decadentes e dilapidados haviam se transformado em territórios de gangues e repúblicas
            de imigrantes ilegais vindos de todos os cantos da Terra e além. </p>
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
          <p class="mb-3">As lojas e os restaurantes continuavam resistindo, pois as corporações podiam tolerar qualquer
            coisa, exceto uma queda nos lucros. Ozob passou pela fortaleza que era a franquia de uma famosa lanchonete.
            O símbolo de arcadas amarelas era protegido por ninhos de metralhadoras. Atrás de grades fortificadas,
            atendentes com armaduras listradas de vermelho e branco sorriam com armas na mão, oferecendo aumentar o
            tamanho de um lanche gorduroso por apenas mais cento e cinquenta dólares. Os habitantes da Cidade Baixa
            tinham desejos, mas não tinham </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p class="mb-3">dinheiro, e as franquias da Times Square se prontificavam para satisfazer suas vontades ao
            mesmo tempo em que os ameaçavam caso tentassem tomar os produtos à força. Correndo pela multidão, tentando
            localizar os reguladores por sobre o ombro, Ozob esbarrou na grande estátua plástica do palhaço que era
            símbolo da cadeia de lanchonetes. A agressão foi detectada e dois aten- dentes sorridentes e fortemente
            armados deixaram a franquia-fortaleza, gritando: — Posso ajudá-lo? E — Fique longe, por gentileza, filho da
            puta! Ozob estava vestindo um </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p class="mb-5">sobretudo de tecido sintético, escondia a cabeça com uma touca negra. Abriu a vestimenta e
            mostrou o rosto, num sorriso furioso. Lado a lado com o totem corporativo do palhaço, foi uma visão macabra,
            e os dois atendentes perderam seus sorrisos. — Estou tendo um dia de merda — disse Ozob. — Mas o de vocês
            vai ser ainda pior. Abriu o sobretudo e mostrou o colete que usava. Cheio de explosivos. Os dois atendentes
            deram tiros de advertência para cima e correram de volta à segurança da franquia-fortaleza. Os funcionários
            das lojas à volta se armaram, </p>
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
