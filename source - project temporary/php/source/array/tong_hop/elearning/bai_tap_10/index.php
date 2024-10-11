<?php
  $fileName = "list_musics.txt";

  function layDuLieu() {
    global $fileName;

    $data = [];
    $file = fopen($fileName, "r");
    if ($file) {
      while (($line = fgets($file)) !== false) {
        $line = explode(": ", $line);
        $data[$line[0]] = $line[1];
      }
      fclose($file);
    }

    ksort($data);
    return $data;
  }

  function eventThem() {
    global $fileName;

    if (isset($_REQUEST["them"])) {
      $thuHang = $_REQUEST["thuHang"];
      $tenBaiHat = $_REQUEST["tenBaiHat"];
  
      if (strlen($thuHang) == 0 || strlen($tenBaiHat) == 0) {
        echo "<script>alert('Tên bài hát và thứ hạng phải có giá trị !');</script>";      
        return;
      }
  
      $content = $thuHang .": " . $tenBaiHat . "\n";
      file_put_contents($fileName, $content, FILE_APPEND);
    }
  }

  function eventDanhSach() {
    if (isset($_REQUEST["danhSach"])) {
      $data = layDuLieu();

      foreach ($data as $thuHang => $tenBaiHat) {
        echo "<tr><td>$thuHang</td><td>$tenBaiHat</td></tr>";
      }
    }
  }

  eventThem();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
  <title>Xếp hạng bài hát</title>

  <style>
    .input p:first-child {
      width: 120px;
      text-align: right;
      align-self: center;
    }

    .input input {
      padding: 3px 5px;
      outline: none;
    }

    .option button {
      padding: 5px 7px;
      outline: none;
    }

    table {
      width: 100%;
      text-align: center;
    }

    td, th {
      padding: 5px 7px;
    }

    tr th:first-child,
    tr td:first-child {
      width: 105px;
    }

    tr td:nth-child(2) {
      text-align: left;
    }
  </style>
</head>

<body class="w-100vw h-100vh p-10">
  <section class="mod w-800 border mx-auto p-10">
    <div class="title">
      <h1 class="text-center">Xếp hạng bài hát</h1>
    </div>

    <form action="" method="post">
      <div class="input flex gap-10 my-10">
        <p>Tên bài hát:</p>
        <input class="w-80p" type="text" name="tenBaiHat">
      </div>

      <div class="input flex gap-10 my-10">
        <p>Thứ hạng:</p>
        <input class="w-10p" type="text" name="thuHang">
      </div>

      <div class="option flex flex-x gap-30 mt-10">
        <button name="them">Thêm bài hát</button>
        <button name="danhSach">Danh sách xếp hạng</button>
      </div>
    </form>

    <div class="list mt-20 <?php if (isset($_REQUEST["danhSach"])) echo ""; else echo "hidden"; ?>">
      <table border="1" style="border-collapse: collapse;">
        <tr><th>Thứ hạng</th><th>Tên bài hát</th></tr>
        <?php eventDanhSach() ;?>
      </table>
    </div>
  </section>
</body>
</html>