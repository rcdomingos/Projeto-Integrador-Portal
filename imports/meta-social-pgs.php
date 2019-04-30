  <?php 
  //veriicar o link da pagina atual
  $protocolo = (strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === false) ?'http':'https';
  $host = $_SERVER['HTTP_HOST'];
  $path = $_SERVER["REQUEST_URI"];
  $url = $protocolo.'://'.$host.$path;
  //echo $protocolo
  //echo $host;
  //echo $path;
  //echo $url;

  //informações padrão do card
  $title = "Ecletic ponto Music seu site da Musica";
  $description = "Fique por dentro de toda novidade da musica";
  ?>
  
  <!-- Social Padrão: Facebook / Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:locale" content="<?php echo $lang ?>">
  <meta property="og:url" content="<?php echo $url ?>">
  <meta property="og:title" content="<?php echo $title ?>"> <!-- Titulo da publicação -->
  <meta property="og:description" content="<?php echo $description ?>"> <!--Descrição da publ limitada a 200 caracteres-->
  <meta property="og:site_name" content="Ecletic ponto Music">
  <meta property="og:image" content="<?php echo $protocolo.'://'.$host?>/images/principal/card-facebook.jpg"> <!-- Image publicada -->
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="800">  <!-- PIXELS --> 
  <meta property="og:image:height" content="600"> <!-- PIXELS -->

  <!-- Social Padrão: Twitter -->
  <meta name="twitter:card" content="summary"> <!-- tipo de card -->
  <meta name="twitter:url" content="<?php echo $url ?>">
  <meta name="twitter:site" content="@Ecletic.Music"> <!-- twitter handler do site -->
  <meta name="twitter:title" content="<?php echo $title ?>"> <!-- Titulo da publicação -->
  <meta name="twitter:description" content="<?php echo $description ?>"> <!--Descrição: Twitter - limitada a 200 caracteres-->
  <meta property="twitter:image:src" content="<?php echo $protocolo.'://'.$host?>/images/principal/card-twitter.jpg"> <!-- Image publicada -->
