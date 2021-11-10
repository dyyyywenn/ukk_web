<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My Book</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('adminlte/')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('adminlte/')}}/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="#">WebSiteName</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb" aria-expanded="true">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navb" class="navbar-collapse collapse hide">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Page 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Page 2</a>
            </li>
          </ul>
          
          <div class="user-panel  m-2 d-flex ml-auto">
            <div class="image">
              <img src="{{asset('adminlte/')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
          </div>
       
        </div>
      </nav>

      
      <div class="row justify-content-center m-5">
        <div class="col-md-6">
            <h1 style="font-family: bold">find something about your favorite book</h1>
        </div>
        <div class="col-md-6">
            <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="query" value="">
                    <button class="btn btn-primary" type="submit" value="CARI">Search</button>
                  </div>
            </form>
        </div>
      </div>

      <div class="row m-3">
           
        @foreach ($menu as $data)
        <div class="card-colums">
          <div class="card m-3" style="width: 12rem; ">
            <div class="card-body">
             
                <img src="{{url('gambar/'.$data->gambar)}}" width="150"> 
                <p align="center">{{$data->judul}}</p> 
                <a href="" class="btn btn-warning">Detail</a>
            </div>
        </div>
  
        </div>
        @endforeach

    </div>

      <!-- jQuery -->
<script src="{{asset('adminlte/')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/')}}/dist/js/demo.js"></script>
</body>
</html>