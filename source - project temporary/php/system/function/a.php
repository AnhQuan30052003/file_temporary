<?php
  # OOP với PHP

  abstract class Person {
    protected $name;

    public function __construct($name) {
      $this->name = $name;
    }

    public function set_name(string $name) {
      $this->name = $name;
    }

    abstract public function info();
  }

  class Student extends Person {
    private $mssv;

    public function __construct($mssv, $name) {
      $this->mssv = $mssv;
      parent::__construct($name);
    }

    public function set_mssv(string $mssv) {
      $this->mssv = $mssv;
    }

    public function info() {
      echo "Thông tin sinh viên:<br>";
      echo "MSSV: " . $this->mssv . "<br>";
      echo "Tên: " . $this->name . "<br>";
    }
  }

  $a = new Student("63135188", "Nguyễn Anh Quân");
  $a->info();
?>