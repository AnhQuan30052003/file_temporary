<?php
  include_once("class.php");

  $strKQ = "";
  function active_btn_ketQua() {
    global $strKQ;

    if (isset($_REQUEST["btn-ketQua"])) {
      $tuSo1 = $_REQUEST["tuSo1"];
      $mauSo1 = $_REQUEST["mauSo1"];
      $tuSo2 = $_REQUEST["tuSo2"];
      $mauSo2 = $_REQUEST["mauSo2"];

      $a = new PhanSo($tuSo1, $mauSo1);
      $b = new PhanSo($tuSo2, $mauSo2);

      $pt = $_REQUEST["pt"];
      $ptStr = "Phép chia là:";
      if ($pt == "+") {
        $ptStr = "Phép cộng là:";
        $c = $a->phep_cong($b);
      }
      else if ($pt == "-") {
        $ptStr = "Phép trừ là:";
        $c = $a->phep_tru($b);
      }
      else if ($pt == "x") {
        $ptStr = "Phép nhân là:";
        $c = $a->phep_nhan($b);
      }
      else {
        $c = $a->phep_chia($b);
      }

      $result = $c->reduce();
      if (count($result) == 1) $result = $result[0];
      else $result = "$result[0]/$result[1]";

      $strKQ = "$ptStr $tuSo1/$mauSo1 $pt $tuSo2/$mauSo2 = $result";
    }
  }

  active_btn_ketQua();
?>