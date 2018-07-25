<?php

  // Basit Fonksiyonlar
  // function selamla(){
  //   echo "Merhaba Dunya";
  // }
  // selamla();

  // Geriye Deger Donduren Fonksiyonlar
  // function selamla(){
  //   return "Merhaba Dunya";
  // }
  // echo selamla();
  // $a = selamla();
  // echo $a;

  // Parametreli Fonksiyonlar
  // function selamla($ad){
  //   return "Merhaba , ".$ad;
  // }
  //
  // $ad = "Mehmet";
  // echo selamla($ad);

  // function topla($sayi1 = 5 , $sayi2 = 0){
  //   return $sayi1 + $sayi2;
  // }
  // echo topla();


  // $sayi = 10;
  // function topla(){
  //   global $sayi;
  //   return $sayi + 5;
  // }
  // echo topla();


  function faktoriyel($sayi){
    $sonuc = 1;
    $i = 1;
    do{
      if($sayi < 0)
        return "Gecersiz Deger";
      else{
        $sonuc *= $i;
        $i++;
      }
    }while($i <= $sayi);

    return $sonuc;
  }

  echo faktoriyel(1);














































?>
