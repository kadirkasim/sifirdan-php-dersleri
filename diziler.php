<?php

  // $arr = array(
  //   "renk1" => "kirmizi",
  //   "renk2" => "mavi",
  //   "renk3" => "yesil"
  // );
  //
  // $arr1 = ["takim1" => "besiktas","galatasaray","fenerbahce"];
  //
  // echo "<pre>";
  // print_r($arr1);
  // // var_dump($arr);
  // echo "</pre>";
  //
  // echo $arr1["takim1"];
  //
  // define('TSL',["besiktas","galatasaray","fenerbahce"]);
  // echo TSL[0];


  $tsl = [
    "superlig" => [
      "takim1" => "besiktas",
      "takim2" => "galatasaray",
      "takim3" => "fenerbahce"
    ],
    "1.lig" => [
      "takim1" => "eskisehir",
      "takim2" => "altay",
      "takim3" => "karsiyaka"
    ]
  ];

  echo "<pre>";
  print_r($tsl["1.lig"]["takim2"]);
  echo "</pre>";

  echo $tsl["1.lig"]["takim2"];


?>
