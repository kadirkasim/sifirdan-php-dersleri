<?php

  // print_r($_FILES);
  // echo mime_content_type('deneme.php');

  if (isset($_FILES['dosya'])) {
    if (is_uploaded_file($_FILES['dosya']["tmp_name"])) {
      $mime_types = [
        "image/png",
        "image/jpeg",
        "image/gif",
        "image/svg+xml"
      ];

      if (in_array($_FILES["dosya"]["type"],$mime_types)) {
        $sonuc = move_uploaded_file($_FILES['dosya']["tmp_name"] ,
        'yuklenenler/'.$_FILES['dosya']["name"]);
        if ($sonuc) {
          echo "dosya basariyla yuklendi.";
        }else{
          echo "bir hata olustu";
        }
      }else {
        echo "gecersiz dosya formati!";
      }
    }
  }

?>

<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="dosya"><br>
  <input type="submit" value="Gonder">
</form>
