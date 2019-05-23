<?php
    $classica_pt = array("Tudo sobre a música clássica.","Tudo em um só lugar.","O melhor lugar para conhecer sobre música clássica.","Aqui você vai encontrar:", "A mão direita de uma pessoa está sobre as teclas de um piano","Os artistas","Um lugar muito grande com várias poltronas luzes e cortinas. É o lugar onde ocorrem os concertos musicais","A história","Os artistas lançamentos","A compositora Graziella Concas está tocando piano. Seus olhos estão olhando atentamente para as teclas","A jovem compositora Alma Deutscher está com uma tiara branca que possui uma flor em sua cabeça. Ela está sorrindo e segurando um violino na sua mão direita","As novidades","Várias folhas de partituras sendo folheadas","E tudo o que marcou","Voltar ao topo");
    $classica_en = array("Everything about classical music.","All in one place.", "The best place to know about classical music.", "Here you will find:", "A person's right hand is on the keys of a piano", "The artists", "A very large place with several armchairs lights and curtains. It is where musical concerts take place", "The story", "The artists releases", "The composer Graziella Concas is playing the piano.Your eyes are looking closely at the keys ","The young composer Alma Deutscher is wearing something in her head like a white lace that have a flower. She is smiling and holding a violin with her right hand"," The news","Several sheets of sheet music being clad"," And the marks "," Back to the top ");
    $classica_es = array("Todo sobre la música clásica.", "Todo en un solo lugar.", "El mejor lugar para conocer sobre música clásica.", "Aquí encontrarás:", "La mano derecha de una persona está sobre las teclas de un piano", "Los artistas","Un lugar muy grande con varias sillones de luces y cortinas, es el lugar donde se producen los conciertos musicales", "La historia", "Los artistas lanzamientos", "La compositora Graziella Concas está tocando el piano. Sus ojos están mirando atentamente a las teclas", "La joven compositora Alma Deutscher está tocando violín", "Las novedades", "Varias hojas de partituras que se hojean", "Y todo lo que marcó", "Volver al principio");

    $classica = array('PT'=> $classica_pt,'EN' => $classica_en,'ES' => $classica_es);
?>

<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    $titlePagina = array('PT' => "Clássica | Pagina inicial", 'EN' => "Classic | Home", 'ES' => "Clásico | Pagina principal");
   //importando o head da pagina
     include('../imports/head.php');
   ?>

<body>
    <!--NAV-->
    <?php 
    include('../imports/menu-secundario.php');
?>
    <!--FIM NAV-->
    <!--ARTICLE-->
    <main id="content">
        <div class="jumbotron jumbotron-fluid jumbotronimagem">
            <h1 class="titulo1homeclassica text-center" tabindex="0"><?php echo $classica[$ID][0]?></h1>
        </div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <article>
                        <h2 class="text-center mt-5" tabindex="0"><?php echo $classica[$ID][1]?></h2>
                        <h2 class="text-center mb-5" tabindex="0"><?php echo $classica[$ID][2]?></h2>
                        <p class=" mb-5" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec diam nunc, aliquam vel malesuada quis, efficitur et mauris. Maecenas in cursus eros, vel pretium leo.</p>
                    </article>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2 class="mb-5 text-center" tabindex="0"><?php echo $classica[$ID][3]?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <section>
                        <a href="artistas.php">
                            <h3 class="mt-3 ajustandotitulo2homeclassica"><?php echo $classica[$ID][5]?></h3>
                        </a>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec diam nunc, aliquam vel malesuada quis.</p>
                        <img src="../images/classica/artistas-03.jpg" tabindex="0" class="img-fluid ajustandoimagenshomeclassica rounded" alt="<?php echo $classica[$ID][4]?>">
                    </section>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <section>
                        <a href="origem.php">
                            <h3 class="mt-3 ajustandotitulo2homeclassica"><?php echo $classica[$ID][7]?></h3>
                        </a>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec diam nunc, aliquam vel malesuada quis.</p>
                        <img src="../images/classica/origem-01.jpg" tabindex="0" class="img-fluid ajustandoimagenshomeclassica rounded" alt="<?php echo $classica[$ID][6]?>">
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <section class="mt-4">
                        <a href="lancamentos.php">
                            <h3 class="mt-3 ajustandotitulo2homeclassica"><?php echo $classica[$ID][8]?></h3>
                        </a>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec diam nunc, aliquam vel malesuada quis.</p>
                        <img src="../images/classica/lancamentos-04.jpg" tabindex="0" class="img-fluid ajustandoimagens2homeclassica rounded" alt="<?php echo $classica[$ID][9]?>">
                    </section>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <section class="mt-4">
                        <a href="destaques.php">
                            <h3 class="mt-3 ajustandotitulo2homeclassica"><?php echo $classica[$ID][11]?></h3>
                        </a>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec diam nunc, aliquam vel malesuada quis.</p>
                        <img src="../images/classica/lancamentos-02.jpg" tabindex="0" class="img-fluid ajustandoimagens2homeclassica rounded" alt="<?php echo $classica[$ID][10]?>">
                    </section>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <section class="mt-4">
                        <a href="marcos.php">
                            <h3 class="mt-3 ajustandotitulo2homeclassica"><?php echo $classica[$ID][13]?></h3>
                        </a>
                        <p tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec diam nunc, aliquam vel malesuada quis.</p>
                        <img src="../images/classica/origem-03.jpg" tabindex="0" class="img-fluid ajustandoimagens2homeclassica rounded" alt="<?php echo $classica[$ID][12]?>">
                    </section>
                </div>
            </div>
        </div>
    </main>
    <!-- ARTICLE ENDS -->

    <!--FOOTER-->
    <?php 
    include('../imports/footer-secundario.php');
?>
    <!--FIM FOOTER-->

</body>

</html>
