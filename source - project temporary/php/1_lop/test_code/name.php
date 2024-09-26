<html> 
<head>
	<title>Input/Ouput data</title>
</head>

<body>
  <form action="name.php" name="myform" method="post">
    <label for="">Your Name:</label> 
    <input
      type="text" name="Name"
      size=20
      value="<?php if(isset($_REQUEST['Name'])) echo $_REQUEST['Name'];?>"
    />
    <input type="submit" value="Submit">
  </form>

  <?php
    $text = "";
     
    if (isset($_REQUEST["Name"])) {
      $name = $_REQUEST["Name"];

      if (strlen($name) > 0) {
        $text = "Giá trị của biến là $name";
      }
      else {
        $text = "Không có giá trị !";
      }
    }
    else {
      $text = "Không tìm thấy biến name !";
    }

    echo $text;
  ?>
</body>

</html>