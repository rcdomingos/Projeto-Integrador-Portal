<?php

if (!isset($_GET['noticia'])) {
  $NTC  = "1";
} else {
  $NTC = $_GET['noticia'];
}
// $NTC = $_GET['noticia'];
// $NTC = 2;

//ordem para cada noticia vetor ("TITULO", "SUBTITULO", "LINK DA IMAGEM", "ALT DA IMAGEM");
//Noticias em Portugues
$noticia1_pt = array("Ariana Grande anuncia datas da <em>Sweetener World Tour</em> e por enquanto nada de Brasil", "Depois de todos os traumas que passou nos últimos meses, parece que Ariana Grande já está preparada para voltar a trabalhar.", "images/noticias/sweetener-tour.jpg", "Na Imagem,a foto esta de ponta cabeça, ariana grande está olhando serio para cima do seu lado esta escrito a frase Sweetener World Tour");
$noticia2_pt = array("Allie X Está Melancólica E Pop Na Faixa Inédita 'Tongue Tied'", "Depois de relançar o álbum <em>CollXtion I</em> com a inédita <em>Never Enough</em>, Alexandra Hughes (melhor conhecida como Allie X) prepara novidades para os fãs neste ano.", "images/noticias/alliex.jpg", "na imagem a cantora Allie X usando óculos de sol está olhando para a frente com a mão na boca");
$noticia3_pt = array("Arctic Monkeys anuncia show no Rio; banda é headliner do Lollapalooza 2019", "A banda britânica volta ao Brasil depois de cinco anos com a turnê do mais recente álbum", "images/noticias/arcticmonkeys.jpg", "LINK DA IMAGEM3", "ALT DA IMAGEM");
$noticia4_pt = array("Virada Cultural 2019 terá show de Anitta e mais 70 apresentações com tradução em Libras", "'É uma forma dos surdos também pertencerem ao espaço público', diz o intérprete Ricieri Palha, que promete dançar junto.", "images/noticias/viradaCultural.jpeg", "ALT DA IMAGEM");
$noticia5_pt = array("Daniel Realiza sonho de família em Ibiúna", "Daniel visita familia para atender desejo de garoto que queria cantar", "images/principal/home-1.jpg", "Na imagem uma mulher tira foto junto de sua família com o cantor Daniel. Todos estão sorrindo.", "Um sonho que começou na infância e que até parecia impossível, foi realizado. O jovem de Ibiuna, 16 anos, escreveu para o nosso site e em sua carta contou seu sonho de conhecer e cantar com o cantor Daniel. O que despertou a curiosidade da direção do portal e que não perdeu tempo e foi em busca de realizar o sonho do jovem. Tudo começou a pouco mais de um mês quando em contato com a produção do cantor, contando a história, recebemos a notícia que a mesma poderia assistir o show do cantor no Ibiuna, com direito a conhecê-lo pessoalmente no camarim. Para o jovem e sua família a notícia foi recebida com muita alegria. E lá se foram os dias na espera pelo dia do show, que aconteceu na última sexta em Ibiuna e o Ecletic music através do seu diretor proporcionou todos os trâmites para que desse tudo certo. Acompanhado de sua familia, o jovem  foi ao encontro do seu ídolo, no Arcádia Apipucos. O jovem não só assistiu ao show como também teve oportunidade de conhece-lo, conversar e receber presentes. Toda ação teve parceiros que se empenharam para a realização deste sonho, em nome do Ecletic Music, agradecemos à produção do cantor Daniel e ao parceiro Juninho Gouveia por proporcionar o translado até Ibiuna.", "Um sonho que começou na infância e que até parecia impossível, foi realizado. O jovem de Ibiuna, 16 anos, escreveu para o nosso site e em sua carta contou seu sonho de conhecer e cantar com o cantor Daniel. O que despertou a curiosidade da direção do portal e que não perdeu tempo e foi em busca de realizar o sonho do jovem. Tudo começou a pouco mais de um mês quando em contato com a produção do cantor, contando a história, recebemos a notícia que a mesma poderia assistir o show do cantor no Ibiuna, com direito a conhecê-lo pessoalmente no camarim. Para o jovem e sua família a notícia foi recebida com muita alegria. E lá se foram os dias na espera pelo dia do show, que aconteceu na última sexta em Ibiuna e o Ecletic music através do seu diretor proporcionou todos os trâmites para que desse tudo certo. Acompanhado de sua familia, o jovem  foi ao encontro do seu ídolo, no Arcádia Apipucos. O jovem não só assistiu ao show como também teve oportunidade de conhece-lo, conversar e receber presentes. Toda ação teve parceiros que se empenharam para a realização deste sonho, em nome do Ecletic Music, agradecemos à produção do cantor Daniel e ao parceiro Juninho Gouveia por proporcionar o translado até Ibiuna.", "https://amarajinoticia.com.br/2015/06/amaraji-noticia-realiza-sonho-e-leva-fa-para-conhecer-o-cantor-daniel/");
$noticia6_pt = array("KATY PERRY JÁ ESTÁ PLANEJANDO SEU PRÓXIMO ÁLBUM", "Não chame de retorno, mas estaria Katy Perry preparando um… retorno?", "images/principal/katyperry.jpg", "Na imagem a cantora Katy Perry se encontra séria. Ao fundo da imagem encontra-se uma parede branca com propagandas.", "Katy Perry revelou hoje, 29, o trailer de seu novo single, Never Really Over, que tem lançamento previsto para sexta-feira, dia 31. Confira a prévia acima. O último álbum de Katy Perry, Witness (leia nossa crítica), foi lançado em junho de 2017. Recentemente a cantora divulgou o remix de Con Calma com Daddy Yankee e Snow e a colaboração com Zedd 365. A nova canção vem poucos meses após Katy Perry anunciar que poderia dar uma pausa carreira. À época, a cantora disse estar satisfeita com o caminho que trilhou e que sentia já ter feito o suficiente, não tendo que “provar mais nada” e merecendo férias dos holofotes. Bem, isso não aconteceu e, ao que tudo indica, teremos notícias do sucessor de Witness (2017) muito em breve.", "Pela primeira vez em anos, Katy Perry emplaca duas músicas ao mesmo tempo entre as mais tocadas nas rádios pop. Em um passado não muito distante, era normal que Katy Perry emplacasse dois hits ao mesmo tempo nas rádios. Com um período de baixa na carreira, isso ficou mais difícil. O cenário atual, no entanto, é de virada para ela. Seus últimos lançamentos estão fazendo muito sucesso e seu nome aparece duas vezes na lista das 20 mais tocadas nas rádios pop nos Estados Unidos. Em 17º está Con Calma, sua participação com Daddy Yankee. Sem Katy, a música já era um sucesso latino, mas os vocais da cantora impulsionaram nos Estados Unidos. Já em 20º lugar, apesar de ter sido lançado há poucos, dias, está “Never Really Over”, seu mais recente single solo. A música já começou tendo grande audiência e apoio das rádios.", "https://www.omelete.com.br/musica/katy-perry-lanca-trailer-de-novo-single-never-really-over-confira");
$noticia7_pt = array("The Strokes dá sua primeira entrevista em dez anos", "Integrantes conversaram sobre novidades da banda, Brasil e Internet", "images/principal/home-3.jpg", "Na imagem está o logo da banda The Strokes. O logo contém um círculo e o nome da banda dentro.", "O The Strokes divulgou hoje, 30, vídeo com sua primeira entrevista em dez anos. Depois de disponibilizar seu mais novo trabalho, o EP Future, Present, Past, todos os membros da banda, Julian Casablancas, Albert Hammond Jr, Nick Valensi, Nikolai Fraiture e Fabrizio Moretti conversaram sobre temas como comentários no Youtube, Zika Vírus, David Bowie e Internet - veja abaixo. Há algum tempo se fala sobre os rumores de um possível novo álbum dos Strokes. Em abril do ano passado, ele voltou a afirmar que a banda estava compondo novamente, e o grupo chegou a ser fotografado em estúdio, em dezembro. Em janeiro, porém, o guitarrista Albert Hammond Jr - atração do Lollapalooza Brasil 2016 - disse que não há planos de lançar novas músicas. O último álbum do grupo foi Comedown Machine , de 2013. O vocalista Julian Casablancas foi uma das atrações do Lollapalooza 2014 - leia a crítica.", "The Strokes. De início, tudo o que você precisa saber é o nome desse quinteto de garotos de Nova York, todos com idade entre 20 e 22 anos. Nova sensação do rock, “novo Nirvana”, “next big thing”, a salvação da lavoura? É cedo para afirmar, mas há muito tempo a cena roqueira não ficava tão excitada com um grupo novo como agora, com Strokes. E, se for levado em conta que é a banda iniciante mais comentada no corredor Nova York-Londres em anos, citada por roqueiros veteranos em entrevista, com shows cuja platéia é recheada de “notáveis” do pop… Tudo isso é para uma bandinha que tem apenas um (1!!!) single (três músicas) e dez (10!!!) propostas de gravadoras americanas para o primeiro álbum. O tal único single da banda, o espetacular “The Modern Age”, lançado só no Reino Unido, já tem uma modesta aparição em lojas de importados de SP. Canções da banda também começam a ser ouvidas nas pistas de clubes de música independente. A intersecção Brasil-Strokes vai além. A Folha descobriu que o baterista do grupo é… brasileiro. Fabrizio Moretti, 21, que está na entrevista ao lado, é carioca, pai italiano/mãe brasileira, mas vive em NY desde os quatro. O Strokes, além de Moretti, tem Julian Casablancas (vocal), Nick Valensi e Albert Hammond Jr. (guitarras) e Nikolai Fraiture (baixo). E a imprensa musical, inglesa ou americana, não sabe o que fazer com essa banda que nem um álbum cheio tem, nem gravadora nos EUA tem, nem um esquema mínimo de marketing tem.", "https://www.omelete.com.br/musica/the-strokes-da-sua-primeira-entrevista-em-dez-anos-veja");
$noticia8_pt = array("Gusttavo Lima e o sucesso do Momento", "Gusttavo Lima lança single que fará parte de seu novo álbum", "images/noticias/Gustavo-Lima.jpg", "Foto de fulano de tal");
$noticia9_pt = array("Espetáculo sobre Beethoven mistura pianista com música eletrônica", "Produção da Companhia Duplô contará com treze intérpretes no papel do compositor alemão", "images/noticias/teatro.jpg", "Foto de fulano de tal");


