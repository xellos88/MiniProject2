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
<!-- 네비게이션바 -->
<?php include_once( URL_NAV ) ?>
<!-- 슬라이드 -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
<!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000"> -->
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
    <h1>
        <img src="data:image/png;base64,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" alt="NEW">
    </h1>
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

<!-- 비디오 -->
<div class="video">
    <div class="video-wrapper video-playing mouse-show-pause">
        <video src="https://videos.puma.net/videos/fn/%7Eregional%7EKOR%7Eothers%7E2-JBMC%7E230401_Forever+Run%7EForeverRun+Nitro+TVC_E-com_0420_PUMA_30s_FIN_1440x500.mp4" data-fordevice="desktop" data-type="file" class="img-overscale kop-htmlvideo" preload="metadata" playsinline="" autoplay="" muted="" data-started="true" loop>
        </video>
    </div>
</div>


<!-- 카드(그리드) -->
<div class="container">
    <div class="row row-cols-xxl-4" style="padding: 10px;">
        <div class="col">
            <div class="card" style="width: 19rem; float: none; margin :0 auto;">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/23/01/01/1242680098/1242680098_magnify_083.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">PUMA SUEDE VTG HAIRY SUEDE</h5>
                <p class="card-text">
                New Navy-Frosted Ivory<br>
                    STYLE NO. 38569805_OFF<br>
                    PRICE. ￦97,300</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 19rem; float: none; margin :0 auto;">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/23/04/17/1242683925/1242683788_magnify_042.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">OFF-WHITE™ X NIKE AIR FORCE 1 MID SP LTHR QS</h5>
                <p class="card-text">
                PINE GREEN/WHITE-WHITE<br>
                    STYLE NO. DR0500-300_OFF<br>
                    PRICE. ￦229,000</p>
            </div>
            </div>
        </div>
        <div class="col">
        <div class="card" style="width: 19rem; float: none; margin :0 auto;">
            <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/23/02/08/1242681893/1242673925_magnify_052.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">HELLO KITTY® X NIKE AIR PRESTO QS</h5>
            <p class="card-text">
                BLACK-WHITE-LT CRMSN<br>
                STYLE NO. DV3770-400<br>
                PRICE. ￦84,500</p>
            </div>
            </div>
        </div>
    <div class="col">
    <div class="card" style="width: 19rem; float: none; margin :0 auto;">
        <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/14/06/09/1242641417/1242641417_magnify_084.png" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">BIRKENSTOCK NARROW SALINA BF DD</h5>
        <p class="card-text">
        LOVE MINNIE WHITE<br>
            STYLE NO. 355353<br>
            PRICE.  ￦32,700</p>
        </div>
        </div>
    </div>
    <div class="col">
            <div class="card" style="width: 19rem; float: none; margin :0 auto;">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/23/03/11/1242682367/1242682367_magnify_076.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">MIZUNO WAVE RIDER 10</h5>
                <p class="card-text">
                    White/insignia blue/high risk red<br>
                    STYLE NO. D1GA210400<br>
                    PRICE. ￦149,000</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 19rem; float: none; margin :0 auto;">
                <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/23/05/20/1242684419/1242684419_magnify_064.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">NIKE AIR FORCE 1 '07 FRESH</h5>
                <p class="card-text">
                    PHOTON DUST/PHOTON DUST<br>
                    STYLE NO. DM0211-002<br>
                    PRICE. ￦169,000</p>
            </div>
            </div>
        </div>
    <div class="col">
    <div class="card" style="width: 19rem; float: none; margin :0 auto;">
        <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/23/05/20/1242684302/1242684302_magnify_072.png" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">ADIDAS NMD S1 FS</h5>
        <p class="card-text">
        FTWWHT/FTWWHT/FTWWHT<br>
            STYLE NO. HP9778<br>
            PRICE. ￦329,000</p>
        </div>
        </div>
    </div>
    <div class="col">
    <div class="card" style="width: 19rem; float: none; margin :0 auto;">
        <img src="https://kasinatr8551.cdn-nhncommerce.com/data/goods/23/01/02/1242680201/1242677521_magnify_03.png" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">UGG CLASSIC MINI II</h5>
        <p class="card-text">
        GREY<br>
            STYLE NO. 1016222_off<br>
            PRICE.  ￦206,400</p>
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

<!-- 카드(그리드) -->
<div class="container">
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
<!-- 3*1배너 -->

<div class="banner2">
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
</div>
</div>
<!-- 상단이동 푸터 -->
<footer>
        <a href="#top">TOP</a>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>