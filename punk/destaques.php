<?php
$punk_pt = array("Artista", "Música",);
$punk_en = array("Artist", "Music");
$punk_es = array("Artistas", "musica");
$punk = array('PT' => $punk_pt, 'EN' => $punk_en, 'ES' => $punk_es);

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

<body class="corpopunk">
    <?php
    include('../imports/menu-secundario.php')
    ?>

    <article>
        <div class="container">
            <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="row">
                            <div class="col-6">
                                <img src="../images/punk/homebotas.jpg">
                            </div>
                            <div class="col-6">

                                <img src="../images/punk/homedestaque.jpg">
                            </div>
                        </div>
                    </div>
               
                
                <div class="col-lg-6">

                    <table class="table text-white">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">
                                    <?php echo $punk[$ID][0] ?>
                                </th>
                                <th scope="col">
                                    <?php echo $punk[$ID][1] ?>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Ratos de Porão</th>
                                <td>Cruscificados pelo sistema</td>
                            </tr>
                            <tr>
                                <th scope="row">Bad Religion</th>
                                <td>American jesus</td>
                            </tr>
                            <tr>
                                <th scope="row">sex Pistols</th>
                                <td>Anarchy in the UK</td>
                            </tr>
                            <tr>
                                <th scope="row">Blind Pigs</th>
                                <td>Protesto</td>
                            </tr>
                            <tr>
                                <th scope="row">Cólera</th>
                                <td>Caos Mental Geral</td>
                            </tr>
                            <tr>
                                <th scope="row">Agrotoxico</th>
                                <td>Alienação</td>
                            </tr>
                            <tr>
                                <th scope="row">Dead Fish</th>
                                <td>MST</td>
                            </tr>
                            <tr>
                                <th scope="row">Afoite</th>
                                <td>Quem Vigia os Vigilantes</td>
                            </tr>
                            <tr>
                                <th scope="row">Ratos de Porão</th>
                                <td>Igreja Universal</td>
                            </tr>
                            <tr>
                                <th scope="row">Olho Seco</th>
                                <td>Isso é Olho Seco</td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>

    </article>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




    <?php
    include('../imports/footer-secundario.php')
    
    ?>

</body>



</html>
