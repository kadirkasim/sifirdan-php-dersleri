<?php

  /*
    print_r
    var_dump

    count
    is_array
    in_array
    array_search

    array_key_exists
    array_count_values

    array_flip
    array_reverse
    shuffle

    array_combine
    array_merge

    array_shift
    array_pop

    array_slice

    extract

    array_unique

    array_sum
    array_product

    array_push
    array_unshift
  */

  $arr = [1,2,2,4,5,2,3,4,5];
  $arr2 = [
    "takim1" => "besiktas",
    "takim2" => "galatasaray",
    "takim3" => "fenerbahce"
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

  // print_r($arr3);


  // echo count($arr);
  // echo is_array($arr);

  // echo in_array(7,$arr);
  // echo array_search(3,$arr);

  // echo array_key_exists('takim4',$arr2);
  // echo array_key_exists('d',$arr3);

  // function _array_key_exists($anahtar,$array){
  //   foreach ($array as $key => $value) {
  //     if($anahtar == $key) return true;
  //     elseif(is_array($value))
  //       return _array_key_exists($anahtar,$value);
  //   }
  //   return false;
  // }
  // echo _array_key_exists('e',$arr3);

  // print_r(array_count_values($arr));

  // print_r(array_flip($arr2));
  // print_r(array_reverse($arr2));
  // shuffle($arr);
  // print_r($arr);

  // $arr4 = [1,2,3];
  // $arr5 = [4,5,6];
  //
  // print_r(array_merge($arr4 , $arr5));

  // $keys = ["ad","soyad"];
  // $values = ["kadir","kasim"];
  //
  // print_r(array_combine($keys,$values));

  // $ilk = array_shift($arr2);
  // echo $ilk;

  // print_r($arr2);

  // $son = array_pop($arr2);
  // echo $son;
  //
  // print_r($arr2);

  // $temp = array_slice($arr , 2);
  // $temp = array_slice($arr , 2 , 5);
  // $temp = array_slice($arr , -2);
  // print_r($temp);

  // extract($arr2);
  // echo $takim2;


  // print_r(array_unique($arr));


  // echo array_sum($arr);
  // echo array_product($arr);


  // array_push($arr2 , 'trabzonspor');
  // $arr2['takim4'] = "trabzonspor";
  array_unshift($arr2 , 'trabzonspor');
  print_r($arr2);








?>
