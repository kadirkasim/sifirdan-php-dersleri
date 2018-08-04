<?php

  /*
    Kipler
      r -> Okuma
      r+ -> Okuma ve Yazma

      w -> Yazma , Dosya yoksa olusturur Icerik varsa siler
      w+ -> Yazma ve Okuma , Dosya yoksa olusturur Icerik varsa siler

      a -> Yazma , Dosya yoksa olusturur Icerik varsa devamina yazar
      a+ -> Yazma ve Okuma , Dosya yoksa olusturur Icerik varsa devamina yazar

      x -> Yazma , Dosya varsa false dondurur
      x+ -> Yazma ve Okuma , Dosya varsa false dondurur
  */

  /*
    Fonksiyonlar

      touch
      unlink
      rename

      file
      fopen
      fclose
      fwrite
      fread
      fgets
      feof
      filesize

      file_exists
      file_get_contents
      file_put_contents
  */

  // touch('deneme.php');
  // touch('deneme2.php',time() - (60*60*24));

  // unlink('deneme.php');
  // rename('deneme2.php','deneme.php');


  // $icerik = "deneme yazisidir \n";
  // $resource = fopen('https://google.com','rb');

  // echo filesize('deneme.php');
  // fwrite($resource , $icerik);
  // echo fread($resource , filesize('deneme.php'));
  //
  // $icerik = '';
  // // echo stream_get_contents($resource);
  // while(!feof($resource)){
  //   $icerik .= fread($resource,1024);
  // }

  // while(!feof($resource))
  //   echo fgets($resource)."<br>";
  // fclose($resource);
  // echo $icerik;

  // $dosya = file('http://kadirkasim.com');
  // print_r($dosya);


  // echo file_get_contents('deneme.php');
  // echo file_get_contents('http://kadirkasim.com');
  // file_put_contents('deneme.php','yeni icerik');

  if(file_exists('deneme2.php')){
    echo "var";
  }else{
    echo "yok";
  }










































?>
