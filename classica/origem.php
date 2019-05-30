<?php
    $classica_pt = array("História: Tudo o que você não sabia sobre a música clássica","Um lugar muito grande de construção luxuosa possui várias poltronas e luzes. É o lugar onde ocorrem os concertos musicais","A origem","Várias folhas de partituras sendo folheadas","A origem do termo concerto sempre suscitou discussão entre os musicólogos. Já no início do século XVI sua origem era atribuída a duas palavras latinas.","A origem do termo concerto sempre suscitou discussão entre os musicólogos. Já no início do século XVI sua origem era atribuída a duas palavras latinas: a primeira, concertatum (do verbo concertare: combater, competir) - e a segunda, de consertum (do verbo conserere traduzido como entrelaçar, atar, mas também, em alguns contextos, como argumentar). Em 1619, Michael Praetorius apoiou a etimologia que dava a ideia de combate, o choque entre duas entidades instrumentais distintas tanto em número quanto em sonoridade.","A forma musical concerto pode ser encontrada a partir do século XVI, entre os anos de 1720 e 1780, com a criação do Concerto para Cravo e em obras vocais de Andrea Gabrieli ou Ludovico da Viadana sem forma ou estrutura típica. Durante o barroco o estilo se desenvolveu para uma forma instrumental que alterna entre partes do tutti (ripieno ou em italiano) e do solo (concertino), e como um rondó emprega no tutti sempre o mesmo tema. Ele passou a ter três movimentos (Rápido - lento - rapidíssimo), como em quase todos os exemplos de Antonio Vivaldi e Johann Sebastian Bach ou quatro (Lento - rápido - lento - rapidíssimo) como os concerti grossi de Georg Friedrich Handel. O Concerto grosso (italiano, plural: Concerti grossi) foi uma forma bastante usada no período barroco, que se constituía de um conjunto de três (ou mais) solistas com uma orquestra maior. Com o advento do Classicismo, o concerto passou a se estabelecer de maneira mais ou menos estruturada como a sonata clássica: um primeiro movimento em forma-sonata, o segundo movimento lento (sob qualquer forma) e o último em rondó. No Romantismo, os concertos passaram a ter como propósito explorar o virtuosismo, explorando ao máximo a potencialidade dos solistas.");
    $classica_en = array("History: Everything you did not know about classical music","A very large luxurious building has several armchairs and lights. It is the place where musical concerts take place","The origin","Several sheets of sheet music being clad","The origin of the term concert always aroused discussion among musicologists. At the beginning of the sixteenth century its origin was attributed to two Latin words.","The origin of the term concert always aroused discussion among musicologists. At the beginning of the sixteenth century its origin was attributed to two Latin words: the first, concertatum (from the verb concertare: to combat, to compete) and the second, from consertum (from the verb conserere translated as interlace binding, but also, in some contexts, like arguing). In 1619, Michael Praetorius supported the etymology that gave the idea of combat, the clash between two instrumental entities distinct in both number and sonority.","The concert musical form can be found from the XVI century, between the years of 1720 and 1780, with the creation of the Concerto for Cravo and in works of Andrea Gabrieli or Ludovico of the Viadana without form or typical structure. style has developed into an instrumental form that alternates between parts of the tutti (ripieno or in Italian) and solo (concertino), and how a rondo always employs the same theme in tutti.He had three movements (Fast - slow - very fast ), as in almost all the examples of Antonio Vivaldi and Johann Sebastian Bach or four (Slow - fast - slow - very fast) like the concerti grossi of Georg Friedrich Handel The Concerto grosso (Italian, plural: Concerti grossi) was a rather used in the Baroque period, which consisted of a group of three (or more) soloists with a larger orchestra. With the advent of Classicism, the concert began to be established in a more or less structured way as the classical sonata a: a first movement in sonata form, the second slow movement (in any form) and the last in rondo. In Romanticism, the concerts started to explore virtuosity, exploiting to the maximum the potentiality of the soloists. ");
    $classica_es = array("Historia: Todo lo que no sabía acerca de la música clásica","Un lugar muy grande de construcción de lujo tiene varios sillones y luces. Es el lugar donde ocurren los conciertos musicales","El origen","Varias hojas de partituras siendo revestidas","El origen del término concierto siempre suscitó discusión entre los musicólogos. Ya a principios del siglo XVI su origen se atribuía a dos palabras latinas.","El origen del término concierto siempre suscitó discusión entre los musicólogos. En el inicio del siglo XVI su origen se atribuía a dos palabras latinas: la primera, concertatum (del verbo concertare: combatir, competir) - y la segunda, de conservum (del verbo conserere traducido como entrelazando, atar, pero también, en algunos contextos, como argumentar). En 1619, Michael Praetorius apoyó la etimología que daba la idea de combate, el choque entre dos entidades instrumentales distintas tanto en número como en sonoridad.","La forma musical concierto se puede encontrar a partir del siglo XVI, entre los años 1720 y 1780, con la creación del Concierto para Cravo y en obras vocales de Andrea Gabrieli o Ludovico de la Viadana sin forma o estructura típica. Durante el barroco el el estilo se desarrolló para una forma instrumental que alterna entre partes del tutti (ripieno o en italiano) y del suelo (concertino), y como un rondó emplea en el tutti siempre el mismo tema, pasó a tener tres movimientos (Rápido - lento - rapidísimo como en casi todos los ejemplos de Antonio Vivaldi y Johann Sebastian Bach o cuatro (Lento - rápido - lento - rapidísimo) como los concert grossi de Georg Friedrich Handel. El Concierto grueso (italiano, plural: Concerti grossi) fue una forma bastante en el período barroco, que se constituía de un conjunto de tres (o más) solistas con una orquesta mayor. Con el advenimiento del Classicismo, el concierto se estableció de manera más o menos estructurada como la sonata clásica a: un primer movimiento en forma-sonata, el segundo movimiento lento (bajo cualquier forma) y el último en rondó. En el Romanticismo, los conciertos pasaron a tener como propósito explorar el virtuosismo, explorando al máximo la potencialidad de los solistas.");

    $classica = array('PT'=> $classica_pt,'EN' => $classica_en,'ES' => $classica_es);
?>
<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    $titlePagina = array('PT' => "Clássica | Origem", 'EN' => "Classic | Origin", 'ES' => "Clásico | Fuente");
   //importando o head da pagina
     include('../imports/head.php');
   ?>

<!--FINAL DO HEAD-->

<body>

    <!--NAV-->
    <?php 
      include('../imports/menu-secundario.php');
    ?>
    <!--FIM NAV-->
    <!--ARTICLE-->
    <main id="content">
        <div class="container mb-4">
            <div class="row linhadestaquesc mb-4">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <article class="mt-4">
                        <h2 class="text-left titulocorigem" tabindex="0"><strong><?php echo $classica[$ID][0]?></strong></h2>
                        <p tabindex="0" class="text-muted"><?php echo $classica[$ID][4]?></p>
                    </article>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7 text-center p-auto m-auto">
                    <section>
                        <img src="../images/classica/origem-01.jpg" tabindex="0" class="img-fluid rounded mx-auto d-block" alt="<?php echo $classica[$ID][1]?>">
                    </section>
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mt-4" tabindex="0"><?php echo $classica[$ID][2]?></h2>
                    <p tabindex="0"><?php echo $classica[$ID][5]?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                    <img src="../images/classica/origem-03.jpg" class="img-fluid rounded" tabindex="0" alt="<?php echo $classica[$ID][3]?>">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 mt-4">
                    <p tabindex="0"><?php echo $classica[$ID][6]?></p>
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
