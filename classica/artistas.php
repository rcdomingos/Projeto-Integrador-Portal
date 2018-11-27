<?php
    $classica_pt = array("Compositores","Conheça mais sobre os compositores mais famosos");
    $classica_en = array("Composers","Know more about the most famous composers");
    $classica_es = array("Compositores","Conoce más sobre los compositores más famosos");

    $classica = array('PT'=> $classica_pt,'EN' => $classica_en,'ES' => $classica_es);
?>
<?php
    $testeartistas = array("");
?>
<?php
 //PHP para verificar qual o idioma do html Conheça um pouco dos vários compositores talentosos da história da música clássica
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
   //importando o head da pagina
     include('../imports/head.php');
   ?>

<body>
    <!--NAV-->
    <?php 
    include('../imports/menu-secundario.php');
?>
    <!--NAV ENDS-->
    <section class="artistas-classica">
        <div class="jumbotron jumbotron-fluid">
            <h1 class="display-4 text-white pl-5">
                <?php echo $classica[$ID][0]?>
            </h1>
            <p class="lead text-white pl-5">
                <?php echo $classica[$ID][1]?>
            </p>
        </div>
    </section>

    <!--ARTICLE-->
    <div class="container">   
        
<?php
    
 
    $artistas = array("<div class='row mb-3  mt-3' id='box'>
            <div class='col-12 col-md-6 col-lg-4'>
                <img src='../images/classica/artistas-01.jpg' class='img-fluid mt-2 mb-2 rounded imgartistas' alt='Artista Ludwig Van Beethoven'>
            </div>
            <article class='col-12 col-md-6 col-lg-8'>
                <div>
                    <h3 class='tartistas text-center mt-2'>Ludwig Van Beethoven</h3>
                    <p class='partistas text-justify'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, teste, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem.</p>
                </div>
            </article>
        </div>",
            "<div class='row mb-3  mt-3' id='box'>
            <div class='col-12 col-md-6 col-lg-4'>
                <img src='../images/classica/artistas-02.jpg' class='img-fluid mt-2 mb-2 rounded imgartistas' alt='Artista Wolfgang Amadeus Mozart'>
            </div>
            <article class='col-12 col-md-6 col-lg-8'>
                <div>
                    <h3 class='tartistas text-center mt-2'>Wolfgang Amadeus Mozart</h3>
                    <p class='partistas text-justify'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, teste, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem.</p>
                </div>
            </article>
        </div>",
            "<div class='row mb-3  mt-3' id='box'>
            <div class='col-12 col-md-6 col-lg-4'>
                <img src='../images/classica/artistas-03.jpg' class='img-fluid mt-2 mb-2 rounded imgartistas' alt='Artista Fredéric Chopin'>
            </div>
            <article class='col-12 col-md-6 col-lg-8'>
                <div>
                    <h3 class='tartistas text-center mt-2'>Fredéric Chopin</h3>
                    <p class='partistas text-justify'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, teste, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem.</p>
                </div>
            </article>
        </div>",
            "<div class='row mb-3  mt-3' id='box'>
            <div class='col-12 col-md-6 col-lg-4'>
                <img src='../images/classica/artistas-04.jpg' class='img-fluid mt-2 mb-2 rounded imgartistas' alt='Artistas Piotr Ilitch Tchaikovsky'>
            </div>
            <article class='col-12 col-md-6 col-lg-8'>
                <div>
                    <h3 class='tartistas text-center mt-2'>Piotr Ilitch Tchaikovsky</h3>
                    <p class='partistas text-justify'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, teste, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui. Fusce in urna sem.</p>
                </div>
            </article>
        </div>");
    
        shuffle($artistas);
                
       
        /*for($i=0;$i<4;$i++){
            
            echo $teste[$i];
        }*/
                
        foreach($artistas as $leitor){
            echo $leitor;
        }
    

   ?>
        
        <div class="row mb-3" >
                <nav aria-label="Navegação da página artistas" class="mt-4 alinhar">
                <ul class="pagination">
                    <li class="page-item ajustepagina">
                        <a class="page-link" href="artistas.php" aria-label="Anterior">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Anterior</span>
                        </a>
                    </li>
                    <li class="page-item ajustepagina"><a class="page-link" href="artistas.php">1</a></li>
                    <li class="page-item ajustepagina"><a class="page-link" href="artistas.php">2</a></li>
                    <li class="page-item ajustepagina"><a class="page-link" href="artistas.php">3</a></li>
                    <li class="page-item ajustepagina">
                        <a class="page-link" href="artistas.php" aria-label="Próximo">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--FIM ARTICLE-->

    <!--FOOTER-->
    <?php 
    include('../imports/footer-secundario.php');
?>
    <!--FIM FOOTER-->

</body>

</html>
