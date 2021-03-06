<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Happiness</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('sb/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('sb/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sb/css/sb-admin.css') }}" rel="stylesheet">


<!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
<!--===============================================================================================-->
    <!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="form/css/util.css">
    <link rel="stylesheet" type="text/css" href="form/css/main.css">
<!--===============================================================================================-->



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js')}}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <style>
        .bg-image{
            background-image: url("{{ asset('images/background.jpg') }}");
            height: 100%;
            background-position: center;
            background-repeat: repeat;
            background-size: cover;
        }
        #loader{
           visibility:hidden;
        }
           .loader {
                        border: 16px solid #f3f3f3;
                        border-radius: 50%;
                        position: fixed;
                        z-index: 999;
                        margin-left:45%;
                        overflow: visible;
                        border-top: 16px solid green;
                        border-bottom: 16px solid green;
                        width: 120px;
                        height: 120px;
                        -webkit-animation: spin 2s linear infinite;
                        animation: cssAnimation spin 2s linear infinite;
                    }

            @-webkit-keyframes spin {
                0% { -webkit-transform: rotate(0deg); }
                100% { -webkit-transform: rotate(360deg); }
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
    </style>

  </head>
<!-- <i class="fas fa-spin"> -->
  <body id="page-top" class="bg-image">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
      <a class="navbar-brand mr-1" href="{{ url('/') }}"><img src="{{ asset('images/logo-unj.png') }}" width=40px heigth=40px alt=""> {{ config('app.name', 'Laravel') }}</a>

      <!-- <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item">
                    <a data-toggle="tooltip" title="{{ __(' Begin Your Family Happiness Test') }}" class="nav-link {{ (request()->is('cek')) ? 'active' : '' }}" href="{{ route('cek') }}"><i class="fa fa-edit"></i> Test</a>
            </li>
            <li class="nav-item">
                    <a data-toggle="tooltip" title="{{ __(' Family Happiness Province Distribution Map') }}" class="nav-link {{ (request()->is('peta')) ? 'active' : '' }}" href="{{ route('peta') }}"><i class="fa fa-map-marked-alt"></i> Province Maps</a>
            </li>

              <li class="nav-item">
                    <a data-toggle="tooltip" title="{{ __(' Family Happiness Regency or City Distribution Map') }}" class="nav-link {{ (request()->is('peta2')) ? 'active' : '' }}" href="{{ route('peta2') }}"><i class="fa fa-map-marked"></i> Regency or City Maps</a>
            </li>
            @guest
                <li class="nav-item">
                    <a data-toggle="tooltip" title="{{ __(' Admin Login') }}" class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}"><i class="fa fa-user"></i> Login as admin</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <i class="fas fa-user-circle fa-fw"></i>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/home">Home</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            </ul>
        </div>
    </nav>

    <div id="wrapper">

        <!-- Sidebar -->

        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">

            <!-- DataTables Example -->
            <div class="col-md-12">
            <!-- {{-- @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li> {{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if (session('msg'))
                    <div class="alert alert-success" role="alert">
                        {{ session('msg') }}
                    </div>
            @endif --}} -->
            <!-- Cek Kebahagiaan Anda -->

            <main class="py-4">

            @yield('content')

            </main>

                </div>
                </div>
            </div>

            </div>
            <!-- /.container-fluid -->


            <!-- Sticky Footer -->
            <!-- <footer class="sticky-footer">
                <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © E-Happiness <script>
                        document.write(new Date().getFullYear())
                    </script></span>
                </div>
                </div>
            </footer> -->

        </div>
        <!-- /.content-wrapper -->

<!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sb/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('sb/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sb/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{ asset('sb/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('sb/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('sb/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sb/js/sb-admin.min.js')}}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{ asset('sb/js/demo/datatables-demo.js')}}"></script>
    <script src="{{ asset('sb/js/demo/chart-area-demo.js')}}"></script>
    {{-- <script>
    $(document).on('pjax:complete', function() {
        $("#loader").hide()
    })
    </script> --}}
    <div class="loader"> </div>
  </body>

<!-- </i> -->
</html>
