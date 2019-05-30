<?php
$indie_pt = array("Mundo Indie","Tudo que você precisa saber em um só lugar"  ,"Criolo","Conheça o novo álbum Espiral de Ilusão" ,"Emicida","10 anos de Triunfo!" ,"Flora Matos","O legado do Pretin"  ,"Artista do Ano"    ,'Conheça Djonga a mais nova revelação do rap br'," Mais sobre Djonga");
$indie_en = array("Indie World","All you need to know in one place"           ,"Criolo","Meet the new album Espiral de Ilusão"   ,"Emicida","10 years of Triunfo!","Flora Matos","The legacy of Pretin","Artist of the Year",'Meet Djonga the newest revelation of rap br'   ,"More about Djonga");
$indie_es = array("Mondo Indie","Todo lo que necesitas saber en un solo lugar","Criolo","Conoce el nuevo álbum Espiral de Ilusão","Emicida","10 años de Triunfo!" ,"Flora Matos","El legado del Pretin","Artista del Año"   ,'Conoce a la nueva revelación de rap br'        ," Más sobre Djonga");
$indie = array('PT' => $indie_pt, 'EN' => $indie_en, 'ES' => $indie_es);
?>

<!-- PHP para adicionar o titulo da página -->
<?php $titlePagina = array('PT' => "Indie | Pagina inicial", 'EN' => "Indie | Home", 'ES' => "Indie | Pagina principal"); ?>

