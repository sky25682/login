<?php
$con = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'login');

	$bno = $_GET['id'];
$sql = "delete from topic WHERE id=$bno"


 	mysqli_query("$conn,$sql");
 ?>
 <script type="text/javascript">alert("삭제되었습니다.");</script>
 <meta http-equiv="refresh" content="0 url=/"http://localhost/board"/>
