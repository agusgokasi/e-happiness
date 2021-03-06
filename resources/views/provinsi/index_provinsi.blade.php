<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Province Input</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ asset('sb/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sb/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ asset('sb/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('sb/css/sb-admin.css') }}" rel="stylesheet">

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

  </head>
<!-- <i class="fas fa-spin"> -->
  <body id="page-top">


    @include('layouts.nav')
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="row justify-content-center">
            <!-- DataTables Example -->

            <div class="col-md-12">
            @if (count($errors) > 0)
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
            @endif
            {{--<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i>
                Buat provinsi
            </a>
            @include('provinsi.modal_provinsi')
            <br><br>--}}
            <div class="card border border-info">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Provincial Data
                </div>

                <div class="card-body">
                <div class="row justify-content-center">
                @if($provinsis->count()==0)
                    <h5><strong>You Don't Have Any Data</a></strong></h5>
                @else
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Province</th>
                                    <th>Total score</th>
                                    <th>Total input</th>
                                    <th>Happiness score</th>
                                    {{--<th>Edit</th>
                                    <th>Delete</th>--}}
                                </tr>
                            </thead>
                            <tbody>
                            @if($provinsis->count())
                                @foreach($provinsis as $key => $provinsi)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>
                                        @if($provinsi->provinsi == 'ID-MA')
                                        Maluku
                                        @elseif($provinsi->provinsi == 'ID-PB')
                                        Papua Barat
                                        @elseif($provinsi->provinsi == 'Jakarta Raya')
                                        DKI Jakarta
                                        @else
                                        {{$provinsi->provinsi}}
                                        @endif
                                        </td>
                                        <td>{{$provinsi->skor}}</td>
                                        <td>
                                        @if($provinsi->input == 0)
                                        Data has not been input into this province
                                        @else
                                        {{$provinsi->input}}
                                        @endif
                                        </td>
                                        <td>{{$provinsi->final_skor}}</td>
                                        {{--<td>
                                        <p>
                                        <a href="#" class="btn" style="font-size: 15px; background-color: green; color: white; border-radius: 2em" data-toggle="modal" data-target="#exampleModal{{$provinsi->id}}" data-provinsi_id="{{$provinsi->id}}" data-provinsi="{{$provinsi->provinsi}}">
                                            <i class="fa fa-edit">Edit Provinsi</i>
                                        </a>
                                        @include('provinsi.modal_edit_provinsi')
                                        </p>
                                        </td>
                                        <td>
                                        <form action="{{ route('provinsis.destroy', $provinsi->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus provinsi" type="submit" style="font-size: 15px; background-color: crimson; border-radius: 2em" onclick="return confirm('Kamu yakin ingin menghapus provinsi ini?');"><i class="fa fa-eraser" style="font-size: 15px"> Hapus Provinsi</i></button>
                                        </form>
                                        </td>--}}
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>

                    {{--<div class="pagination-bar text-center">
                     {{ $permohonans->onEachSide(1)->links() }}
                    </div> --}}
                    @endif
                </div>
                </div>
                </div>
                </div>
            </div>

            </div>
            <!-- /.container-fluid -->


            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © E-Happiness <script>
                        document.write(new Date().getFullYear())
                    </script></span>
                </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

</div>
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

  </body>
<!-- </i> -->
</html>
