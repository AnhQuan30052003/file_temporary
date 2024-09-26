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

<?php
  $d = "";
  $r = "";
  $s = "";

  if (isset($_REQUEST["d"]) && isset($_REQUEST["r"])) {
    $d = trim($_REQUEST["d"]);
    $r = trim($_REQUEST["r"]);
    $s = $d * $r;
  }
?>

<body class="w-100vw h-100vh flex flex-x-y">
  <section class="form-s w-380">
    <div class="title w-full bg-yellow h-40 flex flex-x-y">
      <h4 class="text-red fw-700">DIỆN TÍCH HÌNH CHỮ NHẬT</h4>
    </div>

    <form action="dien_tich_hcn.php" method="post"
      class="p-5"
    >
      <div class="item flex justify-content-between w-full my-4">
        <p>Chiều dài:</p>
        <input class="outline-none px-3" name="d" type="text" placeholder="0" value="<?php echo $d ?>">
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Chiều rộng:</p>
        <input class="outline-none px-3" name="r" type="text" placeholder="0" value="<?php echo $r ?>">
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Diện tích:</p>
        <input class="outline-none px-3" name="kq" type="text"
          placeholder="0" disabled
          value="<?php echo $s ?>"
        >
      </div>

      <div class="frame-btn text-center my-5">
        <input class="" type="submit" value="Tính">
      </div>
    </form>  
  </section>
</body>
</html>