<?php
//tag<title>  Titulo das paginas;
$titlePadrao = array('PT' => "O Portal da Música", 'EN' => "The Music Portal", 'ES' => "El Portal de la Música");
?>

<head>
  <meta charset="utf-8">
  <title>Ecletic.Music | <?php echo (!isset($titlePagina)) ? $titlePadrao[$ID] : $titlePagina[$ID] ?></title>
  <meta name="description" content="Portal de Musica-Projeto integrador">
  <meta name="author" content="Karina, Rafael, Reginaldo, Renata, Thais, Victor - Os Ursal">

  <?php
  //verificar a pagina para fazer os imports das pastas corretas
  $pagina = basename(dirname($_SERVER['PHP_SELF']), "/");
  //Import do metatags das redes sociais
  $paginaSocial = basename($_SERVER['SCRIPT_NAME']);
  if ($paginaSocial == 'noticiaAtual.php') {
    include('imports/meta-social-noticia.php');
    // echo $paginaSocial;
  } else if (
    $pagina == "sertanejo" or $pagina == "pop" or $pagina == "indie" or
    $pagina == "punk" or $pagina == "classica" or $pagina == "hip-hop"  or $pagina == "jazz"
  ) {
    include('../imports/meta-social-pgs.php');
  } else {
    include('imports/meta-social-pgs.php');
  }
  ?>


  <!-- Mobile Specific Metas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#000000">

  <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <!-- CSS
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php
  //PHP para ajustar o path do diretorio dos CSS e outros links
  if ($pagina == "sertanejo" or $pagina == "pop" or $pagina == "indie" or $pagina == "punk" or $pagina == "classica" or $pagina == "hip-hop" or $pagina == "jazz") {
    echo '<link rel="stylesheet" href="../css/bootstrap.min.css">' . "\n";
    echo '<link rel="stylesheet" href="../css/mystyle.css">' . "\n";
    echo '<link rel="stylesheet" href="../css/magnific-popup.css">' . "\n";
    echo '<link rel="icon" type="image/png" href="../images/principal/favicon.ico">' . "\n";
    // echo "IF " .$pagina;
  } else {
    echo '<link rel="stylesheet" href="css/bootstrap.min.css">' . "\n";
    echo '<link rel="stylesheet" href="css/mystyle.css">' . "\n";
    echo '<link rel="icon" type="image/png" href="images/principal/favicon.ico">' . "\n";
    // echo "ELSE " .$pagina;
  }
  ?>
</head>