<!DOCTYPE html>
<html lang="en">

<head>

    <title>Admin Dashboard @yield('title')</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Dashboard Admin " />
    <meta name="keywords" content="Admin Panal Cms " />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('dashboard/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('dashboard/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('dashboard/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/icon/themify-icons/themify-icons.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/jquery.mCustomScrollbar.css')}}">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/style.css')}}">
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="loader-track">
        <div class="preloader-wrapper">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->

@section('sidebar')
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="{{asset('dashboard/images/logo.png')}}" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('dashboard/images/avatar-2.jpg')}}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="{{asset('dashboard/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                    <span>{{ Auth::user()->name }}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li class="waves-effect waves-light">
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
<li class="waves-effect waves-light"><a href="user-profile.html"><i class="ti-user"></i> Profile</a> </li>
<li class="waves-effect waves-light"> <a href="email-inbox.html"> <i class="ti-email"></i> My Messages </a></li>
<li class="waves-effect waves-light"><a action="{{ route('logout') }}" method="POST"><i class="ti-layout-sidebar-left"></i>Logout</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="p-15 p-b-0">
                                <form class="form-material">
                                    <div class="form-group form-primary">
                                        <input type="text" name="footer-email" class="form-control" required="">
                                        <span class="form-bar"></span>
                                        <label class="float-label"><i class="fa fa-search m-r-10"></i>Search</label>
                                    </div>
                                </form>
                            </div>

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="index.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <div class="pcoded-navigation-label"></div>


                            </ul>

                            <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Sections</div>
                            <ul class="pcoded-item pcoded-left-item">

                                <li>
                                    <a href="map-google.html" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Maps</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext" href=""  data-i18n="nav.basic-components.main">Users permissions </span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{route('dashboard.user.create')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add user</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{route('dashboard.user.index')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">View All Posts</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>


                                {{-- end posts  --}}

<li class="pcoded-hasmenu">
    <a href="javascript:void(0)" class="waves-effect waves-dark">
        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
        <span class="pcoded-mtext" href="" data-i18n="nav.basic-components.main">Categories</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">

        @if (auth()->user()->hasPermission('users_read'))
        <li class=" ">
            <a href="{{route('dashboard.category.create')}}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add Category</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        @endif
        <li class="">
            <a href="{{route('dashboard.category.index')}}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">View All Category</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>

    </ul>
</li>
{{-- start tag  --}}
<li class="pcoded-hasmenu">
    <a href="javascript:void(0)" class="waves-effect waves-dark">
        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
        <span class="pcoded-mtext" href=""  data-i18n="nav.basic-components.main">Tags</span>
        <span class="pcoded-mcaret"></span>
    </a>
    <ul class="pcoded-submenu">
        <li class=" ">
            <a href="{{route('dashboard.tag.create')}}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add Tags</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>
        <li class=" ">
            <a href="{{route('dashboard.tag.index')}}" class="waves-effect waves-dark">
                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">View All Tags</span>
                <span class="pcoded-mcaret"></span>
            </a>
        </li>

    </ul>
</li>



         {{-- end category --}}

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext" href=""  data-i18n="nav.basic-components.main">Posts</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="{{route('dashboard.post.create')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add Posts</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="{{route('dashboard.post.index')}}" class="waves-effect waves-dark">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">View All Posts</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>



                             </ul>



                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Welcome {{Auth::user()->name}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @show



<!-- Required Jquery -->
<script type="text/javascript" src="{{URL::asset('dashboard/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('dashboard/js/jquery-ui/jquery-ui.min.js ')}}"></script>
<script type="text/javascript" src="{{URL::asset('dashboard/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('dashboard/js/bootstrap/js/bootstrap.min.js ')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/pages/widget/excanvas.js ')}}"></script>
<!-- waves js -->
<script src="{{URL::asset('dashboard/pages/waves/js/waves.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('dashboard/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('dashboard/js/modernizr/modernizr.js ')}}"></script>
<!-- slimscroll js -->
<script type="text/javascript" src="{{URL::asset('dashboard/js/SmoothScroll.js')}}"></script>
<script src="{{URL::asset('dashboard/js/jquery.mCustomScrollbar.concat.min.js ')}}"></script>
<!-- Chart js -->
<script type="text/javascript" src="{{asset('dashboard/js/chart.js/Chart.js')}}"></script>
<!-- amchart js -->
<script src="{{asset('https://www.amcharts.com/lib/3/amcharts.js')}}"></script>
<script src="{{asset('dashboard/pages/widget/amchart/gauge.js')}}"></script>
<script src="{{asset('dashboard/pages/widget/amchart/serial.js')}}"></script>
<script src="{{asset('dashboard/pages/widget/amchart/light.js')}}"></script>
<script src="{{asset('dashboard/pages/widget/amchart/pie.min.js')}}"></script>
<script src="{{asset('https://www.amcharts.com/lib/3/plugins/export/export.min.js')}}"></script>
<!-- menu js -->
<script src="{{asset('dashboard/js/pcoded.min.js')}}"></script>
<script src="{{asset('dashboard/js/vertical-layout.min.js')}}"></script>
<!-- custom js -->
<script type="text/javascript" src="{{asset('dashboard/pages/dashboard/custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('dashboard/js/script.js')}}"></script>
</body>

</html>
