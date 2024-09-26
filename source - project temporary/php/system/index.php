<?php

  $a = 1;
  $b = 2;
  $c = 4;

  $cv = $a + $b + $c;
  $p = $cv/2;

  echo "CV: " . $p . "<br>";
  
  $dt = sqrt($p*abs($p - $a)*abs($p - $b)*abs($p - $c));
  
  echo "DT: " . $dt . "<br>";

  $s = "fsf";

  $value = (int) $s;

  echo $value;
?>