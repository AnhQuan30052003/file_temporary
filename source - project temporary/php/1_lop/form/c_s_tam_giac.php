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
  $a = "";
  $b = "";
  $c = "";
  $cv = "";
  $dt = "";

  function checkTamGiac() {
    global $a, $b, $c;
    return ($a + $b > $c) || ($a + $c > $b) || ($b + $c > $a);
  }

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
      <h4 class="text-red fw-700">CHU VI VÀ DIỆN TÍCH HÌNH TAM GIÁC</h4>
    </div>

    <form action="c_s_tam_giac.php" method="post"
      class="p-5"
    >
      <div class="item flex justify-content-between w-full my-4">
        <p>Cạnh a:</p>
        <input class="outline-none px-3 input" name="a" type="text" placeholder="0" value="<?php echo $a ?>">
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Cạnh b:</p>
        <input class="outline-none px-3 input" name="b" type="text" placeholder="0" value="<?php echo $b ?>">
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Cạnh c:</p>
        <input class="outline-none px-3 input" name="c" type="text" placeholder="0" value="<?php echo $c ?>">
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Chu vi:</p>
        <input class="outline-none px-3 input" name="kq" type="text"
          placeholder="0" disabled
          value="<?php echo $cv ?>"
        >
      </div>

      <div class="item flex justify-content-between w-full my-4">
        <p>Diện tích:</p>
        <input class="outline-none px-3 input" name="kq" type="text"
          placeholder="0" disabled
          value="<?php echo $dt ?>"
        >
      </div>

      <div class="frame-btn text-center my-5">
        <input class="" type="submit" name="tinh" value="Tính">
      </div>
    </form>  
  </section>
</body>
</html>