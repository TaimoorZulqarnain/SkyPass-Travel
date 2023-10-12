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
    <div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">
            <h1 class="text-30 lh-14 fw-500">Dashboard</h1>
            <div class="text-15 text-light-1"></div>
          </div>

          <div class="col-auto">

          </div>
        </div>

        <div class="row y-gap-30">

          <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-15 custom_border_left_blue custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-6">
                  <div class="fw-500 lh-14">Total earnings</div>
                  <div class="text-30 lh-16 fw-600 mt-5 text_blue">12,800</div>
                  <div class="text-15 lh-14 text-light-1 mt-5 text_green"> PKR<span></span></div>
                </div>

                <div class="col-md-6">
                  <img src="{{asset('/admin-assets/img/dashboard/icons/arrow-1.png')}}" alt="icon">
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-30 custom_border_left_oreng custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-7">
                  <div class="fw-500 lh-14">Total expense</div>
                  <div class="text-30 lh-16 fw-600 mt-5 text_oreng">14,200</div>
                  <div class="text-15 lh-14 text-light-1 mt-5 text_green">PKR<span></span></div>
                </div>

                <div class="col-md-5">
                  <img src="{{asset('/admin-assets/img/dashboard/icons/arrow-2.png')}}" alt="icon">
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-30 custom_border_left_sky custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-7">
                  <div class="fw-500 lh-14">Total Bookings</div>
                  <div class="text-30 lh-16 fw-600 mt-5 text_sky">8,100</div>
                  <div class="text-15 lh-14 text-light-1 mt-5 text_red">PKR <span></span></div>
                </div>

                <div class="col-md-5">
                  <img src="{{asset('/admin-assets/img/dashboard/icons/arrow-3.png')}}" alt="icon">
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 col-sm-6 col-12">
            <div class="py-15 px-30 custom_border_left_green custom_rounded bg-white custom_shadow">
              <div class="row y-gap-20 justify-between items-center">
                <div class="col-md-7">
                  <div class="fw-500 lh-14">Total Users</div>
                  <div class="text-30 lh-16 fw-600 mt-5 text_green">22,786</div>
                  <div class="text-15 lh-14 text-light-1 mt-5 text_green">No's of Users <span></span></div>
                </div>

                <div class="col-md-5">
                  <img src="{{asset('/admin-assets/img/dashboard/icons/arrow-4.png')}}" alt="icon">
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="row y-gap-30 pt-20">
          <div class="col-xl-6 col-md-6">
            <div class="py-30 px-30 custom_rounded bg-white custom_shadow">
              <div class="d-flex justify-between items-center heading_border">
                <h2 class="text-18 lh-1 fw-500">
                  Expense Overview
                </h2>
              </div>

              <div class="pt-30">
                <canvas id="lineChart"></canvas>
              </div>
            </div>
          </div>

          <div class="col-xl-6 col-md-6">
            <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
              <div class="d-flex justify-between items-center heading_border">
                <h2 class="text-18 lh-1 fw-500">
                  Bookings
                </h2>
              </div>

              <div class="overflow-scroll scroll-bar-1 pt-30">
                <table class="table-2 col-12">
                  <thead class="">
                    <tr>
                      <th>Sl no.</th>
                      <th>Booking ID</th>
                      <th>Booking type</th>
                      <th>Booking amount</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>01.</td>
                      <td>#JK589V80</td>
                      <td>Serene Airline</td>
                      <td>Pkr754.00</td>
                      <td>
                        <div class="text-center col-12 text-14 fw-500 text-yellow-3">Completed</div>
                      </td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                    <tr>
                      <td>02.</td>
                      <td>#JK589V80</td>
                      <td> Sky-Jet</td>
                      <td>Pkr754.00</td>
                      <td>
                        <div class="text-center col-12 text-14 fw-500 text-yellow-3">Completed</div>
                      </td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                    <tr>
                      <td>03.</td>
                      <td>#JK589V80</td>
                      <td>Emirates</td>
                      <td>Pkr754.00</td>
                      <td>
                        <div class="text-center col-12 text-14 fw-500 text-yellow-3">Completed</div>
                      </td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                    <tr>
                      <td>04.</td>
                      <td>#JK589V80</td>
                      <td>Saudi Airline</td>
                      <td>Pkr754.00</td>
                      <td>
                        <div class="text-center col-12 text-14 fw-500 text-yellow-3">Completed</div>
                      </td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                    <tr>
                      <td>05.</td>
                      <td>#JK589V80</td>
                      <td>Sky-Touch</td>
                      <td>Pkr754.00</td>
                      <td>
                        <div class="text-center col-12 text-14 fw-500 text-red-3">Canceled</div>
                      </td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                    <tr>
                      <td>06.</td>
                      <td>#JK589V80</td>
                      <td>Philpline Airline</td>
                      <td>Pkr754.00</td>
                      <td>
                        <div class="text-center col-12 text-14 fw-500 text-yellow-3">Completed</div>
                      </td>
                      <td><i class="fas fa-eye"></i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    <!--start page footer -->
    @include('agent.partials.footer')
    <!--start page footer -->
      </div>
    </div>
  </div>
  @endsection