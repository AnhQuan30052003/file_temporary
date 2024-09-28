<?php
  $m = rand(2, 5);
  $n = rand(2, 5);

  echo "m = $m, n = $n<br>";

  $a = array();

  for ($row = 0; $row < $m; $row++) {
    $temp = array();
    for ($col = 0; $col < $n; $col++) {
      $temp[] = rand(-100, 100);
    }
    $a[] = $temp;
  }

  echo "<br>Ma trận $m x $n:<br>";
  printMaTrix();

  for ($row = 0; $row < $m; $row++) {
    for ($col = 0; $col < $n; $col++) {
      if ($a[$row][$col] < 0) {
        $a[$row][$col] = 0;
      }
    }
  }
  echo "<br>Ma trận sau khi thay các phần tử âm thành 0<br>";
  printMaTrix();

  for ($row = 0; $row < $m; $row++) {
    for ($col = 0; $col < $n-1; $col++) {
      for ($col1 = $col; $col1 < $n; $col1++) {
        if ($a[$row][$col] > $a[$row][$col1]) {
          $temp = $a[$row][$col];
          $a[$row][$col] = $a[$row][$col1];
          $a[$row][$col1] = $temp;
        }
      }
    }
  }

  echo "<br>Ma trận sau khi sắp xếp tăng dần<br>";
  printMaTrix();

  function printMaTrix() {
    global $a, $m, $n;
    
    echo "<table>";
    for ($row = 0; $row < $m; $row++) {
      echo "<tr>";
      for ($col = 0; $col < $n; $col++) {
        echo "<td>" . $a[$row][$col] ."</td>";
      }
      echo "<tr>";
    }
    echo "</table>";
  }
?>

<style>
  td {
    display: inline-block;
      width: 40px;
    text-align: center;
    margin: 2px;
  }
</style>