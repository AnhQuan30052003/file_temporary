<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">

  <title>Show</title>
</head>

<body>
  <div class="m-10">
    <?php
      $name = $_POST["nameCard"];

      if ($name != NULL) {  
        echo "<h1>Xin chào {$name}</h1>";
      }
    ?>

    <br>
    <a href="input.php">Click để Quay lại</a>
  </div>
</body>
</html>

