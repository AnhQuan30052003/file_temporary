<?php
  require "library.php";
  $name = "Quân";

  echo "Tên ban đầu: $name <br>";
  addLastName($name, "Nguyễn Anh");
  echo "Tên thay đổi: $name <br>";

  echo "Tác giả file code: " . showAuthor();
?>