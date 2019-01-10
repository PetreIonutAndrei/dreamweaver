<?php
  echo (int) ((0.1 + 0.6) * 10);
  echo (int) ((0.1 + 0.7) * 10);
  /*intai se face caluculul si se transforma in int*/

 /* 0.7 in memoria int a calc e rep 0.6999...

 cand lucram cu nr cu virgule sa nu ne bazam ca rezutatul va fi orect
nu comparati variabile care sunt cu virgula*/



  $x = 8 - 6.4;
  $y = 1.6;
  if( $x == $y) {
    echo "it's all good";
  }
 ?>
