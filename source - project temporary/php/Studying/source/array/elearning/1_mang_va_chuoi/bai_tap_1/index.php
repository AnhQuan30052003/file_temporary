<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Xử lý n</title>
</head>

<body>
  <?php
    if(isset($_POST['n'])) $n=$_POST['n'];
    else $n="";

    $ketqua = "";

    if(isset($_POST['hthi'])) {	//tạo mảng có n phần tử, các phần tử có giá trị [-100,200]
      $arr=array();
      for($i=0;$i<$n;$i++) {
        $x=rand(-100,200);
        $arr[$i]=$x;
      }

      //In ra mảng vừa tạo
      $ketqua="_"."&#13;&#10;";
      $ketqua.="a. Mảng được tạo là: " .implode(" ",$arr)."&#13;&#10;";

      //Tìm và in ra các số dương chẵn trong mảng dùng hàm foreach
      $count=0;
      foreach($arr as $v){
        if($v%2==0)
          $count += 1;
      }

      $ketqua.="b. Có $count số chẵn trong mảng". "&#13;&#10;";

      $count = 0;
      foreach ($arr as $a) {
        if ($a < 100) $count += 1;
      }
      
      $ketqua.="c. Có $count số trong mảng < 100". "&#13;&#10;";

      $count = 0;
      foreach ($arr as $a) {
        if ($a < 0) $count += 1;
      }      
      
      $ketqua.="d. Có $count số trong mảng là số âm". "&#13;&#10;";


      $ketqua.="e. Vị trí các số kề cuối là số 0: ";
      $saveArr = [];
      for ($i = 0; $i < count($arr); $i++) {
        $s = (string) $arr[$i];
        $len = strlen($s);
        if ($len < 2) continue;

        $char = $s[$len-2];
        if ($char == "0") {
          $saveArr[] = $arr[$i]; 
          $ketqua.= $i . " ";
        }
      }

      $ketqua.= "&#13;&#10;";

      $ketqua.="f. Các số đó được sắp xếp tăng dần: ";
      sort($saveArr);
      foreach ($saveArr as $a) {
        $ketqua.= $a . " ";
      }
    }
  ?>

<form action="" method="post">
	Nhập n: <input type="text" name="n" placeholder="0" value="<?php echo $n?>"/>
	<input type="submit" name="hthi" value="Hiển thị"/><br>
	Kết quả:
  <br>
	<textarea cols="70" rows="10" name="ketqua"> <?php echo $ketqua ?></textarea>
</form>
</body>
</html>