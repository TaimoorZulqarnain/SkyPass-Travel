@extends('layouts.admin')
@section('content')

<div class="preloader js-preloader">
  </div>
  <div class="header-margin"> </div>

<!--start header -->
@include('admin.partials.navigation')
<!--end header -->

 <!--sidebar wrapper -->
 @include('admin.partials.sidebar')
    <!--end sidebar wrapper -->
    <div class="dashboard__main">
      <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">
            <h1 class="text-30 lh-14 fw-600">Add Tickets</h1>
            <!-- <div class="text-15 text-light-1">Lorem ipsum dolor sit amet, consectetur.</div> -->
          </div>
        </div>
        <div class="py-15 px-30 rounded-4 bg-white custom_shadow">
          <div class="tabs  js-tabs">
            <div class="tabs__content pt-15 ">
              <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="tabs__pane -tab-item-1 is-tab-el-active">
                      <div class="col-xl-12">
                        <div class=" mt-30 mb-30"></div>
                            <div class="row x-gap-20 y-gap-20">
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                  <div class="form-input">
                                    <label class="lh-1 text-16 text-light-1">Select Airline<span class="text-danger">*</span></label>
                                      <div class="form-group">
                                          <select class="form-control form-select bg_input">
                                            <option value="">Select Option</option>
                                            <option value="">PIA</option>
                                            <option value="">Qatar</option>
                                          </select>
                                      </div>
                                  </div>
                                </div>  
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                  <div class="form-input">
                                    <label class="lh-1 text-16 text-light-1">Select Status<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                      <select class="form-control form-select bg_input">
                                        <option value="">Select Option</option>
                                        <option value="">On Hold</option>
                                        <option value="">Cancelled</option>
                                        <option value="">Available</option>
                                      </select>
                                    </div>
                                  </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                  <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Seats<span class="text-danger">*</span></label>
                                    <input type="text" required name="seats">
                                  </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                  <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Adult Price<span class="text-danger">*</span></label>
                                    <input type="text" required name="adult_price">
                                  </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                  <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Child Price<span class="text-danger">*</span></label>
                                    <input type="text" required name="child_price">
                                  </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                  <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Infants Price<span class="text-danger">*</span></label>
                                    <input type="text" required name="infants_price">
                                  </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                  <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Adult Discount<span class="text-danger">*</span></label>
                                    <input type="text" required name="adult_discount">
                                  </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                  <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Child Discount<span class="text-danger">*</span></label>
                                    <input type="text" required name="child_discount">
                                  </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                  <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Infants Discount<span class="text-danger">*</span></label>
                                    <input type="text" required name="infants_discount">
                                  </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                  <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Select Type<span class="text-danger">*</span></label>
                                    <div class="form-group">
                                      <select class="form-control form-select bg_input" id="myInput" onchange="myFunction()">
                                        <option value="">Select Option</option>
                                        <option value="one day">One day</option>
                                        <option value="Return/Two way">Return/two way </option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-12">
                                  <div class="form-input ">
                                    <label class="lh-1 text-16 text-light-1">Is Featured <span class="text-danger">*</span></label>
                                    <input type="text" required name="is_featured">
                                  </div>
                                </div>
                                <div class="col-xl-4 col-md-6 col-sm-12" id="noOfDays" style="display: none;">
                                  <div class="form-input" >
                                    <label class="lh-1 text-16 text-light-1">No of Days<span class="text-danger">*</span></label>
                                    <input type="text" required name="no_of_days"  >
                                  </div>
                                </div>
                            </div>
                      </div>
                      <div class="col-12 text-center">
                        <div class="d-inline-block pt-30">
                          <a href="#" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                            Save changes
                          </a>
                        </div>
                      </div>
                    </div>
          </form>
            </div>
          </div>
        </div>
    <!--start page footer -->
    @include('admin.partials.footer')
    <!--start page footer -->
      </div>
    </div>

    <script>
            function myFunction() {
        var inputValue = document.getElementById("myInput").value;
        if(inputValue=='Return/Two way')
        {
            noOfDays.style.display='block';
        }
        else {
            noOfDays.style.display='none';
        }
        }
  </script>

    @endsection

   