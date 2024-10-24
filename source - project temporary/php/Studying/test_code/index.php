<?php
  include_once "../helper/connect_mysql/connect.php";

  $database = "qlbansua";
  $sql = "select * from khach_hangz";
  $result = get_data_query($sql);

  foreach ($result as $line) {
    echo "<h1>";
      for ($i = 0; $i < count($line)/2; $i++) {
        echo $line[$i] . " ";
      }
    echo "</h1>";
  }
?> 