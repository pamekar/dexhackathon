@extends('layouts.user_dash')

@section('content')

    <!-- start with the real content -->
    <div id="real">
        <div class="row">
            <!-- start chatts -->
            <div class="col-lg-6">
                <div class="card">
                    <div id="IndexChartOne" style="height: 320px;"></div>
                </div>
            </div>
            <!-- end charts -->

            <!-- start chatts -->
            <div class="col-lg-6">
                <div class="card">
                    <div id="IndexChartTwo" style="height: 320px;"></div>
                </div>
            </div>
            <!-- end charts -->

        </div>
    </div>
    <!-- end the real content -->
@endsection
