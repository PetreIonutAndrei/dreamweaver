<?php
    $arr = ['arbore','analiza','banana','bere','copac','damigeana'];

    foreach ($arr as $item) {
      if (substr($item,0,1) == $_GET['lit']){
        echo $item.'<br>';
      break;
    }
}
 ?>
