<?php
  include 'deneme.php';

  $renk = 'kirmizi';
  $renkler = ["Mavi","Sari"];

  function renkGetir(){
    $renk = "mavi";
    echo $renk."<br>";
    echo $GLOBALS["renk"]."<br>";
    echo $GLOBALS["renk2"];
  }

  renkGetir();

  // print_r($GLOBALS);

?>
