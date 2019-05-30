<?php
    $classica_pt = array("O compositor coreano Yiruma está bem agasalhado. Seu corpo está voltado para a direita, olhando para a mesma direção e sorrindo","Sucesso mundial: Compositor coreano já é um dos preferidos da atualidade","Há 10 minutos","A compositora Graziella Concas está tocando piano. Seus olhos estão olhando atentamente para as teclas","Conheça mais: Grandes nomes da música clássica atual","Há 45 minutos","A jovem compositora Alma Deutscher está com uma tiara branca que possui uma flor em sua cabeça. Ela está sorrindo e segurando um violino na sua mão direita","Jovens talentos: Com apenas 14 anos, Alma Deutscher já é compositora","Há 2 horas", "Mais lidas", "Saiba mais","Conheça suas composições mais famosas e que lotam salas de concertos por todo o mundo.","Conheça Graziella, um dos grandes nomes da música clássica atual.","A jovem prodígio que aos 6 anos já era autora de uma das composições mais aclamadas dá música clássica atual.","Conheça mais sobre a compositora jovem Alma Deutscher","Descubra as obras mais aclamadas do compositor coreano","Leia sobre artistas da atualidade","Você sabia? Conheça algumas curiosidades do mundo da música clássica!","Você sabe quantos anos tem Alma Deutscher?","A 10° sinfonia e sua maldição","Escrever uma ópera em um dia? É possível?");

    $classica_en = array("The korean composer Yiruma is well wrapped. His body is turned to the right, he is looking at the same direction and he is smiling","World-wide success: Korean composer is already one of today's favorites","10 minutes ago", "The composer Graziella Concas is playing the piano. Her eyes are looking closely at the keys","Know more: Great names of current classical music","There are 45 minutes","The young composer Alma Deutscher is wearing something in her head like a white lace that have a flower. She is smiling and holding a violin with her right hand", "Young talents: At only 14 years old, Alma Deutscher is already a composer", "There are 2 hours"," Most read","Know more","Get to know her most famous compositions, and fill concert halls all over the world.", "Meet Graziella, one of the greats of current classical music.", "The young prodigy who at the age of 6 was the author of one of the most acclaimed music gives current classical music. ","Know more about the young composer Alma Deutscher","Discover the most acclaimed works of the Korean composer","Read about present artists","Did you know? Know some curiosities about the world of classical music","Do you know how old is Alma Deutscher?","The 10th symphony and the curse","Write an opera in just one day? Is it possible?");

    $classica_es = array("El compositor coreano Yiruma está bien agasajado con el cuerpo hacia la derecha, mirando hacia la misma dirección y sonriendo", "Éxito mundial: Compositor coreano ya es uno de los preferidos de la actualidad", "Hace 10 minutos","La compositora Graziella Concas está tocando el piano, sus ojos miran atentamente a las teclas", "Conozca más: Grandes nombres de la música clásica actual", "Hace 45 minutos", "La joven compositora Alma Deutscher está con una tiara blanca que tiene una flor en su cabeza, ella está sonriendo y sosteniendo un El violín en su mano derecha", "Jóvenes talentos: Con sólo 14 años, Alma Deutscher ya es compositora", "Hace 2 horas", "Más leídas", "Más información","Conocer a sus composiciones más famosas y que llenan salas de conciertos por todo el mundo.", "Conozca a Graziella, uno de los grandes nombres de la música clásica actual.", "La joven prodigio que a los 6 años ya era autora de una de las composiciones más aclamadas da música clásica actual. ","Conozca más sobre la compositora joven Alma Deutscher", "Descubra las obras más aclamadas del compositor coreano", "Lea sobre artistas de la actualidad", "¿Sabía usted? Conozca algunas curiosidades del mundo de la música clásica!", "Usted sabe cuántos años tiene Alma Deutscher? "," La 10 ° sinfonía y su maldición "," Escribir una ópera en un día? Es posible? ");

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
                        <div class="col-sm-12 col-md-5 col-lg-5">
                            <img src="../images/classica/lancamentos-01.jpg" class="img-fluid imagemdestaquesc rounded" tabindex="0" alt="<?php echo $classica[$ID][0]?>">
                        </div>
                        <article class="col-sm-12 col-md-7 col-lg-7 mt-2">
                            <a href="#">
                                <h2 class="text-dark nomedestaquec"><strong><?php echo $classica[$ID][1]?></strong></h2>
                            </a>
                            <p class="text-muted" tabindex="0"><?php echo $classica[$ID][11]?></p>
                            <p tabindex="0"><small><?php echo $classica[$ID][2]?></small></p>
                        </article>
                    </div>

                    <div class="row mb-2 mt-2 linhadestaquesc">
                        <div class="col-sm-12 col-md-5 col-lg-5 mb-2">
                            <img src="../images/classica/lancamentos-04.jpg" class="img-fluid imagemdestaquesc rounded" tabindex="0" alt="<?php echo $classica[$ID][3]?>">
                        </div>
                        <article class="col-sm-12 col-md-7 col-lg-7 mt-2">
                            <a href="#">
                                <h2 class="text-dark nomedestaquec"><strong><?php echo $classica[$ID][4]?></strong></h2>
                            </a>
                            <p class="text-muted" tabindex="0"><?php echo $classica[$ID][12]?></p>
                            <p tabindex="0"><small><?php echo $classica[$ID][5]?></small></p>
                        </article>
                    </div>

                    <div class="row mb-4 mt-2 linhadestaquesc">
                        <div class="col-sm-12 col-md-5 col-lg-5 mb-2">
                            <img src="../images/classica/lancamentos-02.jpg" class="img-fluid imagemdestaquesc rounded" tabindex="0" alt="<?php echo $classica[$ID][6]?>">
                        </div>
                        <article class="col-sm-12 col-md-7 col-lg-7 mt-2">
                            <a href="#">
                                <h2 class="text-dark nomedestaquec"><strong><?php echo $classica[$ID][7]?></strong></h2>
                            </a>
                            <p class="text-muted" tabindex="0"><?php echo $classica[$ID][13]?></p>
                            <p tabindex="0"><small><?php echo $classica[$ID][8]?></small></p>
                        </article>
                    </div>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 mt-2">
                    <aside>
                        <div>
                            <h2 class="text-dark titulolista list-group-item" tabindex="0"><strong><?php echo $classica[$ID][9] ?></strong></h2>
                        </div>
                        <ul class="list-group bordanegrito">
                            <li class="list-group-item disabled"><span class="text-muted numerodestaques" tabindex="0">1</span><a href="#" class="text-dark"><strong><?php echo $classica[$ID][14]?></strong></a></li>
                            <li class="list-group-item disabled"><span class="text-muted numerodestaques" tabindex="0">2</span><a href="#" class="text-dark"><strong><?php echo $classica[$ID][15]?></strong></a></li>
                            <li class="list-group-item disabled"><span class="text-muted numerodestaques" tabindex="0">3</span><a href="#" class="text-dark"><strong><?php echo $classica[$ID][16]?></strong></a></li>
                            <li class="list-group-item disabled"><span class="text-muted numerodestaques" tabindex="0">4</span><a href="#" class="text-dark"><strong><?php echo $classica[$ID][17]?></strong></a></li>
                        </ul>
                    </aside>
                    <aside class="mt-4 mb-3">
                        <div>
                            <h2 class="text-dark titulolista list-group-item" tabindex="0"><strong><?php echo $classica[$ID][10] ?></strong></h2>
                        </div>
                        <ul class="list-group bordanegrito">
                            <li class="list-group-item disabled"><a href="#" class="text-dark"><strong><?php echo $classica[$ID][18]?></strong></a></li>
                            <li class="list-group-item disabled"><a href="#" class="text-dark"><strong><?php echo $classica[$ID][19]?></strong></a></li>
                            <li class="list-group-item disabled"><a href="#" class="text-dark"><strong><?php echo $classica[$ID][20]?></strong></a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </main>
    <!--FOOTER-->
    <?php 
    include('../imports/footer-secundario.php');
    ?>
    <!--FIM FOOTER-->

</body>

</html>
