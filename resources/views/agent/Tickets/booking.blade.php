    
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
            @include('agent.partials.errors')
            <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tr.accordion-content {
            display: none;
            background-color: #f2f2f2;
        }

        .toggle-button {
            cursor: pointer;
        }

        /* #myButton {
        background: linear-gradient(to right, #e6782b, #235d85) !important;
        
      } */
        #myButton {
            background: linear-gradient(to right,
                    #235d85,
                    #4c7eab,
                    #e6782b) !important;
            /* Other CSS styles for your button */
        }

        .border-light {
            margin: 20px;
        }

        .round-1 {
            border: 1px solid #e2d6d6;
            border-radius: 18px;
        }
        .round-2{
            border: 1px solid #e2d6d6;
            border-radius: 18px;
        }
    </style>
        <div class="dashboard__main">
            <div class="dashboard__content">
                <div class="py-15 px-30 rounded-4 bg-white custom_shadow">
                    <div class="tabs -underline-2 js-tabs">
                        <div class="tabs__content js-tabs-content">
                            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                                <div class="row ">
                                    <div class="col-2">
                                        <div class="row">
                                            <h4 class="lh-14 fw-600">My Airline Booking</h4>
                                            <div class="col-xl-12">
                                                <p>
                                                    Added by Admin-upsk admin

                                                </p>
                                                <p>
                                                    Booked on 23 Oct

                                                </p>
                                                <p>
                                                    AGT#:131 BK#:1777
                                                </p>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Group</th>
                                                        <th scope="col">Inputs</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Group Name</th>
                                                        <td>Jacob</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Airline</th>
                                                        <td>Larry</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Group Type</th>
                                                        <td>Jacob</td>
                                                    </tr>
                                                    <tr>
                                                        <th>PNR</th>
                                                        <td>PNR</td>
                                                    </tr>
                                                    <tr>
                                                        <th>No of seats</th>
                                                        <td>Larry</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead class="text-white bg-dark-4" >
                                                    <tr>
                                                        <th scope="col">Flight No</th>
                                                        <th scope="col">Dep Date</th>
                                                        <th scope="col">Dep Time</th>
                                                        <th scope="col">Sector From</th>
                                                        <th scope="col">From Terminal</th>
                                                        <th scope="col">Sector To</th>
                                                        <th scope="col">To Terminal</th>
                                                        <th scope="col">Class</th>
                                                        <th scope="col">Arr Date</th>
                                                        <th scope="col">Arr Time</th>
                                                        <th scope="col">Meal</th>
                                                        <th scope="col">Baggage</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--  -->
                                        <div data-anim-child="slide-up delay-3" class="col-12 is-in-view">
                                            <div class="rounded-4">
                                                <div class="row y-gap-30 justify-between xl:justify-">
                                                    <div class="overflow-scroll scroll-bar-1">
                                                        <table class="table table-striped">
                                                            <thead class="text-white bg-dark-4" >
                                                                <tr>
                                                                    <th scope="col">Status</th>
                                                                    <th scope="col">Adults</th>
                                                                    <th scope="col">Child</th>
                                                                    <th scope="col">Infants</th>
                                                                    <th scope="col">Total Seats</th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Requested</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>5</td>
                                                                    <td>0</td>

                                                                </tr>

                                                                <tr>
                                                                    <td>Confirmed</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>0</td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Cancelled</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>0</td>

                                                                </tr>
                                                                <tr>
                                                                    <td>Refunded</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>0</td>
                                                                    <td>0</td>

                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--  -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-15 px-30 rounded-4 bg-white custom_shadow" style="margin-top: 20px">
                    <div class="tabs -underline-2 js-tabs">
                        <div class="tabs__content js-tabs-content">
                            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                                <div class="table-responsive">

                                    <table class="table -border-bottom col-12">
                                        <thead class="text-white bg-dark-4" >
                                            <tr>
                                                <th>Sr#</th>
                                                <th>Title</th>
                                                <th>Surname</th>
                                                <th>Given</th>
                                                <th>Type</th>
                                                <th>Passport</th>
                                                <th>DOB</th>
                                                <th>DOI</th>
                                                <th>DOE</th>
                                                <th>Ticket No</th>
                                                <th>Status</th>
                                                <th>Price</th>
                                                <th>Ticket</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="accordion-toggle">
                                                <td>1</td>
                                                <td>John Doe</td>
                                                <td>johndoe@example.com</td>
                                                <td></td>
                                                <td>John Doe</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>johndoe@example.com</td>
                                                <!-- <td class="toggle-button">+</td> -->
                                            </tr>
                                            <tr class="accordion-toggle">
                                                <td>2</td>
                                                <td>Jane Smith</td>
                                                <td>janesmith@example.com</td>
                                                <td></td>
                                                <td>Jane Smith</td>
                                                <td>janesmith@example.com</td>
                                                <td>Jane Smith</td>
                                                <td>janesmith@example.com</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>johndoe@example.com</td>
                                                <!-- <td class="toggle-button">+</td> -->
                                            </tr>
                                            <!-- Add more rows with dummy data as needed -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
                @include('agent.partials.footer')
            </div>
        </div>
    </div>
    @endsection