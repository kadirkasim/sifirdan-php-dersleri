<?php

  /*
    degiskenler

      $ oneki ile tanimlanir
      harf veya _ gelmelidir
      rakam ile baslayamaz
      Buyuk harf kucuk harf duyarlidir

  */

  /*
    Veri Turleri
      String "" veya ''
      Integer Rakamlar
      Float Kusaratli Sayilar
      Boolean True veya False
      Null

      Array
      Object

      gettype()

  */

  $str = "string degerdir";
  $Str = 'baskadir';
  $str1 = 'bir diger string';

  $str2 = "$str";
  $str3 = '$str';

  $str4 = $str . "  ------  " . $str1;

  $int = 5;
  $flt = 8.58;

  $bool1 = true;
  $bool2 = false;

  $null = null;

  // $str = null;

  $arr = array();
  $obj = new stdClass;

  define('PI',3.14,true);
  define('AA',"Mukemmel",true);


  echo AA;


?>
