<!doctype html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PrOjEcT Main</title>
        <link rel="stylesheet" type="text/css" href="/application/view/css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <!-- 네이게이션바 -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" onClick="window.location.reload()">PrOjEcT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">NEW</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SALE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BRAND</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            FOOTWEARS 
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                            <li><a class="dropdown-item" href="#">Category</a>
                                <ul>
                                    <li><a class="dropdown-item" href="#">ALL</a></li>
                                    <li><a class="dropdown-item" href="#">SNEAKERS</a></li>
                                    <li><a class="dropdown-item" href="#">BOOTS</a></li>
                                    <li><a class="dropdown-item" href="#">SANDAL & SLIDE</a></li>
                                </ul>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">BRAND</a></li>
                            <ul>
                                <li><a class="dropdown-item" href="#">NIKE</a></li>
                                <li><a class="dropdown-item" href="#">VANS</a></li>
                                <li><a class="dropdown-item" href="#">ADIDAS</a></li>
                                <li><a class="dropdown-item" href="#">CONVERSE</a></li>
                                <li><a class="dropdown-item" href="#">JORDAN</a></li>
                            </ul>
                        </ul>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                CLOTHING 
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                                <li><a class="dropdown-item" href="#">Category</a>
                                    <ul>
                                        <li><a class="dropdown-item" href="#">OUTER</a></li>
                                        <li><a class="dropdown-item" href="#">TOP</a></li>
                                        <li><a class="dropdown-item" href="#">BOTTOM</a></li>
                                    </ul>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">BRAND</a></li>
                                <ul>
                                    <li><a class="dropdown-item" href="#">NIKE</a></li>
                                    <li><a class="dropdown-item" href="#">ADIDAS</a></li>
                                    <li><a class="dropdown-item" href="#">CONVERSE</a></li>
                                    <li><a class="dropdown-item" href="#">JORDAN</a></li>
                                </ul>
                            </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ACCESSORIES 
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-start">
                            <li><a class="dropdown-item" href="#">Category</a>
                                <ul>
                                    <li><a class="dropdown-item" href="#">CAP</a></li>
                                    <li><a class="dropdown-item" href="#">BAGS</a></li>
                                    <li><a class="dropdown-item" href="#">SOCKS</a></li>
                                    <li><a class="dropdown-item" href="#">ETC</a></li>
                                </ul>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">BRAND</a></li>
                            <ul>
                                <li><a class="dropdown-item" href="#">NIKE</a></li>
                                <li><a class="dropdown-item" href="#">ADIDAS</a></li>
                                <li><a class="dropdown-item" href="#">CONVERSE</a></li>
                                <li><a class="dropdown-item" href="#">JORDAN</a></li>
                            </ul>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/login">LOGIN</a>
                    </li>
                    <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CART</a>
                        </li>
                    </ul> -->
                    </ul>
                    <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light " type="submit">SEARCH</button>
                    </form>
                </div>
                </div>
            </nav>
<!-- 슬라이드 -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="https://kasinatr8551.cdn-nhncommerce.com/data/skin/front/2022_kasina_by_MG/img/banner/1a63f4020e1f10dabb4259ded9bfec96_40262.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://kasinatr8551.cdn-nhncommerce.com/data/skin/front/2022_kasina_by_MG/img/banner/fbec8585600181556881ad60a27c1868_55606.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="https://kasinatr8551.cdn-nhncommerce.com/data/skin/front/2022_kasina_by_MG/img/banner/12505b1f46d0e481a8b4a421cccffa77_30120.webp" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
<!-- 카드(그리드) -->
<div class="container">
    <h1>NEW</h1>
    <div class="row row-cols-xxl-4" style="padding: 10px;">
        <div class="col">
            <div class="card" style="width: 19rem; float: none; margin :0 auto;">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/23/04/17/1242683930/1242680177_magnify_025.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">ADIDAS SUPERSTAR 82</h5>
                <p class="card-text">
                    CLOWHI/DKBLUE/OWHITE<br>
                    STYLE NO. GZ1537<br>
                    PRICE. ￦139,000</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 19rem; float: none; margin :0 auto;">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/22/08/32/1242676149/1242676149_magnify_017.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">ADIDAS STAN SMITH</h5>
                <p class="card-text">
                    FTWWHT/GREEN/OWHITE<br>
                    STYLE NO. GW1390_OFF<br>
                    PRICE. ￦77,400</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 19rem; float: none; margin :0 auto;">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/23/05/18/1242684084/1242681656_magnify_015.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">JORDAN AIR 1 MID</h5>
                <p class="card-text">
                    BLACK/FIRE RED-WHITE<br>
                    STYLE NO. DQ8426-060<br>
                    PRICE. ￦159,000</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 19rem; float: none; margin :0 auto;">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/23/01/02/1242680205/1242677527_magnify_055.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">UGG COQUETTE</h5>
                <p class="card-text">
                    CHESTNUT<br>
                    STYLE NO. 5125<br>
                    PRICE. ￦142,400</p>
            </div>
            </div>
        </div>
        <div class="col">
        <div class="card" style="width: 19rem; float: none; margin :0 auto;">
            <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/23/05/19/1242684192/1242683753_main_015.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">NIKE W CORTEZ</h5>
            <p class="card-text">
                GORGE GREEN-MALACHITE<br>
                STYLE NO. DN1791-101_OFF<br>
                PRICE. ￦119,000</p>
            </div>
            </div>
        </div>
    <div class="col">
    <div class="card" style="width: 19rem; float: none; margin :0 auto;">
        <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/23/05/18/1242684003/1242683791_main_043.png" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">NIKE W DUNK LOW LX</h5>
        <p class="card-text">
            CELESTIAL GOLD/GOLD SUEDE<br>
            STYLE NO. DV7411-200<br>
            PRICE. ￦149,000</p>
        </div>
        </div>
    </div>
    <div class="col">
    <div class="card" style="width: 19rem; float: none; margin :0 auto;">
        <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/23/04/14/1242683204/1242671144_main_071.png" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">VANS OG AUTHENTIC LX</h5>
        <p class="card-text">
            Canvas black/true white<br>
            STYLE NO. VN0A4BV91WX1<br>
            PRICE. ￦99,000</p>
        </div>
        </div>
    </div>
    <div class="col">
    <div class="card" style="width: 19rem; float: none; margin :0 auto;">
        <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/22/10/41/1242677866/1242677866_main_088.png" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">CONVERSE RUN STAR HIKE</h5>
        <p class="card-text">
            BLACK/WHITE/GUM<br>
            STYLE NO. A04292C<br>
            PRICE. ￦125,000</p>
        </div>
        </div> 
    </div>
