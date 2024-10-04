<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
  <title>Document</title>

  <style>
    .item,
    .type,
    .type div {
      display: flex;
    }

    .type {
      gap: 20px;
    }

    .type div {
      gap: 5px;
    }
    
    .item  {
      margin: 5px 0;
    }

    .item > p {
      width: 150px;
      margin-right: 15px;
    }

    .item > input,
    .item > textarea {
      outline: none;
      width: 500px;
    }

    ._btn {
      padding: 2px 5px;
      width: 50px;
      margin: 0 5px;
    }
  </style>
</head>

<body class="w-100vw h-100vh flex flex-x">
  <section class="mod-nhap-thong-tin mt-20">
    <fieldset>
      <legend class="ml-20">Enter your information</legend>

      <form action="xuLyThongTin.php" method="post"
        class="p-10" id="form"
      >
        <div class="item">
          <p>Họ tên:</p>
          <input type="text" name="hoTen">
        </div>

        <div class="item">
          <p>Địa chỉ:</p>
          <input type="text" name="diaChi">
        </div>

        <div class="item">
          <p>Số điện thoại:</p>
          <input type="text" name="soDienThoai">
        </div>

        <div class="item">
          <p>Giới tính:</p>
          <div class="type">
            <div>
              <input type="radio" name="gt" checked value="Nam">
              <p>Nam</p>
            </div>

            <div>
              <input type="radio" name="gt" value="Nữ">
              <p>Nữ</p>
            </div>
          </div>
        </div>

        <div class="item">
          <p>Quốc tịch:</p>
          <select class="py-2 px-3 outline-none" name="quoTich" id="">
            <option value="Việt Nam" selected>Việt Nam</option>
            <option value="Nước ngoài">Nước ngoài</option>
          </select>
        </div>

        <div class="item">
          <p>Các môn đã học:</p>
          <div class="type">
            <div>
              <input type="checkbox" name="monDaHoc[]" value="PHP & MySQL">
              <p>PHP & MySQL</p>
            </div>

            <div>
              <input type="checkbox" name="monDaHoc[]" value="C#">
              <p>C#</p>
            </div>

            <div>
              <input type="checkbox" name="monDaHoc[]" value="XML">
              <p>XML</p>
            </div>

            <div>
              <input type="checkbox" name="monDaHoc[]" value="Python">
              <p>Pyhon</p>
            </div>
          </div>
        </div>

        <div class="item">
          <p>Ghi chú:</p>
          <textarea name="ghiChu" id="" rows="5"></textarea>
        </div>

        <div class="item">
          <p></p>
          <div class="type-btn pl-100 mt-10">
            <input class="_btn" name="btn_gui" type="submit" value="Gửi">
            <input class="_btn" name="btn_huy" type="button" value="Huỷ" onclick="resetForm()">
          </div>
        </div>
      </form>
    </fieldset>
  </section>

  <script>
    function resetForm() {
      document.getElementById("form").reset();
    }
  </script>
</body>
</html>