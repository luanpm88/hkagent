<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.104.2">
        <title>BonNuocLongNhien - Agent Dashboard</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        </style>

        
        <!-- Custom styles for this template -->
        <link href="{{ url('css/dashboard.css') }}" rel="stylesheet">
        <link href="{{ url('css/main.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
    </head>
    <body>        
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{ action('App\Http\Controllers\ContactController@index') }}">
                <img src="{{ url('logo.png') }}" width="35px" />
                <span class="text-muted ms-1 fw-bold">LONGNHIEN</span>
            </a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
            <span class="px-3 text-light">
                <span class="d-flex align-items-center text-nowrap">
                    <span class="material-symbols-rounded me-1">
                        account_circle
                    </span>
                    <span>{{ Auth::user()->name }}</span>
                </span>
            </span>
            <div class="navbar-nav">
                <div class="nav-item text-nowrap">
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a onclick="$(this).closest('form').submit();" type="submit" id="signout" class="nav-link px-3" href="javascript:;">
                            Sign out
                        </a>
                    </form>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                        <span>General</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle" class="align-text-bottom"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ $menu == 'contact' ? 'active' : '' }}" href="{{ action('App\Http\Controllers\ContactController@index') }}">
                            <span data-feather="file" class="align-text-bottom"></span>
                            Đại lý/Cửa hàng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $menu == 'price_seller' ? 'active' : '' }}" href="{{ action('App\Http\Controllers\PriceController@seller') }}">
                            <span data-feather="shopping-cart" class="align-text-bottom"></span>
                            Bảng giá đại lý
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $menu == 'price_customer' ? 'active' : '' }}" href="{{ action('App\Http\Controllers\PriceController@customer') }}">
                            <span data-feather="shopping-cart" class="align-text-bottom"></span>
                            Bảng giá bán lẻ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $menu == 'order' ? 'active' : '' }} text-muted pe-none" href="#">
                            <span data-feather="shopping-cart" class="align-text-bottom"></span>
                            Đơn hàng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted pe-none" href="#">
                            <span data-feather="users" class="align-text-bottom"></span>
                            Sản phẩm
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted pe-none" href="#">
                            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                            Báo cáo
                            </a>
                        </li>
                    </ul>

                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                        <span>Tài khoản</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle" class="align-text-bottom"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link {{ $menu == 'change_password' ? 'active' : '' }}" href="{{ route('update-password') }}">
                            <span data-feather="shopping-cart" class="align-text-bottom"></span>
                            Đổi mật khẩu
                            </a>
                        </li>
                    </ul>
                </div>
                </nav>

                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @if (count($errors) > 0)
                        <!-- Form Error List -->
                        <div class="alert alert-danger alert-noborder alert-dismissible mt-2">
                            <p class="mb-1"><strong>Something went wrong:</strong></p>

                            <ul class="ps-2 mb-0">
                                @foreach ($errors->all() as $error)
                                    <li class="mb-0">{{ $error }}</li>
                                @endforeach
                            </ul>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @foreach (['danger', 'success', 'warning', 'info', 'error'] as $msg)
                        @php
                            $class = $msg;
                            if ($msg == 'error') {
                                $class = 'danger';
                            }
                        @endphp
                        @if(Session::has($msg))
                            <!-- Form Error List -->
                            <div class="alert alert-{{ $class }} alert-noborder alert-dismissible mt-2">
                                <p class="mb-0">{!! preg_replace('/[\r\n]+/', ' ', Session::get($msg)) !!}</p>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif    
                    @endforeach

                    @yield('content')
                </main>
            </div>
        </div>
        <script>
            $(function() {
               
            })
        </script>
    </body>
</html>
