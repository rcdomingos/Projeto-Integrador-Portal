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
$noticia1_pt = array("Ariana Grande anuncia datas da <em>Sweetener World Tour</em> e por enquanto nada de Brasil", "Depois de todos os traumas que passou nos últimos meses, parece que Ariana Grande já está preparada para voltar a trabalhar.", "images/noticias/sweetener-tour.jpg", "Na Imagem,a foto esta de ponta cabeça, ariana grande está olhando serio para cima do seu lado esta escrito a frase Sweetener World Tour", "Não é novidade pra ninguém que Ariana Grande tem passado por muitas coisas ruins, né? A cantora sofreu um assédio durante o velório de Aretha Franklin, precisou lidar com a morte de Mac Miller, seu ex-namorado, e agora está passando pela separação com o humorista Pete Davidson, depois de um noivado relâmpago. Mas, depois de passar um tempo afastada de tudo, a jovem já está pronta para voltar ao trabalho. Ela anunciou nesta quinta-feira (25) as datas da <em>Sweetener World Tour</em> e deixou seus fãs muito ansiosos. Mas, e o Brasil?", "A turnê começará no dia 18 de março e terminará apenas em 14 de junho. Essa é, provavelmente, apenas uma parte dos shows. Já que Ariana sempre costuma passar pela Europa, por exemplo. Tem muita gente acreditando que ela vai passar pelo Brasil e nós do Purebreak já estamos sonhando com essa possibilidade. Aliás, essa turnê promete muitas novidades, viu? Como também já sabemos, a americana esteve em estúdio trabalhando em músicas novas e elas já devem estar na <em>Sweetener World Tour</em>. Pois é, quando questionado sobre as canções do possível AG5 por uma fã, Ariana deu a entender que elas estarão na setlist.", "https://www.terra.com.br/diversao/ariana-grande-anuncia-datas-da-sweetener-world-tour-e-por-enquanto-nada-de-brasil,3fed4342d05436549f3369a23e7ea260m4u6iyry.html");
$noticia2_pt = array("Allie X Está Melancólica E Pop Na Faixa Inédita 'Tongue Tied'", "Depois de relançar o álbum <em>CollXtion I</em> com a inédita <em>Never Enough</em>, Alexandra Hughes (melhor conhecida como Allie X) prepara novidades para os fãs neste ano.", "images/noticias/alliex.jpg", "na imagem a cantora Allie X usando óculos de sol está olhando para a frente com a mão na boca", "Depois de relançar o álbum ‘CollXtion I’ com a inédita <em>Never Enough</em>, Alexandra Hughes (melhor conhecida como Allie X) prepara novidades para os fãs neste ano. Rumores apontam para a continuação do disco lançado no ano passado e a comprovação pode estar relacionada com o vazamento da inédita <em>Tongue Tied</em>.", "Esperada pelos fãs, a canção mistura o pop condensado e sintetizado da canadense com doses de experimentalismo cativante, capaz de fazer qualquer fã da música pop cair de amores. <em>Tongue Tied</em> segue a receita à risca: batidas vigorosas contemplam a base eletrônica e pesada por trás da produção – com direito a falsete, gritinhos e um refrão pegajoso.", "https://www.puth.tv/2016/01/allie-x-tongue-tied.html");
$noticia3_pt = array("Arctic Monkeys anuncia show no Rio; banda é headliner do Lollapalooza 2019", "A banda britânica volta ao Brasil depois de cinco anos com a turnê do mais recente álbum", "images/noticias/arcticmonkeys.jpg", "ALT DA IMAGEM", "Os caras do Arctic Monkeys já estão na expectativa de tocar no Brasil no ano que vem. E por conta disso, acabam de anunciar um show extra no Brasil.", "A banda é um dos grandes destaques do Lollalalooza, que rola nos dias 5, 6 e 7 de abril no Autódromo de Interlagos, em São Paulo, vai tocar ainda no Rio de Janeiro, no palco da Jeunesse Arena. A data da apresentação é 3 de abril, segundo postagem de suas redes sociais.", "https://www.radiorock.com.br/2018/11/28/headliner-lollapalooza-brasil-arctic-monkeys-anuncia-show-no-rio-de-janeiro/");
$noticia4_pt = array("Virada Cultural 2019 terá show de Anitta e mais 70 apresentações com tradução em Libras", "'É uma forma dos surdos também pertencerem ao espaço público', diz o intérprete Ricieri Palha, que promete dançar junto.", "images/noticias/viradaCultural.jpeg", "Na Imagem, pessoas estão em frente ao palco assistindo o show da virada cultural", "A Virada Cultural 2019 terá tradução em Libras - a Língua Brasileira de Sinais - em 71 espetáculos e 23 palcos. Dentre os shows, Anitta, Anavitória e Lucas Lucco terão tradução de seus shows feitos pelo intérprete Ricieri Palha, de 31 anos, que costuma inclusive dançar junto com o artista. <em>É uma outra esfera, é diferente de fazer uma tradução em uma sala de aula. A gente usa expressão corporal e dança. Dependendo do ritmo da música a gente tem de dançar mesmo. Nós fazemos os sinais enquanto o artista canta e, na parte instrumental, a gente faz a coreografia</em>, conta ele.", "Fã de Anitta, Ricieri está ansioso pelo show da cantora. <em>É muito bom poder interpretar um artista de quem sou fã. Tenho que me segurar para não ir para o meio do palco e dançar junto. Preciso ser neutro no momento da interpretação, mas aproveito para me divertir também.</em>A iniciativa de ter tradução em Libras durante a Virada Cultural 2019 é da Secretaria Municipal da Pessoa com Deficiência (SMPED), em parceria com a empresa Educalibras.", "http://www.unipaulistana.edu.br/noticias/virada-cultural-2019-tera-show-de-anitta-e-mais-70-apresentacoes-com-traducao-em-libras");
$noticia5_pt = array("Daniel Realiza sonho de família em Ibiúna", "Daniel visita familia para atender desejo de garoto que queria cantar", "images/principal/home-1.jpg", "Na imagem uma mulher tira foto junto de sua família com o cantor Daniel. Todos estão sorrindo.", "Um sonho que começou na infância e que até parecia impossível, foi realizado. O jovem de Ibiuna, 16 anos, escreveu para o nosso site e em sua carta contou seu sonho de conhecer e cantar com o cantor Daniel. O que despertou a curiosidade da direção do portal e que não perdeu tempo e foi em busca de realizar o sonho do jovem. Tudo começou a pouco mais de um mês quando em contato com a produção do cantor, contando a história, recebemos a notícia que a mesma poderia assistir o show do cantor no Ibiuna, com direito a conhecê-lo pessoalmente no camarim. Para o jovem e sua família a notícia foi recebida com muita alegria. E lá se foram os dias na espera pelo dia do show, que aconteceu na última sexta em Ibiuna e o Ecletic music através do seu diretor proporcionou todos os trâmites para que desse tudo certo. Acompanhado de sua familia, o jovem  foi ao encontro do seu ídolo, no Arcádia Apipucos. O jovem não só assistiu ao show como também teve oportunidade de conhece-lo, conversar e receber presentes. Toda ação teve parceiros que se empenharam para a realização deste sonho, em nome do Ecletic Music, agradecemos à produção do cantor Daniel e ao parceiro Juninho Gouveia por proporcionar o translado até Ibiuna.", "Um sonho que começou na infância e que até parecia impossível, foi realizado. O jovem de Ibiuna, 16 anos, escreveu para o nosso site e em sua carta contou seu sonho de conhecer e cantar com o cantor Daniel. O que despertou a curiosidade da direção do portal e que não perdeu tempo e foi em busca de realizar o sonho do jovem. Tudo começou a pouco mais de um mês quando em contato com a produção do cantor, contando a história, recebemos a notícia que a mesma poderia assistir o show do cantor no Ibiuna, com direito a conhecê-lo pessoalmente no camarim. Para o jovem e sua família a notícia foi recebida com muita alegria. E lá se foram os dias na espera pelo dia do show, que aconteceu na última sexta em Ibiuna e o Ecletic music através do seu diretor proporcionou todos os trâmites para que desse tudo certo. Acompanhado de sua familia, o jovem  foi ao encontro do seu ídolo, no Arcádia Apipucos. O jovem não só assistiu ao show como também teve oportunidade de conhece-lo, conversar e receber presentes. Toda ação teve parceiros que se empenharam para a realização deste sonho, em nome do Ecletic Music, agradecemos à produção do cantor Daniel e ao parceiro Juninho Gouveia por proporcionar o translado até Ibiuna.", "https://amarajinoticia.com.br/2015/06/amaraji-noticia-realiza-sonho-e-leva-fa-para-conhecer-o-cantor-daniel/");
$noticia6_pt = array("KATY PERRY JÁ ESTÁ PLANEJANDO SEU PRÓXIMO ÁLBUM", "Não chame de retorno, mas estaria Katy Perry preparando um… retorno?", "images/principal/katyperry.jpg", "Na imagem a cantora Katy Perry se encontra séria. Ao fundo da imagem encontra-se uma parede branca com propagandas.", "Katy Perry revelou hoje, 29, o trailer de seu novo single, Never Really Over, que tem lançamento previsto para sexta-feira, dia 31. Confira a prévia acima. O último álbum de Katy Perry, Witness (leia nossa crítica), foi lançado em junho de 2017. Recentemente a cantora divulgou o remix de Con Calma com Daddy Yankee e Snow e a colaboração com Zedd 365. A nova canção vem poucos meses após Katy Perry anunciar que poderia dar uma pausa carreira. À época, a cantora disse estar satisfeita com o caminho que trilhou e que sentia já ter feito o suficiente, não tendo que “provar mais nada” e merecendo férias dos holofotes. Bem, isso não aconteceu e, ao que tudo indica, teremos notícias do sucessor de Witness (2017) muito em breve.", "Pela primeira vez em anos, Katy Perry emplaca duas músicas ao mesmo tempo entre as mais tocadas nas rádios pop. Em um passado não muito distante, era normal que Katy Perry emplacasse dois hits ao mesmo tempo nas rádios. Com um período de baixa na carreira, isso ficou mais difícil. O cenário atual, no entanto, é de virada para ela. Seus últimos lançamentos estão fazendo muito sucesso e seu nome aparece duas vezes na lista das 20 mais tocadas nas rádios pop nos Estados Unidos. Em 17º está Con Calma, sua participação com Daddy Yankee. Sem Katy, a música já era um sucesso latino, mas os vocais da cantora impulsionaram nos Estados Unidos. Já em 20º lugar, apesar de ter sido lançado há poucos, dias, está “Never Really Over”, seu mais recente single solo. A música já começou tendo grande audiência e apoio das rádios.", "https://www.omelete.com.br/musica/katy-perry-lanca-trailer-de-novo-single-never-really-over-confira");
$noticia7_pt = array("The Strokes dá sua primeira entrevista em dez anos", "Integrantes conversaram sobre novidades da banda, Brasil e Internet", "images/principal/home-3.jpg", "Na imagem está o logo da banda The Strokes. O logo contém um círculo e o nome da banda dentro.", "O The Strokes divulgou hoje, 30, vídeo com sua primeira entrevista em dez anos. Depois de disponibilizar seu mais novo trabalho, o EP Future, Present, Past, todos os membros da banda, Julian Casablancas, Albert Hammond Jr, Nick Valensi, Nikolai Fraiture e Fabrizio Moretti conversaram sobre temas como comentários no Youtube, Zika Vírus, David Bowie e Internet - veja abaixo. Há algum tempo se fala sobre os rumores de um possível novo álbum dos Strokes. Em abril do ano passado, ele voltou a afirmar que a banda estava compondo novamente, e o grupo chegou a ser fotografado em estúdio, em dezembro. Em janeiro, porém, o guitarrista Albert Hammond Jr - atração do Lollapalooza Brasil 2016 - disse que não há planos de lançar novas músicas. O último álbum do grupo foi Comedown Machine , de 2013. O vocalista Julian Casablancas foi uma das atrações do Lollapalooza 2014 - leia a crítica.", "The Strokes. De início, tudo o que você precisa saber é o nome desse quinteto de garotos de Nova York, todos com idade entre 20 e 22 anos. Nova sensação do rock, “novo Nirvana”, “next big thing”, a salvação da lavoura? É cedo para afirmar, mas há muito tempo a cena roqueira não ficava tão excitada com um grupo novo como agora, com Strokes. E, se for levado em conta que é a banda iniciante mais comentada no corredor Nova York-Londres em anos, citada por roqueiros veteranos em entrevista, com shows cuja platéia é recheada de “notáveis” do pop… Tudo isso é para uma bandinha que tem apenas um (1!!!) single (três músicas) e dez (10!!!) propostas de gravadoras americanas para o primeiro álbum. O tal único single da banda, o espetacular “The Modern Age”, lançado só no Reino Unido, já tem uma modesta aparição em lojas de importados de SP. Canções da banda também começam a ser ouvidas nas pistas de clubes de música independente. A intersecção Brasil-Strokes vai além. A Folha descobriu que o baterista do grupo é… brasileiro. Fabrizio Moretti, 21, que está na entrevista ao lado, é carioca, pai italiano/mãe brasileira, mas vive em NY desde os quatro. O Strokes, além de Moretti, tem Julian Casablancas (vocal), Nick Valensi e Albert Hammond Jr. (guitarras) e Nikolai Fraiture (baixo). E a imprensa musical, inglesa ou americana, não sabe o que fazer com essa banda que nem um álbum cheio tem, nem gravadora nos EUA tem, nem um esquema mínimo de marketing tem.", "https://www.omelete.com.br/musica/the-strokes-da-sua-primeira-entrevista-em-dez-anos-veja");
$noticia8_pt = array("Gusttavo Lima e o sucesso do Momento", "Gusttavo Lima lança single que fará parte de seu novo álbum", "images/noticias/Gustavo-Lima.jpg", "Na imagem o cantor Gustavo Lima está sentado cantando e olhando para a plateia feliz", "Última atração a se apresentar no Festival de Verão, o sertanejo Gusttavo Lima fechou a festa com chave de ouro: levou muito romantismo e sofrência para quem esteve presente na Arena Fonte Nova, em Salvador, já na madrugada desta segunda-feira (10).", "O cantor mesclou no repertório canções que marcaram sua carreira e também algumas das 12 músicas novas inéditas que estão no mais recente DVD, intitulado O Embaixador, gravado em outubro em Barretos (SP) — o apelido de Embaixador dado a ele pelos fãs veio após ele ter recebido o primeiro título de Embaixador da Festa do Peão de Barretos, em 2017.", "https://g1.globo.com/ba/bahia/festival-de-verao/2018/noticia/2018/12/10/com-musicas-de-sucesso-da-carreira-e-cancoes-do-novo-dvd-gusttavo-lima-leva-romantismo-e-sofrencia-ao-publico-no-ultimo-show-do-fv2018.ghtml");
$noticia9_pt = array("Espetáculo sobre Beethoven mistura pianista com música eletrônica", "Produção da Companhia Duplô contará com treze intérpretes no papel do compositor alemão", "images/noticias/teatro.jpg", "Na Imagem uma mulher encontra-se olhando para um espelho se maquiando com lápis nos olhos", "A Companhia de Atores Duplô, do Rio de Janeiro, prepara um novo espetáculo sobre o músico Ludwig van Beethoven. A apresentação juntará um pianista com um dj de música eletrônica tocando canções do compositor em um galpão de lona itinerante, que tem previsão inicial de passar três meses pelo Rio de Janeiro e outros três em São Paulo.", "A diretora da companhia, Gabriela Linhares, conta que denomina a produção como um 'teatro sinestésico', em que o público consegue vivenciar a experiência sonora proposta, ao mesmo tempo em que os intérpretes realizam outras atividades no espaço. Andaimes e até um rapel poderão fazer parte da apresentação. <em>O espetáculo será uma grande festa, em que as pessoas poderão entrar na cabeça de Beethoveen. Ele contará com treze atores, em que todos interpretarão músico</em>, conta a diretora.", "https://veja.abril.com.br/entretenimento/espetaculo-sobre-beethoven-mistura-pianista-com-musica-eletronica/");

