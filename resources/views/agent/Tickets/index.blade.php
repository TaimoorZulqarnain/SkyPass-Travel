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
    .flight_logo{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .hiddenRow {
        padding: 0 4px !important;
        background-color: #eeeeee;
        font-size: 13px;
    }
    .table{
        margin-bottom:1px;
    }
</style>
<div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
    <!--sidebar wrapper -->
    @include('agent.partials.sidebar')
    @include('agent.partials.errors')
    <div class="dashboard__main">
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
                                            <span class="text-white badge bg-success">Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaults2">
                                    <label class="form-check-label" for="flexCheckDefaults2">
                                        <span class="area_flex_one">
                                            <span>Fly Amirates </span>
                                            <span class="text-white badge bg-success">Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaults3">
                                    <label class="form-check-label" for="flexCheckDefaults3">
                                        <span class="area_flex_one">
                                            <span>Novo Air </span>
                                            <span class="text-white badge bg-success">Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaults4">
                                    <label class="form-check-label" for="flexCheckDefaults4">
                                        <span class="area_flex_one">
                                            <span>Air Asia </span>
                                            <span class="text-white badge bg-danger">Not Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaults5">
                                    <label class="form-check-label" for="flexCheckDefaults5">
                                        <span class="area_flex_one">
                                            <span>Singapore Airlines </span>
                                            <span class="text-white badge bg-success">Available</span>
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
                                            <span class="text-white badge bg-success">Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultp2">
                                    <label class="form-check-label" for="flexCheckDefaultp2">
                                        <span class="area_flex_one">
                                            <span>LHE-RUH</span>
                                            <span class="text-white badge bg-danger">Not Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultp3">
                                    <label class="form-check-label" for="flexCheckDefaultp3">
                                        <span class="area_flex_one">
                                            <span>LHE-DXB</span>
                                            <span class="text-white badge bg-success">Available</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultp3">
                                    <label class="form-check-label" for="flexCheckDefaultp3">
                                        <span class="area_flex_one">
                                            <span>ISB-DXB</span>
                                            <span class="text-white badge bg-danger">Not Available</span>
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
                            @php 
                                $ticket_count = 1; 
                            @endphp
                            @foreach($airlines_list as $airline)
                                <div class="flight_search_result_wrapper mb-10">                                
                                    <div class="card shadow">
                                        <div class="card-header border-0">
                                            <div class="col-md-3">
                                                <div class="flight_logo">
                                                    <img src="{{asset('uploads/airline_images/'.$airline->image)}}" alt="img">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table align-items-center table-flush">
                                                <tbody>
                                                    @foreach($airline['tickets'] as $ticket)
                                                        <tr>
                                                            <td>
                                                                <div class="flight_search_destination">
                                                                    <p class="ticket-label">Sector Information</p>  
                                                                    @php 
                                                                        $count = 1; 
                                                                        $dep_date = "";    
                                                                    @endphp
                                                                    @foreach($ticket['sectors'] as $sector)            
                                                                        <div class="flight_search_sector_info">
                                                                            <span class="fw-bold">{{ $count }}.</span>
                                                                            <span class="fw-bold">{{$sector->flight_num}}</span>
                                                                            <span class="fw-bold">                                                                            
                                                                                @php
                                                                                    $departureDate = date('dM', strtotime($sector->departure_date));
                                                                                @endphp        
                                                                                {{$departureDate}}</span>
                                                                            <span class="fw-bold">{{$sector->departure}}-{{$sector->destination}}</span>
                                                                            <span class="fw-bold">
                                                                            @php
                                                                                $departureTime = date('H:i', strtotime($sector->departure_time));
                                                                                $arivalTime = date('H:i', strtotime($sector->departure_time));
                                                                            @endphp    
                                                                            {{$departureTime}} {{$arivalTime}}</span>
                                                                            <span class="fw-bold">{{$sector->baggage}}-KG Baggage</span>
                                                                        </div>
                                                                        @php 
                                                                            $count++; 
                                                                            if( $dep_date == "")
                                                                                $dep_date = date('l j M, Y', strtotime($sector->departure_date));
                                                                        @endphp
                                                                    @endforeach
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="flight_search_destination">
                                                                    <p class="ticket-label">Price</p>
                                                                    <span class="fw-bold">PKR {{$ticket->adult_price}}</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="flight_search_destination">
                                                                    <p class="ticket-label">Dep Date</p>
                                                                    <span class="fw-bold">{{$dep_date}}</span>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="flight_search_destination">
                                                                    <p class="ticket-label">Meal</p>
                                                                    <span class="fw-bold">{{$ticket->meal}}</span>
                                                                </div>
                                                            </td>
                                                            <td>                                                       
                                                                <div class="flight_search_right_2">                                                                   
                                                                    <form id="logout-form" action="{{ route('book-tickets/booking-details') }}" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="ticket_id" value="{{$ticket->id}}"/>
                                                                        <button class="btn btn_theme btn_sm" >Book now</button>
                                                                    </form>
                                                                    <!-- <h6 data-bs-toggle="collapse" href="#collapseExample{{$ticket_count}}" role="button" aria-expanded="false" aria-controls="collapseExample{{$ticket_count}}">Show more
                                                                        <i class="fas fa-chevron-down"></i></h6> -->
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!-- <tr>
                                                            <td colspan="5" class="hiddenRow">
                                                                <div class="collapse" id="collapseExample{{$ticket_count}}">Price Policy</div>
                                                            </td>
                                                        </tr> -->
                                                        @php 
                                                            $ticket_count++; 
                                                        @endphp
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
<script>
    // $('.accordian-body').on('show.bs.collapse', function () {
    //     $(this).closest("table")
    //         .find(".collapse.in")
    //         .not(this)
    //         .collapse('toggle')
    // })
</script>
@endsection

   