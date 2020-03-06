<!-- Product (Tab with Slider) -->
<section class="section-padding-b">
    <div class="container">
        <h2 class="page-title">Sản phẩm nổi bật</h2>
        <!-- <p class="product-block-text">Các mẫu túi da nổi bật tại Velisa với thiết kế thời thượng cùng chất liệu da nhập khẩu thượng hạng từ Italy sẽ giúp bạn trở nên hiện đại, thanh lịch và nổi bật</p> -->
    </div>
    <div class="container">
        <ul class="product-filter nav" role="tablist">
            
                                    <li class="nav-item">
                <a class="nav-link  active " href="#phu-kien-hot"  data-toggle="tab">
                    Đồng Hồ bán chạy
                </a>
            </li>
                        <li class="nav-item">
                <a class="nav-link " href="#hang-moi-ve"  data-toggle="tab">
                    Khuyến mãi lớn
                </a>
            </li>
                        
        </ul>

        <div class="tab-content">
            <!-- Tab1 - sale Product -->
            
            <div id="phu-kien-hot" role="tabpanel" class="tab-pane fade in  active ">
                <div class="row">
                    @foreach($products_highlight as $product)
                    <!-- item.1 -->
                    <div class="product-item-element col-6 col-md-4 col-lg-3">
                        <!--Product Item-->
                            @include('front-end-qg.layout-final.product-box')
                        <!-- End Product Item-->
                    </div>
                    @endforeach
                                                    
                                                                
                </div>
            </div>

            
            <div id="hang-moi-ve" role="tabpanel" class="tab-pane fade in ">
                <div class="row">
                    @foreach($products_sale as $product)
                    <!-- item.1 -->
                    <div class="product-item-element col-6 col-md-4 col-lg-3">
                        <!--Product Item-->
                            @include('front-end-qg.layout-final.product-box')    
                        <!-- End Product Item-->
                    </div>
                    @endforeach                             
                                                                
                </div>
            </div>

                        <!-- Tab3 - hot -->
        </div>
    </div>
</section>
<!-- End Product (Tab with Slider) -->