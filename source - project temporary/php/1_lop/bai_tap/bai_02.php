<?php
  // Viết chương trình nhận 1 giá trị ngẫu nhiên của n và in ra bảng cửu chương n tương ứng ?
  
  $n = rand(1, 9);

  echo "n = $n <br>";
  echo "Bẳng cửu chương $n là:<br>";

  for ($i = 1; $i <= 10; $i++) {
    echo "$n x $i = " . $n * $i . "<br>";
  }
?>