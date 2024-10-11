<?php
  $namDL = "";
  $namAL = "";
  $link = "";

  $can = ["Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm"];
  $chi = ["Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất"];
  $hinh = [
    "https://minhducpc.vn/uploads/images/qa/50-hinh-nen-con-heo-cho-may-tinh-de-thuong-cute.jpg",
    "https://png.pngtree.com/png-clipart/20230425/original/pngtree-cute-hamster-png-image_9096900.png",
    "https://img7.thuthuatphanmem.vn/uploads/2023/05/29/anh-con-trau-chibi-dep-nhat_090724151.jpg",
    "https://img.tripi.vn/cdn-cgi/image/width=700,height=700/https://gcs.tripi.vn/public-tripi/tripi-feed/img/474075LQy/anh-ho-chibi-cute_095612965.jpg",
    "https://thanhtrungmobile.vn/thanhtrungmobile-vn/2023/08/hinh-nen-meo-dep-cho-dien-thoai-1.jpg.webp",
    "https://trangtrinhacua.com.vn/wp-content/uploads/2023/12/2-11.png",
    "https://img.pikbest.com/png-images/20240514/cute-green-cartoon-snake-_10563087.png!bw700",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXPh0oRgPzTnr2FtyL_cJZMJEx7Um4duK2tQ&s",
    "https://png.pngtree.com/png-clipart/20231003/original/pngtree-cute-goat-animal-illustration-png-image_13076744.png",

    "https://media.istockphoto.com/id/1331362809/vector/cute-baby-monkey-cartoon-sitting.jpg?s=170667a&w=0&k=20&c=CsO1FuXXhJ_-ZLhwT0fcwE4VAuso8t1nX4vGB_TJtTQ=",
    "https://png.pngtree.com/png-vector/20230831/ourmid/pngtree-cute-cartoon-chick-png-image_9205820.png",
    "https://i.pinimg.com/736x/72/c2/cb/72c2cb9433178f6deab0bc9ea5abfea9.jpg",
  ];
  
  if (isset($_REQUEST["btn"])) {
    $namDL = $_REQUEST["namDL"];
    $nam = $namDL - 3;
    $namAL = $can[$nam % 10] . " " . $chi[$nam % 12];
    $link = $hinh[$nam % 12];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
  <title>Năm âm lịch</title>

  <style>
    .lam-new {
      background-color: #b8eeff;
    }
    .blue-new {
      background-color: #0a65c3;
    }
  </style>
</head>
  
<body class="w-100vw h-100vh flex flex-x">
  <section class="mod w-600">
    <div class="title text-white blue-new fw-700 text-center fs-35" style="font-style: italic;">TÌM NĂM NHUẬN</div>
    <form class="content lam-new" action="" method="post">
      <div class="input flex flex-y justify-content-around h-100">
        <div class="frame w-150">
          <p class="fw-bold mb-10">Năm dương lịch</p>
          <input class="w-full outline-none px-5 py-3" type="text" name="namDL" value="<?php echo $namDL ?>">
        </div>
  
        <div class="btn">
          <button name="btn" class="p-10 text-red bg-white border-none outline-none">=></button>
        </div>
  
        <div class="frame w-150">
          <p class="fw-bold mb-10">Năm âm lịch</p>
          <input class="w-full outline-none px-5 py-3" type="text" name="namAL" disabled value="<?php echo $namAL ?>">
        </div>
      </div>
  
      <div class="img w-full <?php if (isset($_REQUEST["btn"])) echo "h-500"; else echo "h-0"; ?>">
        <img class="w-full h-full object-fit-cover" src="<?php echo $link;?>" alt="">
      </div>
    </form>
  </section>
</body>
</html>