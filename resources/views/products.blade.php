@extends('layouts.app')

@section('content')

    <section class="flat-title-page parallax parallax8 style4">
        <div class="overlay style2"></div>
        <div class="container wrap-title-page bg-img ">
            <div class="title-page text-center">
                <h2 class="title font-weight-700"><a href="#">Our Products</a></h2>
            </div>
            <img src="/png/bg-white.png" alt="bookflare" class="bg-breadcrumbs">
        </div>
    </section> <!-- /.flat-title-page -->
    <products :colors="{{json_encode($colors)}}"></products>
@endsection