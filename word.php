<?php

$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'login');
$list = '';
session_start();
if(isset($_SESSION['ss_mb_id'])) {
  ?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>단어장</title>
  </head>
  <body>

  </body>
</html>














  <?php
} else {
  echo "<script>alert('로그인을 해주세요.');</script>";
      echo "<script>location.replace('http://localhost/login.php');</script>";

}


  ?>
