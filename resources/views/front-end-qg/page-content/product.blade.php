@extends('front-end-qg.layout-final.default')
@section('meta')
  <title>{{$products->title}}</title>
  <meta name="description" content="{{$products->seo_description}}"/>
  <meta name="keywords" content="{{$products->seo_keyword}}"/>
  <link rel="canonical" href="{{$products->url}}" />
  <meta property="og:locale" content="vi_VN" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="{{$products->title}}" />
  <meta property="og:description" content="{{$products->seo_description}}" />
  <meta property="og:url" content="{{$products->url}}" />
  <meta property="og:image" content="{{asset('uploads/images/products/share_image/'.$products->share_image)}}" />
  <!-- <meta property="og:site_name" content="{{$products->name}}" /> -->
  <meta name="twitter:description" content="{{$products->seo_description}}" />
  <meta name="twitter:title" content="{{$products->title}}" />
  <link rel="stylesheet" href="{{asset('noithatotoluxury/css/popup-video/modal-video.min.css')}}">
@endsection
@section('content')
  <!-- Bread Crumb -->
  <section class="breadcrumb">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
              <meta itemprop="position" content="1" />
              <a href="" itemprop="item" title="Home">
                  Trang chủ
                  <meta itemprop="name" content="Home" />
              </a>
          </li>
                              <li class="active">{{$products->name}}</li>
              </ul>
          </div>
      </div>
  </div>
  </section>
  <!-- Bread Crumb -->
  <!-- Page Content -->
    <section id="product-detail-page" class="content-page single-product-content">
        <!-- Product -->
        <div id="product-detail" class="container">
            <div class="row" id="sticky-content">

                <!-- detail for mobile -->
                <div class="d-block d-sm-none col-12" id="mobile-detail-sticky">
                    <h1 class="product-title">{{$products->name}}</h1>
                    <div class="product-sku">
                        Mã SP : <span class="sku" itemprop="sku">Vanguard Yachting</span>
                        <span class="is-out-of-stock">
                                                            <span class="stock-block in-stock-block">Còn hàng</span>
                                                    </span>
                    </div>
                    <div class="product-rating">
                        <div class="star-rating" itemprop="reviewRating" itemscope=""
                             itemtype="http://schema.org/Rating"
                             title="Rated  out of 5">
                            <span style="width: 0%"></span>
                        </div>
                        <div class="product-rating-count"><a href="#list-reviews">( <span
                                        class="count">0</span>
                                Đánh giá )</a>
                        </div>
                    </div>

                    <div class="product-price">
                                                    <del>{!!number_format($products->price)!!} đ</del>
                            <span>
                                        <span class="product-price-text">{!!number_format($products->sale)!!} đ</span>
                                    </span>
                                            </div>
                </div>

                <div id="sticky-static" class="col-md-7 col-sm-6 mb-30">
                    <!-- Product Image -->
                    <div class="product-page-image">
                        <div class="product-image-slider product-image-gallery" id="product-image-gallery"
                             data-pswp-uid="3">
                              <div class="item">
                                    <img src="{{asset('uploads/images/products/avatar/'.$products->avatar)}}"
                                         alt="{{$products->name}}"/>
                              </div>
                              @foreach($images as $image)
                                <div class="item">
                                    <img src="{{asset('uploads/images/products/detail/'.$image->url)}}"
                                         alt="{{$products->name}}"/>
                                </div>
                              @endforeach
                                                            
                                                            
                        </div>
                    </div>
                    <!-- Slick Thumb Slider -->
                    <div class="product-image-slider-thumbnails">
                              <div class="item">
                                    <img src="{{asset('uploads/images/products/avatar/'.$products->avatar)}}"
                                         alt="{{$products->name}}"/>
                              </div>
                              @foreach($images as $image)
                                <div class="item">
                                    <img src="{{asset('uploads/images/products/detail/'.$image->url)}}"
                                         alt="{{$products->name}}"/>
                                </div>
                              @endforeach
                    </div>

                    <!-- Product Content Tab  on desktop-->
                    <div class="hidden-xs-down product-tabs-wrapper container">
                        <ul class="product-content-tabs nav nav-tabs" role="tablist">

                            <li class="nav-item">
                                <a class="active" href="#tab_description" role="tab" data-toggle="tab">Chi tiết sản
                                    phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="" href="#tab_additional_information" role="tab"
                                   data-toggle="tab"></a>
                            </li>
                            <li class="nav-item">
                                <a class="" href="#tab_reviews" role="tab" data-toggle="tab">Đánh giá
                                    (<span> 0</span>)</a>
                            </li>
                        </ul>
                        <div class="product-content-Tabs_wraper tab-content container">
                            <div id="tab_description" role="tabpanel" class="tab-pane fade in active">
                                <!-- Accordian Title -->
                                <h6 class="product-collapse-title" data-toggle="collapse"
                                    data-target="#tab_description-coll">Mô tả</h6>
                                <!-- End Accordian Title -->
                                <!-- Accordian Content -->
                                <div id="tab_description-coll"
                                     class="shop_description product-collapse collapse container">
                                    <div class="row">
                                        <div class=" col-md-12">
                                            {!!$products->content!!}
                                        </div>
                                    </div>
                                </div>
                                <!-- End Accordian Content -->
                            </div>

                            <div id="tab_additional_information" role="tabpanel" class="tab-pane fade">
                                <!-- Accordian Title -->
                                <h6 class="product-collapse-title" data-toggle="collapse"
                                    data-target="#tab_additional_information-coll"></h6>
                                <!-- End Accordian Title -->
                                <!-- Accordian Content -->
                                <div id="tab_additional_information-coll" class="container product-collapse collapse">

                                    

                                </div>
                                <!-- End Accordian Content -->
                            </div>

                            <div id="tab_reviews" role="tabpanel" class="tab-pane fade">
                                <!-- Accordian Title -->
                                <h6 class="product-collapse-title" data-toggle="collapse"
                                    data-target="#tab_reviews-coll">Đánh giá (0)</h6>
                                <!-- End Accordian Title -->
                                <!-- Accordian Content -->
                                <div id="tab_reviews-coll" class=" product-collapse collapse container">
                                    <div class="row">
                                        <div class="review-form-wrapper col-md-12">
                                            <div class="row"> 
