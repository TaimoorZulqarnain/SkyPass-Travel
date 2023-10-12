<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Skypass') }}</title>
        <!-- Bootstrap css -->
        <link rel="stylesheet" href="{{ asset(MyApp::ASSET_STYLE.'bootstrap.min.css') }}" />
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset(MyApp::ASSET_STYLE.'animate.min.css') }}" />
        <!-- Fontawesome css -->
        <link rel="stylesheet" href="{{ asset(MyApp::ASSET_STYLE.'fontawesome.all.min.css') }}" />
        <!-- <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.8.2/font/bootstrap-icons.css') }}"> -->
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{ asset(MyApp::ASSET_STYLE.'owl.carousel.min.css') }}" />
        <!-- Slick css -->
        <link rel="stylesheet" type="text/css" href="{{ asset(MyApp::ASSET_STYLE.'slick.min.css') }}" />
        <!--slick-theme.css') }}-->
        <link rel="stylesheet" type="text/css" href="{{ asset(MyApp::ASSET_STYLE.'slick-theme.html') }}" />
        <!-- Rangeslider css -->
        <link rel="stylesheet" href="{{ asset(MyApp::ASSET_STYLE.'nouislider.css') }}" />
        <!-- owl.theme.default css -->
        <link rel="stylesheet" href="{{ asset(MyApp::ASSET_STYLE.'owl.theme.default.min.css') }}" />
        <!-- navber css -->
        <link rel="stylesheet" href="{{ asset(MyApp::ASSET_STYLE.'navber.css') }}" />
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset(MyApp::ASSET_STYLE.'meanmenu.css') }}" />
        <!-- Style css -->
        <link rel="stylesheet" href="{{ asset(MyApp::ASSET_STYLE.'style.css') }}" />
        <!-- Responsive css -->
        <link rel="stylesheet" href="{{ asset(MyApp::ASSET_STYLE.'responsive.css') }}" />
         <link rel="stylesheet" href="{{asset('/toast/css/sh_toaster.css')}}">
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <script src=" {{asset('/toast/js/sh_toaster.js')}}"></script>
        <style>
            .flightLine>*:nth-child(1) {
            left: 0;
            background-color: #d47171;
            /* #ffffff; */
            }

            .flightLine>*:nth-child(2) {
            right: 0;
            background-color: #dddddd;
            }

            .flightLine {
            position: relative;
            width: 100%;
            height: 1px;
            background-color: #dddddd;
            }

            .flightLine>* {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 9px;
            height: 9px;
            border: 1px solid #dddddd;
            border-radius: 100%;
            }

            .border-light {
            border: 1px solid #dddddd !important;
            padding: 20px;
            margin: 10px;
            }

            .pt-40 {
            padding-top: 40px !important;
            }

            .y-gap-30 {
            margin-top: 15px;
            margin-bottom: 15px;
            }

            .mr-24 {
            margin-right: 24px !important;
            }

            .is-in-view {
            opacity: 1;
            transform: translate3d(0, 0, 0);
            pointer-events: auto;
            }

            .justify-between {
            justify-content: space-between !important;
            }

            .mr-5 {
            margin: 5px;
            }
        </style>
        <!-- Styles -->
        @livewireStyles
    </head>

    <body class="@if (Route::current()->uri == 'login' || Route::current()->uri == 'register' || Route::current()->uri == 'login/admin') inner-pages hd-white @else th-15 homepage-4 @endif">
     <!-- preloader Area -->
     <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-spinner">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="sh-toast-container" id="shToastContainerTop"></div>
        <!-- Header Area -->

  <!-- Header Area -->
  <header class="main_header_arae navbar_color_black">
    <!-- Top Bar -->
    <div class="topbar-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6">
            <ul class="topbar-list">
              <li>
                <a href="#!"><i class="fab fa-facebook"></i></a>
                <a href="#!"><i class="fab fa-twitter-square"></i></a>
                <a href="#!"><i class="fab fa-instagram"></i></a>
                <a href="#!"><i class="fab fa-linkedin"></i></a>
              </li>
              <li>
                <a href="#!"><span>+011 234 567 89</span></a>
              </li>
              <li>
                <a href="#!"><span>info@skypass.pk</span></a>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 col-md-6">
            <ul class="topbar-others-options">
                @if (Route::has('login'))
                    @auth
                      @if (auth()->user()->user_type === 'Admin')
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                      @else
                        <li><a href="{{ url('/agent-dashboard') }}">Dashboard</a></li>
                      @endif
                    @else
                      <li><a href="{{ route('login') }}">Log in</a></li>
                    @if (Route::has('register'))
                      <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                    @endauth
                @endif
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Bar -->
    <div class="navbar-area">
      <div class="main-responsive-nav">
        <div class="container">
          <div class="main-responsive-menu">
            <div class="logo">
              <a href="{{ URL::to('/') }}">
                <img src="{{asset('assets/img/logo_black.png')}}" alt="logo" style="width: 150px" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="main-navbar">
        <div class="container">
          <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{ URL::to('/') }}">
              <img src="{{asset('assets/img/logo_black.png')}}" alt="logo" style="width: 150px" />
            </a>
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ URL::to('/') }}" class="nav-link">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('/about') }}" class="nav-link">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ URL::to('/contact') }}" class="nav-link">
                        Contact us
                    </a>
                </li>
              </ul>
              <div class="others-options d-flex align-items-center">
                <div class="option-item">
                  <a href="#" class="search-box">
                    <i class="bi bi-search"></i>
                  </a>
                </div>
                <div class="option-item">
                  <a href="#" class="btn btn_navber">Become a Partner</a>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div class="others-option-for-responsive">
        <div class="container">
          <div class="dot-menu">
            <div class="inner">
              <div class="circle circle-one"></div>
              <div class="circle circle-two"></div>
              <div class="circle circle-three"></div>
            </div>
          </div>
          <div class="container">
            <div class="option-inner">
              <div class="others-options d-flex align-items-center">
                <div class="option-item">
                  <a href="#" class="search-box"><i class="fas fa-search"></i></a>
                </div>
                <div class="option-item">
                  <a href="contact.html" class="btn btn_navber">Get free quote</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>


    <!-- search -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="button"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <!-- Footer -->
    <footer id="footer_area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="footer_heading_area">
            <h5>Need any help?</h5>
          </div>
          <div class="footer_first_area">
            <div class="footer_inquery_area">
              <h5>Call 24/7 for any help</h5>
              <h5><a href="tel:+00-123-456-789">+00 123 456 789</a></h5>
            </div>
            <div class="footer_inquery_area">
              <h5>Mail to our support team</h5>
              <h5>
                <a href="mailto:support@domain.com">info@skypass.pk</a>
              </h5>
            </div>
            <div class="footer_inquery_area">
              <h5>Follow us on</h5>
              <ul class="soical_icon_footer">
                <li>
                  <a href="#!"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#!"><i class="fab fa-twitter-square"></i></a>
                </li>
                <li>
                  <a href="#!"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                  <a href="#!"><i class="fab fa-linkedin"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 offset-lg-1 col-md-6 col-sm-6 col-12">
          <div class="footer_heading_area">
            <h5>Company</h5>
          </div>
          <div class="footer_link_area">
            <ul>
              <li><a href="about.html">About Us</a></li>
              <li><a href="testimonials.html">Our Vision</a></li>
              <li><a href="faqs.html">Our Mission</a></li>
              <li><a href="terms-service.html">Work with Us</a></li>
              <li><a href="tour-guides.html">Meet the Team </a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
          <div class="footer_heading_area">
            <h5>Support</h5>
          </div>
          <div class="footer_link_area">
            <ul>
              <li><a href="dashboard.html">Contact Us</a></li>
              <li><a href="faq.html">Call Us</a></li>
              <li><a href="faq.html">Email Us</a></li>
              <li><a href="testimonials.html">Terms & Conditions</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
          <div class="footer_heading_area">
            <h5>Other Services</h5>
          </div>
          <div class="footer_link_area">
            <ul>
              <li>
                <a href="top-destinations-details.html">Haj & Umra</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6 col-12">
          <div class="footer_heading_area">
            <h5>Top cities</h5>
          </div>
          <div class="footer_link_area">
            <ul>
              <li><a href="room-details.html">Saudi Arab</a></li>
              <li><a href="hotel-details.html">UAE</a></li>
              <li><a href="hotel-booking.html">Qatar</a></li>
              <li><a href="hotel-booking.html">Oman</a></li>
              <li><a href="hotel-booking.html">Qatar</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
 
    <div class="copyright_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="co-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="copyright_left">
                        <p>Copyright © 2023 All Rights Reserved</p>
                    </div>
                </div>
                <!-- <div class="co-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="copyright_right">
                        <img src="{{asset('assets/img/common/cards.png')}}" alt="img">
          </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="go-top">
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-up"></i>
    </div>
    <script src="{{ asset(MyApp::ASSET_SCRIPT.'jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset(MyApp::ASSET_SCRIPT.'bootstrap.bundle.js') }}"></script>
    <!-- Meanu js -->
    <script src="{{ asset(MyApp::ASSET_SCRIPT.'jquery.meanmenu.js') }}"></script>
    <!-- owl carousel js -->
    <script src="{{ asset(MyApp::ASSET_SCRIPT.'owl.carousel.min.js') }}"></script>
    <!-- wow.js -->
    <script src="{{ asset(MyApp::ASSET_SCRIPT.'wow.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset(MyApp::ASSET_SCRIPT.'custom.js') }}"></script>
    <script src="{{ asset(MyApp::ASSET_SCRIPT.'add-form.js') }}"></script>
    <script src="{{ asset(MyApp::ASSET_SCRIPT.'form-dropdown.js') }}"></script>
</body>
</html>
