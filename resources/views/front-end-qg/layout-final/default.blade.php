
<!doctype html>
<!--[if IE 8]>
    <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
    <html lang="en" class="ie9 no-js"> <![endif]-->
    <!--[if !IE]><!-->
<html lang="vi">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="HQQMxD2FoPH15BwH4ZBJOMe17UaOAd2tpLpSN7iw">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="canonical" href="" />
        <meta property="og:locale" content="vi_VN" />
        <meta property="og:type" content="website" />
        
        <meta name="google-site-verification" content="" />
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="">
        <link rel="shortcut icon" href="" type="image/x-icon">
        <link rel="icon" href="" type="image/x-icon">
        <!-- Place favicon.ico in the root directory -->
        <title>Đồng hồ cao cấp 100% chính hãng</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link media="all" type="text/css" rel="stylesheet" href="{{asset('qg/css/bootstrap.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('qg/css/font-awesome.min.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('qg/css/brandontext-font.min.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('qg/css/animate.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('qg/css/jquery.fancybox.min.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('qg/css/responsive.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('qg/css/mypage.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('qg/css/settings.css')}}">
<link media="all" type="text/css" rel="stylesheet" href="{{asset('qg/css/style.integration.css')}}">

<script src="{{asset('qg/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('qg/js/jquery.js')}}"></script>
<script src="{{asset('qg/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('qg/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('qg/js/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('qg/js/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('qg/js/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('qg/js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('qg/js/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('qg/js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('qg/js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('qg/js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('qg/js/revolution.extension.video.min.js')}}"></script>


    </head>
    <body class="page_body">
    
    <!--
    <div class="se-pre-con"></div>
    -->
    
    @include('front-end-qg.layout-final.cart')
<!--Overlay-->
<div class="sidebar_overlay"></div>
    
        <section class="search-overlay-menu">
    <!-- Close Icon -->
    <a href="javascript:void(0)" class="search-overlay-close"></a>
    <!-- End Close Icon -->
    <div class="container">
        <!-- Search Form -->
        <form role="search" id="searchform" action="https://www.velisa.vn/search/product" method="GET">
            <div class="search-icon-lg">
                <img src="https://velisa.vn/themes/velisa/assets//img/search-icon-lg.png" alt="Tìm kiếm" />
            </div>
            <label class="h6 normal search-input-label" for="overlay-search">Từ khóa sản phẩm</label>
            <input id="overlay-search" value="" name="q" type="search" placeholder="Tìm kiếm..." />
            <button type="submit">
                <img src="https://velisa.vn/themes/velisa/assets/img/search-lg-go-icon.png" alt="Tìm kiếm" />
            </button>
        </form>
        <!-- End Search Form -->
    
    </div>
</section>

        <div class="wrapper">
            @include('front-end-qg.layout-final.header')
            <div class="page-content-wraper">
                @yield('content')
            </div>
            @include('front-end-qg.layout-final.footer')
        </div>
        
<script src="{{asset('qg/js/jquery-ui.js')}}"></script>
<script src="{{asset('qg/js/tether.min.js')}}"></script>
<script src="{{asset('qg/js/bootstrap.min.js')}}"></script>
<script src="{{asset('qg/js/owl.carousel.js')}}"></script>
<script src="{{asset('qg/js/slick.js')}}"></script>
<script src="{{asset('qg/js/plugins-all.js')}}"></script>
<script src="{{asset('qg/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('qg/js/sweetalert2.js')}}"></script>
<script src="{{asset('qg/js/sticky-sidebar.min.js')}}"></script>
<script src="{{asset('qg/js/resize-sensor.js')}}"></script>
<script src="{{asset('qg/js/plugins.js')}}"></script>
<script src="{{asset('qg/js/mypage.js')}}"></script>





        <script type="text/javascript">
            $(function () {
                var min_price = $('#price_range_min').attr('data-min'),
                    max_price = $('#price_range_max').attr('data-max');

                if ($(".price-range-slider").length) {
                    $(".price-range-slider").slider({
                        range: true,
                        min: 0,
                        max: 2900000,
                        values: [min_price, max_price],
                        step: 10000,
                        slide: function (event, ui) {
                            $("#price-range-from-to").html("Giá : <span class='from'>" + ui.values[0].toLocaleString() + "đ </span> &mdash;  " + "<span class='to'>"+ ui.values[1].toLocaleString() + "đ </span>" );
                            $("#price_range_min").val(ui.values[0]);
                            $("#price_range_max").val(ui.values[1]);

                        },
                        change: function (event, ui) {
                            $("#product-filter-form").submit();
                        }
                    });

                    $("#price-range-from-to").html("Giá : <span class='from'>" + $(".price-range-slider").slider("values", 0).toLocaleString() + "đ</span> &mdash; <span class='to'>" + $(".price-range-slider").slider("values", 1).toLocaleString() + " đ</span>");
                    $("#price_range_min").val($(".price-range-slider").slider("values", 0));
                    $("#price_range_max").val($(".price-range-slider").slider("values", 1));
                }
            });
        </script>

    
    </body>
</html>