<?php
//Arrays com os idiomas da pagina
$indicacoes_pt = array("Nossas Indicações", "Logo da Coca-Cola FM. O logo contém um desenho de uma garrafa com o nome coca-cola nela.", "Logo da Kiss FM. O logo contém um círculo que no meio se encontra o nome kiss fm, abaixo do nome, o número 102.1 fm e ao lado esquerdo o desenho de uma guitarra.", "Logo da 89 a Rádio Rock. O logo contém o número 89 grande e o texto a rádio rock ao lado do número.", "Logo Rádio MIX FM. O logo contém um círculo e dentro o nome mix, dentro de faixas pretas abaixo do nome o número da rádio 106.3 fm e logo abaixo do número da rádio o local que se encontra a rádio que é em são paulo.");
$indicacoes_en = array("Our Indications", "Logo of Coca-Cola FM. The logo contains a drawing of a bottle with the name coca-cola in it.", "Kiss FM Logo. The logo contains a circle that in the middle is the name kiss fm, below the name, the number 102.1 fm and to the left the drawing of a guitar.", "Logo of 89 to Radio Rock. The logo contains the big number 89 and the rock radio text next to the number.", "Logo Radio MIX FM. The logo contains a circle and inside the name mix, in black bands under the name the radio number 106.3 fm and the place are paulo just below the number.");
$indicacoes_es = array("Nuestras indicaciones", "Logo de Coca-Cola FM. El logo contiene un dibujo de una botella con el nombre coca-cola en ella.", "Logotipo de Kiss FM. El logo contiene un círculo que en el medio es el nombre kiss fm, debajo del número 102.1 fm ya la izquierda el dibujo de una guitarra.", "Logo del 89 a Radio Rock. El logotipo contiene el número grande 89 y el texto de radio de rock junto al número.", "Logo Radio MIX FM. El logo contiene un círculo y dentro el nombre mix, dentro de bandas negras debajo del nombre el número de la radio 106.3 fm y el local son paulo justo debajo del número.");
$indicacoes = array('PT' => $indicacoes_pt, 'EN' => $indicacoes_en, 'ES' => $indicacoes_es);
?>
<?php
//PHP para verificar qual o idioma do html
include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<?php
include('imports/head.php');
?>

<body>
  <!-- Importanto menu da página -->
  <?php
  include('imports/menu.php');
  ?>
  <!-- Conteúdo do página -->
  <main id="content">
    <div class="container mt-2 mb-3">
      <div class="row">
        <div class=" mt-1 col-md-6">
          <article>
            <h1 tabindex="0"><?php echo $indicacoes[$ID][0] ?></h1>
            <p tabindex="0">Aqui estão as rádios que nos indicamos para você:</p>
            <p>* Rádio FM Coca-cola</p>s
            <p>* Rádio FM Kiss-Online<p>
            <p>* Rádio Rock FM-Online</p>
            <p>* Rádio Mix-FM</p>
            <p>Contamos com a colaboração dessas rádios para sempre manter as informações de músicas e notícias atualizadas no site ou vice-versa. Diante disso todas elas são muito recomendadas por todos os integrantes do site!</p>
            <p>Acesse os canais online de cada uma e curta todas os sons e novidades do mundo da música!</p>
          </article>
        </div>
        <div class="col-md-6 mt-1">
          <div id="baner-indica" class="container-fluid">
            <aside>
              <div class="row no-gutters caixaindiq caixa-1">
                <div class="col-6 col-md-4">
                  <div>
                    <img src="images/principal/logo_coca.png" alt="<?php echo $indicacoes[$ID][1] ?>" tabindex="0">
                  </div>
                </div>
                <div class="col-6 col-md-8 texto-indiq">
                  <p tabindex="0">Coca-Cola FM Online</p>
                </div>
              </div>
              <div class="row no-gutters caixaindiq caixa-2">
                <div class="col-6 col-md-4">
                  <div>
                    <img src="images/principal/logo_kiss.png" alt="<?php echo $indicacoes[$ID][2] ?>" tabindex="0">
                  </div>
                </div>
                <div class="col-6 col-md-8 texto-indiq">
                  <p tabindex="0">Kiss FM Online</p>
                </div>
              </div>
              <div class="row no-gutters caixaindiq caixa-3">
                <div class="col-6 col-md-4">
                  <div>
                    <img src="images/principal/logo-rock.png" alt="<?php echo $indicacoes[$ID][3] ?>" tabindex="0">
                  </div>
                </div>
                <div class="col-6 col-md-8 texto-indiq">
                  <p tabindex="0">89 FM Online</p>
                </div>
              </div>
              <div class="row no-gutters caixaindiq caixa-4">
                <div class="col-6 col-md-4">
                  <div>
                    <img src="images/principal/logo-mix.png" alt="<?php echo $indicacoes[$ID][4] ?>" tabindex="0">
                  </div>
                </div>
                <div class="col-6 col-md-8 texto-indiq">
                  <p tabindex="0">Radio MIX FM</p>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Importando footer da página -->
  <?php
  include('imports/footer.php');
  ?>
</body>

</html>
