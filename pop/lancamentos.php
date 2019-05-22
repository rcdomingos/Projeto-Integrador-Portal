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
    <main>
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
            <li class="list-group-item">1ª Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">2º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">3º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">4º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">5º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">6º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">7º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">8º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">9º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">10º Loremipsum dolorsit ametconsec.</li>
           </ul>
      
      
    </section>
    <section class="col-lg-4 col-md-4 col-sm-12 pt-3">
                    <img class="card-img mb-3 shadow img-fluid" src="../images/pop/rihanna-art.jpg"  alt="Foto da cantora Lady Gaga em preto e branco">
                    <h2 tabindex="0" class="display-7 mb-0 text-center">Lorem Ipsun</h2>
                    <p class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio.</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12 pt-3">
                <img class="card-img mb-3 shadow img-fluid" src="../images/pop/beyonce-art.jpg"  alt="Foto da cantora Lady Gaga em preto e branco">
                    <h2 tabindex="0" class="display-7 mb-0 text-center">Lorem Ipsun</h2>
                    <p class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio.</p>
                </section>
      </div>

      <div class="row">
    
    <section class="col-lg-4 col-md-4 col-sm-12 pt-3">
                    <img class="card-img mb-3 shadow img-fluid" src="../images/pop/rihanna-art.jpg"  alt="Foto da cantora Lady Gaga em preto e branco">
                    <h2 tabindex="0" class="display-7 mb-0 text-center">Lorem Ipsun</h2>
                    <p class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio.</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12 pt-3">
                <img class="card-img mb-3 shadow img-fluid" src="../images/pop/beyonce-art.jpg" alt="Foto da cantora Lady Gaga em preto e branco">
                    <h2 tabindex="0" class="display-7 mb-0 text-center">Lorem Ipsun</h2>
                    <p class="mb-3 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio.</p>
                </section>

                <section class="col-lg-4 col-md-4 col-sm-12 pt-3">
              <ul class="list-group">
              <li tabindex="0" class="list-group-item list-group-item-danger text-center">LANÇAMENTOS DA SEMANA</li> 
            <li class="list-group-item">1ª Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">2º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">3º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">4º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">5º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">6º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">7º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">8º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">9º Loremipsum dolorsit ametconsec.</li>
            <li class="list-group-item">10º Loremipsum dolorsit ametconsec.</li>
           </ul>
      
      
    </section>
      </div>

    

    


</article>
    </main>

    <!-- importando o footer da pagina -->
    <?php
    include('../imports/footer-secundario.php');
  ?>
</body>

</html>
