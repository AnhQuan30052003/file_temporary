<?php
  $string = "1 2 3";

  $number = explode(" ", $string);
  print_r($number);
  echo "<br>Tổng mảng: ".array_sum($number);
?>