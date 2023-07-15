<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <link rel="shortcut icon" href="{{asset('contents/admin')}}/assets/images/favicon.ico">
    <link href="{{asset('contents/admin')}}/assets/plugins/slick/slick.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/assets/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('contents/admin')}}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{asset('contents/admin')}}/assets/css/orbiter.css" rel="stylesheet" type="text/css">
    <link href="{{asset('contents/admin')}}/assets/css/style.css" rel="stylesheet" type="text/css">
    <script src="{{asset('contents/admin')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/sweetalert.min.js"></script>
</head>
<body class="vertical-layout">


    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        <div class="leftbar">
            <!-- Start Sidebar -->
            <div class="sidebar">
                <!-- Start Logobar -->
                <div class="logobar">
                    <a href="index.html" class="logo logo-large"><img src="{{asset('contents/admin')}}/assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                    <a href="index.html" class="logo logo-small"><img src="{{asset('contents/admin')}}/assets/images/small_logo.svg" class="img-fluid" alt="logo"></a>
                </div>
                <!-- End Logobar -->
                <!-- Start Navigationbar -->
                <div class="navigationbar">
                    <ul class="vertical-menu">
                        <li>
                            <a href="{{url('admin')}}">
                              <img src="{{asset('contents/admin')}}/assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard"><span>Dashboard</span></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/user')}}">
                              <img src="{{asset('contents/admin')}}/assets/images/svg-icon/user.svg" class="img-fluid" alt="user"><span>User</span></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/banner')}}">
                              <img src="{{asset('contents/admin')}}/assets/images/svg-icon/basic.svg" class="img-fluid" alt="banner"><span>Banner</span></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/adduser')}}">
                              <img src="{{asset('contents/admin')}}/assets/images/svg-icon/basic.svg" class="img-fluid" alt="adduser"><span>AddUser</span></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('admin/addtask')}}">
                              <img src="{{asset('contents/admin')}}/assets/images/svg-icon/basic.svg" class="img-fluid" alt="adduser"><span>Add Task</span></i>
                            </a>
                        </li>
                        <li>
                            <a href="javaScript:void();">
                                <img src="{{asset('contents/admin')}}/assets/images/svg-icon/layouts.svg" class="img-fluid" alt="layouts"><span>Layouts</span><i class="feather icon-chevron-right pull-right"></i>
                            </a>
                            <ul class="vertical-submenu">
                                <li><a href="#">Light - Vertical</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                              <img src="{{asset('contents/admin')}}/assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout"><span>Logout</span></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rightbar">
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index.html" class="mobile-logo"><img src="{{asset('contents/admin')}}/assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="{{asset('contents/admin')}}/assets/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="{{asset('contents/admin')}}/assets/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="{{asset('contents/admin')}}/assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="{{asset('contents/admin')}}/assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="topbar">
                <div class="row align-items-center">
                    <div class="col-md-12 align-self-center">
                        <div class="togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                           <img src="{{asset('contents/admin')}}/assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                           <img src="{{asset('contents/admin')}}/assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="searchbar">
                                        <form>
                                            <div class="input-group">
                                              <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                              <div class="input-group-append">
                                                <button class="btn" type="submit" id="button-addon2"><img src="{{asset('contents/admin')}}/assets/images/svg-icon/search.svg" class="img-fluid" alt="search"></button>
                                              </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="infobar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="notifybar">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle infobar-icon" href="#" role="button" id="notoficationlink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('contents/admin')}}/assets/images/svg-icon/notifications.svg" class="img-fluid" alt="notifications">
                                            <span class="live-icon"></span></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="notoficationlink">
                                                <div class="notification-dropdown-title">
                                                    <h4>Notifications</h4>
                                                </div>
                                                <ul class="list-unstyled">
                                                    <li class="media dropdown-item">
                                                        <span class="mr-3 action-icon badge badge-primary-inverse"><i class="feather icon-dollar-sign"></i></span>
                                                        <div class="media-body">
                                                            <h5 class="action-title">$135 received</h5>
                                                            <p><span class="timing">Today, 10:45 AM</span></p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="profilebar">
                                        <div class="dropdown">
                                          <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('contents/admin')}}/assets/images/users/profile.svg" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                                <div class="dropdown-item">
                                                    <div class="profilename">
                                                      <h5>{{Auth::user()->name}}</h5>
                                                    </div>
                                                </div>
                                                <div class="userbox">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="media dropdown-item">
                                                            <a href="#" class="profile-icon"><img src="{{asset('contents/admin')}}/assets/images/svg-icon/user.svg" class="img-fluid" alt="user">My Profile</a>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <a href="#" class="profile-icon"><img src="{{asset('contents/admin')}}/assets/images/svg-icon/email.svg" class="img-fluid" alt="email">Email</a>
                                                        </li>
                                                        <li class="media dropdown-item">
                                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="profile-icon"><img src="{{asset('contents/admin')}}/assets/images/svg-icon/logout.svg" class="img-fluid" alt="logout">Logout</a>
                                                        </li>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumbbar">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-12">
                        <h4 class="page-title">CRM</h4>
                        <div class="breadcrumb-list">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">CRM</li>
                            </ol>
                        </div>
                    </div>

                </div>
            </div>
            <div class="contentbar">
                @yield('content')
            </div>
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2019 Creative Shaper | All Rights Reserved.</p>
                </footer>
            </div>
        </div>
    </div>
   
    <script src="{{asset('contents/admin')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/modernizr.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/detect.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/vertical-menu.js"></script>
    <script src="{{asset('contents/admin')}}/assets/plugins/slick/slick.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/custom/custom-dashboard.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/core.js"></script>
    {{-- <script src="{{asset('contents/admin')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/sweetalert.min.js"></script> --}}
</body>
</html>
