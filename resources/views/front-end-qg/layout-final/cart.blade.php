<section id="sidebar-right" class="sidebar-menu sidebar-right">
    <div class="cart-sidebar-wrap">
        <div class="cart-widget-heading">
            <h4>Giỏ hàng</h4>
            <a href="javascript:void(0)" id="sidebar_close_icon" class="close-icon-white"></a>
        </div>
        <div class="cart-widget-content">
            <div class="cart-widget-product">
                <div class="cart-empty">
                    <p>Không có sản phẩm trong giỏ hàng.</p>
                </div>
                @php
                  $totalQuantity = Cart::getTotalQuantity();
                  $content = Cart::getContent();
                @endphp
                <ul class="cart-product-item">
                        @foreach($content as $item)
                          @php
                            $products_properties = App\ProductsProperties::where('products_detail_id',$item->id)->get();
                            $properties_id = App\Http\Controllers\AuthClient\ClientController::arrayColumn($products_properties,$col='properties_id');
                            $properties = App\Properties::join('properties_type','properties.properties_type_id','=','properties_type.id')->whereIn('properties.id',$properties_id)->select('properties.*','properties_type.name')->get();
                            
                          @endphp                    
                        <li class="item-750632bb36f10046c2ea3285d1046a5f" data-id="{{$item->id}}">
                            <a href="{{$item->attributes->url}}" class="product-image">
                                <img src="{{asset('uploads/images/products/avatar/'.$item->attributes->img)}}" alt="{{$item->name}}"/></a>
                            <div class="product-content">
                                <!-- Item Linkcollateral -->
                                <a class="product-link" href="{{$item->attributes->url}}">{{$item->name}}</a>
                                <!-- <span style="display: block;font-style: italic;color:#555555; font-size: .9em;">(Màu sắc:Xanh lam )</span> -->
                                <!-- Item Cart Totle -->
                                <div class="cart-collateral">
                                    <span class="qty-cart" data-id="{{$item->id}}" value="{{$item->quantity}}">{{$item->quantity}}</span>&nbsp;<span>&#215;</span>&nbsp;<span
                                            class="product-price-amount">1,350,000</span>
                                </div>
                                <!-- Item Remove Icon -->
                                <a data-id="{{$item->id}}"
                                   price="{{$item->price*$item->quantity}}"
                                   class="product-remove remove-item-cart" href="javascript:void(0)">
                                            <i class="fa fa-times-circle" aria-hidden="true"></i></a>
                            </div>
                        </li>
                        @endforeach
                
                                    <!-- Item -->
                </ul>
                <!-- End Cart Products -->
            </div>
        </div>
        <!-- End Cart Product Content -->
        <!-- Cart Footer -->
        <div class="cart-widget-footer">
            <div class="cart-footer-inner">
                <!-- Cart Total -->
                <h4 class="cart-total-hedding normal"><span>Tổng :</span><span
                            class="cart-total-price price totalPrice" price="{{Cart::getTotal()}}">{!!number_format(Cart::getTotal())!!} đ</span>
                </h4>
                <!-- Cart Total -->
                <!-- Cart Buttons -->
                <div class="cart-action-buttons">
                    <a href="" class="view-cart btn btn-md btn-gray">Xem giỏ hàng</a>
                    <form role="form" action="" method="post">
                        <input type="hidden" name="_token" value="HQQMxD2FoPH15BwH4ZBJOMe17UaOAd2tpLpSN7iw">                        <button type="submit" name="checkout" id="checkout" class="btn btn-md btn-gray">
                            Thanh toán
                        </button>
                    </form>
                </div>
                <!-- End Cart Buttons -->
            </div>
        </div>
        <!-- Cart Footer -->
    </div>
</section>