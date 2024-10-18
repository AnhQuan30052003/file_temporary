<?php include_once("back_end.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>

<body>
  <section>
    <form action="" method="post">
      <h1>Chọn các phép tính trên phân số</h1>

      <div class="input-frame">
        <span>Nhập phân số thứ 1:</span>

        <span>Tử số:</span>
        <input type="text" name="tuSo1" value="<?php if (isset($_REQUEST["tuSo1"])) echo $_REQUEST["tuSo1"]; ?>" required>

        <span>Mẫu số:</span>
        <input type="text" name="mauSo1" value="<?php if (isset($_REQUEST["mauSo1"])) echo $_REQUEST["mauSo1"]; ?>" required>
      </div>

      <div class="input-frame">
        <span>Nhập phân số thứ 2:</span>

        <span>Tử số:</span>
        <input type="text" name="tuSo2" value="<?php if (isset($_REQUEST["tuSo2"])) echo $_REQUEST["tuSo2"]; ?>" required>

        <span>Mẫu số:</span>
        <input type="text" name="mauSo2" value="<?php if (isset($_REQUEST["mauSo2"])) echo $_REQUEST["mauSo2"]; ?>" required>
      </div>

      <fieldset>
        <legend>Chọn phép tính</legend>
        <div class="choose-frame">
          <span class="option"><input type="radio" name="pt" value="+" <?php if ((isset($_REQUEST["pt"]) && $_REQUEST["pt"] == "+") || !isset($_REQUEST["pt"])) echo "checked"; ?>><span>Cộng</span></span>
          <span class="option"><input type="radio" name="pt" value="-" <?php if (isset($_REQUEST["pt"]) && $_REQUEST["pt"] == "-") echo "checked"; ?>><span>Trừ</span></span>
          <span class="option"><input type="radio" name="pt" value="x" <?php if (isset($_REQUEST["pt"]) && $_REQUEST["pt"] == "x") echo "checked"; ?>><span>Nhân</span></span>
          <span class="option"><input type="radio" name="pt" value="/" <?php if (isset($_REQUEST["pt"]) && $_REQUEST["pt"] == "/") echo "checked"; ?>><span>Chia</span></span>
        </div>
      </fieldset>

      <button name="btn-ketQua">Kết quả</button>
      <p><?php echo $strKQ; ?></p>
    </form>
  </section>
</body>
</html>