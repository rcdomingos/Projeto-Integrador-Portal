<?php
//Arrays com os idiomas da pagina
$indicacoes_pt = array("Nossas Indicações");
$indicacoes_en = array("Our Indications");
$indicacoes_es = array("Nuestras indicaciones");
$indicacoes = array('PT' => $indicacoes_pt, 'EN' => $indicacoes_en, 'ES' => $indicacoes_es);
?>
<?php
//PHP para verificar qual o idioma do html
include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang ="<?php echo $lang ?>">
  <?php
    include('imports/head.php');
    ?>
  <body>
    <!-- Importanto menu da página -->
    <?php
    include('imports/menu.php');
    ?>
    <!-- Conteúdo do página -->
    <main>
        <div class="container mt-2 mb-3">
            <div class="row">
                <div class=" mt-1 col-md-6">
                    <article>
                        <h1><?php echo $indicacoes[$ID][0] ?></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Arcu felis bibendum ut tristique et egestas quis ipsum
                            suspendisse. Ullamcorper a lacus vestibulum sed arcu non odio euismod. Tincidunt tortor
                            aliquam nulla facilisi cras. Elit ullamcorper dignissim cras tincidunt lobortis. Eu non
                            diam phasellus vestibulum lorem sed risus ultricies tristique. Suspendisse faucibus
                            interdum posuere lorem ipsum. Tempus imperdiet nulla malesuada pellentesque elit eget
                            gravida. Placerat duis ultricies lacus sed. Nec feugiat nisl pretium fusce id velit ut
                            tortor pretium. Dui sapien eget mi proin. Mauris in aliquam sem fringilla. Vestibulum
                            sed arcu non odio. Sit amet nisl suscipit adipiscing bibendum est. Gravida arcu ac tortor
                            dignissim convallis. Malesuada pellentesque elit eget gravida. Praesent semper feugiat nibh
                            sed pulvinar proin gravida hendrerit. Blandit turpis cursus in hac habitasse platea dictumst
                            quisque sagittis. Aliquam malesuada bibendum arcu vitae. Facilisis magna etiam tempor orci eu
                            lobortis. Lectus quam id leo in vitae turpis massa sed elementum. Volutpat blandit aliquam
                            etiam erat velit. Porttitor lacus luctus accumsan tortor posuere. Eget velit aliquet sagittis id.
                            Eget aliquet nibh praesent tristique. In est ante in nibh mauris cursus mattis molestie.
                            In iaculis nunc sed augue lacus viverra vitae. Massa ultricies mi quis hendrerit. Diam vel quam
                            elementum pulvinar. Sagittis orci a scelerisque purus. Adipiscing tristique risus nec feugiat
                            in fermentum. Orci dapibus ultrices in iaculis nunc.</p>
                    </article>
                </div>
                <div class="col-md-6 mt-1">
                    <div id="baner-indica" class="container-fluid">
                        <aside>
                            <div class="row no-gutters caixaindiq caixa-1">
                                <div class="col-6 col-md-4">
                                    <div class="">
                                        <img src="images/principal/logo_coca.png" alt="Logo da Coca-Cola FM">
                                    </div>
                                </div>
                                <div class="col-6 col-md-8 texto-indiq">
                                    <p>Coca-Cola FM Online</p>
                                </div>
                            </div>
                            <div class="row no-gutters caixaindiq caixa-2">
                                <div class="col-6 col-md-4">
                                    <div class="">
                                        <img src="images/principal/logo_kiss.png" alt="Logo da Kiss FM">
                                    </div>
                                </div>
                                <div class="col-6 col-md-8 texto-indiq">
                                    <p>Kiss FM Online</p>
                                </div>
                            </div>
                            <div class="row no-gutters caixaindiq caixa-3">
                                <div class="col-6 col-md-4">
                                    <div class="">
                                        <img src="images/principal/logo-rock.png" alt="Logo da 89 a Radio Rock">
                                    </div>
                                </div>
                                <div class="col-6 col-md-8 texto-indiq">
                                    <p>89 FM Online</p>
                                </div>
                            </div>
                            <div class="row no-gutters caixaindiq caixa-4">
                                <div class="col-6 col-md-4">
                                    <div class="">
                                        <img src="images/principal/logo-mix.png" alt="Logo Radio MIX FM">
                                    </div>
                                </div>
                                <div class="col-6 col-md-8 texto-indiq">
                                    <p>Radio MIX FM</p>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Importando footer da página -->
    <?php
    include('imports/footer.php');
    ?>
</body>
</html>
