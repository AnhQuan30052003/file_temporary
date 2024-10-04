<?php
  $hoTen = $_REQUEST["hoTen"];
  $gioiTinh = $_REQUEST["gt"];
  $diaChi = $_REQUEST["diaChi"];
  $soDienThoai = $_REQUEST["soDienThoai"];
  $quoTich = $_REQUEST["quoTich"];
  $monDaHoc = $_REQUEST["monDaHoc"];
  $ghiChu = $_REQUEST["ghiChu"];

  echo "<h1>Bạn đã đăng nhập thành công, dưới đây là thông tin của bạn:</h1>";
  echo "Họ tên: $hoTen<br>";
  echo "Giới tính: $gioiTinh<br>";
  echo "Địa chỉ: $diaChi<br>";
  echo "Điện thoại: $soDienThoai<br>";
  echo "Quốc tịch: $quoTich<br>";

  echo "Môn học: ";
  for ($i = 0; $i < count($monDaHoc); $i++) {
    echo $monDaHoc[$i];
    if ($i < count($monDaHoc)-1) {
      echo ", ";
    }
  }

  echo "<br>Ghi chú: $ghiChu<br>";

  echo '<br><a href="javascript:window.history.back(-1);">Quay lại trang trước</a>';
?>