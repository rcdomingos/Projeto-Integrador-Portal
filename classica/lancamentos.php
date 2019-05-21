<?php
    $classica_pt = array("O compositor coreano Yiruma está bem agasalhado. Seu corpo está voltado para a direita, olhando para a mesma direção e sorrindo", "A jovem compositora Alma Deutscher está com uma tiara branca que possui uma flor em sua cabeça. Ela está sorrindo e segurando um violino na sua mão direita", "O compositor Jean Goldenbaum está em um local que possui construções antigas. Ele está com um agasalho preto e está sorrindo","A compositora Graziella Concas está tocando piano. Seus olhos estão olhando atentamente para as teclas","Página anterior","Próxima página","Voltar ao topo");

    $classica_en = array("The korean composer Yiruma is well wrapped. His body is turned to the right, he is looking at the same direction and he is smiling", "The young composer Alma Deutscher is wearing something in her head like a white lace that have a flower. She is smiling and holding a violin with her right hand", "The composer Jean Goldenbaum is in a place that are a lot of old construction. He is wearing a black coat and he is smiling", "The composer Graziella Concas is playing the piano. Her eyes are staring the piano keys.","Previous page","Next page","Back to the top");

    $classica_es = array("El compositor coreano Yiruma está bien agasajado con el cuerpo hacia la derecha, mirando hacia la misma dirección y sonriendo", "La joven compositora Alma Deutscher está con una tiara blanca que tiene una flor en su cabeza, ella está sonriendo y sosteniendo un El violín en su mano derecha", "El compositor Jean Goldenbaum está en un lugar que posee construcciones antiguas, está con un abrigo negro y está sonriendo", "La compositora Graziella Concas está tocando el piano, sus ojos miran atentamente las teclas","Página anterior", "Página siguiente", "Volver al principio");

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
    <main id="content">
        <div class="container">
            <!--ARTICLE-->
            <div class="row mb-4">
                <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                    <article>
                        <h2 class="text-center titulosclancamentos" tabindex="0">Yiruma</h2>
                        <img src="../images/classica/lancamentos-01.jpg" tabindex="0" class="img-fluid rounded shadow" alt="<?php echo $classica[$ID][0]?>">
                        <p class="mt-3 paragrafolancamentos" tabindex="0">Pellentesque varius quis elit quis aliquet. Donec vestibulum enim turpis, non sagittis velit efficitur varius. Quisque egestas dignissim dolor. Morbi id suscipit arcu. Ut et dolor nec magna gravida porttitor non nec nulla. Donec malesuada quam non lacus vestibulum, ac molestie erat rutrum. Aenean mattis commodo laoreet.</p>
                    </article>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                    <article>
                        <h2 class="text-center titulosclancamentos" tabindex="0">Alma Deutscher</h2>
                        <img src="../images/classica/lancamentos-02.jpg" tabindex="0" class="img-fluid rounded shadow" alt="<?php echo $classica[$ID][1]?>">
                        <p class="mt-3 paragrafolancamentos" tabindex="0">Pellentesque varius quis elit quis aliquet. Donec vestibulum enim turpis, non sagittis velit efficitur varius. Quisque egestas dignissim dolor. Morbi id suscipit arcu. Ut et dolor nec magna gravida porttitor non nec nulla. Donec malesuada quam non lacus vestibulum, ac molestie erat rutrum. Aenean mattis commodo laoreet.</p>
                    </article>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <article>
                        <h2 class="text-center titulosclancamentos" tabindex="0">Jean Goldenbaum</h2>
                        <img src="../images/classica/lancamentos-03.jpg" tabindex="0" class="img-fluid rounded shadow" alt="<?php echo $classica[$ID][2]?>">
                        <p class="mt-3 paragrafolancamentos" tabindex="0">Pellentesque varius quis elit quis aliquet. Donec vestibulum enim turpis, non sagittis velit efficitur varius. Quisque egestas dignissim dolor. Morbi id suscipit arcu. Ut et dolor nec magna gravida porttitor non nec nulla. Donec malesuada quam non lacus vestibulum, ac molestie erat rutrum. Aenean mattis commodo laoreet.</p>
                    </article>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <article>
                        <h2 class="text-center titulosclancamentos" tabindex="0">Graziella Concas</h2>
                        <img src="../images/classica/lancamentos-04.jpg" tabindex="0" class="img-fluid rounded shadow" alt="<?php echo $classica[$ID][3]?>">
                        <p class="mt-3 paragrafolancamentos" tabindex="0">Pellentesque varius quis elit quis aliquet. Donec vestibulum enim turpis, non sagittis velit efficitur varius. Quisque egestas dignissim dolor. Morbi id suscipit arcu. Ut et dolor nec magna gravida porttitor non nec nulla. Donec malesuada quam non lacus vestibulum, ac molestie erat rutrum. Aenean mattis commodo laoreet.</p>
                    </article>
                </div>
                <div class="centralizarc mt-4">
                    <nav aria-label="Navegação de página">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#" tabindex="0"><?php echo $classica[$ID][4]?></a></li>
                            <li class="page-item"><a class="page-link" href="#" tabindex="0">1</a></li>
                            <li class="page-item"><a class="page-link" href="#" tabindex="0">2</a></li>
                            <li class="page-item"><a class="page-link" href="#" tabindex="0">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" tabindex="0"><?php echo $classica[$ID][5]?></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="skippy">
            <a class="sr-only sr-only-focusable text-light text-center" href="#topo"><?php echo $classica[$ID][6]?></a>
        </div>
    </main>
    <!--FOOTER-->
    <?php 
      include('../imports/footer-secundario.php');
    ?>
    <!--FIM FOOTER-->

</body>

</html>
