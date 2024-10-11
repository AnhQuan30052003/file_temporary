<?php
  $text = "";
  if (isset($_REQUEST["Name"])) {
    $name = $_REQUEST["Name"];

    if (strlen($name) > 0) $text = "Xin chào $name";
    else $text = "Hãy nhập tên";
  }
?>

<html> 
<head>
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
	<title>Input/Ouput data</title>
</head>

<body>
  <form action="name.php" method="post"
    class="p-10"
  >
    <label class="w-100 inline-block" for="">Your Name:</label> 
    <input
      type="text" name="Name"
      size=20
      class="outline-none px-7 py-5 w-400"
      value="<?php if(isset($_REQUEST['Name'])) echo $_REQUEST['Name'];?>"
    />
    <input type="submit" value="Submit">
    <div class="result">
      <p><?php echo $text; ?></p>
    </div>
  </form>
</body>
</html>