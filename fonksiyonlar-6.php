<?php

  /*
    current , next, prev , end , reset
    asort , arsort , ksort , krsort
  */

  $arr = [
    "takim3" => "besiktas",
    "takim1" => "galatasaray",
    "takim5" => "fenerbahce",
    "takim4" => "trabzonspor",
    "takim2" => "bursaspor"
  ];

  $arr2 = [1,-15,23,76,123];

  // asort($arr);
  // arsort($arr2);

  // ksort($arr);
  krsort($arr);
  print_r($arr);






















  // echo current($arr)."<br>";
  // echo next($arr)."<br>";
  // echo current($arr)."<br>";
  // echo next($arr)."<br>";
  // echo next($arr)."<br>";
  // echo end($arr)."<br>";
  // echo prev($arr)."<br>";
  // echo current($arr)."<br>";
  // reset($arr);
  // echo current($arr)."<br>";


?>
