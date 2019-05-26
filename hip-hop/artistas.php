<?php
$hiphop_pt = array("Artistas", "Sobre", "Aubrey Drake Graham, conhecido pelo seu nome artístico Drake, é um rapper, cantor, compositor, produtor musical, ator e empresário canadense. Drake inicialmente ganhou reconhecimento como ator na série de televisão de drama adolescente Degrassi: The Next Generation, no início dos anos 2000.", "Matthew Tyler Musto, conhecido profissionalmente como Blackbear'ou WhiteBear, é um artista americano de gravação de hiphop, cantor e compositor.", "Konai, nome artístico de João Vitor, nasceu em 10 de Junho de 2001 em Taboão da Serra, interior de São Paulo, mas logo após seu nascimento passou a morar em Campo Grande, capital de Mato Grosso do Sul.", "G-Eazy, nome artístico de Gerald Earl Gillum, é um rapper, compositor e Produtor musical americano. Seu álbum de estreia, Must Be Nice foi lançado em 26 de setembro de 2012. Seu segundo álbum, These Things Happen, foi lançado em 23 de junho de 2014. O álbum atingiu o número 3 na Billboard 200.", "Abel Makkonen Tesfaye, mais conhecido por seu nome artístico The Weeknd, é um cantor e produtor musical canadense de R&B. É conhecido pelo uso de high note e uma sonoridade bastante atmosférica em suas canções. Sua carreira teve maior notoriedade após o sucesso 'Wicked Games'.");
$hiphop_en = array("Artist", "About", "Aubrey Drake Graham, known by his stage name Drake, is a rapper, singer, songwriter, music producer, actor and Canadian businessman. Drake initially gained recognition as an actor in the teen drama television series Degrassi: The Next Generation in the early 2000s.", "Matthew Tyler Musto, professionally known as Blackbear'or WhiteBear, is an American hiphop recording artist, singer and songwriter.", "Konai, the artistic name of João Vitor, was born on June 10, 2001 in Taboão da Serra, in the interior of São Paulo, but soon after his birth he moved to Campo Grande, capital of Mato Grosso do Sul.", "G-Eazy, the stage name of Gerald Earl Gillum, is a rapper, songwriter and American Music Producer. Their debut album, Must Be Nice was released on September 26, 2012. Their second album, These Things Happen, was released on June 23, 2014. The album reached number 3 on the Billboard 200.", "Abel Makkonen Tesfaye, better known by his stage name The Weeknd, is a Canadian R & B singer and producer. He is known for the use of high note and a very atmospheric sound in his songs. His career got more noticeable after the hit 'Wicked Games'.");
$hiphop_es = array("Artistas", "En", "Aubrey Drake Graham, conocido por su nombre artístico Drake, es un rapero, cantante, compositor, productor musical, actor y empresario canadiense. Drake inicialmente ganó reconocimiento como actor en la serie de televisión de drama adolescente Degrassi: The Next Generation, a principios de los años 2000.", "Matthew Tyler Musto, conocido profesionalmente como Blackbear'ou WhiteBear, es un artista estadounidense de grabación de hiphop, cantante y compositor.", "Konai, nombre artístico de João Vitor, nació el 10 de junio de 2001 en Taboão da Serra, interior de São Paulo, pero poco después de su nacimiento pasó a vivir en Campo Grande, capital de Mato Grosso do Sul.", "G-Eazy, nombre artístico de Gerald Earl Gillum, es un rapero, compositor y Productor musical americano. Su segundo álbum, These Things Happen, fue lanzado el 23 de junio de 2014. El álbum alcanzó el número 3 en la Billboard 200.", "Abel Makkonen Tesfaye, más conocido por su nombre artístico The Weeknd, es un cantante y productor musical canadiense de R & B. Es conocido por el uso de high note y una sonoridad bastante atmosférica en sus canciones. Su carrera tuvo mayor notoriedad después del éxito 'Wicked Games'.");
$hiphop = array('PT' => $hiphop_pt, 'EN' => $hiphop_en, 'ES' => $hiphop_es);
// print_r($sertanejo);
//usar $ID para os Vetores
//tag<title>  Titulo das paginas;
$titlePagina = array('PT' => "Hip Hop | Pagina inicial", 'EN' => "Hip Hop | Home", 'ES' => "Hip Hop | Pagina principal");

