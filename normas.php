<?php
$normas_pt = array("Voltar ao topo");
$normas_en = array("Back to the top");
$normas_es = array("Volver al principio");
$normas = array('PT' => $normas_pt, 'EN' => $normas_en, 'ES' => $normas_es);
?>
<?php
//PHP para verificar qual o idioma do html
include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<?php
//importando o head da pagina
include('imports/head.php');
?>

<body>
  <!--importandoo menu da pagina -->
  <?php
  include('imports/menu.php');
  ?>
  <!-- conteudo da pagina -->
  <main id="content">
    <div class="container">

      <div class="row mt-3">
        <div class="col">
          <h1 class="text-center" tabindex="0">
            <?php
            if ($ID == 'PT') {
              echo "Normas do Site";
            }
            if ($ID == 'EN') {
              echo "Site Rules";
            }
            if ($ID == 'ES') {
              echo "Normas Del Sitio";
            } ?>
          </h1>
        </div>
      </div>
      <div class="row mt-3 mb-3">
        <div class="col-6">
          <p tabindex="0">1ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
          <p tabindex="0">2ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
          <p tabindex="0">3ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
          <p tabindex="0">4ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
          <p tabindex="0">5ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
          <p tabindex="0">6ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
          <p tabindex="0">7ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
          <p tabindex="0">8ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
          <p tabindex="0">9ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
          <p tabindex="0">10ª Loremipsum dolorsit ametconsecetiam ollis euismod dolorsitollis.</p>
        </div>
        <div class="col-6">
          <h3 tabindex="0">Ecletic.Music</h3>
          <p tabindex="0">Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit, tiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.</p>
        </div>
      </div>
    </div>
  </main>
  <!-- importando o footer da pagina -->
  <?php
  include('imports/footer.php');
  ?>
</body>

</html>
