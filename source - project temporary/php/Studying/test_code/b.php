<?php
  function hello(string $name) {
    echo "Xin chào $name ✌🏻️ <br>";
  }

  function save_one_line(array $data, string $fileName) {
    $dataString = implode(":", $data) . "\n";
    file_put_contents($fileName, $dataString, FILE_APPEND);
  }

  function get_data(string $fileName) {
    try {
      $file = fopen($fileName, "r");
      if ($file) {
        $data = [];

        while ($line = fgets($file)) {
          $data[] = explode(":", $line);
        }
        fclose($file);

        return $data;
      }
    }
    catch (Exception $e) {
      echo "<script>alert('Lỗi lấy dữ liệu từ file $fileName');</script>";
    }
  }


?>