<!-- PHP para verificar qual o idioma do html -->
<?php include('../imports/idioma.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo $lang?>">

<!-- Importando o head da página -->
<?php include('../imports/head.php'); ?>

<body>

  <!-- Menu -->
  <?php include('../imports/menu-secundario.php'); ?>

  <!-- Conteúdo da Página -->
  <main id="content">

    <!-- Contéudo Principal - Título / Suntítulo / Texto -->
    <article class="container my-5 my-md-5 my-lg-5 my-xl-5">
      <section class="row text-center">
        <div class="col-lg-12">
          <h1 tabindex="0" class="display-9 mb-0"> <?php echo $indie[$ID][0]; ?> </h1>
          <blockquote class="blockquote mt-0 mb-3"><small class="text-muted"><?php echo $indie[$ID][1]; ?></small>
          </blockquote>
        </div>
      </section>

      <section class="row text-justify">
        <div class="col-lg-12">
          <p class="mb-0">— sabe como os palhaços surgiram? — o criador perguntou. O recém-nascido fez que não. Seu
            corpo era adulto. Alto, musculoso, bruto. Feito para trabalho pesado. As mãos e os pés eram grandes, cada
            dedo como um martelo. Mas era um recém-nascido. Tinha algumas memórias. Sabia falar e compreender o que o
            criador e seus irmãos diziam. Sabia, especialmente, o que era um palhaço. Mas não fazia ideia de como sabia
            disso. E não sabia como os palhaços haviam surgido. — Palhaços surgiram para nos fazer rir — disse o
            criador, com um sorriso no rosto. Por alguma razão, o sorriso não reconfortava. O recém-nascido sentiu medo
            ao ver aquela boca larga, torta, de lábios finos e secos.</p>
        </div>
      </section>
    </article>

    <!-- Primeira Imagem - Wide -->
    <section class="container">
      <div class="row p-3">
        <div class="card text-white p-0">
          <div class="card-img-overlay">
            <h5 class="card-title"><a href="https://www.instagram.com/criolomc/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][2]; ?></u></a></h5>
            <p class="card-text"><?php echo $indie[$ID][3]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/criolo.jpg"
            alt="Foto do busto do cantor Criolo usando um moletom camuflado com o capus cobrindo a cabeça olhando para frente ao fundo a cor amarela.">
        </div>
      </div>
    </section>

    <!-- Segunda e Terceica Imagens / 1:1 -->

    <section class="container mt-4 mt-md-4 mt-lg-4 mt-xl-4 mb-5">
      <div class="row">
        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/emicida/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][4]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][5]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/emicida.jpg"
            alt="Foto do cantor Emicida de óculos escuro camiseta preta e boné coçando a barba ao fundo a cor vermelha.">
        </div>

        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/floramatos/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][6]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][7]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/flora.jpg"
            alt="Foto da cantora Flora Matos agachada usando uma blusa branca e rosa cheia de anéis e pulseiras segurando o queixo com a mão direita ao fundo a cor rosa.">
        </div>
      </div>
    </section>

    <!-- Segundo texto - Título / Sub. / Texto / Imagem 1:1 / Texto -->
    <section class="container mb-5">
      <section class="row text-center mb-3">
        <div class="col-lg-12">
          <h2 tabindex="0" class="display-9 mb-0"> <?php echo $indie[$ID][8]; ?> </h2>
          <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][9]; ?></small>
          </blockquote>
        </div>
      </section>

      <section class="row text-justify">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="mb-3">Os dentes amarelos e falhos. Os olhos que não sorriam com o rosto, mas se mantinham estáticos,
            esbugalhados, fixados nele com intensidade. Não era possível parar de olhar o criador, mas ele repugnava.
            Era seu pai, era o chefe da família. Merecia respeito. Todas essas noções estavam impregnadas no
            recém-nascido, vindas de algum lugar que ele não conhecia. O criador mancou até ele. Sua corcunda
            dificultava que se movimentasse. Chegou bem perto. </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p>Foi possível sentir seu hálito acre. — Crianças indesejadas eram vendidas para o circo — o criador
            continuou a explicação. — Algumas, que fossem boas crianças, que fossem espertas e ágeis, eram treinadas.
            Viravam malabaristas. Domadores. Mágicos. Eram boas crianças e viravam bons adultos. O recém-nascido engoliu
            em seco. As imagens de todos aqueles artistas vieram a sua mente, acompanhando a fala de seu pai. Ele nunca
            os vira, mas de alguma forma sabia o que eram. </p>
        </div>
      </section>

      <section class="row mt-3 mb-0">
        <div class="col-12">
          <div class="card text-white">
            <img class="card-img shadow" src="../images/indie/djonga.jpg"
              alt="Foto do cantor Djonga no video clip da música Favela Vive 3 vestido com um moletom e uma camiseta branca com o cabelo descolorido fazendo um sinal de ok com a mão esquera enquanto canta.">
          </div>
        </div>
      </section>

      <div class="row mt-0 mb-3">
        <div class="col-12">
          <a href="https://www.instagram.com/djongador/" target="_blank"
            class="text-body"><u><?php echo $indie[$ID][10]; ?></u></a>
        </div>
      </div>

      <section class="row text-justify">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="mb-3">— Mas e as crianças ruins? E aquelas crianças que não sabiam fazer nada? Que eram burras,
            vagarosas? O recém-nascido se sentiu mal ao ouvir aquilo. De alguma forma, teve uma lembrança de ser
            rejeitado. De ser inadequado para alguma coisa. Ele não sabia há quanto tempo estava vivo. Não lembrava de
            nada além daquela sala escura, cheia de máquinas e de partes de corpos. De seu pai e de seus irmãos. Será
            que sempre estivera ali? Será que ali nascera, há poucas horas ou poucos minutos? Mas então como já fora
            rejeitado? — As crianças ruins só podiam nos fazer rir </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p>— disse o criador. — Elas viravam palhaços. O criador segurou o rosto do recém-nascido. Sua mão era fraca e
            fedia a mofo. Mas o recém-nascido, muito mais forte, não conseguia resistir. Apenas ficou parado, sentindo
            dor, enquanto os dedos magros se afundaram em suas bochechas. Apertaram-nas contra os dentes até que ele
            sentisse o gosto ferroso de sangue. — As pessoas gostavam de rir das crianças ruins, porque elas mereciam.
            Então o mestre do picadeiro as tornava mais engraçadas. O criador pegou um cano de ferro. — Quebravam suas
            pernas —</p>
        </div>
      </section>
    </section>

    <!-- Direitos Autorais -->
    <?php include('texto.php'); ?>

  </main>

  <!-- FOOTER -->
  <?php include('../imports/footer-secundario.php'); ?>

</body>

</html>
