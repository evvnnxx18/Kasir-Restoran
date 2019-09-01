<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <style>
    .card{
      margin-left: 2%;
      margin-right: 2%;
    }.bb{
      margin-left: 70%;
    }
  </style>

  <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
    <link href="{{ asset('assets/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/sb-admin-2.css') }}" rel="stylesheet">

    <style>
      .card{
        margin-top: 10%;
      }
      .search{
        margin-left:70%;
        width: 15%;
      }
      .table{
        margin-left: 10%;
        margin-right: 10%;
      }
      .tambah-btn{
        margin-bottom: 2%;
    }
    </style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div id="my-nav" class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('menu')}}">Menu</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('costumer')}}">Costumers</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('order')}}">Order</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('transaksi')}}">Transaksi<span class="sr-only">(current)</span></a>
          </li>
      </ul>
    </div>
  </nav>

    @yield('body')

    {{-- @include('template.sidetopbar')
    @include('template.scroll')
    @include('template.footer') --}}



 <!-- Bootstrap core JavaScript-->
 <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
 <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
 <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
 <script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>

<!-- Page level plugins -->
 <script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>

<!-- Page level custom scripts -->
 <script src="{{asset('assets/js/demo/chart-area-demo.js')}}"></script>
 <script src="{{asset('assets/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
