<?php
//matrix com os idiomas utilizados na pagina usar $ID para os Vetores EX: <?php echo $jazz[$ID][2]>
$jazz_pt = array("JAZZ");
$jazz_en = array("JAZZ");
$jazz_es = array("JAZZ");
$jazz = array('PT' => $jazz_pt, 'EN' => $jazz_en, 'ES' => $jazz_es);

//tag<title>  Titulo das paginas;
$titlePagina = array('PT' => "Jazz | Marcos", 'EN' => "Jazz | Mark", 'ES' => "Jazz | Hitos");

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
  <!-- menu da pagina -->
  <?php
  //importando o menu da pagina 
  include('../imports/menu-secundario.php');
  ?>
  <!-- Conteudo da pagina  -->
  <main id="content">


  </main>
  <!-- footer da pagina -->
  <?php
  //importando o footer da pagina 
  include('../imports/footer-secundario.php');
  ?>
</body>

</html>
