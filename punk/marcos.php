<?php
$punk_pt = array("Marcos");
$punk_en = array("Marck");
$punk_es = array("Marcas");
$punk = array('PT' => $punk_pt, 'EN' => $punk_en, 'ES' => $punk_es);

?>
 <?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
 <!DOCTYPE html>
 <html lang ="<?php echo $lang?>">
   <?php
   //importando o head da pagina
     include('../imports/head.php');

    ?>

<body class="corpopunk">
    <?php
    include('../imports/menu-secundario.php')
    
    ?>

    <article>

        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-white">
                    <h4 ><?php echo $punk[$ID][0] ?></h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed nec tellus auctor, vehicula diam vel, faucibus sapien. Morbi dictum, dui et vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis. Pellentesque in risus vestibulum sem lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. Mauris tincidunt elit nec ex sagittis laoreet. Vestibulum sed mattis dui. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus.</p>

                </div>
                <div class="col-lg-3">


                    <img alt="#" class="img-fluid" src="../images/punk/homemulheres.jpg">
                </div>

            </div>


        </div>


        <div class="container">
            <div class="row linha-punk">

                <div class="col-lg-3">


                    <img alt="#" class="img-fluid" src="../images/punk/homemulheres.jpg">
                </div>
                <div class="col-lg-9 text-white">


                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed nec tellus auctor, vehicula diam vel, faucibus sapien. Morbi dictum, dui et vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis. Pellentesque in risus vestibulum sem lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus. lacinia dictum vitae quis leo. Phasellus nulla erat, fringilla in tortor quis, convallis egestas urna. Sed semper ante sit amet est vestibulum, eu maximus arcu cursus.</p>

                </div>
            </div>
        </div>

    </article>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


    <?php
    include('../imports/footer-secundario.php')
    
    ?>

</body>



</html>
