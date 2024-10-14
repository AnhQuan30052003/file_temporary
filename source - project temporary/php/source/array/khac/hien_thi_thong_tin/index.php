<?php
  $arr = [
    "CNTT" => [
      "KTPM" => [
        "Lê Thị Bích Hằng" => ["Nữ", 1990]
      ],
      "HTTT" => [
        "Phạm Thị Thu Thuý" => ["Nữ", 1991]
      ],
      "MMT" => [
        "Phạm Văn Nam" => ["Nam", 1985]
      ]
    ],
    "NN" => [
      "PD" => [
        "Thu" => ["Nữ", 1996]
      ],
      "DL" => [
        "Khánh" => ["Nam", 1997]
      ]
    ],
  ];

  foreach ($arr as $khoaKey => $khoaValue) {
    echo "<details>";
    echo "<summary>$khoaKey</summary>";

    echo "<div class='indented'>";
    echo "<ol>";
    foreach ($khoaValue as $nganhKey => $nganhValue) {
      echo "<li>$nganhKey</li>";

      echo "<ul>";
      foreach ($nganhValue as $tenGiangVien => $thongTinGiangVien) {
        echo "<li>$tenGiangVien</li>";

        echo "<ul>";
        foreach ($thongTinGiangVien as $thongTin) {
          echo "<li>$thongTin</li>";
        }
        echo "</ul>";
      }
      echo "</ul>";
    }
    echo "</ol>";
    echo "</div>";
    echo "</details>";
  }
?>