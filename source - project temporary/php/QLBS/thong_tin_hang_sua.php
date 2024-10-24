<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <!-- <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css"> -->
  <title>Thông tin hãng sữa</title>
</head>

<body>
  <?php
  // Ket noi CSDL
  //require("connect.php");
  $conn = mysqli_connect('localhost', 'root', '', 'qlbansua')
  or die('Could not connect to MySQL: ' . mysqli_connect_error());
  
  $sql = 'select * from hang_sua';

  $result = mysqli_query($conn, $sql);

  echo "<p align='center'><font size='5' color='blue'> THÔNG TIN HÃNG SỮA</font></P>";
  echo "<table align='center' width='700' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";
  echo '<tr>
    <th width="10">STT</th>
    <th width="100">Mã HS</th>
    <th width="140">Tên hãng sữa</th>
    <th width="400">Địa chỉ</th>
    <th width="150">Điện thoại</th>
    <th width="200">Email</th>
  </tr>';

  if (mysqli_num_rows($result) <> 0) {
    $stt = 1;
    while ($rows = mysqli_fetch_row($result)) {
      echo "<tr>";
      echo "<td>$stt</td>";
      echo "<td>$rows[0]</td>";
      echo "<td>$rows[1]</td>";
      echo "<td>$rows[2]</td>";
      echo "<td>$rows[3]</td>";
      echo "<td>$rows[4]</td>";
      echo "</tr>";
      $stt += 1;
    }
  }

  echo "</table>";
  ?>
</body>

</html>