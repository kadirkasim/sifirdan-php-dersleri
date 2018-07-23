<?php

  // while(kosul true)

  // $a = 15;

  // while($a < 10){
  //   echo $a;
  //   $a++;
  // }
  //
  // while($a > 0):
  //   echo $a."<br>";
  //   $a--;
  // endwhile;

  // do{ islem }while(kosul true);

  // do{
  //   echo $a;
  //   $a++;
  // }while($a < 10);


  // 6! = 1x2x3x4x5x6 = 720

  $sonuc = 1;
  $sayi = 0;
  $i = 1;

  do{
    if($sayi < 0)
      echo "Lutfen gecerli bir sayi giriniz!";
    else{
      $sonuc *= $i;
      $i++;
    }
  }while($i <= $sayi);

  echo $sonuc;

  // while($i <= $sayi){
  //     $sonuc *= $i;
  //     $i++;
  // }
  //
  // echo $sonuc;






























?>
