<?php
  // definição em PHP para alterar o idioma no footer
  $footer_pt = array("Serviços", "Mapa do Site", "Todos os direitos reservado e etc,etc e etc", "Idioma:", "Sua Opinião nos ajuda!","inglês", "Português", "Espanhol","Logo do site Ecletic.Music. No logo, dois raios então envolta de uma palheta. No meio da palheta as iniciais E e M, que significa Ecletic.Music");
  $footer_en = array("Services", "Site Map", "All rigths reserved and etc, etc and etc...", "Language:", "Your opinion helps us!","English", "portuguese", "Spanish","Logo of the site Eclectic.Music. In the logo, two rays then wrapped in a reed. In the middle of the vane the initials E and M, which means Ecletic.Music");
  $footer_es = array("Servicios", "Mapa del sitio", "Todos los derechos reservados y etc, etc etc etc...", "Idioma:", "Su opinión ayuda us!", "Inglés", "Portugués", "español","Logo del sitio Eclectic.Music. En el logo, dos rayos entonces envueltos de una caña. En el centro de la paleta las iniciales E y M, que significa Ecletic.Music");
  //$footer = array($footer_pt, $footer_en);
  $footer = array('PT' => $footer_pt, 'EN' => $footer_en, 'ES' => $footer_es);
?>
  <footer id="footer">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-10  col-lg-12">
          <div class="container">
            <div class="row">
              <div class="col-3 col-lg-1 py-2">
                <p class="text-center" tabindex="0"><?php echo mb_strtoupper($footer[$ID][0], 'UTF-8') ?></p>
              </div>
              <div class="col-8 col-lg-3 pb-3 pb-sm-0">
                <nav class="menu-secundario">
                  <ul class="nav flex-column pl-xs-3">
                    <li class="nav-item">
                      <a class="nav-link" href="../quem-somos.php"><?php echo $menu[$ID][5] ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../normas.php"><?php echo $menu[$ID][7] ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../contato.php"><?php echo $menu[$ID][6] ?></a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="col-3 col-lg-1 py-2">
                <p class="text-center" tabindex="0"><?php echo mb_strtoupper($footer[$ID][1], 'UTF-8') ?></p>
              </div>
              <div class="col-8 col-lg-3 pb-3 pb-sm-0">
                <nav class="menu-secundario">
                  <ul class="nav flex-column pl-xs-3">
                    <li class="nav-item">
                      <a class="nav-link" href="../index.php"><?php echo $menu[$ID][0] ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../noticias.php"><?php echo $menu[$ID][1] ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../ranking.php"><?php echo $menu[$ID][2] ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../cifras.php"><?php echo $menu[$ID][3] ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../indicacoes.php"><?php echo $menu[$ID][4] ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#conteudosite"
                      role="button" aria-expanded="false" aria-controls="conteudosite"><?php echo $menu[$ID][8] ?></a>
                        <ul  class="collapse lista-conteudo" id="conteudosite">
                          <li class="nav-item"><a class="nav-link" href="../classica/index.php">Classica</a></li>
                          <li class="nav-item"><a class="nav-link" href="../hip-hop/index.php">Hip-Hop</a></li>
                          <li class="nav-item"><a class="nav-link" href="../indie/index.php">Indie</a></li>
                          <li class="nav-item"><a class="nav-link" href="../pop/index.php">Pop</a></li>
                          <li class="nav-item"><a class="nav-link" href="../punk/index.php">Punk</a></li>
                          <li class="nav-item"><a class="nav-link" href="../sertanejo/index.php">Sertanejo</a></li>
                        </ul>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="col-3 col-lg-1 py-2">
                <p class="text-center" tabindex="0"><?php echo mb_strtoupper($menu[$ID][6], 'UTF-8') ?></p>
              </div>
              <div class="col-8 col-lg-3  pb-3 pb-sm-0">
                <nav class="menu-secundario">
                  <ul class="nav flex-column pl-xs-3">
                    <li class="nav-item nav-link" tabindex="0">
                      contato@ecletic.music.com
                    </li>
                    <li class="nav-item nav-link" tabindex="0">
                      +55 11 1254 5678
                    </li>
                    <li class="nav-item nav-link" tabindex="0">
                      <?php echo $footer[$ID][4] ?>
                    </li>
                  </ul>
                </nav>
                <div id="redes-sociais-footer" class="pt-2">
                  <ul>
                    <li class="face"> <a href="https://facebook.com/EclecticMusic" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="insta"> <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Istagran"><i class="fab fa-instagram"></i></a></li>
                    <li class="twit"> <a href="https://twitter.com/music" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-2">
          <div id="redes-sociais-footer-mobi">
            <ul>
              <li class="face"> <a href="https://facebook.com/EclecticMusic" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li class="insta"> <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Istagran"><i class="fab fa-instagram"></i></a></li>
              <li class="twit"> <a href="https://twitter.com/music" target="_blank" rel="noopener" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="logo-footer">
            <img src="../images/principal/LOGO.svg" class="d-inline-block" tabindex="0" alt="<?php echo $footer[$ID][8] ?>">
          </div>
        </div>
        <div class="col">
          <div class="text-right">
            <!-- Alterar  o Idioma do conteudo nos icones do footer -->
            <?php
            $urlidioma = basename (dirname($_SERVER['PHP_SELF'])) .'/'.basename($_SERVER['SCRIPT_FILENAME']);
            // basename($_SERVER['SCRIPT_FILENAME'])
            //Mostrar qual o idioma atual esta selecionado
            if ($ID == 'PT') {
              $idativo1 = 'idiomaatual';
              $idativo2 = '';
              $idativo3 = '';
            } elseif (($ID == 'EN')) {
              $idativo2 = 'idiomaatual';
              $idativo3 = '';
              $idativo1 = '';
            } elseif (($ID == 'ES')) {
              $idativo3 = 'idiomaatual';
              $idativo2 = '';
              $idativo1 = '';
            }
            echo '<p class="text-right" tabindex="0">' . $footer[$ID][3] . '</p>';
            //echo '<p class="text-right"> <a href="'.$urlidioma .'?i=EN"><img class="selidioma '.$idativo2 .'" src="../images/principal/us_flag.png" alt="Idioma Ingles"></a>';
            //echo '<a href="'.$urlidioma .'?i=PT"><img class="selidioma '.$idativo1 .'" src="../images/principal/brazil_flag.png" alt="Idioma Portugues"></a>';
            //echo '<a href="'.$urlidioma .'?i=ES"><img class="selidioma '.$idativo3 .'" src="../images/principal/spain_flag.png" alt="Idioma Espanhol"></a></p>';
 
            echo '<p class="text-right"> ';
            echo '<a href="../imports/session.php?idioma=EN&url='.$urlidioma .'"><img class="selidioma '.$idativo2 .'" src="../images/principal/us_flag.png" alt="Inglês"></a>';
            echo '<a href="../imports/session.php?idioma=PT&url='.$urlidioma .'"><img class="selidioma '.$idativo1 .'" src="../images/principal/brazil_flag.png" alt="Português"></a>';
            echo '<a href="../imports/session.php?idioma=ES&url='.$urlidioma .'"><img class="selidioma '.$idativo3 .'" src="../images/principal/spain_flag.png" alt="Espanhol"></a></p>';
            ?>
          </div>
        </div>
      </div>
      <div class="row copy">
        <div class="col-12">
          <p tabindex="0" tabindex="0"><small> <?php echo $footer[$ID][2] ?></small> </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Importanto os JavaScripts  -->
    <script src="../js/jquery-3.3.1.min.js"> </script>
    <script src="../js/bootstrap.min.js"> </script>
    <script src="../js/nosso-js.js"> </script>
