<!doctype html>
<html lang="en">
<head>
    <title>Khibra Academy | Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="icon" href="folders/images/favico.ico" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="../../master/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
    <link href="../../master/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../../master/assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>
<body>
<!----------------------------NavBar---------------------------------->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="../index.html">
            <img src="../../master/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ni ni-bell-55"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>My profile</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="../index.html">
                            <img src="../../master/assets/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class=" nav-link " href="{{url('home')}}"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
                </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('category.index')}}">
                        <i class="fas fa-folder text-blue"></i>Categories
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('formation.index')}}">
                        <i class="fas fa-book text-orange"></i>Formations
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('professor.index')}}">
                        <i class="fas fa-chalkboard-teacher text-yellow"></i>Professors
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('student.index')}}">
                        <i class="fas fa-user-graduate text-red"></i>Students
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('classroom.index')}}">
                        <i class="fas fa-chalkboard text-info"></i>Classrooms
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('session.index')}}">
                        <i class="fas fa-school text-grey"></i>Sessions
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('payment.index')}}">
                        <i class="fas fa-coins text-pink"></i>Payments
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('seance.index')}}">
                        <i class="fas fa-book-open text-purple"></i>Classes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('presence.index')}}">
                        <i class="fas fa-user-check text-green"></i>Presence
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="../index.html">Khibra Academy | Dashboard</a>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold" style="border: 2px solid;padding: 6px;padding-left: 9px;padding-right: 9px;border-radius: 5px !important;">{{ Auth::user()->name }}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <a href="{{route('profile.index')}}" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>My profile</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
<!----------------------------------------End NavBar------------------------------->

<!----------------------------------------Header----------------------------------->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                @yield('stats')
            </div>
        </div>
    </div>

<!--------------------------------------end Header------------------------------------->
    @yield('main-content')
    @yield('content')



<!-------------------------------------Footer----------------------------------------->
    <!-- Footer -->
    <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                    &copy; 2019 <a href="#" class="font-weight-bold ml-1" target="_blank">Khibra Academy</a>
                </div>
            </div>
            <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Kessoum Mohamed</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Addeche Kamel Chewki</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<!----------------------------------------end Footer----------------------------------------->

   <!--   Core   -->
   <script src="../../master/assets/js/plugins/jquery/dist/jquery.min.js"></script>
   <script src="../../master/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
   <!--   Optional JS   -->
   <!--   Argon JS   -->
   <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>

</body>
</html>
