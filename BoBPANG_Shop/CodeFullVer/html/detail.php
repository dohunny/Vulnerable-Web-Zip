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
    <link href="css/shop-homepage-detail.css" rel="stylesheet">

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
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
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
            <a href="./detail.html" class="list-group-item">
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

        <div class="goods-con">
          <div class="top-con">
            <img class="img-top" src="/assets/img/nengjango.png" alt="">
            <div class="desc-top">
              <p id="smallblue">비오비전자</p>
              <p id="goods-name">밥장고 | 그냥 냉장고가 아닙니다. 밥장고입니다.</p>
              
              <div style="display: flex;">
                <p id="stars">&#9733; &#9733; &#9733; &#9733; &#9734;</p>
                <p id="smallblue">203개 상품평</p>
              </div>
              <hr/>
              <p id="price">1,247,940원</p>
              <hr/>
              <p class="des">무료배송, 설치일 지정 가능</p>
              <hr/>
              <p class="des">택배사: 비오비전자 직배송</p>
              <hr/>
              <p class="des">모델 : BOB20204010204</p>
              <p class="dess">냉장고 품목: 양문형 냉장고</p>
              <p class="dess">도어 수: 2도어 이상</p>
              <p class="dess">용량: 515L</p>
              <p class="dess">에너지효율: 3등급</p>
              <p class="dess">사이즈: (79.5 x 74.5 x 192cm)</p>
              <p class="dess">밥팡상품번호: 1960296864 - 3331647010</p>
              <hr/>

              <buttonCon>
                <img src="/assets/img/s.PNG" alt="">
                <button id="gotoCart">장바구니 담기</button>
                <button id="buyNow">바로구매</button>
              </buttonCon>
              
              
            </div>
          </div>

          <div class="bottom-con">
            <p id="ggg">상품 상세</p>
            <img class="eee" src="/assets/img/detail.png" alt="">
            <button id="more">상품정보 더보기 V</button>
            <br />
            <br />

            <p id="ggg">BEST 상품평</p>

            <comment>
              <profile>
                <img id="profileImg" src="https://image.flaticon.com/icons/png/512/876/876781.png" alt="">
                <div class="hihis">
                  <p id="stars">작성자 : 밥팡파레</p>
                  <p id="stars">&#9733; &#9733; &#9733; &#9733; &#9734;  2021.07.05</p>
                </div>
                <div id="reviewLike">이 리뷰를 218명이 좋아해요!</div>
              </profile>
              <p id="content">
                20년 쓴 냉장고가 고장나서 좋은 냉장고가 없을까 고민하다가 구매하게 되었는데요. 처음에는 싼 가격에
                큰 기대하지 않고 구매했지만 올해 들어 가장 잘 한 일같네요. 가장 좋았던 것은 기사님이 너무도 친절했다는
                것이고, 냉장고도 매우 크고 성능이 좋아 마음에 듭니다. 그리고 예뻐서 어디에나 잘 어울려요. 다만 한가지 단점은
                에너지 효율이 좋지 않다는 것... 더보기
              </p>  
            </comment>
            <hr/>
            <comment>
              <profile>
                <img id="profileImg" src="https://image.flaticon.com/icons/png/512/1023/1023656.png" alt="">
                <div class="hihis">
                  <p id="stars">작성자 : 우우히</p>
                  <p id="stars">&#9733; &#9733; &#9733; &#9733; &#9733;  2021.06.17</p>
                </div>
                <div id="reviewLike">이 리뷰를 131명이 좋아해요!</div>
              </profile>
              <p id="content">
                먼저 요청 배송일 맞춰 설치해 주셔서 좋았고, 디자인이 너무 마음에 듭니다. 식구가 많지 않아 사이즈가
                보통인걸 찾고 있었는데 잘 없더라구요. 빌트인 형식으로 크기며 디자인이며 모두 마음에 듭니다.
                친구들 놀러와서 냉장고 이쁘다고 난리들입니다. 가격도 적당하고 강추합니다.
              </p>  
            </comment>
            <hr/>
            <comment>
              <profile>
                <img id="profileImg" src="https://image.flaticon.com/icons/png/512/569/569524.png" alt="">
                <div class="hihis">
                  <p id="stars">작성자 : 수박이좋아</p>
                  <p id="stars">&#9733; &#9733; &#9733; &#9733; &#9734;  2021.07.19</p>
                </div>
                <div id="reviewLike">이 리뷰를 91명이 좋아해요!</div>
              </profile>
              <p id="content">
                생각보다 공간이 좁고 문이 빡빡합니다. 수박이 많이 안들어가서 슬퍼요.
              </p>  
            </comment>
            <br/>
            <p id="moreReview">더 많은 리뷰 보기 ></p>
            <hr/>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
