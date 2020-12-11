<?php

$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'login');
$list = '';
session_start();

$sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);



if(isset($_SESSION['ss_mb_id'])) {?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
   <center>
    <h1>제목 <?=$row['title'];?></h1>
    <hr>
  </center>
    <meta charset="utf-8">
    <title>게시판</title>
  </head>
  <body>
    <center>
    <br>
    <h3>본문:</h3>
    <div style="font-size:3m;"> <?= $row['description']; ?></div>
    <br>
    <form action="./delete.php" method="get">
        <table>
          <tr>
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <td><input type="submit" value="삭제하기"></td>
          </tr>
        </table>
      </form>
  </center>
  </body>
</html>








  <?
}else {
  echo "<script>alert('로그인을 해주세요.');</script>";
	    echo "<script>location.replace('http://localhost/login.php');</script>";
}

?>
