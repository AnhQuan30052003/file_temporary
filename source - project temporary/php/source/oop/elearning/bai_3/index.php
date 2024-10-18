<?php
  class PhanSo {
    private $tu, $mau;

    public function __construct($tu, $mau) {
      $this->tu = $tu;
      $this->mau = $mau;
    }

    public function UCLN($a, $b) {
      if ($b == 0) return $a;
      return $this->UCLN($b, $a % $b);
    }

    public function reduce() {
      $ucln = abs($this->UCLN($this->tu, $this->mau));
      $this->tu = (int) ($this->tu / $ucln);
      $this->mau = (int) ($this->mau / $ucln);

      if ($this->tu == $this->mau || $this->tu == 0 || $this->mau == 1) return [$this->tu];

      return [$this->tu, $this->mau];
    }
  }

  $strKQ = "";
  function active_btn_ketQua() {
    global $strKQ;

    if (isset($_REQUEST["btn-ketQua"])) {
      $tuSo1 = $_REQUEST["tuSo1"];
      $mauSo1 = $_REQUEST["mauSo1"];
      $tuSo2 = $_REQUEST["tuSo2"];
      $mauSo2 = $_REQUEST["mauSo2"];

      $pt = $_REQUEST["pt"];
      $ptStr = "Phép chia là:";
      if ($pt == "+") {
        $ptStr = "Phép cộng là:";
        $tuSo1Temp = $tuSo1 * $mauSo2;
        $tuSo2Temp = $tuSo2 * $mauSo1;

        $tu = $tuSo1Temp + $tuSo2Temp;
        $mau = $mauSo1 * $mauSo2;

      }
      else if ($pt == "-") {
        $ptStr = "Phép trừ là:";
        $tuSo1Temp = $tuSo1 * $mauSo2;
        $tuSo2Temp = $tuSo2 * $mauSo1;

        $tu = $tuSo1Temp - $tuSo2Temp;
        $mau = $mauSo1 * $mauSo2;
      }
      else if ($pt == "x") {
        $ptStr = "Phép nhân là:";
        $tu = $tuSo1 * $tuSo2;
        $mau = $mauSo1 * $mauSo2;
      }
      else {
        $tu = $tuSo1 * $mauSo2;
        $mau = $mauSo1 * $tuSo2;
      }

      $ps = new PhanSo($tu, $mau);
      $result = $ps->reduce();

      if (count($result) == 1) $result = $result[0];
      else $result = "$result[0]/$result[1]";

      $strKQ = "$ptStr $tuSo1/$mauSo1 $pt $tuSo2/$mauSo2 = $result";
    }
  }

  active_btn_ketQua();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
  <link rel="stylesheet" href="style.css">
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
          <span class="option"><input type="radio" name="pt" value="+" <?php if ((isset($_REQUEST["pt"]) && $_REQUEST["pt"] == "+") || isset($_REQUEST["pt"]) == False) echo "checked"; ?>><span>Cộng</span></span>
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