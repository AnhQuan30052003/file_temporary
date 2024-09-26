<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://anhquan30052003.github.io/AnhQuanCSS/style-main.css">
  <title>Document</title>
</head>

<body class="w-100vw h-100vh flex flex-x">
  <section>
    <h1 class="text-center my-10">Tìm sách</h1>

    <form action="solve.php" method="post">
      <label for="">Từ khoá: </label>

      <input
        class="outline-none w-500 p-2"
        type="text" name="txtTuKhoa"
      >

      <input
        class="py-3 px-5 border-none text-white bg-green"
        type="submit" value="Tìm kiếm"
      >
    </form>
  </section>
</body>
</html>