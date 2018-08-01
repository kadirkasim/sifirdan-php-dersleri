<?php

  /*
    array_keys
    array_values

    array_map
    array_reduce
    array_filter
    array_rand

  */

  $arr = [1,2,3,4,5];
  $arr4 = ['bir','iki','uc'];
  $arr5 = ['','besiktas','','','galatasaray'];
  $arr2 = [
    "takim1" => "besiktas",
    "takim2" => "galatasaray",
    "takim3" => "fenerbahce",
    "takim4" => "trabzonspor",
    "takim5" => "bursaspor"
  ];

  $arr3 = [
    "a" => [
      "b" => [
        "c" => [
          "d" => "e",
          "f" => [
            "g" => "h"
          ]
        ]
      ]
    ]
  ];

  // $temp = array_keys($arr3);
  // $temp = array_values($arr3);
  function _array_values($array){
    static $values = [];
    foreach ($array as $value) {
      if(is_array($value))
        return _array_values($value);
      else
        $values[] = $value;
    }
    return $values;
  }
  $temp = _array_values($arr3);
  // print_r($temp);


  function besEkle($deger){
    return $deger + 5;
  }

  // $temp = array_map('besEkle',$arr);
  // $temp = array_map(function($deger){
  //   return $deger * 2;
  // },$arr);

  // $temp = array_map(function($x , $y){
  //   return $x . ' - '. $y;
  // },$arr,$arr4);

  // print_r($temp);

  function topla($sonuc,$deger){
    $sonuc += $deger;
    return $sonuc;
  }

  function carpim($sonuc, $deger){
    $sonuc *= $deger;
    return $sonuc;
  }

  // echo array_reduce($arr , 'topla');
  // echo array_reduce($arr , 'carpim',1);


  $temp = array_filter($arr5);
  $temp = array_values($temp);
  // print_r($temp);

  $temp = array_filter($arr, function($deger){
    if($deger > 2){
      return $deger;
    }
  });

  function even($deger){
    return ($deger%2==0);
  }
  $temp = array_filter($arr,'even');
  // print_r($temp);

  $rand = array_rand($arr2 , 2);
  $temp = array_map(function($key) use($arr2){
    // global $arr2;
    return $arr2[$key];
  },$rand);
  print_r($temp);























?>
