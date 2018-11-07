<!-- Menu top das paginas -->
<!-- definição em PHP para alterar o idioma, OBS: USAR PT = Pt-BR EN = En-US usar a variavel $ID  para definicar a posição da linha da Matriz-->
<?php
	$menu_pt = array("Home","Noticias","Ranking","Cifras","Indicações","Quem Somos","Contato","Normas do Site","Conteudo");
	$menu_en = array("Home","News","Ranking","Chords","Indications","About Us","Contact","Site Rules","Content");
	//$menu = array($menu_pt, $menu_en);
	$menu = array('PT'=> $menu_pt,'EN' => $menu_en);
	// print_r($menu);
	$paginaAtual = basename($_SERVER['SCRIPT_NAME']);
	//echo $paginaAtual;
 ?>
	<nav id="navheader" class="navbar navbar-light">
    <!-- botão do menu secundario com as paginas -->
    <!-- <a href="#" class="navbar-nav slide-menu-open">Open Menu</a> -->
    <div class="navbar-nav slide-menu-open">
      <a href="#" class="navbar-nav slide-menu-open"> <i class="fas fa-bars"></i></a>
    </div>
    <!-- logo -->
    <!-- <a class="navbar-brand" href="#">Ecletic.Music</a> -->
		<a class="navbar-brand" href="<?php echo "./".$link?>">
			<img src="images/principal/LOGO.svg" width="30" height="30" class="d-inline-block align-top" alt="LOGO Ecletic.Music">
			Ecletic.Music
		</a>
    <!-- Icone de busca -->
    <a href="#"><i class="form-inline fas fa-search"></i></a>
    <!-- menu oculto -->

    <div class="side-menu-overlay" style="width: 0px; opacity: 0;"></div>
    <div class="side-menu-sec">
      <a href="#" class="menu-close">&times;</a>
      <ul class="paginas">
				<li>PAGINAS SECUNDARIAS</li>
        <li><a href="<?php echo "classica/index.php".$link?>">Classica</a></li>
        <li><a href="<?php echo "hip-hop/index.php".$link?>">Hip-Hop</a></li>
        <li><a href="<?php echo "indie/index.php".$link?>">Indie</a></li>
        <li><a href="<?php echo "pop/index.php".$link?>">Pop</a></li>
        <li><a href="<?php echo "punk/index.php".$link?>">Punk</a></li>
        <li><a href="<?php echo "sertanejo/index.php".$link?>">Sertanejo</a></li>
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
  <!-- Menu principal -->
  <nav id="navprincipal">
    <ul class="nav nav-justified">
      <li class="nav-item icone">
        <!-- <a class="nav-link active" href="#"></i> Home</a> -->
        <a href="<?php echo "index.php".$link?>" title="<?php echo $menu[$ID][0]?>" <?php if ($paginaAtual == 'index.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="fas fa-home"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][0]?></span>
        </a>
      </li>
      <li class="nav-item icone">
        <!-- <a class="nav-link" href="#"><i class="far fa-newspaper"></i> Noticias</a> -->
        <a  href="<?php echo "noticias.php".$link?>" title="<?php echo $menu[$ID][1]?>" <?php if ($paginaAtual == 'noticias.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="far fa-newspaper"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][1]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-trophy"></i> Ranking</a> -->
        <a href="<?php echo "ranking.php".$link?>" title="<?php echo $menu[$ID][2]?>" <?php if ($paginaAtual == 'ranking.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="fas fa-chart-line"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][2]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-music"></i> Cifras</a> -->
        <a href="<?php echo "cifras.php".$link?>" title="<?php echo $menu[$ID][3]?>" <?php if ($paginaAtual == 'cifras.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="fas fa-music"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][3]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-headphones"></i> Indicações</a> -->
        <a href="<?php echo "indicacoes.php".$link?>" title="<?php echo $menu[$ID][4]?>" <?php if ($paginaAtual == 'indicacoes.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="fas fa-headphones"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][4]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="far fa-address-card"></i> Quem Somos</a> -->
        <a href="<?php echo "quem-somos.php".$link?>" title="<?php echo $menu[$ID][5]?>" <?php if ($paginaAtual == 'quem-somos.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="fas fa-users"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][5]?></span>
        </a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="#"><i class="fas fa-phone"></i> Contato</a> -->
        <a href="<?php echo "contato.php".$link?>" title="<?php echo $menu[$ID][6]?>" <?php if ($paginaAtual == 'contato.php') {
        	echo 'class="nav-link paginaAtual"';}else{echo 'class="nav-link"';} ?>>
          <span class="menu-icon"><i class="fas fa-phone"></i></span>
          <span class="menu-text"> <?php echo $menu[$ID][6]?></span>
        </a>
      </li>
    </ul>
  </nav>
