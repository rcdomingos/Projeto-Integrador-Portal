<!-- Menu top das paginas -->
<!-- definição em PHP para alterar o idioma, OBS: USAR PT = Pt-BR EN = En-US usar a variavel $ID  para definicar a posição da linha da Matriz-->
<?php
	$menu_pt = array("Home","Noticias","Ranking","Cifras","Indicações","Quem Somos","Contato","Normas do Site","Conteúdo");
	$menu_en = array("Home","News","Ranking","Chords","Indications","About Us","Contact","Site Rules","Content");
  $menu_es = array("Home","Noticias","Clasificación","Cifras musicales","Indicaciones","Sobre nosotros","Contacto","Normas","Contenido","Menú principal");
	//$menu = array($menu_pt, $menu_en);
	$menu = array('PT'=> $menu_pt,'EN' => $menu_en,'ES'=> $menu_es);
	// print_r($menu);
	$paginaAtual = basename($_SERVER['SCRIPT_NAME']);
	//echo $paginaAtual;
?>
	<nav id="navheader" class="navbar navbar-light">
    <!-- botão hamburgue do menu secundario com as paginas -->
    <div class="navbar-nav slide-menu-open">
			<a href="#" class="hamburgue slide-menu-open">
				<div class="l-um"> </div>
				<div class="l-dois"> </div>
				<div class="l-tres"> </div>
			</a>
    </div>
    <!-- logo -->
    <!-- <a class="navbar-brand" href="#">Ecletic.Music</a> -->
		<a class="navbar-brand" href="./">
			<img src="images/principal/LOGO.svg" width="30" height="30" class="d-inline-block align-top" alt="LOGO Ecletic.Music">
			Ecletic.Music
		</a>
    <!-- Icone de busca -->
		<div class="dropdown dropleft">
			<a href="#" role="button" id="pesquisar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="form-inline fas fa-search"></i></a>
			<div class="dropdown-menu" aria-labelledby="pesquisar">
				<form class="form-inline justify-content-end mx-2">
					<input class="form-control form-control-lg mb-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
					<button class="btn btn-primary my-2 my-sm-0" type="submit">Pesquisar</button>
				</form>
			</div>
		</div>
		<!-- sobreposição do resto da pagina -->
    <div class="side-menu-overlay" style="width: 0px; opacity: 0;"></div>
		<!-- Conteudo do menu oculto -->
    <div class="side-menu-sec">
      <a href="#" class="mb-4 menu-close text-right pr-4"><i class="fas fa-arrow-left"></i></a>
      <ul class="paginas">
				<li class="mb-2 text-secondary font-weight-bold"><?php echo mb_strtoupper ($menu[$ID][8],'UTF-8')?></li>
        <li><a href="classica/index.php">Classica</a></li>
        <li><a href="hip-hop/index.php">Hip-Hop</a></li>
        <li><a href="indie/index.php">Indie</a></li>
        <li><a href="pop/index.php">Pop</a></li>
        <li><a href="punk/index.php">Punk</a></li>
        <li><a href="sertanejo/index.php">Sertanejo</a></li>
      </ul>
      <div id="redes-sociais">
        <ul>
          <li class="face"> <a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li class="insta"> <a href="#"><i class="fab fa-instagram"></i></a></li>
          <li class="twit"> <a href="#"><i class="fab fa-twitter"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Menu principal: Home, Noticias, Ranking, Cifras, indicacoes, Quem somos, Contato-->
  <nav id="navprincipal">
    <ul class="nav nav-justified">
      <li class="nav-item icone">
        <a href="index.php" title="<?php echo $menu[$ID][0]?>" <?php if ($paginaAtual == 'index.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="fas fa-home"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][0]?></span>
        </a>
      </li>
      <li class="nav-item icone">
        <a  href="noticias.php" title="<?php echo $menu[$ID][1]?>" <?php if ($paginaAtual == 'noticias.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="far fa-newspaper"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][1]?></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="ranking.php" title="<?php echo $menu[$ID][2]?>" <?php if ($paginaAtual == 'ranking.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="fas fa-chart-line"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][2]?></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="cifras.php" title="<?php echo $menu[$ID][3]?>" <?php if ($paginaAtual == 'cifras.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="fas fa-music"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][3]?></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="indicacoes.php" title="<?php echo $menu[$ID][4]?>" <?php if ($paginaAtual == 'indicacoes.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="fas fa-headphones"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][4]?></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="quem-somos.php" title="<?php echo $menu[$ID][5]?>" <?php if ($paginaAtual == 'quem-somos.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="fas fa-users"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][5]?></span>
        </a>
      </li>
      <li class="nav-item">
        <a href="contato.php" title="<?php echo $menu[$ID][6]?>" <?php if ($paginaAtual == 'contato.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="fas fa-phone"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][6]?></span>
        </a>
      </li>
    </ul>
  </nav>
