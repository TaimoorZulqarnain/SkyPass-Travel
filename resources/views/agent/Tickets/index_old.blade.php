@extends('layouts.admin')
@section('content')
<!-- Style css -->
<link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}" />
<div class="preloader js-preloader">
  </div>
  <div class="header-margin"> </div>
<style>
  .form-check-input{
    margin-top: 0.38em;
  }
</style>
<!--start header -->
@include('agent.partials.navigation')
<!--end header -->
<style>
    .badge{
        line-height: inherit;
    }
</style>
<div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
    <!--sidebar wrapper -->
    @include('agent.partials.sidebar')
    <div class="dashboard__main">
        <!-- <div class="col-lg-12 ps-3 pt-3">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row js-tabs-controls">
                <div class="col-auto">
                    <button
                        class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active"
                        data-tab-target=".-tab-item-1">News content</button>
                </div>
                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                        data-tab-target=".-tab-item-2"> Seo manager</button>
                </div>
                <div class="col-auto">
                    <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button "
                        data-tab-target=".-tab-item-4">Attributes</button>
                </div>

                </div>
            </div>
        </div> -->
        <div class="dashboard__content">
            <!-- Form Area -->
            <div class="col-lg-12">
                <div class="theme_search_form_area">
                    <div class="theme_search_form_tabbtn">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="btn btn_theme btn_sm" 
                                    
                                    aria-selected="true">KSA One Way</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="btn btn_theme btn_sm" 
                                    
                                    aria-selected="true">UAE One Way</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="btn btn_theme btn_sm" 
                                    
                                    aria-selected="true">Umrah</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="btn btn_theme btn_sm" 
                                    
                                    aria-selected="true">All</button>
                            </li>
                        </ul>
                        <div class="single-field relative d-flex items-center md:d-none ml-30">
                        <input class="pl-50 border-light text-dark-1 h-40 rounded-8" type="email" placeholder="Search">
                        <button class="absolute d-flex items-center h-full">
                            <i class="icon-search text-20 px-15 text-dark-1"></i>
                        </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Flight Search Areas -->
            <section id="explore_area" class="section_padding">
            <div class="row">
                <div class="col-lg-2">
                    <div class="left_side_search_area">
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Airlines</h5>
                            </div>
                            <div class="tour_search_type">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaults1">
                                    <label class="form-check-label" for="flexCheckDefaults1">
                                        <span class="area_flex_one">
                                            <span>Quatar Airways</span>
                                            <span class="text-white badge rounded-pill bg-success">Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaults2">
                                    <label class="form-check-label" for="flexCheckDefaults2">
                                        <span class="area_flex_one">
                                            <span>Fly Amirates </span>
                                            <span class="text-white badge rounded-pill bg-success">Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaults3">
                                    <label class="form-check-label" for="flexCheckDefaults3">
                                        <span class="area_flex_one">
                                            <span>Novo Air </span>
                                            <span class="text-white badge rounded-pill bg-success">Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaults4">
                                    <label class="form-check-label" for="flexCheckDefaults4">
                                        <span class="area_flex_one">
                                            <span>Air Asia </span>
                                            <span class="text-white badge rounded-pill bg-danger">Not Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaults5">
                                    <label class="form-check-label" for="flexCheckDefaults5">
                                        <span class="area_flex_one">
                                            <span>Singapore Airlines </span>
                                            <span class="text-white badge rounded-pill bg-success">Available</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Sectors</h5>
                            </div>
                            <div class="tour_search_type">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultp1">
                                    <label class="form-check-label" for="flexCheckDefaultp1">
                                        <span class="area_flex_one">
                                            <span>LYP-DXB</span>
                                            <span class="text-white badge rounded-pill bg-success">Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultp2">
                                    <label class="form-check-label" for="flexCheckDefaultp2">
                                        <span class="area_flex_one">
                                            <span>LHE-RUH</span>
                                            <span class="text-white badge rounded-pill bg-danger">Not Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultp3">
                                    <label class="form-check-label" for="flexCheckDefaultp3">
                                        <span class="area_flex_one">
                                            <span>LHE-DXB</span>
                                            <span class="text-white badge rounded-pill bg-success">Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultp3">
                                    <label class="form-check-label" for="flexCheckDefaultp3">
                                        <span class="area_flex_one">
                                            <span>ISB-DXB</span>
                                            <span class="text-white badge rounded-pill bg-danger">Not Available</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
                <div class="col-lg-10">                 
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="flight_search_result_wrapper">
                                
                                <div class="flight_logo">
                                    <img src="{{asset('assets/img/common/biman_bangla.png')}}" alt="img">
                                </div>
                                <hr>
                                <div class="flight_search_item_wrappper">
                                    <div class="flight_search_items">
                                        <div class="multi_city_flight_lists">
                                            <div class="flight_multis_area_wrapper">
                                                <div class="flight_search_middel">
                                                        <div class="flight_search_destination">
                                                            <p class="ticket-label">Sector Information</p>                                                  
                                                            <div class="flight_search_sector_info">
                                                                <span class="fw-bold">1.</span>
                                                                <span class="fw-bold">ER723</span>
                                                                <span class="fw-bold">27SEP</span>
                                                                <span class="fw-bold">LHE-DXB</span>
                                                                <span class="fw-bold">11:05 13:30</span>
                                                                <span class="fw-bold">20-KG Baggage</span>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="flight_search_seats">
                                                    <div class="flight_search_destination">
                                                        <p class="ticket-label">Meal</p>
                                                        <span class="fw-bold">Yes</span>
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        <p class="ticket-label">Dep Date</p>
                                                        <span class="fw-bold">Monday 2 Oct, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="flight_search_right">
                                            <h5><del>Rs.9,560</del></h5>
                                            <h2>Rs.7,560<sup>*20% OFF</sup></h2>
                                            <a href="{{route('book-tickets/booking-details')}}" class="btn btn_theme btn_sm">Book
                                                now</a>
                                            <h6 data-bs-toggle="collapse" data-bs-target="#collapseExample"
                                                aria-expanded="false" aria-controls="collapseExample">Show more <i
                                                    class="fas fa-chevron-down"></i></h6>
                                        </div>
                                    </div>
                                    <div class="flight_policy_refund collapse" id="collapseExample">
                                        <div class="flight_show_down_wrapper">
                                            <div class="flight-shoe_dow_item">
                                                <div class="airline-details">
                                                    <div class="img"><img src="{{asset('assets/img/common/biman_bangla.png')}}" alt="img"></div>
                                                    <span class="airlineName fw-500">Qatar Airways &nbsp; ER723</span>
                                                    <span class="flightNumber">27SEP</span>
                                                </div>
                                                <div class="flight_inner_show_component">
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">LHE</span>
                                                                <span class="time">11:05</span>
                                                            </div>
                                                            
                                                            <p class="date">2nd Oct 2023</p>
                                                        </div>
                                                    </div>
                                                    <div class="flight_duration">
                                                        <div class="arrow_right"></div>
                                                        <span>02h 25m</span>
                                                    </div>
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DXB</span>
                                                                <span class="time">13:30</span>
                                                            </div>
                                                            
                                                            <p class="date">2nd Oct 2023</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flight_refund_policy">
                                                <div class="TabPanelInner flex_widht_less">
                                                    <h4>Price Policy</h4>
                                                    <p class="fz12">1. Adult discount.</p>
                                                    <p class="fz12">2. Child discount. </p>
                                                    <p class="fz12">3. Infants discounts.</p>
                                                </div>
                                                <div class="TabPanelInner">
                                                    <h4>Baggage</h4>
                                                    <div class="flight_info_taable">
                                                        <h3>DAC-SPD</h3>
                                                        <p><span>20KG /</span> person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="flight_logo">
                                    <img src="{{asset('assets/img/common/serene.png')}}" alt="img">
                                </div>
                                <hr>
                                <div class="flight_search_item_wrappper">
                                    <div class="flight_search_items">
                                        <div class="multi_city_flight_lists">
                                            <div class="flight_multis_area_wrapper">
                                                <div class="flight_search_middel">
                                                    <div class="flight_search_destination">
                                                            <p class="ticket-label">Sector Information</p>                                                  
                                                            <div class="flight_search_sector_info">
                                                                 <span class="fw-bold">1.</span>
                                                                 <span class="fw-bold">ER723</span>
                                                                 <span class="fw-bold">27SEP</span>
                                                                 <span class="fw-bold">LHE-DXB</span>
                                                                 <span class="fw-bold">11:05 13:30</span>
                                                                 <span class="fw-bold">20-KG Baggage</span>
                                                            </div>                                                
                                                            <div class="flight_search_sector_info">
                                                                 <span class="fw-bold">2.</span>
                                                                 <span class="fw-bold">ER723</span>
                                                                 <span class="fw-bold">27SEP</span>
                                                                 <span class="fw-bold">DXB-LHE</span>
                                                                 <span class="fw-bold">14:05 16:30</span>
                                                                 <span class="fw-bold">30-KG Baggage</span>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="flight_search_seats">
                                                    <div class="flight_search_destination">
                                                        <p class="ticket-label">Meal</p>
                                                        <span class="fw-bold">Yes</span>
                                                    </div>
                                                    <div class="flight_search_destination">
                                                        <p class="ticket-label">Dep Date</p>
                                                        <span class="fw-bold">Monday 2 Oct, 2023</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="flight_search_right">
                                            <h2>Rs.9,560</h2>
                                            <a href="{{route('book-tickets/booking-details')}}" class="btn btn_theme btn_sm">Book
                                                now</a>
                                            <h6 data-bs-toggle="collapse" data-bs-target="#collapseExample1"
                                                aria-expanded="false" aria-controls="collapseExample1">Show more <i
                                                    class="fas fa-chevron-down"></i></h6>
                                        </div>
                                    </div>
                                    <div class="flight_policy_refund collapse" id="collapseExample1">
                                        <div class="flight_show_down_wrapper">
                                            <div class="flight-shoe_dow_item">
                                                <div class="airline-details">
                                                    <div class="img"><img src="{{asset('assets/img/common/biman_bangla.png')}}" alt="img"></div>
                                                    <span class="airlineName fw-500">Qatar Airways &nbsp; ER723</span>
                                                    <span class="flightNumber">27SEP</span>
                                                </div>
                                                <div class="flight_inner_show_component">
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">LHE</span>
                                                                <span class="time">11:05</span>
                                                            </div>
                                                            
                                                            <p class="date">2nd Oct 2023</p>
                                                        </div>
                                                    </div>
                                                    <div class="flight_duration">
                                                        <div class="arrow_right"></div>
                                                        <span>02h 25m</span>
                                                    </div>
                                                    <div class="flight_det_wrapper">
                                                        <div class="flight_det">
                                                            <div class="code_time">
                                                                <span class="code">DXB</span>
                                                                <span class="time">13:30</span>
                                                            </div>
                                                            
                                                            <p class="date">2nd Oct 2023</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flight_refund_policy">
                                                <div class="TabPanelInner flex_widht_less">
                                                    <h4>Price Policy</h4>
                                                    <p class="fz12">1. Adult Price.</p>
                                                    <p class="fz12">2. Child Price. </p>
                                                    <p class="fz12">3. Infants Price.</p>
                                                </div>
                                                <div class="TabPanelInner">
                                                    <h4>Baggage</h4>
                                                    <div class="flight_info_taable">
                                                        <h3>DAC-SPD</h3>
                                                        <p><span>20KG /</span> person</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="load_more_flight">
                                <button class="btn btn_md"><i class="fas fa-spinner"></i> Load more..</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
            @include('agent.partials.footer')
        </div>
    </div>
</div>
@endsection

   