<div class="col-md-6 col-12">
    <h3>Add review</h3>
<form method="POST" action="https://www.velisa.vn/review/create" accept-charset="UTF-8"><input name="_token" type="hidden" value="67RJsSLYGFm0Pr9TNiWlfqfhItfh9pa7ESkkIqo3">

    <div class="form-group ">
        <p>Please select rating</p>

        <input type="hidden" name="star" id="rating"  disabled value="0" />
    </div>

                        <div class="alert alert-success">
                <span>Please <a class="text-left" href="https://www.velisa.vn/customer/login" title="login" >login</a> to write review!</span>
            </div>
            </form>
</div>
<div class="col-md-6 col-12">
    <h3>Customer reviews</h3>
    <div id="list-reviews">
        <ul>
                    </ul>
    </div>
</div>
</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Accordian Content -->
                            </div>

                        </div>
                    </div>

                </div>

                <!-- Product Content detail -->
                <div id="sticky-dynamic" class="col-md-5 col-sm-6 mb-30">
                    <div class="sidebar__inner">

                        <div class="product-page-content">
                            <!-- mobile only -->
                            <div class="hidden-xs-down">
                                <h1 class="product-title">{{$products->name}}</h1>
                                <div class="product-sku">
                                    Mã SP : <span class="sku" itemprop="sku">{{$products->code}}</span>
                                    <span class="is-out-of-stock">
                                                                                        <span class="stock-block in-stock-block">Còn hàng</span>
                                                                            </span>
                                </div>
                                <div class="product-rating">
                                    <div class="star-rating" itemprop="reviewRating" itemscope=""
                                         itemtype="http://schema.org/Rating"
                                         title="Rated  out of 5">
                                        <span style="width: 0%"></span>
                                    </div>
                                    <div class="product-rating-count"><a href="#list-reviews">( <span
                                                    class="count">0</span>
                                            Đánh giá )</a>
                                    </div>
                                </div>
                                <div class="product-price">
                                                                            <del>{!!number_format($products->sale)!!} đ</del>
                                        <span>
                                        <span class="product-price-text">{!!number_format($products->price)!!} đ</span>
                                    </span>
                                                                    </div>
                            </div>
                            <!-- //mobile -->

                            <div class="product-description" id="detail-description">
                                {!!$products->short_description!!}
                            </div>

                                                            
                            
                            <form class="single-variation-wrap" method="POST"
                                  action="https://www.velisa.vn/cart/add-to-cart">
                                <input type="hidden" name="_token" value="67RJsSLYGFm0Pr9TNiWlfqfhItfh9pa7ESkkIqo3">                                <input type="hidden" name="id" id="hidden-product-id"
                                       value="464"/>
                                <button id="btn-add-cart-detail" class="btn btn-lg btn-black btn-block"><i
                                            class="fa fa-shopping-bag" aria-hidden="true"></i>Mua ngay
                                    <span>Không đúng như hình đền 10 lần</span>
                                </button>
                                <span style="display: block; padding-top:10px;">Gọi đặt mua : <a
                                            style="font-weight: 600;color:#000"
                                            href="tel:0848384333"
                                            rel="nofollow">0848384333</a></span>
                            </form>
                            <div class="chinhsach">
                                <ul>
                                    <li><i class="fa fa-truck"
                                           aria-hidden="true"></i>Miễn phí giao hàng Toàn Quốc</li>
                                    <li><i class="fa fa-repeat"
                                           aria-hidden="true"></i>Đổi trả trong vòng 7 ngày</li>
                                    <li><i class="fa fa-headphones"
                                           aria-hidden="true"></i>Bảo hành sản phẩm 01 năm</li>
                                </ul>
                            </div>
                            <div class="product-meta box-gray">
                                                                    <span>Danh mục :
                                                                                    <!-- <a href="https://www.velisa.vn/tui-da-cong-so">
                                                    Túi da công sở
                                                 ,                                                 </a>
                                                                                    <a href="https://www.velisa.vn/tui-da-that">
                                                    Túi da thật
                                                 ,                                                 </a>
                                                                                    <a href="https://www.velisa.vn/tui-da-hang-hieu">
                                                    Túi da hàng hiệu
                                                 ,                                                 </a>
                                                                                    <a href="https://www.velisa.vn/tui-xach-da-nu">
                                                    Túi xách da nữ
                                                 ,                                                 </a>
                                                                                    <a href="https://www.velisa.vn/cap-da-cong-so">
                                                    Cặp da công sở
                                                                                                </a> -->
                                                                                </span>
                                                                                                    <span>Tag :
                                                                                    <!-- <a href="https://www.velisa.vn/sp/tui-da">
                                                    túi da
                                                 ,                                         </a>
                                                                                    <a href="https://www.velisa.vn/sp/tui-da-nu">
                                                    túi da nữ
                                                 ,                                         </a>
                                                                                    <a href="https://www.velisa.vn/sp/tui-xach-da">
                                                    túi xách da
                                                 ,                                         </a>
                                                                                    <a href="https://www.velisa.vn/sp/tui-da-cao-cap">
                                                    túi da cao cấp
                                                 ,                                         </a>
                                                                                    <a href="https://www.velisa.vn/sp/tui-xach">
                                                    túi xách
                                                                                        </a> -->
                                                                        </span>
                                                            </div>
                            <div class="product-share">
                                <span>Chia sẻ :</span>
                                <ul>
                                    <li><a href="" target="_blank"><i
                                                    class="fa fa-facebook"></i></a></li>
                                    <li><a href="" target="_blank"><i
                                                    class="fa fa-twitter"></i></a></li>
                                    <li><a href="" target="_blank"><i
                                                    class="fa fa-istagram"></i></a></li>
                                </ul>
                            </div>

                            <div class="product-content d-block d-sm-none col-12">
                                <h3>Thông tin sản phẩm</h3>
                                <h2>Túi xách nữ da thật cao cấp Velisa TD198</h2>
