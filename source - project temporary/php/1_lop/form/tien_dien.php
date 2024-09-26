<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
  <title>Document</title>

  <style>
    .form-s {
      border: solid 5px purple;
    }

    .input {
      width: 300px;
    }
  </style>
</head>

<?php
  $tenCH = "";
  $chiSoCu = "";
  $chiSoMoi = "";
  $donGia = "";
  $tien = "";

  if (isset($_REQUEST["tinh"])) {
    if (isset($_REQUEST["a"]) && isset($_REQUEST["b"]) && isset($_REQUEST["c"])) {
      $a = (float) trim($_REQUEST["a"]);
      $b = (float) trim($_REQUEST["b"]);
      $c = (float) trim($_REQUEST["c"]);
  
      if (checkTamGiac()) {
        $cv = $a + $b + $c;
        $p = $cv/2;
        $dt = sqrt($p*abs($p - $a)*abs($p - $b)*abs($p - $c));
      }
    }
  }

?>

<body class="w-100vw h-100vh flex flex-x-y">
  <section class="form-s w-450">
    <div class="title w-full bg-yellow h-40 flex flex-x-y">
      <h4 class="text-red fw-700">THANH TOÁN TIỀN ĐIỆN</h4>
    </div>

    <form action="c_s_tam_giac.php" method="post"
      class="p-5"
    >
      <div class="item flex justify-content-between w-full my-4">
        <p>Tên chủ hộ:</p>
        <input class="outline-none px-3 input" name="a" type="text" placeholder="0" value="<?php echo $tenCH ?>">
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Chỉ số cũ:</p>
        <input class="outline-none px-3 input" name="b" type="text" placeholder="0" value="<?php echo $chiSoCu ?>">
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Chỉ số mới:</p>
        <input class="outline-none px-3 input" name="c" type="text" placeholder="0" value="<?php echo $chiSoMoi ?>">
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Đơn giá:</p>
        <input class="outline-none px-3 input" name="c" type="text" placeholder="0" value="<?php echo $donGia ?>">
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Số tiền thanh toán:</p>
        <input class="outline-none px-3 input" name="kq" type="text"
          placeholder="0" disabled
          value="<?php echo $tien ?>"
        >
      </div>

      <div class="frame-btn text-center my-5">
        <input class="" type="submit" name="tinh" value="Tính">
      </div>
    </form>  
  </section>
</body>
</html>