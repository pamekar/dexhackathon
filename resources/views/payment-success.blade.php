@extends('layouts.app')
@section('content')
    <section class="flat-title-page parallax parallax11 style4">
        <div class="overlay style4"></div>
        <div class="container wrap-title-page bg-img ">
            <div class="title-page">
                <h2 class="title font-weight-700"><a href="#">Payment Status</a></h2>
                {{-- <p class="text">Here's a List of your orders</p> --}}
            </div>
            {{-- <img src="png/bg-white.png" alt="bookflare" class="bg-breadcrumbs style2"> --}}
        </div>
    </section> <!-- /.flat-title-page -->

    <div class="content-wrap  courses-single-page">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-center">

                    <h5>Payment was Successful!!!</h5>
                    <br><br><br>
                    <p>Thanks for ordering!!<br>

                        We've received your payment, and your order has been scheduled for delivery on Friday 18,
                        2019.</p>
                    {{-- </div> <!-- /.flat-tabs --> --}}

                </div>
            </div>
        </div>
    </div>
@endsection
