<?php
  $author = "Anh Quan";
  $copyRight = true;

  function addLastName(&$firstName, $latsName) {
    $firstName = $latsName . " " . $firstName;
  }

  function showAuthor() {
    global $author;
    return $author;
  }
?>