
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
  <title>@yield('title', 'AdminLTE 3 | Blank Page')</title>

=======
  <title>AdminLTE 3 | Blank Page</title>
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
<<<<<<< HEAD
    @include('layouts.lib.ext-css')
=======
  @include('layouts.lib.ext-css')
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
<<<<<<< HEAD

=======
      
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{url('/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<<<<<<< HEAD
      <span class="brand-text font-weight-light">Bengkel Koding</span>
=======
      <span class="brand-text font-weight-light">AdminLTE 3</span>
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
<<<<<<< HEAD
            <a href="#" class="d-block">{{ Auth::user()->nama }}</a>
          </div>

=======
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
<<<<<<< HEAD
        @include('layouts.sidebar')
=======
      @include('layouts.sidebar') 
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @yield('content-header')
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
<<<<<<< HEAD
        @yield('content')
=======
      @yield('content')
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<<<<<<< HEAD
  @include('layouts.footer')
=======
 @include('layouts.footer')
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<<<<<<< HEAD

@include('layouts.lib.ext-js')
@yield('scripts')
</body>
</html>
=======
@include('layouts.lib.ext-js')
</body>
</html>
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
