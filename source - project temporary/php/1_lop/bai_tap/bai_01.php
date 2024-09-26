<?php
  // Viết chương trình nhận một số ngẫu nhiên n từ 1->100 và in ra các giá trị chẵn từ 1->n

  $n = rand(1, 100);
  echo "Giá trị n được tạo ra: $n<br>";
  echo "Các giá trị chẵn từ 1->$n<br>";

  for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) {
      echo "$i ";
    }
  }
?>