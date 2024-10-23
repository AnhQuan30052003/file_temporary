<?php include_once("back_end.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>

<body>
  <section>
    <h1>QUẢN LÝ NHÂN VIÊN</h1>

    <form action="" method="post">
      <div class="frame-input">
        <div class="left">
          <div class="item">
            <span>Họ và tên:</span>
            <input type="text" name="ht" value="<?php if (isset($_REQUEST["ht"])) echo $_REQUEST["ht"]; ?>">
          </div>

          <div class="item">
            <span>Ngày sinh:</span>
            <input type="text" name="ns" value="<?php if (isset($_REQUEST["ns"])) echo $_REQUEST["ns"]; ?>">
          </div>

          <div class="item">
            <span>Giới tính:</span>
            <div class="choose-gioi-tinh">
              <span><input type="radio" name="gt" value="Nam" <?php if ((isset($_REQUEST["gt"])) && isset($_REQUEST["gt"]) == "Nam" || isset($_REQUEST["gt"]) == false) echo "checked"; ?>><span>Nam</span></span>
              <span><input type="radio" name="gt" value="Nữ" <?php if (isset($_REQUEST["gt"]) && isset($_REQUEST["gt"]) == "Nữ") echo "checked"; ?>><span>Nữ</span></span>
            </div>
          </div>

          <div class="item">
            <span>Loại nhân viên:</span>
            <div class="choose-loai-nhan-vien">
              <input type="radio" name="lnv" value="Văn phòng" <?php if ((isset($_REQUEST["lnv"]) && $_REQUEST["lnv"] == "Văn phòng") || isset($_REQUEST["lnv"]) == false) echo "checked"; ?>>
              <span>Văn phòng</span>
            </div>
          </div>

          <div class="item">
            <span>Số ngày vắng:</span>
            <input type="text" name="snv" value="<?php if (isset($_REQUEST["snv"])) echo $_REQUEST["snv"]; ?>">
          </div>
        </div>

        <div class="right">
          <div class="item">
            <span>Số con:</span>
            <input type="text" name="sc" value="<?php if (isset($_REQUEST["sc"])) echo $_REQUEST["sc"]; ?>">
          </div>

          <div class="item">
            <span>Ngày vào làm:</span>
            <input type="text" name="nvl" value="<?php if (isset($_REQUEST["nvl"])) echo $_REQUEST["nvl"]; ?>">
          </div>

          <div class="item">
            <span>Hệ số lương:</span>
            <input type="text" name="hsl" value="<?php if (isset($_REQUEST["hsl"])) echo $_REQUEST["hsl"]; ?>">
          </div>

          <div class="item">
            <div class="choose-loai-nhan-vien">
              <input type="radio" name="lnv" value="Sản xuất" <?php if (isset($_REQUEST["lnv"]) && $_REQUEST["lnv"] == "Sản xuất") echo "checked"; ?>>
              <span>Sản xuất</span>
            </div>
          </div>

          <div class="item">
            <span>Số sản phẩm:</span>
            <input type="text" name="ssp" value="<?php if (isset($_REQUEST["ssp"])) echo $_REQUEST["ssp"]; ?>">
          </div>
        </div>
      </div>

      <div class="frame-button">
        <button name="tinhLuong">Tính lương</button>
      </div>

      <div class="frame-output">
        <div class="left">
          <div class="item">
            <span>Tiền lương:</span>
            <input type="text" value="<?php echo $tienLuong; ?>">
          </div>

          <div class="item">
            <span>Tiền thưởng:</span>
            <input type="text" value="<?php echo $tienThuong; ?>">
          </div>
        </div>

        <div class="right">
          <div class="item">
            <span>Trợ cấp:</span>
            <input type="text" value="<?php echo $troCap; ?>">
          </div>

          <div class="item">
            <span>Tiền phạt:</span>
            <input type="text" value="<?php echo $tienPhat; ?>">
          </div>
      </div>
      </div>

      <div class="frame-thuc-linh">
        <div class="item">
          <span>Thực lĩnh:</span>
          <input type="text" disabled value="<?php echo $thucLinh; ?>">
        </div>
      </div>
    </form>
  </section>
</body>
</html>