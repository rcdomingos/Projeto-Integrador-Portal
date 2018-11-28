<?php
  $hiphop_pt = array("Marcos: Mais Ouvidas","Posição","Artista","Música","Albúm");
  $hiphop_en = array("Mark: Most Listened","Status","Artist","Music","Album");
  $hiphop_es = array("Marcos: Más escuchadas", "posición", "Artista", "Música", "Álbum");
  $hiphop = array('PT'=> $hiphop_pt,'EN' => $hiphop_en, 'ES' => $hiphop_es);
// print_r($sertanejo);
//usar $ID para os Vetores
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
<body>
  <!--importandoo menu da pagina -->
  <?php
    include('../imports/menu-secundario.php');
  ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <h1 class="text-white bg-dark text-center font-italic font-weight-bold mt-4 mb-3"><?php echo $hiphop[$ID][0]?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col"><?php echo $hiphop[$ID][1]?></th>
                        <th scope="col"><?php echo $hiphop[$ID][2]?></th>
                        <th scope="col"><?php echo $hiphop[$ID][3]?></th>
                        <th scope="col"><?php echo $hiphop[$ID][4]?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1º</th>
                        <td>Drake</td>
                        <td>Nonstop</td>
                        <td>Scorpion</td>
                    </tr>
                    <tr>
                        <th scope="row">2º</th>
                        <td>Drake</td>
                        <td>Don’t Matter To Me ft Michael Jackson</td>
                        <td>Scorpion</td>
                    </tr>
                    <tr>
                        <th scope="row">3º</th>
                        <td>Drake</td>
                        <td>In My Feelings</td>
                        <td>Scorpion</td>
                    </tr>
                    <tr>
                        <th scope="row">4º</th>
                        <td>Drake</td>
                        <td>No Emotions</td>
                        <td>Scorpion</td>
                    </tr>
                    <tr>
                        <th scope="row">5º</th>
                        <td>Drake</td>
                        <td>I’m Upset</td>
                        <td>Scorpion</td>
                    </tr>
                    <tr>
                        <th scope="row">6º</th>
                        <td>Drake</td>
                        <td>Survive</td>
                        <td>Scorpion</td>
                    </tr>
                    <tr>
                        <th scope="row">7º</th>
                        <td>Drake</td>
                        <td>Elevate</td>
                        <td>Scorpion</td>
                    </tr>
                    <tr>
                        <th scope="row">8º</th>
                        <td>Drake</td>
                        <td>Mob Ties</td>
                        <td>Scorpion</td>
                    </tr>
                    <tr>
                        <th scope="row">9º</th>
                        <td>Drake</td>
                        <td>God’s Plan</td>
                        <td>Scorpion</td>
                    </tr>
                    <tr>
                        <th scope="row">10º</th>
                        <td>Drake</td>
                        <td>8 Out Of 10</td>
                        <td>Scorpion</td>
                    </tr>
                </tbody>
            </table>
    </div>
</div>
  <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-2">
                        <h4 class="text-center mt-4">Nonstop</h4>
                        <img src="../images/hip-hop/capa.jpg" class="rounded mx-auto d-block img-fluid" alt="Responsive image">
                        <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4" class="btn btn-outline-success active btn-lg btn-block btn btn-success float-none mt-3 mb-4" role="button" aria-pressed="true">Spotify</a></p>
                    </div>
                    <div class="col-12 col-sm-2">
                        <h4 class="text-center mt-4">Elevate</h4>
                        <img src="../images/hip-hop/capa.jpg" class="rounded mx-auto d-block img-fluid" alt="Responsive image">
                        <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4" class="btn btn-outline-success active btn-lg btn-block btn btn-success float-none mt-3 mb-4" role="button" aria-pressed="true">Spotify</a></p>
                    </div>
                    <div class="col-12 col-sm-2">
                        <h4 class="text-center mt-4">Nonstop</h4>
                        <img src="../images/hip-hop/capa.jpg" class="rounded mx-auto d-block img-fluid" alt="Responsive image">
                        <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4" class="btn btn-outline-success active btn-lg btn-block btn btn-success float-none mt-3 mb-4" role="button" aria-pressed="true">Spotify</a></p>
                    </div>
                    <div class="col-12 col-sm-2">
                        <h4 class="text-center mt-4">Elevate</h4>
                        <img src="../images/hip-hop/capa.jpg" class="rounded mx-auto d-block img-fluid" alt="Responsive image">
                        <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4" class="btn btn-outline-success active btn-lg btn-block btn btn-success float-none mt-3 mb-4" role="button" aria-pressed="true">Spotify</a></p>
                    </div>
                    <div class="col-12 col-sm-2">
                        <h4 class="text-center mt-4">Nonstop</h4>
                        <img src="../images/hip-hop/capa.jpg" class="rounded mx-auto d-block img-fluid" alt="Responsive image">
                        <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4" class="btn btn-outline-success active btn-lg btn-block btn btn-success float-none mt-3 mb-4" role="button" aria-pressed="true">Spotify</a></p>
                    </div>
                    <div class="col-12 col-sm-2">
                        <h4 class="text-center mt-4">Elevate</h4>
                        <img src="../images/hip-hop/capa.jpg" class="rounded mx-auto d-block img-fluid" alt="Responsive image">
                        <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4" class="btn btn-outline-success active btn-lg btn-block btn btn-success float-none mt-3 mb-4" role="button" aria-pressed="true">Spotify</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- importando o footer da pagina -->
    <?php
    include('../imports/footer-secundario.php');
  ?>
</body>

</html>
