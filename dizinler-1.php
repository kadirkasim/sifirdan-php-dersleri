<?php

  /*
    mkdir
    rmdir

    is_dir , is_file

    opendir,readdir,closedir
    scandir
    glob

  */

  // mkdir('test/test2/test3');
  // touch('test/test2/test3/deneme3.php');
  // rmdir('test');

  // echo is_dir('deneme');
  // echo is_file('deneme.php');


  // $resource = opendir('.');
  // while(($file = readdir($resource)) !== false)
  //   echo $file."<br>";
  // closedir($resource);



  $arr = scandir('.');
  // print_r($arr);

  $arr = glob('*/');
  // print_r($arr);


  function dizinGetir($dizin){
    $dosyalar = array_diff(scandir($dizin),['.','..','.git']);
    $sonuc = [];
    foreach ($dosyalar as $dosya) {
      if (is_dir($dizin.DIRECTORY_SEPARATOR.$dosya)) {
        $sonuc[$dosya] = dizinGetir($dizin.DIRECTORY_SEPARATOR.$dosya);
      }else{
        $sonuc[] = $dosya;
      }
    }
    return $sonuc;
  }

  $arr = dizinGetir('.');
  // print_r($arr);


  // rmdir('test');

  function dizinSil($dizin){
    $dosyalar = scandir($dizin);
    foreach ($dosyalar as $dosya) {
      if (!in_array($dosya,['.','..'])) {
        if (is_dir($dizin.DIRECTORY_SEPARATOR.$dosya)) {
          dizinSil($dizin.DIRECTORY_SEPARATOR.$dosya);
        }else{
          unlink($dizin.DIRECTORY_SEPARATOR.$dosya);
        }
      }
    }
    rmdir($dizin);
  }

  // dizinSil('test');
























?>
