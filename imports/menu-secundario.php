<?php
//definição em PHP para alterar o idioma, OBS: USAR 0 = Pt-BR, 1 = En-US, 2 = ES
$menu_pt = array("Home", "Noticias", "Ranking", "Cifras", "Indicações", "Quem Somos", "Contato", "Normas do Site", "Conteudo", "Menu Principal", "Selecione o idioma:", "Pular para conteúdo principal", "Menu Gênero", "Fechar menu secundário", "Siga-nos nas redes sociais");
$menu_en = array("Home", "News", "Ranking", "Chords", "Indications", "About Us", "Contact", "Site Rules", "Content", "Main Menu", "Select the language: ", "Skip to main content", "Menu Gênero", "Fechar menu secundário", "Follow us on the social networks");
$menu_es = array("Home", "Noticias", "Clasificación", "Cifras musicales", "Indicaciones", "Sobre nosotros", "Contacto", "Normas", "Contenido", "Menú principal", "Seleccione el idioma:", "Saltar al contenido principal", "Menú Género", "Cerrar menú secundario", "Seguir en las redes sociales");
//$menu = array($menu_pt, $menu_en);
$menu = array('PT' => $menu_pt, 'EN' => $menu_en, 'ES' => $menu_es);
//menu das paginas secundarias
$menu_sec_pt = array("Artistas", "Origem", "Lançamentos", "Destaques", "Marcos");
$menu_sec_en = array("Artists", "Origin", "Releases", "Highlights", "Mark");
$menu_sec_es = array("Artistas", "Fuente", "Lanzamientos", "Reflejos", "Hitos");
//$menu_sec = array($menu_sec_pt, $menu_sec_en);
$menu_sec = array('PT' => $menu_sec_pt, 'EN' => $menu_sec_en, 'ES' => $menu_sec_es);
// print_r($menu);

//PHP para alterar a cor do header de acordo com a pagina
//pegar o nome do arquivo atual
$paginaAtual = basename($_SERVER['SCRIPT_NAME']);
//pegar o diretorio do arquivo atual
$pagina = basename(dirname($_SERVER['PHP_SELF']), "/");
// echo $pagina;

if ($pagina == "sertanejo") {
  $linha_dois = '"header-sert"';
} elseif ($pagina == "indie") {
  $linha_dois = '"header-indie"';
} elseif ($pagina == "pop") {
  $linha_dois = '"header-pop"';
} elseif ($pagina == "classica") {
  $linha_dois = '"header-classica"';
} elseif ($pagina == "punk") {
  $linha_dois = '"headerpunk"';
} elseif ($pagina == "hip-hop") {
  $linha_dois = '"header-hip-hop"';
} elseif ($pagina == "jazz") {
  $linha_dois = '"headerjazz"';
} else {
  $linha_dois = '"navheader"';
}

$navheader = '"navheader"';
// echo $pagina;
// echo $navheader;
// echo '<nav id='.$navheader .' class="navbar navbar-light">';
?>

<div div id="topo" class="skippy">
  <a class="sr-only sr-only-focusable" href="#content">
    <div class="container">
      <span class="skiplink-text">Pular para conteúdo principal</span>
    </div>
  </a>
