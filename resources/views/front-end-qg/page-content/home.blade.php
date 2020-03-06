@extends('front-end-qg.layout-final.default')
@section('meta')
	<title>{{$system->title}}</title>
	<meta name="description" content="{{$system->seo_description}}"/>
	<meta name="keywords" content="{{$system->seo_keyword}}"/>
	<link rel="canonical" href="{{$system->website}}" />
	<meta property="og:locale" content="vi_VN" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="{{$system->title}}" />
	<meta property="og:description" content="{{$system->seo_description}}" />
	<meta property="og:url" content="{{$system->website}}" />
	<meta property="og:image" content="{{asset('uploads/images/systems/share_image/'.$system->share_image)}}" />
	<meta property="og:site_name" content="{{$system->name}}" />
	<meta name="twitter:description" content="{{$system->seo_description}}" />
	<meta name="twitter:title" content="{{$system->title}}" />
@endsection
@section('content')
	@include('front-end-qg.layout-final.slide')
	@include('front-end-qg.layout-final.policy')
	@include('front-end-qg.layout-final.product-highlight')
	@include('front-end-qg.layout-final.product-new')
	@include('front-end-qg.layout-final.blog-new')
@endsection