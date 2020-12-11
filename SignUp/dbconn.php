<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'login');
if (!$conn){
  die("연결 실패:" . mysqli_connect_error());
}
session_start();
?>
