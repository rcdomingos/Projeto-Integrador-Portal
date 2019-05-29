<?php
$indie_pt = array("Quem Ouvir?"      ,"Conheça os principais artistas do momento"    ,"Kayuá & Sant","Leões da Norte part. II","Menestrel","Conheça o rapper paulista" ,"Coruja BC1","O rap fora de SP vive"  ,"Sant","O legado de Marechal"  ,"Filipe Ret","A velha nova cara do rap RJ","Marcelo D2","O legado dos anos 90 que continua vivo"   ,"Não é só de punch line que vive o rap"   ,"Descubra o motivo de todos estarem gravando com Cynthia Luz"   ,"Cynthia Luz","Conheça o novo álbum da cantora, Efeito Violeta"      ,"1","2","3","4","5","6","7");
$indie_en = array("Who to Listen to?","Meet the main artists of the moment"          ,"Kayuá & Sant","Leões da Norte part. II","Menestrel","Meet the São Paulo rapper" ,"Coruja BC1","Rap off SP lives"       ,"Sant","The legacy of Marechal","Filipe Ret","The old new face of rap RJ" ,"Marcelo D2","The legacy of the 90's that remains alive","It's not just punch line that rap lives" ,"Discover why everyone is recording with Cynthia Luz"           ,"Cynthia Luz","Meet the new album by the singer, Efeito Violeta"     ,"1","2","3","4","5","6","7");
$indie_es = array("¿Quem Ouvir?"     ,"Conoce a los principales artistas del momento","Kayuá & Sant","Leões da Norte part. II","Menestrel","Conozca el rapero paulista","Coruja BC1","El rap fuera de SP vive","Sant","El legado de Marechal" ,"Filipe Ret","La vieja cara del rap RJ"   ,"Marcelo D2","El legado de los años 90 que sigue vivo"  ,"No es sólo de punch line que vive el rap","Descubre el motivo de que todos estén grabando con Cynthia Luz","Cynthia Luz","Conozca el nuevo álbum de la cantante, Efeito Violeta","1","2","3","4","5","6","7");
$indie = array('PT' => $indie_pt, 'EN' => $indie_en, 'ES' => $indie_es);
?>

