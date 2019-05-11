@extends('layouts.user_dash')

@section('content')

    <!-- start with the real content -->
    <div id="real">
      <!-- start content here -->
      <div id="Profile">

        <div class="wrap card">
        	<section class="app-content">

        		<div class="row">
        			<div class="col-md-4">
                        <img src="/images/D1.jpg" class="img-thumbnail" height="75px" width="auto" alt="">
                        <br><br>
                        <div><a href="#" class="btn btn-success">View Weekly Plans</a></div>
                    </div>
                    <div class="col-md-4">
                        <img src="/images/D2.jpg" class="img-thumbnail" height="75px" width="auto" alt="">
                        <br><br>
                        <div><a href="#" class="btn btn-success">View Bi-Weekly Plans</a></div>
                    </div>
                    <div class="col-md-4">
                        <img src="/images/D3.jpg" class="img-thumbnail" height="75px" width="auto" alt="">
                        <br><br>
                        <div><a href="#" class="btn btn-success">View Monthly Plans</a></div>
                    </div>
                </div>

            </section>
        </div>

      </div>
    </div>

@endsection

