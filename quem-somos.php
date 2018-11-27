<?php
//PHP para verificar qual o idioma do html
  include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang ="<?php echo $lang?>">
  <?php
  //importando o head da pagina
    include('imports/head.php');
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
            <img class="mb-2 rounded-circle" src="images/principal/karina-quem-somos.jpeg" alt="Foto Karina Lucindo">
              <h2 class="shadow-text font-weight-bold">Karina Lucindo</h2>
              <?php
              if ($ID=='PT') {
                echo "<p>RA:2650831813014 - Desenvolvedora</p>";
                echo '<p><a href="classica/index.php">Classica</a></p>';
                echo "<p>Karina Cavalcanti Lucindo, 18 anos de idade. Estudante da FATEC São Roque, cursando Sistemas para Internet. Responsável pela página Notícias e pela sessão Clássica.</p>";
              }
              if ($ID=='EN') {
                echo "<p>RA:2650831813022 - Developer</p>";
                echo '<p><a href="classica/index.php">Classica</a></p>';
                echo "<p>Karina Cavalcanti Lucindo, 18 years old. She's student at FATEC São Roque, studying Systems for Internet. She's responsible for the page News and about the Classic session.</p>";
                }
              if ($ID=='ES') {
                echo "<p>RA:2650831813022 - Revelador</p>";
                echo '<p><a href="classica/index.php">Classica</a></p>';
                echo "<p>Karina Cavalcanti Lucindo, 18 años de edad. Estudiante de FATEC São Roque, cursando Sistemas para Internet. Responsable por la página Noticias y la sesión Clásica.</p>";
                }
              ?>
          </div>
          <div class="text-center col-lg-4 mt-4">
            <img class="mb-2 rounded-circle" src="images/principal/rafael-quem-somos.jpg" alt="Foto Rafael Jacome">
              <h2 class="shadow-text font-weight-bold">Rafael Jacome</h2>
              <?php
              if ($ID=='PT') {
                echo "<p>RA:2650831813022 - Desenvolvedor</p>";
                echo '<p><a href="punk/index.php">Punk/Hardcore</a></p>';
                echo "<p>Sou Rafael Jacome, 24 anos de idade, estudante da Fatec São Roque do curso Sistemas para Internet. Minha escolha de curso é devido minha situação de pobreza. Estou cansado de ser pobre, quero ser muito rico, Inchalah.</p>";
              }
              if ($ID=='EN') {
                echo "<p>RA:2650831813022 - Developer</p>";
                echo '<p><a href="punk/index.php">Punk/Hardcore</a></p>';
                echo "<p>I`m Rafael Jacome, 24 years old, Student at Fatec Sao Roque, Systems for Internet course. My choose of course is about my poor situation. I`m tired to be poor, i want to be very rich, Inchalah.</p>";
                }
              if ($ID=='ES') {
                echo "<p>RA:2650831813022 - Revelador</p>";
                echo '<p><a href="punk/index.php">Punk/Hardcore</a></p>';
                echo "<p>Soy Rafael Jacome, 24 años de edad, estudiante de Fatec São Roque del curso Sistemas para Internet. Mi elección de curso es debido a mi situación de pobreza. Estoy cansado de ser pobre, quiero ser muy rico, Inchalah.</p>";
                }
              ?>
          </div>
          <div class="text-center col-lg-4 mt-4">
            <img class="mb-2 rounded-circle" src="images/principal/reginaldo-quem-somos.jpg" alt="Foto Reginaldo Domingos">
              <h2 class="shadow-text font-weight-bold">Reginaldo Domingos</h2>
              <?php
              if ($ID=='PT') {
                echo "<p>RA:2650831813029 - Desenvolvedor</p>";
                echo '<p><a href="sertanejo/index.php">Sertanejo</a></p>';
                echo "<p>Aluno do curso de Sistemas para Internet, na FATEC São Roque, estou no 2 semestre. Apreendendo  a desenvolver sítios para internet. Responsável por auxiliar no desenvolvimento dos javascripts e PHP do Portal.</p>";
              }
              if ($ID=='EN') {
                echo "<p>RA:2650831813029 - Developer</p>";
                echo '<p><a href="sertanejo/index.php">Sertanejo</a></p>';
                echo "<p>Student of the Internet Systems course at FATEC São Roque, I'm in the 2nd semester. Seizing to develop internet sites. Responsible for assisting in the development of javascripts and PHP of the Portal.</p>";
                }
              if ($ID=='ES') {
                echo "<p>RA:2650831813022 - Revelador</p>";
                echo '<p><a href="sertanejo/index.php">Sertanejo</a></p>';
                echo "<p>Estudiante del curso de Sistemas para Internet, en la FATEC São Roque, estoy en el 2 semestre. Apreciando a desarrollar sitios para Internet. Responsable por auxiliar en el desarrollo de los javascripts y PHP del Portal.</p>";
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
            <img class="mb-2 rounded-circle" src="images/principal/renata-quem-somos.jpg" alt="Foto Renata Carrillo">
              <h2 class="shadow-text font-weight-bold">Renata Carrillo</h2>
                <?php
                if ($ID=='PT') {
                  echo "<p>RA:2650831813024 - Desenvolvedora</p>";
                  echo '<p><a href="hip-hop/index.php">Hip-Hop</a></p>';
                  echo "<p>Aluna do 2º semestre do curso de Sistemas para Internet na FATEC São Roque, tem 22 anos, é responsável pela parte da criação das páginas Hip Hop, e da página Cifras.</p>";
                }
                if ($ID=='EN') {
                  echo "<p>RA:2650831813024 - Developer</p>";
                  echo '<p><a href="hip-hop/index.php">Hip-Hop</a></p>';
                  echo "<p>Student of the 2nd semester of the Internet Systems course at FATEC São Roque, 22, is responsible for the part of the creation of the pages Hip Hop, and the page Cifras.</p>";
                }
              if ($ID=='ES') {
                echo "<p>RA:2650831813022 - Revelador</p>";
                echo '<p><a href="hip-hop/index.php">Hip-Hop</a></p>';
                echo "<p>Estudiante del segundo semestre del curso de Sistemas para Internet en la FATEC São Roque, tiene 22 años, es responsable de la parte de la creación de las páginas Hip Hop, y de la página de Cifras.</p>";
                }
                ?>
          </div>
          <div class="text-center col-lg-4 mt-4">
            <img class="mb-2 rounded-circle" src="images/principal/thais-quem-somos.jpg" alt="Foto Thais Machado">
              <h2 class="shadow-text font-weight-bold">Thais Machado</h2>
              <?php
              if ($ID=='PT') {
                echo "<p>RA:2650831813025 - Desenvolvedora</p>";
                echo '<p><a href="pop/index.php">Pop</a></p>';
                echo "<p>Aluna de Sistemas para Internet no 2º Semestre da Fatec - São Roque, responsavel pela criação do conteudo POP e da pagina indicações no PORTAL</p>";
              }
              if ($ID=='EN') {
                echo "<p>RA:2650831813024 - Developer</p>";
                echo '<p><a href="pop/index.php">Pop</a></p>';
                echo "<p>Student of Internet Systems in the 2nd semester at Fatec-São Roque, responsible for creation of content POP and page indications on the PORTAL</p>";
              }
              if ($ID=='ES') {
                echo "<p>RA:2650831813022 - Revelador</p>";
                echo '<p><a href="pop/index.php">Pop</a></p>';
                echo "<p>Estudiante de Sistemas para Internet en el 2º Semestre de la Fatec - São Roque, responsable por la creación del contenido POP y de la página indicaciones en el PORTAL</p>";
                }
              ?>
          </div>
          <div class="text-center col-lg-4 mt-4">
            <img class="mb-2 rounded-circle" src="images/principal/victor_campos-quem-somos.jpg" alt="Foto Victor Campos">
              <h2 class="shadow-text font-weight-bold">Victor Campos</h2>
              <?php
              if ($ID=='PT') {
                echo "<p>RA:2650831813026 - Design (Mock-ups) & Desenvolvedor</p>";
                echo '<p><a href="indie/index.php">Indie</a></p>';
                echo "<p>Nascido em 17 de abril de 1996, na cidade de São Roque, bacharel em design gráfico pela FMU FIAM-FAAM na turma de 2013 responsavel pela sessão idie do portal e pela criação dos mockups das páginas gerais do trabalho. Atualmente cursando o segudo semestra em sistemas para internet na FATEC São Roque.</p>";
              }
              if ($ID=='EN') {
                echo "<p>RA:2650831813026 - Design (Mock-ups) & Developer</p>";
                echo '<p><a href="indie/index.php">Indie</a></p>';
                echo "<p>Born on April 17, 1996, in the city of São Roque, a bachelor's degree in graphic design from FMU FIAM-FAAM in the 2013 class responsible for the session idie of the portal and for the creation of the mockups of the general pages of the work. Currently attending the second semester in internet systems at FATEC São Roque.</p>";
              } if ($ID=='ES') {
                echo "<p>RA:2650831813026 - Design (Mock-up) & Desarrollo</p>";
                echo '<p><a href="indie/index.php">Indie</a></p>';
                echo "<p>Nacido el 17 de abril de 1996 en la ciudad de São Roque, bachiller en diseño gráfico por FMU FIAM-FAAM en la clase de 2013 responsable de la sesión idie del portal y por la creación de los mockups de las páginas generales del trabajo. Actualmente cursando el segundo semestre en sistemas para internet en FATEC São Roque.</p>";
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