//Noticias em ingles
$noticia1_en = array("Ariana Grande announces dates of the <em> Sweetener World Tour </ em> and for the time being nothing from Brazil", "After all the traumas that have passed in recent months, it seems that Ariana Grande is already prepared to return to work.", "images/noticias/sweetener-tour.jpg", "In the Image, the photo is upside-down, big Aryan is looking serious on his side is written the phrase Sweetener World Tour");
$noticia2_en = array("Allie X Is Melancholy And Pop In The Unreleased Band 'Tongue Tied'", "After re-releasing the album <em> CollXtion I </ em> with the never-ending <em> Never Enough </ em>, Alexandra Hughes Allie X) prepares news for fans this year.",  "images/noticias/sweetener-tour.jpg", "in the image the singer Allie X wearing sunglasses is looking forward with her hand in her mouth ");
$noticia3_en = array("Arctic Monkeys announces show in Rio; band is headliner of Lollapalooza 2019", "The British band returns to Brazil after five years with the tour of the most recent album", "images/noticias/arcticmonkeys.jpg",  "LINK DA IMAGEM3");
$noticia4_en = array("Virada Cultural 2019 will have Anitta show and more 70 presentations with translation in Pounds", "'It's a way for the deaf to belong to the public space as well,' says the interpreter Ricieri Palha, who promises to dance together.", "images/noticias/viradaCultural.jpeg", "LINK DA IMAGEM4");
$noticia5_en = array("Daniel realizes family dream in Ibiúna", "Daniel visits family to meet the desire of a boy who wanted to sing", "images/principal/home-1.jpg", "In the image a woman takes a picture with her family with the singer Daniel, everyone is smiling.");
$noticia6_en = array("KATY PERRY IS ALREADY PLANNING YOUR NEXT ALBUM", "Do not call return, but would Katy Perry be preparing a ... return?", "Images/principal/katyperry.jpg", "In the image the singer Katy Perry is serious. background of the image lies a white wall with advertisements. ");
$noticia7_en = array("The Strokes gives its first interview in ten years", "Members talked about news from the band, Brazil and the Internet", "images/principal/home-3.jpg", "The logo is the logo of the band The Strokes. contains a circle and the band name inside. ");
$noticia8_en = array("Gusttavo Lima and the success of Moment", "Gusttavo Lima releases single that will be part of his new album", "images/noticias/Gustavo-Lima.jpg", "In the image the singer Gustavo Lima is sitting singing and looking at the happy audience");
$noticia9_en = array("Show about Beethoven mixes pianist with electronic music", "Production of the Duplô Company will feature thirteen interpreters in the role of the German composer", "images/noticias/teatro.jpg", "In the Picture a woman finds herself looking at a mirror if she makes up with pencils in her eyes");

