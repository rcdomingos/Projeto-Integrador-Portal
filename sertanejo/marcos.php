<?php
$sertanejo_pt = array("Os Fatos que Marcaram a Música", "Anterior", "Próximo");
$sertanejo_en = array("The Facts That Marked Music", "Previous", "Next");
$sertanejo_es = array("Los hechos que marcaron la música", "Anterior", "Siguiente");
$sertanejo = array('PT' => $sertanejo_pt, 'EN' => $sertanejo_en, 'ES' => $sertanejo_es);
// print_r($sertanejo);
//usar $ID para os Vetores
?>
<?php
 //PHP para verificar qual o idioma do html
include('../imports/idioma.php');
?>
 <!DOCTYPE html>
 <html lang ="<?php echo $lang ?>">
  <?php
   //importando o head da pagina
  include('../imports/head.php');
  ?>
  <body>
    <!--importandoo menu da pagina -->
    <?php
    include('../imports/menu-secundario.php');
    ?>
    <!-- conteudo da pagina -->
    <div class="container mt-4 mb-4">
      <div class="row">
        <div class="col text-center">
          <header>
            <h1><?php echo $sertanejo[$ID][0] ?></h1>
          </header>
          <div class="popup-gallery">
            <a href="../images/sertanejo/destaques-1.jpg" title="lorem Ipsum -1970"><img src="../images/sertanejo/destaques-1.jpg" class="bk-color" width="200" height="150"></a>
            <a href="../images/sertanejo/destaques-2.jpg" title="lorem Ipsum -1977"><img src="../images/sertanejo/destaques-2.jpg" width="200" height="150"></a>
            <a href="../images/sertanejo/destaques-3.jpg" title="lorem Ipsum -1990"><img src="../images/sertanejo/destaques-3.jpg" width="200" height="150"></a>
            <a href="../images/sertanejo/destaques-4.jpg" title="lorem Ipsum -1995"><img src="../images/sertanejo/destaques-4.jpg" width="200" height="150"></a>
            <a href="../images/principal/carrossel-04.jpg" title="lorem Ipsum -2000"><img src="../images/principal/carrossel-04.jpg" width="200" height="150"></a>
          </div>
        </div>
      </div>
    </div>
    <!-- importando o footer da pagina -->
    <?php
    include('../imports/footer-secundario.php');
    ?>
    <!--Scripts JS para efeitos do Magnific Popup -->
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
      	$('.popup-gallery').magnificPopup({
      		delegate: 'a',
      		type: 'image',
      		tLoading: 'Loading image #%curr%...',
      		mainClass: 'mfp-img-mobile',
      		gallery: {
      			enabled: true,
      			navigateByImgClick: true,
      			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      		},
      		image: {
      			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
      			titleSrc: function(item) {
      				return item.el.attr('title') + '<small>Fatos Importantes</small>';
      			}
      		}
      	});
      });
    </script>
  </body>
</html>
