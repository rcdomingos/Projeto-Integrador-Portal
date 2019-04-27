<?php

if(!isset($_GET['noticia'])){$NTC  = "1";} else {$NTC = $_GET['noticia'];}
// $NTC = $_GET['noticia'];
// $NTC = 2;

//ordem para cada noticia vetor ("TITULO", "SUBTITULO", "LINK DA IMAGEM", "ALT DA IMAGEM");
//Noticias em Portugues
$noticia1_pt = array("Gusttavo Lima e o sucesso do Momento", "Gusttavo Lima lança single que fará parte de seu novo álbum", "images/noticias/Gustavo-Lima.jpg","Foto de fulano de tal");
$noticia2_pt = array("TITULO2", "SUBTITULO2", "images/noticias/slide/slide-01.jpg", "Foto da fulana de tal");
$noticia3_pt = array("TITULO3", "SUBTITULO3", "LINK DA IMAGEM3", "ALT DA IMAGEM");
$noticia4_pt = array("TITULO4", "SUBTITULO4", "LINK DA IMAGEM4", "ALT DA IMAGEM");

//Noticias em ingles
$noticia1_en = array("Gusttavo Lima and the success of Moment", "Gusttavo Lima releases single that will be part of his new album", "images/noticias/Gustavo-Lima.jpg", "Photo of so-and-so");
$noticia2_en = array("TITLE2", "SUBTITLEO2", "LINK DA IMAGEM2");
$noticia3_en = array("TITLE3", "SUBTITLEO3", "LINK DA IMAGEM3");
$noticia4_en = array("TITLE4", "SUBTITLEO4", "LINK DA IMAGEM4");

//Noticias em espanhol
$noticia1_es = array("Gusttavo Lima y el éxito del Momento", "Gusttavo Lima lanza single que formará parte de su nuevo álbum", "images/noticias/Gustavo-Lima.jpg", "Foto de fulano de tal");
$noticia2_es = array("TITULOss2", "SUBTITULOs2", "LINK DA IMAGEM2");
$noticia3_es = array("TITULOss3", "SUBTITULOs3", "LINK DA IMAGEM3");
$noticia4_es = array("TITULOss4", "SUBTITULOs4", "LINK DA IMAGEM4");

// Matriz com as noticias
$noticia_pt = array('1' => $noticia1_pt, '2' => $noticia2_pt, '3' => $noticia3_pt, '4' => $noticia4_pt,);
$noticia_en = array('1' => $noticia1_en, '2' => $noticia2_en, '3' => $noticia3_en, '4' => $noticia4_en,);
$noticia_es = array('1' => $noticia1_es, '2' => $noticia2_es, '3' => $noticia3_es, '4' => $noticia4_es,);

// Matriz com as noticias por idioma
$noticia = array('PT' => $noticia_pt, 'EN' => $noticia_en, 'ES' => $noticia_es);
// $noticia[$ID][1][0] => posições da matriz:
// 1=idioma, 2=noticia, 3=parte da noticia