//Noticias em espanhol
$noticia1_es = array("Ariana Grande anuncia fechas de la <em> Sweetener World Tour</em> y por ahora nada de Brasil", "Después de todos los traumas que ha pasado en los últimos meses, parece que Ariana Grande ya está preparada para volver a trabajar.", "images/noticias/sweetener-tour.jpg", "En la imagen, la foto esta de punta cabeza, aria grande está mirando serio hacia arriba de su lado esta escrito la frase Sweetener World Tour");
$noticia2_es = array("Allie X está melancólica y pop en la banda 'Tongue Tied'", "Después de relanzar el álbum <en> CollXtion I </ em> con la inédita <em> Never Enough </ em>, Alexandra Hughes (mejor conocida como Allie X) prepara las novedades para los fans este año.",  "images/noticias/sweetener-tour.jpg", " en la imagen la cantante Allie X con gafas de sol está mirando adelante con la mano en la boca");
$noticia3_es = array("Arctic Monkeys anuncia show en Río; La banda es headliner del Lollapalooza 2019", "La banda británica regresa a Brasil después de cinco años con la gira del último álbum", "images/noticias/arcticmonkeys.jpg", "LINK DA IMAGEM3");
$noticia4_es = array("Virada Cultural 2019 Anitta mostrar y más de 70 presentaciones con Libras traducción", "'Es una forma de los sordos también pertenecer al espacio público', dice el intérprete Ricieri Paja, que promete bailar juntos.", "images/noticias/viradaCultural.jpeg", "LINK DA IMAGEM4");
$noticia5_es = array("Daniel Realiza sueño de familia en Ibiúna", "Daniel visita familia para atender deseo de chico que quería cantar", "images/principal/home-1.jpg", "En la imagen una mujer toma foto junto a su familia con el cantante Daniel, todos están sonriendo. ");
$noticia6_es = array("KATY PERRY YA ESTÁ PLANEANDO SU SIGUIENTE ÁLBUM", "No llame de vuelta, pero estaría Katy Perry preparando un ... retorno?", "Images/principal/katyperry.jpg", "En la imagen la cantante Katy Perry se encuentra seria. fondo de la imagen se encuentra una pared blanca con los anuncios.");
$noticia7_es = array("The Strokes da su primera entrevista en diez años", "Integrantes conversaron sobre novedades de la banda, Brasil e Internet", "images/principal/home-3.jpg", "En la imagen está el logo de la banda The Strokes. contiene un círculo y el nombre de la banda dentro. ");
$noticia8_es = array("Gusttavo Lima y el éxito del Momento", "Gusttavo Lima lanza single que formará parte de su nuevo álbum", "images/noticias/Gustavo-Lima.jpg", "En la imagen el cantante Gustavo Lima está sentado cantando y mirando a la platea feliz");
$noticia9_es = array("Espectáculo sobre Beethoven mezcla pianista con música electrónica", "Producción de la Compañía Duplô contará con trece intérpretes en el papel del compositor alemán", "images/noticias/teatro.jpg", "En la imagen una mujer se encuentra mirando a un espejo maquillándose con lápices en los ojos");
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
          <img class="mx-auto d-block img-fluid shadow-sm mb-3" src="<?php echo $noticia[$ID][$NTC][2] ?>" alt="<?php echo $noticia[$ID][$NTC][3] ?>">
          <!-- Informações da noticia -->
          <p class="text-muted"><small><i class="fas fa-history"></i> 10 de abril de 2019 | 19h25 - <strong><?php echo $partesPagina[$ID][0] ?></strong> Karina Lucindo | <strong><?php echo $partesPagina[$ID][1] ?></strong> <?php echo $partesPagina[$ID][2] ?> </small> </p>

          <p><?php echo $noticia[$ID][$NTC][4] ?></p>
          <p><?php echo $noticia[$ID][$NTC][5] ?></p>
          <p class="text-right"><a href="<?php echo $noticia[$ID][$NTC][6] ?>">> Fonte da Noticía <</a> </ </p> </article> <!-- botões para compartilhar -->
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
