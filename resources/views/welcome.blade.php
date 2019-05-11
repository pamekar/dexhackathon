@php
    $faker = \Faker\Factory::create();
@endphp
@extends('layouts.app')
@section('styles')
    <style>
        .section-images{
        text-align:center;
    }
    </style>
@endsection
@section('content')
    <section class="flat-title-page parallax parallax12 undescription">
        <div class="overlay"></div>
        <div class="container wrap-title-page bg-img ">
            <div class="title-page" style="text-align: center;">
                <h2 class="title font-weight-700"><a href="#" style="font-size: 35px; line-height: 0.5em;">We let you reach <span style="color: #b3e364">farmers</span> directly<br>and buy <span style="color: #b3e364">eco</span> products</a></h2>
            </div>
        </div>
    </section> <!-- /.flat-title-page -->

    <div class="content-wrap  courses-grid-v3-page">
        <section class="flat-popular-courses section-images">
            <img src="/Export/why-farmfresh.jpg" style="width:80%;">
        </section>

        <section class="flat-popular-courses">
            <div class="flat-tabs  style3 ">
                <div class="tab-content-wrap">
                    <div class="tab-content">
                        <div class="item-content">
                            <div class="flat-carousel" data-column="4" data-column2="2" data-loop="false"
                                 data-column3="1" data-gap="0" data-dots="false" data-nav="true">
                                <div class="flat-courses clearfix owl-carousel">
                                    @foreach($products as $product)
                                        <div class="course  text-2ebd59  Leadership">
                                            <div class="course-border border-f-e6f3ff border-ra4 transition-vline">
                                                <div class="course-img img-vline">
                                                    <a href="#"><img src="{{$product->product_image}}"
                                                                     alt="bookflare"></a>
                                                    <div class="overlay">
                                                        <span class="vline"></span>
                                                        <span class="vline vline-bottom"></span>
                                                    </div>
                                                </div>
                                                <div class="course-content">
                                                    <div class="text-wrap border-bt-e6f3ff">
                                                        <h6 class="title"><a
                                                                    href="{{url("products/$product->id")}}">{{$product->product_name}}</a>
                                                        </h6>
                                                        <p class="teacher"><a href="#">{{$product->farmer}}</a></p>
                                                        <p class="description">{{$faker->text(50)}}</p>
                                                    </div>
                                                    <div class="wrap-rating-price">
                                                        <div class="wrap-rating">
                                                            <ul class="list star-list">
                                                                <li><i class="far fa-star"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                                <li><i class="far fa-star"></i></li>
                                                            </ul>
                                                            <span>{{mt_rand(420,499)/100}}  ({{mt_rand(200,1000)}})</span>
                                                        </div>
                                                        <span class="price">&euro; {{$product->amount}}/kg</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- /.course -->
                                    @endforeach
                                </div> <!-- /.flat-courses -->
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.flat-tabs -->
            <div class="wrap-btn flat-text-center">
                <a href="/products" class="flat-button btn-all-sourses font-Poppins font-weight-700 border-ra4">BROWSE
                    ALL
                    FarmFresh</a>
            </div>
        </section> <!-- /.flat-popular-courses -->

        <section class=flat-popular-courses section-images>
            <img src="/Export/our-packages.jpg">
        </section>

        <section class=flat-popular-courses section-images>
            <img src="/Export/customers-review.jpg">
        </section>
    </div> <!-- /.content-wrap  -->
@endsection