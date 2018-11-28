<?php
  $hiphop_pt = array("Origem","PARCERIAS","SHOWS","ACONTECIMENTOS","CURIOSIDADES","NOVIDADES","EVENTOS");
  $hiphop_en = array("Origin","PARTNERSHIPS","SHOWS","DOINGS","CURIOSITIES","NEWS","EVENTS");
  $hiphop_es = array("Fuente", "ASOCIACIONES", "ESPECTÁCULOS", "EVENTOS", "DATOS CURIOSOS", "NOTICIAS", "EVENTOS");
  $hiphop = array('PT'=> $hiphop_pt,'EN' => $hiphop_en, 'ES' => $hiphop_es);
// print_r($sertanejo);
//usar $ID para os Vetores
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
<body>
  <!--importandoo menu da pagina -->
  <?php
    include('../imports/menu-secundario.php');
  ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <main>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 mt-4 mb-2">
                                    <h1 class="text-white bg-dark text-center font-italic font-weight-bold"><?php echo $hiphop[$ID][0]?></h1>
                            </div>
                        </div>
                        <div class="row">

                                <img src="../images/hip-hop/capa.jpg" class="rounded mx-auto d-block mt-4" alt="Responsive image">

                            <div class="mt-4">
                                <p class="text-center mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin urna nec vestibulum pellentesque. Ut leo felis, malesuada quis nunc id, ornare aliquam dolor. Cras sed felis pretium ex sollicitudin fermentum. Donec ultricies felis sed consectetur accumsan. Proin libero ante, consequat sit amet justo id, sodales congue ipsum. Sed condimentum ante eget ex imperdiet pretium. Ut pretium nisl lacinia leo ultrices commodo. Curabitur neque lacus, elementum ut nisl et, tristique lobortis mi. Nunc consectetur fermentum erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin urna nec vestibulum pellentesque. Ut leo felis, malesuada quis nunc id, ornare aliquam dolor. Cras sed felis pretium ex sollicitudin fermentum. Donec ultricies felis sed consectetur accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin urna nec vestibulum pellentesque. Ut leo felis, malesuada quis nunc id, ornare aliquam dolor. Cras sed felis pretium ex sollicitudin fermentum. Donec ultricies felis sed consectetur accumsan.</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-4 mt-4 mb-4">
                                <div class="shadow p-3 mb-5 bg-white rounded">
                                <h4 class="text-center"><?php echo $hiphop[$ID][1]?></h4>
                                </div>
                                <img src="../images/hip-hop/home2.jpg" class="img-fluid mb-4" alt="Responsive image">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin urna nec vestibulum pellentesque. Ut leo felis, malesuada quis nunc id, ornare aliquam dolor. Cras sed felis pretium ex sollicitudin fermentum. Donec ultricies felis sed consectetur accumsan.</p>
                            </div>

                            <div class="col-sm-4 mt-4 mb-4">
                                <div class="shadow p-3 mb-5 bg-white rounded">
                                <h4 class="text-center"><?php echo $hiphop[$ID][2]?></h4>
                                </div>
                                <img src="../images/hip-hop/origem.jpg" class="img-fluid mb-4" alt="Responsive image">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin urna nec vestibulum pellentesque. Ut leo felis, malesuada quis nunc id, ornare aliquam dolor. Cras sed felis pretium ex sollicitudin fermentum. Donec ultricies felis sed consectetur accumsan.</p>
                            </div>
                            <div class="col-sm-4 mt-4 mb-4">
                                <div class="shadow p-3 mb-5 bg-white rounded">
                                <h4 class="text-center"><?php echo $hiphop[$ID][3]?></h4>
                                </div>
                                <img src="../images/hip-hop/home1.jpg" class="img-fluid mb-4" alt="Responsive image">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin urna nec vestibulum pellentesque. Ut leo felis, malesuada quis nunc id, ornare aliquam dolor. Cras sed felis pretium ex sollicitudin fermentum. Donec ultricies felis sed consectetur accumsan.</p>
                            </div>
                        </div>
                        
                                                <div class="row">
                            <div class="col-sm-4 mt-4 mb-4">
                                <div class="shadow p-3 mb-5 bg-white rounded">
                                <h4 class="text-center"><?php echo $hiphop[$ID][4]?></h4>
                                </div>
                                <img src="../images/hip-hop/home1.jpg" class="img-fluid mb-4" alt="Responsive image">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin urna nec vestibulum pellentesque. Ut leo felis, malesuada quis nunc id, ornare aliquam dolor. Cras sed felis pretium ex sollicitudin fermentum. Donec ultricies felis sed consectetur accumsan.</p>
                            </div>

                            <div class="col-sm-4 mt-4 mb-4">
                                <div class="shadow p-3 mb-5 bg-white rounded">
                                <h4 class="text-center"><?php echo $hiphop[$ID][5]?></h4>
                                </div>
                                <img src="../images/hip-hop/home2.jpg" class="img-fluid mb-4" alt="Responsive image">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin urna nec vestibulum pellentesque. Ut leo felis, malesuada quis nunc id, ornare aliquam dolor. Cras sed felis pretium ex sollicitudin fermentum. Donec ultricies felis sed consectetur accumsan.</p>
                            </div>
                            <div class="col-sm-4 mt-4 mb-4">
                                <div class="shadow p-3 mb-5 bg-white rounded">
                                <h4 class="text-center"><?php echo $hiphop[$ID][6]?></h4>
                                </div>
                                <img src="../images/hip-hop/origem.jpg" class="img-fluid mb-4" alt="Responsive image">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sollicitudin urna nec vestibulum pellentesque. Ut leo felis, malesuada quis nunc id, ornare aliquam dolor. Cras sed felis pretium ex sollicitudin fermentum. Donec ultricies felis sed consectetur accumsan.</p>
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
