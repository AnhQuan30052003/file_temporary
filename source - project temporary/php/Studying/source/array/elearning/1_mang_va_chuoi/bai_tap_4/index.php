<?php
  if (isset($_REQUEST["tong"])) {
    $nhap = $_REQUEST["nhap"];
    $s = explode(",", $nhap);
    $tong = array_sum($s);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
  <title>Document</title>

  <style>
    .title {
      background-color: #32999a;
      color: white;
      font-style: italic;
      font-weight: bold;
      text-align: center;
      padding: 5px 0;
    }

    .item {
      display: flex;
      margin: 5px 0;
    }

    .item p:first-child {
      width: 120px;
    }

    input {
      outline: none;
      padding: 3px 5px;
    }
  </style>
</head>

<body class="w-100vw h-100vh flex flex-x-y">
  <section class="mod-array w-500 p-5 border" style="background-color: #d1ded4;">
    <div class="title mb-10">
      <h1>NHẬP VÀ TÍNH DẪY SỐ</h1>
    </div>  

    <form action="" method="post"
      class="px-10"
    >
      <div class="item">
        <p>Nhập dãy số:</p>
        <input type="text" name="nhap" value="<?php if (isset($_REQUEST["nhap"])) echo $nhap; ?>">
        <span class="pl-10 text-red">(*)</span>
      </div>

      <div class="item">
        <p></p>
        <input class="bg-yellow py-4 px-7" type="submit" name="tong" value="Tổng dẫy số">
      </div>

      <div class="item">
        <p>Tổng dãy số:</p>
        <input class="text-red" style="background-color: #cdff95;" type="text" value="<?php if (isset($_REQUEST["tong"])) echo $tong; ?>">
      </div>
    </form>

    <p class="text-center"><span class="text-red">(*)</span> Các số được nhập cách nhau dấu ","</p>
  </section>
</body>
</html>