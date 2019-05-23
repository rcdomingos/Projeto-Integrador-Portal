<?php
$formulario_pt = array("Seus dados foram enviados com sucesso","Sua mensagem foi entregue para a nossa equipe!","Voltar","Voltar ao topo","Email incorreto, preencha novamente.","Olá, ");
$formulario_en = array("Your data was successfully sent", "Your message was delivered to our team!", "Back", "Back to the top","Incorrect email, fill it again.", "Hello, ");
$formulario_es = array("Sus datos se enviaron con éxito", "Su mensaje fue entregado a nuestro equipo!", "Volver", "Volver al principio","Correo electrónico incorrecto, rellene de nuevo.", "Hola, ");
$formulario = array('PT' => $formulario_pt, 'EN' => $formulario_en, 'ES' => $formulario_es);
?>
<?php
//PHP para verificar qual o idioma do html
  include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
  //importando o head da pagina
    include('imports/head.php');
  ?>

<body>
    <!--importandoo menu da pagina -->
    <?php
      include('imports/menu.php');
    ?>
<main id="content">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title>Fomulário</title>
    <h3 class="text-black bg-white text-center font-italic font-weight-bold mt-4"  tabindex="0"><?php echo $formulario[$ID][0]?></h3>
    <div class="text-center mt-2 mb-4">
        <?php
	$nome = explode(" ", $_POST['nome']);
    $sobrenome = explode(" ", $_POST['sobrenome']);
	echo "<?php echo $formulario[$ID][5]?>, <b> $nome[0] $sobrenome[0]</b>. <br><br><?php echo $formulario[$ID][1]?><br><br>";
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))	 {
		echo '<?php echo $formulario[$ID][4]?>';
	 }
?>
        <br>
        <img src="images/principal/LOGO.svg" width="200" height="200" alt="Logo do Site">
        <br><br>
        <button type="button" value="voltar" class="btn btn-secondary btn-lg" onclick="window.history.back();"><?php echo $formulario[$ID][2]?></button>
    </div>
    </main>
    <!-- importando o footer da pagina -->
    <?php
      include('imports/footer.php');
    ?>
</body>

</html>
