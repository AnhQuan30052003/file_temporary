<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
  <title>Document</title>

  <style>
    .item,
    .type div,
    .type {
      display: flex;
    }

    .item {
      margin: 5px 0;
    }

    .type {
      gap: 20px;
    }
    .type div {
      gap: 5px;
    }

    .item > p {
      width: 150px;
      text-align: right;
      margin-right: 15px;
    }

    .item > input {
      width: 300px;
      outline: none;
    }

    .style-btn {
      width: auto !important;
      padding: 3px 5px;
    }

    .type div p,
    .item:first-child p {
      color: red;
    }
  </style>
</head>

<body class="w-100vw h-100vh flex flex-x">
  <section class="mod-pt w-600">
    <h1 class="text-center text-blue my-30">PHÉP TÍNH TRÊN HAI SỐ</h1>

    <form action="ketquapheptinh.php" method="post">
      <div class="item">
        <p>Chọn phép tính:</p>
        <div class="type">
          <div>
            <input type="radio" name="pt" checked value="cong">
            <p>Cộng</p>
          </div>

          <div>
            <input type="radio" name="pt" value="tru">
            <p>Trừ</p>
          </div>

          <div>
            <input type="radio" name="pt" value="nhan">
            <p>Nhân</p>
          </div>

          <div>
            <input type="radio" name="pt" value="chia">
            <p>Chia</p>
          </div>
        </div>
      </div>

      <div class="item">
        <p>Số thứ nhất:</p>
        <input type="text" name="st1">
      </div>

      <div class="item">
        <p>Số thứ hai:</p>
        <input type="text" name="st2">
      </div>

      <div class="item">
        <p></p>
        <input class="style-btn" type="submit" name="tinh" value="Tính">
      </div>
    </form>
  </section>  
</body>
</html>