<!-- Menu top das paginas -->
<!-- definição em PHP para alterar o idioma, OBS: USAR PT = Pt-BR EN = En-US usar a variavel $ID  para definicar a posição da linha da Matriz-->
<?php
$menu_pt = array("Home", "Noticias", "Ranking", "Cifras", "Indicações", "Quem Somos", "Contato", "Normas do Site", "Páginas", "Idioma:");
$menu_en = array("Home", "News", "Ranking", "Chords", "Indications", "About Us", "Contact", "Site Rules", "Pages", "Language:");
$menu_es = array("Home", "Noticias", "Clasificación", "Cifras musicales", "Indicaciones", "Sobre nosotros", "Contacto", "Normas", "páginas", "Idioma:");
//$menu = array($menu_pt, $menu_en);
$menu = array('PT' => $menu_pt, 'EN' => $menu_en, 'ES' => $menu_es);
// print_r($menu);
$paginaAtual = basename($_SERVER['SCRIPT_NAME']);
//echo $paginaAtual;
?>
<!-- links de acessibilidade para ir ao conteudo -->
<div id="skippy">
  <a class="sr-only sr-only-focusable" href="#content">
    <div class="container text-center">
      <span class="skiplink-text">Pular para conteúdo principal</span>
    </div>
  </a>
  <a class="sr-only sr-only-focusable" href="#idioma">
    <div class="container text-center">
      <span class="skiplink-text">Selecione o idioma</span>
    </div>
  </a>
</div>

<header id="navheader">
  <div class="container-fluid">
    <div class="row">
      <div class="col-6 text-center">
        <a class="navbar-brand" href="./">
          <img src="images/principal/LOGO.svg" width="40" height="40" class="d-inline-block align-center" alt="Ecletic ponto Music"> Ecletic.Music </a>
      </div>

      <div id="menu-secundario" class="col-3 order-first">
        <!-- botão hamburgue do menu secundario com as paginas -->
        <!-- <button class="slide-menu-open" aria-expanded="false"> MENU </button> -->
        <div class="navbar-nav slide-menu-open">
          <a href="#" class="hamburgue slide-menu-open" role="button" aria-expanded="false" aria-label="Menu outras Páginas">
            <div class="l-um"> </div>
            <div class="l-dois"> </div>
            <div class="l-tres"> </div>
          </a>
        </div>

        <div class="side-menu-sec">
          <!-- <button onclick= "AbrirMenu()"> </button> -->
          <nav class="btn-acess" hidden="">
            <a href="#" class="mb-4 text-right pr-4 menu-close" aria-label="Fechar menu secundario"><i class="fas fa-times"></i></a>
            <p class="mb-2 text-secondary font-weight-bold"><?php echo mb_strtoupper($menu[$ID][8], 'UTF-8') ?></p>
            <ul class="paginas">
              <li><a href="classica/index.php"><i class="mr-3 fas fa-play"></i> Classica</a></li>
              <li><a href="hip-hop/index.php"><i class="mr-3 fas fa-play"></i> Hip-Hop</a></li>
              <li><a href="indie/index.php"><i class="mr-3 fas fa-play"></i> Indie</a></li>
              <li><a href="pop/index.php"><i class="mr-3 fas fa-play"></i> Pop</a></li>
              <li><a href="punk/index.php"><i class="mr-3 fas fa-play"></i> Punk</a></li>
              <li><a href="sertanejo/index.php"><i class="mr-3 fas fa-play"></i> Sertanejo</a></li>
            </ul>
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
  <nav id="navprincipal">
    <ul class="nav nav-justified">
      <li class="nav-item icone">
        <a href="index.php" title="<?php echo $menu[$ID][0] ?>" <?php if ($paginaAtual == 'index.php') {
                                                                  echo 'class="nav-link paginaAtual disabled"';
                                                                } else {
                                                                  echo 'class="nav-link"';
                                                                } ?>>
          <span class="menu-icon"><i class="fas fa-home"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][0] ?></span>
          <?php if ($paginaAtual == 'index.php') {echo '<span class="sr-only">(Página Atual)</span>';} ?>                                                     
        </a>
      </li>
      <li class="nav-item icone">
        <a href="noticias.php" title="<?php echo $menu[$ID][1] ?>" <?php if ($paginaAtual == 'noticias.php') {
                                                                    echo 'class="nav-link paginaAtual disabled"';
                                                                  } else {
                                                                    echo 'class="nav-link"';
                                                                  } ?>>
          <span class="menu-icon"><i class="far fa-newspaper"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][1] ?></span>
          <?php if ($paginaAtual == 'noticias.php') {echo '<span class="sr-only">(Página Atual)</span>';} ?>   
        </a>
      </li>
      <li class="nav-item">
        <a href="ranking.php" title="<?php echo $menu[$ID][2] ?>" <?php if ($paginaAtual == 'ranking.php') {
                                                                    echo 'class="nav-link paginaAtual disabled"';
                                                                  } else {
                                                                    echo 'class="nav-link"';
                                                                  } ?>>
          <span class="menu-icon"><i class="fas fa-chart-line"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][2] ?></span>
          <?php if ($paginaAtual == 'ranking.php') {echo '<span class="sr-only">(Página Atual)</span>';} ?>   
        </a>
      </li>
      <li class="nav-item">
        <a href="cifras.php" title="<?php echo $menu[$ID][3] ?>" <?php if ($paginaAtual == 'cifras.php') {
                                                                  echo 'class="nav-link paginaAtual disabled"';
                                                                } else {
                                                                  echo 'class="nav-link"';
                                                                } ?>>
          <span class="menu-icon"><i class="fas fa-music"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][3] ?></span>
          <?php if ($paginaAtual == 'cifras.php') {echo '<span class="sr-only">(Página Atual)</span>';} ?>   
        </a>
      </li>
      <li class="nav-item">
        <a href="indicacoes.php" title="<?php echo $menu[$ID][4] ?>" <?php if ($paginaAtual == 'indicacoes.php') {
                                                                      echo 'class="nav-link paginaAtual disabled"';
                                                                    } else {
                                                                      echo 'class="nav-link"';
                                                                    } ?>>
          <span class="menu-icon"><i class="fas fa-headphones"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][4] ?></span>
          <?php if ($paginaAtual == 'indicacoes.php') {echo '<span class="sr-only">(Página Atual)</span>';} ?>   
        </a>
      </li>
      <li class="nav-item">
        <a href="quem-somos.php" title="<?php echo $menu[$ID][5] ?>" <?php if ($paginaAtual == 'quem-somos.php') {
                                                                      echo 'class="nav-link paginaAtual disabled"';
                                                                    } else {
                                                                      echo 'class="nav-link"';
                                                                    } ?>>
          <span class="menu-icon"><i class="fas fa-users"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][5] ?></span>
          <?php if ($paginaAtual == 'quem-somos.php') {echo '<span class="sr-only">(Página Atual)</span>';} ?>   
        </a>
      </li>
      <li class="nav-item">
        <a href="contato.php" title="<?php echo $menu[$ID][6] ?>" <?php if ($paginaAtual == 'contato.php') {
                                                                    echo 'class="nav-link paginaAtual disabled"';
                                                                  } else {
                                                                    echo 'class="nav-link"';
                                                                  } ?>>
          <span class="menu-icon"><i class="fas fa-phone"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][6] ?></span>
          <?php if ($paginaAtual == 'contato.php') {echo '<span class="sr-only">(Página Atual)</span>';} ?>   
        </a>
      </li>
    </ul>
  </nav>
</header>
<div class="side-menu-overlay" style="width: 0px; opacity: 0;"></div>