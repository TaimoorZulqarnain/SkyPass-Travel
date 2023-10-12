    
@extends('layouts.admin')

@section('content')
<div class="preloader js-preloader">
  </div>
  <div class="header-margin"> </div>

    <!--start header -->
    @include('agent.partials.navigation')
    <!--end header -->

    <div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
   <!--sidebar wrapper -->
   @include('agent.partials.sidebar')
    <!--end sidebar wrapper -->
    <style>
        .box {
            background-color: #f0f0f0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 20px;
            margin-bottom: 30px;
            position: relative;
        }

        .arrow {
            cursor: pointer;
        }

        .text {
            display: none;
            margin-top: 10px;
        }

        .custom_shadow {
            box-shadow: 6px 6px 16px 6px rgba(0, 0, 0, 0.08);
        }

        /* Target the scrollbar in webkit-based browsers */
        .overflow-scroll::-webkit-scrollbar {
            width: 12px;
            /* Adjust the width as needed */
        }

        /* Track */
        .overflow-scroll::-webkit-scrollbar-track {
            background: #f1f1f1;
            /* Change the background color */
        }

        /* Handle */
        .overflow-scroll::-webkit-scrollbar-thumb {
            background: #888;
            /* Change the color of the scrollbar handle */
        }

        /* Handle on hover */
        .overflow-scroll::-webkit-scrollbar-thumb:hover {
            background: #555;
            /* Change the color on hover */
        }

        .user_detail {
            flex-wrap: wrap;
        }

        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px 2px rgba(0, 0, 0, 0.25);
        }

        .box {
            width: 160px;
            height: 150px;
            background: white;
            border-radius: 11px;
            margin: 5px;
            padding: 5px;
            box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .box p {
            margin: 10px;
        }

        .box3 {
            background: #225d84;
            border-radius: 11px;
            margin: 5px;
            padding: 5px;
            box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .box4 {
            background: #e77727;
            border-radius: 11px;
            margin: 5px;
            padding: 5px;
            transition: all ease 0.2s;
            box-shadow: inset 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .box4 span {
            color: white;
            display: inline-block;
            margin-right: 10px;
        }

        .box3 span {
            color: white;
            display: inline-block;
            margin-right: 10px;
        }

        .box3:hover {
            transform: translateY(5px);
            box-shadow: 0px 10px 20px 2px rgba(0, 0, 0, 0.25);
        }

        .box4:hover {
            transform: translateY(5px);
            box-shadow: inset 0px 10px 20px 2px rgba(0, 0, 0, 0.25);
        }

        .custom-span {
            margin-left: 20px !important;
        }

        .custom-span1 {
            margin-left: 55px !important;
        }

        .card {
            display: inline-block;
            /* width: 18rem; */
        }

        .card-with-border {
            border-radius: 15px 0px 0px 15px;
            ;
            border-left: 5px solid #245c85;
        }

        .card-body-with-right-border {
            border-right: 3px solid #e5e5e5;

        }

        .card-body-header-with-right-border {
            border-right: 1px solid #e5e5e5;
        }

        p.card-text {
            margin: 0px;
        }

        .card-body {
            padding: 0.5rem;
        }

        .card-title {
            margin-bottom: 0px;
        }

        .bg-blue-1 {
            background-color: #225d86 !important;
        }

        .status {
            height: 20px;
            width: 20px;
            background-color: #e8e8e8 ;
            /* #d6d2d2; */
            /* color: white; */
            font-size: 12px;
        }
        span .datetime{
            height: 35px;
            width: 35px;
            background-color: #e8e8e8 ;
            font-size: 25px;
        }
        .price {
            color: green;
        }

        .icon-color {
            /* background-color: red; */
            color: #e5782b !important;
            font-size: 20px;
        }
    </style>
            @include('agent.partials.errors')
        <div class="dashboard__main">
            <div class="dashboard__content">
                <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
                    <div class="col-12">
                        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
                            <div class="rounded-4 bg-white custom_shadow">
                                <div class="row">
                                    <div class="col-12">
                                        <form action="#" method="POST" enctype="multipart/form-data"
                                            class="justify-content" style="padding-left: 5px;">
                                            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                                                <div class="row x-gap-20 y-gap-20">
                                                    <div class="col-xl-4 col-md-4 col-sm-4">
                                                        <div class="form-input">
                                                            <label class="lh-1 text-16 ">Date From</label>
                                                            <input  class="form-control" type="date" class="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-4 col-sm-4">
                                                        <div class="form-input">
                                                            <label class="lh-1 text-16 ">Date To</label>
                                                            <input class="form-control" type="date" class="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-md-4 col-sm-4">
                                                        <div class="form-input pt-30" style="margin-top: 0.18rem;">
                                                            <button type="submit"
                                                                class="button h-40 px-24 -dark-1 bg-blue-1 text-white ">Search</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="row y-gap-20">
                    <div class="col-xl-12">
                        <div class="card-deck">
                            <div class="card" style="background-color: #245c85 ;color: white;width: 100%;">
                                <div class="row">
                                    <div class="col-xl-2 card-body-header-with-right-border">
                                        <div class="card-body ">
                                        <span class="card-title ">Booking No</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 card-body-header-with-right-border">
                                        <div class="card-body "><span
                                            class="card-title">Group <i class="fa fa-plane fa-rotate-270"></i></div>
                                    </div>
                                    <div class="col-xl-2 card-body-header-with-right-border "><div class="card-body "><span
                                            class="card-title">Departure <i class="fa fa-light fa-stopwatch"></i></div>
                                    </div>
                                    <div class="col-xl-3 card-body-header-with-right-border "><div class="card-body "><span
                                            class="card-title">Passengers <i class="fa fa-users"></i></span></div>
                                    </div>
                                    <div class="col-xl-1 card-body-header-with-right-border "><div class="card-body "><span
                                            class="card-title">Total Price</span></div>
                                    </div>
                                    <div class="col-xl-1 card-body-header-with-right-border"> <span class="card-title"><div class="card-body ">Status<i class="fa fa-solid fa-check"></i></span></div>
                                    </div>
                                    <div class="col-xl-1">
                                        <span class="card-title"><div class="card-body ">Action</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($tickets as $ticket)
                    <div class="row y-gap-20">
                        <div class="col-xl-12">
                            <div class="card-deck">
                                <div class="card card-with-border">
                                    <div class="row">
                                        <div class="col-xl-2 card-body-with-right-border">
                                            <div class="card-body ">
                                                <p class="card-text">
                                                    <span>Agent #:{{$ticket->agent_id}}</span>
                                                </p>
                                                <p class="card-text"><span>Booking#:{{$ticket->booking_id}}</span> </p>
                                                <p class="card-text"> 
                                                    <span>Created by: {{$ticket->agent_name}}</span><br>
                                                    <span> Created At:
                                                        @php
                                                            $created_at = date('D d M Y h:i a', strtotime($ticket->agent_ticket_create_at))
                                                        @endphp
                                                    {{$created_at}}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 card-body-with-right-border">
                                            <div class="card-body pt-4">
                                                <p class="card-text"> 
                                                    <span>{{$ticket->airline_name}} </span>
                                                </p>
                                                <p class="card-text"> 
                                                    <span>{{$ticket->departure}}-{{$ticket->destination}} </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-2 card-body-with-right-border">
                                            <div class="card-body pt-4">
                                                <p class="mb-0">
                                                    <span class="datetime">
                                                    @php
                                                        $departure_date = date('D d M Y', strtotime($ticket->departure_date))
                                                    @endphp    
                                                    {{$departure_date}}</span>
                                                </p>
                                                <p class="mb-0">
                                                    <span class="datetime">
                                                        @php
                                                            $departureTime = date('h:i a', strtotime($ticket->departure_time));
                                                        @endphp {{ $departureTime}}
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 card-body-with-right-border">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <span>Status</span>
                                                        <span class="custom-span">child</span><span
                                                            class="custom-span">infants</span><span
                                                            class="custom-span">adults</span><span
                                                            class="custom-span">seats</span>
                                                    </div>
                                                    <div class="col-xl-12"> <span>REQ</span><span
                                                            class="custom-span1">{{$ticket->total_adults}}</span><span
                                                            class="custom-span1">{{$ticket->total_children}}</span><span
                                                            class="custom-span1">{{$ticket->total_infants}}</span>
                                                            <span class="custom-span1">{{$ticket->total_adults+$ticket->total_children+$ticket->total_infants}}</span>
                                                    </div>
                                                    <div class="col-xl-12"> <span>CNF</span><span
                                                            class="custom-span1">0</span><span
                                                            class="custom-span1">0</span><span
                                                            class="custom-span1">0</span><span class="custom-span1">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1 card-body-with-right-border">
                                            <div class="card-body pt-4">
                                                <span class="price">{{$ticket->total_adult_price+$ticket->total_child_price+$ticket->total_infants_price}}/- PKR</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-1 card-body-with-right-border">
                                            <div class="card-body pt-4">
                                                <p class="mb-0">
                                                    <i class="bi bi-bell status"></i> <span class="status">{{$ticket->on_hold_status}}</span>
                                                </p>
                                            
                                                
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div class="card-body pt-4">
                                                <a class="btn btn-success" href="{{URL::to('agents/view-booking/'.$ticket->booking_id)}}">View</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @include('agent.partials.footer')
   
            </div>
        </div>
    </div>
    @endsection