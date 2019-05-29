<?php
    $pop_pt = array("A cantora mais conhecida pelo nome artístico Lady Gaga, é uma cantora, compositora, produtora musical e atriz nascida nos Estados Unidos. Ela começou a apresentar-se no cenário musical de rock no Lower East Side em 2003, e mais tarde matriculou-se na Tisch School of Arts da Universidade de Nova Iorque. No fim de 2007, assinou um contrato com a Streamline Records, um selo da editora discográfica Interscope Records. Durante o seu início na Interscope, trabalhou como compositora para artistas e capturou a atenção do produtor Akon, que reconheceu as suas habilidades vocais e contratou-a para a sua própria gravadora, a Kon Live Distribution.", "Em 2007, seus vídeos de apresentações covers foram vistas no YouTube por Scooter Braun, que tornou seu agente e o levou para a cidade de Atlanta (Geórgia), para reunir-se com o cantor Usher. Em seguida Bieber assinou contrato com a Island Records, iniciando carreira profissional em 2009, após concluir o primeiro grau escolar. A primeira, de duas partes do álbum de estreia, My World, foi lançada em 17 de novembro de 2009. Quatro singles bem-sucedidos foram lançados precedendo o álbum: One Time One Less Lonely Girl Love Me e Favorite Girl todas alcançando o top 15 na parada Canadian Hot 100 e o top 40 da Billboard Hot 100.", "Conhecida simplesmente por Rihanna, é uma cantora, compositora, atriz e empresária de Barbados, de ascendência barbadiana, guianense e irlandesa. Assinou contrato com a editora Def Jam Recordings após uma audição, que despertou o interesse do produtor Evan Rogers e do vice-presidente na altura da editora, Jay-Z, para a jovem artista. Em 2005 gravou o seu primeiro álbum de estúdio, Music of the Sun, que alcançou o top 10 da Billboard 200. Um ano depois lançou o seu segundo trabalho de originais, A Girl like Me, obtendo a quinta posição da tabela musical norte-americana, incluindo a canção que foi o seu primeiro topo norte-americano em single, SOS.");

    $pop_en = array("The singer better known by the stage name Lady Gaga, is a singer, songwriter, music producer and actress born in the United States.He began performing on the rock music scene on the Lower East Side in 2003, and later enrolled in the Tisch School of Arts at New York University. Interscope, worked as a songwriter for artists and captured the attention of producer Akon, who recognized her vocal abilities and hired her for her own label, Kon Live Distribution.", "In 2007, his videos of cover performances were seen on YouTube by Scooter Braun, who became his agent and took him to the city of Atlanta (Georgia), to meet with singer Usher. Bieber then signed on to Island Records, starting his professional career in 2009 after completing his first grade. The first, two-part debut album My World was released on November 17, 2009. Four successful singles were released preceding the album: One Time One Less Lonely Girl Love Me and Favorite Girl all reaching the top 15 on the Canadian Hot 100 and the top 40 on the Billboard Hot 100.", "Known simply by Rihanna, she is a singer, songwriter, actress and businesswoman from Barbados, of Barbadian, Guyanese and Irish descent. He signed a contract with publisher Def Jam Recordings after a hearing, which sparked interest from producer Evan Rogers and Jay-Z's vice president at the time for the young artist. In 2005 she recorded her first studio album, Music of the Sun, which reached the top 10 on the Billboard 200. A year later she released her second album, A Girl Like Me, , including the song that was his first American top single, SOS.");

    $pop_es = array("La cantante más conocida por el nombre artístico Lady Gaga, es una cantante, compositora, productora musical y actriz nacida en Estados Unidos. Ella comenzó a presentarse en el escenario musical de rock en el Lower East Side en 2003, y más tarde se matriculó en la Tisch School of Arts de la Universidad de Nueva York. A finales de 2007, firmó un contrato con Streamline Records, un sello de la editorial discográfica Interscope Records. Durante su inicio en Interscope, trabajó como compositora para artistas y captó la atención del productor Akon, que reconoció sus habilidades vocales y la contrató para su propia discográfica, Kon Live Distribution.", "En 2007, sus vídeos de presentaciones covers fueron vistos en YouTube por Scooter Braun, que hizo su agente y lo llevó a la ciudad de Atlanta (Georgia), para reunirse con el cantante Usher. Luego Bieber firmó contrato con Island Records, iniciando su carrera profesional en 2009, tras concluir el primer grado escolar. La primera, de dos partes del álbum de estreno, My World, fue lanzada el 17 de noviembre de 2009. Cuatro singles exitosos fueron lanzados precediendo el álbum: One Time One Less Lonely Girl Love Me y Favorite Girl todas alcanzando el top 15 en la parada Canadian Hot 100 y el top 40 de la Billboard Hot 100.", "Conocida simplemente por Rihanna, es una cantante, compositora, actriz y empresaria de Barbados, de ascendencia barbadiana, guyaní e irlandesa. En el momento de la audiencia, el guitarrista de la banda, el guitarrista de la banda, se mostró convencido de que el cantante, En 2005 grabó su primer álbum de estudio, Music of the Sun, que alcanzó el top 10 de la Billboard 200. Un año después lanzó su segundo trabajo de originales, A Girl like Me, obteniendo la quinta posición de la tabla musical norteamericana , incluyendo la canción que fue su primer top norteamericano en single, SOS.");

    $pop = array('PT'=> $pop_pt,'EN' => $pop_en,'ES' => $pop_es);
