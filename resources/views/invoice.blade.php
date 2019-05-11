@extends('layouts.user_dash')

@section('content')

    <!-- start with the real content -->
    <div id="real">
      <!-- start content here -->
      <div id="invoice" class="wrap card">
      	<section class="app-content">
      		<div class="container-fluid">
      			<div class="panel panel-default">
      				<div class="panel-heading bg-white">
      					<h4 class="panel-title">Invoice Info</h4>
      				</div>

      				<div class="panel-body">
      					<div class="row">
      						<div class="col-sm-8 col-xs-6">
      							<h4 class="fw-600">FarmFresh Inc,</h4>
      							{{-- <p><a href="#">www.google.com</a></p>
      							<p>1 Infinite Loop<br>95014 Cuperino, CA<br>United States</p> --}}
      							<p>Telephone: 800-692-7753<br>Fax: 800-692-7753</p>

      							<h4 class="m-t-lg fw-600">Invoice To:</h4>
      							<p>{{ Auth::user()->name }}</p>
      							<p>{{ Auth::user()->location }}</p>
      						</div>
      						<div class="col-sm-4 col-xs-6">
      							<h4 class="fw-600 text-right">ORDER REF # </h4>

      						</div>
      					</div>

      					<div class="table-responsive m-h-lg">
      						<table class="table">

                                <?php $sn = 0; ?>
                                <tr><th>#</th><th>Product</th><th>Quantity</th><th>Cost</th><th>Total</th></tr>
                                <?php
                                $subTotal = 0;
                                $grandTotal = 0;
                                ?>
                                @foreach ($products as $product)
                                    @php
                                        $subTotal += $product->amount;
                                        $grandTotal = $subTotal + 50;
                                        // $quantity = mt_rand(1, 5);
                                        // $total = $product->amount * $quantity;
                                    @endphp
                                    <tr><td>{{ ++$sn }}</td><td>{{ ucfirst(trans($product->product_name)) }}</td><td>{{ $product->quantity }}</td><td>{{ $product->unitcost }}</td><td>{{ $product->amount }}</td></tr>
                                @endforeach
      						</table>
      					</div>

      					<div class="row">
      						<div class="col-sm-4 col-sm-push-8">
      							<p>Sub-Total amount: &euro;{{ $subTotal }}</p>
      							<p>VAT: &euro;50</p>
      							<p>Grand Total: <span class="text-primary">&euro;{{ $grandTotal }}</span></p>
      							<div class="m-t-lg">
      								{{-- <button type="button" class="btn btn-md btn-primary m-r-lg">Send Invoice</button> --}}
      								<button type="button" class="btn btn-md btn-secondary">Print</button>
      							</div>
      						</div>
      					</div>
      				</div><!-- .panel-body -->
      			</div>
      		</div><!-- .container-fluid -->
      	</section><!-- #dash-content -->
      </div><!-- .wrap -->
      <!-- end content -->
    </div>
    <!-- end the real content -->

@endsection
