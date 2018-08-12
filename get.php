<?php

  // ?anahtar=deger
  // ?anahtar=deger&anahtar=deger

  // $_GET["arama"] = htmlspecialchars($_GET["arama"]);

  function get_duzenle($get){
    return (is_array($get)) ? array_map('get_duzenle',$get) :
    htmlspecialchars($get);
  }

  $_GET = array_map('get_duzenle',$_GET);

  print_r($_GET);

?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
  <input type="text" name="arama">
  <select name="renkler[]" multiple>
    <option value="kirmizi">Kirmizi</option>
    <option value="mavi">Mavi</option>
    <option value="yesil">Yesil</option>
    <option value="sari">Sari</option>
  </select>
  <input type="submit" value="Gonder">
</form>
