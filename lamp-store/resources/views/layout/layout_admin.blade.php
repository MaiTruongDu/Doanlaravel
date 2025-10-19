<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    {{-- Dùng @yield('title') để các view con tự định nghĩa tiêu đề --}}
    <title>@yield('title', 'Admin Dashboard')</title>

    <link href="{{ asset('admin-template/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-template/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-template/dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-template/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    </head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/index') }}">SB Admin v2.0</a>
            </div>
            {{-- TOP NAV (User Menu) --}}
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/login') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>

            {{-- SIDEBAR --}}
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li>

                        <li>
                            <a href="{{ url('/index') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        {{-- Thêm liên kết Sản phẩm mới --}}
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Quản Lý Sản Phẩm<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('sanpham.create') }}"><i class="fa fa-plus fa-fw"></i> Thêm Sản Phẩm Mới</a>
                                </li>
                                <li>
                                    <a href="{{ url('/sanpham/index') }}"><i class="fa fa-list fa-fw"></i> Danh Sách Sản Phẩm</a>
                                </li>
                            </ul>
                        </li>
                        {{-- ... (Các menu khác giữ nguyên) ... --}}
                        <li class="active">
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="{{ url('/blank') }}">Blank Page</a></li>
                                <li><a href="{{ url('/login') }}">Login Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">
                {{-- Đây là nơi các view con sẽ inject nội dung của chúng --}}
                @yield('content')
            </div>
        </div>

    </div>
    
    <script src="{{ asset('admin-template/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin-template/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-template/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin-template/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>