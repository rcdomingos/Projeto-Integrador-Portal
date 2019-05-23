<?php
//matrix com os idiomas utilizados na pagina usar $ID para os Vetores EX: <?php echo $jazz[$ID][2]>
$jazz_pt = array("JAZZ");
$jazz_en = array("JAZZ");
$jazz_es = array("JAZZ");
$jazz = array('PT' => $jazz_pt, 'EN' => $jazz_en, 'ES' => $jazz_es);

//tag<title>  Titulo das paginas;
$titlePagina = array('PT' => "Jazz | Destaques", 'EN' => "Jazz | Highlights", 'ES' => "Jazz | Reflejos");

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

<body id="body-jazz-destaque">
  <!-- menu da pagina -->
  <?php
  //importando o menu da pagina 
  include('../imports/menu-secundario.php');
  ?>
  <!-- Conteudo da pagina  -->
  <main id="content" class="destaque-jazz font-jazz">
    <div class="container mt-5">
      <div class="row mb-3 mb-md-5">
        <div class="col">
          <h1 class="jazz-h1  mb-3" tabindex="0">Fique por dentro das noticias do Jazz</h1>
          <p>Veja abaixo as noticias e novidades no mundo sobre o jazz:</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="card-columns">
        <div class="card">
          <img src="../images/jazz/virtuoses.jpg" class="card-img-top" alt="Imagem em múltipla exposição do saxofonista Joshua Redman no Festival Monka100 tocando">
          <a href="https://www1.folha.uol.com.br/ilustrada/2019/05/virtuoses-do-jazz-se-encontram-em-show-entre-o-sofisticado-e-o-pop.shtml" target="_blank" rel="noopener" aria-labelledby="tit-3" class="card-link">
            <h5 id="tit-3" class="card-header jazz-h5">Virtuoses do jazz se encontram em show entre o sofisticado e o pop.</h5>
            <div class="card-body">
              <p class="card-text">Saxofonista americano Joshua Redman e baixista Thiago Espírito Santo tocam em SP.</p>
              <p class="card-text"><small class="text-muted">Por: Folha de São Paulo</small></p>
            </div>
          </a>
        </div>
        <div class="card">
          <img src="../images/jazz/rio_das_ostras-373305.jpg" class="card-img-top" alt="Foto de pessoas em frente ao palco ao ar livre e em frente ao mar na cidade de Rio das Ostras">
          <a href="https://www.jb.com.br/cultura/2019/05/999948-rio-das-ostras-recebe-o-maior-festival-gratuito-de-jazz-e-blues-da-america-latina.html" target="_blank" rel="noopener" aria-labelledby="tit-4" class="card-link">
            <h5 id="tit-4" class="card-header jazz-h5">Rio das Ostras recebe o maior festival gratuito de jazz e blues da América Latina.</h5>
            <div class="card-body">
              <p class="card-text">A 16ª edição do evento será realizado de 20 a 23 de junho.</p>
              <p class="card-text"><small class="text-muted">Por: Jornal do Brasil</small></p>
            </div>
          </a>
        </div>
        <div class="card">
          <img src="../images/jazz/hoje-e-dia-de-jazz-bebe-credito-volo-filmes-5-.jpg" class="card-img-top" alt="Foto das crianças do projeto tocando instrumentos como bateria, saxophone, contra baixo e trompete ">
          <a href="https://g1.globo.com/sc/santa-catarina/musica/noticia/2019/05/14/floripa-jazz-hoje-e-dia-de-jazz-bebe-e-sexta-jazz-estilo-musical-e-destaque-na-cena-cultural-de-florianopolis.ghtml" target="_blank" rel="noopener" aria-labelledby="tit-5" class="card-link">
            <h5 id="tit-5" class="card-header jazz-h5">Floripa Jazz, Hoje é Dia de Jazz, Bebê e Sexta Jazz; estilo musical é destaque na cena cultural de Florianópolis.</h5>
            <div class="card-body">
              <p>Projetos de jazz ocorrem nesta semana com diversas atrações gratuitas.</p>
              <p class="card-text"><small class="text-muted">Por: G1</small></p>
            </div>
          </a>
        </div>
        <div class="card">
          <img src="../images/jazz/noticia_412926_img1_hamilton-de-holanda.jpg" class="card-img-top" alt="Foto de Hamilton de Holando em um show tocando guitarra e sorrindo para o publico">
          <a href="https://www.bemparana.com.br/noticia/primeira-edicao-do-curitiba-jazz-sessions-vai-agitar-a-cidade-nesta-quinta#.XN23WxRKhqM" target="_blank" rel="noopener" aria-labelledby="tit-6" class="card-link">
            <h5 id="tit-6" class="card-header jazz-h5">Primeira Edição do Curitiba Jazz Sessions vai agitar a cidade nesta quinta</h5>
            <div class="card-body">
              <p class="card-text">A partir dsta quinta-feira, Curitiba vai imergir no fascinante mundo do jazz.</p>
              <p class="card-text"><small class="text-muted">Por: Bem Parana</small></p>
            </div>
          </a>
        </div>
        <div class="card">
          <img src="../images/jazz/hhm.jpg" class="card-img-top" alt="Foto de pessoas em frente ao palco ao ar livre e em frente ao mar na cidade de Rio das Ostras">
          <a href="http://www.tenhomaisdiscosqueamigos.com/2019/05/15/rap-jazz-hip-hop-machine/" target="_blank" rel="noopener" aria-labelledby="tit-7" class="card-link">
            <h5 id="tit-7" class="card-header jazz-h5">Hip Hop Machine une Jazz a grandes nomes do Rap nacional.</h5>
            <div class="card-body">
              <p class="card-text">O Hip Hop Machine junta dois gêneros distintos comercialmente, mas com bastantes similaridades artísticas: o Jazz e o Rap.</p>
              <p class="card-text"><small class="text-muted">Por: Tenho Mais Discos que Amigos</small></p>
            </div>
          </a>
        </div>
        <div class="card">
          <img src="../images/jazz/jazzemSP.jpg" class="card-img-top" alt="Foto de uma banda em cima do palco tocando Jazz">
          <a href="https://vejasp.abril.com.br/blog/musica/onde-ouvir-jazz-ao-vivo-sao-paulo/" target="_blank" rel="noopener" aria-labelledby="tit-8" class="card-link">
            <h5 id="tit-8" class="card-header jazz-h5">Onde ouvir jazz ao vivo em São Paulo</h5>
            <div class="card-body">
              <p>Selecionamos cinco espaços para ouvir boa música às quartas-feiras.</p>
              <p class="card-text"><small class="text-muted">Por: Veja São Paulo</small></p>
            </div>
          </a>
        </div>
        <div class="card">
          <img src="../images/jazz/virtuoses.jpg" class="card-img-top" alt="Imagem em múltipla exposição do saxofonista Joshua Redman no Festival Monka100 tocando">
          <a href="https://www1.folha.uol.com.br/ilustrada/2019/05/virtuoses-do-jazz-se-encontram-em-show-entre-o-sofisticado-e-o-pop.shtml" target="_blank" rel="noopener" aria-labelledby="tit-9" class="card-link">
            <h5 id="tit-9" class="card-header jazz-h5">Virtuoses do jazz se encontram em show entre o sofisticado e o pop.</h5>
            <div class="card-body">
              <p class="card-text">Saxofonista americano Joshua Redman e baixista Thiago Espírito Santo tocam em SP.</p>
              <p class="card-text"><small class="text-muted">Por: Folha de São Paulo</small></p>
            </div>
          </a>
        </div>
        <div class="card">
          <img src="../images/jazz/hoje-e-dia-de-jazz-bebe-credito-volo-filmes-5-.jpg" class="card-img-top" alt="Foto das crianças do projeto tocando instrumentos como bateria, saxophone, contra baixo e trompete ">
          <a href="https://g1.globo.com/sc/santa-catarina/musica/noticia/2019/05/14/floripa-jazz-hoje-e-dia-de-jazz-bebe-e-sexta-jazz-estilo-musical-e-destaque-na-cena-cultural-de-florianopolis.ghtml" target="_blank" rel="noopener" aria-labelledby="tit-11" class="card-link">
            <h5 id="tit-11" class="card-header jazz-h5">Floripa Jazz, Hoje é Dia de Jazz, Bebê e Sexta Jazz; estilo musical é destaque na cena cultural de Florianópolis.</h5>
            <div class="card-body">
              <p>Projetos de jazz ocorrem nesta semana com diversas atrações gratuitas.</p>
              <p class="card-text"><small class="text-muted">Por: G1</small></p>
            </div>
          </a>
        </div>
        <div class="card">
          <img src="../images/jazz/rio_das_ostras-373305.jpg" class="card-img-top" alt="Foto de pessoas em frente ao palco ao ar livre e em frente ao mar na cidade de Rio das Ostras">
          <a href="https://www.jb.com.br/cultura/2019/05/999948-rio-das-ostras-recebe-o-maior-festival-gratuito-de-jazz-e-blues-da-america-latina.html" target="_blank" rel="noopener" aria-labelledby="tit-10" class="card-link">
            <h5 id="tit-10" class="card-header jazz-h5">Rio das Ostras recebe o maior festival gratuito de jazz e blues da América Latina.</h5>
            <div class="card-body">
              <p class="card-text">A 16ª edição do evento será realizado de 20 a 23 de junho.</p>
              <p class="card-text"><small class="text-muted">Por: Jornal do Brasil</small></p>
            </div>
          </a>
        </div>


      </div>
    </div>


  </main>
  <!-- footer da pagina -->
  <?php
  //importando o footer da pagina 
  include('../imports/footer-secundario.php');
  ?>
</body>

</html>
<!-- exemplo: http://rodneyrespectaward.com/ -->