<p style="font-size: 14px; font-weight: 400;">Với vẻ kiêu hãnh vốn có của túi xách đã làm nên sự hấp dẫn cũng với nét quyễn rũ, sang trọng của nó. Bất cứ chị em nào cũng muốn được khoác lên mình những chiếc túi da thật để tôn lên vẻ đẹp và thể hiện sự đẳng cấp gu thẩm mỹ thời trang của mình. VELISA muốn trao cho bạn sự tự tin, kiêu hãnh bởi sản phẩm bạn tin dùng, bởi vẻ đẹp hảo cùng với chất lượng vượt trội siêu phẩm mới nhất của VELISA. Franck Muller Vanguard Yachting Full Diamond</p>
<p style="font-size: 14px; font-weight: 400;"><a href="https://www.velisa.vn/tui-da-that">Túi xách nữ da thật</a> cao cấp Velisa 198 với chất liệu da bò nhập khẩu, bề mặt da vân tự nhiên, màu sắc dịu dàng thanh lịch vừa phù hợp cho cả đi làm, đi chơi cho các chị em, thiết kế đơn giản nhưng không bao giờ lỗi mốt cùng giá cả vô cùng cạnh tranh chính là điểm mạnh của thương hiệu VELISA.</p>
<p style="font-size: 14px; font-weight: 400;"><img src="https://velisa.vn/uploads/1/slider/1tui-da19810.jpg" alt="1tui-da19810" /><img src="https://velisa.vn/uploads/1/slider/1tui-da1989.jpg" alt="1tui-da1989" /><img src="https://velisa.vn/uploads/1/slider/1tui-da1988.jpg" alt="1tui-da1988" /><img src="https://velisa.vn/uploads/1/slider/1tui-da1987.jpg" alt="1tui-da1987" /><img src="https://velisa.vn/uploads/1/slider/1tui-da1986.jpg" alt="1tui-da1986" /><img src="https://velisa.vn/uploads/1/slider/1tui-da1985.jpg" alt="1tui-da1985" /><img src="https://velisa.vn/uploads/1/slider/1tui-da1983.jpg" alt="1tui-da1983" /><img src="https://velisa.vn/uploads/1/slider/1tui-da1984.jpg" alt="1tui-da1984" /><img src="https://velisa.vn/uploads/1/slider/1tui-da1982.jpg" alt="1tui-da1982" /><img src="https://velisa.vn/uploads/1/slider/1tui-da1981.jpg" alt="1tui-da1981" /><img src="https://velisa.vn/uploads/1/slider/1tui-da198.jpg" alt="1tui-da198" /></p>
                            </div>

                        </div>
                    </div>

                </div>


            </div> <!-- /row -->
        </div> <!-- product-detail -->
        <!-- End Product -->
        <!-- product related -->
                            <section class="section-padding">
                <div class="container">
                    <h2 class="page-title">Sản phẩm tương tự</h2>
                </div>
                <div class="container">
                    <div class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                        <!-- item.1 -->
                        @foreach($products_same as $product) 
                          @include('front-end-qg.layout-final.product-box')
                      @endforeach
                         
                                                                        </div>
                </div>
            </section>
        <!-- //related -->
    </section>
@endsection