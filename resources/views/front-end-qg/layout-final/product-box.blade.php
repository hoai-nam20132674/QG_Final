<div class="product-item">
    <div class="product-item-inner">
        <!-- <div class="sale-label">-36%</div> -->
        <div class="product-img-wrap">
            <a href="/{{$product->url}}" title="{{$product->name}}">
                <img src="{{asset('uploads/images/products/avatar/'.$product->avatar)}}" alt="{{$product->name}}">
            </a>
        </div>

        <div class="product-button">
            <a href="" class="js_tooltip" data-mode="top" data-tip="Xem chi tiết">
                <i class="fa fa-shopping-bag"></i>
            </a>
            <a href="javascript:void(0);"
                   data-user-logged=""
                   data-link-add-wishlish="https://www.velisa.vn/customer/wish-list/add/341"
                   data-link-login="https://www.velisa.vn/customer/login"
                   class="js_tooltip btn-add-wishlists" data-mode="top" data-tip="Yêu thích">

                <i class="fa fa-heart"></i>
            </a>
        </div>

    </div>
    <div class="product-detail">
        <p class="product-title"><a href="">{{$product->name}}</a></p>
        <h5 class="item-price">{!!number_format($product->sale)!!}</h5>
        <del>{!!number_format($product->price)!!}</del>
    </div>
    
</div>