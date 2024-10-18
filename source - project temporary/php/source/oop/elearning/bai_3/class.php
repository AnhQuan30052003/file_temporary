<?php
  class PhanSo {
    private $tu, $mau;

    public function __construct($tu, $mau) {
      $this->tu = $tu;
      $this->mau = $mau;
    }

    public function phep_cong($ps) {
      $tuSo1Temp = $this->tu * $ps->get_mau();
      $tuSo2Temp = $ps->get_tu() * $this->mau;

      $tu = $tuSo1Temp + $tuSo2Temp;
      $mau = $this->mau * $ps->get_mau();
      
      return new PhanSo($tu, $mau);
    }

    public function phep_tru($ps) {
      $tuSo1Temp = $this->tu * $ps->get_mau();
      $tuSo2Temp = $ps->get_tu() * $this->mau;
      
      $tu = $tuSo1Temp - $tuSo2Temp;
      $mau = $this->mau * $ps->get_mau();
      
      return new PhanSo($tu, $mau);
    }

    public function phep_nhan($ps) {
      $tu = $this->tu * $ps->get_tu();
      $mau = $this->mau * $ps->get_mau();

      return new PhanSo($tu, $mau);
    }

    public function phep_chia($ps) {
      $tu = $this->tu * $ps->get_mau();
      $mau = $this->mau * $ps->get_tu();

      return new PhanSo($tu, $mau);
    }

    public function UCLN($a, $b) {
      if ($b == 0) return $a;
      return $this->UCLN($b, $a % $b);
    }

    public function reduce() {
      $ucln = abs($this->UCLN($this->tu, $this->mau));
      $this->tu = (int) ($this->tu / $ucln);
      $this->mau = (int) ($this->mau / $ucln);

      if ($this->tu == $this->mau || $this->tu == 0 || $this->mau == 1) return [$this->tu];

      return [$this->tu, $this->mau];
    }

    public function set_tu($tu) {
      $this->tu = $tu;
    }

    public function get_tu() {
      return $this->tu;
    }

    public function set_mau($tu) {
      $this->mau = $tu;
    }

    public function get_mau() {
      return $this->mau;
    }
  }
?>