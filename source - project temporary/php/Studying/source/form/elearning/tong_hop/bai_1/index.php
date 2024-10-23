<!-- Thiết kế form: Tính diện tích hình chữ nhật -->

<?php
  $d = "";
  $r = "";
  $s = "";

  function tinh() {
    global $d, $r, $s;

    if (isset($_REQUEST["tinh"], $_REQUEST["d"], $_REQUEST["r"])) {
      $d = $_REQUEST["d"];
      $r = $_REQUEST["r"];

      if ((float) $d != $d || (float) $r != $r) {
        echo "<script>alert('Dữ liệu nhập phải là số nguyên hoặc số thực !');</script>";
        return;
      }

      $s = $d * $r;
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
      border: solid 5px purple;

    }
  </style>
</head>

<body class="w-100vw h-100vh flex flex-x-y">
  <section class="form-s w-380">
    <div class="title w-full bg-yellow h-40 flex flex-x-y">
      <h4 class="text-red fw-700">DIỆN TÍCH HÌNH CHỮ NHẬT</h4>
    </div>

    <form action="" method="post"
      class="p-5"
    >
      <div class="item flex justify-content-between w-full my-4">
        <p>Chiều dài:</p>
        <input class="outline-none px-3" name="d" type="text" value="<?php echo $d ?>">
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Chiều rộng:</p>
        <input class="outline-none px-3" name="r" type="text" value="<?php echo $r ?>">
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Diện tích:</p>
        <input
          class="outline-none px-3"
          name="kq" type="text" disabled
          value="<?php echo $s ?>"
        >
      </div>

      <div class="frame-btn text-center my-5">
        <input class="px-3" type="submit" name="tinh" value="Tính">
      </div>
    </form>  
  </section>
</body>
</html>