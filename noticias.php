<?php
$noticias_pt = array(
  "Quentinhas", "Curiosidades", "Novidades", "Na imagem várias pessoas estão dançando em uma balada", "Há 2 horas atrás",
  "Na Imagem uma mulher encontra-se olhando para um espelho se maquiando com lápis nos olhos", "Há 1 dia atrás", "Ariana Grande anuncia datas da <em>'Sweetener World Tour'</em> e por enquanto nada de Brasil",
  "Depois de todos os traumas que passou nos últimos meses, parece que Ariana Grande já está preparada para voltar a trabalha.", "Allie X Está Melancólica E Pop Na Faixa Inédita 'Tongue Tied'",
  "Arctic Monkeys anuncia show no Rio; banda é headliner do Lollapalooza 2019", "Virada Cultural 2019 terá show de Anitta e mais 70 apresentações com tradução em Libras",
  "'É uma forma dos surdos também pertencerem ao espaço público', diz o intérprete Ricieri Palha, que promete dançar junto.", "Espetáculo sobre Beethoven mistura pianista com música eletrônica",
  "Produção da Companhia Duplô contará com treze intérpretes no papel do compositor alemão", "Gusttavo Lima e o sucesso do Momento", "Gusttavo Lima está prestes a gravar seu sétimo DVD de carreira. Nesta sexta-feira (10), o cantor divulgou um trecho do que está por vir neste novo projeto do cantor.",
  "Na imagem o cantor Gustavo Lima está sentado cantando e olhando para a plateia feliz"
);
$noticias_en = array(
  "Hot news", "Curiosities", "News", "In the picture many people are dancing in a night club", "2 hours ago",
  "In the Picture a woman finds herself looking at a mirror if she makes up with pencils in her eyes", "1 day ago", "Ariana Grande announces dates of the <em> 'Sweetener World Tour' </em> and for the time being nothing from Brazil",
  "After all the traumas that have passed in recent months, it seems that Ariana Grande is already prepared to return to work.", "Allie X Is Melancholy And Pop In The Unreleased Band 'Tongue Tied'",
  "Arctic Monkeys announces show in Rio; band is headliner of Lollapalooza 2019", "Virada Cultural 2019 will have Anitta show and more 70 presentations with translation in Pounds",
  "'It's a way for the deaf to belong to the public space as well,' says the interpreter Ricieri Palha, who promises to dance together.", "Show about Beethoven mixes pianist with electronic music",
  "Production of the Duplô Company will feature thirteen interpreters in the role of the German composer", "Gusttavo Lima and the success of Moment", "Gusttavo Lima releases single that will be part of his new album",
  "In the image the singer Gustavo Lima is sitting singing and looking at the happy audience"
);
$noticias_es = array(
  "Noticias calientes", "Curiosidades", "Noticias", "En la imagen varias personas están bailando en una balada", "Hace 2 horas",
  "En la imagen una mujer se encuentra mirando a un espejo maquillándose con lápices en los ojos", "Hace 1 día", "Ariana Grande anuncia fechas de la <em> Sweetener World Tour</em> y por ahora nada de Brasil",
  "Después de todos los traumas que ha pasado en los últimos meses, parece que Ariana Grande ya está preparada para volver a trabajar.", "Allie X está melancólica y pop en la banda 'Tongue Tied'",
  "Arctic Monkeys anuncia show en Río; La banda es headliner del Lollapalooza 2019", "Virada Cultural 2019 Anitta mostrar y más de 70 presentaciones con Libras traducción",
  "'Es una forma de los sordos también pertenecer al espacio público', dice el intérprete Ricieri Paja, que promete bailar juntos.", "Espectáculo sobre Beethoven mezcla pianista con música electrónica",
  "Producción de la Compañía Duplô contará con trece intérpretes en el papel del compositor alemán", "Gusttavo Lima y el éxito del Momento", "Gusttavo Lima lanza single que formará parte de su nuevo álbum",
  "En la imagen el cantante Gustavo Lima está sentado cantando y mirando a la platea feliz"
);
$noticias = array('PT' => $noticias_pt, 'EN' => $noticias_en, 'ES' => $noticias_es);
?>
<?php
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

  <!--ARTICLE-->
  <div id="content" class="container">
    <div class="row mb-4">
      <div class="col-sm-12 col-md-12 col-lg-7 mt-4">
        <article id="imagemnoticias">
          <a href="#" tabindex="0">
            <h2 class="titulonoticias"><?php echo $noticias[$ID][0] ?></h2>
          </a>
          <a href="./noticiaAtual.php?noticia=1" tabindex="0">
            <p class="textonoticias"><?php echo $noticias[$ID][7] ?></p>
          </a>
          <p id="textonoticias2" tabindex="0"> <?php echo $noticias[$ID][8] ?></p>
        </article>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-5 mt-4">
        <aside id="imagem2noticias">
          <a href="#" tabindex="0">
            <h2 class="titulonoticias"><?php echo $noticias[$ID][1] ?></h2>
          </a>
          <a href="./noticiaAtual.php?noticia=2" tabindex="0">
            <p class="textolateralnoticias"><?php echo $noticias[$ID][9] ?></p>
          </a>
        </aside>
        <aside id="imagem3noticias">
          <a href="#" tabindex="0">
            <h2 class="titulonoticias"><?php echo $noticias[$ID][2] ?></h2>
          </a>
          <a href="./noticiaAtual.php?noticia=3" tabindex="0">
            <p class="textolateralnoticias"><?php echo $noticias[$ID][10] ?></p>
          </a>
        </aside>
      </div>
    </div>
    <div class="row linhanot">
      <div class="col-sm-12 col-md-12 col-lg-5 mb-4">
        <img tabindex="0" src="images/noticias/pop.jpg" class="img-fluid ajusteimagem w-100" alt="<?php echo $noticias[$ID][3] ?>" tabindex="0">
      </div>
      <article class="col-sm-12 col-md-12 col-lg-7 mt-4">
        <a href="./noticiaAtual.php?noticia=4" tabindex="0">
          <p class="titulo4"><?php echo $noticias[$ID][11] ?></p>
        </a>
        <p class="paragrafo6" tabindex="0"><?php echo $noticias[$ID][12] ?></p>
        <p class="mt-5"><small><?php echo $noticias[$ID][4] ?></small></p>
      </article>
    </div>
    <div class="row mt-4 mb-4 linhanot">
      <div class="col-sm-12 col-md-12 col-lg-5 mb-4">
        <img tabindex="0" src="images/noticias/teatro.jpg" class="img-fluid ajusteimagem w-100" alt="<?php echo $noticias[$ID][5] ?>" tabindex="0">
      </div>
      <article class="col-sm-12 col-md-12 col-lg-7 mt-4">
        <a href="./noticiaAtual.php?noticia=9" tabindex="0">
          <p class="titulo4"><?php echo $noticias[$ID][13] ?></p>
        </a>
        <p class="paragrafo6" tabindex="0"><?php echo $noticias[$ID][14] ?></p>
        <p class="mt-5"><small><?php echo $noticias[$ID][6] ?></small></p>
      </article>
    </div>
    <div class="row mt-4 mb-4 linhanot">
      <div class="col-sm-12 col-md-12 col-lg-5 mb-4">
        <img tabindex="0" src="images/noticias/Gustavo-Lima.jpg" class="img-fluid ajusteimagem w-100" alt="<?php echo $noticias[$ID][17] ?>" tabindex="0">
      </div>
      <article class="col-sm-12 col-md-12 col-lg-7 mt-4">
        <a href="./noticiaAtual.php?noticia=8" tabindex="0">
          <p class="titulo4"><?php echo $noticias[$ID][15] ?></p>
        </a>
        <p class="paragrafo6 " tabindex="0"><?php echo $noticias[$ID][16] ?></p>
        <p class="mt-5"><small><?php echo $noticias[$ID][6] ?></small></p>
      </article>
    </div>
  </div>
  <!--ARTICLE ENDS-->


  <!--FOOTER-->
  <?php
  include('imports/footer.php');
  ?>
  <!--FIM FOOTER-->

</body>

</html>
