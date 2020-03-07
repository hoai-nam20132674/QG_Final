<header class="header">
    <!--Topbar-->
    <div class="header-topbar hidden-sm-down">
        <div class="header-topbar-inner">
            <!--Topbar Left-->
            <div class="topbar-left">
                <div class="phone"><i class="fa fa-phone left" aria-hidden="true"></i>Hỗ trợ khách hàng : <b><a href="tel:{{$system->phone}}" rel="nofollow">{{$system->phone}}</a></b></div>
            </div>
            <!--End Topbar Left-->

            <!--Topbar Right-->
            <div class="topbar-right">
                <ul class="list-none">
                    <li class="dropdown-nav">
                    <a href="#"><i class="fa fa-user left" aria-hidden="true"></i>
                        <span class="hidden-sm-down">Tài khoản</span><i class="fa fa-angle-down right" aria-hidden="true"></i></a>
                    <div class="dropdown-menu">
                                            <ul>
                                <li><a href="https://www.velisa.vn/customer/login" rel="nofollow"><i class="fa fa-lock left" aria-hidden="true"></i>Đăng nhập</a></li>
                                <li><a href="" rel="nofollow"><i class="fa fa-user left" aria-hidden="true"></i>Tạo tài khoản mới</a></li>
                        </ul>
                                        </div>
                    </li>
                                        <li>
                        <a href="" rel="nofollow">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="" rel="nofollow">Đồng hồ Ký gửi</a>
                    </li>
                                    </ul>
            </div>
            <!-- End Topbar Right -->
        </div>
    </div>
    <!--End Topbart-->

    <!-- Header Container -->
    <div id="header-sticky" class="header-main">
        <div class="menu-brand">
            <a href=""><img class="img-logo" src="{{asset('uploads/images/systems/logo/'.$system->logo)}}" alt=""></a>
        </div>

        <!-- navigation -->
        <nav class="main-nav">
            <ul >
                @foreach($menus as $menu)
                    @if($menu->type ==0)
                        <li class=""><a href="{{$menu->url}}" target="_self">{{$menu->name}}</a></li>
                    @else
                        <li class=" sub-menu ">
                        @php
                            $c = App\Categories::where('id',$menu->categories_id)->get()->first();
                        @endphp
                        <a href="{{$c->url}}" target="_self">{{$menu->name}}</a><i class="fa fa-angle-down"></i>
                        @php
                            $cates = App\Categories::where('parent_id',$menu->categories_id)->where('display',1)->get();
                        @endphp
                        @if(count($cates) !=0)
                            <ul  class="children">
                                @foreach($cates as $cate)
                                    @if($cate->id != $menu->categories_id)
                                        <li class="  "><a href="{{$cate->url}}" target="_self">{{$cate->name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        @endif
                    @endif
                @endforeach
            </ul>
                    
        </nav> <!-- navigation end -->

        <ul class="menu-right pull-right">
            <li><a id="search-overlay-menu-btn" rel="nofollow"><i aria-hidden="true" class="fa fa-search"></i></a></li>
            @php
              $totalQuantity = Cart::getTotalQuantity();
              $content = Cart::getContent();
            @endphp
            <!-- Cart-->
            <li>
                <a id="sidebar_toggle_btn">
                    <div class="cart-icon">
                        <i aria-hidden="true" class="fa fa-shopping-bag"><span class="cart-count" cart-count="{{$totalQuantity}}">{{$totalQuantity}}</span></i>
                        
                    </div>
                </a>
            </li>
            <li id="menu-btn" class="hidden-lg-up"><i class="fa fa-bars"></i></li>
        </ul>
    </div>
    <!-- End Header Container -->
</header>