<?php
  $conn = "";

  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "";

  # Kết nối
  function connect() {
    global $conn, $host, $user, $password, $database;
    $conn = mysqli_connect($host, $user, $password, $database)
      or die("Không thể kết nối tới database $database \n. Lỗi: " . mysqli_connect_error());
    mysqli_set_charset($conn, "UTF8");
  }

  # Ngắt kết nối
  function disconnect() {
    global $conn;
    mysqli_close($conn);
  }

  # Truy vấn nhanh thông qua kết nối rồi ngắt
  function quick_query(string $sql) {
    global $conn;
    connect();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    return $result;
  }

  # Lấy dữ liệu sau khi kết nối
  function get_data_query(string $sql) {
    $result = quick_query($sql);
    $data = [];

    try {
      // if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_array($result)) {
          $data[] = $row;
        }
      // }
    }
    catch (Exception $e) {
      echo "Có lỗi khi lấy dữ liệu từ sql '$sql' <br>";
    }
    
    return $data;
  }
?>