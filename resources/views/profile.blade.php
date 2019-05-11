@extends('layouts.user_dash')

@section('content')

    <!-- start with the real content -->
    <div id="real">
      <!-- start content here -->
      <div id="Profile">

        <div class="wrap card">
        	<section class="app-content">

        		<div class="row">
        			<div class="col-md-7">
        				<div class="col-md-11">
                            <div id="profile-tabs" class="nav-tabs-horizontal white m-b-lg">
                                <!-- tabs list -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">Edit Profile</li>
                                </ul><!-- .nav-tabs -->

                                <br>

                                <form action="" method="POST">

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" name="email" value="{{ $user->email }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="fullname">Full Name</label>
                                        <input type="text" class="form-control" name="fullname" value="{{ $user->name }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" class="form-control" name="location" value="{{ $user->location }}">
                                    </div>

                                    <br><hr><br>

                                    <div class="form-group">
                                            <label for="email">Billing Address</label>
                                            <input type="text" class="form-control" name="email" value="{{ $user->customer->address }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="fullname">Billing City</label>
                                            <input type="text" class="form-control" name="fullname" value="{{ $user->customer->city }}">
                                        </div>
                                    <br><hr><br>

                                    <div class="form-group">
                                        <label for="new_password">New Password</label>
                                        <input type="password" class="form-control" name="new_password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm_password">Confirm New Password</label>
                                        <input type="password" class="form-control" name="confirm_password">
                                    </div>

                                    <div class="form-group">
                                        <input type="submit" value="Save Update" name="save" class="btn btn-primary">
                                    </div>

                                </form>
                            </div><!-- #profile-components -->
                        </div>
        			</div><!-- END column -->

        			<div class="col-md-5">
        				<div class="row">
        					<div class="col-md-12 col-sm-6">
        						<div class="widget who-to-follow-widget">
        							<div class="widget-header p-h-lg p-v-md">
        								<h4 class="widget-title">Who To Follow</h4>
        							</div>
        							<hr class="widget-separator m-0">
        							<div class="media-group">
        								<div class="media-group-item b-0 p-h-sm">
        									<div class="media">
        										<div class="media-left">
        											<div class="avatar avatar-md avatar-circle">
        												<img src="img/221.jpg" alt="">
        												<i class="status status-online"></i>
        											</div>
        										</div>
        										<div class="media-body">
        											<h5 class="media-heading"><a href="javascript:void(0)">John Doe</a></h5>
        											<small class="media-meta">Software Engineer</small>
        										</div>
        									</div>
        								</div><!-- .media-group-item -->
        							</div>
        						</div><!-- .widget -->
        					</div><!-- END column -->

        				</div><!-- .row -->

        			</div><!-- END column -->
        		</div><!-- .row -->
        	</section><!-- #dash-content -->
        </div><!-- .row -->
      </div>
      <!-- end content -->
    </div>
    <!-- end the real content -->

@endsection
