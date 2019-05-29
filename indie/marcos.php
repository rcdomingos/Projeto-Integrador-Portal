<?php
$indie_pt = array("Racionais Mc's","A velha guarda ainda vive"    ,"Não é só de SP que vive o rap"      ,"Conheça as referências de outros estados","Marechal","A lenda sem álbum"       ,"Mv Bill","O Falcão do morro"     ,"Sabotage","Canão sente falta" ,"O legado que eles deixaram" ,"Conheça o impacto de suas letras imortalizadas em novos versos"  ,"1","2","3","4");
$indie_en = array("Racionais Mc's","The old school still lives"   ,"It's not just SP that lives the rap","Know the references of other states"     ,"Marechal","The legend without album","Mv Bill","The Hawk of the Hill"  ,"Sabotage","Canão feels lack"  ,"The legacy they left behind","Know the impact of your immortalized lyrics on new verses"       ,"1","2","3","4");
$indie_es = array("Racionais Mc's","La vieja guardia todavía vive","No es sólo de SP que vive el rap"   ,"Conozca las referencias de otros estados","Marechal","La leyenda sin álbum"    ,"Mv Bill","El Halcón de la colina","Sabotage","Canão siente falta","El legado que dejaron"      ,"Conozca el impacto de sus letras inmortalizadas en nuevos versos","1","2","3","4");
$indie = array('PT' => $indie_pt, 'EN' => $indie_en, 'ES' => $indie_es);
?>

<!-- PHP para adicionar o titulo da página -->
<?php $titlePagina = array('PT' => "Indie | Marcos", 'EN' => "Indie | Mark", 'ES' => "Indie | Hitos"); ?>

<!-- PHP para verificar qual o idioma do html -->
<?php include('../imports/idioma.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo $lang?>">

<!-- Importando o head da página -->
<?php include('../imports/head.php'); ?>

<body>

  <!-- Menu -->
  <?php include('../imports/menu-secundario.php'); ?>

  <!-- Conteúdo da pagina -->
  <main id="content">

    <!-- Imagem Wide-->
    <section class="container my-5">
      <div class="row">
        <div class="text-white col-12">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/racionaiscn/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][0]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][1]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/racionais.jpg"
            alt="Foto do Racionais Mc's em preto e branco">
        </div>
      </div>
    </section>

    <!-- Contéudo Principal - Título / Suntítulo / Texto / Imagem Wide / Texto -->
    <article class="container mb-5">
      <section class="row text-center">
        <div class="col-12">
          <h1 tabindex="0" class="display-9 mb-0"> <?php echo $indie[$ID][2]; ?> </h1>
          <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][3]; ?></small>
          </blockquote>
        </div>
      </section>

      <section class="row text-justify mt-3">
        <div class="col-12">
          <p>Policiais comuns. Reguladores eram mais discretos, mais sinistros e muito mais perigosos. O grandalhão fez
            mira e disparou seus dardos elétricos contra Ozob. O pós-humano se jogou no meio da multidão. A gritaria
            aumentou, com o fogo cruzado dos dois reguladores e dos agentes do DAA, e logo ninguém sabia mais quais
            tiros evitar, para onde fugir e quem era o principal inimigo. Um agente do DAA pegou Ozob desprevenido —
            chutou sua nuca com o coturno, deixando o pós-humano atordoado. Ozob começou a se virar, então recebeu uma
            pancada forte do bastão de densidade variável. A arma parecia um mero cassetete, mas era mesmo perigosa: em
            contato com o crânio branco, o material se tornou mais duro que aço, e Ozob sentiu a pele formigar por baixo
            da dor, então sangue escorrer. Escorou-se na multidão de corpos que, em pânico, tentavam fugir ou resistir.
            Dois agentes do DAA estavam sobre ele. Os reguladores ainda </p>
        </div>
      </section>

      <section class="card text-white my-3">
        <div class="card-img-overlay">
          <h5 class="card-title"><a href="https://www.instagram.com/mcmarechal/?hl=pt-br" target="_blanbk"
              class="text-white"><u><?php echo $indie[$ID][4]; ?></u></a></h5>
          <p class="card-text"><?php echo $indie[$ID][5]; ?></p>
        </div>
        <img class="card-img shadow" src="../images/indie/marechal.jpg"
          alt="Foto da cantor Marechal em um show cantando.">
      </section>

      <section class="row text-justify">
        <div class="col-lg-12">
          <p>estavam longe, mas abriram caminho por entre o povo, seus olhos já brilhando com a recompensa pela morte do criminoso. — Abaixe-se! — ouviu uma voz de mulher dizer e teve reflexo suficiente apenas para fazer o que ela ordenava. Era a guarda-costas dos músicos e ela saltou por sobre a multidão, passando a um centímetro da cabeça de Ozob, sobre os dois inimigos que estavam mais perto dele. Caiu nos dois homens de armadura negra. A mulher tinha garras afiadas e rugiu como uma fera. O sangue dos dois voou na cara do pós-humano. Ela era uma visão impressionante. Alta, ombros largos, vestia roupas sumárias, vermelhas, claramente com o propósito de evidenciar seu corpo e sua ferocidade. Era musculosa e sua pele era marcada </p>
        </div>
      </section>
    </article>

    <!-- Segunda e Terceira Imagem 1:1  -->
    <section class="container">
      <div class="row">
        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/mvbill/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][6]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][7]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/bill.jpg"
            alt="Foto do cantor Mv Bill de preta na frente de um muro de tijolos vermelhos.">
        </div>

        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/sabotageoficial/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][8]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][9]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/sabotage.jpg"
            alt="Foto do cantor Rubel em frente ao microfone em Preto e Branco">
        </div>
      </div>
    </section>

    <!-- Último Texto -->
    <section class="container my-5">
      <div class="row text-center">
        <div class="col-lg-12">
          <h2 tabindex="0" class="display-9 mb-0"><?php echo $indie[$ID][10]; ?></h2>
          <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][11]; ?></small>
          </blockquote>
        </div>
      </div>

      <div class="row text-justify mt-3">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="mb-3">por listras, como as de um tigre. Algo na maneira como se movimentava e no som que saíra de sua garganta sugeria um animal selvagem, algo diferente de humano. Ela tinha troféus pendurados na roupa — uma orelha e algo que parecia ser um escalpo. Suas mãos eram recobertas por metal líquido em forma de garras. Sua cabeça era raspada, coberta por tatuagens, e ela ostentava um moicano também feito de metal líquido, afiado como navalha. A guerreira enfiou os dedos pontiagudos de metal líquido na máscara de gás de um agente, </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p>quebrando o visor e perfurando seus olhos. Puxou- -o para perto de si e desferiu uma cabeçada. O moicano penetrou no capacete e rachou o crânio, matando-o na hora. O segundo agente estava com o peito rasgado, vertendo sangue. Com braços trêmulos, apontou a escopeta para a guerreira. Três agentes do DAA vieram por outro lado, fazendo mira contra ela. — Abaixe-se! — foi a vez de Ozob dizer, e ela obedeceu. O pós-humano abriu seu sobretudo e todos que viram aquilo deixaram a boca pender. Entre agentes da polícia corporativa, reguladores e uma </p>
        </div>
      </div>
    </section>

    <!-- Direitos Autorais -->
    <?php include('texto.php'); ?>

  </main>

  <!-- FOOTER -->
  <?php include('../imports/footer-secundario.php'); ?>

</body>

</html>
