<?php
  $pt = $_REQUEST["pt"];
  $so1 = $_REQUEST["st1"];
  $so2 = $_REQUEST["st2"];
  $kq = 0;

  switch ($pt) {
    case "cong": {
      $pt = "Cộng";
      $kq = $so1 + $so2;
      break;
    }

    case "tru": {
      $pt = "Trừ";
      $kq = $so1 - $so2;
      break;
    }

    case "nhan": {
      $pt = "Nhân";
      $kq = $so1 * $so2;
      break;
    }

    case "chia": {
      $pt = "Chia";
      if ($so2 == 0) {
        $kq = "Lỗi chia cho 0 !";
      }
      else {
        $kq = $so1 / $so2;
      }
      break;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
  <title>Document</title>

  <style>
    .item {
      display: flex;
    }

    .item {
      margin: 5px 0;
    }

    .item > p:first-child {
      width: 150px;
      text-align: right;
      margin-right: 15px;
    }

    .item > input {
      width: 300px;
      outline: none;
    }

    .item:first-child p {
      color: red;
    }

    a { 
      color: blue;
      font-style: italic;
      text-decoration: underline;
    }
  </style>
</head>

<body class="w-100vw h-100vh flex flex-x">
  <section class="mod-pt w-600">
    <h1 class="text-center text-blue my-30">PHÉP TÍNH TRÊN HAI SỐ</h1>

    <form action="" method="get">
      <div class="item">
        <p>Chọn phép tính:</p>
        <p><?php echo $pt; ?></p>
      </div>

      <div class="item">
        <p>Số 1:</p>
        <input type="text" name="st1" value="<?php echo $so1; ?>">
      </div>

      <div class="item">
        <p>Số 2:</p>
        <input type="text" name="st2" value="<?php echo $so2; ?>">
      </div>

      <div class="item">
        <p>Kết quả:</p>
        <input type="text" name="st1" value="<?php echo $kq; ?>">
      </div>

      <div class="item">
        <p></p>
        <a href="javascript:window.history.back(-1);">Quay lại trang trước</a>
      </div>
    </form>
  </section>  
</body>
</html>