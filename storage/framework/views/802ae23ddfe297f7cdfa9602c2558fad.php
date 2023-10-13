<?php $__env->startSection('content'); ?>
<style>
    .nav-tabs .nav-link.active {
        background-color: #FF7A1A;
        color: white !important; /* Force white text color */
    }
</style>
  <!-- Banner Area -->
  <section id="home_four_banner">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <div class="banner_four_text">
            <h4>Welcome to Skypass Travel & Tours</h4>
            <h1>Experience the world together</h1>
            <h3>Find awesome flights and reach your dream destination</h3>
          </div>
        </div>
        <!-- <div class="col-lg-4">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                Carousel items go here 
                <div class="carousel-item active">
                  <img src="<?php echo e(asset('assets/img/banner/banner-5.jpg')); ?>" alt="Slide 1">
                </div>
                <div class="carousel-item">
                  <img src="<?php echo e(asset('assets/img/banner/banner-5.png')); ?>" alt="Slide 2">
                </div>
               
              </div>
            </div>
          </div> -->

        <div class="col-lg-4">
          <div class="banner_four_img">
            <img src="<?php echo e(asset('assets/img/banner/banner-5.png')); ?>" alt="img" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Form Area -->
  <section id="theme_search_form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="theme_search_form_area">
            <div class="theme_search_form_tabbtn">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="flights-tab" data-bs-toggle="tab" data-bs-target="#flights"
                    type="button" role="tab" aria-controls="flights" aria-selected="true">
                    <i class="fas fa-plane-departure"></i>Flights
                  </button>
                </li>
              </ul>
            </div>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="flights" role="tabpanel" aria-labelledby="flights-tab">
              <div class="row">
    <div class="col-lg-12">
        <div class="flight_categories_search">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="oneway-tab" data-bs-toggle="tab"
                        data-bs-target="#oneway_flight" type="button" role="tab" aria-controls="oneway_flight"
                        aria-selected="true">
                        One Way
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="roundtrip-tab" data-bs-toggle="tab" data-bs-target="#roundtrip"
                        type="button" role="tab" aria-controls="roundtrip" aria-selected="false">
                        Roundtrip
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="multi_city-tab" data-bs-toggle="tab" data-bs-target="#multi_city"
                        type="button" role="tab" aria-controls="multi_city" aria-selected="false">
                        Multi city
                    </button>
                </li>
            </ul>
        </div>
    </div>
