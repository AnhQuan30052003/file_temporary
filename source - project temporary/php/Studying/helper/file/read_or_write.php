<?php
  # Đọc file
  $fileName = "";
  $file = fopen($fileName, "r");
  if ($file) {
    while ($line = fgets($file)) {}
    fclose($file);
  }

  # Ghi vào cuối file
  $fileName = "";
  $data = "";
  file_put_contents($fileName, $data, FILE_APPEND);
?>