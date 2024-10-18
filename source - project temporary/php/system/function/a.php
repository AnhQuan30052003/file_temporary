<?php
  class Nguoi {
    private $ten, $tuoi;

    public function __construct($ten)  {
      $this->ten = $ten;
    }

    private function tinh_tuoi($namHienTai) {
      $tuoi = $namHienTai - 2003;
      return $tuoi;
    }

    public function info() {
      $this->tuoi = $this->tinh_tuoi(2024);
      echo "Tên: $this->ten, tuổi: $this->tuoi";
    }
  }
?>