</div>

<!-- 2*2 배너 -->
<div id="banner" class="banner">
    <div class="grid-container">
        <a href="/goods/event_sale.php?sno=187" target="">
            <div class="bannerContainer">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/skin/front/2022_kasina_by_MG/img/banner/315c06060647f973424f918c63443e50_13260.webp" alt="CONVERSE Vintage Pack">
                <div class="bannerText">
                    <p>NEW IN</p>
                    <b>NIKE CORTEZ</b>
                </div>
            </div>
        </a>
        <a href="/goods/goods_list.php?brandCd=154" target="">
            <div class="bannerContainer">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/skin/front/2022_kasina_by_MG/img/banner/5192e0f58ab0313934f274238b07c75d_65943.webp" alt="ON SALE PERKS AND MINI">
                <div class="bannerText">
                    <p>ON SALE</p>
                    <b>PERKS AND MINI</b>
                </div>
            </div>
        </a>
        <a href="/goods/goods_view.php?goodsNo=1242684073" target="">
            <div class="bannerContainer">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/skin/front/2022_kasina_by_MG/img/banner/d40e3be64c31bb1c08d0ca27af2c0a93_64902.webp" alt="NIKE AF1 'Color Of The Month'">
                <div class="bannerText">
                    <p>AJKO 1</p>
                    <b>"Dark Royal Blue"</b>
                </div>
            </div>
        </a>
        <a href="/goods/goods_list.php?brandCd=089" target="">
            <div class="bannerContainer">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/skin/front/2022_kasina_by_MG/img/banner/f66601b771afe8d9965e58ebdeccffc5_57712.webp" alt="NEW ARRIVAL DIME 23 SPRING">
                <div class="bannerText">
                    <p>NEW ARRIVAL</p>
                    <b>DIME 23SPRING</b>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- 3*1배너 -->

<!-- <div class="banner2">
    <div class="grid-container2">
        <a href="/goods/event_sale.php?sno=187" target="">
            <div class="bannerContainer2">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/skin/front/2022_kasina_by_MG/img/banner/0284b55bda1a100253305872e974a4af_98073.webp" alt="<p>CONVERSE</p><b>Vintage Pack</b>">
                <div class="bannerTxt2">
                    <p>CONVERSE</p>
                    <b>Vintage Pack</b>
                </div>
            </div>
        </a>
        <a href="/goods/event_sale.php?sno=155" target="">
            <div class="bannerContainer2">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/skin/front/2022_kasina_by_MG/img/banner/79149774f74a30bc94d090dcbd1f6206_65340.webp" alt="<p>JORDAN</p><b>AIR SHIP</b>">
                <div class="bannerTxt2">
                    <p>JORDAN</p>
                    <b>AIR SHIP</b>
                </div>
            </div>
        </a>
        <a href="/goods/goods_list.php?brandCd=124" target="">
            <div class="bannerContainer2">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/skin/front/2022_kasina_by_MG/img/banner/1b863fa2ed90892caa425c2e0c0e9eb8_13107.webp" alt="<p>코스트 퍼 킬로</p><b>COST PER KILO</b>">
                <div class="bannerTxt2">
                    <p>코스트 퍼 킬로</p>
                    <b>COST PER KILO</b>
                </div>
            </div>
        </a>
    </div>
</div> -->
</div>
<!-- 상단이동 푸터 -->
<footer>
    <a href="#top">상단으로 이동</a>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>