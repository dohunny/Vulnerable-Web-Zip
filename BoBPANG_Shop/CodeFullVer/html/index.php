<!DOCTYPE html>
<html lang="en">

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
              <a class="nav-link" href="/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/bobpang.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact.php">Contact</a>
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

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <!-- <h1 class="my-4">BoBPANG</h1> -->
          <div class="list-group">
            <a href="#" class="list-group-item">
              <img class="list-group-item-img" src="https://image.flaticon.com/icons/png/512/3474/3474360.png" alt="전자기기"/>
              <p class="list-group-item-desc">전자기기</p>
            </a>
            <a href="#" class="list-group-item">
              <img class="list-group-item-img" src="https://image.flaticon.com/icons/png/512/1785/1785255.png" alt="의류"/>
              <p class="list-group-item-desc">의류</p>
            </a>
            <a href="#" class="list-group-item">
              <img class="list-group-item-img" src="https://image.flaticon.com/icons/png/512/1624/1624997.png" alt="식품류"/>
              <p class="list-group-item-desc">식품류</p>
            </a>
            <a href="#" class="list-group-item">
              <img class="list-group-item-img" src="https://image.flaticon.com/icons/png/512/925/925993.png" alt="가전기기"/>
              <p class="list-group-item-desc">가전기기</p>
            </a>
            <a href="#" class="list-group-item">
              <img class="list-group-item-img" src="https://image.flaticon.com/icons/png/512/1046/1046857.png" alt="주방용품"/>
              <p class="list-group-item-desc">주방용품</p>
            </a>
            <a href="#" class="list-group-item">
              <img class="list-group-item-img" src="https://image.flaticon.com/icons/png/512/2271/2271403.png" alt="가구"/>
              <p class="list-group-item-desc">가구</p>
            </a>
            <a href="#" class="list-group-item">
              <img class="list-group-item-img" src="https://image.flaticon.com/icons/png/512/175/175613.png" alt="티켓"/>
              <p class="list-group-item-desc">티켓</p>
            </a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="/assets/img/electricgazeon.png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="/assets/img/sickpoom.png" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="/assets/img/ott.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div id="nowcon">
            <p id="nownoww">오늘의 상품 |</p> <p id="nownow">밥팡이 엄선한 오늘의 가장 HOT한 상품!</p>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="./detail.php"><img class="card-img-top" src="/assets/img/nengjango.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="goods-name">밥장고</a>
                  </h4>
                  <h5 class="goods-price">1,247,940원</h5>
                  <p class="card-text">그냥 냉장고가 아닙니다. 밥장고입니다.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="review-n">(203)</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/assets/img/ot2.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="goods-name">밥디건</a>
                  </h4>
                  <h5 class="goods-price">17,950원</h5>
                  <p class="card-text">이것은 그냥 가디건이 아니여 밥디건!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="review-n">(1,603)</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/assets/img/bed.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="goods-name">밥침대</a>
                  </h4>
                  <h5 class="goods-price">209,000원</h5>
                  <p class="card-text">이것은 그냥 침대가 아니여 밥침대!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="review-n">(92)</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/assets/img/sicktak.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="goods-name">밥탁</a>
                  </h4>
                  <h5 class="goods-price">99,000원</h5>
                  <p class="card-text">이것은 밥을 기분좋게 먹을 수 있는 밥탁</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="review-n">(351)</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/assets/img/smartphone.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="goods-name">밥럭시 10</a>
                  </h4>
                  <h5 class="goods-price">1,234,200원</h5>
                  <p class="card-text">스마트한 밥럭시 10</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="review-n">(412)</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/assets/img/speaker.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="goods-name">블루투스 밥피커</a>
                  </h4>
                  <h5 class="goods-price">34,900원</h5>
                  <p class="card-text">밥밀리급 블루투스 밥피커</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="review-n">(3,123)</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/assets/img/bag.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="goods-name">밥백</a>
                  </h4>
                  <h5 class="goods-price">17,800원</h5>
                  <p class="card-text">선물로 딱! 밥백</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="review-n">(222)</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/assets/img/mug.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="goods-name">밥그컵</a>
                  </h4>
                  <h5 class="goods-price">9,900원</h5>
                  <p class="card-text">귀염뽀짝 밥그컵!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="review-n">(5,111)</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/assets/img/notebook.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="goods-name">밥트북</a>
                  </h4>
                  <h5 class="goods-price">739,000원</h5>
                  <p class="card-text">가성비 좋은 게이밍 노트북, 밥트북!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="review-n">(71)</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/assets/img/typewriter.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="goods-name">밥보드</a>
                  </h4>
                  <h5 class="goods-price">28,770원</h5>
                  <p class="card-text">인테리어 소품으로 딱인 밥보드</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="review-n">(812)</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/assets/img/vr.png" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="goods-name">밥알</a>
                  </h4>
                  <h5 class="goods-price">34,960원</h5>
                  <p class="card-text">나는 3D로 게임한다!</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="review-n">(11)</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="/assets/img/shoes.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#" class="goods-name">밥슈즈</a>
                  </h4>
                  <h5 class="goods-price">56,200원</h5>
                  <p class="card-text">귀여운 아기용 신발, 밥슈즈</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                  <p class="review-n">(62)</p>
                </div>
              </div>
            </div>

          </div>
          <!-- /.row -->
          <div style="text-align: center; margin:10px 0 40px 0;">
            <button id="more">더 많은 상품 보기 V</button>
          </div>
          
        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->


    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark" id="ddd">
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
