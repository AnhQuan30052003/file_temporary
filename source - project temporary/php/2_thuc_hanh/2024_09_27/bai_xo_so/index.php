<?php
  function random($min, $max, $number) {
    $text = "";
    $n = random_int($min, $max);

    $len = strlen((string) $n);

    if ($len < $number) {
      for ($i = 1; $i <= $number - $len; $i++) {
        $text = $text . "0";
      }
      $text = $text . $n;
    }
    else $text = $n;

    return $text;
  }

  $date = getdate();
  $ngay = $date["mday"]."-".$date["mon"]."-".$date["year"];
  
  $dayVN = [
    'Monday' => 'Thứ Hai',
    'Tuesday' => 'Thứ Ba',
    'Wednesday' => 'Thứ Tư',
    'Thursday' => 'Thứ Năm',
    'Friday' => 'Thứ Sáu',
    'Saturday' => 'Thứ Bảy',
    'Sunday' => 'Chủ Nhật'
  ];
  $thu = $dayVN[$date['weekday']];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Xổ Số</title>

  <style>
    table {
      border-collapse: collapse;
      border: solid 1px #eeeeee;
    }
    
    table,
    .info {
      width: 500px;
      margin: 0 auto;
    }
    .info {
      background-color: #ffda97;
    }
    .info p {
      text-align: center;
      font-weight: bold;
      padding: 12px 0;
      margin: 0;
    }

    .info p span {
      color: #e23623;
      text-decoration: underline;
    }

    table tr {
      text-align: center;
    }

    .bg {
      background-color: #ededed;
    }

    td {
      width: 90px;
      height: 40px;
      padding: 5px 0;
      font-weight: normal;
      font-size: 20px;
      font-weight: bold;
      font-size: 25px;
    }

    td:first-child {
      width: 80px;
    }

    .red {
      color: red;
    }

    .normal {
      font-weight: normal;
      font-size: 20px;
    }
  </style>
</head>

<body>
  <div class="info">
    <p>
      <span>XSMT</span> &rsaquo;&rsaquo; <span>XXKH</span> &rsaquo;&rsaquo; <span>Xổ số Khánh Hoà <?php echo $ngay;?></span> <?php echo $thu; ?>
    </p>
  </div>

  <table border="1">
    <tr>
      <td class="normal">Giải 8</td>
      <td class="red"colspan="12"><?php echo random(0, 99, 2); ?></td>
    </tr>

    <tr class="bg">
      <td class="normal">Giải 7</td>
      <td class="bold" colspan="12"><?php echo random(0, 999, 3); ?></td>
    </tr>

    <tr>
      <td class="normal">Giải 6</td>
      <td colspan="4"><?php echo random(0, 9999, 4); ?></td>
      <td colspan="4"><?php echo random(0, 9999, 4); ?></td>
      <td colspan="4"><?php echo random(0, 9999, 4); ?></td>
    </tr>

    <tr class="bg">
      <td class="normal">Giải 5</td>
      <td colspan="12"><?php echo random(0, 9999, 4); ?></td>
    </tr>

    <tr>
      <td class="normal" rowspan="2">Giải 4</td>
      <td colspan="3"><?php echo random(0, 99999, 5); ?></td>
      <td colspan="3"><?php echo random(0, 99999, 5); ?></td>
      <td colspan="3"><?php echo random(0, 99999, 5); ?></td>
      <td colspan="3"><?php echo random(0, 99999, 5); ?></td>

      <tr>
        <td colspan="4"><?php echo random(0, 99999, 5); ?></td>
        <td colspan="4"><?php echo random(0, 99999, 5); ?></td>
        <td colspan="4"><?php echo random(0, 99999, 5); ?></td>
      </tr>
    </tr>


    <tr class="bg">
      <td class="normal">Giải 3</td>
      <td colspan="6"><?php echo random(0, 99999, 5); ?></td>
      <td colspan="6"><?php echo random(0, 99999, 5); ?></td>
    </tr>

    <tr>
      <td class="normal">Giải 2</td>
      <td colspan="12"><?php echo random(0, 99999, 5); ?></td>
    </tr>

    <tr class="bg">
      <td class="normal">Giải 1</td>
      <td colspan="12"><?php echo random(0, 99999, 5); ?></td>
    </tr>

    <tr>
      <td class="normal">ĐB</td>
      <td class="red" colspan="12"><?php echo random(0, 999999, 6); ?></td>
    </tr>
  </table>
</body>
</html>