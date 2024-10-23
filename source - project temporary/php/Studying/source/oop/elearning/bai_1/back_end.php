<?php
  include_once("class.php");

  if (isset($_REQUEST["typeNhap"]) && $_REQUEST["typeNhap"] == "SV") $vaiTro = "SV";
  else $vaiTro = "GV";

  function get_data($fileName) {
    $data = [];
    $file = fopen($fileName, "r");
    if ($file) {
      while ($line = fgets($file)) {
        $line = explode(":", $line);
        $data[] = $line;
      }
      fclose($file);
    }
    
    return $data;
  }

  function luu() {
    global $vaiTro;
    if (isset($_REQUEST["btn_luu"])) {
      $ht = $_REQUEST["ht"];
      $dc = $_REQUEST["dc"];
      $gt = $_REQUEST["gt"];

      $data = [$ht, $dc, $gt];
      
      if ($vaiTro == "GV") {
        $fileName = "./database/db_GV.txt";
        $td = $_REQUEST["td"];
        $data[] = $td;
      }
      else {
        $fileName = "./database/db_SV.txt";
        $lh = $_REQUEST["lh"];
        $nh = $_REQUEST["nh"];
        array_push($data, $lh, $nh);
      }

      $data = implode(":", $data) . "\n";
      file_put_contents($fileName, $data, FILE_APPEND);
      echo "<script>alert('Lưu thành công');</script>";
      unset($_REQUEST["btn_luu"]);
    }
  }
  luu();
?>