@extends('front-end-qg.layout-final.default')
@section('meta')
	<title>{{$cate->title}}</title>
	<meta name="description" content="{{$cate->seo_description}}"/>
	<meta name="keywords" content="{{$cate->seo_keyword}}"/>
	<link rel="canonical" href="{{$cate->url}}" />
	<meta property="og:locale" content="vi_VN" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="{{$cate->title}}" />
	<meta property="og:description" content="{{$cate->seo_description}}" />
	<meta property="og:url" content="{{$cate->url}}" />
	<meta property="og:image" content="{{asset('uploads/images/categories/share_image/'.$cate->share_image)}}" />
	<!-- <meta property="og:site_name" content="{{$cate->name}}" /> -->
	<meta name="twitter:description" content="{{$cate->seo_description}}" />
	<meta name="twitter:title" content="{{$cate->title}}" />
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
	            <a href="" itemprop="item" title="Trang chủ">
	                Trang chủ
	                <meta itemprop="name" content="Trang chủ" />
	            </a>
	        </li>
	                            <li class="active">{{$cate->title}}</li>
	            </ul>
	        </div>
	    </div>
	</div>
	</section>
	<!-- Bread Crumb -->
	<!-- Page Content -->

<section class="content-page">
    <div class="container">
        <div class="row">
            <!-- Product Content -->
            <div class="col-12">
                <!-- Title -->
                <div class="list-page-title">
                    <h1 class="">{{$cate->title}}
                        <small> Hiển thị 12 trên {{count($products)}} sản phẩm</small>
                    </h1>
                    {!!$cate->mota!!}
                </div>
                <!-- End Title -->
                <!-- Product Filter -->
            <form role="form" id="product-filter-form" method="GET">
