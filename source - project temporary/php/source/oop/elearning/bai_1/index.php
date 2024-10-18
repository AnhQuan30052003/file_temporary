<?php include_once("back_end.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style.css">
  <title>Document</title>
</head>

<body>
  <section class="input">
    <h1>Nhập Thông Tin</h1>
    
    <form action="" method="post">
      <div class="option">
        <div class="type">
          <input type="radio" name="typeNhap" value="GV" <?php if ($vaiTro == "GV") echo "checked"; ?> onclick="load('GV')">
          <span>Giảng viên</span>
        </div>
  
        <div class="type">
          <input type="radio" name="typeNhap" value="SV" <?php if ($vaiTro == "SV") echo "checked"; ?> onclick="load('SV')">
          <span>Sinh viên</span>
        </div>
      </div>
      
      <div class="item">
        <p>Họ tên: </p>
        <input type="text" name="ht" require>
      </div>

      <div class="item">
        <p>Địa chỉ: </p>
        <input type="text" name="dc" require>
      </div>

      <div class="item">
        <p>Giới tính: </p>
        <div class="chon-gioi-tinh">
          <div class="chon">
            <input type="radio" name="gt" value="Nam" <?php if ((isset($_REQUEST["gt"]) && $_REQUEST["gt"] == "Nam") || isset($_REQUEST["gt"]) == false) echo "checked"; ?>>
            <span>Nam</span>
          </div>

          <div class="chon">
            <input type="radio" name="gt" value="Nữ" <?php if (isset($_REQUEST["gt"]) && $_REQUEST["gt"] == "Nữ") echo "checked"; ?>>
            <span>Nữ</span>
          </div>
        </div>
      </div>

      <div class="item SV hidden">
        <p>Lớp: </p>
        <input type="text" name="lh">
      </div>

      <div class="item SV hidden">
        <p>Ngành học: </p>
        <input type="text" name="nh">
      </div>

      <div class="item GV">
        <p>Trình độ: </p>
        <div class="chon-trinh-do">
          <div class="trinh-do">
            <input type="radio" name="td" value="Cử nhân" <?php if ((isset($_REQUEST["td"]) && $_REQUEST["td"] == "Cử nhân") || (isset($_REQUEST["td"]) == false)) echo "checked"; ?>>
            <span>Cử nhân</span>
          </div>

          <div class="trinh-do">
            <input type="radio" name="td" value="Thạc sĩ" <?php if (isset($_REQUEST["td"]) && $_REQUEST["td"] == "Thạc sĩ") echo "checked"; ?>>
            <span>Thạc sĩ</span>
          </div>

          <div class="trinh-do">
            <input type="radio" name="td" value="Tiến sĩ" <?php if (isset($_REQUEST["td"]) && $_REQUEST["td"] == "Tiến sĩ") echo "checked"; ?>>
            <span>Tiến sĩ</span>
          </div>
        </div>
      </div>

      <div class="btn">
        <input type="submit" name="btn_luu" value="Lưu">
        <input type="button" name="btn_xuat" value="Xuất" onclick="to_web()">
      </div>
    </form>
  </section>

  <script src="./assets/main.js"></script>
</body>
</html>
