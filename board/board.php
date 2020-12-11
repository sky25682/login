<?php

$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'login');
$list = '';
session_start();
if(isset($_SESSION['ss_mb_id'])) { // 로그인 세션이 있을 경우 로그인 화면

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);  //mysqli_query([가져올 객체],실행할 쿼리 !)
while($row = mysqli_fetch_array($result)) { //mysqli_fetch_array(하나의 스키마 넣음) <=이 스키마의 한 행을 뽑는다
  $list = $list."<li><a href=\"./seeboard.php?id={$row['id']}\">{$row['title']}</a></li>";
}


$article = array(
  'title'=>'Welcome',
  'description'=>'Hello, web'
);

/*
if(isset($_GET['id'])) {
  $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article['title'] = $row['title'];
  $article['description'] = $row['description'];
}*/
 ?>

<!DOCTYPE html>
<html lang=ko dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>게시판</title>
    <style media="screen">
  body{

  margin: 0px;
}
.bad{
  text-align: center;

}
.bad a {
  color: black;
  text-decoration: none;
  font-size: 20px;
}
.text {
  font-size: 30px;
  text-align: center;
  padding: 30px;
  border-bottom: solid 1px;
}
    .grid {
      padding: 14px 0px;
      margin: 0px;
      border-bottom:1px solid grey;
      text-align: center;
    }
.grid1{
  border: solid grey;
  text-align: center;
}
.grid1 ul li a {
  color: black;
  text-decoration: none;
}
.grid1 ul li {
  font-size: 24px;
  list-style: none;
}

    </style>
  </head>
  <body>
    <div class="grid">
      <h1>게시판</h1>
    </div>
    <div class="grid1">
      <ul>
      <a href="./seeboard.php"><?=$list?></a>
      </ul>
    </div>
    <div class="text">
      <h2>제목: <?=$article['title']?></h2>
    본문: <?=$article['description']?>

    </div>
    <div class="">
      <p class="bad"><a href="board sign\bord.php">게시판 등록하기</a></p>
      <p class="bad"><a href="http://localhost/login.php">홈페이지</a></p>

      </div>




  </body>
</html>

<?php
} else{
	echo "<script>alert('로그인을 해주세요.');</script>";
	    echo "<script>location.replace('http://localhost/login.php');</script>";



}
?>
