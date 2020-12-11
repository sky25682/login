<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <style media="screen">
    body {
      background-image: url("allpicture\pic.jpg");
    }

      .div_ form{
      margin-left: 45%;

      }
      .write{
        font-size: 30px;
      border-bottom: solid 1px;
      padding: 20px;
      text-align: center;
      }
    </style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="write">
      게시글 작성
    </div>
    <div class="div_">
    <form action="http://localhost/process_create.php" method="post">
      <p><input type="text" name="title" placeholder="title"</p>
      <p><textarea name="description"
        placeholder="description"></textarea></p>
        <p><input type="submit"></p>
    </form>
    </div>
  </body>
</html>
