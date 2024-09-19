<?php
  // define("N", 10000);
  const N = 1000;

  $n = rand(1, N);

  echo "n = $n <br>";

  if (isSNT($n)) {
    echo "1. $n là số nguyên tố<br>";
  }
  else {
    echo "1. $n không phải là số nguyên tố !<br>";
  }

  echo "2. Tổng các số lẻ 2 chữ số < $n là ". tong($n) . "<br>";
  echo "3. n có " . demN($n) . " chữ số";

  function isSNT($n) {
    for ($i = 2; $i <= sqrt($n); $i++) {
      if ($n % $i == 0) return false;
    }

    return $n > 1;
  }

  function tong($n) {
    $tong = 0;
    for ($i = 10; $i < $n; $i++) {
      if ($i % 2 == 1 && $i < 100) {
        $tong += $i;
      }
    }

    return $tong;
  }

  function demN($n) {
    $dem = 0;
    while ($n > 0) {
      $n = (int) ($n / 10);
      $dem += 1;
    }

    return $dem;
  }
?>