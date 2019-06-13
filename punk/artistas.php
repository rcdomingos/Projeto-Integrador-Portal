<?php
$punk_pt = array("Voltar ao topo");
$punk_en = array("Back to the top");
$punk_es = array("Volver al principio");
$punk = array('PT' => $punk_pt, 'EN' => $punk_en, 'ES' => $punk_es);

?>

<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    $titlePagina = array('PT' => "Punk | Artistas", 'EN' => "Punk | Artists", 'ES' => "Punk | Artistas");
   //importando o head da pagina
     include('../imports/head.php');
   ?>
<body class="corpopunk">
    <?php
    include('../imports/menu-secundario.php');

    ?>
    <main id="content">
        <article>
            <div class="container text-black">
                <div class="row">
                    <div class="col-12">
                        <h1 class="p-4 text-center" tabindex="0">ARTISTAS</h1>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-3 col-6 text-black">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-bad-religion.jpg" class="p-1 img-fluid" alt="Foto da banda Bad religion, onde estão em pé olhando fixamente para a câmera">
                                <figcaption class="figure-caption text-black color-black">
                                    <h3>Bad Religion</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-6">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-ulster.jpg" class="p-1 img-fluid" alt="Capa do Álbum da banda Ulster, foto em preto e branco onde os integrantes estão todos vestindo capuz que cobre suas cabeças">
                                <figcaption class="figure-caption">
                                    <h3>Ulster</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-6">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-sexpistols.jpg" class="p-1 img-fluid" alt="Foto da banda Sex Pistols, estão sorridentes e o vocalista está Fumandono, ao fundo uma bandeira da Inglaterra">
                                <figcaption class="figure-caption">
                                    <h3>Sex Pistols</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-6">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-rdp.jpg" class="p-1 img-fluid" alt="foto da banda Ratos de Porão, onde  todos estão encarando a câmera com cara de bravo enquanto o vocalista João Gordo rosna para a câmera">
                                <figcaption class="figure-caption">
                                    <h3>Ratos de Porão</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-6">
                        <figure class="figure ">
                            <a href="index.php">
                                <img src="../images/punk/mini-ramones.jpg" class="p-1 img-fluid" alt="Na foto a banda Ramones faz pose com as mãos nos bolsos para a câmera escorados em uma parede">
                                <figcaption class="figure-caption">
                                    <h3>Ramones</h3>
                                </figcaption>
                            </a>
                        </figure>

                    </div>
                    <div class="col-lg-3 col-6">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-olhoseco.jpg" class="p-1 img-fluid" alt="Na Foto os integrantes da banda Olho Seco estão abraçados olhando um para o outro demonstrando felicidade">
                                <figcaption class="figure-caption">
                                    <h3>Olho Seco</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-6">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-kaos64.jpg" class="p-1 img-fluid" alt="Na foto a banda kaos 64 está no palco em um show, vestidos no estilo de Punk Inglês">
                                <figcaption class="figure-caption">
                                    <h3>Kaos 64</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-6">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-flicts.jpg" class="p-1 img-fluid" alt="Na foto a banda Flicts se encontra em um corredor, ambos estão encarando a câmera com um ar sério">
                                <figcaption class="figure-caption">
                                    <h3>Flicts</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-6">
                        <figure class="figure ">
                            <a href="index.php">
                                <img src="../images/punk/mini-dri.jpg" class="p-1 img-fluid" alt="Na foto a banda D.R.I. está encarando a câmera com seriedade">
                                <figcaption class="figure-caption">
                                    <h3>Dirty Roten Imbeciles</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-6">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-dk.jpg" class="p-1 img-fluid" alt="Na foto em preto e branco a verdadeira banda Dead Kennedys está encarando a câmera de forma desafiadora">
                                <figcaption class="figure-caption">
                                    <h3>Kead kennedys</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-6">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-colera.jpg" class="p-1 img-fluid" alt="Na foto a banda Cólera está encarando a câmera, o falecido vocalista Redson Pozzi segura o colete com as mãos">
                                <figcaption class="figure-caption">
                                    <h3>Cólera</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-6">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-bad-religion.jpg" class="p-1 img-fluid" alt="foto da banda B.R. que praticamente consolidou o Hardcore no Mundo, ambos encaram a câmera">
                                <figcaption class="figure-caption">
                                    <h3>Bad Religion</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-6">
                        <figure class="figure ">
                            <a href="index.php">
                                <img src="../images/punk/mini-dk.jpg" class="p-1 img-fluid" alt="Jello Biaffra rainha, o resto nadinha">
                                <figcaption class="figure-caption">
                                    <h3>Dead Kennedys</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-6">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-dri.jpg" class="p-1 img-fluid" alt="Banda de imbecis, ambos encaram a camera">
                                <figcaption class="figure-caption">
                                    <h3>D.R.I.</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-6">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-flicts.jpg" class="p-1 img-fluid" alt="Banda de Punk nacional muito boa, todos de pé olhando para a câmera">
                                <figcaption class="figure-caption">
                                    <h3>Anarquia Oi!.</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                    <div class="col-lg-3 col-6">
                        <figure class="figure">
                            <a href="index.php">
                                <img src="../images/punk/mini-rdp.jpg" class="p-1 img-fluid" alt="Banda do traidor do movimento João Gordo, o mesmo está rosnando">
                                <figcaption class="figure-caption">
                                    <h3>RxDxPx</h3>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <?php
    include('../imports/footer-secundario.php');
    ?>

</body>

</html>
