<?php
	//definição em PHP para alterar o idioma, OBS: USAR 0 = Pt-BR, 1 = En-US, 2 = ES
	$menu_pt = array("Home","Noticias","Ranking","Cifras","Indicações","Quem Somos","Contato","Normas do Site","Conteudo","Menu Principal");
	$menu_en = array("Home","News","Ranking","Chords","Indications","About Us","Contact","Site Rules","Content", "Main Menu");
	$menu_es = array("Home","Noticias","Clasificación","Cifras musicales","Indicaciones","Sobre nosotros","Contacto","Normas","Contenido","Menú principal");
	//$menu = array($menu_pt, $menu_en);
	$menu = array('PT'=> $menu_pt,'EN' => $menu_en,'ES'=> $menu_es);
  //menu das paginas secundarias
	$menu_sec_pt = array("Artistas","Origem","Lançamentos","Destaques","Marcos");
	$menu_sec_en = array("Artists","Origin","Releases","Highlights","Mark");
  $menu_sec_es = array("Artistas","Fuente","Lanzamientos","Reflejos","Hitos");
	//$menu_sec = array($menu_sec_pt, $menu_sec_en);
	$menu_sec = array('PT'=> $menu_sec_pt,'EN' => $menu_sec_en,'ES'=> $menu_sec_es);
	// print_r($menu);

	//PHP para alterar a cor do header de acordo com a pagina
	//pegar o nome do arquivo atual
	$paginaAtual = basename($_SERVER['SCRIPT_NAME']);
	//pegar o diretorio do arquivo atual
	$pagina = basename (dirname($_SERVER['PHP_SELF']),"/");
 	// echo $pagina;
	if ($pagina=="sertanejo"){
		$navheader = '"header-sert"';
	}elseif ($pagina=="indie"){
		$navheader = '"header-indie"';
	}elseif ($pagina=="pop"){
		$navheader = '"header-pop"';
	}elseif ($pagina=="classica"){
		$navheader = '"header-classica"';
  }elseif ($pagina=="punk"){
		$navheader = '"headerpunk"';
	}elseif ($pagina=="hip-hop"){
		$navheader = '"header-hip-hop"';
	}	else{
		$navheader = '"navheader"';
	}
	// echo $pagina;
	// echo $navheader;
  // echo '<nav id='.$navheader .' class="navbar navbar-light">';
?>
	<nav id= <?php echo $navheader ?> class="navbar navbar-light">
  <!-- botão do menu com as paginas principais do site -->
  <!-- <div class="navbar-nav slide-menu-open">
    <a href="#" class="navbar-nav slide-menu-open"> <i class="fas fa-bars"></i></a>
	</div> -->
	<!-- Menu Hamburguer -->
	<div class="navbar-nav slide-menu-open">
		<a href="#" class="hamburgue slide-menu-open">
			<div class="l-um"> </div>
			<div class="l-dois"> </div>
			<div class="l-tres"> </div>
		</a>
	</div>
  <!-- logo -->
	<a class="navbar-brand" href="../">
		<img src="../images/principal/LOGO.svg" width="30" height="30" class="d-inline-block align-top" alt="LOGO Ecletic.Music">
		Ecletic.Music
	</a>
  <!-- Icone de busca -->
  <a href="#"><i class="form-inline fas fa-search"></i></a>
	<!-- sobreposição do resto da pagina -->
  <div class="side-menu-overlay" style="width: 0px; opacity: 0;"></div>
  <div class="side-menu-sec">
    <a href="#" class="mb-4 menu-close text-right pr-4"><i class="fas fa-arrow-left"></i></a>
		<!-- menu oculto das paginas principais do site -->
      <ul class="paginas">
        <li class="mb-2 text-secondary font-weight-bold"><?php echo mb_strtoupper ($menu[$ID][9],'UTF-8')?></li>
        <li><a  href="../index.php"><i class="mr-3 fas fa-home"> </i>  <?php echo $menu[$ID][0]?></a></li>
        <li><a  href="../noticias.php"><i class="mr-3 far fa-newspaper"> </i>  <?php echo $menu[$ID][1]?></a></li>
        <li><a  href="../ranking.php"><i class="mr-3 fas fa-chart-line"> </i>  <?php echo $menu[$ID][2]?></a></li>
        <li><a  href="../cifras.php"><i class="mr-3 fas fa-music"> </i>  <?php echo $menu[$ID][3]?></a></li>
        <li><a  href="../indicacoes.php"><i class="mr-3 fas fa-headphones"> </i>  <?php echo $menu[$ID][4]?></a></li>
        <li><a  href="../quem-somos.php"><i class="mr-3 far fa-address-card"> </i>  <?php echo $menu[$ID][5]?></a></li>
        <li><a  href="../contato.php"><i class="mr-3 fas fa-phone"> </i>  <?php echo $menu[$ID][6]?></a></li>
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
<!-- Menu principal das paginas secundarias: Artistas,Origem,Lançamentos,Destaques,Marcos -->
<nav id="navprincipal">
  <ul class="nav nav-justified">
	  <li class="nav-item">
		  <a href="index.php" title="Home <?php echo $pagina ?>" <?php if ($paginaAtual == 'index.php') {
				echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
			 	<span class="menu-icon"><i class="fas fa-home "></i></span>
			  <span class="menu-text"> <?php echo ucwords($pagina) ?></span>
		  </a>
	 	</li>
    <li class="nav-item">
      <a href="artistas.php" title="<?php echo $menu_sec[$ID][0]?>" <?php if ($paginaAtual == 'artistas.php') {
				echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
        <span class="menu-icon"><i class="fas fa-microphone-alt"></i></span>
        <span class="menu-text"><?php echo $menu_sec[$ID][0]?></span>
      </a>
    </li>
    <li class="nav-item">
      <a href="origem.php" title="<?php echo $menu_sec[$ID][1]?>" <?php if ($paginaAtual == 'origem.php') {
				echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
        <span class="menu-icon"><i class="fas fa-book-open"></i> </span>
        <span class="menu-text"><?php echo $menu_sec[$ID][1]?></span>
      </a>
    </li>
    <li class="nav-item">
      <a href="lancamentos.php" title="<?php echo $menu_sec[$ID][2]?>" <?php if ($paginaAtual == 'lancamentos.php') {
				echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
        <span class="menu-icon"><i class="fab fa-itunes-note"></i> </span>
        <span class="menu-text"><?php echo $menu_sec[$ID][2]?></span>
      </a>
    </li>
    <li class="nav-item">
      <a href="destaques.php" title="<?php echo $menu_sec[$ID][3]?>" <?php if ($paginaAtual == 'destaques.php') {
				echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
        <span class="menu-icon"><i class="fas fa-clipboard-list"></i></span>
        <span class="menu-text"><?php echo $menu_sec[$ID][3]?></span>
      </a>
    </li>
    <li class="nav-item">
      <a href="marcos.php" title="<?php echo $menu_sec[$ID][4]?>" <?php if ($paginaAtual == 'marcos.php') {
				echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
        <span class="menu-icon"><i class="fas fa-bookmark"></i></span>
        <span class="menu-text"><?php echo $menu_sec[$ID][4]?></span>
      </a>
    </li>
  </ul>
</nav>
