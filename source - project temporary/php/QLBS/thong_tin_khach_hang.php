<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Thông tin hãng sữa</title>
  <style>
    .center {
      text-align: center;
    }
  </style>
</head>

<body>
  <?php
  // Ket noi CSDL
  $conn = mysqli_connect('localhost', 'root', '', 'qlbansua')
  or die('Could not connect to MySQL: ' . mysqli_connect_error());
  
  $sql = 'select * from khach_hang';

  $result = mysqli_query($conn, $sql);

  echo "<p align='center'><font size='5' color='blue'> THÔNG TIN KHÁCH HÀNG</font></P>";
  echo "<table class='table-KH' align='center' width='1100' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";
  echo '<tr>
    <th width="100">Mã KH</th>
    <th width="300">Tên khách hàng</th>
    <th width="120">Giới tính</th>
    <th width="700">Địa chỉ</th>
    <th width="200">Điện thoại</th>
  </tr>';

  if (mysqli_num_rows($result) <> 0) {
    $stt = 1;
    $size = 5;

    while ($rows = mysqli_fetch_row($result)) {
      $img = "";
      if ($rows[2] == 0) $img = "./HInh_gioi_tinh/nam.png";
      else $img = "./HInh_gioi_tinh/nu.png";
      
      $color = "white";
      if ($stt > $size) {
        $color = "orange";
        if ($stt >= $size*2) $stt = 0;
      }
      $stt += 1;
      
      echo "<tr style='background-color: $color'>";
      echo "<td>$rows[0]</td>";
      echo "<td>$rows[1]</td>";
      echo "<td class='center'><img src='$img' width=30 alt=''></td>";
      echo "<td>$rows[3]</td>";
      echo "<td>$rows[4]</td>";
      echo "</tr>";
    }
  }

  echo "</table>";
  ?>
</body>

</html>