//Noticias em ingles
$noticia1_en = array("Ariana Grande announces dates of the <em> Sweetener World Tour </ em> and for the time being nothing from Brazil", "After all the traumas that have passed in recent months, it seems that Ariana Grande is already prepared to return to work.", "images/noticias/sweetener-tour.jpg", "In the Image, the photo is upside-down, big Aryan is looking serious on his side is written the phrase Sweetener World Tour");
$noticia2_en = array("Allie X Is Melancholy And Pop In The Unreleased Band 'Tongue Tied'", "After re-releasing the album <em> CollXtion I </ em> with the never-ending <em> Never Enough </ em>, Alexandra Hughes Allie X) prepares news for fans this year.",  "images/noticias/sweetener-tour.jpg", "in the image the singer Allie X wearing sunglasses is looking forward with her hand in her mouth ");
$noticia3_en = array("Arctic Monkeys announces show in Rio; band is headliner of Lollapalooza 2019", "The British band returns to Brazil after five years with the tour of the most recent album", "images/noticias/arcticmonkeys.jpg",  "LINK DA IMAGEM3");
$noticia4_en = array("Virada Cultural 2019 will have Anitta show and more 70 presentations with translation in Pounds", "'It's a way for the deaf to belong to the public space as well,' says the interpreter Ricieri Palha, who promises to dance together.", "images/noticias/viradaCultural.jpeg", "LINK DA IMAGEM4");
$noticia5_en = array("TITLE4", "SUBTITLEO4", "LINK DA IMAGEM4");
$noticia6_en = array("TITLE4", "SUBTITLEO4", "LINK DA IMAGEM4");
$noticia7_en = array("TITLE4", "SUBTITLEO4", "LINK DA IMAGEM4");
$noticia8_en = array("Gusttavo Lima and the success of Moment", "Gusttavo Lima releases single that will be part of his new album", "images/noticias/Gustavo-Lima.jpg", "Photo of so-and-so");
$noticia9_en = array("Show about Beethoven mixes pianist with electronic music", "Production of the Duplô Company will feature thirteen interpreters in the role of the German composer", "images/noticias/teatro.jpg", "Photo of so-and-so");

