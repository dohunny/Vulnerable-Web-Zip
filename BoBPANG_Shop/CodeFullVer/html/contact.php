<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include "config.php";
    $db = dbconnect();
    if (mysqli_connect_errno()) {
        echo "<script>alert('DB Error...!')</script>";
        echo '<script>history.go(-1)</script>';
        exit();
    }

    // var_dump($db);

    if ( !isset($_POST['username']) || !isset($_POST['PN']) || !isset($_POST['email']) || !isset($_POST['message'])) {
        echo "<script>alert('Please check your inputs');";
        echo '<script>history.go(-1)</script>';
        exit();
    }

    $username_a = addslashes($_POST['username']);
    $email_a = addslashes($_POST['email']);
    $phone_a = addslashes($_POST['PN']);
    $message_a = addslashes($_POST['message']);

    if ($username_a != $_POST['username'] || $password_a != $_POST['password'] || $email_a != $_POST['email']){
        die("No Special Character");
    }

    $query="insert into contacts values('$username_a','$email_a','$phone_a','$message_a');";
    $result = mysqli_query($db, $query);

    if ($result){
        echo "<script>alert('Sent your message successfully!')</script>";
        echo '<script>location.href="contact.php"</script>';
        exit();
    } else {
        echo "<script>alert('Something was wrong!')</script>";
        echo '<script>history.go(-1)</script>';
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact</title>
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/contact.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/shop-homepage.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    </head>
    <body>
    <body id="bodybody">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="ww">
            <div class="container">
                <a class="navbar-brand" href="/index.php" id="hihi">BoBPANG</a>
                <p id="hihih">내일의 환경과 고객을 생각하는 이커머스 서비스</p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="/index.php">Home</a></li>
                    <li class="nav-item">
                    <a class="nav-link" href="/bobpang.php">About</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="/contact.php">Contact
                        <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"> 
                    <?php 
                        session_start();
                        if(isset($_SESSION['username'])) 
                        echo '<a class="nav-link" href="./mypage.php">MyPage</a>';
                        else echo '<a class="nav-link" href="./login.html">Login</a>'; 
                    ?>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container2">
            <div class="soriDesc">
                <p id="soris" style="margin-bottom: 20px;">고객의 소리함</p>
                <p class="sori">저희 BoBPANG은 항상 고객님의 소리에 귀 기울이고자 노력합니다.</p>
                <p class="sori">건의하거나 문의하실 사항이 있으시다면 언제든지 저희 고객의 소리함을 이용해주시길 바랍니다.</p>
            </div>
            <form class="CForm" method="post" action="contact.php">
                <input class="inputC textBox" type="text" name="username" placeholder="이름을 입력해주세요">
                <input class="inputC textBox" type="email" name="email" placeholder="이메일을 입력해주세요">
                <input class="inputC textBox" type="tel" name="PN" placeholder="휴대전화번호를 입력해주세요">
                <textarea class="inputC textArea" type="text" name="message" placeholder="내용을 입력해주세요"></textarea>
                <button id="bbb" class="inputC" type="submit" name="submit">Submit</button>
            </form>
        </div>
        <!-- Footer -->
    <footer class="py-5 bg-dark" id="ddd">
      <div class="container">
        <p class="m-0 text-center text-white">
          <p class="dd">밥팡(주) | 대표이사 : 구도훈</p>
          <p class="dd">서울특별시 금천구 서부샛길 606 가산 대성디폴리스 A동 27층</p>
          <p class="dd">사업자 등록번호 : 123-11-1231</p>
          <p class="dd">통신판매업신고 : 2020-서울금천-0000</p>
        </p>
      </div>
      <!-- /.container -->
    </footer>

    </body>
</html>
