@extends('layouts.app')
@section('content')
    <section class="flat-title-page parallax parallax11 style4">
        <div class="overlay style4"></div>
        <div class="container wrap-title-page bg-img ">
            <div class="title-page">
                <h2 class="title font-weight-700"><a href="#">Shopping Cart</a></h2>
                <p class="text">Here's a List of your orders</p>
            </div>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Shopping Cart</a></li>
                </ul>
            </div>
            <img src="png/bg-white.png" alt="bookflare" class="bg-breadcrumbs style2">
        </div>
    </section> <!-- /.flat-title-page -->

    <div class="content-wrap  courses-single-page">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="flat-tabs bg-fff border-ra4 border-f-e6f3ff">
                        <ul class="tab-title style1 clearfix border-bt-e6f3ff">
                            <li class="item-title  overview">
                                <span class="inner">Checkout</span>
                            </li>
                        </ul>
                        <div class="tab-content-wrap">
                            <div class="tab-content">
                                <div class="item-content">
                                    <div class="text-wrap">
                                        <table class="table table-borderless">
                                            <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">Product Image</th>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach($cart as $item)
                                                @php
                                                    $i++;
                                                @endphp
                                                <tr>
                                                    <th scope="row"><img src="{{$item->product->product_image}}"
                                                                         width="120"
                                                                         height="100"/>
                                                    </th>
                                                    <td>{{$item->product->product_name}}</td>
                                                    <td>&euro; <span
                                                                id="unit-amount-{{$i}}">{{$item->product->amount/100}}</span>
                                                    </td>
                                                    <td><input class="quantity" type="number" style="width: 30%;"
                                                               onchange="document.getElementById('total-amount-{{$i}}').innerHTML=document.getElementById('unit-amount-{{$i}}').innerHTML*this.value"
                                                               value="">
                                                    </td>
                                                    <td>&euro; <span class="total-amount"
                                                                     id="total-amount-{{$i}}">{{$item->product->amount/100}}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-wrap flat-text-right pr-3 pt-4">
                                        <h5>CART TOTAL</h5>
                                        <p>Total: &euro; <span id="grand-total"></span></p>
                                    </div>
                                    <div class="wrap-btn flat-text-right pt-3">
                                        <button
                                                class="flat-button btn-start v2 font-Poppins font-weight-600 border-ra4"
                                                onclick="DEXPayments()">PLACE
                                            ORDER
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.flat-tabs -->

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('.quantity').change(function () {
            let total = 0;
            $(".total-amount").each(function (index) {
                total += parseFloat($(this).text());
            });
            $('#grand-total').text(total);
        });

        function DEXPayment() {
            let amount = parseFloat($('#grand-total').text());
            let email = "{{Auth::user()->email}}";
        }
    </script>
@endsection