<!-- Product Filter -->
    <div class="product-filter-content">
        <div class="product-filter-content-inner">

            <div class="product-filter-dropdown-btn "><a href="javascript:void(0)" data-toggle-target="filter-slide-toggle" class="btn btn-sm btn-gray slide-toggle-btn"><i class="fa fa-bars left" aria-hidden="true"></i>Bộ lọc</a></div>

            <!--Product List/Grid Icon-->
            <div class="product-view-switcher">
                <div class="product-view-icon product-grid-switcher product-view-icon-active">
                    <a class="" href="#"><i class="fa fa-th" aria-hidden="true"></i></a>
                </div>
                <div class="product-view-icon product-list-switcher">
                    <a class="" href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                </div>
            </div>

        </div>
    </div>
    <!-- Product filters Toggle-->
    <div class="container product-filter-dropdown toggle-content" id="filter-slide-toggle">
        <div class="row col mlr-0">
            <!-- Shop Categories -->
            <div class="widget-sidebar col-sm-6 col-md-6 col-lg-3">
                <h6 class="widget-title">Hiển thị</h6>
                <!--Product Filter Button-->
                <select name="short-by" id="short-by" class="nice-select-box product-show-item">
                    <option  value="default_sorting" >Mặc định</option>
                    <option  selected="selected"  value="date_asc">Cũ trước</option>
                    <option  value="date_desc">Mới trước</option>
                    <option  value="price_asc">Giá: thấp đến cao</option>
                    <option  value="price_desc">Giá: cao đến thấp</option>
                    <option  value="name_asc">Tên: A-Z</option>
                    <option  value="name_desc">Tên: Z-A</option>

                </select>
                <!--Product Show-->
                <select name="num" id="product-show" class="nice-select-box product-show-item">
                    <option value="8"   >Hiển thị</option>
                    <option value="12"  >12</option>
                    <option value="18"  >18</option>
                    <option value="24"  >24</option>
                </select>

                
            </div>
            <!-- End Shop Categories -->

            <div class="widget-sidebar col-sm-6 col-md-6 col-lg-3">
                <h6 class="widget-title">Lọc theo giá</h6>
                <div class="price-range-slider"></div>
                <div class="price-range-amount">
                                        <input id="price_range_min" class="product-filter-item" name="min_price" value="0" data-min="0" placeholder="Nhỏ nhất" style="display: none;" type="text">
                    <input id="price_range_max" class="product-filter-item" name="max_price" value="2900000" data-max="2900000" placeholder="Lớn nhất" style="display: none;" type="text">
                    <div id="price-range-from-to">
                    </div>
                </div>
            </div>
            <div class="widget-sidebar col-sm-6 col-md-6 col-lg-3">
            
                <h6 class="widget-title">Thương hiệu</h6>
                <ul class="widget-content widget-product-categories jq-accordian">
                                                                <li>
                            <input class="product-filter-item custom-checkbox" id="checkbox-1" type="checkbox" name="brands[]" value="1" 
                                 >
                            <label for="checkbox-1">
                                Velisa
                            </label>
                        </li>
                                    </ul>
            </div>
            <!-- Filter Color -->
            
            <ul class="widget-content widget-sidebar widget-filter-color">
                    <li class="visual-swatches-wrapper" data-type="visual">
    <h6 class="widget-title">Màu sắc</h6>
    <div class="attribute-values">
        <ul class="visual-swatch">
                            <li data-slug="xanh-la"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Xanh lá">
                    <div class="custom-checkbox">
                        <label>
                            <input class="product-filter-item" type="checkbox" name="attributes[]" value="5" >
                            <span style="background-color: rgb(78, 149, 47);"></span>
                        </label>
                    </div>
                </li>
                            <li data-slug="do"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Đỏ">
                    <div class="custom-checkbox">
                        <label>
                            <input class="product-filter-item" type="checkbox" name="attributes[]" value="6" >
                            <span style="background-color: rgb(255, 0, 0);"></span>
                        </label>
                    </div>
                </li>
                            <li data-slug="vang"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Vàng">
                    <div class="custom-checkbox">
                        <label>
                            <input class="product-filter-item" type="checkbox" name="attributes[]" value="7" >
                            <span style="background-color: rgb(249, 203, 156);"></span>
                        </label>
                    </div>
                </li>
                            <li data-slug="tim"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Tím">
                    <div class="custom-checkbox">
                        <label>
                            <input class="product-filter-item" type="checkbox" name="attributes[]" value="8" >
                            <span style="background-color: rgb(103, 78, 167);"></span>
                        </label>
                    </div>
                </li>
                            <li data-slug="hong"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Hồng">
                    <div class="custom-checkbox">
                        <label>
                            <input class="product-filter-item" type="checkbox" name="attributes[]" value="9" >
                            <span style="background-color: rgb(255, 205, 205);"></span>
                        </label>
                    </div>
                </li>
                            <li data-slug="nau"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Nâu">
                    <div class="custom-checkbox">
                        <label>
                            <input class="product-filter-item" type="checkbox" name="attributes[]" value="10" >
                            <span style="background-color: rgb(180, 95, 6);"></span>
                        </label>
                    </div>
                </li>
                            <li data-slug="den"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Đen">
                    <div class="custom-checkbox">
                        <label>
                            <input class="product-filter-item" type="checkbox" name="attributes[]" value="11" >
                            <span style="background-color: rgb(27, 27, 27);"></span>
                        </label>
                    </div>
                </li>
                            <li data-slug="cam"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Cam">
                    <div class="custom-checkbox">
                        <label>
                            <input class="product-filter-item" type="checkbox" name="attributes[]" value="12" >
                            <span style="background-color: rgb(255, 153, 0);"></span>
                        </label>
                    </div>
                </li>
                            <li data-slug="trang"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Trắng">
                    <div class="custom-checkbox">
                        <label>
                            <input class="product-filter-item" type="checkbox" name="attributes[]" value="15" >
                            <span style="background-color: rgb(239, 239, 239);"></span>
                        </label>
                    </div>
                </li>
                            <li data-slug="xam"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Xám">
                    <div class="custom-checkbox">
                        <label>
                            <input class="product-filter-item" type="checkbox" name="attributes[]" value="16" >
                            <span style="background-color: rgb(183, 183, 183);"></span>
                        </label>
                    </div>
                </li>
                            <li data-slug="xanh-lam"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Xanh lam">
                    <div class="custom-checkbox">
                        <label>
                            <input class="product-filter-item" type="checkbox" name="attributes[]" value="17" >
                            <span style="background-color: rgb(92, 147, 196);"></span>
                        </label>
                    </div>
                </li>
                            <li data-slug="xanh-ngoc"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Xanh Ngọc">
                    <div class="custom-checkbox">
                        <label>
                            <input class="product-filter-item" type="checkbox" name="attributes[]" value="18" >
                            <span style="background-color: rgb(159, 197, 232);"></span>
                        </label>
                    </div>
                </li>
                            <li data-slug="mo"
                    data-toggle="tooltip"
                    data-placement="top"
                    title="Mơ">
                    <div class="custom-checkbox">
                        <label>
                            <input class="product-filter-item" type="checkbox" name="attributes[]" value="19" >
                            <span style="background-color: rgb(252, 229, 205);"></span>
                        </label>
                    </div>
                </li>
                    </ul>
    </div>
