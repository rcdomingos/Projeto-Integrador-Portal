<?php
$indie_pt = array("Jean Tassy","Não é só de raiva que vive o rap"        ,"PK","A cena do funk no rap"       ,"Tiago Mac","O flow que soa como punch line"      ,"Kayuá","O leão ao norte"      ,"BK","Entre castelos e ruínas"  ,"A aparição do rap na cena nacional"         ,"Entenda como o rap chegou em todo o território nacional"  ,"1","2","3","4","5","6");
$indie_en = array("Jean Tassy","It's not just about anger that rap lives","PK","The funk scene in rap"       ,"Tiago Mac","The flow that sounds like punch line","Kayuá","The lion to the north","BK","Between castles and ruins","The appearance of rap on the national scene","Understand how rap has reached the national territory"    ,"1","2","3","4","5","6");
$indie_es = array("Jean Tassy","No es sólo de raiva que vive el rap"     ,"PK","La escena del funk en el rap","Tiago Mac","El flow que suena como punch line"   ,"Kayuá","El león al norte"     ,"BK","Entre castillos y ruinas" ,"La aparición del rap en la escena nacional" ,"Entiende cómo el rap llegó en todo el territorio nacional","1","2","3","4","5","6");
$indie = array('PT' => $indie_pt, 'EN' => $indie_en, 'ES' => $indie_es);
?>

