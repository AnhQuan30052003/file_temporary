<?php
  // Đọc - ghi file trong php
  // Nguyen Anh Quan
  // Cong Nghe Thong Tin

  
  $tenBaiHat = "Tự em say";
  $thuHang = 2;
  $item = $thuHang . ": " . $tenBaiHat . "\n";
  
  $fileName = "a.txt";
  // file_put_contents($fileName, $item, FILE_APPEND);

  $content = [];
  $file = fopen($fileName, "r");
  if ($file) {
    while (($line = fgets($file)) != false) {
      $line = trim($line);
      $content[] = $line;
      echo "$line, len: " . strlen($line) . "<br>";
    }
    fclose($file);
  }

  echo "Dữ liệu lấy được: " . count($content);

  $str = "0: Nhac máu";
  echo "<br>Chiều dài Str: " . strlen($str);
?>