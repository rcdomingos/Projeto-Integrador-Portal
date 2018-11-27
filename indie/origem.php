<?php
$indie_pt = array("Conheça a Origem do Estilo");
$indie_en = array("Know the Origin of Style");
$indie_es = array("Conozca el origen del estilo");
$indie = array('PT' => $indie_pt, 'EN' => $indie_en, 'ES' => $indie_es);
// print_r($sertanejo);
//usar $ID para os Vetores
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


<body>

<!-- Menu -->
<?php
include('../imports/menu-secundario.php');
?>

    <!-- Conteúdo da Página -->
    <br>
    <main>

        <!-- Imagem -->
        <div class="container">

            <div class="row text-center">

                <div class="col-sm-12 col-md-6 col-lg-12 col-xl-12">
                    <a href="#"><img class="rounded img-fluid" src="../images/indie/the-killers.jpg" alt="Generic placeholder image"></a>
                </div>

                <!-- Texto -->
                <div class="col-sm-12 col-md-6 col-lg-12 col-xl-12 text-center" id="indieorigem">
                    <br><br>
                    <h2> <?php echo $indie[$ID][0]; ?> </h2>
                    <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>
                    <br>
                    <p class=" text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in mollis mi. Aenean nec consectetur nisl, et dictum sapien. Sed sed nisi quis augue rhoncus hendrerit. Sed quis tortor ac nunc elementum lacinia eget at orci. Duis id lectus ut arcu tincidunt efficitur. Duis quis erat ultricies, consequat nisi eget, porta augue. Duis placerat a ligula nec convallis. Sed mollis consequat ipsum eget sagittis. Vivamus ut est magna. Phasellus tincidunt leo rutrum, porta urna ac, consectetur dui. Phasellus elit augue, vulputate ut fringilla a, tempus nec nulla. Vivamus id laoreet eros. Fusce ultricies justo in volutpat ultrices. Etiam enim dui, rhoncus et vehicula nec, maximus ut odio. Ut malesuada nulla velit, at consectetur massa faucibus et.</p>
                </div>
            </div>
        </div>

        <br><br>

        <!-- Quadrado 1 -->
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <img src="../images/indie/the-smiths.jpg" class="img-fluid" alt="Imagem responsiva">

                    <a href="https://www.officialsmiths.co.uk/tqid/" class="indietexto">The Smiths</a>

                    <p class="indietexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed libero libero.</p>

                </div>
            </div>
        </div>

        <!-- Quadrado 2 & 3 -->
        <div class="container">
            <div class="row">

                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 imgindie">

                    <img src="../images/indie/franz-ferdinand.jpg" class="img-fluid" alt="Imagem responsiva">

                    <a href="http://franzferdinand.com/" class="indietexto">Franz Ferdinand</a>

                    <p class="indietexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed libero libero.</p>

                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 imgindie">

                    <img src="../images/indie/the-xx.jpg" class="img-fluid" alt="Imagem responsiva">

                    <a href="http://thexx.info/home/" class="indietexto">The XX</a>

                    <p class="indietexto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed libero libero.</p>

                </div>
            </div>
        </div>

        <br>

    </main>

<!-- FOOTER -->
<?php
include('../imports/footer-secundario.php');
?>

</body>

</html>
