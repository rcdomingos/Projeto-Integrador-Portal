<<<<<<< HEAD
<!DOCTYPE html>
<!--PHP para verificar qual o idioma do html -->
<html <?php if ($_GET['i']=='EN') { echo 'lang="en-US"';
            } else {echo 'lang="pt-BR"';}?>>
	<!--head-->
  <?php
        include('imports/head.php');
=======
<?php
//PHP para verificar qual o idioma do html
  include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang ="<?php echo $lang?>">
  <?php
  //importando o head da pagina
    include('imports/head.php');
>>>>>>> ba72f7c8789a97331dbf2bd0d126af2b4856a650
  ?>
  <body>
    <!-- Menu top das paginas -->
    <?php
      include('imports/menu.php');
    ?>
    <!-- Conteúdo do pagina -->
    <!--article com as informações de cada aluno -->
    <article class="quem-somos">
      <div class="container">
        <div class="row pb-2">
          <div class="text-center col-lg-4 mt-4">
            <img class="mb-2 rounded-circle shadow" src="images/principal/quem-somos.jpg" alt="Foto Karina Lucind">
              <h2 class="shadow-text font-weight-bold">Karina Lucindo</h2>
              <?php
<<<<<<< HEAD
              if ($_GET['i']=='PT') {
                echo "<p>RA:2650831813014 - Desenvolvedor</p>";
                echo '<p><a href="classica/index.php">Classica</a></p>';
                echo "<p>Eu sou a Karina Cavalcanti Lucindo, 18 anos de idade. Sou estudante da FATEC São Roque, cursando o 2º semestre do curso Sistemas para Internet. Sou responsável pela criação das páginas Clássica e da página Notícias.</p>";

              }
              if ($_GET['i']=='EN') {
                echo "<p>RA:2650831813022 - Developer</p>";
               echo '<p><a href="classica/index.php">Classica</a></p>';
                echo "<p>I'm Karina Cavalcanti Lucindo, 18 years old. I'm student at FATEC São Roque, cursing the second semester of Systems for Internet. I'm responsable about criation of the Classic pages and the News page.</p>";

=======
              if ($ID=='PT') {
                echo "<p>RA:2650831813014 - Desenvolvedor</p>";
                echo '<p><a href="classica/index.php">Classica</a></p>';
                echo "<p>Eu sou a Karina Cavalcanti Lucindo, 18 anos de idade. Sou estudante da FATEC São Roque, cursando Sistemas para Internet. Eu escolhi esse curso, pois eu não consegui obter uma nota boa no ENEM, então eu tentei o vestibular da FATEC e entrei.</p>";
              }
              if ($ID=='EN') {
                echo "<p>RA:2650831813022 - Developer</p>";
                echo '<p><a href="classica/index.php">Classica</a></p>';
                echo "<p>I'm Karina Cavalcanti Lucindo, 18 years old. I'm student at FATEC São Roque, cursing Systems for Internet. I've choosed this course because I haven't gotten a good grade at ENEM, so I've tried FATEC's test and gotten at it.</p>";
>>>>>>> ba72f7c8789a97331dbf2bd0d126af2b4856a650
                }
              ?>
          </div>
          <div class="text-center col-lg-4 mt-4">
            <img class="mb-2 rounded-circle shadow" src="images/principal/quem-somos.jpg" alt="Foto Rafael Jacome">
              <h2 class="shadow-text font-weight-bold">Rafael Jacome</h2>
              <?php
<<<<<<< HEAD
              if ($_GET['i']=='PT') {
=======
              if ($ID=='PT') {
>>>>>>> ba72f7c8789a97331dbf2bd0d126af2b4856a650
                echo "<p>RA:2650831813022 - Desenvolvedor</p>";
                echo '<p><a href="punk/index.php">Punk/Hardcore</a></p>';
                echo "<p>Sou Rafael Jacome, 24 anos de idade, estudante da Fatec São Roque do curso Sistemas para Internet. Minha escolha de curso é devido minha situação de pobreza. Estou cansado de ser pobre, quero ser muito rico, Inchalah.</p>";
              }
<<<<<<< HEAD
              if ($_GET['i']=='EN') {
=======
              if ($ID=='EN') {
>>>>>>> ba72f7c8789a97331dbf2bd0d126af2b4856a650
                echo "<p>RA:2650831813022 - Developer</p>";
                echo '<p><a href="punk/index.php">Punk/Hardcore</a></p>';
                echo "<p>I`m Rafael Jacome, 24 years old, Student at Fatec Sao Roque, Systems for Internet course. My choose of course is about my poor situation. I`m tired to be poor, i want to be very rich, Inchalah.</p>";
                }
              ?>
          </div>
          <div class="text-center col-lg-4 mt-4">
            <img class="mb-2 rounded-circle shadow" src="images/principal/quem-somos.jpg" alt="Foto Reginaldo Domingos">
              <h2 class="shadow-text font-weight-bold">Reginaldo Domingos</h2>
              <?php
<<<<<<< HEAD
              if ($_GET['i']=='PT') {
=======
              if ($ID=='PT') {
>>>>>>> ba72f7c8789a97331dbf2bd0d126af2b4856a650
                echo "<p>RA:2650831813029 - Desenvolvedor</p>";
                echo '<p><a href="sertanejo/index.php">Sertanejo</a></p>';
                echo "<p>Aluno do curso de Sistemas para Internet, na FATEC São Roque, estou no 2 semestre. Apreendendo  a desenvolver sítios para internet. Responsável por auxiliar no desenvolvimento dos javascripts e PHP do Portal.</p>";
              }
<<<<<<< HEAD
              if ($_GET['i']=='EN') {
=======
              if ($ID=='EN') {
>>>>>>> ba72f7c8789a97331dbf2bd0d126af2b4856a650
                echo "<p>RA:2650831813029 - Developer</p>";
                echo '<p><a href="sertanejo/index.php">Sertanejo</a></p>';
                echo "<p>Student of the Internet Systems course at FATEC São Roque, I'm in the 2nd semester. Seizing to develop internet sites. Responsible for assisting in the development of javascripts and PHP of the Portal.</p>";
                }
              ?>
          </div>
        </div>
      </div>
    </article>
    <article class="quem-somos-black">
      <div class="container">
        <div class="row pb-2">
          <div class="text-center col-lg-4 mt-4">
            <img class="mb-2 rounded-circle shadow" src="images/principal/quem-somos.jpg" alt="Foto Renata Carrillo">
              <h2 class="shadow-text font-weight-bold">Renata Carrillo</h2>
                <?php
<<<<<<< HEAD
                if ($_GET['i']=='PT') {
=======
                if ($ID=='PT') {
>>>>>>> ba72f7c8789a97331dbf2bd0d126af2b4856a650
                  echo "<p>RA:2650831813024 - Desenvolvedora</p>";
                  echo '<p><a href="hip-hop/index.php">Hip-Hop</a></p>';
                  echo "<p>Aluna do 2º semestre do curso de Sistemas para Internet na FATEC São Roque, tem 22 anos, é responsável pela parte da criação das páginas Hip Hop, e da página Cifras.</p>";
                }
<<<<<<< HEAD
                if ($_GET['i']=='EN') {
=======
                if ($ID=='EN') {
>>>>>>> ba72f7c8789a97331dbf2bd0d126af2b4856a650
                  echo "<p>RA:2650831813024 - Developer</p>";
                  echo '<p><a href="hip-hop/index.php">Hip-Hop</a></p>';
                  echo "<p>Student of the 2nd semester of the Internet Systems course at FATEC São Roque, 22, is responsible for the part of the creation of the pages Hip Hop, and the page Cifras.</p>";
                }
                ?>
          </div>
          <div class="text-center col-lg-4 mt-4">
            <img class="mb-2 rounded-circle shadow" src="images/principal/quem-somos.jpg" alt="Foto Thais Machado">
              <h2 class="shadow-text font-weight-bold">Thais Machado</h2>
              <?php
<<<<<<< HEAD
              if ($_GET['i']=='PT') {
=======
              if ($ID=='PT') {
>>>>>>> ba72f7c8789a97331dbf2bd0d126af2b4856a650
                echo "<p>RA:2650831813025 - Desenvolvedora</p>";
                echo '<p><a href="pop/index.php">Pop</a></p>';
                echo "<p>Aluna de Sistemas para Internet no 2º Semestre da Fatec - São Roque, responsavel pela criação do conteudo POP e da pagina indicações no PORTAL</p>";
              }
<<<<<<< HEAD
              if ($_GET['i']=='EN') {
=======
              if ($ID=='EN') {
>>>>>>> ba72f7c8789a97331dbf2bd0d126af2b4856a650
                echo "<p>RA:2650831813024 - Developer</p>";
                echo '<p><a href="pop/index.php">Pop</a></p>';
                echo "<p>Student of Internet Systems in the 2nd semester at Fatec-São Roque, responsible for creation of content POP and page indications on the PORTAL</p>";
              }
              ?>
          </div>
          <div class="text-center col-lg-4 mt-4">
            <img class="mb-2 rounded-circle shadow" src="images/principal/quem-somos.jpg" alt="Foto Victor Campos">
              <h2 class="shadow-text font-weight-bold">Victor Campos</h2>
              <?php
<<<<<<< HEAD
              if ($_GET['i']=='PT') {
=======
              if ($ID=='PT') {
>>>>>>> ba72f7c8789a97331dbf2bd0d126af2b4856a650
                echo "<p>RA:2650831813026 - Mockup & Desenvolvimeto</p>";
                echo '<p><a href="indie/index.php">Indie</a></p>';
                echo "<p>Nascido em 17 de abril de 1996, na cidade de São Roque, bacharel em design gráfico pela FMU FIAM-FAAM na turma de 2013 responsavel pela sessão idie do portal e pela criação dos mockups das páginas gerais do trabalho. Atualmente cursando o segudo semestra em sistemas para internet na FATEC São Roque.</p>";
              }
<<<<<<< HEAD
              if ($_GET['i']=='EN') {
=======
              if ($ID=='EN') {
>>>>>>> ba72f7c8789a97331dbf2bd0d126af2b4856a650
                echo "<p>RA:2650831813026 - Mockup & Development</p>";
                echo '<p><a href="indie/index.php">Indie</a></p>';
                echo "<p>Born on April 17, 1996, in the city of São Roque, a bachelor's degree in graphic design from FMU FIAM-FAAM in the 2013 class responsible for the session idie of the portal and for the creation of the mockups of the general pages of the work. Currently attending the second semester in internet systems at FATEC São Roque.</p>";
              }
              ?>
          </div>
        </div>
      </div>
    </article>
    <!-- importando o footer da pagina -->
    <?php
      include('imports/footer.php');
    ?>
  </body>
</html>
