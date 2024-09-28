<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bảng Cửu Chương</title>

  <style>
    .bang-cuu-chuong {
      display: flex;
      flex-direction: column;
    }

    .bang-cuu-chuong h1,
    .bang-cuu-chuong table {
      align-self: center;

    }
    .box {
      padding: 10px;
      border: solid 1px;
      display: inline-block;
      margin: 3px;
      width: 120px;
    }
  </style>
</head>

<body>
  <section class="bang-cuu-chuong">
    <h1>BẢNG CỬU CHƯƠNG</h1>
    <table>
      <tr>
        <?php
          for ($i = 1; $i <= 5; $i++) {
            echo "<td class='box'>";
            for ($j = 1; $j <= 10; $j++) {
              echo "$i x $j = " . $i * $j . "<br>";
            }
            echo "</td>";
          }
        ?> 
      </tr>
            
      <tr>
        <?php
          for ($i = 6; $i <= 10; $i++) {
            echo "<td class='box'>";
            for ($j = 1; $j <= 10; $j++) {
              echo "$i x $j = " . $i * $j . "<br>";
            }
            echo "</td>";
          }
        ?> 
      </tr>
    </table>
  </section>
</body>
</html>