</div>
<header id=<?php echo $navheader ?>>

  <div class="container-fluid">
    <div class="row">
      <div class="col-6 text-center">
        <a class="navbar-brand" href="../" aria-label="Link para Home">
          <img src="../images/principal/LOGO.svg" width="40" height="40" class="d-inline-block align-center" alt=""> Ecletic.Music </a>
      </div>

      <div id="menu-secundario" class="col-3 order-first">
        <!-- botão hamburgue do menu secundario com as paginas -->
        <!-- <button class="slide-menu-open" aria-expanded="false"> MENU </button> -->
        <div class="navbar-nav slide-menu-open">
          <a href="#" class="hamburgue slide-menu-open" role="button" aria-expanded="false" aria-label="Menu Gênero">
            <div class="l-um"> </div>
            <div class="l-dois"> </div>
            <div class="l-tres"> </div>
          </a>
        </div>

        <div class="side-menu-sec">
          <!-- <button onclick= "AbrirMenu()"> </button> -->
          <nav class="btn-acess" hidden="">
            <a tabindex="-1" href="#" class="mb-4 text-right pr-4 menu-close" aria-label="Fechar menu secundario"><i class="fas fa-times"></i></a>
            <p class="mb-2 text-secondary font-weight-bold"><?php echo mb_strtoupper($menu[$ID][9], 'UTF-8') ?></p>
            <ul class="paginas">
              <li><a href="../index.php"><i class="mr-3 fas fa-home"> </i> <?php echo $menu[$ID][0] ?></a></li>
              <li><a href="../noticias.php"><i class="mr-3 far fa-newspaper"> </i> <?php echo $menu[$ID][1] ?></a></li>
              <li><a href="../ranking.php"><i class="mr-3 fas fa-chart-line"> </i> <?php echo $menu[$ID][2] ?></a></li>
              <li><a href="../cifras.php"><i class="mr-3 fas fa-music"> </i> <?php echo $menu[$ID][3] ?></a></li>
              <li><a href="../indicacoes.php"><i class="mr-3 fas fa-headphones"> </i> <?php echo $menu[$ID][4] ?></a></li>
              <li><a href="../quem-somos.php"><i class="mr-3 far fa-address-card"> </i> <?php echo $menu[$ID][5] ?></a></li>
              <li><a href="../contato.php"><i class="mr-3 fas fa-phone"> </i> <?php echo $menu[$ID][6] ?></a></li>
            </ul>
            <a class="sr-only sr-only-focusable menu-close mt-4" href="#"><small>Fechar menu</small></a>
          </nav>
        </div>
      </div>
      <div id="redes-sociais" class="col-3 order-last align-top">
        <span class="sr-only">Siga nas redes sociais</span>
        <ul id="siga-desk">
          <li class="face"> <a href="https://facebook.com/EclecticMusic" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
          <li class="insta"> <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Istagran"><i class="fab fa-instagram"></i></a></li>
          <li class="twit"> <a href="https://twitter.com/music" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
        </ul>
        <!-- <a id="siga-mobi" href="#redes-sociais-footer-mobi">Siga</a>  -->
      </div>
    </div>
  </div>
  <!-- Menu principal das paginas secundarias: Artistas,Origem,Lançamentos,Destaques,Marcos -->
  <nav id="navprincipal">
    <ul class="nav nav-justified">
      <li class="nav-item">
        <a href="index.php" <?php if ($paginaAtual == 'index.php') {
                              echo 'class="nav-link paginaAtual  disabled"';
                            } else {
                              echo 'class="nav-link"';
                            } ?>>
          <span class="menu-icon"><i class="fas fa-home "></i></span>
          <span class="menu-text"> <?php echo ucwords($pagina) ?></span>
          <?php if ($paginaAtual == 'index.php') {
            echo '<span class="sr-only">(Página Atual)</span>';
          } ?>
        </a>
      </li>
      <li class="nav-item">
        <a href="artistas.php" <?php if ($paginaAtual == 'artistas.php') {
                                  echo 'class="nav-link paginaAtual disabled"';
                                } else {
                                  echo 'class="nav-link"';
                                } ?>>
          <span class="menu-icon"><i class="fas fa-microphone-alt"></i></span>
          <span class="menu-text"><?php echo $menu_sec[$ID][0] ?></span>
          <?php if ($paginaAtual == 'artistas.php') {
            echo '<span class="sr-only">(Página Atual)</span>';
          } ?>
        </a>
      </li>
      <li class="nav-item">
        <a href="origem.php" <?php if ($paginaAtual == 'origem.php') {
                                echo 'class="nav-link paginaAtual disabled"';
                              } else {
                                echo 'class="nav-link"';
                              } ?>>
          <span class="menu-icon"><i class="fas fa-book-open"></i> </span>
          <span class="menu-text"><?php echo $menu_sec[$ID][1] ?></span>
          <?php if ($paginaAtual == 'origem.php') {
            echo '<span class="sr-only">(Página Atual)</span>';
          } ?>
        </a>
      </li>
      <li class="nav-item">
        <a href="lancamentos.php" <?php if ($paginaAtual == 'lancamentos.php') {
                                    echo 'class="nav-link paginaAtual disabled"';
                                  } else {
                                    echo 'class="nav-link"';
                                  } ?>>
          <span class="menu-icon"><i class="fab fa-itunes-note"></i> </span>
          <span class="menu-text"><?php echo $menu_sec[$ID][2] ?></span>
          <?php if ($paginaAtual == 'lancamentos.php') {
            echo '<span class="sr-only">(Página Atual)</span>';
          } ?>
        </a>
      </li>
      <li class="nav-item">
        <a href="destaques.php" <?php if ($paginaAtual == 'destaques.php') {
                                  echo 'class="nav-link paginaAtual disabled"';
                                } else {
                                  echo 'class="nav-link"';
                                } ?>>
          <span class="menu-icon"><i class="fas fa-clipboard-list"></i></span>
          <span class="menu-text"><?php echo $menu_sec[$ID][3] ?></span>
          <?php if ($paginaAtual == 'destaques.php') {
            echo '<span class="sr-only">(Página Atual)</span>';
          } ?>
        </a>
      </li>
      <li class="nav-item">
        <a href="marcos.php" <?php if ($paginaAtual == 'marcos.php') {
                                echo 'class="nav-link paginaAtual disabled"';
                              } else {
                                echo 'class="nav-link"';
                              } ?>>
          <span class="menu-icon"><i class="fas fa-bookmark"></i></span>
          <span class="menu-text"><?php echo $menu_sec[$ID][4] ?></span>
          <?php if ($paginaAtual == 'marcos.phpp') {
            echo '<span class="sr-only">(Página Atual)</span>';
          } ?>
        </a>
      </li>
    </ul>
  </nav>
</header>
<div class="side-menu-overlay" style="width: 0px; opacity: 0;"></div>


<div id=<?php echo $linha_dois ?> class="linha_dois"></div>
