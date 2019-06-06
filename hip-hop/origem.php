<?php
$hiphop_pt = array("Origem", "PARCERIAS", "SHOWS", "ACONTECIMENTOS", "CURIOSIDADES", "NOVIDADES", "EVENTOS", "A Origem do Hip-Hop. O hip-hop surgiu na década de 70 como um movimento cultural entre os latino-americanos, os jamaicanos e os afro-americanos da cidade de Nova York mais precisamente no sul do Bronx. O disc-jockey Afrika Bambaataa é considerado como o pioneiro e criador deste movimento social altamente influente.");
$hiphop_en = array("Origin", "PARTNERSHIPS", "SHOWS", "DOINGS", "CURIOSITIES", "NEWS", "EVENTS", "The Origin of Hip-Hop. Hip-hop emerged in the 1970s as a cultural movement among Latin Americans, Jamaicans and African-Americans in New York City, more precisely in the southern Bronx. The disc-jockey Afrika Bambaataa is considered as the pioneer and creator of this highly influential social movement.");
$hiphop_es = array("Fuente", "ASOCIACIONES", "ESPECTÁCULOS", "EVENTOS", "DATOS CURIOSOS", "NOTICIAS", "EVENTOS", "El Origen del Hip-Hop. El hip-hop surgió en la década de 1970 como un movimiento cultural entre los latinoamericanos, los jamaicanos y los afroamericanos de la ciudad de Nueva York más precisamente en el sur del Bronx. El disc jockey Afrika Bambaataa es considerado como el pionero y creador de este movimiento social altamente influyente.");
$hiphop = array('PT' => $hiphop_pt, 'EN' => $hiphop_en, 'ES' => $hiphop_es);
// print_r($sertanejo);
//usar $ID para os Vetores
//tag<title>  Titulo das paginas;
$titlePagina = array('PT' => "Hip Hop | Pagina inicial", 'EN' => "Hip Hop | Home", 'ES' => "Hip Hop | Pagina principal");

?>
<?php
//PHP para verificar qual o idioma do html
include('../imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<?php
//importando o head da pagina
include('../imports/head.php');
?>

<body>
  <!--importandoo menu da pagina -->
  <?php
  include('../imports/menu-secundario.php');
  ?>
  <main id="content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="container-fluid">
            <div class="row" tabindex="0">
              <div class="col-12 mt-4 mb-2">
                <h1 id="preto" class="text-white text-center font-italic font-weight-bold"><?php echo $hiphop[$ID][0] ?></h1>
              </div>
            </div>
            <div class="row">
              <img src="../images/hip-hop/capa.jpg" class="rounded mx-auto d-block mt-4" alt="">
              <div class="mt-4">
                <p class="text-center mt-4"><?php echo $hiphop[$ID][7] ?></p>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-4 mt-4 mb-4">
                <div class="shadow p-3 mb-5 bg-white rounded">
                  <h4 class="text-center" tabindex="0"><?php echo $hiphop[$ID][1] ?></h4>
                </div>
                <img src="../images/hip-hop/home2.jpg" class="img-fluid mb-4" alt="imagem hiphop">
              </div>
              <div class="col-sm-4 mt-4 mb-4">
                <div class="shadow p-3 mb-5 bg-white rounded">
                  <h4 class="text-center" tabindex="0"><?php echo $hiphop[$ID][2] ?></h4>
                </div>
                <img src="../images/hip-hop/origem.jpg" class="img-fluid mb-4" alt="imagem hiphop">
              </div>
              <div class="col-sm-4 mt-4 mb-4">
                <div class="shadow p-3 mb-5 bg-white rounded">
                  <h4 class="text-center" tabindex="0"><?php echo $hiphop[$ID][3] ?></h4>
                </div>
                <img src="../images/hip-hop/home1.jpg" class="img-fluid mb-4" alt="imagem hiphop">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 mt-4 mb-4">
                <div class="shadow p-3 mb-5 bg-white rounded">
                  <h4 class="text-center" tabindex="0"><?php echo $hiphop[$ID][4] ?></h4>
                </div>
                <img src="../images/hip-hop/home1.jpg" class="img-fluid mb-4" alt="imagem hiphop">
              </div>
              <div class="col-sm-4 mt-4 mb-4">
                <div class="shadow p-3 mb-5 bg-white rounded">
                  <h4 class="text-center" tabindex="0"><?php echo $hiphop[$ID][5] ?></h4>
                </div>
                <img src="../images/hip-hop/home2.jpg" class="img-fluid mb-4" alt="imagem hiphop">
              </div>
              <div class="col-sm-4 mt-4 mb-4">
                <div class="shadow p-3 mb-5 bg-white rounded">
                  <h4 class="text-center" tabindex="0"><?php echo $hiphop[$ID][6] ?></h4>
                </div>
                <img src="../images/hip-hop/origem.jpg" class="img-fluid mb-4" alt="Imagem hiphop">
              </div>
            </div>
          </div>
  </main>
  </div>
  </div>
  </div>
</body>
<!-- importando o footer da pagina -->
<?php
include('../imports/footer-secundario.php');
?>

</html>
