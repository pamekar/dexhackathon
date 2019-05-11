@extends('layouts.user_dash')

@section('content')

	<!-- start with the real content -->
	<div id="real">
		<!-- start content here -->
		<div class="wrap">
			<section class="app-content">
				<div class="row">
					<div class="col-md-12">
						<h4 class="m-b-lg">Transaction History</h4>
					</div><!-- END column -->

					<div class="col-md-12">
						<div class="widget p-lg">
							<div class="table-responsive">
								<table class="table table-hover">
									<tr>
										<th>#</th>
										<th>Order Reference</th>
										{{-- <th>Amount</th> --}}
										<th>Action</th>
                                    </tr>
                                    <?php $sn = 0; ?>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <td>{{ ++$sn }}</td>
                                            <td>{{ $order->ref }}</td>
                                            {{-- <td>{{ $order->amount }}</td> --}}
                                            <td><a href="{{ route('user.invoice', ['orderref' => $order->ref]) }}" class="btn btn-success btn-sm">Get Invoice</a></td>
                                        </tr>
                                    @endforeach

								</table>
							</div>
						</div><!-- .widget -->
					</div><!-- END column -->
				</div><!-- .row -->
			</section><!-- #dash-content -->
		</div><!-- .wrap -->
		<!-- end content -->
	</div>
	<!-- end the real content -->

@endsection
