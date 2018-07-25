<?php

  // Recursive Fonksiyonlar

  // function recursive($sayi){
  //   echo $sayi;
  //   if ($sayi < 10) {
  //     return recursive($sayi + 1);
  //   }
  // }
  // recursive(5);

  // faktoriyel

  // function faktoriyel($n){
  //   if($n < 0) return "Gecersiz Deger";
  //   elseif($n == 0) return 1;
  //   else return $n * faktoriyel($n -1);
  // }
  // echo faktoriyel(1);

  // Fibonacci Serisi
  // 1 1 2 3 5 8 13 21 34 55 ...

  function fibonacci($n){
    if($n == 0) return 0;
    elseif($n == 1) return 1;
    else return fibonacci($n-1) + fibonacci($n-2);
  }
  echo fibonacci(9);

?>
