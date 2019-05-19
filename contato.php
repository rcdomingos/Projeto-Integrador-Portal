
<?php
$contato_pt = array("Portal de Musica", "Fale Conosco", "Telefone", "Mensagem", "Formulario", "Clique e Preencha",
  "Endereço de email","Nome","Sobrenome","Enviar","Limpar","Seu email","Desenho representativo de uma pessoa.");
$contato_en = array("Music Portal", "Contact Us", "Telephone", "Message", "Form", "Click and Fill in",
  "Email Address", "First Name", "Last Name", "Send", "Clear","Your email","Representative drawing of a person.");
$contato_es = array("Portal de Musica", "Contáctenos", "Teléfono", "Mensaje", "Formulario", "Haga Clic y Rellene",
  "Dirección de correo electrónico", "Nombre", "Apellido", "Enviar", "Borrar","Su correo electrónico","Dibujo representativo de una persona.");
$contato = array('PT' => $contato_pt, 'EN' => $contato_en, 'ES' => $contato_es);
?>
<?php
//PHP para verificar qual o idioma do html
include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang ="<?php echo $lang ?>">
<!--head-->
<?php
include('imports/head.php');
?>
<body class="contatinho">
    <!-- Menu -->
    <?php
    include('imports/menu.php');
    ?>
    <header>
    <?php
        //alterar a cor do background de acordo o numero gerado
    $numbk = rand(1, 10);
    if ($numbk >= 1 and $numbk < 4) {
      $corbk = "header-contato-bg";
    } elseif ($numbk >= 5 and $numbk < 8) {
      $corbk = "header-contato-bg-2";
    } else {
      $corbk = "header-contato-bg-3";
    }
    ?>
      <div id ="hed-contato" class="container">
        <div class="row no-gutters">
          <div class="col-12 header-contato text-center <?php echo $corbk ?> ">
            <div id="sombra">
            <div id="header-cont" class="header-contato">
            </div>
            </div>
            <div class="contato mx-auto">
              <!-- Circulo Transparente + Foto -->
              <img class="mx-auto" src="images/principal/user-solid.svg" tabindex="0" alt="<?php echo $contato[$ID][12];?>">
            </div>
          </div>
        </div>
        <div class="row linha2">
          <div class="col-12 text-center">
            <!-- Título e Sub -->
            <!--  -->
            <h2 tabindex="0"><?php echo $contato[$ID][0]; ?></h2>
            <p tabindex="0"><?php echo $contato[$ID][1]; ?></p>
          </div>
        </div>
      </div>
    </header>
    <!-- Primeira Linha de Quadrados -->
    <div class="container mb-4">
      <div class="row justify-content-center text-center">
        <div class="col-6 col-lg-4 m-n1 text-center ">
          <section class="cx-contato">
            <div class="icone-contato"><i class="fas fa-phone"></i></div>
            <div class="texto-contato">
              <h3 tabindex="0"><?php echo $contato[$ID][2]; ?></h3>
              <p tabindex="0">+55 11 1234 5678</p>
            </div>
          </section>
        </div>
        <div class="col-6 col-lg-4 m-n1 text-center align-middle">
          <section class="cx-contato">
            <div class="icone-contato"><i class="fas fa-envelope"></i></div>
            <div class="texto-contato">
              <h3 tabindex="0">E-mail</h3>
              <p tabindex="0">contato@ecletic.music.com </p>
            </div>
          </section>
        </div>
      </div>
      <div class="row mt-sm-4 justify-content-center text-center">
        <div class="col-6 col-lg-4 m-n1 text-center">
          <section class="cx-contato">
            <div class="icone-contato"><i class="fas fa-comment"></i></div>
            <div class="texto-contato">
              <h3 tabindex="0"><?php echo $contato[$ID][3]; ?></h3>
              <p tabindex="0">+55 11 1234 5678</p>
            </div>
          </section>
        </div>
        <div class="col-6 col-lg-4 m-n1 text-center">
          <a data-toggle="collapse" href="#fomulario"
          role="button" aria-expanded="false" aria-controls="fomulario">
            <section class="cx-contato">
              <div class="icone-contato"><i class="fas fa-comment-alt"></i></div>
              <div class="texto-contato">
                <h3><?php echo $contato[$ID][4]; ?></h3>
                <p><?php echo $contato[$ID][5]; ?></p>
              </div>
            </section>
          </a>
        </div>
        <div class="col-12 col-lg-8 mt-5">
          <form class="collapse" id="fomulario" name="formulario" method="post" action="formulario.php">
            <div class=" form-group">
              <label class="text-white"><?php echo $contato[$ID][6]; ?></label>
              <input type="email" class="form-control" name="email" placeholder="<?php echo $contato[$ID][11]; ?>">
            </div>
            <div class="form-row">
              <div class="col">
                <label class="text-white"><?php echo $contato[$ID][7]; ?></label>
                <input type="text" class="form-control" name="nome" placeholder="<?php echo $contato[$ID][7]; ?>">
              </div>
              <div class="col">
                <label class="text-white"><?php echo $contato[$ID][8]; ?></label>
                <input type="text" class="form-control" name ="sobrenome" placeholder="<?php echo $contato[$ID][8]; ?>">
              </div>
            </div>
            <div class="form-group mt-3">
              <label class="text-white"><?php echo $contato[$ID][3]; ?></label>
              <textarea class="form-control" rows="3"> </textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary" name="btn-enviar"><?php echo $contato[$ID][9]; ?></button>
              <button type="reset" class="btn btn-roxo" name="btn-limpar"><?php echo $contato[$ID][10]; ?></button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php
    include('imports/footer.php');
    ?>
</body>
</html>