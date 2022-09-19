<?php 
    include "./config.php";
    $db = dbconnect();
    if(!$db){
        echo "DB Connection Error";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About</title>
            <style>
                .inputC {
                    font-size: 15px;
                    display: block;
                    margin: 10px auto;
                    padding: 10px;
                    width: 500px;
                    position: relative;
                    border: 1px solid royalblue;
                }
                .container2 {
                    height: 100%;
                    display: flex;
                    flex-wrap: nowrap;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    padding: 15px;
                    background-repeat: no-repeat;
                    background-size: cover;
                    background-position: center;
                    
                    position: relative;
                    z-index: 1;
                }
                .CForm {
                    width: 600px;
                }
                .textBox {
                    height: 50px;
                }
                .textArea {
                    height: 200px;
                    font-family: Montserrat-Regular, sans-serif;
                }

                input:focus::-webkit-input-placeholder { color:transparent; }
                input:focus:-moz-placeholder { color:transparent; }
                input:focus::-moz-placeholder { color:transparent; }
                input:focus:-ms-input-placeholder { color:transparent; }

                textarea:focus::-webkit-input-placeholder { color:transparent; }
                textarea:focus:-moz-placeholder { color:transparent; }
                textarea:focus::-moz-placeholder { color:transparent; }
                textarea:focus:-ms-input-placeholder { color:transparent; }

                input::-webkit-input-placeholder { color: #999999; }
                input:-moz-placeholder { color: #999999; }
                input::-moz-placeholder { color: #999999; }
                input:-ms-input-placeholder { color: #999999; }

                textarea::-webkit-input-placeholder { color: #999999; }
                textarea:-moz-placeholder { color: #999999; }
                textarea::-moz-placeholder { color: #999999; }
                textarea:-ms-input-placeholder { color: #999999; }

                body {
                    width: 100%;
                height: 100vh;
                padding-top: 56px;
                font-family: 'Nanum Gothic', sans-serif;
                }

                #bodybody {
                font-family: 'Nanum Gothic', sans-serif;
                margin-top: 70px;
                }

                .dd{
                margin:0;
                color: rgba(255,255,255,0.8);
                font-size:13px;
                margin-left: auto;
                }

                #hihi{
                color: rgb(84 121 255);
                font-size: 40px;
                font-weight: bolder;
                }

                #hihih{
                color: rgba(255,255,255,0.8);
                font-size: 13px;
                margin-top: 20px;
                }

                #ww {
                opacity: 0.8;
                }

                .sori {
                    padding: 0;
                    margin: 0;
                    text-align: center;
                    font-weight: bolder;
                    font-size: 14px;
                    color: rgba(0,0,0,0.5);
                }

                .soriDesc {
                    padding: 0;
                    margin: 0 0 20px 0;
                    text-align: center;
                }
                
                #soris {
                    padding: 0;
                    margin: 0 auto;
                    font-size: 30px;
                    font-weight: bolder;
                    border-bottom: 10px solid rgb(84, 121, 255, 0.2);
                    width: 300px;
                }
                
                #bbb {
                    margin-top: 20px;
                    border: none;
                    font-size: 18px;
                    width: 150px;
                    background-color: rgb(84, 121, 255, 0.2);
                }

                #ddd {
                    margin-top: 0!important; 
                }

                #descc {
                    margin-top: 30px;
                    font-size: 15px !important;
                    opacity: 0.8!important;
                }

                #leadss {
                    font-size: 14px !important;
                    margin-top: 20px;
                }

                .dtitle {
                    margin-bottom: 20px;
                }

                #qlekfjg{
                    font-size: 15px;
                }

                #submitButton{
                    height: 50px;
                    margin-top: 7px;
                }
        </style>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
            <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/shop-homepage.css" rel="stylesheet">
    </head>
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
                    <a class="nav-link" href="/index.php">Home</a>
                    </li>
                    <li class="nav-item active">
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
        <!-- Masthead-->
        <header class="masthead">
            <div >
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white" id="ssss">
                            <!-- Page heading-->
                            <h1>밥팡은 세계 최고의 <br>
                                이커머스를 꿈 꿉니다.</h1>
                            <div id="descc">
                                밥팡은 좋은 이커머스 기업을 넘어, 세계 최고의 이커머스 기업이 되고자 노력합니다. <br>
                                저희는 드론배송, 새벽배송, 당일배송 등 고객을 위한 서비스를 도입하여 한국 이커머스 산업을 선도할 것입니다.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-window m-auto text-primary"></i></div>
                            <h3>신속·정확</h3>
                            <p class="lead mb-0" id="leadss">고객에게 신속하고 정확한 서비스를 제공함으로써 <br>업계 최고 기업이 되기 위해 노력하고 있습니다.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-layers m-auto text-primary"></i></div>
                            <h3>신뢰·보안</h3>
                            <p class="lead mb-0"  id="leadss">서비스를 제공함에 있어, 체계적인 <br>보안 프로세스를 통해 고객의 정보를 보호합니다.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                            <h3>환경·재활용</h3>
                            <p class="lead mb-0"  id="leadss">환경을 지켜 내고자 하는 노력을 통해 <br>생명존중정신과 배려의 기업문화 조성에 노력합니다.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-1.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2 class="dtitle">고객 경험 중심 사업</h2>
                        <p class="lead mb-0" id="qlekfjg">최고의 고객경험을 통한 국내 이커머스 1위 기업을 목표로 합니다.
                            밥팡만의 독자적인 물류센터를 설계, 구축하여 수백만 개의 제품을 보관할 수 있습니다.
                            이를 통해 국내 인구의 70% 이상이 배송 센터로부터 10Km 이내에 거주하는 것을 목표로 합니다.
                            현재 시스템보다 한 시간 늦게 주문해도, 다음 날 아침 7시 전에 배송을 완료할 수 있는 인프라를 갖추는 것을 목표로 합니다.
                        </p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-2.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2 class="dtitle">4차산업사업</h2>
                        <p class="lead mb-0" id="qlekfjg">새로운 기술을 통한 유통망의 혁신과 유통의 새로운 패러다임 창조를 꿈꾸는 미래 선도형 기업을 목표로 합니다.
                            유통망의 혁신을 불러온 드론 배송을 통해 배송시간 단축 및 서비스 품질 향상을 이루어 냅니다.
                            1:1 배송을 통한 고객 밀착형 네트워크를 구축하여, 고객의 시간, 장소, 실시간 배송 현황 등을 고객 맞춤형 서비스로 제공합니다.
                        </p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('assets/img/bg-showcase-3.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2 class="dtitle">친환경 사업</h2>
                        <p class="lead mb-0" id="qlekfjg">배송에 환경을 담다. 재사용 및 재활용 가능한 친환경적 유통 시스템 구축, 내일의 우리와 함께하는 기업을 목표로 합니다.
                            종이상자가 아닌 재사용 가방을 사용하여 필요한 상품을 박스 포장 없이도 받아볼 수 있으며 배송 이후 회수 및 재활용 과정을 거칩니다.
                            에코 밥 백을 통한 물류 배송관 재수거 및 활용 등 일련의 과정을 완료시 에코 마일리지 제도를 통한 포인트를 제공합니다.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Call to Action-->
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">밥팡과 함께 일할 인재를 모십니다.</h2>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN">
                            <!-- Email address input-->
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                                </div>
                                <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        
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
    </body>
</html>