?>
<?php
//PHP para verificar qual o idioma do html
include('../imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<?php
//importando o head da pagina
include('../imports/head.php');
?>

<body>
    <!--importandoo menu da pagina -->
    <?php
    include('../imports/menu-secundario.php');
    ?>
    <main id="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row mt-3 mb-3">
                        <div class="col-12">
                            <h1 class="text-white bg-dark text-center font-italic font-weight-bold" tabindex="0"><?php echo $hiphop[$ID][0] ?></h1>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3 col-12 mt-2">
                                <img src="../images/hip-hop/defitiniva2.jpg" class="rounded mx-auto d-block img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-sm-3 col-12 mt-2">
                                <h2 class="text-muted ml-4" tabindex="0">Drake</h2>
                                <span class="badge badge-secondary ml-2">Top 1</span>
                                <span class="badge badge-secondary">Hip Hop</span>
                                <span class="badge badge-secondary">Rap</span>
                                <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4" class="btn btn-outline-success active mt-3 ml-4" role="button" aria-pressed="true">Spotify</a></p>
                            </div>
                            <div class="col-sm-6 mt-2">
                                <div class="card border-secondary mb-3" style="max-width: 30rem;">
                                    <div class="card-header"><?php echo $hiphop[$ID][1] ?></div>
                                    <div class="card-body text-secondary">
                                        <p class="card-text"><?php echo $hiphop[$ID][2] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-12 mt-5">
                                <img src="../images/hip-hop/defitiniva2.jpg" class="rounded mx-auto d-block img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-sm-3 col-12 mt-5">
                                <h2 class="text-muted ml-4" tabindex="0">Blackbear</h2>
                                <span class="badge badge-secondary ml-2">Top 1</span>
                                <span class="badge badge-secondary">Hip Hop</span>
                                <span class="badge badge-secondary">Rap</span>
                                <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4" class="btn btn-outline-success active mt-3 ml-4" role="button" aria-pressed="true">Spotify</a></p>
                            </div>
                            <div class="col-sm-6 mt-5">
                                <div class="card border-secondary mb-3" style="max-width: 30rem;">
                                    <div class="card-header"><?php echo $hiphop[$ID][1] ?></div>
                                    <div class="card-body text-secondary">
                                        <p class="card-text">
                                            <p class="card-text"><?php echo $hiphop[$ID][3] ?></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-12 mt-5">
                                <img src="../images/hip-hop/defitiniva2.jpg" class="rounded mx-auto d-block img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-sm-3 col-12 mt-5">
                                <h2 class="text-muted ml-4" tabindex="0">Konai</h2>
                                <span class="badge badge-secondary ml-2">Top 1</span>
                                <span class="badge badge-secondary">Hip Hop</span>
                                <span class="badge badge-secondary">Rap</span>
                                <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4" class="btn btn-outline-success active mt-3 ml-4" role="button" aria-pressed="true">Spotify</a></p>
                            </div>
                            <div class="col-sm-6 mt-5">
                                <div class="card border-secondary mb-3" style="max-width: 30rem;">
                                    <div class="card-header"><?php echo $hiphop[$ID][1] ?></div>
                                    <div class="card-body text-secondary">
                                        <p class="card-text">
                                            <p class="card-text"><?php echo $hiphop[$ID][4] ?></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-12 mt-5">
                                <img src="../images/hip-hop/defitiniva2.jpg" class="rounded mx-auto d-block img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-sm-3 col-12 mt-5">
                                <h2 class="text-muted ml-4" tabindex="0">G-eazy</h2>
                                <span class="badge badge-secondary ml-2">Top 1</span>
                                <span class="badge badge-secondary">Hip Hop</span>
                                <span class="badge badge-secondary">Rap</span>
                                <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4" class="btn btn-outline-success active mt-3 ml-4" role="button" aria-pressed="true">Spotify</a></p>
                            </div>
                            <div class="col-sm-6 mt-5">
                                <div class="card border-secondary mb-3" style="max-width: 30rem;">
                                    <div class="card-header"><?php echo $hiphop[$ID][1] ?></div>
                                    <div class="card-body text-secondary">
                                        <p class="card-text">
                                            <p class="card-text"><?php echo $hiphop[$ID][5] ?></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-sm-3 col-12 mt-5">
                                <img src="../images/hip-hop/defitiniva2.jpg" class="rounded mx-auto d-block img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-sm-3 col-12 mt-5">
                                <h2 class="text-muted ml-4" tabindex="0">The Weekend</h2>
                                <span class="badge badge-secondary ml-2">Top 1</span>
                                <span class="badge badge-secondary">Hip Hop</span>
                                <span class="badge badge-secondary">Rap</span>
                                <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4" class="btn btn-outline-success active mt-3 ml-4" role="button" aria-pressed="true">Spotify</a></p>
                            </div>
                            <div class="col-sm-6 mt-5">
                                <div class="card border-secondary mb-3" style="max-width: 30rem;">
                                    <div class="card-header"><?php echo $hiphop[$ID][1] ?></div>
                                    <div class="card-body text-secondary">
                                        <p class="card-text">
                                            <p class="card-text"><?php echo $hiphop[$ID][6] ?></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
    </main>
    </div>
    </div>
    </div>
    <!-- importando o footer da pagina -->
    <?php
    include('../imports/footer-secundario.php');
    ?>
</body>

</html>