<?php
  abstract class NhanVien {
    protected $ht, $gt, $nvl, $hsl, $sc;
    protected const lcb = 10_000_000;

    public function __construct($ht, $gt, $nvl, $hsl, $sc) {
      $this->ht  = $ht;
      $this->gt  = $gt;
      $this->nvl  = $nvl;
      $this->hsl  = $hsl;
      $this->sc  = $sc;
    }

    public abstract function tinh_tien_luong();

    public abstract function tinh_tro_cap();

    public function tinh_tien_thuong() {
      $date = DateTime::createFromFormat('d/m/Y', $this->nvl);
      $year = $date->format('Y');
      $snlv = 2024 - $year;
      return 1_000_000 * $snlv;
    }
  }

  class NhanVienVanPhong extends NhanVien {
    private $snv;
    private const dmv = 4, dgp = 20_000;

    public function __construct($ht, $gt, $nvl, $hsl, $sc ,$snv) {
      parent::__construct($ht, $gt, $nvl, $hsl, $sc);
      $this->snv = $snv;
    }

    public function tinh_tien_phat() {
      if ($this->snv > self::dmv) return ($this->snv - self::dmv) * self::dgp;
      return 0;
    }

    public function tinh_tro_cap() {
      if ($this->gt == "Nữ") return 200_000 * $this->sc * 1.5;
      return 200_000 * $this->sc;
    }

    public function tinh_tien_luong() {
      return  self::lcb * $this->hsl;
    }
  }

  class NhanVienSanXuat extends NhanVien {
    private $ssp;
    private const dmsp = 30, dgsp = 30_000;

    public function __construct($ht, $gt, $nvl, $hsl, $sc, $ssp) {
      parent::__construct($ht, $gt, $nvl, $hsl, $sc);
      $this->ssp = $ssp;
    }

    public function tinh_tien_thuong() {
      if ($this->ssp > self::dmsp) return ($this->ssp > self::dmsp) * self::dgsp * 0.03;
      return 0;
    }

    public function tinh_tro_cap() {
      return 120_000 * $this->sc;
    }

    public function tinh_tien_luong() {
      return  self::dgsp * $this->ssp;
    }
  }
?>