//Noticias em espanhol
$noticia1_es = array("Ariana Grande anuncia fechas de la <em> Sweetener World Tour</em> y por ahora nada de Brasil", "Después de todos los traumas que ha pasado en los últimos meses, parece que Ariana Grande ya está preparada para volver a trabajar.", "images/noticias/sweetener-tour.jpg", "En la imagen, la foto esta de punta cabeza, aria grande está mirando serio hacia arriba de su lado esta escrito la frase Sweetener World Tour");
$noticia2_es = array("Allie X está melancólica y pop en la banda 'Tongue Tied'", "Después de relanzar el álbum <en> CollXtion I </ em> con la inédita <em> Never Enough </ em>, Alexandra Hughes (mejor conocida como Allie X) prepara las novedades para los fans este año.",  "images/noticias/sweetener-tour.jpg", " en la imagen la cantante Allie X con gafas de sol está mirando adelante con la mano en la boca");
$noticia3_es = array("Arctic Monkeys anuncia show en Río; La banda es headliner del Lollapalooza 2019", "La banda británica regresa a Brasil después de cinco años con la gira del último álbum", "images/noticias/arcticmonkeys.jpg", "LINK DA IMAGEM3");
$noticia4_es = array("Virada Cultural 2019 Anitta mostrar y más de 70 presentaciones con Libras traducción", "'Es una forma de los sordos también pertenecer al espacio público', dice el intérprete Ricieri Paja, que promete bailar juntos.", "images/noticias/viradaCultural.jpeg", "LINK DA IMAGEM4");
$noticia5_es = array("TITLE4", "SUBTITLEO4", "LINK DA IMAGEM4");
$noticia6_es = array("TITLE4", "SUBTITLEO4", "LINK DA IMAGEM4");
$noticia7_es = array("TITLE4", "SUBTITLEO4", "LINK DA IMAGEM4");
$noticia8_es = array("Gusttavo Lima y el éxito del Momento", "Gusttavo Lima lanza single que formará parte de su nuevo álbum", "images/noticias/Gustavo-Lima.jpg", "Foto de fulano de tal");
$noticia9_es = array("Espectáculo sobre Beethoven mezcla pianista con música electrónica", "Producción de la Compañía Duplô contará con trece intérpretes en el papel del compositor alemán", "images/noticias/teatro.jpg", "Foto de fulano de tal");

