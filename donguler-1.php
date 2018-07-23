<?php

  // for(baslangic;kosul;arttirma/azaltma)

  // for($i =0;$i < 10;$i++){
  //   echo $i;
  // }

  // for($i=10;$i>0;$i--){
  //   echo $i;
  //   echo "string";
  // }

  // for ($i=10; $i > 0 ; $i-=2)
  //   echo $i;

  // $i = 4;
  // for(;;){
  //   $i++;
  //   echo $i;
  //   if($i == 10) break;
  // }

  // $gelen = 3;
  //
  // for($i = $gelen; $i <=10; $i+=3){
  //   echo $i;
  //   if($i == 5) continue;
  //   echo "test<br>";
  //   if($i == 6) break;
  // }

  $arr = [
    ["besiktas","galatasaray","fenerbahce"],
    ["altay","karsiyaka"]
  ];

  // for($i=0;$i< count($arr);$i++)
  //   echo $arr[$i]."<br>";

  for ($i=0; $i < count($arr); $i++) {
    for ($j=0; $j < count($arr[$i]); $j++) {
      echo $arr[$i][$j];
    }
    echo "<br>";
  }


  // for ($i=1; $i <= 5; $i++) {
  //   for ($j=1; $j <= 10 ; $j++) {
  //     echo $i;
  //   }
  //   echo "<br>";
  // }

  // for ($i=1; $i <= 10 ; $i++) {
  //   for ($j=1; $j <= 10 ; $j++) {
  //     echo "$i x $j = ".($i * $j)."<br>";
  //   }
  // }

  for($i=0;$i<10;$i++):
    echo $i;
  endfor;


















?>
