
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="UTF-8" />

    <link rel="stylesheet" href="login style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap"
      rel="stylesheet"
    />
    <title>Login</title>
    <script
      src="https://kit.fontawesome.com/2d323a629b.js"
      crossorigin="anonymous"
    ></script>
    <script src="login.js" defer></script>
  </head>
  <body>
    <!-- 맨위에 사진-->
    <div class="login-image">

    <nav class="navbar">
      <!--로그인 로고 -->
      <div class="navbar__logo">
        <a href="login.php"><img src="allpicture\LOGIN LOGO.png" ></a>
      </div>
      <!--로그인 메뉴-->
      <ul class="navbar__menu">
        <li><a href="#chap1">소개</a></li>
        <li><a href="#chap2">활동</a></li>

        <li><a href="board\board.php">게시판</a></li>
        <li><a href="word.php">놀이</a></li>
      </ul>
      <!--로그인 하는곳-->
      <ul class="navbar__icons">
        <li> <a href="SignUp\login.php">Login</a> </li>


      </ul>

      <a class="navbar__toggleBtn">
        <i class="fas fa-bars" ></i>
      </a>

    </nav>
<hr>


</div>
  <!--로그인 소개 -->
    <section>
      <div class="login_">
        <h1 class="login_head" id="chap1">LOGIN 동아리 소개</h1>
        <hr style="margin-right:45%" ><br>
      <div class="login_introduce">
          <a href="http://www.taesung.hs.kr/wah/main/index.htm" target="_blank" title="태성고 홈페이지" >태성고등학교   </a><span class="focus"> 최고의 </span> It동아리입니다.<br>
          로그인 동아리는 자신의 진로에 맞는 공부를 할 수 있습니다. <br>
          자신이 원하는 프로젝트를 할 수 있으며 <br>
          선후배간 소통이 원할하다는 장점이 있습니다. <br>

        </div>
      </div>
    </section>

    <section class="activity">
      <h1 class="login_head" id="chap2">LOGIN 활동 소개</h1>
      <hr style="margin-right:45%" ><br>
    <div class="login_introduce">
        저희는 현재 앱, VR, Game, 웹 개발, 3D 프린터 <br>
        빅 데이터, 무선 조종 자동차, 프로그래밍 공부 <br>
        총 8개의 활동을 하고 있습니다.
      </div>
    </div>
    </section>
    <div class="images">
      <img src="allpicture\coding.jpg" width="22%">
      <img src="allpicture\vr.jpg" width="23%">
      <img src="allpicture\game.jpg" width="33%">
      <img src="allpicture\3d.jpg" width="22%">
    </div>
<!--
    <section class="activity_1">
      <h1 class="login_head" id="chap3">LOGIN 히스토리</h1>
      <hr style="margin-right:45%" ><br>
    <div class="login_introduce">

      </div>
    </div>
    </section>
      -->
    <footer class="foot">
      <div>
        <p>Login</p>
        제작 / 노지섭 / 서재원 <br>
        문의 : zxcvbnm25682@naver.com

      </div>

    </footer>

  </body>
</html>
