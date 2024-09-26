<html> 
<head>
	<title>Input/Ouput data</title></head>
<body>

  <form action="name.php" name="myform" method="post">
    <label for="">Your Name:</label> 
    <input
      type="text" name="Name"
      size=20
      value="<?php if(isset($_POST['Name'])) echo $_POST['Name'];?>"
    />
    <input type="submit" value="Submit">
  </form>

  <?php
    $check = isset($_REQUEST["Name"]);
    echo "Đã kiểm tra, strl(check): " . strlen($check) . ", giá tri: " . $_REQUEST["Name"] . "<br>";
    $text = "";

    if ($check && ! empty($check)) {
      $text = "Hello " . $_POST["Name"];
    }
    else {
      $text = "";
      echo "Đã xoá $text";
    }

    echo $text;
  ?>
</body>

</html>