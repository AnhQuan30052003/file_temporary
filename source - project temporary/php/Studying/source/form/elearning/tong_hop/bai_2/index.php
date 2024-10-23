<!-- Thiết kế form: Tính tiền điện -->

<?php
  $tenChuHo = "";
  $chiSoCu = "";
  $chiSoMoi = "";
  $donGia = "20000";
  $tienThanhToan = "";

  function tinh() {
    global $tenChuHo, $chiSoCu, $chiSoMoi, $donGia, $tienThanhToan;

    if (isset($_REQUEST["tinh"], $_REQUEST["tenChuHo"], $_REQUEST["chiSoCu"], $_REQUEST["chiSoMoi"], $_REQUEST["donGia"])) {
      $tenChuHo = $_REQUEST["tenChuHo"];
      $chiSoCu = $_REQUEST["chiSoCu"];
      $chiSoMoi = $_REQUEST["chiSoMoi"];
      $donGia = $_REQUEST["donGia"];

      if (empty($tenChuHo)) {
        echo "<script>alert('Hãy nhập tên chủ hộ !');</script>";
        return;
      }

      if (empty($chiSoCu)) {
        echo "<script>alert('Hãy nhập chỉ số cũ !');</script>";
        return;
      }

      if (empty($chiSoMoi)) {
        echo "<script>alert('Hãy nhập chỉ số mới !');</script>";
        return;
      }
      
      if (empty($donGia) == false) {
        if ($donGia <= 0) {
          echo "<script>alert('Đơn giá phải >= 0');</script>";
          return;
        }
      }
      else $donGia = 20000;

      if ($chiSoMoi < $chiSoCu) {
        echo "<script>alert('Chỉ số mới phải >= chỉ số cũ !');</script>";
        return;
      }

      $tienThanhToan = ((float) $chiSoMoi - (float) $chiSoCu) * $donGia;
    }
  }

  tinh();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
  <title>Document</title>

  <style>
    .form-s {
      border: solid 1px;
    }

    .input {
      width: 300px;
    }

    .title {
      font-style: italic;
    }

    .info span {
      display: inline-block;
      width: 50px;
    }
  </style>
</head>

<body class="w-100vw h-100vh flex flex-x-y">
  <section class="form-s w-550">
    <div class="title w-full bg-orange h-40 flex flex-x-y">
      <h4 class=" fw-700 title">THANH TOÁN TIỀN ĐIỆN</h4>
    </div>

    <form action="" method="post"
      class="py-5 px-10"
    >
      <div class="item flex justify-content-between w-full my-4">
        <p>Tên chủ hộ:</p>
        <div class="info">
          <input class="outline-none px-3 input" name="tenChuHo" type="text" value="<?php echo $tenChuHo ?>">
          <span></span>
        </div>
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Chỉ số cũ:</p>
        <div class="info">
          <input class="outline-none px-3 input" name="chiSoCu" type="text" value="<?php echo $chiSoCu ?>">
          <span>(Kw)</span>
        </div>
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Chỉ số mới:</p>
        <div class="info">
          <input class="outline-none px-3 input" name="chiSoMoi" type="text" value="<?php echo $chiSoMoi ?>">
          <span>(Kw)</span>
        </div>
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Đơn giá:</p>
        <div class="info">
          <input class="outline-none px-3 input" name="donGia" type="text" value="<?php echo $donGia ?>">
          <span>(VNĐ)</span>
        </div>          
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Số tiền thanh toán:</p>
        <div class="info">
          <input
          class="outline-none px-3 input"
          style="background-color: pink;"
          type="text" disabled
          value="<?php echo $tienThanhToan ?>"
          >
          <span>(VNĐ)</span>
        </div>
      </div>

      <div class="frame-btn text-center my-5">
        <input class="px-3" type="submit" name="tinh" value="Tính">
      </div>
    </form>  
  </section>
</body>
</html>