?>
<?php
//Php para verificar o idioma!
include('../imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
 $titlePagina = array('PT' => "Pop | Artistas", 'EN' => "Pop | Artist", 'ES' => "Pop | Artistas");
   //Importando o head
     include('../imports/head.php');
   ?>

<body>
    <!--Importando o menu -->
    <?php
    include('../imports/menu-secundario.php');
  ?>
    <!-- Conteudo da pagina  -->
    <main id="content">
        <article class="container">
            <div class="row pt-4">
                <section class="col-lg-4 col-md-4 col-sm-12">
                <img class="card-img mb-3 shadow" src="../images/pop/gaga-pop.jpg" alt="Foto da cantora Lady Gaga em preto e branco">
                    <h2 tabindex="0"class="display-9 mb-0 text-center">Lady Gaga</h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted">Stefani Joanne Angelina Germanotta</small></blockquote>
                    <p class="mb-3 text-justify"><?php echo $pop[$ID][0]?></p>  
                </section>
                <section class="col-lg-4 col-md-4 col-sm-12">
                <img class="card-img mb-3 shadow" src="../images/pop/justin-art.jpg" alt="Foto do cantor Justin Bieber em premiação">
                    <h2 tabindex="0"class="display-9 mb-0 text-center">Justin Bieber</h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted">Justin Drew Bieber</small></blockquote>
                    <p class="mb-3 text-justify"><?php echo $pop[$ID][1]?></p>
                </section>
                <section class="col-lg-4 col-md-4 col-sm-12">
                <img class="card-img mb-3 shadow" src="../images/pop/rihanna-art.jpg" alt="Foto da cantora Rihanna para sua capa de album de 2019">
                    <h2 tabindex="0"class="display-9 mb-0 text-center">Rihanna</h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted">Robyn Rihanna Fenty</small></blockquote>
                    <p class="mb-3 text-justify"><?php echo $pop [$ID][2]?></p> 
                </section>
                </div>

                <div class="row pt-4">
                <section class="col-lg-4 col-md-4 col-sm-12">
                <img class="card-img mb-3 shadow" src="../images/pop/gaga-pop.jpg" alt="Foto da cantora Lady Gaga em preto e branco">
                    <h2 tabindex="0" class="display-9 mb-0 text-center">Lady Gaga</h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted">Stefani Joanne Angelina Germanotta</small></blockquote>
                    <p class="mb-3 text-justify"><?php echo $pop[$ID][0]?></p>  
                </section>
                <section class="col-lg-4 col-md-4 col-sm-12">
                <img class="card-img mb-3 shadow" src="../images/pop/justin-art.jpg" alt="Foto do cantor Justin Bieber em premiação">
                    <h2 tabindex="0" class="display-9 mb-0 text-center">Justin Bieber</h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted">Justin Drew Bieber</small></blockquote>
                    <p class="mb-3 text-justify"><?php echo $pop[$ID][1]?></p>
                </section>
                <section class="col-lg-4 col-md-4 col-sm-12">
                <img class="card-img mb-3 shadow" src="../images/pop/rihanna-art.jpg" alt="Foto da cantora Rihanna para sua capa de album de 2019">
                    <h2 tabindex="0" class="display-9 mb-0 text-center">Rihanna</h2>
                    <blockquote class="blockquote mt-0 mb-3 text-center"><small class="text-muted">Robyn Rihanna Fenty</small></blockquote>
                    <p class="mb-3 text-justify"><?php echo $pop [$ID][2]?></p> 
                </section>
                </div>
        </article>
    </main>

    <!-- importando o footer da pagina -->
    <?php
    include('../imports/footer-secundario.php');
  ?>

</body>

</html>
