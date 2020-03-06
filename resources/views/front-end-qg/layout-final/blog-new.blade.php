<!-- Blog & News -->
<section class="section-padding">
    <div class="container">
        <h2 class="page-title">Tin tức</h2>
        <!-- <p class="product-block-text">Cùng cập nhật xu thế thời trang túi xách, phụ kiện đồ da cùng Velisa</p> -->
    </div>
    <div class="container">
        <div id="blog-carousel" class="blog-carousel owl-carousel owl-theme nf-carousel-theme1">
            @foreach($blogs as $blog)
            <!-- item.1 -->
            <div class="product-item">
                <div class="blog-box">
                    <a href="/{{$blog->url}}" alt="{{$blog->title}}">
                        <div class="blog-img-wrap">
                            <img src="{{asset('uploads/images/blogs/'.$blog->image)}}" alt="{{$blog->title}}" />
                        </div>
                    </a>
                    <div class="blog-box-content">
                        <div class="blog-box-content-inner">
                            <h4 class="blog-title"><a href="/{{$blog->url}}">{!! \Illuminate\Support\Str::words($blog->title, 10,'...')  !!}</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
<!-- End Blog & News -->