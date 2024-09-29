<?php
  class Nguoi {
    private $ten;
    public $tuoi;

    public function __construct($ten, $tuoi){
      $this->ten = $ten;
      $this->tuoi = $tuoi;
    }
    
    public function setTen($ten) {
      $this->ten = $ten;
    }

    public function info() {
      return "Tên: ".$this->ten.", tuổi: ".$this->tuoi;
    }
  }

  $ten = "Anh Quân";
  $tuoi = 21;
  $ngheNghiep = "Sinh viên";

  function info() {
    $text = "Thông tin: ";
    return $text;
  }

  echo info() . "Tên: $ten, tuổi: $tuoi, nghề nghiệp: $ngheNghiep<br>"; # ic.✔️
  echo info()."Tên: ".$ten.", tuổi: ".$tuoi.", nghề nghiệp: ".$ngheNghiep."<br>"; # ❌
  echo info() . "Tên: " . $ten . ", tuổi: " . $tuoi . ", nghề nghiệp: " . $ngheNghiep . "<br>"; # ✔️
?>