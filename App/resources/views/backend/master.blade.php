<!DOCTYPE html>
<html dir="ltr" lang="en">
  
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta
    name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, ample admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template"
  />
  <meta
    name="description"
    content="Ample is powerful and clean admin dashboard template, inpired from Google's Material Design"
  />
  <meta name="robots" content="noindex,nofollow" />
  <title>ElectroCity - Admind </title>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('common/pageimg/icon.ico.png')}}">
  
  <!-- Favicon icon -->
  {{-- <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/favicon.png"
  /> --}}
  <link
    rel="stylesheet"
    href="{{asset('backend/assets/libs/apexcharts/apexchart.css')}}"
  />
  <!-- Custom CSS -->
  <link
    href="{{asset('backend/assets/libs/calender/fullcalender.css')}}"
    rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('backend/assets/css/bs.min.css')}}">
  <link rel="stylesheet" href="{{asset('common/themify-icons/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('common/fontawesome/css/all.css')}}">
  <link href="{{asset('backend/assets/libs/calender/calender.css')}}" rel="stylesheet" />
  <!-- needed css -->
  <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('common/Mercury.lib/css/all.css')}}">
  <script src="{{asset('common/js/jquery.min.js')}}"></script>
  <script src="{{asset('common/Mercury.lib/js/all.js')}}"></script>
  @yield('head')
