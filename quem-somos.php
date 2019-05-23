<?php
$quemsomos_pt = array("Na imagem Karina Lucindo, uma dos desenvolvedores do site. Tem o cabelo cacheado castanho com o comprimento um pouco abaixo da orelha. Está séria com a cabeça inclinada para a direita, está de óculos e brincos em formato de argola.","Na imagem Rafael Jacome, um dos desenvolvedores do site. Ele está com o olhar sério. Está usando óculos, uma touca na cabeça e uma corrente envolta do pescoço.","Na imagem Reginaldo Domingos, um dos desenvolvedores do site, ele também está com um olhar sério. Possui um topete e seu cabelo é um pouco grisalho.","Na imagem Renata Carrillo, uma dos desenvolvedores do site, Possui cabelo castanho com mechas loiro-escuro. Ela está sorrindo.","Na imagem Thaís Machado, uma dos desenvolvedores do site, Está com a cabeça inclinada para a esquerda, ela tem piercings no nariz, seu cabelo é preto com mechas loiras e está sorrindo sem mostrar os dentes.","Na imagem Victor Campos um dos desenvolvedores do site, ele está com os olhos fechados e está sério. Seu cabelo é cinza e ele possui um piercing no nariz.","Voltar ao topo");

$quemsomos_en = array("In the image, Karina Lucindo, one of the developers of the site. Has curly brown hair that is a little below her ear. She is serious with her head tilted to the right, her eyeglasses and hoop earrings.", "In the image Rafael Jacome, one of the developers of the site. He is wearing glasses, a cap on his head and a chain wrapped around his neck. "," In the image Reginaldo Domingos, one of the developers of the site. He looks serious , has a tuft and his hair is a little graying. "," In the image Renata Carrillo, one of the developers of the site. She has brown hair with dark loir mecha. She is smiling.", "In the image Thaís Machado, one of the developers. She has her head tilted to the left, has piercings on her nose, her hair is black with blond locks and she is smiling without showing her teeth. "," In the image Victor Campos one of the developers of the site. He is with His eyes are closed and he's serious. His hair is gray and he has a piercing in his nose.","Back to the top");

$quemsomos_es = array("En la imagen Karina Lucindo, uno de los desarrolladores del sitio. Tiene el pelo rizado marrón con la longitud un poco por debajo de la oreja. Ella está seria con la cabeza inclinada hacia la derecha, está de gafas y pendientes en forma de argolla.", " En la imagen de Rafael Jacome, uno de los desarrolladores del sitio. Está con la mirada serio, está usando gafas, un gorro en la cabeza y una cadena envuelta del cuello. "," En la imagen Reginaldo Domingos, uno de los desarrolladores del sitio. Se ve serio, tiene un mechón y su cabello es un poco canoso.", "En la imagen Renata Carrillo, uno de los desarrolladores del sitio. Posee cabello castaño con mechas rubio oscuro, está sonriendo.", "En la imagen Thaís Machado, uno de los desarrolladores del sitio. Está con la cabeza inclinada hacia la izquierda, ella tiene piercings en la nariz, su pelo es negro con mechas rubias y está sonriendo sin mostrar los dientes.", "En la imagen Victor Campos uno de los desarrolladores del sitio. Él está con los ojos cerrados y está serio. Su pelo es gris y tiene un piercing en la nariz.","Volver al principio");

  $quemsomos = array('PT'=> $quemsomos_pt,'EN' => $quemsomos_en,'ES'=> $quemsomos_es);

