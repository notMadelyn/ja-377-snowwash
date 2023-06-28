<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Office</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/extensions/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/simple-datatables.css') }}">

</head>

<body style="background: #FFF" class="theme-light">
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active" style="background: #224761">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        {{-- <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div> --}}
                        <h4 style="color:#FFF"> JA 377 Snow Wash</h4>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title" style="color: white">Menu</li>

                        <li class="sidebar-item {{ request()->is('/') ? 'sidebar-item active' : '' }} ">
                            <a href="{{ url('/home') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span style="color: white">Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->is('visitor') ? 'sidebar-item active' : '' }} ">
                            <a href="{{ url('/visitor') }}" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span style="color: white">Buku Tamu</span>
                            </a>
                        </li>

                        {{-- <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span style="color: white">Data Guru</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('teacher/senin') }}" style="color: white">Senin</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('teacher/selasa') }}" style="color: white">Selasa</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('teacher/rabu') }}" style="color: white">Rabu</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('teacher/kamis') }}" style="color: white">Kamis</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('teacher/jumat') }}" style="color: white">Jumat</a>
                                </li>
                            </ul>
                        </li> --}}

                        <li class="sidebar-item {{ request()->is('siswa') ? 'sidebar-item active' : '' }} ">
                            <a href="{{ url('/siswa') }}" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span style="color: white">Data Pelanggan</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->is('logout') ? 'sidebar-item active' : '' }} ">
                            <a class="sidebar-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-left"></i>
                                <span style="color: white">Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            @yield('main')
        </div>
    </div>

    <script>
        const appBody = document.body;
        if (localStorage.getItem('theme') == 'theme-dark') {
            localStorage.setItem('theme', 'theme-light')
            appBody.classList.add("theme-light");
        } else {
            localStorage.setItem('theme', 'theme-light')
            appBody.classList.add("theme-light");
        };
    </script>

    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Need: Apexcharts -->
    <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/js/pages/simple-datatables.js') }}"></script>


</body>

</html>
