<?php
    $classica_pt = array("Um maestro olha atentamente para a orquestra enquanto maestra","As orquestras","Atualidade","A compositora Graziella Concas está tocando piano. Seus olhos estão olhando atentamente para as teclas","Super novidades","A jovem compositora Alma Deutscher está com uma tiara branca que possui uma flor em sua cabeça. Ela está sorrindo e segurando um violino na sua mão direita","O que mais marcou a música clássica nos últimos tempos","Uma orquestra está tocando. A imagem foca um homem sentado de terno e tocando violino","Voltar ao topo");
    $classica_en = array("A maestro pay attention to the orchestra while he is conducting the song","The orchestras","Present","The composer Graziella Concas is playing the piano. Your eyes are paying attention to the piano keys","Super news","The young composer Alma Deutscher is wearing something in her head like a white lace that have a flower. She is smiling and holding a violin with her right hand","The best marks of the classical music","An orchestra is playing. The image focuses on a man sitting in a suit and playing violin","Back to the top");
    $classica_es = array("Un maestro mira atentamente a la orquesta y maestra", "Las orquestas", "Actualidad", "La compositora Graziella Concas está tocando el piano, sus ojos están mirando atentamente a las teclas", "Super novedades", "La joven compositora Alma Deutscher está con una tiara blanca que tiene una flor en su cabeza, ella está sonriendo y sosteniendo un violín en su mano derecha", "Lo que más marcó la música clásica en los últimos tiempos", "Una orquesta está tocando. el hombre sentado de traje y tocando el violín","Volver al principio");

    $classica = array('PT'=> $classica_pt,'EN' => $classica_en,'ES' => $classica_es);
?>
<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    $titlePagina = array('PT' => "Clássica | Marcos", 'EN' => "Classic | Mark", 'ES' => "Clásico | Hitos");
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
    <!--ARTICLE-->
    <main id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-7 mt-4">
                    <figure>
                        <img src="../images/classica/marcos-01.jpg" class="img-fluid imgmarcosclassica rounded" tabindex="0" alt="<?php echo $classica[$ID][0]?>">
                    </figure>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 mt-4">
                    <article>
                        <h2 class="mt-5 mb-5 pt-5 pl-5" tabindex="0"><strong><?php echo $classica[$ID][1]?></strong></h2>
                        <p class="pl-5" tabindex="0"><strong>SED MALESUADA NUNC DUI ARGUE</strong></p>
                        <p class="pl-5 mb-5" tabindex="0">Duis augue ante, semper quis lectus eget, iaculis molestie arcu. Quisque efficitur ligula bibendum tempor interdum. Vivamus feugiat, urna in congue fringilla, leo mi posuere enim, ac commodo enim dui sed nulla.</p>
                    </article>
                    <section>
                        <h6 class="pl-5" tabindex="0"><strong>AC COMMODO ENIN DUI SED NULLA</strong></h6>
                        <p class="pl-5" tabindex="0">Phasellus vehicula leo eget lectus pharetra elementum. Etiam leo nisl, commodo non lobortis non, semper id libero. Proin dictum iaculis orci et commodo. Phasellus quis dictum dolor, et dignissim erat.</p>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 mt-4 mb-2">
                    <article>
                        <h2 class="mt-4 mb-5" tabindex="0"><strong><?php echo $classica[$ID][2]?></strong></h2>
                        <p tabindex="0"><strong>SED MALESUADA NUNC DUI ARGUE</strong></p>
                        <p class="mb-3" tabindex="0">Duis augue ante, semper quis lectus eget, iaculis molestie arcu. Quisque efficitur ligula bibendum tempor interdum. Vivamus feugiat, urna in congue fringilla, leo mi posuere enim, ac commodo enim dui sed nulla.</p>
                        <img src="../images/classica/lancamentos-04.jpg" class="img-fluid rounded" tabindex="0" alt="<?php echo $classica[$ID][3]?>">
                    </article>
                    <section>
                        <h6 class="mt-3" tabindex="0"><strong>AC COMMODO ENIN DUI SED NULLA</strong></h6>
                        <p class="mb-5" tabindex="0">Phasellus vehicula leo eget lectus pharetra elementum. Etiam leo nisl, commodo non lobortis non, semper id libero. Proin dictum iaculis orci et commodo. Phasellus quis dictum dolor, et dignissim erat.</p>
                    </section>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 mt-4 mb-2">
                    <article>
                        <h2 class="mt-4 mb-5" tabindex="0"><strong><?php echo $classica[$ID][4]?></strong></h2>
                        <p tabindex="0"><strong>SED MALESUADA NUNC DUI ARGUE</strong></p>
                        <p class="mb-3" tabindex="0">Duis augue ante, semper quis lectus eget, iaculis molestie arcu. Quisque efficitur ligula bibendum tempor interdum. Vivamus feugiat, urna in congue fringilla, leo mi posuere enim, ac commodo enim dui sed nulla.</p>
                        <img src="../images/classica/lancamentos-02.jpg" class="img-fluid rounded" tabindex="0" alt="<?php echo $classica[$ID][5]?>">
                    </article>
                    <section>
                        <h6 class="mt-3" tabindex="0"><strong>AC COMMODO ENIN DUI SED NULLA</strong></h6>
                        <p class="mb-5" tabindex="0">Phasellus vehicula leo eget lectus pharetra elementum. Etiam leo nisl, commodo non lobortis non, semper id libero. Proin dictum iaculis orci et commodo. Phasellus quis dictum dolor, et dignissim erat.</p>
                    </section>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <article>
                        <h3 class="h2 text-center mb-4" tabindex="0"><strong><?php echo $classica[$ID][6]?></strong></h3>
                        <p class="text-muted mb-5" tabindex="0">Nam auctor lacus non lorem malesuada, et porta lorem commodo non lobortis non, semper id libero. Proin dictum iaculis orci et commodo. Phasellus quis dictum dolor, et dignissim erat.</p>
                    </article>
                </div>
                <div class="col-10 p-auto m-auto">
                    <figure>
                        <img src="../images/classica/marcos-02.jpg" class="img-fluid rounded" tabindex="0" alt="<?php echo $classica[$ID][7]?>">
                    </figure>
                </div>
                <div class="mt-3 mb-5">
                    <p tabindex="0">Maecenas suscipit posuere neque id ultrices. Nulla dui diam, ullamcorper quis nisi a, consectetur tempus eros. Fusce sit amet vehicula ex, quis consectetur lectus. Sed condimentum vel urna et auctor. Cras cursus tortor pretium eros viverra congue. Suspendisse scelerisque leo nisl, id tempus magna posuere a. Nam auctor lacus non lorem malesuada, et porta lorem pharetra. Vestibulum porta odio justo, vel imperdiet nisi suscipit vitae. Nullam dictum turpis a eleifend pellentesque. Vivamus finibus diam ut nibh feugiat imperdiet eget non dolor. Maecenas facilisis elementum convallis. Nulla erat tortor, vestibulum eu iaculis vel, condimentum vel orci. Praesent feugiat rhoncus nisi, in porta odio congue vel. Maecenas laoreet pellentesque eros ut condimentum. Donec justo orci, rutrum nec tellus at, bibendum interdum ex.</p>
                </div>
            </div>
        </div>
        <div class="skippy">
            <a class="sr-only sr-only-focusable text-light text-center" href="#topo"><?php echo $classica[$ID][8]?></a>
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
