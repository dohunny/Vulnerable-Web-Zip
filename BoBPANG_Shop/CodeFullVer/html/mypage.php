<!DOCTYPE html>
<html lang="en" style="height: 100%">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BoBPANG</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <style>
      #bodybody {
        font-family: 'Nanum Gothic', sans-serif;
        margin-top: 70px;
      }
      .profileCon {
        width: 800px;
        height: 270px;
        margin: 20px auto 0px auto;
        margin-left: 100px;
      }

      hCon {
        display: flex;
      }

      .h2_b {
        font-weight: bolder;
        color: rgba(0,0,0,0.8);
        margin-left: 15px;
      }

      h2 {
        font-family: 'Nanum Gothic', sans-serif;
        font-size: 35px;
        color: rgba(0,0,0,0.7);
        margin-top: 0;
        margin-bottom: 0;
        padding: 0;
      }

      menuCon {
        display: flex;
        flex-direction: row;
        text-align: right;
        padding-top: 60px;
        font-size: 20px;
        height: 100px;
      }
      profileLine {
        margin-left: 80px;
        display: flex;
        margin-bottom: 15px;
        height: 30px;
      }

      h33 {
        font-size: 30px;
        width: 100px;
        vertical-align: middle;
        height: 30px;
        font-weight: 600;
        color: rgba(0,0,0,0.6);
      }

      h3c {
        font-size: 25px;
        margin-left: 50px;
        vertical-align: middle;
        height: 30px;
        color: rgba(0,0,0,0.8);
      }
    </style>
  
  </head>

  <body id="bodybody">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="ww">
      <div class="container">
        <a class="navbar-brand" href="index.php" id="hihi">BoBPANG</a>
        <p id="hihih">내일의 환경과 고객을 생각하는 이커머스 서비스</p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bobpang.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item"> 
              <?php 
                session_start();
                if(isset($_SESSION['username'])) echo '<a class="nav-link" href="./logout.php">LogOut</a>';
                else {
                  echo '<a class="nav-link" href="./login.html">Login</a>';
                } 
              ?>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      <?php 
        if(isset($_SESSION['username'])){
          if ($_SESSION['username'] == 'N0KangVolt'){
            include "config.php";
            $db = dbconnect();
            if (mysqli_connect_errno()) {
              echo "<script>alert('DB Error...!')</script>";
              echo '<script>history.go(-1)</script>';
              exit();
            }

            $result = mysqli_query($db, 'select * from contacts');

            echo '
            <div style="width: 50%; height: 100%;">
              <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-70%, -70%); font-size: 20px;">
                Contact Lists <br><br>
            ';
            if (mysqli_num_rows($result) > 0) {
              $i = 1;
              while($row = mysqli_fetch_assoc($result)) {
                echo "$i. username: " . $row["username"]. " / email:" . $row["email"]. " / tel:" . $row["tel"] . " / message:" . $row["message"] . "<br>";
                $i++; 
              }
            }else{
              echo "테이블에 데이터가 없습니다.";
            }
            echo '
                <br>
                오늘도 밥팡에서 즐거운 쇼핑 되세요!
              </h1>
            </div>
            ';
          } else {
            echo '
            <div class="profileCon">
              <hCon>
                  <h2>안녕하세요,   </h2>
                  <h2 class="h2_b">'.$_SESSION['username'].' 님!</h2>
              </hCon>
              <h2>오늘도 밥팡에서 즐거운 쇼핑 되세요!</h2>

              <profileLine>
                  <h33>이름</h33>
                  <h3c>
                    '.$_SESSION['username'].'
                  </h3c>
              </profileLine>
              <profileLine>
                  <h33>이메일</h33>
                  <h3c>
                    '.$_SESSION['email'].'
                  </h3c>
              </profileLine>
            </div>
            ';
          }
        } else {
          echo '
          <div style="width: 100%; height: 100%;">
            <h1 style="position: absolute; top: 50%; left: 50%; transform: translate(-70%, -70%); font-size: 100px;">Login is required</h1>
          </div>
          ';
        }
      ?>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark" id="ddd" style="display: block; width: 100%; position: fixed; top: 100%; transform: translateY(-100%);">
      <div class="container">
        <p class="m-0 text-center text-white">
          <p class="dd">밥팡(주) | 대표이사 : 강준혁</p>
          <p class="dd">서울특별시 금천구 서부샛길 606 가산 대성디폴리스 A동 27층</p>
          <p class="dd">사업자 등록번호 : 123-11-1231</p>
          <p class="dd">통신판매업신고 : 2020-서울금천-0000</p>
        </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
