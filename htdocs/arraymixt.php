<?php
$test = 10;
$array = array (
  10 => $test,
  "test" => 20
);
  print $array[$array[$test]] * $array["test"];
 ?>
