<?php
  $n = rand(-50, 50);

  echo "Số ngẫu nhiên n random: $n<br><br>";
  
  $text = "";
  if ($n > 0) {
    $text = "$n là số dương <br>";
  }
  else {
    $text = "$n là số âm. Đối số của n là: " . $n * -1 ."<br>";
    $n = -$n;
  }

  echo $text . "<br>";

  echo "Mảng ngẫu nhiên $n phần tử:<br>";
  $a = array($n);
  $tong = 0;
  for ($i = 0; $i < $n; $i++) {
    $a[$i] = rand(-100,100);
    if ($i % 2 == 1) $tong += $a[$i];
  }

  if ($n > 0) printMaTrix();

  echo "<br>Tổng các phần tử ở vị trí lẻ: $tong <br>";

  for ($i = 0; $i < $n - 1; $i++) {
    for ($j = $i+1; $j < $n; $j++) {
      if ($a[$i] > $a[$j]) {
        $temp = $a[$i];
        $a[$i] = $a[$j];
        $a[$j] = $temp;
      }
    }
  }

  echo "<br>Mảng sau khi sắp xếp tăng dần: <br>";
  if ($n > 0) printMaTrix();

  function printMaTrix() {
    global $a, $n;
    echo "<table>";
    echo "<tr>";
    for ($i = 0; $i < $n; $i++) {
      echo "<td>" . $a[$i] ."</td>";
      if (($i+1) % 30 == 0) {
        echo "</tr>";
        echo "<tr>";
      }
    }
    echo "</tr>";
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