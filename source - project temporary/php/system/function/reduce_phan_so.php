<?php
  $a = -16;
  $b = 21;

  function gcd($a, $b) {
    if ($b == 0) return $a;
    return gcd($b, $a % $b);
  }

  function reduce($a, $b) {
    $ucln = abs(gcd($a, $b));
    echo "UCLN: $ucln <br>";
    $a = (int) ($a / $ucln);
    $b = (int) ($b / $ucln);
    
    return [$a, $b];
  }

  $arrResult = reduce($a, $b);
  echo "$a / $b = {$arrResult[0]} / {$arrResult[1]}";
?>