//Matriz para os textos padrão da pagina
  $partesPagina_pt = array("Publicado por:","Foto:","Divulgação");
  $partesPagina_en = array("Published by:","Photo:","Divulgation");
  $partesPagina_es = array("Publicado por","Foto","Revelación");

  $partesPagina = array('PT' => $partesPagina_pt, 'EN' => $partesPagina_en , 'ES' => $partesPagina_es);

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

  <div class="container mt-3">
    <div class="row">
      <div class="col">
        <article id="content">
          <!-- cabeçalho da noticia -->
          <header class="text-center">
            <h1 class="display-4"><?php echo $noticia[$ID][$NTC][0] ?></h1>
            <p class="lead"><?php echo $noticia[$ID][$NTC][1] ?></p>
          </header>
          <!-- Imagem da noticia -->
          <img class="mx-auto d-block img-fluid shadow-sm mb-3" src="<?php echo $noticia[$ID][$NTC][2] ?>" alt="<?php echo $noticia[$ID][$NTC][2] ?>">
          <!-- Informações da noticia -->
          <p class="text-muted"><small><i class="fas fa-history"></i> 10/04/2019 | 19h25m - <strong><?php echo $partesPagina[$ID][0]?></strong> Karina Lucindo | <strong><?php echo $partesPagina[$ID][1]?></strong> <?php echo $partesPagina[$ID][2]?> </small> </p>
          
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas purus viverra accumsan in nisl nisi scelerisque eu. Mi sit amet mauris commodo quis. Mauris ultrices eros in cursus turpis massa tincidunt dui ut. Suspendisse faucibus interdum posuere lorem ipsum dolor. Aliquam nulla facilisi cras fermentum odio eu. Vitae nunc sed velit dignissim sodales ut eu sem. Lectus magna fringilla urna porttitor rhoncus dolor purus non. Urna et pharetra pharetra massa massa ultricies mi. Vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras. Volutpat diam ut venenatis tellus in metus vulputate eu. Nibh mauris cursus mattis molestie a iaculis at. Ac ut consequat semper viverra nam libero justo laoreet. A iaculis at erat pellentesque adipiscing commodo. Lobortis scelerisque fermentum dui faucibus in. Pellentesque massa placerat duis ultricies lacus sed turpis tincidunt id. Morbi blandit cursus risus at ultrices mi tempus imperdiet nulla. Suspendisse in est ante in. Cursus eget nunc scelerisque viverra mauris in aliquam.</p>
          <p>Scelerisque eu ultrices vitae auctor eu augue ut lectus. Vel orci porta non pulvinar neque. Massa ultricies mi quis hendrerit dolor magna eget est lorem. Dignissim diam quis enim lobortis scelerisque fermentum dui faucibus in. Bibendum at varius vel pharetra vel turpis nunc eget lorem. Neque gravida in fermentum et sollicitudin ac. Dictumst vestibulum rhoncus est pellentesque elit ullamcorper. Cursus eget nunc scelerisque viverra mauris. Fringilla phasellus faucibus scelerisque eleifend donec. Ultrices eros in cursus turpis massa tincidunt dui ut ornare. Et netus et malesuada fames ac turpis egestas integer. Turpis massa sed elementum tempus. In nulla posuere sollicitudin aliquam. Sed ullamcorper morbi tincidunt ornare. Vitae purus faucibus ornare suspendisse. Laoreet suspendisse interdum consectetur libero id faucibus nisl tincidunt. Ipsum a arcu cursus vitae. Et ligula ullamcorper malesuada proin libero nunc.</p>
          <p>Sapien faucibus et molestie ac. Ultricies leo integer malesuada nunc vel. Pellentesque dignissim enim sit amet venenatis urna cursus. Velit aliquet sagittis id consectetur purus ut. Facilisis volutpat est velit egestas dui id. Eget mi proin sed libero enim sed faucibus. Lectus sit amet est placerat. Volutpat est velit egestas dui id ornare. Sit amet consectetur adipiscing elit pellentesque habitant. Lobortis scelerisque fermentum dui faucibus in ornare quam. Suspendisse in est ante in nibh mauris cursus mattis molestie. Cursus vitae congue mauris rhoncus. Volutpat est velit egestas dui id ornare arcu. Purus ut faucibus pulvinar elementum integer enim neque volutpat. Mauris pellentesque pulvinar pellentesque habitant morbi tristique senectus. Et netus et malesuada fames ac turpis egestas maecenas.</p>
          <p>Sed blandit libero volutpat sed cras. Venenatis a condimentum vitae sapien pellentesque habitant. Est sit amet facilisis magna etiam tempor. In mollis nunc sed id semper. Placerat in egestas erat imperdiet sed euismod nisi porta. Quis lectus nulla at volutpat. Amet venenatis urna cursus eget nunc. Dui sapien eget mi proin sed libero enim sed. Eu volutpat odio facilisis mauris sit amet massa vitae. Massa sapien faucibus et molestie ac feugiat sed. Nisl nisi scelerisque eu ultrices vitae auctor eu augue ut. Viverra nam libero justo laoreet sit. Sit amet mauris commodo quis. Enim tortor at auctor urna nunc id.</p>
        </article>
      </div>
    </div>
  </div>
  <!--FOOTER-->
  <?php
  include('imports/footer.php');
  ?>
  <!--FIM FOOTER-->

</body>

</html>