<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('assets/images/logo.png') }}" type="image/x-icon">
    <title>POS</title>

    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    @notifyCss


</head>

<body class="bg-soft-blue">
    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container-fluid">
            <a href="." class="navbar-brand logo">
                <img src="{{ url('assets/images/logo.png') }}" alt=""> KasirOnlen
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto gap-2">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}"
                            class="nav-link px-4 {{ Request::routeIs('dashboard') ? 'active' : '' }}">
                            <i class="bx bxs-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ Route::is('menu.*') || Route::is('kategori-menu.*') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">
                            <i class="bx bx-book"></i> Menu dan Kategori
                        </a>

                        <ul class="dropdown-menu mt-2">
                            <li>
                                <a href="{{ route('kategori-menu.index') }}" class="dropdown-item">
                                    <i class="bx bx-objects-horizontal-right"></i> Kategori Menu
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('menu.index') }}" class="dropdown-item">
                                    <i class="bx bx-box"></i> Menu
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="dashboard-pendapatan.html" class="nav-link px-4">
                            <i class="bx bx-money"></i> Pendapatan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('kasir.index') }}" class="nav-link px-4">
                            <i class="bx bx-user-pin"></i> Kasir
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Muhammad Yunus Almeida
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2">
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                {{-- <a class="dropdown-item" href="#">Log Out</a> --}}


                                {{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown"> --}}
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                {{-- </div> --}}
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="pt-5 pb-4">
        <div class="container">
            <p class="mb-0 text-center text-secondary fs-7">
                Copyright &copy; PT Onlenkan Teknologi Indonesia 2024. Seluruh hak cipta dilindungi.
            </p>
        </div>
    </footer>
    <x-notify::notify />
    <script src="{{ url('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    @notifyJs

</body>

</html>
