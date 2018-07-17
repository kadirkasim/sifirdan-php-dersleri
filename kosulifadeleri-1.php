<?php

  // if - else

  $a = 1;

  // if($a < 10){
  //   echo "a degiskeni 10dan kucuktur!";
  // }elseif($a == 10){
  //   echo "a degiskeni 10a esittir";
  // }else{
  //   echo "a degiskeni 10dan buyuktur.";
  // }

  // if($a > 5)
  //   echo "a degiskeni 5ten buyuktur";
  // else
  //   echo "a degiskeni 5ten kucuktur";

  // if($a > 8):
  //   echo "$a 8den buyuktur";
  // elseif($a < 8):
  //   echo "$a 8den kucuktur";
  // else:
  //   echo "$a 8e esittir";
  // endif;

?>


<?php if($a > 3){ ?>
<h1>A degiskeni 3ten buyuktur</h1>
<?php } ?>

<?php if($a < 9): ?>
<h1>A degiskeni 9ten buyuktur</h1>
<?php endif; ?>

<?php

  $login = false;
  echo (!$login) ? "login olunmus" : "login olmalisin";



?>