</li>
            </ul>

            
            <!-- End Filter Color -->
        </div>
    </div>
    <!-- End Product filters Toggle-->

    <input type="hidden" name="page" value="1">
    </form>
<!-- End Product Filter -->

            <!-- End Product filters Toggle-->

                <!-- Product Grid -->
                        <div class="row product-list-item">
                        @foreach($products as $product)
                            <!-- item.1 -->                        
                            <div class="product-item-element col-sm-6 col-md-4 col-lg-3 col-6">
                                @include('front-end-qg.layout-final.product-box')

                            <!-- End Product Item-->
                            </div>
                        @endforeach
                        </div>
                
            <!-- End Product Grid -->
                <div class="pagination-wraper">
                    <ul class="pagination" role="navigation">
        
                    <li class="page-item">
                <a class="page-link" href="https://www.velisa.vn/tui-da-that?short-by=date_asc&amp;num=8&amp;min_price=0&amp;max_price=2900000&amp;page=1" rel="prev" aria-label="&laquo; Previous">&lsaquo;</a>
            </li>
        
        
                    
            
            
                                                                        <li class="page-item"><a class="page-link" href="https://www.velisa.vn/tui-da-that?short-by=date_asc&amp;num=8&amp;min_price=0&amp;max_price=2900000&amp;page=1">1</a></li>
                                                                                <li class="page-item active" aria-current="page"><span class="page-link">2</span></li>
                                                                                <li class="page-item"><a class="page-link" href="https://www.velisa.vn/tui-da-that?short-by=date_asc&amp;num=8&amp;min_price=0&amp;max_price=2900000&amp;page=3">3</a></li>
                                                                                <li class="page-item"><a class="page-link" href="https://www.velisa.vn/tui-da-that?short-by=date_asc&amp;num=8&amp;min_price=0&amp;max_price=2900000&amp;page=4">4</a></li>
                                                                                <li class="page-item"><a class="page-link" href="https://www.velisa.vn/tui-da-that?short-by=date_asc&amp;num=8&amp;min_price=0&amp;max_price=2900000&amp;page=5">5</a></li>
                                                                                <li class="page-item"><a class="page-link" href="https://www.velisa.vn/tui-da-that?short-by=date_asc&amp;num=8&amp;min_price=0&amp;max_price=2900000&amp;page=6">6</a></li>
                                                                                <li class="page-item"><a class="page-link" href="https://www.velisa.vn/tui-da-that?short-by=date_asc&amp;num=8&amp;min_price=0&amp;max_price=2900000&amp;page=7">7</a></li>
                                                                                <li class="page-item"><a class="page-link" href="https://www.velisa.vn/tui-da-that?short-by=date_asc&amp;num=8&amp;min_price=0&amp;max_price=2900000&amp;page=8">8</a></li>
                                                                                <li class="page-item"><a class="page-link" href="https://www.velisa.vn/tui-da-that?short-by=date_asc&amp;num=8&amp;min_price=0&amp;max_price=2900000&amp;page=9">9</a></li>
                                                                                <li class="page-item"><a class="page-link" href="https://www.velisa.vn/tui-da-that?short-by=date_asc&amp;num=8&amp;min_price=0&amp;max_price=2900000&amp;page=10">10</a></li>
                                                        
        
                    <li class="page-item">
                <a class="page-link" href="https://www.velisa.vn/tui-da-that?short-by=date_asc&amp;num=8&amp;min_price=0&amp;max_price=2900000&amp;page=3" rel="next" aria-label="Next &raquo;">&rsaquo;</a>
            </li>
            </ul>

                </div>
            </div>
            <!-- End Product Content -->
        </div>
    </div>
</section>

<!-- End Page Content -->
@endsection