<?php
$punk_pt = array("Artistas", "Destaques", "Classificacao", "Impacto Social", "Lancamentos");
$punk_en = array("Artists", "Highlights", "Ranking", "Social Impact", "Releases");
$punk_es = array("Artistas", "Refrejos", "Classificacion", "Impacto Social", "Comunicados");
$punk = array('PT' => $punk_pt, 'EN' => $punk_en, 'ES' => $punk_es);

?>
 <?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
 <!DOCTYPE html>
 <html lang ="<?php echo $lang?>">
   <?php
   //importando o head da pagina
     include('../imports/head.php');
   ?>
<body class="corpopunk">
    <?php
    include('../imports/menu-secundario.php')
    
    ?>

    <article>

     <div class="container">
        <div class="row">
             
            <div class="col-lg-3 col-6">


                    <img alt="#" class="img-fluid" src="../images/punk/homemulheres.jpg">
                </div>
                <div class="col-lg-3 col-6 text-white">
 <h4>Olho Seco</h4> 
 <h5>Bostas, Fuzis e Capacetes</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
            </div>
    
            <div class="col-lg-3 col-6">


                    <img alt="#" class="img-fluid" src="../images/punk/homemulheres.jpg">
                </div>
                <div class="col-lg-3 col-6 text-white">
 <h4>Colera</h4>
 <h5>Colera</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in erat vitae dui tristique mattis. Sed vestibulum egestas, enim eros luctus purus, sit amet laoreet urna nunc sed turpis.</p>
            </div>
    
         
         
         </div>
        
        
        </div>
  <div class="container">
        <div class="row">
             
            <div class="col-lg-2 col-6">


                    <img alt="#" class="img-fluid" src="../images/punk/homemulheres.jpg">
                </div>
                <div class="col-lg-2 col-6 text-white">
 <h4>Menstruacao Anarquica</h4>
 <h5>M.A.</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in  mattis.</p>
            </div>
    
            <div class="col-lg-2 col-6">


                    <img alt="#" class="img-fluid" src="../images/punk/homemulheres.jpg">
                </div>
                <div class="col-lg-2 col-6 text-white">
 <h4>Colera</h4>
 <h5>Vozes de protesto</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in mattis.</p>
            </div>
    
            <div class="col-lg-2 col-6">


                    <img alt="#" class="img-fluid" src="../images/punk/homemulheres.jpg">
                </div>
                <div class="col-lg-2 col-6 text-white">
 <h4>Ratos de Porao</h4>
 <h5>Seculo Sinistro</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mattis.</p>
            </div>
    
         
         
         </div>
        
        
        </div>

    </article>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




<?php
    include('../imports/footer-secundario.php')
    
    ?>
   
</body>



</html>
