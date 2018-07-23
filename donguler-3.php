<?php

  // foreach($array as $anahtar => $deger)
  // foreach($array as $deger)

  // $arr = [1,2,3,4,5];
  //
  // foreach($arr as $sayi){
  //   echo $sayi."<br>";
  // }


  // $takimlar = [
  //   "takim1" => "besiktas",
  //   "takim2" => "fenerbahce",
  //   "takim3" => "galatasaray"
  // ];
  //
  //
  // foreach($takimlar as $key => $value):
  //   echo "Anahtar $key , Deger $value <br>";
  // endforeach;

  $ligler = [
    "superlig" => [
      "takim1" => "besiktas",
      "takim2" => "galatasaray",
      "takim3" => "fenerbahce"
    ],
    "1.lig" => [
      "takim1" => "eskisehir",
      "takim2" => "karsiyaka"
    ]
  ];

  foreach($ligler as $x => $lig){
    foreach($lig as $y => $takim){
      echo "Lig $x , Takim no : $y , Takim $takim <br>";
    }
  }
































?>
