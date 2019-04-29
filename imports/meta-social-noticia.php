  <!-- Social Noticias: Facebook / Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:locale" content="<?php echo $lang ?>">
  <meta property="og:url" content="https://Ecletic.music.com/noticiaAtual.php?noticia=<?php echo $NTC ?>">
  <meta property="og:title" content="<?php echo $noticia[$ID][$NTC][0] ?>"> <!-- Titulo da publicação -->
  <meta property="og:description" content="<?php echo $noticia[$ID][$NTC][1] ?>"> <!--Descrição da publ limitada a 200 caracteres-->
  <meta property="og:site_name" content="Ecletic ponto Music">
  <meta property="article:tag" content="músicas, notícias">
  <meta property="article:section" content="Noticias">
  <meta property="og:image" content="<?php echo $noticia[$ID][$NTC][2] ?>"> <!-- Image publicada -->
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="800">  <!-- PIXELS --> 
  <meta property="og:image:height" content="600"> <!-- PIXELS -->

  <!-- Social Noticias: Twitter -->
  <meta name="twitter:card" content="summary"> <!-- aqui fica o tipo de card -->
  <meta name="twitter:url" content="https://Ecletic.music.com/noticiaAtual.php?noticia=<?php echo $NTC ?>">
  <meta name="twitter:site" content="@Ecletic.Music"> <!-- twitter handler do site -->
  <meta name="twitter:title" content="<?php echo $noticia[$ID][$NTC][0] ?>"> <!-- Titulo da publicação -->
  <meta name="twitter:description" content="<?php echo $noticia[$ID][$NTC][1] ?>"> <!--Descrição: Twitter - limitada a 200 caracteres-->
  <meta property="twitter:image:src" content="<?php echo $noticia[$ID][$NTC][2] ?>"> <!-- Image publicada -->

