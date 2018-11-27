<?php
$sertanejo_pt = array("Lançamentos da Semana", "Álbum", "Música", "Cantor");
$sertanejo_en = array("New Releases", "Album", "Music", "Singer");
$sertanejo_es = array("Lanzamientos de la Semana", "Álbum", "Música", "Cantante");
$sertanejo = array('PT' => $sertanejo_pt, 'EN' => $sertanejo_en, 'ES' => $sertanejo_es);
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
  <body class="lancamento">
    <!--importandoo menu da pagina -->
    <?php
    include('../imports/menu-secundario.php');
    ?>
    <!-- conteudo da pagina -->
    <div class="container mt-4 mb-4">
      <article class="lanc-sert">
        <div class="row justify-content-md-center">
          <div class="col-md-6 shadow-sm bg-light rounded">
            <header class="text-center">
              <figure class="pt-2 figure">
                <?php
                date_default_timezone_set('America/Sao_Paulo');
                  // echo date('s');
                if (date('s') >= 30) {
                  echo '<img id="img-lancamento" src="../images/sertanejo/lancamento-01.jpg" class="shadow figure-img img-fluid rounded" alt="CD Luan Santana">';
                  echo '<figcaption class="text-left figure-caption"><strong>Sofazinho</strong> <br>Luan Santana</figcaption>';
                } else {
                  echo '<img id="img-lancamento" src="../images/principal/home-8.jpg" class="shadow figure-img img-fluid rounded" alt="CD Zé Neto & Cristiano">';
                  echo '<figcaption class="text-left figure-caption"><strong>Status Que Eu Não Queria</strong> <br>Zé Neto & Cristiano</figcaption>';
                }
                ?>
              </figure>
            </header>
            <h1 class="text-center h3"><?php echo $sertanejo[$ID][0] ?></h1>
            <table class="table table-borderless text-center">
              <thead>
                <tr>
                  <th scope="col"><?php echo $sertanejo[$ID][1] ?></th>
                  <th scope="col"><?php echo $sertanejo[$ID][2] ?></th>
                  <th scope="col"><?php echo $sertanejo[$ID][3] ?></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row"><img src="../images/sertanejo/michel1.jpg" class="rounded shadow" alt="CD Michael Telo"></th>
                  <td class="align-middle lead">Por Trás da Maquiagem</td>
                  <td class="align-middle text-muted">Michel Teló</td>
                </tr>
                <tr>
                  <th scope="row"><img src="../images/sertanejo/lancamento-02.jpg" class="rounded shadow" alt="CD Marília Mendonça"></th>
                  <td class="align-middle lead">Bem Pior Que Eu</td>
                  <td class="align-middle text-muted">Marília Mendonça</td>
                </tr>
                <tr>
                  <th scope="row"><img src="../images/sertanejo/lancamento-03.jpg" class="rounded shadow" alt="CD Paula Fernandes"></th>
                  <td class="align-middle lead">Eu sem você</td>
                  <td class="align-middle text-muted">Paula Fernandes</td>
                </tr>
                <tr>
                  <th scope="row"><img src="../images/sertanejo/lancamento-04.jpg" class="rounded shadow" alt="CD Daniel"></th>
                  <td class="align-middle lead">Meu Reino Encantado</td>
                  <td class="align-middle text-muted">Daniel</td>
                </tr>
                <tr>
                  <th scope="row"><img src="../images/sertanejo/lancamento-05.jpg" class="rounded shadow" alt="CD Gusttavo Lima"></th>
                  <td class="align-middle lead">Apelido Carinhoso</td>
                  <td class="align-middle text-muted">Gusttavo Lima</td>
                </tr>
                <tr>
                  <th scope="row"><img src="../images/sertanejo/michel1.jpg" class="rounded shadow" alt="CD Michael Telo"></th>
                  <td class="align-middle lead">Por Trás da Maquiagem</td>
                  <td class="align-middle text-muted">Michel Teló</td>
                </tr>
                <tr>
                  <th scope="row"><img src="../images/sertanejo/lancamento-02.jpg" class="rounded shadow" alt="CD Marília Mendonça"></th>
                  <td class="align-middle lead">Bem Pior Que Eu</td>
                  <td class="align-middle text-muted">Marília Mendonça</td>
                </tr>
                <tr>
                  <th scope="row"><img src="../images/sertanejo/lancamento-03.jpg" class="rounded shadow" alt="CD Paula Fernandes"></th>
                  <td class="align-middle lead">Eu sem você</td>
                  <td class="align-middle text-muted">Paula Fernandes</td>
                </tr>
                <tr>
                  <th scope="row"><img src="../images/sertanejo/lancamento-04.jpg" class="rounded shadow" alt="CD Daniel"></th>
                  <td class="align-middle lead">Meu Reino Encantado</td>
                  <td class="align-middle text-muted">Daniel</td>
                </tr>
                <tr>
                  <th scope="row"><img src="../images/sertanejo/lancamento-05.jpg" class="rounded shadow" alt="CD Gusttavo Lima"></th>
                  <td class="align-middle lead">Apelido Carinhoso</td>
                  <td class="align-middle text-muted">Gusttavo Lima</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </article>
    </div>
    <!-- importando o footer da pagina -->
    <?php
    include('../imports/footer-secundario.php');
    ?>
  </body>
</html>