// Matriz com as noticias
$noticia_pt = array('1' => $noticia1_pt, '2' => $noticia2_pt, '3' => $noticia3_pt, '4' => $noticia4_pt, '5' => $noticia5_pt, '6' => $noticia6_pt, '7' => $noticia7_pt, '8' => $noticia8_pt, '9' => $noticia9_pt,);
$noticia_en = array('1' => $noticia1_en, '2' => $noticia2_en, '3' => $noticia3_en, '4' => $noticia4_en, '5' => $noticia5_en, '6' => $noticia6_en, '7' => $noticia7_en, '8' => $noticia8_en, '9' => $noticia9_en,);
$noticia_es = array('1' => $noticia1_es, '2' => $noticia2_es, '3' => $noticia3_es, '4' => $noticia4_es, '5' => $noticia5_es, '6' => $noticia6_es, '7' => $noticia7_es, '8' => $noticia8_es, '9' => $noticia9_es,);

// Matriz com as noticias por idioma
$noticia = array('PT' => $noticia_pt, 'EN' => $noticia_en, 'ES' => $noticia_es);
// $noticia[$ID][1][0] => posições da matriz:
// 1=idioma, 2=noticia, 3=parte da noticia

//Matriz para os textos padrão da pagina
$partesPagina_pt = array("Publicado por:", "Foto:", "Divulgação");
$partesPagina_en = array("Published by:", "Photo:", "Divulgation");
$partesPagina_es = array("Publicado por", "Foto", "Revelación");

$partesPagina = array('PT' => $partesPagina_pt, 'EN' => $partesPagina_en, 'ES' => $partesPagina_es);

?>
<?php
//Pagina
//PHP para verificar qual o idioma do html
include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<?php
//importando o head da pagina
include('imports/head.php');
?>

<body>
  <!--NAV-->
  <?php
  include('imports/menu.php');
  ?>
  <!--NAV ENDS-->

  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <article id="content">
          <!-- cabeçalho da noticia -->
          <header class="text-center">
            <h1 tabindex="0" class="display-5 text-uppercase"><?php echo $noticia[$ID][$NTC][0] ?></h1>
            <p class="lead"><?php echo $noticia[$ID][$NTC][1] ?></p>
          </header>
          <!-- Imagem da noticia -->
          <img class="mx-auto d-block img-fluid shadow-sm mb-3" src="<?php echo $noticia[$ID][$NTC][2] ?>" alt="<?php echo $noticia[$ID][$NTC][2] ?>">
          <!-- Informações da noticia -->
          <p class="text-muted"><small><i class="fas fa-history"></i> 10/04/2019 | 19h25m - <strong><?php echo $partesPagina[$ID][0] ?></strong> Karina Lucindo | <strong><?php echo $partesPagina[$ID][1] ?></strong> <?php echo $partesPagina[$ID][2] ?> </small> </p>

          <p><?php echo $noticia[$ID][$NTC][4]?></p>
          <p><?php echo $noticia[$ID][$NTC][5]?></p>
          <p class="text-right"><small><a href="<?php echo $noticia[$ID][$NTC][6]?>">> Fonte da Noticía <</a></small></p>
          
          
        </article>
        <!-- botões para compartilhar -->
        <div>
          <!-- facebook -->
          <div class="fb-share-button" data-href="<?php echo $url ?>" data-layout="button_count"></div>
          <!-- twitter -->
          <div class="mt-1">
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-show-count="false">Tweet</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--FOOTER-->
  <?php
  include('imports/footer.php');
  ?>

  <?php
  //alterar o idioma do botão do compartilhar
  if ($lang == "pt-BR") {
    $urlface = "https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2";
  } else if ($lang == "es-ES") {
    $urlface = "https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2";
  } else {
    $urlface = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2";
  }
  ?>
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "<?php echo $urlface ?>";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <!-- Script do Twwiter -->
  <script async src="https://platform.twitter.com/widgets.js"></script>
</body>

</html>
