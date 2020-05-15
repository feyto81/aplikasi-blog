<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/fonts/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/fonts/ionicons.min.css')}}">
  @stack('customcss')
  <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/dist/css/skins/_all-skins.min.css')}}">
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><b>A</b>LT</span>
      <span class="logo-lg">Laravel Blog<b>Admin</b>LTE</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-right">
                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                     {{ __('Sign out') }}
                    </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                   </form>
                </div>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Auth::user()->name}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu">
        <li class="treeview">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="{{route('categori.index')}}"><i class="fa fa-adjust"></i> Category</a></li>
            <li><a href="{{route('artikel.index')}}"><i class="fa fa-pencil"></i>Artikel</a></li>
        </li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       @yield('page-title')
      </h1>
    </section>
    <section class="content">
        @yield('content')
    </section>
  </div>

<script src="{{asset('backend/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
@stack('datatables')
<script src="{{asset('backend/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('backend/plugins/fastclick/fastclick.js')}}"></script>
<script src="{{asset('backend/dist/js/app.min.js')}}"></script>
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
@stack('customdatatables')
</body>
</html>