<!-- PHP para adicionar o titulo da página -->
<?php $titlePagina = array('PT' => "Indie | Artistas", 'EN' => "Indie | Artists", 'ES' => "Indie | Artistas"); ?>

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

    <!-- Contéudo Principal - Título / Suntítulo / Texto / Imagem 1:1 -->
    <article class="container my-5">
      <section class="row text-center mb-3">
        <div class="col-lg-12">
          <h1 tabindex="0" class="display-9 mb-0"><?php echo $indie[$ID][0]; ?></h1>
          <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][1]; ?></small>
          </blockquote>
        </div>
      </section>

      <section class="row text-justify">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="mb-3">outro golpe, desta vez no cotovelo. — Então amarravam os membros quebrados para que os ossos
            colassem de forma errada. As crianças só conseguiam andar de quatro. Isso é engraçado! Não acha? O
            recém-nascido fez que sim, mas na verdade não via graça nenhuma. O criador soltou o cano de ferro e apanhou
            uma navalha. — Mas era preciso deixá-las ainda mais engraçadas, para que as pessoas rissem muito.</p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p>Então — segurou o lábio superior do recém-nascido e encostou nele a lâmina — cortavam seus lábios. Os
            dentes e as gengivas ficavam para sempre aparecendo, como um riso eterno. O público via as crianças
            engatinhando, rindo sempre, e achava muita graça disso. O recém-nascido fechou os olhos, desejando que seus
            lábios não fossem cortados. Enfim, o criador afastou a navalha fria de sua boca. — </p>
        </div>
      </section>

      <section class="row">
        <div class="text-white col-12">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/kayua_/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][2]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][3]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/sant&kayua.jpg"
            alt="Foto dos cantores Sant e Kayuá para a promoção da música leõs da norte, foto em preto e branco com ambos segurando placas com os dizeres RJ - ZN,seus nomes e Registro com a data de 31 de novembro de 2011, Kayuá olhando para frente e Sant olhando para o lado">
        </div>
      </section>
    </article>

    <!-- 3x - Colunas de Informação / Título / Sub. / Text / Imagem 1:1 / Texto -->
    <section class="container mb-5">
      <div class="row">
        <section class="col-lg-4 col-md-4 col-sm-12">
          <h2 tabindex="0" class="display-9 mb-0 text-center"><?php echo $indie[$ID][4]; ?></h2>
          <blockquote class="blockquote mt-0 mb-3 text-center"><small
              class="text-muted"><?php echo $indie[$ID][5]; ?></small></blockquote>
          <p class="mb-3 text-justify">Enfim, o criador afastou a navalha fria de sua boca. — E eles continuavam
            cortando, porque era engraçado. Depois dos lábios, cortavam o nariz. O criador encostou a navalha no nariz
            do recém-nascido. Apertou e surgiu uma gota de sangue na pele branca. — As crianças ficavam com um grande e
            engraçado rombo vermelho no rosto. Que diversão! O criador pressionou mais forte. O recém-nascido sentiu a
            pele sendo cortada. — E então havia o toque final — o criador afastou a lâmina mais uma vez e o
            recém-nascido suspirou de alívio. </p>
          <img class="card-img mb-3 shadow" src="../images/indie/menestrel.jpg"
            alt="Foto do cantor Menestrel de camiseta laranja, óculos escuro e sidebag preta, ao fundo o céu azul e um coqueiro a sua esquerda">
          <p class="text-justify mb-0">— Pintavam-nas de branco! Então eram verdadeiros palhaços! Engatinhando, com riso
            eterno e um enorme buraco vermelho no nariz! Engraçados! O criador se afastou. Voltou com um espelho. — Mas
            você é mais engraçado que essas crianças. Você não foi apenas pintado. O criador segurou o espelho na frente
            do recém-nascido, e ele viu sua própria imagem. Um homem grandão, abrutalhado. Calvo, mas com cabelo de um
            vermelho muito vivo nas laterais da cabeça.</p>
          <a href="https://dittomusic.lnk.to/MenestrelBlackMirror?fbclid=IwAR0ZNFIEgtOOGLJ6QZ_5tQj6OaTTvHesfvmNYsiVviBCTwnEShDP3oB0Tz4"
            target="_blank" class="mt-0 p-0"><u>mais...</u></a>
        </section>

        <section class="col-lg-4 col-md-4 col-sm-12">
          <h2 tabindex="0" class="display-9 mb-0 text-center"><?php echo $indie[$ID][6]; ?></h2>
          <blockquote class="blockquote mt-0 mb-3 text-center"><small
              class="text-muted"><?php echo $indie[$ID][7]; ?></small></blockquote>
          <p class="mb-3 text-justify">Tinha lábios quase normais, mas o nariz era pintado de vermelho. E o rosto, o
            pescoço e o corpo todo também eram pintados — de um branco absoluto, mais claro que a pele de um albino. O
            recém-nascido passou a mão no rosto, tentou limpar a tinta. Não conseguiu, porque não era tinta. Aquela era
            a verdadeira cor de sua pele. Ele não fora transformado em palhaço: nascera daquele jeito. Sabia que as
            pessoas normais não eram assim. Elas tinham cores de pele variadas, mas nunca como aquela. Aquela era a cor
            dos palhaços. — Isso tudo é verdade? </p>
          <img class="card-img mb-3 shadow" src="../images/indie/coruja.jpg"
            alt="Foto do cantor Coruja BC1 usando uma camisa xadrez vermelha e azul no fundo cinza, aparentemente dançando.">
          <p class="text-justify mb-0">— Perguntou o recém-nascido. — Não interessa. Interessa que eu digo isso, então
            você deve acreditar que é verdade. Você não deve pensar muito, só fazer rir. É o que meu irmão quer. Ele
            quer rir. Ele quer palhaços divertidos. O recém-nascido concordou, trêmulo. — Você nasceu pior que os outros
            — disse o criador. — Vocês todos nasceram ruins. Foi isso que me disseram. Vocês são meus palhaços e
            nasceram ruins, mas vão me amar, porque somos uma família. </p>
          <a href="http://corujabc1oficial.tnb.art.br/" target="_blank" class="mt-0 p-0"><u>mais...</u></a>
        </section>

        <section class="col-lg-4 col-md-4 col-sm-12">
          <h2 tabindex="0" class="display-9 mb-0 text-center"><?php echo $indie[$ID][8]; ?></h2>
          <blockquote class="blockquote mt-0 mb-3 text-center"><small
              class="text-muted"><?php echo $indie[$ID][9]; ?></small></blockquote>
          <p class="mb-3 text-justify">Eram uma família. O recém-nascido olhou em volta e viu seus irmãos. Todos de pé,
            nus. As peles brancas, os corpos encolhidos. Tremendo de frio e de medo, na sala escura. Todos
            recém-nascidos. Todos com os olhos fixos no criador. O criador, Hans Gropp. E sua família, os palhaços.
            Zatati Ratatá, com duas cabeças e três braços. Guzzo, ainda maior e mais musculosa que os outros. Rizzo,
            atarracado, com corpo pequeno e bracinhos magros de criança. E ele mesmo. Ozob.parecia estar chovendo, mas
            era só esgoto pingando do céu. Mesmo o céu não era céu.</p>
          <img class="card-img mb-3 shadow" src="../images/indie/sant.jpg"
            alt="Foto do cantor Sant usando uma camiseta listrada cinza em alto contraste dando um ar obscuro no fundo preto.">
          <p class="text-justify mb-0">Era um teto artificial, escuro e imundo de fuligem, a trezentos metros de altura.
            A Cidade Baixa ficava no nível do solo, abaixo de níveis cada vez mais altos de plataformas onde viviam os
            ricos, os bem empregados, os cidadãos de bem. Na Cidade Baixa, sob camadas sucessivas, não havia céu, e o
            excremento das pessoas com mais valor gotejava pelos canos acima. Mas, se você morasse na Cidade Baixa e
            fosse esperto, não reclamaria, porque podia ser pior. De alguma forma.</p>
          <a href="http://www.vvar.com.br/sant/" target="_blank" class="mt-0 p-0"><u>mais...</u></a>
        </section>
      </div>
    </section>

    <!-- Segunda e Terceica Imagens / 1:1 -->
    <section class="container mb-5">
      <div class="row">
        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/filiperet/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][10]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][11]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/ret.jpg"
            alt="Foto do cantor Filipe Ret sorrindo sentado de pernas cruzadas, bermuda verde, sem camiseta e com cordão de ouro ao fundo cadeiras de vime.">
        </div>

        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/marcelod2/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][12]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][13]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/d2.jpg"
            alt="Foto do cantor Marcelo D2 em pé com as mãos na cabeça, camiseta preta, blusa jeans preta sem mangas e barba por fazer no fundo cinza.">
        </div>
      </div>
    </section>

    <!--  3x - Título / Sub. / Texto / Imagem / Texto -->
    <section class="container mb-5">
      <section class="row text-center">
        <div class="col-lg-12">
          <h2 tabindex="0" class="display-9 mb-0"><?php echo $indie[$ID][14]; ?></h2>
          <blockquote class="blockquote mt-0 mb-3"><small class="text-muted"><?php echo $indie[$ID][15]; ?></small>
          </blockquote>
        </div>
      </section>

      <section class="row text-justify">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p class="mb-3">A regra número um de viver na Cidade Baixa era que tudo sempre podia ficar pior. Se alguém
            achasse que a vida não podia piorar, Ozob lhe daria um soco. Ele se considerava a prova viva de que sempre é
            possível cavar a própria cova ainda mais fundo. Ou, em geral, cair numa cova que alguém cavou para você. Seu
            nascimento, há quase dois anos, já poderia ser desgraça </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p class="mb-3">suficiente para uma vida inteira. Nascera com pele branca e cabelo vermelho, construído para o
            trabalho pesado. Fora criado por alguém tão doente que, ele suspeitava, nem os maiores manuais de
            psiquiatria ainda haviam teorizado sobre o quão demente ele era. E isso sem falar em seus irmãos. Mas a cova
            ficava mais e mais funda. Ele não tinha mais o nariz — que nunca </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p class="mb-3">lhe agradara muito, fora uma porcaria bulbosa e vermelha. Mas pelo menos fora seu nariz. Agora
            tinha só um buraco no rosto. Não ter nariz não era divertido, e o que ele estava fazendo agora também não
            era. Agora era noite e Ozob fugia, porque estava sendo caçado. Ele era caçado por ser um criminoso. Estava
            cometendo um crime naquele exato instante, e o crime </p>
        </div>
      </section>

      <section class="card text-white mb-3 ">
        <div class="card-img-overlay">
          <h5 class="card-title"><a href="https://www.instagram.com/cyssluz/?hl=pt-br" target="_blank"
              class="text-white"><u><?php echo $indie[$ID][16]; ?></u></a></h5>
          <p class="card-text"><?php echo $indie[$ID][17]; ?></p>
        </div>
        <img class="card-img shadow" src="../images/indie/luz.jpg"
          alt="Foto da cantora Cynthia Luz ao que parece em uma área urbana com árvoes, de lhos fechados, óculos escuro, e blusa laranja com o rosto voltado para a luz. ">
      </section>

      <section class="row text-justify">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p class="mb-3">era estar na Terra. Os humanos, por alguma razão, não queriam construtos biológicos
            artificiais em seu precioso mundo. Pós-humanos, era como os chamavam. Queriam pós-humanos nas indústrias não
            regulamentadas em colônias pelo sistema solar; nas minas de metais raros em asteroides instáveis; nas
            tripulações de naves enviadas para explorar planetas </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p class="mb-3">distantes. Mas não na Terra. Pós-humanos eram perigosos demais para estar na Terra. Ozob era
            perigoso, estava sendo caçado e isso era só o mais recente ponto baixo em sua vida. Dois reguladores estavam
            atrás dele. “Regulador” era o eufemismo para um agente paramilitar de elite, pago pelas corporações para
            controlar toda infestação de pós-humanos que fosse </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <p>detectada em solo terreno. Chamavam-nos de policiais, o que era uma piada. Reguladores ganhavam melhor,
            tinham armas melhores e podiam matar com mais impunidade. A caçada já durava mais de doze horas, e os dois
            agentes estavam perto. Eles haviam conseguido acuar Ozob pelas ruas da Cidade Baixa, forçando-o a deixar os
            pontos mais discretos onde costumava </p>
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
