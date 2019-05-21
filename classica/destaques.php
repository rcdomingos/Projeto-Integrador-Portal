<?php
    $classica_pt = array("O compositor coreano Yiruma está de perfil com sua mão direita em seu queixo","Sucesso mundial: Compositor coreano já é um dos preferidos da atualidade","Há 10 minutos","A compositora Graziella Concas está tocando piano. Seus olhos estão olhando atentamente para as teclas","Conheça mais: Grandes nomes da música clássica atual","Há 45 minutos","A jovem compositora Alma Deutscher estpa tocando violino ao ar livre","Jovens talentos: Com apenas 14 anos, Alma Deutscher já é compositora","Há 2 horas", "Mais lidas", "Saiba mais","Voltar ao topo");
    $classica_en = array("Korean composer Yiruma is in profile with his right hand on his chin","World-wide success: Korean composer is already one of today's favorites","Ten minutes ago", "The composer Graziella Concas is playing the piano. Her eyes are looking closely at the keys","Know more: Great names of current classical music","There are 45 minutes","Young composer Alma Deutscher is playing violin in the open air", "Young talents: At only 14 years old, Alma Deutscher is already a composer", "There are 2 hours"," Most read","Know more","Back to the top");
    $classica_es = array("El compositor coreano Yiruma está de perfil con su mano derecha en su barbilla", "Éxito mundial: Compositor coreano ya es uno de los preferidos de la actualidad", "Hace 10 minutos","La compositora Graziella Concas está tocando el piano, sus ojos miran atentamente a las teclas", "Conozca más: Grandes nombres de la música clásica actual", "Hace 45 minutos", "La joven compositora Alma Deutscher está tocando violín al aire libre" , "Jóvenes talentos: Con sólo 14 años, Alma Deutscher ya es compositora", "Hace 2 horas", "Más leídas", "Más información","Volver al principio");

    $classica = array('PT'=> $classica_pt,'EN' => $classica_en,'ES' => $classica_es);
?>
<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    $titlePagina = array('PT' => "Clássica | Destaques", 'EN' => "Classic | Highlights", 'ES' => "Clásico | Reflejos");
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
    <main id="content">
        <div class="container">
            <div class="row  mb-2 mt-2">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="row linhadestaquesc">
                        <div class="col-sm-12 col-md-12 col-lg-5">
                            <img src="../images/classica/lancamentos-01.jpg" class="img-fluid imagemdestaquesc rounded" tabindex="0" alt="<?php echo $classica[$ID][0]?>">
                        </div>
                        <article class="col-sm-12 col-md-12 col-lg-7 mt-2">
                            <a href="#">
                                <h2 class="nomedestaquec"><?php echo $classica[$ID][1]?></h2>
                            </a>
                            <p class="textodestaquec" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel fermentum odio, nec rutrum libero.</p>
                            <p tabindex="0"><small><?php echo $classica[$ID][2]?></small></p>
                        </article>
                    </div>

                    <div class="row mb-2 mt-2 linhadestaquesc">
                        <div class="col-sm-12 col-md-12 col-lg-5 mb-2">
                            <img src="../images/classica/lancamentos-04.jpg" class="img-fluid imagemdestaquesc rounded" tabindex="0" alt="<?php echo $classica[$ID][3]?>">
                        </div>
                        <article class="col-sm-12 col-md-12 col-lg-7 mt-2">
                            <a href="#">
                                <h2 class="nomedestaquec"><?php echo $classica[$ID][4]?></h2>
                            </a>
                            <p class="textodestaquec" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel fermentum odio, nec rutrum libero.</p>
                            <p tabindex="0"><small><?php echo $classica[$ID][5]?></small></p>
                        </article>
                    </div>

                    <div class="row mb-2 mt-2 linhadestaquesc">
                        <div class="col-sm-12 col-md-12 col-lg-5 mb-2">
                            <img src="../images/classica/lancamentos-02.jpg" class="img-fluid imagemdestaquesc rounded" tabindex="0" alt="<?php echo $classica[$ID][6]?>">
                        </div>
                        <article class="col-sm-12 col-md-12 col-lg-7 mt-2">
                            <a href="#">
                                <h2 class="nomedestaquec"><?php echo $classica[$ID][7]?></h2>
                            </a>
                            <p class="textodestaquec" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel fermentum odio, nec rutrum libero.</p>
                            <p tabindex="0"><small><?php echo $classica[$ID][8]?></small></p>
                        </article>
                    </div>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mt-2">
                    <aside>
                        <ul class="list-group bordanegrito">
                            <h2 class="titulolista list-group-item" tabindex="0"><?php echo $classica[$ID][9] ?></h2>
                            <li class="list-group-item disabled"><span class="numerodestaques" tabindex="0">1</span><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                            <li class="list-group-item disabled"><span class="numerodestaques" tabindex="0">2</span><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                            <li class="list-group-item disabled"><span class="numerodestaques" tabindex="0">3</span><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                            <li class="list-group-item disabled"><span class="numerodestaques" tabindex="0">4</span><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                        </ul>
                    </aside>
                    <aside class="mt-4 mb-3">
                        <ul class="list-group bordanegrito">
                            <h2 class="titulolista list-group-item" tabindex="0"><?php echo $classica[$ID][10] ?></h2>
                            <li class="list-group-item disabled"><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                            <li class="list-group-item disabled"><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                            <li class="list-group-item disabled"><a href="#" class="textodestaquesc">Lorem ipsum dolor sit amet, con se ct ad ipiscing elit. Proin eu odio imperdiet</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
        <div class="skippy">
            <a class="sr-only sr-only-focusable text-light text-center" href="#topo"><?php echo $classica[$ID][11]?></a>
        </div>
    </main>
    <!--FOOTER-->
    <?php 
    include('../imports/footer-secundario.php');
    ?>
    <!--FIM FOOTER-->

</body>

</html>
