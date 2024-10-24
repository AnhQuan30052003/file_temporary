<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Thông tin sữa</title>
  <style>
    table tr:nth-child(even) {
      background-color: orange;
    }
  </style>
</head>

<body>
  <?php
  $conn = mysqli_connect('localhost', 'root', '', 'qlbansua')
    or die('Could not connect to MySQL: ' . mysqli_connect_error());

  mysqli_set_charset($conn, 'UTF8');


  $rowsPerPage=10; //số mẩu tin trên mỗi trang, giả sử là 10
  if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
  }

  //vị trí của mẩu tin đầu tiên trên mỗi trang
  $offset =($_GET['page']-1)*$rowsPerPage;
  //lấy $rowsPerPage mẩu tin, bắt đầu từ vị trí $offset
  $result = mysqli_query($conn, 'SELECT Ma_sua, ten_sua, Trong_luong, Don_gia FROM sua LIMIT '. $offset . ', '.$rowsPerPage);

  
  // $sql = 'select Ma_sua, ten_sua, Trong_luong, Don_gia from sua';
  // $result = mysqli_query($conn, $sql);

  echo "<p align='center'><font size='5' color='blue'> THÔNG TIN SỮA</font></P>";
  echo "<table align='center' width='1000' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";
  echo '<tr>
    <th width="20">STT</th>
    <th width="50">Mã sữa</th>
    <th width="250">Tên sữa</th>
    <th width="50">Trọng lượng</th>
  </tr>';

  if (mysqli_num_rows($result) != 0) {
    $stt = 1;
    while ($rows = mysqli_fetch_row($result)) {
      echo "<tr>";
      echo "<td>$stt</td>";
      echo "<td>$rows[0]</td>";
      echo "<td>$rows[1]</td>";
      echo "<td>$rows[2]</td>";
      echo "</tr>";
      $stt += 1;
    }
  }

  echo "</table>";

  echo"</table>";
  $re = mysqli_query($conn, 'select * from sua');
  $numRows = mysqli_num_rows($re);
  $maxPage = floor($numRows/$rowsPerPage) + 1;

  
  //tạo link tương ứng tới các trang
  echo "<p align='center'>";
  echo "<a href=" .$_SERVER['PHP_SELF']."?page=".(1)."> << </a> ";
  if ($_GET['page']-1 >= 1) echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1)."><</a> ";
  for ($i=1 ; $i<=$maxPage ; $i++) {
    if ($i == $_GET['page']) {
      echo '<b>'.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
    }
    else echo "<a href=" .$_SERVER['PHP_SELF']. "?page=" .$i.">".$i."</a> ";
  }
  if ($_GET['page']+1 <= $maxPage) echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']+1).">></a> ";
  echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($maxPage).">>></a> ";

  echo "</p>";

  // echo "<p align='center'>Tong so trang la: ".$maxPage ."</p>";

  ?>
</body>

</html>