//usar $ID para os Vetores
?>
<?php
//PHP para verificar qual o idioma do html
  include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
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
    <main id="content">
        <article class="quem-somos">
            <div class="container">
                <div class="row pb-2">
                    <div class="text-center col-lg-4 mt-4">
                        <img class="mb-2 rounded-circle" src="images/principal/karina-quem-somos.jpeg" tabindex="0" alt="<?php echo $quemsomos[$ID][0]?>">
                        <h2 class="shadow-text font-weight-bold" tabindex="0">Karina Lucindo</h2>
                        <?php
              if ($ID=='PT') {
                echo "<p tabindex='0'>RA:2650831813014 - Desenvolvedora</p>";
                echo '<p><a href="classica/index.php" tabindex="0">Classica</a></p>';
                echo "<p tabindex='0'>Karina Cavalcanti Lucindo, 18 anos de idade. Estudante da FATEC São Roque, cursando Sistemas para Internet. Responsável pela página Notícias e pela sessão Clássica.</p>";
              }
              if ($ID=='EN') {
                echo "<p tabindex='0'>RA:2650831813014 - Developer</p>";
                echo '<p><a href="classica/index.php" tabindex="0">Classica</a></p>';
                echo "<p tabindex='0'>Karina Cavalcanti Lucindo, 18 years old. She's student at FATEC São Roque, studying Systems for Internet. She's responsible for the page News and about the Classic session.</p>";
                }
              if ($ID=='ES') {
                echo "<p tabindex='0'>RA:2650831813014 - Revelador</p>";
                echo '<p><a href="classica/index.php" tabindex="0">Classica</a></p>';
                echo "<p tabindex='0'>Karina Cavalcanti Lucindo, 18 años de edad. Estudiante de FATEC São Roque, cursando Sistemas para Internet. Responsable por la página Noticias y la sesión Clásica.</p>";
                }
              ?>
                    </div>
                    <div class="text-center col-lg-4 mt-4">
                        <img class="mb-2 rounded-circle" src="images/principal/rafael-quem-somos.jpg" tabindex="0" alt="<?php echo $quemsomos[$ID][1]?>">
                        <h2 class="shadow-text font-weight-bold" tabindex="0">Rafael Jacome</h2>
                        <?php
              if ($ID=='PT') {
                echo "<p tabindex='0'>RA:2650831813022 - Desenvolvedor</p>";
                echo '<p><a href="punk/index.php" tabindex="0">Punk/Hardcore</a></p>';
                echo "<p tabindex='0'>Sou Rafael Jacome, 24 anos de idade, estudante da Fatec São Roque do curso Sistemas para Internet. Minha escolha de curso é devido minha situação de pobreza. Estou cansado de ser pobre, quero ser muito rico, Inchalah.</p>";
              }
              if ($ID=='EN') {
                echo "<p tabindex='0'>RA:2650831813022 - Developer</p>";
                echo '<p><a href="punk/index.php" tabindex="0">Punk/Hardcore</a></p>';
                echo "<p tabindex='0'>I`m Rafael Jacome, 24 years old, Student at Fatec Sao Roque, Systems for Internet course. My choose of course is about my poor situation. I`m tired to be poor, i want to be very rich, Inchalah.</p>";
                }
              if ($ID=='ES') {
                echo "<p tabindex='0'>RA:2650831813022 - Revelador</p>";
                echo '<p><a href="punk/index.php" tabindex="0">Punk/Hardcore</a></p>';
                echo "<p tabindex='0'>Soy Rafael Jacome, 24 años de edad, estudiante de Fatec São Roque del curso Sistemas para Internet. Mi elección de curso es debido a mi situación de pobreza. Estoy cansado de ser pobre, quiero ser muy rico, Inchalah.</p>";
                }
              ?>
                    </div>
                    <div class="text-center col-lg-4 mt-4">
                        <img class="mb-2 rounded-circle" src="images/principal/reginaldo-quem-somos.jpg" tabindex="0" alt="<?php echo $quemsomos[$ID][2]?>">
                        <h2 class="shadow-text font-weight-bold" tabindex="0">Reginaldo Domingos</h2>
                        <?php
              if ($ID=='PT') {
                echo "<p tabindex='0'>RA:2650831813029 - Desenvolvedor</p>";
                echo '<p><a href="sertanejo/index.php" tabindex="0">Sertanejo</a></p>';
                echo "<p tabindex='0'>Aluno do curso de Sistemas para Internet, na FATEC São Roque, estou no 2 semestre. Apreendendo  a desenvolver sítios para internet. Responsável por auxiliar no desenvolvimento dos javascripts e PHP do Portal.</p>";
              }
              if ($ID=='EN') {
                echo "<p tabindex='0'>RA:2650831813029 - Developer</p>";
                echo '<p><a href="sertanejo/index.php" tabindex="0">Sertanejo</a></p>';
                echo "<p tabindex='0'>Student of the Internet Systems course at FATEC São Roque, I'm in the 2nd semester. Seizing to develop internet sites. Responsible for assisting in the development of javascripts and PHP of the Portal.</p>";
                }
              if ($ID=='ES') {
                echo "<p tabindex='0'>RA:2650831813029 - Revelador</p>";
                echo '<p><a href="sertanejo/index.php" tabindex="0">Sertanejo</a></p>';
                echo "<p tabindex='0'>Estudiante del curso de Sistemas para Internet, en la FATEC São Roque, estoy en el 2 semestre. Apreciando a desarrollar sitios para Internet. Responsable por auxiliar en el desarrollo de los javascripts y PHP del Portal.</p>";
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
                        <img class="mb-2 rounded-circle" src="images/principal/renata-quem-somos.jpg" tabindex="0" alt="<?php echo $quemsomos[$ID][3]?>">
                        <h2 class="shadow-text font-weight-bold" tabindex="0">Renata Carrillo</h2>
                        <?php
                if ($ID=='PT') {
                  echo "<p tabindex='0'>RA:2650831813024 - Desenvolvedora</p>";
                  echo '<p><a href="hip-hop/index.php" tabindex="0">Hip-Hop</a></p>';
                  echo "<p tabindex='0'>Aluna do 2º semestre do curso de Sistemas para Internet na FATEC São Roque, tem 22 anos, é responsável pela parte da criação das páginas Hip Hop, e da página Cifras.</p>";
                }
                if ($ID=='EN') {
                  echo "<p tabindex='0'>RA:2650831813024 - Developer</p>";
                  echo '<p><a href="hip-hop/index.php" tabindex="0">Hip-Hop</a></p>';
                  echo "<p tabindex='0'>Student of the 2nd semester of the Internet Systems course at FATEC São Roque, 22, is responsible for the part of the creation of the pages Hip Hop, and the page Cifras.</p>";
                }
              if ($ID=='ES') {
                echo "<p tabindex='0'>RA:2650831813024 - Revelador</p>";
                echo '<p><a href="hip-hop/index.php" tabindex="0">Hip-Hop</a></p>';
                echo "<p tabindex='0'>Estudiante del segundo semestre del curso de Sistemas para Internet en la FATEC São Roque, tiene 22 años, es responsable de la parte de la creación de las páginas Hip Hop, y de la página de Cifras.</p>";
                }
                ?>
                    </div>
                    <div class="text-center col-lg-4 mt-4">
                        <img class="mb-2 rounded-circle" src="images/principal/thais-quem-somos.jpg" tabindex="0" alt="<?php echo $quemsomos[$ID][4]?>">
                        <h2 class="shadow-text font-weight-bold" tabindex="0">Thais Machado</h2>
                        <?php
              if ($ID=='PT') {
                echo "<p tabindex='0'>RA:2650831813025 - Desenvolvedora</p>";
                echo '<p><a href="pop/index.php" tabindex="0">Pop</a></p>';
                echo "<p tabindex='0'>Aluna de Sistemas para Internet no 2º Semestre da Fatec - São Roque, responsavel pela criação do conteudo POP e da pagina indicações no PORTAL</p>";
              }
              if ($ID=='EN') {
                echo "<p tabindex='0'>RA:2650831813025 - Developer</p>";
                echo '<p><a href="pop/index.php" tabindex="0">Pop</a></p>';
                echo "<p tabindex='0'>Student of Internet Systems in the 2nd semester at Fatec-São Roque, responsible for creation of content POP and page indications on the PORTAL</p>";
              }
              if ($ID=='ES') {
                echo "<p tabindex='0'>RA:2650831813025 - Revelador</p>";
                echo '<p><a href="pop/index.php" tabindex="0">Pop</a></p>';
                echo "<p tabindex='0'>Estudiante de Sistemas para Internet en el 2º Semestre de la Fatec - São Roque, responsable por la creación del contenido POP y de la página indicaciones en el PORTAL</p>";
                }
              ?>
                    </div>
                    <div class="text-center col-lg-4 mt-4">
                        <img class="mb-2 rounded-circle" src="images/principal/victor_campos-quem-somos.jpg" tabindex="0" alt="<?php echo $quemsomos[$ID][5]?>">
                        <h2 class="shadow-text font-weight-bold" tabindex="0">Victor Campos</h2>
                        <?php
              if ($ID=='PT') {
                echo "<p tabindex='0'>RA:2650831813026 - Design (Mock-ups) & Desenvolvedor</p>";
                echo '<p><a href="indie/index.php" tabindex="0">Indie</a></p>';
                echo "<p tabindex='0'>Aluno do 2º semestre de Sistemas para Internet na FATEC São Roque, formado em Design Gráfico pela FMU-Fiam Faamtem 22 anos, é responsável pela criação do padrão visual dos mockups e das páginas Indie.</p>";
              }
              if ($ID=='EN') {
                echo "<p tabindex='0'>RA:2650831813026 - Design (Mock-ups) & Developer</p>";
                echo '<p><a href="indie/index.php" tabindex="0">Indie</a></p>';
                echo "<p tabindex='0'>Student of the 2nd semester of Internet Systems at FATEC São Roque, graduated in Graphic Design from FMU-Fiam Faamtem, 22, is responsible for creating the visual pattern of mockups and Indie pages.</p>";
              } if ($ID=='ES') {
                echo "<p tabindex='0'>RA:2650831813026 - Design (Mock-up) & Desarrollo</p>";
                echo '<p><a href="indie/index.php" tabindex="0">Indie</a></p>';
                echo "<p tabindex='0'>2º semestre de Sistemas para Internet en FATEC São Roque, formado en Diseño Gráfico, FMU-Fiam Faamtem, 22 años, es responsabilidad de crear imágenes visuales, maquetas y páginas web.</p>";
              }
              ?>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <!-- importando o footer da pagina -->
    <div class="margim-footer">
    </div>
    <?php
      include('imports/footer.php');
    ?>
</body>

</html>
