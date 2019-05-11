<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- start linking  -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('user_assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{asset('user_assets/css/app.css') }}">

  <!-- icon -->
  <link rel="icon" href="{{asset('user_assets/img/log.png') }}">

  <!-- end linking -->
  <title>Schoolpay - Dashboard</title>

</head>
<body>
<!-- start admin -->
<section id="admin">
  <!-- start sidebar -->
  <div class="sidebar">
    <!-- start with head -->
    <div class="head">
      <div class="logo">
        <img src="{{ asset('user_assets/img/logo-admin.png') }}" alt="Logo">
      </div>
      <br><br>
      <!-- <a href="#" class="btn btn-danger">Add New School</a> -->
    </div>
    <!-- end with head -->

    <!-- start the list -->
    <!-- navbar -->
    <!-- Navigation for the user admin -->
    <div id="list">
        <ul class="nav flex-column">
        <li class="nav-item"><a href="{{ route('user.dashboard') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}" ><i class="fa fa-adjust"></i>Dashboard</a></li>
        <li class="nav-item"><a href="{{ route('user.transaction') }}" class="nav-link {{ Request::is('home/transactions') ? 'active' : '' }}"><i class="fa fa-table"></i>Transactions</a></li>
        <li class="nav-item"><a href="{{ route('user.profile') }}" class="nav-link {{ Request::is('home/profile') ? 'active' : '' }}"><i class="fa fa-users"></i>profile</a></li>
        {{-- <li class="nav-item"><a href="{{ route('user.support') }}" class="nav-link {{ Request::is('home/support') ? 'active' : '' }}"><i class="fa fa-life-ring"></i>support</a></li> --}}
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fa fa-power-off"></i> {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        </ul>
    </div>
    <!-- end the list -->
  </div>
  <!-- end sidebar -->

  <!-- start content -->
  <div class="content">
    <!-- start content head -->
    <div class="head">
      <!-- head top -->
      <div class="top">
        <div class="left">
          <button id="on" class="btn btn-info"><i class="fa fa-bars"></i></button>
          <button id="off" class="btn btn-info hide"><i class="fa fa-align-left"></i></button>
          <button class="btn btn-info hidden-xs-down"><i class="fa fa-expand-arrows-alt"></i></button>
          <!-- <button class="btn btn-info hidden-xs-down"><i class="fa fa-home"></i>Back Home</button> -->
        </div>
        <div class="right">
          <!-- <button class="btn btn-info hidden-xs-down"><i class="fa fa-bell"></i></button> -->
          <!-- <button class="btn btn-info hidden-xs-down"><i class="fa fa-envelope"></i></button> -->
          <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} </button>
            <div class="dropdown-menu" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <!-- <a class="dropdown-item" href="#">sitting</a> -->
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>
           </div>
          </div>
        </div>
      </div>
      <!-- end head top -->
      <!-- start head bottom -->
      <div class="bottom">
        <div class="left">
          <h1>dashboard</h1>
        </div>
        <!-- <div class="right">
          <h1>dashboard /</h1>
          <a href="#">page name</a>
        </div> -->
      </div>
      <!-- end head bottom -->
    </div>
    <!-- end content head -->

    @yield('content')

  </div>
  <!-- end content -->
</section>
<!-- end admin -->

<!-- start screpting -->
<script src="{{asset('user_assets/js/jquery.min.js') }}"></script>
<script src="{{asset('user_assets/js/tether.min.js') }}"></script>
<script src="{{asset('user_assets/js/bootstrap.min.js') }}"></script>
<script src="{{asset('user_assets/js/highcharts.js') }}"></script>
<script src="{{asset('user_assets/js/chart.js') }}"></script>
<script src="{{asset('user_assets/js/app.js') }}"></script>
<!-- end screpting -->

</body>
</html>