</head>
<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <svg
        class="tea lds-ripple"
        width="37"
        height="48"
        viewbox="0 0 37 48"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
          stroke="#20222a"
          stroke-width="2"
        ></path>
        <path
          d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
          stroke="#20222a"
          stroke-width="2"
        ></path>
        <path
          id="teabag"
          fill="#20222a"
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"
        ></path>
        <path
          id="steamL"
          d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke="#20222a"
        ></path>
        <path
          id="steamR"
          d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13"
          stroke="#20222a"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        ></path>
      </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="navbar-header border-end">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a
                class="nav-toggler waves-effect waves-light d-block d-md-none"
                href="javascript:void(0)"
                ><i class="ti-menu ti-close"></i
                ></a>
                <a class="navbar-brand" href="/admin">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img
                    src="{{asset('common/pageimg/icon.ico.png')}}"
                    alt="homepage"
                    class="dark-logo"
                    />
                    <!-- Light Logo icon -->
                    <img
                    src="{{asset('common/pageimg/icon.ico.png')}}"
                    alt="homepage"
                    class="light-logo"
                    />
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img
                    width="100%"
                    src="{{asset('common/pageimg/StickyLogo.png')}}"
                    alt="homepage"
                    class="dark-logo"
                    />
                    <!-- Light Logo text -->
                    <img
                    width="100%"
                    src="{{asset('common/pageimg/StickyLogo.png')}}"
                    class="light-logo"
                    alt="homepage"
                    />
                </span>
                </a>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a
                class="topbartoggler d-block d-md-none waves-effect waves-light"
                href="javascript:void(0)"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
                ><i class="ti-more"></i
                ></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle waves-effect waves-dark mx-3"
                            href="#"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            style="width: 100px"
                            >
                            <div class="row align-items-center ">

                                <div class="col-4 p-0 me-3">
                                    
                                    <div class="prefix_img rounded-circle" prefixScale="1,1">
                                        
                                        <img
                                        src="{{asset('uploads/'.Auth::user()->avata)}}"
                                        alt="user"
                                        class=""
                                        
                                        />
                                    </div>
                                </div>
                                <span class="p-0 col-5 font-weight-medium">Me</span>
                                <span class="p-0 fas col-1 fa-angle-down"></span>
                            </div>
                        </a>
                        <div
                        class="
                            dropdown-menu dropdown-menu-end
                            user-dd
                            animated
                            flipInY
                        "
                        >
                        <div
                            class="
                            d-flex
                            no-block
                            align-items-center
                            p-3
                            bg-info
                            text-white
                            mb-2
                            "
                        >
                            
                            <div class="ms-2">
                            <h4 class="mb-0 text-white">{{Auth::user()->name}}</h4>
                            <p class="mb-0">{{Auth::user()->email}}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="/me"
                            ><i
                            data-feather="user"
                            class="feather-sm text-info me-1 ms-1"
                            ></i>
                            Cá nhân</a
                        >
                        <a class="dropdown-item" href="/me/history"
                            ><i
                            data-feather="credit-card"
                            class="feather-sm text-info me-1 ms-1"
                            ></i>
                            Lịch sử</a
                        >
                        
                        
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('user.logout')}}"
                            ><i
                            data-feather="log-out"
                            class="feather-sm text-danger me-1 ms-1"
                            ></i>
                            Logout</a
                        >
                        
                    </li>
                </ul>
            </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item">
                        <a
                        class="
                            sidebar-link
                            has-arrow
                            waves-effect waves-dark
                            profile-dd
                        "
                        href="javascript:void(0)"
                        aria-expanded="false"
                        >
                        <div class="col-2">
                            <div class="prefix_img rounded-circle" prefixScale="1,1">
                                <img
                                src="{{asset('uploads/'.Auth::user()->avata)}}"
                                class=""
                                />
                            </div>

                        </div>
                        <span class="hide-menu"> {{Auth::user()->name}} </span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="/me" class="sidebar-link">
                            <i class="ti-user"></i>
                            <span class="hide-menu"> Cá nhân </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/me/history" class="sidebar-link">
                            <i class="ti-wallet"></i>
                            <span class="hide-menu"> Lịch sử </span>
                            </a>
                        </li>
                        
                        <li class="sidebar-item">
                            <a href="javascript:void(0)" class="sidebar-link">
                            <i class="fas fa-power-off"></i>
                            <span class="{{route('user.logout')}}"> Logout </span>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a
                        class="sidebar-link waves-effect waves-dark"
                        href="/admin"
                        aria-expanded="false"
                        >
                        <i class="fas fa-home"></i>
                        <span class="hide-menu">Dashboard</span>
                        
                        </a>
                        
                    </li>
                    <li class="sidebar-item">
                        <a
                        class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)"
                        aria-expanded="false"
                        >
                        <i class="fas fa-clipboard-list"></i>
                        <span class="hide-menu">Quản lý trang người dùng</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{route('contact.index')}}" class="sidebar-link">
                                <i class="mdi mdi-cards-variant"></i>
                                <span class="hide-menu">Thông tin trang</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{route('slide.index')}}" class="sidebar-link">
                                <i class="mdi mdi-cart"></i>
                                <span class="hide-menu">Slide quảng cáo</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{route('highlight-cate.index')}}" class="sidebar-link">
                                <i class="mdi mdi-cart-plus"></i>
                                <span class="hide-menu">Danh mục Ưu tiên</span>
                                </a>
                            </li>
                            
                        
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a
                        class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)"
                        aria-expanded="false"
                        >
                        <i class="fas fa-clipboard-list"></i>
                        <span class="hide-menu">Quản lý dữ liệu</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="/admin/category-mini" class="sidebar-link">
                                <i class="mdi mdi-cards-variant"></i>
                                <span class="hide-menu">Danh mục con</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/admin/category" class="sidebar-link">
                                <i class="mdi mdi-cart"></i>
                                <span class="hide-menu">Danh mục cha</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/admin/brand" class="sidebar-link">
                                <i class="mdi mdi-cart-plus"></i>
                                <span class="hide-menu">Hãng</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/admin/payment" class="sidebar-link">
                                <i class="mdi mdi-camera-burst"></i>
                                <span class="hide-menu">Phương thức thanh toán</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/admin/product" class="sidebar-link">
                                <i class="mdi mdi-camera-burst"></i>
                                <span class="hide-menu">Sản phẩm</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/admin/user" class="sidebar-link">
                                <i class="mdi mdi-camera-burst"></i>
                                <span class="hide-menu">Tài khoản</span>
                                </a>
                            </li>
                        
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a
                        class="sidebar-link has-arrow waves-effect waves-dark"
                        href="javascript:void(0)"
                        aria-expanded="false"
                        >
                        <i class="fas fa-exclamation"></i>
                        <span class="hide-menu">Quản lý tố cáo</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="/admin/report-blog" class="sidebar-link">
                                <i class="mdi mdi-cards-variant"></i>
                                <span class="hide-menu">Bài viết</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/admin/report-pro" class="sidebar-link">
                                <i class="mdi mdi-cart"></i>
                                <span class="hide-menu">Sản phẩm</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="/admin/report-user" class="sidebar-link">
                                <i class="mdi mdi-cart-plus"></i>
                                <span class="hide-menu">Người dùng</span>
                                </a>
                            </li>
                            
                        
                        </ul>
                    </li>
                
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
      
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            @yield('main')
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Thực hiện bởi nhóm 3H.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
        <a href="javascript:void(0)" class="service-panel-toggle"
            ><i class="fa fa-spin fa-cog"></i
        ></a>
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
            <li class="nav-item">
                <a
                class="nav-link active"
                id="pills-home-tab"
                data-bs-toggle="pill"
                href="#pills-home"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
                ><i class="mdi mdi-wrench fs-6"></i
                ></a>
            </li>
            <li class="nav-item">
                <a
                class="nav-link"
                id="pills-profile-tab"
                data-bs-toggle="pill"
                href="#chat"
                role="tab"
                aria-controls="chat"
                aria-selected="false"
                ><i class="mdi mdi-message-reply fs-6"></i
                ></a>
            </li>
            <li class="nav-item">
                <a
                class="nav-link"
                id="pills-contact-tab"
                data-bs-toggle="pill"
                href="#pills-contact"
                role="tab"
                aria-controls="pills-contact"
                aria-selected="false"
                ><i class="mdi mdi-star-circle fs-6"></i
                ></a>
            </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
            <!-- Tab 1 -->
            <div
                class="tab-pane fade show active"
                id="pills-home"
                role="tabpanel"
                aria-labelledby="pills-home-tab"
            >
                <div class="p-3 border-bottom">
                <!-- Sidebar -->
                <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
                <div class="form-check mt-3">
                    <input
                    type="checkbox"
                    name="theme-view"
                    class="form-check-input"
                    id="theme-view"
                    />
                    <label class="form-check-label" for="theme-view">
                    <span>Dark Theme</span>
                    </label>
                </div>
                <div class="form-check mt-2">
                    <input
                    type="checkbox"
                    class="sidebartoggler form-check-input"
                    name="collapssidebar"
                    id="collapssidebar"
                    />
                    <label class="form-check-label" for="collapssidebar">
                    <span>Collapse Sidebar</span>
                    </label>
                </div>
                <div class="form-check mt-2">
                    <input
                    type="checkbox"
                    name="sidebar-position"
                    class="form-check-input"
                    id="sidebar-position"
                    />
                    <label class="form-check-label" for="sidebar-position">
                    <span>Fixed Sidebar</span>
                    </label>
                </div>
                <div class="form-check mt-2">
                    <input
                    type="checkbox"
                    name="header-position"
                    class="form-check-input"
                    id="header-position"
                    />
                    <label class="form-check-label" for="header-position">
                    <span>Fixed Header</span>
                    </label>
                </div>
                <div class="form-check mt-2">
                    <input
                    type="checkbox"
                    name="boxed-layout"
                    class="form-check-input"
                    id="boxed-layout"
                    />
                    <label class="form-check-label" for="boxed-layout">
                    <span>Boxed Layout</span>
                    </label>
                </div>
                </div>
                <div class="p-3 border-bottom">
                <!-- Logo BG -->
                <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
                <ul class="theme-color m-0 p-0">
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-logobg="skin1"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-logobg="skin2"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-logobg="skin3"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-logobg="skin4"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-logobg="skin5"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-logobg="skin6"
                    ></a>
                    </li>
                </ul>
                <!-- Logo BG -->
                </div>
                <div class="p-3 border-bottom">
                <!-- Navbar BG -->
                <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
                <ul class="theme-color m-0 p-0">
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-navbarbg="skin1"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-navbarbg="skin2"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-navbarbg="skin3"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-navbarbg="skin4"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-navbarbg="skin5"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-navbarbg="skin6"
                    ></a>
                    </li>
                </ul>
                <!-- Navbar BG -->
                </div>
                <div class="p-3 border-bottom">
                <!-- Logo BG -->
                <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                <ul class="theme-color m-0 p-0">
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-sidebarbg="skin1"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-sidebarbg="skin2"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-sidebarbg="skin3"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-sidebarbg="skin4"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-sidebarbg="skin5"
                    ></a>
                    </li>
                    <li class="theme-item list-inline-item me-1">
                    <a
                        href="javascript:void(0)"
                        class="theme-link rounded-circle d-block"
                        data-sidebarbg="skin6"
                    ></a>
                    </li>
                </ul>
                <!-- Logo BG -->
                </div>
            </div>
            <!-- End Tab 1 -->
            <!-- Tab 2 -->
            <div
                class="tab-pane fade"
                id="chat"
                role="tabpanel"
                aria-labelledby="pills-profile-tab"
            >
                <ul class="mailbox list-style-none mt-3">
                <li>
                    <div class="message-center chat-scroll position-relative">
                    <a
                        href="javascript:void(0)"
                        class="
                        message-item
                        d-flex
                        align-items-center
                        border-bottom
                        px-3
                        py-2
                        "
                        id="chat_user_1"
                        data-user-id="1"
                    >
                        <span class="user-img position-relative d-inline-block">
                        <img
                            src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/1.jpg"
                            alt="user"
                            class="rounded-circle w-100"
                        />
                        <span class="profile-status rounded-circle online"></span>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                        <span
                            class="
                            fs-2
                            text-nowrap
                            d-block
                            text-muted text-truncate
                            "
                            >Just see the my admin!</span
                        >
                        <span class="fs-2 text-nowrap d-block text-muted"
                            >9:30 AM</span
                        >
                        </div>
                    </a>
                    <!-- Message -->
                    <a
                        href="javascript:void(0)"
                        class="
                        message-item
                        d-flex
                        align-items-center
                        border-bottom
                        px-3
                        py-2
                        "
                        id="chat_user_2"
                        data-user-id="2"
                    >
                        <span class="user-img position-relative d-inline-block">
                        <img
                            src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/2.jpg"
                            alt="user"
                            class="rounded-circle w-100"
                        />
                        <span class="profile-status rounded-circle busy"></span>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                        <span
                            class="
                            fs-2
                            text-nowrap
                            d-block
                            text-muted text-truncate
                            "
                            >I've sung a song! See you at</span
                        >
                        <span class="fs-2 text-nowrap d-block text-muted"
                            >9:10 AM</span
                        >
                        </div>
                    </a>
                    <!-- Message -->
                    <a
                        href="javascript:void(0)"
                        class="
                        message-item
                        d-flex
                        align-items-center
                        border-bottom
                        px-3
                        py-2
                        "
                        id="chat_user_3"
                        data-user-id="3"
                    >
                        <span class="user-img position-relative d-inline-block">
                        <img
                            src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/3.jpg"
                            alt="user"
                            class="rounded-circle w-100"
                        />
                        <span class="profile-status rounded-circle away"></span>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                        <span
                            class="
                            fs-2
                            text-nowrap
                            d-block
                            text-muted text-truncate
                            "
                            >I am a singer!</span
                        >
                        <span class="fs-2 text-nowrap d-block text-muted"
                            >9:08 AM</span
                        >
                        </div>
                    </a>
                    <!-- Message -->
                    <a
                        href="javascript:void(0)"
                        class="
                        message-item
                        d-flex
                        align-items-center
                        border-bottom
                        px-3
                        py-2
                        "
                        id="chat_user_4"
                        data-user-id="4"
                    >
                        <span class="user-img position-relative d-inline-block">
                        <img
                            src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/4.jpg"
                            alt="user"
                            class="rounded-circle w-100"
                        />
                        <span
                            class="profile-status rounded-circle offline"
                        ></span>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                        <span
                            class="
                            fs-2
                            text-nowrap
                            d-block
                            text-muted text-truncate
                            "
                            >Just see the my admin!</span
                        >
                        <span class="fs-2 text-nowrap d-block text-muted"
                            >9:02 AM</span
                        >
                        </div>
                    </a>
                    <!-- Message -->
                    <!-- Message -->
                    <a
                        href="javascript:void(0)"
                        class="
                        message-item
                        d-flex
                        align-items-center
                        border-bottom
                        px-3
                        py-2
                        "
                        id="chat_user_5"
                        data-user-id="5"
                    >
                        <span class="user-img position-relative d-inline-block">
                        <img
                            src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/5.jpg"
                            alt="user"
                            class="rounded-circle w-100"
                        />
                        <span
                            class="profile-status rounded-circle offline"
                        ></span>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                        <span
                            class="
                            fs-2
                            text-nowrap
                            d-block
                            text-muted text-truncate
                            "
                            >Just see the my admin!</span
                        >
                        <span class="fs-2 text-nowrap d-block text-muted"
                            >9:02 AM</span
                        >
                        </div>
                    </a>
                    <!-- Message -->
                    <!-- Message -->
                    <a
                        href="javascript:void(0)"
                        class="
                        message-item
                        d-flex
                        align-items-center
                        border-bottom
                        px-3
                        py-2
                        "
                        id="chat_user_6"
                        data-user-id="6"
                    >
                        <span class="user-img position-relative d-inline-block">
                        <img
                            src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/6.jpg"
                            alt="user"
                            class="rounded-circle w-100"
                        />
                        <span
                            class="profile-status rounded-circle offline"
                        ></span>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                        <span
                            class="
                            fs-2
                            text-nowrap
                            d-block
                            text-muted text-truncate
                            "
                            >Just see the my admin!</span
                        >
                        <span class="fs-2 text-nowrap d-block text-muted"
                            >9:02 AM</span
                        >
                        </div>
                    </a>
                    <!-- Message -->
                    <!-- Message -->
                    <a
                        href="javascript:void(0)"
                        class="
                        message-item
                        d-flex
                        align-items-center
                        border-bottom
                        px-3
                        py-2
                        "
                        id="chat_user_7"
                        data-user-id="7"
                    >
                        <span class="user-img position-relative d-inline-block">
                        <img
                            src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/7.jpg"
                            alt="user"
                            class="rounded-circle w-100"
                        />
                        <span
                            class="profile-status rounded-circle offline"
                        ></span>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                        <span
                            class="
                            fs-2
                            text-nowrap
                            d-block
                            text-muted text-truncate
                            "
                            >Just see the my admin!</span
                        >
                        <span class="fs-2 text-nowrap d-block text-muted"
                            >9:02 AM</span
                        >
                        </div>
                    </a>
                    <!-- Message -->
                    <!-- Message -->
                    <a
                        href="javascript:void(0)"
                        class="
                        message-item
                        d-flex
                        align-items-center
                        border-bottom
                        px-3
                        py-2
                        "
                        id="chat_user_8"
                        data-user-id="8"
                    >
                        <span class="user-img position-relative d-inline-block">
                        <img
                            src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/8.jpg"
                            alt="user"
                            class="rounded-circle w-100"
                        />
                        <span
                            class="profile-status rounded-circle offline"
                        ></span>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                        <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                        <span
                            class="
                            fs-2
                            text-nowrap
                            d-block
                            text-muted text-truncate
                            "
                            >Just see the my admin!</span
                        >
                        <span class="fs-2 text-nowrap d-block text-muted"
                            >9:02 AM</span
                        >
                        </div>
                    </a>
                    <!-- Message -->
                    </div>
                </li>
                </ul>
            </div>
            <!-- End Tab 2 -->
            <!-- Tab 3 -->
            <div
                class="tab-pane fade p-3"
                id="pills-contact"
                role="tabpanel"
                aria-labelledby="pills-contact-tab"
            >
                <h6 class="mt-3 mb-3">Activity Timeline</h6>
                <div class="steamline">
                <div class="sl-item">
                    <div class="sl-left bg-light-success text-success">
                    <i data-feather="user" class="feather-sm fill-white"></i>
                    </div>
                    <div class="sl-right">
                    <div class="font-weight-medium">
                        Meeting today <span class="sl-date"> 5pm</span>
                    </div>
                    <div class="desc">you can write anything</div>
                    </div>
                </div>
                <div class="sl-item">
                    <div class="sl-left bg-light-info text-info">
                    <i data-feather="camera" class="feather-sm fill-white"></i>
                    </div>
                    <div class="sl-right">
                    <div class="font-weight-medium">Send documents to Clark</div>
                    <div class="desc">Lorem Ipsum is simply</div>
                    </div>
                </div>
                <div class="sl-item">
                    <div class="sl-left">
                    <img
                        class="rounded-circle"
                        alt="user"
                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/2.jpg"
                    />
                    </div>
                    <div class="sl-right">
                    <div class="font-weight-medium">
                        Go to the Doctor <span class="sl-date">5 minutes ago</span>
                    </div>
                    <div class="desc">Contrary to popular belief</div>
                    </div>
                </div>
                <div class="sl-item">
                    <div class="sl-left">
                    <img
                        class="rounded-circle"
                        alt="user"
                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/1.jpg"
                    />
                    </div>
                    <div class="sl-right">
                    <div>
                        <a href="javascript:void(0)">Stephen</a>
                        <span class="sl-date">5 minutes ago</span>
                    </div>
                    <div class="desc">Approve meeting with tiger</div>
                    </div>
                </div>
                <div class="sl-item">
                    <div class="sl-left bg-light-primary text-primary">
                    <i data-feather="user" class="feather-sm fill-white"></i>
                    </div>
                    <div class="sl-right">
                    <div class="font-weight-medium">
                        Meeting today <span class="sl-date"> 5pm</span>
                    </div>
                    <div class="desc">you can write anything</div>
                    </div>
                </div>
                <div class="sl-item">
                    <div class="sl-left bg-light-info text-info">
                    <i data-feather="send" class="feather-sm fill-white"></i>
                    </div>
                    <div class="sl-right">
                    <div class="font-weight-medium">Send documents to Clark</div>
                    <div class="desc">Lorem Ipsum is simply</div>
                    </div>
                </div>
                <div class="sl-item">
                    <div class="sl-left">
                    <img
                        class="rounded-circle"
                        alt="user"
                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/4.jpg"
                    />
                    </div>
                    <div class="sl-right">
                    <div class="font-weight-medium">
                        Go to the Doctor <span class="sl-date">5 minutes ago</span>
                    </div>
                    <div class="desc">Contrary to popular belief</div>
                    </div>
                </div>
                <div class="sl-item">
                    <div class="sl-left">
                    <img
                        class="rounded-circle"
                        alt="user"
                        src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/assets/images/users/6.jpg"
                    />
                    </div>
                    <div class="sl-right">
                    <div>
                        <a href="javascript:void(0)">Stephen</a>
                        <span class="sl-date">5 minutes ago</span>
                    </div>
                    <div class="desc">Approve meeting with tiger</div>
                    </div>
                </div>
                </div>
            </div>
            <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- -------------------------------------------------------------- -->
    <!-- All Jquery -->
    <!-- -------------------------------------------------------------- -->
    <script src="{{asset('backend/assets/libs/jquery/jqueryui.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('common/js/bootstrap/bundle.js')}}"></script>
    <!-- apps -->
    <script src="{{asset('backend/assets/js/app.js')}}"></script>
    {{-- <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/dist/js/app.init.js"></script> --}}
    {{-- <script src="https://demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/dist/js/app-style-switcher.js"></script> --}}
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('backend/assets/libs/jquery/scrollbar.js')}}"></script>
    <script src="{{asset('backend/assets/libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('backend/assets/libs/sparkline/sparkline.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('backend/assets/js/sidebar.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('backend/assets/libs/bs/feather.min.js')}}"></script>
    <script src="{{asset('backend/assets/libs/bs/custom.js')}}"></script>
    @yield('js')
    <script>
        $(document).ready(function(){
            mercuryJs.PrefixImageByScale('.prefix_img')

        })
    </script>
</body>

<!-- Mirrored from demos.wrappixel.com/premium-admin-templates/bootstrap/ample-bootstrap/package/html/ampleadmin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Sep 2021 08:43:38 GMT -->
</html>
