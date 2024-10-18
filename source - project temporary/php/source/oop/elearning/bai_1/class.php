<?php
  class Nguoi {
    protected $ht, $dc, $gt;

    public function __construct($ht, $dc, $gt) {
      $this->ht = $ht;
      $this->dc = $dc;
      $this->gt = $gt;
    }
  }

  class SinhVien extends Nguoi {
    private $lh, $nh;

    public function __construct($ht, $dc, $gt, $lh, $nh) {
      parent::__construct($ht, $dc, $gt);
      $this->lh = $lh;
      $this->nh = $nh;
    }

    public function tinh_diem_thuong() {
      if ($this->nh == "CNTT") return 1;
      if ($this->nh == "KT") return 1.5;
      return 0;
    }
  }

  class GiangVien extends Nguoi {
    private $td;
    private static $luongCoBan = 1500000;

    public function __construct($ht, $dc, $gt, $td) {
      parent::__construct($ht, $dc, $gt);
      $this->td = $td;
    }

    public function tinh_luong() {
      if ($this->td == "Cử nhân") return self::$luongCoBan * 2.34;
      if ($this->td == "Thạc sĩ") return self::$luongCoBan * 3.67;
      if ($this->td == "Tiến sĩ") return self::$luongCoBan * 5.66;
    }
  }
?>