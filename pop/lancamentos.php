<?php
 //Php para verificar o idioma!
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
$titlePagina = array('PT' => "Pop | Lançamentos", 'EN' => "Pop | Releases", 'ES' => "Pop | Comunicados");
   //Importando o head
     include('../imports/head.php');
   ?>

<body>
    <!--Importando o menu -->
    <?php
    include('../imports/menu-secundario.php');
  ?>
    <!-- Conteudo da pagina  -->
    <main id="content">
    <article class="container">
      <div class="row text-center">
          <div class="col-lg-12">
            <h1 class="display-9 mb-0 pt-3">Lançamentos da Semana </h1>
          </div>
      </div>
    <!-- Conteúdo das lista de lançamentos -->
    <div class="row">
    <section class="col-lg-4 col-md-4 col-sm-12 pt-3">
            <ul class="list-group">
            <li tabindex="0" class="list-group-item list-group-item-danger text-center">LANÇAMENTOS DA SEMANA</li> 
            <li class="list-group-item">1ª Hello</li>
            <li class="list-group-item">2º Diamonds</li>
            <li class="list-group-item">3º Crazy in Love</li>
            <li class="list-group-item">4º Stay</li>
            <li class="list-group-item">5º Single Ladies</li>
            <li class="list-group-item">6º Umbrella</li>
            <li class="list-group-item">7º Love On Top</li>
            <li class="list-group-item">8º Take a Bow</li>
            <li class="list-group-item">9º Listen</li>
            <li class="list-group-item">10º Rude Boy</li>
           </ul>
      
      
    </section>
    <section class="col-lg-4 col-md-4 col-sm-12 pt-3">
                    <img tabindex="0" class="card-img mb-3 shadow img-fluid" src="../images/pop/rihanna-art.jpg"  alt="Foto da cantora Rihanna">
                    <h2 tabindex="0" class="display-7 mb-0 text-center">Rihanna</h2>
                    <p class="mb-3 text-justify">Em 2005 gravou o seu primeiro álbum de estúdio, Music of the Sun, que alcançou o top 10 da Billboard 200. Um ano depois lançou o seu segundo trabalho de originais, A Girl like Me, obtendo a quinta posição da tabela musical norte-americana, incluindo a canção que foi o seu primeiro topo norte-americano em single, SOS.</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12 pt-3">
                <img tabindex="0" class="card-img mb-3 shadow img-fluid" src="../images/pop/beyonce-art.jpg"  alt="Foto da cantora Beyonce">
                    <h2 tabindex="0" class="display-7 mb-0 text-center">Beyonce</h2>
                    <p class="mb-3 text-justify">Em 2003, ela lançou seu álbum de estreia em carreira solo, Dangerously in Love. O álbum teve um bom desempenho comercial e os singles "Crazy in Love" e "Baby Boy" alcançaram o primeiro lugar na Billboard Hot 100. No ano seguinte, foi premiada com cinco Grammy Awards.</p>
                </section>
      </div>

      <div class="row">
    
    <section class="col-lg-4 col-md-4 col-sm-12 pt-3">
                    <img tabindex="0" class="card-img mb-3 shadow img-fluid" src="../images/pop/rihanna-art.jpg"  alt="Foto da cantora Rihanna">
                    <h2 tabindex="0" class="display-7 mb-0 text-center">Rihanna</h2>
                    <p class="mb-3 text-justify">Em 2005 gravou o seu primeiro álbum de estúdio, Music of the Sun, que alcançou o top 10 da Billboard 200. Um ano depois lançou o seu segundo trabalho de originais, A Girl like Me, obtendo a quinta posição da tabela musical norte-americana, incluindo a canção que foi o seu primeiro topo norte-americano em single, SOS.</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12 pt-3">
                <img tabindex="0" class="card-img mb-3 shadow img-fluid" src="../images/pop/beyonce-art.jpg" alt="Foto da cantora Beyonce">
                <h2 tabindex="0" class="display-7 mb-0 text-center">Beyonce</h2>
                    <p class="mb-3 text-justify">Em 2003, ela lançou seu álbum de estreia em carreira solo, Dangerously in Love. O álbum teve um bom desempenho comercial e os singles "Crazy in Love" e "Baby Boy" alcançaram o primeiro lugar na Billboard Hot 100. No ano seguinte, foi premiada com cinco Grammy Awards.</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12 pt-3">
              <ul class="list-group">
              <li tabindex="0" class="list-group-item list-group-item-danger text-center">LANÇAMENTOS DA SEMANA</li> 
              <li class="list-group-item">1ª Hello</li>
            <li class="list-group-item">2º Diamonds</li>
            <li class="list-group-item">3º Crazy in Love</li>
            <li class="list-group-item">4º Stay</li>
            <li class="list-group-item">5º Single Ladies</li>
            <li class="list-group-item">6º Umbrella</li>
            <li class="list-group-item">7º Love On Top</li>
            <li class="list-group-item">8º Take a Bow</li>
            <li class="list-group-item">9º Listen</li>
            <li class="list-group-item">10º Rude Boy</li>
           </ul>
      
      
    </section>
      </div>

    

      <blockquote class="blockquote"><p class="text-right pr-4"><small class="text-muted">Todas as notícias foram retiradas do site Wikipédia!</small></p></blockquote>


</article>
    </main>

    <!-- importando o footer da pagina -->
    <?php
    include('../imports/footer-secundario.php');
  ?>
</body>

</html>
