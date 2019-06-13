<?php
$punk_pt = array("Artista", "Música","DESTAQUES", "Voltar ao topo");
$punk_en = array("Artist", "Music","HIGHLIGHTS", "Back to the top");
$punk_es = array("Artistas", "Musica","REFLEJOS", "Volver al principio");

$punk = array('PT' => $punk_pt, 'EN' => $punk_en, 'ES' => $punk_es);

?>
<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    $titlePagina = array('PT' => "Punk | Destaques", 'EN' => "Punk | Highlights", 'ES' => "Punk | Reflejos");
   //importando o head da pagina
     include('../imports/head.php');
  ?>
<body>
    <?php
    include('../imports/menu-secundario.php');
    ?>

    <main id="content">
        <article>
            <div class="container">
                <div class="row">
                    <h1 class="col-12 text-center p-4" tabindex="0"><?php echo $punk[$ID][2]?></h1>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <table class="table text-black">
                            <thead class="thead-dark" tabindex="0">
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
                                <tr tabindex="0">
                                    <th scope="row">Ratos de Porão</th>
                                    <td>Cruscificados pelo sistema</td>
                                </tr>
                                <tr tabindex="0">
                                    <th scope="row">Bad Religion</th>
                                    <td>American jesus</td>
                                </tr>
                                <tr tabindex="0">
                                    <th scope="row">sex Pistols</th>
                                    <td>Anarchy in the UK</td>
                                </tr>
                                <tr tabindex="0">
                                    <th scope="row">Blind Pigs</th>
                                    <td>Protesto</td>
                                </tr>
                                <tr tabindex="0">
                                    <th scope="row">Cólera</th>
                                    <td>Caos Mental Geral</td>
                                </tr>
                                <tr tabindex="0">
                                    <th scope="row">Agrotoxico</th>
                                    <td>Alienação</td>
                                </tr>
                                <tr tabindex="0">
                                    <th scope="row">Dead Fish</th>
                                    <td>MST</td>
                                </tr>
                                <tr tabindex="0">
                                    <th scope="row">Afoite</th>
                                    <td>Quem Vigia os Vigilantes</td>
                                </tr>
                                <tr tabindex="0">
                                    <th scope="row">Ratos de Porão</th>
                                    <td>Igreja Universal</td>
                                </tr>
                                <tr tabindex="0">
                                    <th scope="row">Olho Seco</th>
                                    <td>Isso é Olho Seco</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="p-3 col-lg-6">
                                <img class="img-fluid" src="../images/punk/mini-dri.jpg" tabindex="0" alt="Foto da banda Dirty Rotten Inbecilles, uma banda de Thrash Punk Crossover, estao todos olhando para a camera">
                            </div>
                            <div class="p-3 col-lg-6">

                                <img class="img-fluid" src="../images/punk/mini-bad-religion.jpg" tabindex="0" alt="Foto de uma banda desconhecida, religião má, zueira">
                            </div>
                        </div>
                        <div class="row">
                            <div class="p-3 col-lg-6">
                                <img class="img-fluid" src="../images/punk/mini-colera.jpg" tabindex="0" alt="Melhor banda de todas, o resto é balela">
                            </div>
                            <div class="p-3 col-lg-6">
                                <img class="img-fluid" src="../images/punk/mini-rdp.jpg" tabindex="0" alt="Banda do vocalista que é o terror de Dado Dollabela">
                            </div>
                        </div>
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
