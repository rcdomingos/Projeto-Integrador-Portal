<?php
 //Php para verificar o idioma!
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
   //Importando o head
     include('../imports/head.php');
   ?>

<body>
    <!--Importando o menu -->
    <?php
    include('../imports/menu-secundario.php');
  ?>
    <!-- Conteudo da pagina  -->
    <main>
        <div class="headerpop">
            <div class="jumbotron jumbotron-fluid">
                <h1 class="display-4 text-white text-center shadow-text">
                    <?php 
                    if ($ID=='PT'){
                        echo "Lançamentos da Semana";
                    } 
                    if ($ID=='EN'){
                        echo "New Releases";
                    }
                    if ($ID=='ES'){
                        echo "Lanzamientos de la semana";
                    } 
                    ?>
                </h1>
            </div>
        </div>
        <div class="container mt-2 mb-3">
            <div class="row no-gutters justify-content-md-center">
                <div class=" mt-1 col-md-4">

                    <div id="carouselpop" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../images/pop/lady-show2.jpg" alt="Primeiro Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../images/pop/taylor-show2.jpg" alt="Segundo Slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselpop" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselpop" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-5 mt-1">
                    <div class="container-fluid">
                        <ul class="list-group">
                            <li class="list-group-item">1ª Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">2º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">3º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">4º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">5º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">6º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">7º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">8º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">9º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">10º Loremipsum dolorsit ametconsec.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- importando o footer da pagina -->
    <?php
    include('../imports/footer-secundario.php');
  ?>
</body>

</html>
