<?php
  function laNamNhuan(int $year) {
    if ($year % 4 == 0) return true;
    return false;
  }

  function hienThi(string &$text, int $namPhu, bool $min = false) {
    $a = [];
    if ($min) $a = range($namPhu, 2000);
    else $a = range(2000, $namPhu);

    foreach ($a as $year) {
      if (laNamNhuan($year)) {
        $text .= $year . " ";
      }
    }
    $text .= "là năm nhuận";
  }

  if (isset($_REQUEST["timTren"])) {
    hienThi($_REQUEST["ketQuaNamBe2K"], $_REQUEST["namBe2K"], true);
  }

  if (isset($_REQUEST["timDuoi"])) {
    hienThi($_REQUEST["ketQuaNamLon2K"], $_REQUEST["namLon2K"]);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
  <title>Tìm năm nhuận</title>
  
  <style>
    .blue-new {
      background-color: #0a65c3;
    }
    .lam-new {
      background-color: #b8eeff;
    }
  </style>
</head>

<body class="w-100vw h-100vh flex flex-x">
  <section class="mod mt-40 w-550">
    <form action="" method="post" class="p-10 border">
      <div class="tren lam-new">
        <div class="info text-blue text-center fw-700 bg-white pb-10">Năm nhập vào nhỏ hơn năm 2000</div>
        <div class="title text-white blue-new fw-700 text-center fs-35" style="font-style: italic;">TÌM NĂM NHUẬN</div>
  
        <div class="tim flex gap-10 my-5">
          <p class="w-150 text-center" style="align-self: center;">Năm</p>
          <input class="outline-none p-3 w-300" type="text" name="namBe2K" value="<?php if (isset($_REQUEST["namBe2K"])) echo $_REQUEST["namBe2K"]; ?>">
        </div>
  
        <div class="ketQua">
          <textarea class="w-full h-50 outline-none" name="ketQuaNamBe2K" id=""><?php if (isset($_REQUEST["ketQuaNamBe2K"])) echo $_REQUEST["ketQuaNamBe2K"]; ?></textarea>
        </div>
  
        <div class="frame-btn flex flex-x">
          <button name="timTren" class="text-red outline-none px-10 py-3" style="background-color: #70d6ff;">Tìm năm nhuận</button>
        </div>
      </div>

      <div class="duoi lam-new mt-10">
        <div class="info text-blue text-center fw-700 bg-white pb-10">Năm nhập vào lớn hơn năm 2000</div>
        <div class="title text-white blue-new fw-700 text-center fs-35" style="font-style: italic;">TÌM NĂM NHUẬN</div>
  
        <div class="tim flex gap-10 my-5">
          <p class="w-150 text-center" style="align-self: center;">Năm</p>
          <input class="outline-none p-3 w-300" type="text" name="namLon2K" value="<?php if (isset($_REQUEST["namLon2K"])) echo $_REQUEST["namLon2K"]; ?>">
        </div>
  
        <div class="ketQua">
          <textarea class="w-full h-50 outline-none" name="ketQuaNamLon2K" id=""><?php if (isset($_REQUEST["ketQuaNamLon2K"])) echo $_REQUEST["ketQuaNamLon2K"]; ?></textarea>
        </div>
  
        <div class="frame-btn flex flex-x">
          <button name="timDuoi" class="text-red outline-none px-10 py-3" style="background-color: #70d6ff;">Tìm năm nhuận</button>
        </div>
      </div>
    </form>
  </section>  
</body>
</html>