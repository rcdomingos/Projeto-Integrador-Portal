<?php
    $classica_pt = array("A maior orquestra brasileira","Composições que marcaram o Brasil","Instrumentos principais","A música clássica hoje","Leia mais","Para estudar e relaxar","Leia mais","Sucessos nos desenhos","Leia mais");
    $classica_en = array("The bigest brazilian orchestra","Historical compositions for Brazil","Main instruments","The classical music today","Read more","For studying and relaxing","Read more","Success on cartoons","Read more");
    $classica_es = array("La mayor orquesta brasileña","Composiciones que marcaron el Brasil","Instrumentos principales","La música clásica hoy","Leer más","Para estudiar y relajarse","Leer más","Sucesos en los dibujos","Leer más");

    $classica = array('PT'=> $classica_pt,'EN' => $classica_en,'ES' => $classica_es);
?>
<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
   //importando o head da pagina
     include('../imports/head.php');
  ?>
<!--FINAL HEAD-->

<body>
    <!--NAV-->
    <?php 
    include('../imports/menu-secundario.php');
   ?>
    <!--FIM NAV-->

    <!--CARROSEL-->
    <div class="container">
        <div class="row  mb-2 mt-2">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="row linhadestaquesc">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <img src="../images/classica/destaques-01.jpg" class="img-fluid imagemdestaquesc rounded w-100" alt="" tabindex="0">
                    </div>
                    <article class="col-sm-12 col-md-12 col-lg-8">
                        <a href="#" tabindex="0">
                            <p class="nomedestaquec">Lorem ipsum dolor: Cit amet, consectetur adipiscing elit</p>
                        </a>
                        <p class="textodestaquec" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel fermentum odio, nec rutrum libero.</p>
                        <p tabindex="0"><small>Há 10 minutos</small></p>
                    </article>
                </div>

                <div class="row mb-2 mt-2 linhadestaquesc">
                    <div class="col-sm-12 col-md-12 col-lg-4 mb-2">
                        <img src="../images/classica/destaques-02.jpg" class="img-fluid imagemdestaquesc rounded w-100" alt="" tabindex="0">
                    </div>
                    <article class="col-sm-12 col-md-12 col-lg-8 mt-2">
                        <a href="#" tabindex="0">
                            <p class="nomedestaquec">Lorem ipsum dolor: Cit amet, consectetur adipiscing elit</p>
                        </a>
                        <p class="textodestaquec" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel fermentum odio, nec rutrum libero.</p>
                        <p tabindex="0"><small>Há 45 minutos</small></p>
                    </article>
                </div>

                <div class="row mb-2 mt-3">
                    <div class="col-sm-12 col-md-12 col-lg-4 mb-2">
                        <img src="../images/classica/destaques-03.jpg" class="img-fluid imagemdestaquesc rounded w-100" alt="" tabindex="0">
                    </div>
                    <article class="col-sm-12 col-md-12 col-lg-8 mt-2">
                        <a href="#" tabindex="0">
                            <p class="nomedestaquec">Lorem ipsum dolor: Cit amet, consectetur adipiscing elit</p>
                        </a>
                        <p class="textodestaquec" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel fermentum odio, nec rutrum libero.</p>
                        <p tabindex="0"><small>Há 2 horas</small></p>
                    </article>
                </div>
                
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 mt-2">
                <aside>
                    <ul class="list-group">
                        <h2 class="titulolista list-group-item" tabindex="0">Mais lidas</h2>
                        <li class="list-group-item disabled"><span class="numerodestaques">1</span><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                        <li class="list-group-item disabled"><span class="numerodestaques">2</span><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                        <li class="list-group-item disabled"><span class="numerodestaques">3</span><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                        <li class="list-group-item disabled"><span class="numerodestaques">4</span><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                    </ul>
                </aside>
                <aside class="mt-4">
                    <ul class="list-group">
                        <h2 class="titulolista list-group-item" tabindex="0">Saiba mais</h2>
                        <li class="list-group-item disabled"><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                        <li class="list-group-item disabled"><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                        <li class="list-group-item disabled"><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                    </ul>
                </aside>
            </div>
        </div>
    </div>
    <!--FOOTER-->
    <?php 
    include('../imports/footer-secundario.php');
    ?>
    <!--FIM FOOTER-->

</body>

</html>
