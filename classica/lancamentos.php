<?php
    $classica_pt = array("TOP 10","♫ Músicas clássicas mais famosas","Artistas","Composições","Período","Sonata ao Luar","Classicismo","Impressionismo","Romantismo","Classicismo","Romantismo","Século XX e XXI","Classicismo","Romantismo","Romantismo","Barroco");

    $classica_en = array("TOP 10","♫ Classical musics most famous","Artists","Compositions","Period","Moonlight Sonata","Classicism","Impressionism","Romanticism","Classicism","Romanticism","20th and 21st Century","Classicism","Romanticism","Romanticism","Baroque",);

    $classica_es = array("TOP 10","♫ Músicas clásicas más famosas","Artistas","Composiciones","Período","Sonata Al Chiaro Di Luna","Classicismo","Impresionismo","Romanticismo","Classicismo","Romanticismo","Siglo XX y XXI","Classicismo","Romanticismo","Romanticismo","Barroco");

    $classica = array('PT'=> $classica_pt,'EN' => $classica_en,'ES' => $classica_es);
?>
<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
 <!DOCTYPE html>
 <html lang ="<?php echo $lang?>">
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
    <div class="container">
        <!--NAV-->

        <!--NAV ENDS-->
        <!--ARTICLE-->
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <section class="header-famosas"> 
                    <div class="jumbotron jumbotron-fluid mb-0">
                        <h1 class="display-2 text-white font-weight-bold text-center"><?php echo $classica[$ID][0]?></h1>
                        <h2 class="text-white text-center"><?php echo $classica[$ID][1]?></h2>
                    </div>
                </section>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-4 mt-0">
                <article>
                    <table class="align-content-center tableclassica table mt-0">
                        <thead class="fcolor">
                            <tr>
                                <th></th>
                                <th><?php echo $classica[$ID][2]?></th>
                                <th><?php echo $classica[$ID][3]?></th>
                                <th><?php echo $classica[$ID][4]?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="fprimeiracolocada">1º</th>
                                <td class="fprimeiracolocada">Ludwig Van Beethoven</td>
                                <td class="fprimeiracolocada"><a href="https://www.youtube.com/watch?v=v2jir8opKlc" target="_blank" class="linklancamentos"><?php echo $classica[$ID][5]?></a></td>
                                <td class="fprimeiracolocada"><?php echo $classica[$ID][6]?></td>
                            </tr>
                            <tr>
                                <th>2º</th>
                                <td>Claude Debussy</td>
                                <td><a href="https://www.youtube.com/watch?v=CvFH_6DNRCY" target="_blank" class="linklancamentos">Clair De Lune</a></td>
                                <td><?php echo $classica[$ID][7]?></td>
                            </tr>
                            <tr>
                                <th>3º</th>
                                <td>Frederic Chopin</td>
                                <td><a href="https://www.youtube.com/watch?v=sg3DsKtZVHM" target="_blank" class="linklancamentos">Marche Funébre</a></td>
                                <td><?php echo $classica[$ID][8]?></td>
                            </tr>
                            <tr>
                                <th>4º</th>
                                <td>Wolfgang Amadeus Mozart</td>
                                <td><a href="https://www.youtube.com/watch?v=quxTnEEETbo" target="_blank" class="linklancamentos">Rondó Alla Turca</a></td>
                                <td><?php echo $classica[$ID][9]?></td>
                            </tr>
                            <tr>
                                <th>5º</th>
                                <td>Frans Liszt</td>
                                <td><a href="https://www.youtube.com/watch?v=DKA_ClgdbRY" target="_blank" class="linklancamentos">Rapsódia Húngara Nº2</a></td>
                                <td><?php echo $classica[$ID][10]?></td>
                            </tr>
                            <tr>
                                <th>6º</th>
                                <td>George Gershwin</td>
                                <td><a href="https://www.youtube.com/watch?v=ynEOo28lsbc" target="_blank" class="linklancamentos">Rhapsody In Blue</a></td>
                                <td><?php echo $classica[$ID][11]?></td>
                            </tr>
                            <tr>
                                <th>7º</th>
                                <td>Ludwig Van Beethoven</td>
                                <td><a href="https://www.youtube.com/watch?v=7eYktxvczjw" target="_blank" class="linklancamentos">Sonata Pathétique</a></td>
                                <td><?php echo $classica[$ID][12]?></td>
                            </tr>
                            <tr>
                                <th>8º</th>
                                <td>Robert Schumann</td>
                                <td><a href="https://www.youtube.com/watch?v=QiMFICjD5Hg" target="_blank" class="linklancamentos">Kinderszenen</a></td>
                                <td><?php echo $classica[$ID][13]?></td>
                            </tr>
                            <tr>
                                <th>9º</th>
                                <td>Frederic Chopin</td>
                                <td><a href="https://www.youtube.com/watch?v=0pF-EqPQW5g" target="_blank" class="linklancamentos">Valsa Minuto</a></td>
                                <td><?php echo $classica[$ID][14]?></td>
                            </tr>
                            <tr>
                                <th>10º</th>
                                <td>Johann Sebastian Bach</td>
                                <td><a href="https://www.youtube.com/watch?v=ho9rZjlsyYY" target="_blank" class="linklancamentos">Toccata and Fugue</a></td>
                                <td><?php echo $classica[$ID][15]?></td>
                            </tr>
                        </tbody>
                    </table>
                </article>
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