</div>

                <div class="tab-content" id="myTabContent1">
                  <div class="tab-pane fade show active" id="oneway_flight" role="tabpanel"
                    aria-labelledby="oneway-tab">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="oneway_search_form">
                          <form action="#!">
                            <div class="row">
                              <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="flight_Search_boxed">
                                  <p>From</p>
                                  <input type="text" value="New York" />
                                  <span>JFK - John F. Kennedy
                                    International...</span>
                                  <div class="plan_icon_posation">
                                    <i class="fas fa-plane-departure"></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="flight_Search_boxed">
                                  <p>To</p>
                                  <input type="text" value="London " />
                                  <span>LCY, London city airport </span>
                                  <div class="plan_icon_posation">
                                    <i class="fas fa-plane-arrival"></i>
                                  </div>
                                  <div class="range_plan">
                                  <i class="fas fa-arrow-right"></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="form_search_date">
                                  <div class="flight_Search_boxed date_flex_area">
                                    <div class="Journey_date">
                                      <p>Journey date</p>
                                      <input type="date" value="2022-05-05" />
                                      <span>Thursday</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                <div class="flight_Search_boxed dropdown_passenger_area">
                                  <p>Passenger, Class</p>
                                  <div class="dropdown">
                                    <button class="dropdown-toggle final-count" data-toggle="dropdown" type="button"
                                      id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      0 Passenger
                                    </button>
                                    <div class="dropdown-menu dropdown_passenger_info"
                                      aria-labelledby="dropdownMenuButton1">
                                      <div class="traveller-calulate-persons">
                                        <div class="passengers">
                                          <h6>Passengers</h6>
                                          <div class="passengers-types">
                                            <div class="passengers-type">
                                              <div class="text">
                                                <span class="count pcount">2</span>
                                                <div class="type-label">
                                                  <p>Adult</p>
                                                  <span>12+ yrs</span>
                                                </div>
                                              </div>
                                              <div class="button-set">
                                                <button type="button" class="btn-add">
                                                  <i class="fas fa-plus"></i>
                                                </button>
                                                <button type="button" class="btn-subtract">
                                                  <i class="fas fa-minus"></i>
                                                </button>
                                              </div>
                                            </div>
                                            <div class="passengers-type">
                                              <div class="text">
                                                <span class="count ccount">0</span>
                                                <div class="type-label">
                                                  <p class="fz14 mb-xs-0">
                                                    Children
                                                  </p>
                                                  <span>2 - Less than 12
                                                    yrs</span>
                                                </div>
                                              </div>
                                              <div class="button-set">
                                                <button type="button" class="btn-add-c">
                                                  <i class="fas fa-plus"></i>
                                                </button>
                                                <button type="button" class="btn-subtract-c">
                                                  <i class="fas fa-minus"></i>
                                                </button>
                                              </div>
                                            </div>
                                            <div class="passengers-type">
                                              <div class="text">
                                                <span class="count incount">0</span>
                                                <div class="type-label">
                                                  <p class="fz14 mb-xs-0">
                                                    Infant
                                                  </p>
                                                  <span>Less than 2 yrs</span>
                                                </div>
                                              </div>
                                              <div class="button-set">
                                                <button type="button" class="btn-add-in">
                                                  <i class="fas fa-plus"></i>
                                                </button>
                                                <button type="button" class="btn-subtract-in">
                                                  <i class="fas fa-minus"></i>
                                                </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="cabin-selection">
                                          <h6>Cabin Class</h6>
                                          <div class="cabin-list">
                                            <button type="button" class="label-select-btn">
                                              <span class="muiButton-label">Economy
                                              </span>
                                            </button>
                                            <button type="button" class="label-select-btn active">
                                              <span class="muiButton-label">
                                                Business
                                              </span>
                                            </button>
                                            <button type="button" class="label-select-btn">
                                              <span class="MuiButton-label">First Class
                                              </span>
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <span>Business</span>
                                </div>
                              </div>
                              <div class="col-lg-1 col-md-6 col-sm-12 col-12 top_form_search_button mt-4">
                                <button class="btn btn_theme btn_md py-3 px-4">
                                  Search
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="roundtrip" role="tabpanel" aria-labelledby="roundtrip-tab">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="oneway_search_form">
                          <form action="#!">
                            <div class="row">
                              <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="flight_Search_boxed">
                                  <p>From</p>
                                  <input type="text" value="New York" />
                                  <span>JFK - John F. Kennedy
                                    International...</span>
                                  <div class="plan_icon_posation">
                                    <i class="fas fa-plane-departure"></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="flight_Search_boxed">
                                  <p>To</p>
                                  <input type="text" value="London " />
                                  <span>LCY, London city airport </span>
                                  <div class="plan_icon_posation">
                                    <i class="fas fa-plane-arrival"></i>
                                  </div>
                                  <div class="range_plan">
                                    <i class="fas fa-exchange-alt"></i>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="form_search_date">
                                  <div class="flight_Search_boxed date_flex_area">
                                    <div class="Journey_date">
                                      <p>Journey date</p>
                                      <input type="date" value="2022-05-05" />
                                      <span>Thursday</span>
                                    </div>
                                    <div class="Journey_date">
                                      <p>Return date</p>
                                      <input type="date" value="2022-05-08" />
                                      <span>Saturday</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                <div class="flight_Search_boxed dropdown_passenger_area">
                                  <p>Passenger, Class</p>
                                  <div class="dropdown">
                                    <button class="dropdown-toggle final-count" data-toggle="dropdown" type="button"
                                      id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                      0 Passenger
                                    </button>
                                    <div class="dropdown-menu dropdown_passenger_info"
                                      aria-labelledby="dropdownMenuButton1">
                                      <div class="traveller-calulate-persons">
                                        <div class="passengers">
                                          <h6>Passengers</h6>
                                          <div class="passengers-types">
                                            <div class="passengers-type">
                                              <div class="text">
                                                <span class="count pcount">2</span>
                                                <div class="type-label">
                                                  <p>Adult</p>
                                                  <span>12+ yrs</span>
                                                </div>
                                              </div>
                                              <div class="button-set">
                                                <button type="button" class="btn-add">
                                                  <i class="fas fa-plus"></i>
                                                </button>
                                                <button type="button" class="btn-subtract">
                                                  <i class="fas fa-minus"></i>
                                                </button>
                                              </div>
                                            </div>
                                            <div class="passengers-type">
                                              <div class="text">
                                                <span class="count ccount">0</span>
                                                <div class="type-label">
                                                  <p class="fz14 mb-xs-0">
                                                    Children
                                                  </p>
                                                  <span>2 - Less than 12
                                                    yrs</span>
                                                </div>
                                              </div>
                                              <div class="button-set">
                                                <button type="button" class="btn-add-c">
                                                  <i class="fas fa-plus"></i>
                                                </button>
                                                <button type="button" class="btn-subtract-c">
                                                  <i class="fas fa-minus"></i>
                                                </button>
                                              </div>
                                            </div>
                                            <div class="passengers-type">
                                              <div class="text">
                                                <span class="count incount">0</span>
                                                <div class="type-label">
                                                  <p class="fz14 mb-xs-0">
                                                    Infant
                                                  </p>
                                                  <span>Less than 2 yrs</span>
                                                </div>
                                              </div>
                                              <div class="button-set">
                                                <button type="button" class="btn-add-in">
                                                  <i class="fas fa-plus"></i>
                                                </button>
                                                <button type="button" class="btn-subtract-in">
                                                  <i class="fas fa-minus"></i>
                                                </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="cabin-selection">
                                          <h6>Cabin Class</h6>
                                          <div class="cabin-list">
                                            <button type="button" class="label-select-btn">
                                              <span class="muiButton-label">Economy
                                              </span>
                                            </button>
                                            <button type="button" class="label-select-btn active">
                                              <span class="muiButton-label">
                                                Business
                                              </span>
                                            </button>
                                            <button type="button" class="label-select-btn">
                                              <span class="MuiButton-label">First Class
                                              </span>
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <span>Business</span>
                                </div>
                              </div>
                            </div>
                            <div class="top_form_search_button">
                              <button class="btn btn_theme btn_md">
                                Search
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="multi_city" role="tabpanel" aria-labelledby="multi_city-tab">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="oneway_search_form">
                          <form action="#!">
                            <div class="multi_city_form_wrapper">
                              <div class="multi_city_form">
                                <div class="row">
                                  <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="flight_Search_boxed">
                                      <p>From</p>
                                      <input type="text" value="New York" />
                                      <span>DAC, Hazrat Shahajalal
                                        International...</span>
                                      <div class="plan_icon_posation">
                                        <i class="fas fa-plane-departure"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="flight_Search_boxed">
                                      <p>To</p>
                                      <input type="text" value="London " />
                                      <span>LCY, London city airport </span>
                                      <div class="plan_icon_posation">
                                        <i class="fas fa-plane-arrival"></i>
                                      </div>
                                      <div class="range_plan">
                                        <i class="fas fa-exchange-alt"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="form_search_date">
                                      <div class="flight_Search_boxed date_flex_area">
                                        <div class="Journey_date">
                                          <p>Journey date</p>
                                          <input type="date" value="2022-05-05" />
                                          <span>Thursday</span>
                                        </div>
                                        <div class="Journey_date">
                                          <p>Return date</p>
                                          <input type="date" value="2022-05-10" />
                                          <span>Saturday</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                      <p>Passenger, Class</p>
                                      <div class="dropdown">
                                        <button class="dropdown-toggle final-count" data-toggle="dropdown" type="button"
                                          id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          0 Passenger
                                        </button>
                                        <div class="dropdown-menu dropdown_passenger_info"
                                          aria-labelledby="dropdownMenuButton1">
                                          <div class="traveller-calulate-persons">
                                            <div class="passengers">
                                              <h6>Passengers</h6>
                                              <div class="passengers-types">
                                                <div class="passengers-type">
                                                  <div class="text">
                                                    <span class="count pcount">2</span>
                                                    <div class="type-label">
                                                      <p>Adult</p>
                                                      <span>12+ yrs</span>
                                                    </div>
                                                  </div>
                                                  <div class="button-set">
                                                    <button type="button" class="btn-add">
                                                      <i class="fas fa-plus"></i>
                                                    </button>
                                                    <button type="button" class="btn-subtract">
                                                      <i class="fas fa-minus"></i>
                                                    </button>
                                                  </div>
                                                </div>
                                                <div class="passengers-type">
                                                  <div class="text">
                                                    <span class="count ccount">0</span>
                                                    <div class="type-label">
                                                      <p class="fz14 mb-xs-0">
                                                        Children
                                                      </p>
                                                      <span>2 - Less than 12
                                                        yrs</span>
                                                    </div>
                                                  </div>
                                                  <div class="button-set">
                                                    <button type="button" class="btn-add-c">
                                                      <i class="fas fa-plus"></i>
                                                    </button>
                                                    <button type="button" class="btn-subtract-c">
                                                      <i class="fas fa-minus"></i>
                                                    </button>
                                                  </div>
                                                </div>
                                                <div class="passengers-type">
                                                  <div class="text">
                                                    <span class="count incount">0</span>
                                                    <div class="type-label">
                                                      <p class="fz14 mb-xs-0">
                                                        Infant
                                                      </p>
                                                      <span>Less than 2 yrs</span>
                                                    </div>
                                                  </div>
                                                  <div class="button-set">
                                                    <button type="button" class="btn-add-in">
                                                      <i class="fas fa-plus"></i>
                                                    </button>
                                                    <button type="button" class="btn-subtract-in">
                                                      <i class="fas fa-minus"></i>
                                                    </button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="cabin-selection">
                                              <h6>Cabin Class</h6>
                                              <div class="cabin-list">
                                                <button type="button" class="label-select-btn">
                                                  <span class="muiButton-label">Economy
                                                  </span>
                                                </button>
                                                <button type="button" class="label-select-btn active">
                                                  <span class="muiButton-label">
                                                    Business
                                                  </span>
                                                </button>
                                                <button type="button" class="label-select-btn">
                                                  <span class="MuiButton-label">First Class
                                                  </span>
                                                </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <span>Business</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="multi_city_form">
                                <div class="row">
                                  <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="flight_Search_boxed">
                                      <p>From</p>
                                      <input type="text" value="New York" />
                                      <span>DAC, Hazrat Shahajalal
                                        International...</span>
                                      <div class="plan_icon_posation">
                                        <i class="fas fa-plane-departure"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="flight_Search_boxed">
                                      <p>To</p>
                                      <input type="text" value="London " />
                                      <span>LCY, London city airport </span>
                                      <div class="plan_icon_posation">
                                        <i class="fas fa-plane-arrival"></i>
                                      </div>
                                      <div class="range_plan">
                                        <i class="fas fa-exchange-alt"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="form_search_date">
                                      <div class="flight_Search_boxed date_flex_area">
                                        <div class="Journey_date">
                                          <p>Journey date</p>
                                          <input type="date" value="2022-05-05" />
                                          <span>Thursday</span>
                                        </div>
                                        <div class="Journey_date">
                                          <p>Return date</p>
                                          <input type="date" value="2022-05-12" />
                                          <span>Saturday</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                      <p>Passenger, Class</p>
                                      <div class="dropdown">
                                        <button class="dropdown-toggle final-count" data-toggle="dropdown" type="button"
                                          id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          0 Passenger
                                        </button>
                                        <div class="dropdown-menu dropdown_passenger_info"
                                          aria-labelledby="dropdownMenuButton1">
                                          <div class="traveller-calulate-persons">
                                            <div class="passengers">
                                              <h6>Passengers</h6>
                                              <div class="passengers-types">
                                                <div class="passengers-type">
                                                  <div class="text">
                                                    <span class="count pcount">2</span>
                                                    <div class="type-label">
                                                      <p>Adult</p>
                                                      <span>12+ yrs</span>
                                                    </div>
                                                  </div>
                                                  <div class="button-set">
                                                    <button type="button" class="btn-add">
                                                      <i class="fas fa-plus"></i>
                                                    </button>
                                                    <button type="button" class="btn-subtract">
                                                      <i class="fas fa-minus"></i>
                                                    </button>
                                                  </div>
                                                </div>
                                                <div class="passengers-type">
                                                  <div class="text">
                                                    <span class="count ccount">0</span>
                                                    <div class="type-label">
                                                      <p class="fz14 mb-xs-0">
                                                        Children
                                                      </p>
                                                      <span>2 - Less than 12
                                                        yrs</span>
                                                    </div>
                                                  </div>
                                                  <div class="button-set">
                                                    <button type="button" class="btn-add-c">
                                                      <i class="fas fa-plus"></i>
                                                    </button>
                                                    <button type="button" class="btn-subtract-c">
                                                      <i class="fas fa-minus"></i>
                                                    </button>
                                                  </div>
                                                </div>
                                                <div class="passengers-type">
                                                  <div class="text">
                                                    <span class="count incount">0</span>
                                                    <div class="type-label">
                                                      <p class="fz14 mb-xs-0">
                                                        Infant
                                                      </p>
                                                      <span>Less than 2 yrs</span>
                                                    </div>
                                                  </div>
                                                  <div class="button-set">
                                                    <button type="button" class="btn-add-in">
                                                      <i class="fas fa-plus"></i>
                                                    </button>
                                                    <button type="button" class="btn-subtract-in">
                                                      <i class="fas fa-minus"></i>
                                                    </button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="cabin-selection">
                                              <h6>Cabin Class</h6>
                                              <div class="cabin-list">
                                                <button type="button" class="label-select-btn">
                                                  <span class="muiButton-label">Economy
                                                  </span>
                                                </button>
                                                <button type="button" class="label-select-btn active">
                                                  <span class="muiButton-label">
                                                    Business
                                                  </span>
                                                </button>
                                                <button type="button" class="label-select-btn">
                                                  <span class="MuiButton-label">First Class
                                                  </span>
                                                </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <span>Business</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="add_multy_form">
                                  <button type="button" id="addMulticityRow">
                                    + Add another flight
                                  </button>
                                </div>
                              </div>
                            </div>
                            <div class="top_form_search_button">
                              <button class="btn btn_theme btn_md">
                                Search
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tours" role="tabpanel" aria-labelledby="tours-tab">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="tour_search_form">
                      <form action="#!">
                        <div class="row">
                          <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="flight_Search_boxed">
                              <p>Destination</p>
                              <input type="text" placeholder="Where are you going?" />
                              <span>Where are you going?</span>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form_search_date">
                              <div class="flight_Search_boxed date_flex_area">
                                <div class="Journey_date">
                                  <p>Journey date</p>
                                  <input type="date" value="2022-05-03" />
                                  <span>Thursday</span>
                                </div>
                                <div class="Journey_date">
                                  <p>Return date</p>
                                  <input type="date" value="2022-05-05" />
                                  <span>Thursday</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                            <div class="flight_Search_boxed dropdown_passenger_area">
                              <p>Passenger, Class</p>
                              <div class="dropdown">
                                <button class="dropdown-toggle final-count" data-toggle="dropdown" type="button"
                                  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  0 Passenger
                                </button>
                                <div class="dropdown-menu dropdown_passenger_info"
                                  aria-labelledby="dropdownMenuButton1">
                                  <div class="traveller-calulate-persons">
                                    <div class="passengers">
                                      <h6>Passengers</h6>
                                      <div class="passengers-types">
                                        <div class="passengers-type">
                                          <div class="text">
                                            <span class="count pcount">2</span>
                                            <div class="type-label">
                                              <p>Adult</p>
                                              <span>12+ yrs</span>
                                            </div>
                                          </div>
                                          <div class="button-set">
                                            <button type="button" class="btn-add">
                                              <i class="fas fa-plus"></i>
                                            </button>
                                            <button type="button" class="btn-subtract">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <div class="passengers-type">
                                          <div class="text">
                                            <span class="count ccount">0</span>
                                            <div class="type-label">
                                              <p class="fz14 mb-xs-0">
                                                Children
                                              </p>
                                              <span>2 - Less than 12 yrs</span>
                                            </div>
                                          </div>
                                          <div class="button-set">
                                            <button type="button" class="btn-add-c">
                                              <i class="fas fa-plus"></i>
                                            </button>
                                            <button type="button" class="btn-subtract-c">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <div class="passengers-type">
                                          <div class="text">
                                            <span class="count incount">0</span>
                                            <div class="type-label">
                                              <p class="fz14 mb-xs-0">
                                                Infant
                                              </p>
                                              <span>Less than 2 yrs</span>
                                            </div>
                                          </div>
                                          <div class="button-set">
                                            <button type="button" class="btn-add-in">
                                              <i class="fas fa-plus"></i>
                                            </button>
                                            <button type="button" class="btn-subtract-in">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="cabin-selection">
                                      <h6>Cabin Class</h6>
                                      <div class="cabin-list">
                                        <button type="button" class="label-select-btn">
                                          <span class="muiButton-label">Economy
                                          </span>
                                        </button>
                                        <button type="button" class="label-select-btn active">
                                          <span class="muiButton-label">
                                            Business
                                          </span>
                                        </button>
                                        <button type="button" class="label-select-btn">
                                          <span class="MuiButton-label">First Class
                                          </span>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <span>Business</span>
                            </div>
                          </div>
                          <div class="top_form_search_button">
                            <button class="btn btn_theme btn_md">
                              Search
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="tour_search_form">
                      <form action="#!">
                        <div class="row">
                          <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="flight_Search_boxed">
                              <p>Destination</p>
                              <input type="text" placeholder="Where are you going?" />
                              <span>Where are you going?</span>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form_search_date">
                              <div class="flight_Search_boxed date_flex_area">
                                <div class="Journey_date">
                                  <p>Journey date</p>
                                  <input type="date" value="2022-05-03" />
                                  <span>Thursday</span>
                                </div>
                                <div class="Journey_date">
                                  <p>Return date</p>
                                  <input type="date" value="2022-05-05" />
                                  <span>Thursday</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                            <div class="flight_Search_boxed dropdown_passenger_area">
                              <p>Passenger, Class</p>
                              <div class="dropdown">
                                <button class="dropdown-toggle final-count" data-toggle="dropdown" type="button"
                                  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  0 Passenger
                                </button>
                                <div class="dropdown-menu dropdown_passenger_info"
                                  aria-labelledby="dropdownMenuButton1">
                                  <div class="traveller-calulate-persons">
                                    <div class="passengers">
                                      <h6>Passengers</h6>
                                      <div class="passengers-types">
                                        <div class="passengers-type">
                                          <div class="text">
                                            <span class="count pcount">2</span>
                                            <div class="type-label">
                                              <p>Adult</p>
                                              <span>12+ yrs</span>
                                            </div>
                                          </div>
                                          <div class="button-set">
                                            <button type="button" class="btn-add">
                                              <i class="fas fa-plus"></i>
                                            </button>
                                            <button type="button" class="btn-subtract">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <div class="passengers-type">
                                          <div class="text">
                                            <span class="count ccount">0</span>
                                            <div class="type-label">
                                              <p class="fz14 mb-xs-0">
                                                Children
                                              </p>
                                              <span>2 - Less than 12 yrs</span>
                                            </div>
                                          </div>
                                          <div class="button-set">
                                            <button type="button" class="btn-add-c">
                                              <i class="fas fa-plus"></i>
                                            </button>
                                            <button type="button" class="btn-subtract-c">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <div class="passengers-type">
                                          <div class="text">
                                            <span class="count incount">0</span>
                                            <div class="type-label">
                                              <p class="fz14 mb-xs-0">
                                                Infant
                                              </p>
                                              <span>Less than 2 yrs</span>
                                            </div>
                                          </div>
                                          <div class="button-set">
                                            <button type="button" class="btn-add-in">
                                              <i class="fas fa-plus"></i>
                                            </button>
                                            <button type="button" class="btn-subtract-in">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="cabin-selection">
                                      <h6>Cabin Class</h6>
                                      <div class="cabin-list">
                                        <button type="button" class="label-select-btn">
                                          <span class="muiButton-label">Economy
                                          </span>
                                        </button>
                                        <button type="button" class="label-select-btn active">
                                          <span class="muiButton-label">
                                            Business
                                          </span>
                                        </button>
                                        <button type="button" class="label-select-btn">
                                          <span class="MuiButton-label">First Class
                                          </span>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <span>Business</span>
                            </div>
                          </div>
                          <div class="top_form_search_button">
                            <button class="btn btn_theme btn_md">
                              Search
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="visa-application" role="tabpanel" aria-labelledby="visa-tab">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="tour_search_form">
                      <form action="#!">
                        <div class="row">
                          <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                            <div class="flight_Search_boxed">
                              <p>Select country</p>
                              <input type="text" value="United states" />
                              <span>Where are you going?</span>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                            <div class="flight_Search_boxed">
                              <p>Your nationality</p>
                              <input type="text" value="Bangladesh" />
                              <span>Where are you going?</span>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form_search_date">
                              <div class="flight_Search_boxed date_flex_area">
                                <div class="Journey_date">
                                  <p>Entry date</p>
                                  <input type="date" value="2022-05-03" />
                                  <span>Thursday</span>
                                </div>
                                <div class="Journey_date">
                                  <p>Exit date</p>
                                  <input type="date" value="2022-05-05" />
                                  <span>Thursday</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                            <div class="flight_Search_boxed dropdown_passenger_area">
                              <p>Traveller, Class</p>
                              <div class="dropdown">
                                <button class="dropdown-toggle final-count" data-toggle="dropdown" type="button"
                                  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  0 Traveller
                                </button>
                                <div class="dropdown-menu dropdown_passenger_info"
                                  aria-labelledby="dropdownMenuButton1">
                                  <div class="traveller-calulate-persons">
                                    <div class="passengers">
                                      <h6>Traveller</h6>
                                      <div class="passengers-types">
                                        <div class="passengers-type">
                                          <div class="text">
                                            <span class="count pcount">2</span>
                                            <div class="type-label">
                                              <p>Adult</p>
                                              <span>12+ yrs</span>
                                            </div>
                                          </div>
                                          <div class="button-set">
                                            <button type="button" class="btn-add">
                                              <i class="fas fa-plus"></i>
                                            </button>
                                            <button type="button" class="btn-subtract">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <div class="passengers-type">
                                          <div class="text">
                                            <span class="count ccount">0</span>
                                            <div class="type-label">
                                              <p class="fz14 mb-xs-0">
                                                Children
                                              </p>
                                              <span>2 - Less than 12 yrs</span>
                                            </div>
                                          </div>
                                          <div class="button-set">
                                            <button type="button" class="btn-add-c">
                                              <i class="fas fa-plus"></i>
                                            </button>
                                            <button type="button" class="btn-subtract-c">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <div class="passengers-type">
                                          <div class="text">
                                            <span class="count incount">0</span>
                                            <div class="type-label">
                                              <p class="fz14 mb-xs-0">
                                                Infant
                                              </p>
                                              <span>Less than 2 yrs</span>
                                            </div>
                                          </div>
                                          <div class="button-set">
                                            <button type="button" class="btn-add-in">
                                              <i class="fas fa-plus"></i>
                                            </button>
                                            <button type="button" class="btn-subtract-in">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <span>Business</span>
                            </div>
                          </div>
                          <div class="top_form_search_button">
                            <button class="btn btn_theme btn_md">
                              Search
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="apartments" role="tabpanel" aria-labelledby="apartments-tab">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="tour_search_form">
                      <form action="#!">
                        <div class="row">
                          <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="flight_Search_boxed">
                              <p>Destination</p>
                              <input type="text" placeholder="Where are you going?" />
                              <span>Where are you going?</span>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="form_search_date">
                              <div class="flight_Search_boxed date_flex_area">
                                <div class="Journey_date">
                                  <p>Journey date</p>
                                  <input type="date" value="2022-05-03" />
                                  <span>Thursday</span>
                                </div>
                                <div class="Journey_date">
                                  <p>Return date</p>
                                  <input type="date" value="2022-05-05" />
                                  <span>Thursday</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                            <div class="flight_Search_boxed dropdown_passenger_area">
                              <p>Passenger, Class</p>
                              <div class="dropdown">
                                <button class="dropdown-toggle final-count" data-toggle="dropdown" type="button"
                                  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                  0 Traveler
                                </button>
                                <div class="dropdown-menu dropdown_passenger_info"
                                  aria-labelledby="dropdownMenuButton1">
                                  <div class="traveller-calulate-persons">
                                    <div class="passengers">
                                      <h6>Passengers</h6>
                                      <div class="passengers-types">
                                        <div class="passengers-type">
                                          <div class="text">
                                            <span class="count pcount">2</span>
                                            <div class="type-label">
                                              <p>Adult</p>
                                              <span>12+ yrs</span>
                                            </div>
                                          </div>
                                          <div class="button-set">
                                            <button type="button" class="btn-add">
                                              <i class="fas fa-plus"></i>
                                            </button>
                                            <button type="button" class="btn-subtract">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <div class="passengers-type">
                                          <div class="text">
                                            <span class="count ccount">0</span>
                                            <div class="type-label">
                                              <p class="fz14 mb-xs-0">
                                                Children
                                              </p>
                                              <span>2 - Less than 12 yrs</span>
                                            </div>
                                          </div>
                                          <div class="button-set">
                                            <button type="button" class="btn-add-c">
                                              <i class="fas fa-plus"></i>
                                            </button>
                                            <button type="button" class="btn-subtract-c">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                        <div class="passengers-type">
                                          <div class="text">
                                            <span class="count incount">0</span>
                                            <div class="type-label">
                                              <p class="fz14 mb-xs-0">
                                                Infant
                                              </p>
                                              <span>Less than 2 yrs</span>
                                            </div>
                                          </div>
                                          <div class="button-set">
                                            <button type="button" class="btn-add-in">
                                              <i class="fas fa-plus"></i>
                                            </button>
                                            <button type="button" class="btn-subtract-in">
                                              <i class="fas fa-minus"></i>
                                            </button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="cabin-selection">
                                      <h6>Cabin Class</h6>
                                      <div class="cabin-list">
                                        <button type="button" class="label-select-btn">
                                          <span class="muiButton-label">Economy
                                          </span>
                                        </button>
                                        <button type="button" class="label-select-btn active">
                                          <span class="muiButton-label">
                                            Business
                                          </span>
                                        </button>
                                        <button type="button" class="label-select-btn">
                                          <span class="MuiButton-label">First Class
                                          </span>
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <span>Business</span>
                            </div>
                          </div>
                          <div class="top_form_search_button">
                            <button class="btn btn_theme btn_md">
                              Search
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="bus" role="tabpanel" aria-labelledby="bus-tab">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="tour_search_form">
                      <form action="#!">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="oneway_search_form">
                              <form action="#!">
                                <div class="row">
                                  <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="flight_Search_boxed">
                                      <p>From</p>
                                      <input type="text" value="Dhaka" />
                                      <span>Bus Trtminal</span>
                                      <div class="plan_icon_posation">
                                        <i class="fas fa-plane-departure"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                                    <div class="flight_Search_boxed">
                                      <p>To</p>
                                      <input type="text" value="Cox’s Bazar " />
                                      <span>Bus Trtminal</span>
                                      <div class="plan_icon_posation">
                                        <i class="fas fa-plane-arrival"></i>
                                      </div>
                                      <div class="range_plan">
                                        <i class="fas fa-exchange-alt"></i>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                    <div class="form_search_date">
                                      <div class="flight_Search_boxed date_flex_area">
                                        <div class="Journey_date">
                                          <p>Journey date</p>
                                          <input type="date" value="2022-05-05" />
                                          <span>Thursday</span>
                                        </div>
                                        <div class="Journey_date">
                                          <p>Return date</p>
                                          <input type="date" value="2022-05-08" />
                                          <span>Saturday</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                                    <div class="flight_Search_boxed dropdown_passenger_area">
                                      <p>Passenger, Class</p>
                                      <div class="dropdown">
                                        <button class="dropdown-toggle final-count" data-toggle="dropdown" type="button"
                                          id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                          0 Passenger
                                        </button>
                                        <div class="dropdown-menu dropdown_passenger_info"
                                          aria-labelledby="dropdownMenuButton1">
                                          <div class="traveller-calulate-persons">
                                            <div class="passengers">
                                              <h6>Passengers</h6>
                                              <div class="passengers-types">
                                                <div class="passengers-type">
                                                  <div class="text">
                                                    <span class="count pcount">2</span>
                                                    <div class="type-label">
                                                      <p>Adult</p>
                                                      <span>12+ yrs</span>
                                                    </div>
                                                  </div>
                                                  <div class="button-set">
                                                    <button type="button" class="btn-add">
                                                      <i class="fas fa-plus"></i>
                                                    </button>
                                                    <button type="button" class="btn-subtract">
                                                      <i class="fas fa-minus"></i>
                                                    </button>
                                                  </div>
                                                </div>
                                                <div class="passengers-type">
                                                  <div class="text">
                                                    <span class="count ccount">0</span>
                                                    <div class="type-label">
                                                      <p class="fz14 mb-xs-0">
                                                        Children
                                                      </p>
                                                      <span>2 - Less than 12
                                                        yrs</span>
                                                    </div>
                                                  </div>
                                                  <div class="button-set">
                                                    <button type="button" class="btn-add-c">
                                                      <i class="fas fa-plus"></i>
                                                    </button>
                                                    <button type="button" class="btn-subtract-c">
                                                      <i class="fas fa-minus"></i>
                                                    </button>
                                                  </div>
                                                </div>
                                                <div class="passengers-type">
                                                  <div class="text">
                                                    <span class="count incount">0</span>
                                                    <div class="type-label">
                                                      <p class="fz14 mb-xs-0">
                                                        Infant
                                                      </p>
                                                      <span>Less than 2 yrs</span>
                                                    </div>
                                                  </div>
                                                  <div class="button-set">
                                                    <button type="button" class="btn-add-in">
                                                      <i class="fas fa-plus"></i>
                                                    </button>
                                                    <button type="button" class="btn-subtract-in">
                                                      <i class="fas fa-minus"></i>
                                                    </button>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="cabin-selection">
                                              <h6>Cabin Class</h6>
                                              <div class="cabin-list">
                                                <button type="button" class="label-select-btn">
                                                  <span class="muiButton-label">Economy
                                                  </span>
                                                </button>
                                                <button type="button" class="label-select-btn active">
                                                  <span class="muiButton-label">
                                                    Business
                                                  </span>
                                                </button>
                                                <button type="button" class="label-select-btn">
                                                  <span class="MuiButton-label">First Class
                                                  </span>
                                                </button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <span>Business</span>
                                    </div>
                                  </div>
                                  <div class="top_form_search_button">
                                    <button class="btn btn_theme btn_md">
                                      Search
                                    </button>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="cruise" role="tabpanel" aria-labelledby="cruise-tab">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="tour_search_form">
                      <form action="#!">
                        <div class="row">
                          <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="flight_Search_boxed">
                              <p>Destination</p>
                              <input type="text" placeholder="Where are you going?" />
                              <span>Where are you going?</span>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="flight_Search_boxed">
                              <p>Cruise line</p>
                              <input type="text" placeholder="American line" />
                              <span>Choose your cruise</span>
                            </div>
                          </div>
                          <div class="col-lg-2 col-md-6 col-sm-12 col-12">
                            <div class="form_search_date">
                              <div class="flight_Search_boxed date_flex_area">
                                <div class="Journey_date">
                                  <p>Journey date</p>
                                  <input type="date" value="2022-05-03" />
                                  <span>Thursday</span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="top_form_search_button">
                            <button class="btn btn_theme btn_md">
                              Search
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  -->

  <!-- About Area -->
  <section id="about_two_area" class="section_padding_top">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12 col-12">
          <div class="about_two_left">
            <div class="about_two_left_top">
              <h5>About us</h5>
              <h2>Discover your all the destinations with us!</h2>
              <p>
                Sint est eu sit ipsum enim amet esse sunt incididunt. Occaecat aliquip commodo ipsum
                officia
                in Lorem commodo aliquip dolore. Nisi domip excepteur commodo ea nostrud mollit.
              </p>
            </div>
            <div class="about_two_left_middel">
              <div class="about_two_item">
                <div class="about_two_item_icon">
                  <img src="<?php echo e(asset('assets/img/icon/about-1.png')); ?>" alt="icon">
                </div>
                <div class="about_two_item_text">
                  <h3>Experienced tour guide</h3>
                  <p>Dolore ullamco voluptate duis est voluptate exercitation officia ad qui nostrud
                    adipisicing non.</p>
                </div>
              </div>
              <div class="about_two_item">
                <div class="about_two_item_icon">
                  <img src="<?php echo e(asset('assets/img/icon/about-2.png')); ?>" alt="icon">
                </div>
                <div class="about_two_item_text">
                  <h3>Affordable tour packages</h3>
                  <p>Dolore ullamco voluptate duis est voluptate exercitation officia ad qui nostrud
                    adipisicing non.</p>
                </div>
              </div>
              <div class="about_two_item">
                <div class="about_two_item_icon">
                  <img src="<?php echo e(asset('assets/img/icon/about-3.png')); ?>" alt="icon">
                </div>
                <div class="about_two_item_text">
                  <h3>Explore top places over the world</h3>
                  <p>Dolore ullamco voluptate duis est voluptate exercitation officia ad qui nostrud
                    adipisicing non.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
          <div class="about_two_left_img">
            <img src="<?php echo e(asset('assets/img/common/about_two.png')); ?>" alt="img">
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- Tour Types Area -->
  <section id="popular_tours_four" class="section_padding_top">
    <div class="container">
      <!-- Section Heading -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="section_heading_left">
            <h2>What We Offer</h2>
            <p>Nostrud aliqua ipsum dolore velit labore nulla fugiat.</p>
          </div>
        </div>
      </div>
      <!-- inner content -->
      <div class="row">
        <div class="col-lg-12">
          <div class="tour_type_slider button_style_top_left owl-theme owl-carousel">
            <div class="tour_type_boxed">
              <img src="<?php echo e(asset('assets/img/icon/forest.png')); ?>" alt="icon" />
              <h3>Explore Forest</h3>
              <p>Package starts from $120</p>
            </div>
            <div class="tour_type_boxed">
              <img src="<?php echo e(asset('assets/img/icon/bag1.png')); ?>" alt="icon" />
              <h3>Lone Travel</h3>
              <p>Package starts from $300</p>
            </div>
            <div class="tour_type_boxed">
              <img src="<?php echo e(asset('assets/img/icon/tour.png')); ?>" alt="icon" />
              <h3>Adventure Tour</h3>
              <p>Package starts from $415</p>
            </div>
            <div class="tour_type_boxed">
              <img src="<?php echo e(asset('assets/img/icon/family.png')); ?>" alt="icon" />
              <h3>Family Tour</h3>
              <p>Package starts from $220</p>
            </div>
            <div class="tour_type_boxed">
              <img src="<?php echo e(asset('assets/img/icon/beach.png')); ?>" alt="icon" />
              <h3>Beach Tour</h3>
              <p>Package starts from $220</p>
            </div>
            <div class="tour_type_boxed">
              <img src="<?php echo e(asset('assets/img/icon/bag.png')); ?>" alt="icon" />
              <h3>Lone Travel</h3>
              <p>Package starts from $300</p>
            </div>
            <div class="tour_type_boxed">
              <img src="<?php echo e(asset('assets/img/icon/tour.png')); ?>" alt="icon" />
              <h3>Adventure Tour</h3>
              <p>Package starts from $415</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Destinations Area -->

  <!-- Top Deals and Discounts Area -->
  <section id="top_details_area" class="section_padding_top">
    <div class="container">
      <!-- Section Heading -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="section_heading_left">
            <h2>Featured</h2>
            <p>Nostrud aliqua ipsum dolore velit labore nulla fugiat.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="top_details_four_item">
            <img src="<?php echo e(asset('assets/img/banner/banner-5.png')); ?>" alt="" />
            <div class="top_details_posation">
              <p>Get winter deal</p>
              <h3>Book your ticket to enjoy</h3>
              <a href="#!" class="btn btn_theme btn_md">Book now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="top_details_four_slider button_style_top_left owl-theme owl-carousel">
            <div class="common_card_four">
              <div class="common_card_four_img">
                <a href="tour-search.html">
                  <img src="<?php echo e(asset('assets/img/tour/popular-1.png')); ?>" alt="img" />
                </a>
              </div>
              <div class="common_card_four_text">
                <ul class="common_card_four_list">
                  <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                  <li>Family tour</li>
                </ul>
                <h3>
                  <a href="tour-search.html">London aliqua irure proident esse</a>
                </h3>
                <p>
                  <i class="fas fa-map-marker-alt"></i>London, United Kingdom
                </p>
                <div class="common_card_four_bottom">
                  <div class="common_card_four_bottom_left">
                    <h4>PKR 25000</h4>
                  </div>
                  <div class=" add_to_cart">
                    <button class="btn btn_theme btn_md px-4 py-2">
                      <i class="bi bi-cart-dash"></i> Book Now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="common_card_four">
              <div class="common_card_four_img">
                <a href="tour-search.html">
                  <img src="<?php echo e(asset('assets/img/tour/popular-2.png')); ?>" alt="img" />
                </a>
              </div>
              <div class="common_card_four_text">
                <ul class="common_card_four_list">
                  <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                  <li>Family tour</li>
                </ul>
                <h3>
                  <a href="tour-search.html">Sydney irure dolor anim exerciton</a>
                </h3>
                <p>
                  <i class="fas fa-map-marker-alt"></i>London, United Kingdom
                </p>
                <div class="common_card_four_bottom">
                  <div class="common_card_four_bottom_left">
                    <h4>PKR 25000</h4>
                  </div>
                  <div class=" add_to_cart">
                    <button class="btn btn_theme btn_md px-4 py-2">
                      <i class="bi bi-cart-dash"></i> Book Now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="common_card_four">
              <div class="common_card_four_img">
                <a href="tour-search.html">
                  <img src="<?php echo e(asset('assets/img/tour/popular-3.png')); ?>" alt="img" />
                </a>
              </div>
              <div class="common_card_four_text">
                <ul class="common_card_four_list">
                  <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                  <li>Family tour</li>
                </ul>
                <h3>
                  <a href="tour-search.html">Phuket non ullamco amet dolore</a>
                </h3>
                <p>
                  <i class="fas fa-map-marker-alt"></i>London, United Kingdom
                </p>
                <div class="common_card_four_bottom">
                  <div class="common_card_four_bottom_left">
                    <h4>PKR 25000</h4>
                  </div>
                  <div class=" add_to_cart">
                    <button class="btn btn_theme btn_md px-4 py-2">
                      <i class="bi bi-cart-dash"></i> Book Now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="common_card_four">
              <div class="common_card_four_img">
                <a href="tour-search.html">
                  <img src="<?php echo e(asset('assets/img/tour/popular-4.png')); ?>" alt="img" />
                </a>
              </div>
              <div class="common_card_four_text">
                <ul class="common_card_four_list">
                  <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                  <li>Family tour</li>
                </ul>
                <h3>
                  <a href="tour-search.html">Gangtok magna amet voluptate</a>
                </h3>
                <p>
                  <i class="fas fa-map-marker-alt"></i>London, United Kingdom
                </p>
                <div class="common_card_four_bottom">
                  <div class="common_card_four_bottom_left">
                    <h4>PKR 25000</h4>
                  </div>
                  <div class=" add_to_cart">
                    <button class="btn btn_theme btn_md px-4 py-2">
                      <i class="bi bi-cart-dash"></i> Book Now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="common_card_four">
              <div class="common_card_four_img">
                <a href="tour-search.html">
                  <img src="<?php echo e(asset('assets/img/tour/popular-2.png')); ?>" alt="img" />
                </a>
              </div>
              <div class="common_card_four_text">
                <ul class="common_card_four_list">
                  <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                  <li>Family tour</li>
                </ul>
                <h3>
                  <a href="tour-search.html">Sydney irure dolor anim exerciton</a>
                </h3>
                <p>
                  <i class="fas fa-map-marker-alt"></i>London, United Kingdom
                </p>
                <div class="common_card_four_bottom">
                  <div class="common_card_four_bottom_left">
                    <h4>PKR 25000</h4>
                  </div>
                  <div class=" add_to_cart">
                    <button class="btn btn_theme btn_md px-4 py-2">
                      <i class="bi bi-cart-dash"></i> Book Now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="common_card_four">
              <div class="common_card_four_img">
                <a href="tour-search.html">
                  <img src="<?php echo e(asset('assets/img/tour/popular-3.png')); ?>" alt="img" />
                </a>
              </div>
              <div class="common_card_four_text">
                <ul class="common_card_four_list">
                  <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                  <li>Family tour</li>
                </ul>
                <h3>
                  <a href="tour-search.html">Phuket non ullamco amet dolore</a>
                </h3>
                <p>
                  <i class="fas fa-map-marker-alt"></i>London, United Kingdom
                </p>
                <div class="common_card_four_bottom">
                  <div class="common_card_four_bottom_left">
                    <h4>PKR 25000</h4>
                  </div>
                  <div class=" add_to_cart">
                    <button class="btn btn_theme btn_md px-4 py-2">
                      <i class="bi bi-cart-dash"></i> Book Now</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="common_card_four">
              <div class="common_card_four_img">
                <a href="tour-search.html">
                  <img src="<?php echo e(asset('assets/img/tour/popular-4.png')); ?>" alt="img" />
                </a>
              </div>
              <div class="common_card_four_text">
                <ul class="common_card_four_list">
                  <li>7 nights 8 days tour <i class="fas fa-circle"></i></li>
                  <li>Family tour</li>
                </ul>
                <h3>
                  <a href="tour-search.html">Gangtok magna amet voluptate</a>
                </h3>
                <p>
                  <i class="fas fa-map-marker-alt"></i>London, United Kingdom
                </p>
                <div class="common_card_four_bottom">
                  <div class="common_card_four_bottom_left">
                    <h4>PKR 25000</h4>
                  </div>
                  <div class=" add_to_cart">
                    <button class="btn btn_theme btn_md px-4 py-2">
                      <i class="bi bi-cart-dash"></i> Book Now</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  -->
  <section id="best_offers_four" class="section_padding_top">
    <div class="container">
      <!-- Section Heading -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="section_heading_left">
            <h2>Popular Airlines</h2>
            <p>Nostrud aliqua ipsum dolore velit labore nulla fugiat.</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="theme_nav_tab_four">
            <nav class="theme_nav_tab_four_item">
              <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                <button class="nav-link active" id="nav-hotels-tab" data-bs-toggle="tab" data-bs-target="#nav-hotels"
                  type="button" role="tab" aria-controls="nav-hotels" aria-selected="true">
                  Serene
                </button>
                <button class="nav-link" id="nav-tours-tab" data-bs-toggle="tab" data-bs-target="#nav-tours"
                  type="button" role="tab" aria-controls="nav-tours" aria-selected="false">
                  Qatar
                </button>
                <button class="nav-link" id="nav-space-tab" data-bs-toggle="tab" data-bs-target="#nav-space"
                  type="button" role="tab" aria-controls="nav-space" aria-selected="false">
                  Saudi
                </button>
                <button class="nav-link" id="nav-events-tab" data-bs-toggle="tab" data-bs-target="#nav-events"
                  type="button" role="tab" aria-controls="nav-events" aria-selected="false">
                  Usa
                </button>
                <button class="nav-link" id="nav-events-tab" data-bs-toggle="tab" data-bs-target="#nav-cruise"
                  type="button" role="tab" aria-controls="nav-cruise" aria-selected="false">
                  UK
                </button>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <!-- inner content -->
      <div class="row">
        <div class="col-lg-12">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-hotels" role="tabpanel" aria-labelledby="nav-hotels-tab">
              <div class="row">
                <div class="col-lg-12">
                  <div class="best_offers_four_item_slider owl-theme owl-carousel arrow_style">
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-1.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">London aliqua irure proident esse</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-2.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Sydney irure dolor anim exerciton</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-3.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Phuket non ullamco amet dolore</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-4.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Gangtok magna amet voluptate</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-2.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Sydney irure dolor anim exerciton</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-3.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Phuket non ullamco amet dolore</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-4.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Gangtok magna amet voluptate</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-tours" role="tabpanel" aria-labelledby="nav-tours-tab">
              <div class="row">
                <div class="col-lg-12">
                  <div class="best_offers_four_item_slider owl-theme owl-carousel arrow_style">
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-1.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">London aliqua irure proident esse</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-2.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Sydney irure dolor anim exerciton</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-3.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Phuket non ullamco amet dolore</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-4.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Gangtok magna amet voluptate</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-2.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Sydney irure dolor anim exerciton</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-3.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Phuket non ullamco amet dolore</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-4.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Gangtok magna amet voluptate</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-space" role="tabpanel" aria-labelledby="nav-space-tab">
              <div class="row">
                <div class="col-lg-12">
                  <div class="best_offers_four_item_slider owl-theme owl-carousel arrow_style">
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-1.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">London aliqua irure proident esse</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-2.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Sydney irure dolor anim exerciton</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-3.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Phuket non ullamco amet dolore</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-4.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Gangtok magna amet voluptate</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-2.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Sydney irure dolor anim exerciton</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-3.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Phuket non ullamco amet dolore</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-4.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Gangtok magna amet voluptate</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
              <div class="row">
                <div class="col-lg-12">
                  <div class="best_offers_four_item_slider owl-theme owl-carousel arrow_style">
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-1.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">London aliqua irure proident esse</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-2.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Sydney irure dolor anim exerciton</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-3.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Phuket non ullamco amet dolore</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-4.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Gangtok magna amet voluptate</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-2.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Sydney irure dolor anim exerciton</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-3.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Phuket non ullamco amet dolore</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-4.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Gangtok magna amet voluptate</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-cruise" role="tabpanel" aria-labelledby="nav-cruise-tab">
              <div class="row">
                <div class="col-lg-12">
                  <div class="best_offers_four_item_slider owl-theme owl-carousel arrow_style">
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-1.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">London aliqua irure proident esse</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-2.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Sydney irure dolor anim exerciton</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-3.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Phuket non ullamco amet dolore</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-4.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Gangtok magna amet voluptate</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-2.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Sydney irure dolor anim exerciton</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-3.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Phuket non ullamco amet dolore</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="common_card_four">
                      <div class="common_card_four_img">
                        <a href="tour-search.html">
                          <img src="<?php echo e(asset('assets/img/tour/popular-4.png')); ?>" alt="img" />
                        </a>
                      </div>
                      <div class="common_card_four_text">
                        <ul class="common_card_four_list">
                          <li>
                            7 nights 8 days tour <i class="fas fa-circle"></i>
                          </li>
                          <li>Family tour</li>
                        </ul>
                        <h3>
                          <a href="tour-search.html">Gangtok magna amet voluptate</a>
                        </h3>
                        <p>
                          <i class="fas fa-map-marker-alt"></i>London, United
                          Kingdom
                        </p>
                        <div class="common_card_four_bottom">
                          <div class="common_card_four_bottom_left">
                            <h4>PKR 25000</h4>
                          </div>
                          <div class=" add_to_cart">
                            <button class="btn btn_theme btn_md px-4 py-2">
                              <i class="bi bi-cart-dash"></i> Book Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  -->
  <section id="explore_area" class="section_padding_top">
    <div class="container">
      <!-- Section Heading -->
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="section_heading_center">
            <h2>Popular Destinations</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="theme_nav_tab">
            <nav class="theme_nav_tab_item">
              <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                <button class="nav-link active" id="nav-hotels-tab" data-bs-toggle="tab" data-bs-target="#nav-hotels"
                  type="button" role="tab" aria-controls="nav-hotels" aria-selected="true">
                  Dubai
                </button>
                <button class="nav-link" id="nav-tours-tab" data-bs-toggle="tab" data-bs-target="#nav-tours"
                  type="button" role="tab" aria-controls="nav-tours" aria-selected="false">
                  Saudi Arabia
                </button>
                <button class="nav-link" id="nav-space-tab" data-bs-toggle="tab" data-bs-target="#nav-space"
                  type="button" role="tab" aria-controls="nav-space" aria-selected="false">
                  Qatar
                </button>
                <button class="nav-link" id="nav-events-tab" data-bs-toggle="tab" data-bs-target="#nav-events"
                  type="button" role="tab" aria-controls="nav-events" aria-selected="false">
                  London
                </button>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-hotels" role="tabpanel" aria-labelledby="nav-hotels-tab">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel1.png')); ?>" alt="img" />
                      </a>
                      <p>
                        <i class="fas fa-map-marker-alt"></i>New beach,
                        Thailand
                      </p>
                    </div>
                    <div class="theme_two_box_content">
                      <h4>
                        <a href="hotel-details.html">Kantua hotel, Thailand</a>
                      </h4>
                     
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel2.png')); ?>" alt="img" />
                      </a>
                      <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                      <div class="discount_tab">
                        <span>50%</span>
                      </div>
                    </div>
                    <div class="theme_two_box_content">
                      <h4>
                        <a href="hotel-details.html">Hotel paradise international</a>
                      </h4>
                     
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel3.png')); ?>" alt="img" />
                      </a>
                      <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                    </div>
                    <div class="theme_two_box_content">
                      <h4>
                        <a href="hotel-details.html">Hotel kualalampur</a>
                      </h4>
                     
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel4.png')); ?>" alt="img" />
                      </a>
                      <p>
                        <i class="fas fa-map-marker-alt"></i>Mariana island
                      </p>
                      <div class="discount_tab">
                        <span>50%</span>
                      </div>
                    </div>
                    <div class="theme_two_box_content">
                      <h4><a href="hotel-details.html">Hotel deluxe</a></h4>
                     
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel5.png')); ?>" alt="img" />
                      </a>
                      <p>
                        <i class="fas fa-map-marker-alt"></i>Kathmundu, Nepal
                      </p>
                    </div>
                    <div class="theme_two_box_content">
                      <h4><a href="hotel-details.html">Hotel rajavumi</a></h4>
                     
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel6.png')); ?>" alt="img" />
                      </a>
                      <p><i class="fas fa-map-marker-alt"></i>Beach view</p>
                    </div>
                    <div class="theme_two_box_content">
                      <h4>
                        <a href="hotel-details.html">Thailand grand suit</a>
                      </h4>
                     
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel7.png')); ?>" alt="img" />
                      </a>
                      <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                    </div>
                    <div class="theme_two_box_content">
                      <h4>
                        <a href="hotel-details.html">Zefi resort and spa</a>
                      </h4>
                     
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel8.png')); ?>" alt="img" />
                      </a>
                      <p><i class="fas fa-map-marker-alt"></i>Philippine</p>
                    </div>
                    <div class="theme_two_box_content">
                      <h4>
                        <a href="hotel-details.html">Manila international resort</a>
                      </h4>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-tours" role="tabpanel" aria-labelledby="nav-tours-tab">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel1.png')); ?>" alt="img" />
                      </a>
                      <p>
                        <i class="fas fa-map-marker-alt"></i>New beach,
                        Thailand
                      </p>
                    </div>
                    <div class="theme_two_box_content">
                      <h4>
                        <a href="hotel-details.html">Kantua hotel, Thailand</a>
                      </h4>
                     
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel3.png')); ?>" alt="img" />
                      </a>
                      <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                    </div>
                    <div class="theme_two_box_content">
                      <h4>
                        <a href="hotel-details.html">Hotel kualalampur</a>
                      </h4>
                     
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel8.png')); ?>" alt="img" />
                      </a>
                      <p><i class="fas fa-map-marker-alt"></i>Philippine</p>
                    </div>
                    <div class="theme_two_box_content">
                      <h4>
                        <a href="hotel-details.html">Manila international resort</a>
                      </h4>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-space" role="tabpanel" aria-labelledby="nav-space-tab">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel1.png')); ?>" alt="img" />
                      </a>
                      <p>
                        <i class="fas fa-map-marker-alt"></i>New beach,
                        Thailand
                      </p>
                    </div>
                    <div class="theme_two_box_content">
                      <h4>
                        <a href="hotel-details.html">Kantua hotel, Thailand</a>
                      </h4>
                     
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel4.png')); ?>" alt="img" />
                      </a>
                      <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                    </div>
                    <div class="theme_two_box_content">
                      <h4>
                        <a href="hotel-details.html">Hotel kualalampur</a>
                      </h4>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel1.png')); ?>" alt="img" />
                      </a>
                      <p>
                        <i class="fas fa-map-marker-alt"></i>New beach,
                        Thailand
                      </p>
                    </div>
                    <div class="theme_two_box_content">
                      <h4>
                        <a href="hotel-details.html">Kantua hotel, Thailand</a>
                      </h4>
                     
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                  <div class="theme_common_box_two img_hover">
                    <div class="theme_two_box_img">
                      <a href="hotel-details.html">
                        <img src="<?php echo e(asset('assets/img/tab-img/hotel8.png')); ?>" alt="img" />
                      </a>
                      <p><i class="fas fa-map-marker-alt"></i>Philippine</p>
                    </div>
                    <div class="theme_two_box_content">
                      <h4>
                        <a href="hotel-details.html">Manila international resort</a>
                      </h4>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  -->
  <!-- Counter Area -->
  <section id="counter_four_area" class="section_padding countersection">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-2 col-md-3 col-sm-6 col-12">
          <div class="countre_four_item">
            <h3>5,690</h3>
            <h5>Destinations</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12">
          <div class="countre_four_item">
            <h3>12K</h3>
            <h5>Local guides</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12">
          <div class="countre_four_item">
            <h3>750+</h3>
            <h5>Destinations</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12">
          <div class="countre_four_item">
            <h3>2M</h3>
            <h5>Happy customer</h5>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12">
          <div class="countre_four_item">
            <h3>100%</h3>
            <h5>Happiness</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Slider  -->

  <section id="counter_four_area" class="section_padding">
    <div class="container">
      <div class="row justify-between">
        <div class="col-auto">
          <div class="sectionTitle -md">
            <h2 class="sectionTitle__title">Available Tickets</h2>
            <p class="sectionTitle__text sm:mt-0">
              Interdum et malesuada fames ac ante ipsum
            </p>
          </div>
        </div>
        <!-- <div class="col-auto">
          <a href="#" class="button -md -blue-1 bg-blue-1-05 text-blue-1">
            More
            <div class="icon-arrow-top-right ml-15"></div>
          </a>
        </div> -->
      </div>
      <div class="row ">
        <div data-anim-child="slide-up delay-1" class="col-12 is-in-view">
          <div class="px-20 py-20 rounded-4 border-light">
            <div class="row y-gap-30 justify-between xl:justify-">
              <div class="col-xl-4 col-lg-6">
                <div class="row y-gap-10 items-center">
                  <div class="col-sm-auto">
                    <img class="size-40" src="<?php echo e(asset('assets/img/flightIcons/1.png')); ?>" alt="image" />
                  </div>
                  <div class="col">
                    <div class="row x-gap-30 items-end">
                      <div class="col-auto">
                        <div class="lh-15 fw-500">14:00</div>
                        <div class="text-15 lh-15 text-light-1">SAW</div>
                      </div>

                      <div class="col text-center">
                        <div class="flightLine">
                          <div></div>
                          <div></div>
                        </div>
                        <div class="text-15 lh-15 text-light-1 mt-10">
                          4h 05m- Nonstop
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="lh-15 fw-500">22:00</div>
                        <div class="text-15 lh-15 text-light-1">STN</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6">
                <div class="row y-gap-10 items-center">
                  <div class="col-sm-auto">
                    <img class="size-40" src="<?php echo e(asset('assets/img/flightIcons/2.png')); ?>" alt="image" />
                  </div>

                  <div class="col">
                    <div class="row x-gap-20 items-end">
                      <div class="col-auto">
                        <div class="lh-15 fw-500">14:00</div>
                        <div class="text-15 lh-15 text-light-1">SAW</div>
                      </div>

                      <div class="col text-center">
                        <div class="flightLine">
                          <div></div>
                          <div></div>
                        </div>
                        <div class="text-15 lh-15 text-light-1 mt-10">
                          4h 05m- Nonstop
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="lh-15 fw-500">22:00</div>
                        <div class="text-15 lh-15 text-light-1">STN</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-auto">
                <div class="d-flex items-center">
                  <div class="text-right mr-24">
                    <div class="lh-15 fw-500">PKR 35000</div>
                    <div class="text-15 lh-15 text-light-1">16 deals</div>
                  </div>

                  <a href="#" class="button -outline-blue-1 px-30 h-50 text-blue-1 btn btn_theme btn_md">
                   Book Now
                    <i class="bi bi-arrow-up-right-circle mr-5"></i>
                    <!-- <div class="icon-arrow-top-right ml-15"></div> -->
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-anim-child="slide-up delay-2" class="col-12 is-in-view">
          <div class="px-20 py-20 rounded-4 border-light">
            <div class="row y-gap-30 justify-between xl:justify-">
              <div class="col-xl-4 col-lg-6">
                <div class="row y-gap-10 items-center">
                  <div class="col-sm-auto">
                    <img class="size-40" src="<?php echo e(asset('assets/img/flightIcons/1.png')); ?>" alt="image" />
                  </div>

                  <div class="col">
                    <div class="row x-gap-20 items-end">
                      <div class="col-auto">
                        <div class="lh-15 fw-500">14:00</div>
                        <div class="text-15 lh-15 text-light-1">SAW</div>
                      </div>

                      <div class="col text-center">
                        <div class="flightLine">
                          <div></div>
                          <div></div>
                        </div>
                        <div class="text-15 lh-15 text-light-1 mt-10">
                          4h 05m- Nonstop
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="lh-15 fw-500">22:00</div>
                        <div class="text-15 lh-15 text-light-1">STN</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6">
                <div class="row y-gap-10 items-center">
                  <div class="col-sm-auto">
                    <img class="size-40" src="<?php echo e(asset('assets/img/flightIcons/2.png')); ?>" alt="image" />
                  </div>

                  <div class="col">
                    <div class="row x-gap-20 items-end">
                      <div class="col-auto">
                        <div class="lh-15 fw-500">14:00</div>
                        <div class="text-15 lh-15 text-light-1">SAW</div>
                      </div>

                      <div class="col text-center">
                        <div class="flightLine">
                          <div></div>
                          <div></div>
                        </div>
                        <div class="text-15 lh-15 text-light-1 mt-10">
                          4h 05m- Nonstop
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="lh-15 fw-500">22:00</div>
                        <div class="text-15 lh-15 text-light-1">STN</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-auto">
                <div class="d-flex items-center">
                  <div class="text-right mr-24">
                    <div class="lh-15 fw-500">PKR 35000</div>
                    <div class="text-15 lh-15 text-light-1">16 deals</div>
                  </div>

                  <a href="#" class="button -outline-blue-1 px-30 h-50 text-blue-1 btn btn_theme btn_md">
                   Book Now <i class="bi bi-arrow-up-right-circle mr-5"></i>
                    <!-- <div class="icon-arrow-top-right ml-15"></div> -->
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-anim-child="slide-up delay-3" class="col-12 is-in-view">
          <div class="px-20 py-20 rounded-4 border-light">
            <div class="row y-gap-30 justify-between xl:justify-">
              <div class="col-xl-4 col-lg-6">
                <div class="row y-gap-10 items-center">
                  <div class="col-sm-auto">
                    <img class="size-40" src="<?php echo e(asset('assets/img/flightIcons/1.png')); ?>" alt="image" />
                  </div>

                  <div class="col">
                    <div class="row x-gap-20 items-end">
                      <div class="col-auto">
                        <div class="lh-15 fw-500">14:00</div>
                        <div class="text-15 lh-15 text-light-1">SAW</div>
                      </div>

                      <div class="col text-center">
                        <div class="flightLine">
                          <div></div>
                          <div></div>
                        </div>
                        <div class="text-15 lh-15 text-light-1 mt-10">
                          4h 05m- Nonstop
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="lh-15 fw-500">22:00</div>
                        <div class="text-15 lh-15 text-light-1">STN</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6">
                <div class="row y-gap-10 items-center">
                  <div class="col-sm-auto">
                    <img class="size-40" src="<?php echo e(asset('assets/img/flightIcons/2.png')); ?>" alt="image" />
                  </div>

                  <div class="col">
                    <div class="row x-gap-20 items-end">
                      <div class="col-auto">
                        <div class="lh-15 fw-500">14:00</div>
                        <div class="text-15 lh-15 text-light-1">SAW</div>
                      </div>

                      <div class="col text-center">
                        <div class="flightLine">
                          <div></div>
                          <div></div>
                        </div>
                        <div class="text-15 lh-15 text-light-1 mt-10">
                          4h 05m- Nonstop
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="lh-15 fw-500">22:00</div>
                        <div class="text-15 lh-15 text-light-1">STN</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-auto">
                <div class="d-flex items-center">
                  <div class="text-right mr-24">
                    <div class="lh-15 fw-500">PKR 35000</div>
                    <div class="text-15 lh-15 text-light-1">16 deals</div>
                  </div>

                  <a href="#" class="button -outline-blue-1 px-30 h-50 text-blue-1 btn btn_theme btn_md">
                   Book Now <i class="bi bi-arrow-up-right-circle mr-5"></i>
                    <!-- <div class="icon-arrow-top-right ml-15"></div> -->
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div data-anim-child="slide-up delay-4" class="col-12 is-in-view">
          <div class="px-20 py-20 rounded-4 border-light">
            <div class="row y-gap-30 justify-between xl:justify-">
              <div class="col-xl-4 col-lg-6">
                <div class="row y-gap-10 items-center">
                  <div class="col-sm-auto">
                    <img class="size-40" src="<?php echo e(asset('assets/img/flightIcons/1.png')); ?>" alt="image" />
                  </div>

                  <div class="col">
                    <div class="row x-gap-20 items-end">
                      <div class="col-auto">
                        <div class="lh-15 fw-500">14:00</div>
                        <div class="text-15 lh-15 text-light-1">SAW</div>
                      </div>

                      <div class="col text-center">
                        <div class="flightLine">
                          <div></div>
                          <div></div>
                        </div>
                        <div class="text-15 lh-15 text-light-1 mt-10">
                          4h 05m- Nonstop
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="lh-15 fw-500">22:00</div>
                        <div class="text-15 lh-15 text-light-1">STN</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-lg-6">
                <div class="row y-gap-10 items-center">
                  <div class="col-sm-auto">
                    <img class="size-40" src="<?php echo e(asset('assets/img/flightIcons/2.png')); ?>" alt="image" />
                  </div>

                  <div class="col">
                    <div class="row x-gap-20 items-end">
                      <div class="col-auto">
                        <div class="lh-15 fw-500">14:00</div>
                        <div class="text-15 lh-15 text-light-1">SAW</div>
                      </div>

                      <div class="col text-center">
                        <div class="flightLine">
                          <div></div>
                          <div></div>
                        </div>
                        <div class="text-15 lh-15 text-light-1 mt-10">
                          4h 05m- Nonstop
                        </div>
                      </div>

                      <div class="col-auto">
                        <div class="lh-15 fw-500">22:00</div>
                        <div class="text-15 lh-15 text-light-1">STN</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-auto">
                <div class="d-flex items-center">
                  <div class="text-right mr-24">
                    <div class="lh-15 fw-500">PKR 35000</div>
                    <div class="text-15 lh-15 text-light-1">16 deals</div>
                  </div>

                  <a href="#" class="button -outline-blue-1 px-30 h-50 text-blue-1 btn btn_theme btn_md">
                   Book Now <i class="bi bi-arrow-up-right-circle mr-5"></i>
                    <!-- <div class="icon-arrow-top-right ml-15"></div> -->
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  -->
  <!-- Testimonial Area -->
   <!-- Clients review Area -->
   <section id="home_Three_client" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="home_client_wrpper h-100">
                        <h4>Our testimonials</h4>
                        <h2>What our client say about us</h2>
                        <div class="home-two-quote">
                            <img src="<?php echo e(asset('assets/img/icon/quote.png')); ?>" alt="img">
                            <h3>Awesome service</h3>
                        </div>
                        <div class="home_two_client_slider  owl-theme owl-carousel">
                            <div class="client_two_content">
                                <p>
                                    Ad non quis quis commodo ut nostrud ipsum ad reprehenderit. Lorem eiusmod
                                    excepteur anim adipisicing officia officia.
                                </p>
                                <div class="client_two_author">
                                    <h5>Cameron douglas</h5>
                                    <h6>Businessman</h6>
                                </div>
                            </div>
                            <div class="client_two_content">
                                <p>
                                    Ad non quis quis commodo ut nostrud ipsum ad reprehenderit. Lorem eiusmod
                                    excepteur anim adipisicing officia officia.
                                </p>
                                <div class="client_two_author">
                                    <h5>Cameron douglas</h5>
                                    <h6>Businessman</h6>
                                </div>
                            </div>
                            <div class="client_two_content">
                                <p>
                                    Ad non quis quis commodo ut nostrud ipsum ad reprehenderit. Lorem eiusmod
                                    excepteur anim adipisicing officia officia.
                                </p>
                                <div class="client_two_author">
                                    <h5>Cameron douglas</h5>
                                    <h6>Businessman</h6>
                                </div>
                            </div>
                            <div class="client_two_content">
                                <p>
                                    Ad non quis quis commodo ut nostrud ipsum ad reprehenderit. Lorem eiusmod
                                    excepteur anim adipisicing officia officia.
                                </p>
                                <div class="client_two_author">
                                    <h5>Cameron douglas</h5>
                                    <h6>Businessman</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="home_three_client_right">
                        <img src="<?php echo e(asset('assets/img/test.jpg')); ?>" alt="img" style="border-radius: 12px">
                    </div>
                </div>
            </div>
        </div>
    </section>

  

  <!-- Our partners Area -->
  <section id="our_partners_four" class="section_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="partner_slider_area owl-theme owl-carousel">
            <div class="partner_logo">
              <a href="#!"><img src="<?php echo e(asset('assets/img/partner/1.png')); ?>" alt="logo" /></a>
            </div>
            <div class="partner_logo">
              <a href="#!"><img src="<?php echo e(asset('assets/img/partner/2.png')); ?>" alt="logo" /></a>
            </div>
            <div class="partner_logo">
              <a href="#!"><img src="<?php echo e(asset('assets/img/partner/3.png')); ?>" alt="logo" /></a>
            </div>
            <div class="partner_logo">
              <a href="#!"><img src="<?php echo e(asset('assets/img/partner/4.png')); ?>" alt="logo" /></a>
            </div>
            <div class="partner_logo">
              <a href="#!"><img src="<?php echo e(asset('assets/img/partner/5.png')); ?>" alt="logo" /></a>
            </div>
            <div class="partner_logo">
              <a href="#!"><img src="<?php echo e(asset('assets/img/partner/6.png')); ?>" alt="logo" /></a>
            </div>
            <div class="partner_logo">
              <a href="#!"><img src="<?php echo e(asset('assets/img/partner/7.png')); ?>" alt="logo" /></a>
            </div>
            <div class="partner_logo">
              <a href="#!"><img src="<?php echo e(asset('assets/img/partner/8.png')); ?>" alt="logo" /></a>
            </div>
            <div class="partner_logo">
              <a href="#!"><img src="<?php echo e(asset('assets/img/partner/5.png')); ?>" alt="logo" /></a>
            </div>
            <div class="partner_logo">
              <a href="#!"><img src="<?php echo e(asset('assets/img/partner/3.png')); ?>" alt="logo" /></a>
            </div>
            <div class="partner_logo">
              <a href="#!"><img src="<?php echo e(asset('assets/img/partner/2.png')); ?>" alt="logo" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  -->
  <!-- Faqs Area -->
  <section id="faqs_main_arae" class="section_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="section_heading_center">
            <h2>Frequently Asked Questions</h2>
          </div>
        </div>
      </div>
      <div class="faqs_area_top">
        <div class="row">
          <div class="col-lg-8">
            <div class="faqs_three_area_wrapper">
              <!-- Item One -->
              <div class="faqs_item_wrapper">
                <!-- <h3>General questions</h3> -->
                <div class="faqs_main_item">
                  <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          It is a long established fact that a reader will be
                          distracted by the readable content?
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p>
                            There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or
                            randomised words which don't look even slightly
                            believable.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          It is a long established fact that a reader will be
                          distracted by the readable content?
                        </button>
                      </h2>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p>
                            There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or
                            randomised words which don't look even slightly
                            believable.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Item Two -->
              <div class="faqs_item_wrapper">
                <!-- <h3>Regular questions</h3> -->
                <div class="faqs_main_item">
                  <div class="accordion" id="accordionExampleTwo">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOnef1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseOnef1" aria-expanded="true" aria-controls="collapseOnef1">
                          It is a long established fact that a reader will be
                          distracted by the readable content?
                        </button>
                      </h2>
                      <div id="collapseOnef1" class="accordion-collapse collapse show" aria-labelledby="headingOnef1"
                        data-bs-parent="#accordionExampleTwo">
                        <div class="accordion-body">
                          <p>
                            There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or
                            randomised words which don't look even slightly
                            believable.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Item Three -->
              <div class="faqs_item_wrapper">
                <!-- <h3>Advance questions</h3> -->
                <div class="faqs_main_item">
                  <div class="accordion" id="accordionExampleThree">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThreef2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapseThreef2" aria-expanded="false" aria-controls="collapseThreef2">
                          It is a long established fact that a reader will be
                          distracted by the readable content?
                        </button>
                      </h2>
                      <div id="collapseThreef2" class="accordion-collapse collapse" aria-labelledby="headingThreef2"
                        data-bs-parent="#accordionExampleThree">
                        <div class="accordion-body">
                          <p>
                            There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or
                            randomised words which don't look even slightly
                            believable.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 contact-ushm">
            <img src="<?php echo e(asset('assets/img/Contact-us.gif')); ?>" alt="img" />
            <h5>Contact us 24/7 <a href="tel:+00-123-456-789">+00 123 456 789</a></h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  -->
  <section id="faqs_main_arae" class="section_padding pb-2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="section_heading_center">
            <h2>Locate Us</h2>
          </div>
        </div>
      </div>
      <div class="faqs_area_top">
        <div class="row ">
          <div class="col-lg-12 p-0 ">
            <div class="side_map_wrapper">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3677.696234111792!2d89.56322257606713!3d22.813717024088525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1696246875048!5m2!1sen!2s"
                height="250px" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Skypass_Travel-main\resources\views/welcome.blade.php ENDPATH**/ ?>