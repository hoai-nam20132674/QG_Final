<!-- New Product -->
<section class="section-padding">
    <div class="container">
        <h2 class="page-title">Sản phẩm mới nhất</h2>
        <!-- <p class="product-block-text">Các mẫu túi xách da thật mới nhất được cập nhật thường xuyên, Velisa luôn đón đầu xu thế với những thiết kế đặc trưng đậm nét Italy</p> -->
    </div>
    <div class="container">
        <div class="row">
            @foreach($products_new as $product)        
            <!-- item.1 -->
                <div class="product-item-element col-6 col-md-4 col-lg-3">
                    <!--Product Item-->
                        @include('front-end-qg.layout-final.product-box')
                    <!-- End Product Item-->
                </div>
            @endforeach                                
                                                        
        </div>
    </div>
</section>
<!-- End New Product -->