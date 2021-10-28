<?php
include('config.php');
function abbreviate($string){
    $abbreviation = "";
    $string = ucwords($string);
    $words = explode(" ", "$string");
      foreach($words as $word){
          $abbreviation .= $word[0];
      }
   return $abbreviation; 
}
session_start();
// setcookie('cart', '', time()-3600 , "/");
if(isset($_COOKIE['cart'])){
    $cartData = json_decode($_COOKIE['cart'],true);
}

?>