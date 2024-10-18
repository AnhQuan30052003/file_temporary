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
  <section class="output">
    <div class="frame">
      <h1 id="title"></h1>
      <table class="table" border="1" style="border-collapse: collapse;">
        <tr class="first">
          <th style="width: 70px;">STT</th>
          <th style="width: 250px;">Họ và tên</th>
          <th style="width: 300px;">Địa chỉ</th>
          <th style="width: 150px;">Giới tính</th>

          <th class="GV" style="width: 150px;">Trình độ</th>
          <th class="SV" style="width: 150px;">Lớp</th>
          <th class="SV" style="width: 350px;">Ngành</th>
        </tr>

        <?php
          $fileName = "./database/db_GV.txt";
          $data = get_data($fileName);
          for ($i = 0; $i < count($data); $i++) {
            echo "<tr class='GV'>";
            echo "<td>" . $i+1 . "</td>";
            foreach ($data[$i] as $d) {
              echo "<td>$d</td>";
            }
            echo "</tr>";
          }

          $fileName = "./database/db_SV.txt";
          $data = get_data($fileName);
          for ($i = 0; $i < count($data); $i++) {
            echo "<tr class='SV'>";
            echo "<td>" . $i+1 . "</td>";
            foreach ($data[$i] as $d) {
              echo "<td>$d</td>";
            }
            echo "</tr>";
          }
        ?>
      </table>

      <a href="javascript:window.history.back(-1);">Quay lại trang trước</a>
    </div>
  </section>  

  <script src="./assets/main.js"></script>
</body>
</html>