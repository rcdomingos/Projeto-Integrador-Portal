<?php
//Arrays com os idiomas da pagina
$ranking_pt = array("semanal", "mensal", "anual", "Desenho de uma estrela", "As 10 músicas mais escutadas da semana. A imagem ilustra vários quadrados empilhados em sequência. Existem algumas pilhas altas e outras baixas.", "As 10 músicas mais escutadas do mês. Possui a mesma imagem que a anterior.", "As 10 músicas mais escutadas do ano. Possui a mesma imagem que a anterior.");
$ranking_en = array("weekly", "monthly", "annual", "drawing of a star", "The 10 most listened songs of the week. The image illustrates several squares stacked in sequence, with some ups and downs. ", " The 10 most listened songs of the month, it has the same image as the interior. ", " The 10 most listened songs of the year, it has the same image as the interior. ");
$ranking_es = array("semanal", "mensuales", "anual", "Diseño de una estrella", "Las 10 canciones más escuchadas de la semana. La imagen ilustra varios cuadrados apilados en secuencia, con algunos altibajos. ", "Las 10 canciones más escuchadas del mes. Tiene la misma imagen que el interior. ", " Las 10 canciones más escuchadas del año. Tiene la misma imagen que el interior. ");
$ranking = array('PT' => $ranking_pt, 'EN' => $ranking_en, 'ES' => $ranking_es);
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
    <div class="container mb-4">
      <article class="art-ranking">
        <div class="row">
          <div class="col-6 col-lg-2 pt-4 text-center">
            <img src="images/principal/ranking.png" alt="<?php echo $ranking[$ID][4] ?>" tabindex="0" class="img-fluid">
            <h2 class="tt-rank" tabindex="0">Top <img src="images/principal/star-solid.png" alt="<?php echo $ranking[$ID][3] ?>"> 10
              <?php echo $ranking[$ID][0] ?>
            </h2>
          </div>
          <div class="col-6 col-lg-2 pt-4" tabindex="0">
            <ol>
              <li><strong>Shallow now - Lady Gaga(with Badley Cooper)</strong></li>
              <li><strong>Perfect - Ed Sheeran</strong></li>
              <li><strong>7 rings - Ariana Grande</strong></li>
              <li class="text-secondary">Man Down - Rihanna</li>
              <li class="text-secondary">Without me - Helsey</li>
              <li class="text-secondary">All of me - John Legend</li>
              <li class="text-secondary">A thousand years - Christina Perri</li>
              <li class="text-secondary">Photography - Ed Sheeran</li>
              <li class="text-secondary">Believer - Imagine Dragons</li>
              <li class="text-secondary">Say ou won't let go - James Arthur</li>
            </ol>
          </div>
          <div class="col-6 col-lg-2 pt-4 text-center bg-mobile">
            <img src="images/principal/ranking.png" alt="<?php echo $ranking[$ID][5] ?>" tabindex="0" class="img-fluid">
            <h2 class="tt-rank" tabindex="0">Top <img src="images/principal/star-solid.png" alt="<?php echo $ranking[$ID][3] ?>"> 10
              <?php echo $ranking[$ID][1] ?>
            </h2>
          </div>
          <div class="col-6 col-lg-2 pt-4 bg-mobile" tabindex="0">
            <ol>
              <li><strong>Bored - Billie Eilish</strong></li>
              <li><strong>Cheap thrills - SIA </strong></li>
              <li><strong>Knee socks - Arctic Monkeys</strong></li>
              <li class="text-secondary">Girls like you - Maroon 5</li>
              <li class="text-secondary">Bad guy - Billie Eilish</li>
              <li class="text-secondary">Too good at goodbyes - Sam Smith</li>
              <li class="text-secondary">Naked - James Arthur</li>
              <li class="text-secondary">The scientist - Coldplay</li>
              <li class="text-secondary">High hopes - Panic! At The Disco</li>
              <li class="text-secondary">Someone like you - Adele</li>
            </ol>
          </div>
          <div class="col-6 col-lg-2 text-center pt-4">
            <img src="images/principal/ranking.png" alt="<?php echo $ranking[$ID][6] ?>" tabindex="0" class="img-fluid">
            <h2 class="tt-rank" tabindex="0">Top <img src="images/principal/star-solid.png" alt="<?php echo $ranking[$ID][3] ?>"> 10
              <?php echo $ranking[$ID][2] ?>
            </h2>
          </div>
          <div class="col-6 col-lg-2 pt-4" tabindex="0">
            <ol>
              <li><strong>Arabella - Arctic Monkeys</strong></li>
              <li><strong>I wanna be yours - Arctic Monkeys</strong></li>
              <li><strong>Stop the world I wanna get out with you - Arctic Monkeys</strong></li>
              <li class="text-secondary">Bohemian rhapsody - Queen</li>
              <li class="text-secondary">Shape of you - Ed Sheeran</li>
              <li class="text-secondary">Bad liar - Imagine Dragons</li>
              <li class="text-secondary">Let her go - Passenger</li>
              <li class="text-secondary">Ocean eyes - Billie Eilish</li>
              <li class="text-secondary">Do I wanna know? - Arctic Monkeys</li>
              <li class="text-secondary">Demons - Imagine Dragons</li>
            </ol>
          </div>
        </div>
      </article>
    </div>
  </main>
  <!-- importando o footer da pagina -->
  <?php
  include('imports/footer.php');
  ?>
</body>

</html>
