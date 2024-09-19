<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .box {
      padding: 10px;
      border: solid 1px;
      display: inline-block;
      margin: 3px;
    }
  </style>
</head>

<body>
  <table>
    <tbody>
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
          for ($i = 6; $i <= 9; $i++) {
            echo "<td class='box'>";
            for ($j = 1; $j <= 10; $j++) {
              echo "$i x $j = " . $i * $j . "<br>";
            }
            echo "</td>";
          }
        ?> 
      </tr>

    </tbody>
  </table>
</body>
</html>