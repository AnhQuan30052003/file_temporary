<?php
  $arr = [];
  $soPhanTuAm = 0;
  $soPhanTuLa0 = 0;

  $n = random_int(1, 7);
  echo "Giá trị n random được: $n<br>";

  echo "Mảng $n phần tử ngẫu nhiên: ";
  for ($i = 1; $i <= $n; $i++) {
    $value = random_int(-10, 10);
    $arr[] = $value;

    if ($value < 0) $soPhanTuAm += 1;
    if ($value == 0) $soPhanTuLa0 += 1;
  }

  echo implode(", ", $arr)."<br>";

  echo "Tổng mảng: ".array_sum($arr)."<br>";
  echo "Số phần tử âm: $soPhanTuAm <br>";
  echo "Số phần bằng 0: $soPhanTuLa0";
?>