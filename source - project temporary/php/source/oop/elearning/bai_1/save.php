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

    public function dinh_diem_thuong() {
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

  $vaiTro = "";
  $kq = "";
  function rule() {
    global $vaiTro;
    if (isset($_REQUEST["typeNhap"]) && $_REQUEST["typeNhap"] == "SV") $vaiTro = "SV";
    else $vaiTro = "GV";  
  }

  rule();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
  <title>Document</title>

  <style>
    section {
      border: solid 1px;
      width: 500px;
      padding: 10px;
      margin: 20px auto;
    }

    h1 {
      font-weight: bold;
      font-style: italic;
      text-align: center;
    }
    
    .option {
      display: flex;
      justify-content: center;
      margin: 10px 0;
    }

    .option .type {
      margin: 0 5px;
    }

    .option .type span {
      margin: 0 7px;
    }

    .item {
      display: flex;
      margin: 10px 0;
    }

    .item p:first-child {
      width: 120px;
      text-align: right;
      padding-right: 10px;
    }

    .item input {
      width: 300px;
      outline: none;
      padding: 3px 5px;
    }

    .btn {
      text-align: center;
    }

    .btn input {
      width: 150px;
    }
  </style>
</head>

<body class="w-100vw h-100vh">
  <section>
    <h1>Nhập Thông Tin</h1>
    
    <form action="" method="post">
      <div class="option">
        <div class="type">
          <input type="radio" name="typeNhap" value="GV" <?php if (isset($_REQUEST["typeNhap"]) && $_REQUEST["typeNhap"] == "GV") echo "checked='checked'"; ?> onclick="load('GV')">
          <span>Giảng viên</span>
        </div>
  
        <div class="type">
          <input type="radio" name="typeNhap" value="SV" <?php if (isset($_REQUEST["typeNhap"]) && $_REQUEST["typeNhap"] == "SV") echo "checked"; ?> onclick="load('SV')">
          <span>Sinh viên</span>
        </div>
      </div>
      
      <div class="item">
        <p>Họ tên: </p>
        <input type="text" name="ht">
      </div>

      <div class="item">
        <p>Địa chỉ: </p>
        <input type="text" name="dc">
      </div>

      <div class="item">
        <p>Giới tính: </p>
        <input type="text" name="gt">
      </div>

      <div class="item SV hidden">
        <p>Lớp: </p>
        <input type="text" name="lh">
      </div>

      <div class="item SV hidden">
        <p>Ngành học: </p>
        <input type="text" name="nh">
      </div>

      <div class="item GV">
        <p>Trình độ: </p>
        <input type="text" name="td">
      </div>

      <div class="btn">
        <input type="submit" name="btn" value="Gửi">
      </div>

      <div class="item">
        <p>Kết quả: </p>
        <input type="text" name="kq" value="<?php echo $kq; ?>" disabled>
      </div>
    </form>
  </section>

  <script>
    function load(type) {
      console.log("Click")
      let SV = document.getElementsByClassName("SV");
      let GV = document.getElementsByClassName("GV");

      if (type == "SV") {
        for (let i = 0; i < SV.length; i++) {
          SV[i].classList.remove("hidden");
        }
        GV[0].classList.add("hidden")
      }
      else {
        for (let i = 0; i < SV.length; i++) {
          SV[i].classList.add("hidden");
        }
        GV[0].classList.remove("hidden")
      }
    }
  </script>
</body>
</html>
