<?php
  $a = array(
    "ten" => "Anh Quân",
    "tuoi" => 21,
    "so" => array(1, 2, 3, 0),
    "chu" => array(1 => "mot", 2 => "hai", 3 => "ba", 4 => "khong"),
  );

  $so = $a["chu"];
  sort($so);
  print_r($so);
?>