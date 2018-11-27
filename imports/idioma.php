<?php 
//abertura da seção para carregar o idioma
session_start();
if(!isset($_SESSION['idioma'])){ $idioma = "PT";} else {$idioma = $_SESSION['idioma'];}

//variavel ID para usar a posição da Matriz
//  $ID = $_GET['idioma'];
$ID = $idioma;

//variavel lang para usar na definição do idioma do html
if ($ID =='EN') {
  $lang = "en-US";
} elseif ($ID =='PT'){
  $lang = "pt-BR";
} elseif ($ID =='ES') {
  $lang = "es-ES";
}

?>
