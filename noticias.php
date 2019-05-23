<?php 
    $noticias_pt = array("Quentinhas","Curiosidades","Novidades","Na imagem várias pessoas estão dançando em uma balada", "Há 2 horas atrás", "Na imagem um clarinete está em cima de um livro de partituras", "Há 1 dia atrás","Voltar ao topo");
    $noticias_en = array("Hot news", "Curiosities", "News", "In the picture many people are dancing in a night club", "2 hours ago", "In the picture one clarinet is on a book of partiture", "1 day ago", "Back to the top");
    $noticias_es = array("Noticias calientes", "Curiosidades", "Noticias", "En la imagen varias personas están bailando en una balada", "Hace 2 horas", "En la foto un clarinete está en un libro de partituras", "Hace 1 día","Volver al principio");
    $noticias = array('PT'=> $noticias_pt,'EN' => $noticias_en,'ES' => $noticias_es);
?>
<?php
//PHP para verificar qual o idioma do html
  include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
  //importando o head da pagina
    include('imports/head.php');
  ?>

<body>
    <!--NAV-->
    <?php
    include('imports/menu.php');
?>
    <!--NAV ENDS-->

    <!--ARTICLE-->
    <main id="content">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-12 col-md-12 col-lg-7 mt-4">
                    <article id="imagemnoticias">
                        <a href="#" tabindex="0">
                            <h2 class="titulonoticias"><?php echo $noticias[$ID][0]?></h2>
                        </a>
                        <a href="./noticiaAtual.php?noticia=1" tabindex="0">
                            <p class="textonoticias">Lorem ipsum dolor sit amet, consectetur adipiscing elit duis </p>
                        </a>
                        <p id="textonoticias2" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac risus et arcu.</p>
                    </article>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5 mt-4">
                    <aside id="imagem2noticias">
                        <a href="#" tabindex="0">
                            <h2 class="titulonoticias"><?php echo $noticias[$ID][1]?></h2>
                        </a>
                        <a href="./noticiaAtual.php?noticia=2" tabindex="0">
                            <p class="textolateralnoticias">Lorem ipsum dolor sit amet, consectetur adipiscing elit duis </p>
                        </a>
                    </aside>
                    <aside id="imagem3noticias">
                        <a href="#" tabindex="0">
                            <h2 class="titulonoticias"><?php echo $noticias[$ID][2]?></h2>
                        </a>
                        <a href="./noticiaAtual.php?noticia=3" tabindex="0">
                            <p class="textolateralnoticias">Lorem ipsum dolor sit amet, consectetur adipiscing elit duis </p>
                        </a>
                    </aside>
                </div>
            </div>
            <div class="row linhanot">
                <div class="col-sm-12 col-md-12 col-lg-5 mb-4">
                    <img src="images/noticias/pop.jpg" class="img-fluid ajusteimagem w-100" alt="<?php echo $noticias[$ID][3]?>" tabindex="0">
                </div>
                <article class="col-sm-12 col-md-12 col-lg-7 mt-4">
                    <a href="./noticiaAtual.php?noticia=4" tabindex="0">
                        <p class="titulo4">Lorem ipsum dolor: Cit amet, consectetur adipiscing elit</p>
                    </a>
                    <p class="paragrafo6" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel fermentum odio, nec rutrum libero.</p>
                    <p tabindex="0"><small><?php echo $noticias[$ID][4]?></small></p>
                </article>
            </div>
            <div class="row mt-4 mb-4 linhanot">
                <div class="col-sm-12 col-md-12 col-lg-5 mb-4">
                    <img src="images/noticias/clarinete.jpg" class="img-fluid ajusteimagem w-100" alt="<?php echo $noticias[$ID][5]?>" tabindex="0">
                </div>
                <article class="col-sm-12 col-md-12 col-lg-7 mt-4">
                    <a href="./noticiaAtual.php?noticia=5" tabindex="0">
                        <p class="titulo4">Lorem ipsum dolor: Cit amet, consectetur adipiscing elit</p>
                    </a>
                    <p class="paragrafo6" tabindex="0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel fermentum odio, nec rutrum libero.</p>
                    <p tabindex="0"><small><?php echo $noticias[$ID][6]?></small></p>
                </article>
            </div>
        </div>
    </main>
    <!--ARTICLE ENDS-->


    <!--FOOTER-->
    <?php
    include('imports/footer.php');
?>
    <!--FIM FOOTER-->

</body>

</html>