<!-- PHP para adicionar o titulo da página -->
<?php $titlePagina = array('PT' => "Indie | Destaques", 'EN' => "Indie | Highlights", 'ES' => "Indie | Reflejos"); ?>

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

    <!-- Imagem Wide -->
    <section class="container my-5">
      <div class="card text-white">
        <img tabindex="0" class="card-img shadow" src="../images/indie/baco.jpg"
          alt="Foto do cantor Baco Exu do Blues ao fundo uma porta de aço.">
      </div>
    </section>

    <!-- 3x - Título / Sub. / Texto / Imagem / Texto  -->
    <section class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2 tabindex="0" class="display-9 mb-0 text-center"><?php echo $indie[$ID][0]; ?></h2>
          <blockquote class="blockquote mt-0 text-center"><small
              class="text-muted"><?php echo $indie[$ID][1]; ?></small></blockquote>
          <p class="my-3 text-justify">músicos com suas lentes de contato inteligentes ou mesmo com seus implantes
            neurais. Alguns filmavam tudo com aparelhos virtuais, sem forma física, exceto por um minúsculo implante,
            que existiam apenas como hologramas obedientes a gestos do usuário. Muitos ali pareciam conhecer o tal
            Johnny Molotov, mas estavam surpresos pelo show repentino. Chegando perto dos músicos, acompanhando os pulos
            e os encon- trões do povo ao redor deles, Ozob pôde </p>
          <img class="card-img shadow" src="../images/indie/jean.jpg"
            alt="Foto do cantor Jean Tassy ao fundo o por do sol.">
          <p class="my-3 text-justify">enxergar melhor a guarda-costas. Além dela, também havia uma pessoa dentro de um
            dos carros que haviam parado para dar início ao show, mas ele não conseguiu enxergá-la direito. Dois drones
            filmavam a apresentação, transmitindo o vídeo em tempo real para os luminosos gigantescos, invadindo o
            espaço da propaganda. A música instigava, chamava Ozob para perto. Ele sentiu um surto de entusiasmo, como
            se estivesse escutando aquele tipo de som pela </p>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2 tabindex="0" class="display-9 mb-0 text-center"><?php echo $indie[$ID][2]; ?></h2>
          <blockquote class="blockquote mt-0 text-center"><small
              class="text-muted"><?php echo $indie[$ID][3]; ?></small></blockquote>
          <p class="my-3 text-justify">primeira vez. Por quase um minuto, esqueceu dos reguladores em sua cola. O
            dirigível que sobrevoava a Times Square disparou seu holofote sobre os músicos. Os luminosos gigantescos,
            que transmitiam ilegalmente o show, saturaram de brilho e se tornaram brancos. Ouviu-se uma voz vinda de
            cima, gerada por um alto-falante ainda mais poderoso que o amplificador da banda: — Silêncio! Esta é uma
            manifestação cultural ilegal. Parem de tocar em nome do Departamento </p>
          <img class="card-img shadow" src="../images/indie/pk.jpg"
            alt="Foto do cantor PK de boné rosa no fundo preto.">
          <p class="my-3 text-justify">de Agenciamento Artístico. A guarda-costas ao lado da banda gritou: — Os
            desgraçados chegaram! Guardem os equipamentos e vamos fugir! Ofuscado, protegendo os olhos com o antebraço,
            Johnny Molotov mostrou o dedo do meio para o dirigível acima: — Vamos continuar tocando! Eles têm mais medo
            da música do que de armas! E então: — Um, dois, três, quatro! Enquanto uma terceira música começou, sob o
            holofote, duas dezenas de policiais em </p>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
          <h2 tabindex="0" class="display-9 mb-0 text-center"><?php echo $indie[$ID][4]; ?></h2>
          <blockquote class="blockquote mt-0 text-center"><small
              class="text-muted"><?php echo $indie[$ID][5]; ?></small></blockquote>
          <p class="my-3 text-justify">armaduras negras desceram de rapel do dirigível. Alguns já disparavam balas
            atordoantes de suas escopetas contra a multidão, outros preparavam seus bastões de densidade variável. A voz
            no dirigível anunciou: — Esta ação repressiva é um oferecimento de Nux-Cola. Nux-Cola, o sabor da amizade!
            Os policiais caíram sobre a multidão, atirando e batendo. Eles estavam vestidos de preto, com o logotipo do
            Departamento de Agenciamento Artístico nos ombros. Por toda a armadura, símbolos de corporações variadas,
          </p>
          <img class="card-img shadow" src="../images/indie/tiago.jpg"
            alt="Foto do cantor Tiago Mac em preto e branco de óculos escuro.">
          <p class="my-3 text-justify">mostrando seus patrocinadores e mestres. O Departamento de Agenciamento Artístico
            era um órgão operado em conjunto por diversas corporações. Tinha o dever de fomentar as boas manifestações
            culturais, que incentivassem os valores familiares e a cooperação. Quando encon- travam arte que levasse à
            rebelião, questionasse o consumo ou apenas não fosse aprovada pelos conselhos executivos das maiores
            empresas, os agentes do DAA cumpriam seu </p>
        </div>
      </div>
    </section>

    <!-- Segunda e Terceira Imagem / 1:1 -->
    <section class="container my-5">
      <div class="row">
        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-3">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3 text-shadow"><a href="https://www.instagram.com/kayua_/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][6]; ?></u></a></h5>
            <p class="card-text ml-3 text-shadow"><?php echo $indie[$ID][7]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/kayua.jpg"
            alt="Foto do cantor Kayua rindo de camiseta preta.">
        </div>

        <div class="text-white col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <div class="card-img-overlay">
            <h5 class="card-title ml-3"><a href="https://www.instagram.com/bkttlapa/" target="_blank"
                class="text-white"><u><?php echo $indie[$ID][8]; ?></u></a></h5>
            <p class="card-text ml-3"><?php echo $indie[$ID][9]; ?></p>
          </div>
          <img class="card-img shadow" src="../images/indie/bk.jpg"
            alt="Foto do cantor Rubel em frente ao microfone em Preto e Branco">
        </div>
      </div>
    </section>


    <!-- Contéudo Principal - Título / Suntítulo / Texto -->
    <article class="container mb-5">
      <section class="row text-center  mb-3">
        <div class="col-lg-12">
          <h1 tabindex="0" class="display-9 mb-0"><?php echo $indie[$ID][10]; ?></h2>
            <blockquote class="blockquote mt-0"><small class="text-muted"><?php echo $indie[$ID][11]; ?></small>
            </blockquote>
        </div>
      </section>

      <section class="row text-justify">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="mb-3">verdadeiro papel. Uma propaganda voltou a aparecer nos luminosos gigantes. Então foi cortada
            para o streaming da banda tocando e da repressão policial. Quem quer que estivesse invadindo o feed dos
            luminosos agora estava em um duelo eletrônico com os operadores oficiais. Ozob viu um garoto com no máximo
            16 anos cair no chão, mole, quando um agente desferiu um golpe pesado com o bastão de densidade variável em
            sua cabeça. Uma garota grávida recebeu uma bala atordoante no peito, sendo arremessada para trás. Então o
            agente pisou no rosto dela, correu para bater em outras pessoas. Nos luminosos imensos, imagens de </p>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p> famílias bebendo Nux-Cola e rindo em volta de uma mesa se alternavam com cenas da violência da polícia corporativa e dos
            músicos ainda tocando. De repente: — Ali está a aberração! Ozob olhou para trás e viu os dois reguladores.
            Eram ambos humanos. Um deles se vestia à moda dos neovitorianos — casaca bordada, sabre de cavalaria na
            cintura e bigode encerado, contrastando com a submetralhadora que destravou. O outro era um sujeito enorme,
            quase uma cabeça mais alto que o próprio Ozob. Trajava uma armadura tecnológica e carregava um fuzil de
            dardos elétricos. Reguladores não ostentavam seu patrocínio nas vestes, como agentes e  </p>
        </div>
      </section>
    </article>

    <!-- Direitos Autorais -->
    <?php include('texto.php'); ?>

  </main>

  <!-- FOOTER -->
  <?php include('../imports/footer-secundario.php'); ?>

</body>

</html>
