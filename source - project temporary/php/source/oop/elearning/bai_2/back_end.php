<?php
  include_once("class.php");

  $tienLuong = "";
  $tienThuong = "";
  $troCap = "";
  $tienPhat = "";
  $thucLinh =  "";
  
  function active_tinh_luong() {
    global $tienLuong, $tienThuong, $troCap, $tienPhat, $thucLinh;
    
    if (isset($_REQUEST["tinhLuong"])) {
      $vaiTro = $_REQUEST["lnv"];

      $ht = $_REQUEST["ht"];
      $gt = $_REQUEST["gt"];
      $sc = $_REQUEST["sc"];
      $nvl = $_REQUEST["nvl"];
      $hsl = $_REQUEST["hsl"];

      if ($vaiTro == "Văn phòng") {
        $snv = $_REQUEST["snv"];
        $o = new NhanVienVanPhong($ht, $gt, $nvl, $hsl, $sc ,$snv);
        $tienLuong = $o->tinh_tien_luong();
        $troCap = $o->tinh_tro_cap();
        $tienThuong = $o->tinh_tien_thuong();
        $tienPhat = $o->tinh_tien_phat();
      }
      else {
        $ssp = $_REQUEST["ssp"];
        $o = new NhanVienSanXuat($ht, $gt, $nvl, $hsl, $sc ,$ssp);
        $tienLuong = $o->tinh_tien_luong();
        $troCap = $o->tinh_tro_cap();
        $tienThuong = $o->tinh_tien_thuong();
        $tienPhat = 0;
      }

      $thucLinh = $tienLuong + $tienThuong + $troCap - $tienPhat;
    }
  }
  
  active_tinh_luong();
?>