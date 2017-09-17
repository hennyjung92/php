<!DOCTYPE html>
<html>
<title>ABOUT</title>
<? include("head.php"); ?>
<style>
    p{
        font-family: 'Noto Sans KR', sans-serif;
    }
    .p-5 p, .py-5{
        line-height:1.8em;
        margin-top:10px;
    }
    h1{
        font-family:'Kanit', sans-serif;
        font-weight:500;
        letter-spacing:-1px;
        font-size:45px;
    }

</style>
<body>
<? include("header.php"); ?>
<section class="py-5 bg-image-full" style="background-image: url('img/boyanddog2.jpg'); opacity:0.8 !important;">
    <div style="height: 250px;"></div>
</section>
<section class="py-5">
    <div class="container">
        <h1 class="text-center">Why Choose Us</h1>

        <p class="text-center" style="font-weight: 500;">"기존 반려동물 위치추적기와 WHOPET의 차이점"</p>
    </div>
</section>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2">
                <div class="p-5">
                    <img class="img-fluid rounded-circle" style="width:400px;" src="img/underground.png" alt="">
                </div>
            </div>
            <div class="col-md-6 order-1">
                <div class="p-5">
                    <h2 class="display-4">Building</h2>
                    <p style="font-weight: 700;">지하/건물 내부에서 추적 가능</p>
                    <p>기존에는 지하나 건물 내부에서 위치 추적이 불가능했지만<br>WHOPET은 지하나 건물 내부에서도<br>반려동물의 정확한 위치 추적이 가능합나다.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="p-5">
                    <img class="img-fluid" src="img/tracking.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5">
                    <h2 class="display-4">Map</h2>
                    <p style="font-weight: 700;">연결과 동시에 지도로 추적</p>
                    <p>일정거리 이상 벗어날 경우, 단순 분실 알림이 아니라<br>map 상에서 알림과 동시에 추적 기능을 제공합니다.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2">
                <div class="p-5">
                    <img class="img-fluid" src="img/usingpc.png" alt="">
                </div>
            </div>
            <div class="col-md-6 order-1">
                <div class="p-5">
                    <h2 class="display-4">PC Available</h2>
                    <p style="font-weight: 700;">스마트폰 없어도 PC로 추적 가능</p>
                    <p>기존에는 스마트폰이 없으면 위치 추적 서비스가 불가했지만<br>WHOPET은 스마트폰이 없이도 PC에서 위치 추적이 가능합니다.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="p-5">
                    <img class="img-fluid" src="img/service.png" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-5">
                    <h2 class="display-4">Unlimited Service</h2>
                    <p style="font-weight: 700;">디바이스 구매시 무한 서비스 제공</p>
                    <p>통신 서비스 가입 후 매달 사용료를 지불하는 방식이 아닌!<br>디바이스 구매 시 무한 서비스를 제공합니다.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>
<? include("footer.php"); ?>
</body>
</html>