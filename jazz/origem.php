<?php
//matrix com os idiomas utilizados na pagina usar $ID para os Vetores EX: <?php echo $jazz[$ID][2]>
$jazz_pt = array("JAZZ");
$jazz_en = array("JAZZ");
$jazz_es = array("JAZZ");
$jazz = array('PT' => $jazz_pt, 'EN' => $jazz_en, 'ES' => $jazz_es);

//tag<title>  Titulo das paginas;
$titlePagina = array('PT' => "Jazz | Origem", 'EN' => "Jazz | Origin", 'ES' => "Jazz | Fuente");

?>
<?php
//PHP para verificar qual o idioma do html
include('../imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<?php
//importando o head da pagina
include('../imports/head.php');
?>

<body id="body-jazz-origem">
  <!-- menu da pagina -->
  <?php
  //importando o menu da pagina 
  include('../imports/menu-secundario.php');
  ?>
  <!-- Conteudo da pagina  -->
  <main id="content" class="font-jazz">
    <article>
      <div class="container body-origem-jazz mt-5">
        <div class="row">
          <div class="col box-texto-1">
            <h1 class="jazz-h1 mb-3" tabindex="0">História do Jazz</h1>
            <p>A história do estilo musical começa desde a época da escravidão negra nos Estados Unidos. Naquela época, os
              escravos festejavam diversas cerimônias com seus cantos e tambores. Alguns desses festejos eram religiosos.</p>
            <p>Quando o tráfico de escravos começou, vieram muitos africanos do oeste da África, que trouxeram suas fortes
              manifestações culturais.</p>
            <p>Os africanos tinham muitas tradições ao som de tambores, tradições tribais e religiosas.
              Na época da escravatura a maioria dos donos dos escravos incentivavam os negros a cantarem e dançarem,
              pois achavam que essa atividade os deixava mais animados e em forma, mas é claro que nem todos os donos gostavam
              dessa manifestação cultura, principalmente por causa do uso do tambor.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-5 box-img">
            <figure>
              <img class="img-box-jazz" src="../images/jazz/posteres-poster-do-jazz-com-saxofone-contrabaixo-piano-e-trompete.jpg" alt="">
              <figcaption>Imagem da internet..</figcaption>
            </figure>
          </div>
          <div class="col-12 col-md-6  col-lg-7 box-texto">
            <h2 tabindex="0">O início do jazz</h2>
            <p> O jazz é um encontro de ritmos e tradições. Com a manifestação musical dos africanos e a influência da música
              europeia, foram surgindo alguns estilos musicais que deram origem ao jazz: o ragtime, blues e spirituals.</p>
            <p>O Spiritual era uma música de manifestação essencialmente religiosa, de natureza sobretudo vocal que se perpetuavam oralmente.
              O Jazz então foi formado pela junção de diversos elementos do Ragtime, Spiritual e Blues.</p>
          </div>
        </div>
        <div class="row">
          <div class="col box-texto">
            <h2 tabindex="0">New Orleans e o Jazz</h2>
            <p>New Orleans é a cidade que viu o Jazz surgir. Uma cidade do estado de Louisiana que habitava negros africanos, americanos,
              brancos, asiáticos e outros. Uma mistura perfeita para ver o surgimento de uma manifestação artística como o Jazz.</p>
            <p>Você talvez nem imaginasse, mas o novo estilo musical surgia nos bordéis da cidade de New Orleans, especificamente
              no bairro de Storyville, anos em que a prostituição não era considerada ilícita – 1897 a 1917.</p>
            <p>Os ritmos que formavam o novo estilo musical eram ouvidos nos pequenos bares de Storyvilles, os honk tonks,
              como eram chamados e viram o novo estilo musical se formar, sendo palco para uma nova expressão artística.</p>
            <p>Em New Orleans o Jazz se formou e se expandiu e o que contribuiu muito para isso foi justamente a sua essência livre.
              Mas algumas cidades do sul também foram importantes contribuições para a formação e expansão do jazz,
              tais quais Baltimore, Memphis, St Louis e outras.</p>
            <figure>
              <img class="shadow-sm mx-auto img-fluid" src="../images/jazz/Eagle_Band_1916_New_Orleans.jpg" alt="">
              <figcaption>Eagle Band 1916 - New Orleans</figcaption>
            </figure>
          </div>
        </div>
        <div class="row">
          <div class="col box-texto">
            <h2 tabindex="0">A popularização do Jazz</h2>
            <p>Com o passar do tempo a popularização do Jazz foi inevitável, a partir do início do século XX surgiam as primeiras
              bandas que tinham uma formação composta de trombone, contrabaixo, piano, corneta, clarineta.</p>
            <p>Uma banda em particular foi a responsável por propagar a nomenclatura “jazz” e tornar o estilo mais conhecido,
              essa banda era a “Original Dixieland Jass Band”.</p>
            <p>A partir dos anos de 1910 os brancos ouviam e tocavam jazz, mas somente a partir de 1920 que a manifestação
              artística passou a ser fazer parte da cultura branca. </p>
            <p>Uma dos grandes motivos para a popularização do jazz foi quando os americanos brancos passaram a se interessar
              por shows, teatro e cinema. Isso aconteceu logo após a Primeira Guerra Mundial. Nesse cenário, ouve uma forte
              emigração dos negros para grandes cidades, como Nova Iorque e isso difundiu o Jazz mais do que nunca.</p>
            <p>A popularização do Jazz, a partir de 1920 alcançou patamares internacionais. As orquestras viajam por aqui pela
              América do Sul e pela Europa e a música passa a ser conhecida mundialmente.</p>
            <p>A partir dos anos 20, com a indústria de discos se desenvolvendo cada vez mais, essa manifestação artística
              não parou de crescer e hoje é um dos estilos mais consagrados da história, com diversas expressões, artistas
              renomados e muitos seguidores.</p>
            <p><small>Fonte: Site Uppermaag disponivel no <a tabindex="-1" aria-label="Link para o site" href="https://www.uppermag.com/conheca-o-jazz-origem-historia-principais-artistas-e-expressoes-do-estilo-musical/#" target="_blank">link</a></small></p>

          </div>
        </div>
      </div>
    </article>
  </main>
  <!-- footer da pagina -->
  <?php
  //importando o footer da pagina 
  include('../imports/footer-secundario.php');
  ?>
</body>

</html>
