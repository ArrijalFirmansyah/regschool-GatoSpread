<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegSchools</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">

            <!-- Content For Sidebar -->
            <div class="h-100">
                <div class="sidebar-logo border-bottom">
                    <a href="#">RegSchools</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="/staff/home" class="sidebar-link">
                            <i class="fa-solid fa-home pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/staff/tambah-sekolah" class="sidebar-link"><i class="fa-solid fa-file-lines pe-2"></i>
                            Tambah Data Sekolah
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/staff/profile" class="sidebar-link"><i class="fa-regular fa-user pe-2"></i>
                            Profile
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/logout" class="sidebar-link"><i class="fa-solid fa-sign-out-alt pe-2"></i>
                            Log Out
                        </a>  
                    </li>                   
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="{{ asset('image/profile.png') }}" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="profil.html" class="dropdown-item">Profile</a>
                                <a href="logout" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="#" class="theme-toggle">
                    <i class="fa-regular fa-moon"></i>
                    <i class="fa-regular fa-sun"></i>
                </a>
            </nav>

            {{-- Here start main content page--}}
            <main class="content px-3 py-2">
                @yield('container')
            </main>
            
            <footer class="footer px-2 py-1 border-top">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>GatoSpread</strong>
                                </a>
                            </p>
                        </div>
                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
