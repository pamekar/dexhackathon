@php
    $faker = \Faker\Factory::create();
@endphp

@extends('layouts.app')
@section('content')
    <section class="flat-title-page parallax parallax11 style4">
        <div class="overlay style4"></div>
        <div class="container wrap-title-page bg-img ">
            <div class="title-page">
                <h2 class="title font-weight-700"><a href="#">{{$product->product_name}}</a></h2>
                <p class="text">{{$product->summary}}</p>
            </div>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">{{$product->product_name}}</a></li>
                </ul>
            </div>
            <img src="png/bg-white.png" alt="bookflare" class="bg-breadcrumbs style2">
        </div>
    </section> <!-- /.flat-title-page -->

    <div class="content-wrap  courses-single-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content-page-wrap">
                        <div class="course-single">
                            <div class="img-single">
                                <a href="#"><img src="/png/img-details.png" alt="bookflare"></a>
                            </div>
                            <div class="content">
                                <div class="heading">
                                    <h6 class="title"><a href="#">{{$product->product_name}}</a>
                                    </h6>
                                    <p class="description">{{$faker->text(50)}}</p>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="price-wrap">
                                            <span class="sale-price color-f3728b">&euro; {{$product->amount}}/kg</span>
                                            <span class="price"> &euro; {{$product->amount+200}} </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="wrap-cart flat-text-right">
                                            <a href="#" class="btn-cart">Add To Cart</a>
                                            <a href="#" class="flat-button btn-buy border-ra4 float-right">BUY NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="author border-t-e6f3ff">
                                    <div class="author-avata">
                                        <img src="/png/author-teacher.png" alt="bookflare">
                                    </div>
                                    <div class="author-info">
                                        <h6 class="name"><a href="#">{{$product->farmer}}</a></h6>
                                        <div class="wrap-list">
                                            <ul class="list meta-list">
                                                <li>
                                                    <span class="title">Categories:</span>
                                                    <a href="#"><span> {{$product->category->name}} </span></a>
                                                </li>
                                            </ul>
                                            <ul class="list meta-rate">
                                                <li>
                                                    <ul class="list star-list">
                                                        <li><i class="far fa-star"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                        <li><i class="far fa-star"></i></li>
                                                    </ul>
                                                    <span>{{mt_rand(420,499)/100}}  ({{mt_rand(200,1000)}})</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.course-single -->
                        <div class="flat-tabs bg-fff border-ra4 border-f-e6f3ff">
                            <ul class="tab-title style1 clearfix border-bt-e6f3ff">
                                <li class="item-title  overview">
                                    <span class="inner">OVERVIEW</span>
                                </li>
                                <li class="item-title requirements">
                                    <span class="inner">REVIEW</span>
                                </li>
                            </ul>
                            <div class="tab-content-wrap">
                                <div class="tab-content">
                                    <div class="item-content">
                                        <div class="text-wrap img-right clearfix">
                                            <div class="img-single-small flat-text-center">
                                                <img src="/png/img-small.png" alt="bookflare">
                                            </div>
                                            <h6 class="title"><a href="#">{{$product->product_name}}</a></h6>
                                            <p class="text">
                                                {{$product->description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="item-content">
                                        <div class="text-wrap">
                                            <div class="text-wrap img-left clearfix">
                                                <h6 class="title">Customer Reviews: </h6>
                                                <p class="text">These are what customers said about the product</p>
                                                <ul class="list-skill">
                                                    @foreach(range(1, mt_rand(4,8)) as $index)
                                                        <li> {{$faker->realText()}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.flat-tabs -->
                    </div> <!-- /.content-page-wrap -->
                </div>
            </div>
        </div>
    </div>
@endsection