<?php

  /*
    Unix Time -> 1 ocak 1970
    date('format',timestamp);
    getdate()

    time
    mktime
    strtotime

    setlocale
    strftime
  */

  // echo date_default_timezone_get();
  date_default_timezone_set('America/New_York');

  // echo date('Y-m-d H:i:s');
  // echo date('d/m/y');
  // echo date('m/d/y');

  // $date = getdate();
  // print_r($date);

  // $timestamp = time() - (60*60*24*7);
  // $timestamp = mktime(10,11,50,2,8,2012);
  // $timestamp = strtotime('+5 week');
  // echo $timestamp;
  // echo date('Y-m-d H:i:s',$timestamp);

  // 02 Ocak 2014 , Perşembe

  $timestamp = mktime(10,10,10,1,2,2014);

  setlocale(LC_TIME,'tr_TR');
  echo strftime('%d %B %Y , %A',$timestamp);






















?>
