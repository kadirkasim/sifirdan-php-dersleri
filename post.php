<?php


  function post_duzenle($post){
    return (is_array($post)) ? array_map('post_duzenle',$post) :
    htmlspecialchars($post);
  }

  $_POST = array_map('post_duzenle',$_POST);

  // if (!empty($_POST)) {
  //   print_r($_POST);
  // }

  if (isset($_POST['renkler'])) {
    echo "renk secimi yapildi";
  }

  if (isset($_POST['arama'])) {
    echo "arama yapildi";
  }

  function post($key){
    if (isset($_POST[$key])) {
      return $_POST[$key];
    }
  }





?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
  <input type="text" name="arama" value="<? echo post("arama") ?>">
  <input type="submit" value="Gonder">
</form>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
  <select name="renkler[]" multiple>
    <option value="kirmizi">Kirmizi</option>
    <option value="mavi">Mavi</option>
    <option value="yesil">Yesil</option>
    <option value="sari">Sari</option>
  </select>
  <input type="submit" value="Gonder">
</form>
