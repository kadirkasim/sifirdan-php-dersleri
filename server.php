<?php

  // print_r($_SERVER);

  $server = [
    "Sunucu Adi" => $_SERVER["SERVER_NAME"],
    "Host Adi" => $_SERVER["HTTP_HOST"],
    "Sunucu Yazilimi" => $_SERVER["SERVER_SOFTWARE"],
    "Calisan Dosya" => $_SERVER["PHP_SELF"],
    "Ana dizin" => $_SERVER["DOCUMENT_ROOT"],
    "Script Yolu" => $_SERVER["SCRIPT_FILENAME"]
  ];

  // print_r($server);

  $client = [
    "Sistem Bilgisi" => $_SERVER["HTTP_USER_AGENT"],
    "IP" => $_SERVER["REMOTE_ADDR"],
    "PORT" => $_SERVER["REMOTE_PORT"]
  ];

  print_r($client);

?>
