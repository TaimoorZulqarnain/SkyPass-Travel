@extends('layouts.admin')
@section('content')

<div class="preloader js-preloader">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</div>
<div class="header-margin"> </div>

<style>
  .select2-container .select2-selection--single {
    padding: 0 5px 0;
    border: 1px dashed #DDDDDD;
    height: 40px;
    background: rgba(243, 246, 253, 0.5);
  }

  .select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #6b6b6b;
    line-height: 39px;
  }

  .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 38px;
    position: absolute;
    top: 1px;
    right: 1px;
    width: 20px;
  }

  .was-validated .form-select:invalid+.select2 .select2-selection {
    border-color: #dc3545 !important;
  }

  .was-validated .form-select:valid+.select2 .select2-selection {
    border-color: #28a745 !important;
  }
</style>

<!--start header -->
@include('admin.partials.navigation')
<!--end header -->
<div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
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
        <h1 class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button text-decoration-underline">General Entry:</h1>
          <div class="tabs__content pt-15 ">
            <form class="needs-validation" novalidate action="{{ route('ticket.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="tabs__pane -tab-item-1 is-tab-el-active ">
                <div class="col-xl-12">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                      <div class="form-input">
                        <label class="lh-1 text-16 text-light-1">Select Airline<span class="text-danger">*</span></label>
                        <div class="form-group">
                          <select class="form-control form-select bg_input" required id="js-example-basic-single" name="airline_id" value="{{ old('airline_id') }}">
                            {!! get_airline_title() !!}
                          </select>
                          <div class="invalid-feedback">Please Select Airline field.</div>
                          @if($errors->has('airline_id'))
                          <span class="text-danger">{{ $errors->first('airline_id') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Seats<span class="text-danger">*</span></label>
                        <input type="text" required class="form-control" placeholder="Enter Seats" name="seats" value="{{old('seats')}}">
                        <div class="invalid-feedback">Please fill out Seats.</div>
                        @if ($errors->has('seats'))
                        <span class="text-danger">{{ $errors->first('seats') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                    <label class="lh-1 text-16 text-light-1">Adult Price<span class="text-danger">*</span></label>
                      <div class="input-group form-input">
                      <span class="input-group-text" id="basic-addon1">PKR</span>
                        <input type="text" class="form-control" placeholder="Enter Adult Price" required name="adult_price" value="{{old('adult_price')}}">
                        <div class="invalid-feedback">Please fill out Adult Price.</div>
                        @if ($errors->has('adult_price'))
                        <span class="text-danger">{{ $errors->first('adult_price') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                    <label class="lh-1 text-16 text-light-1">Child Price<span class="text-danger">*</span></label>
                      <div class="input-group form-input">
                      <span class="input-group-text" id="basic-addon1">PKR</span>
                        <input type="text" class="form-control" placeholder="Enter Child Price" required name="child_price" value="{{old('child_price')}}">
                        <div class="invalid-feedback">Please fill out Child Price.</div>
                        @if($errors->has('child_price'))
                        <span class="text-danger">{{ $errors->first('child_price') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                    <label class="lh-1 text-16 text-light-1">Infants Price<span class="text-danger">*</span></label>
                      <div class="input-group form-input">
                      <span class="input-group-text" id="basic-addon1">PKR</span>
                        <input type="text" class="form-control" placeholder="Enter Infants Price" name="infants_price" required value="{{old('infants_price')}}">
                        <div class="invalid-feedback">Please fill out Infants Price.</div>
                        @if($errors->has('infants_price'))
                        <span class="text-danger">{{ $errors->first('infants_price') }}</span>
                        @endif
                      </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-sm-12">
                    <label class="lh-1 text-16 text-light-1">Adult Discount</label>
                      <div class="input-group form-input">
                      <span class="input-group-text" id="basic-addon1">PKR</span>
                        <input type="text" class="form-control" placeholder="Enter Infants Price" name="adult_discount" value="{{old('adult_discount')}}">
                      </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-sm-12">
                      <label class="lh-1 text-16 text-light-1">Child Discount</label>
                      <div class="input-group form-input">
                        <span class="input-group-text" id="basic-addon1">PKR</span>
                        <input type="text" class="form-control" name="child_discount" value="{{ old('child_discount') }}" placeholder="Enter Child Discount" aria-label="Child Discount" aria-describedby="basic-addon1">
                      </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-sm-12">
                      <label class="lh-1 text-16 text-light-1">Infants Discount</label>
                      <div class="input-group form-input">
                        <span class="input-group-text" id="basic-addon1">PKR</span>
                        <input type="text" name="infants_discount" placeholder="Enter Infants Discount" class="form-control" value="{{old('infants_discount')}}">
                      </div>
                    </div>

                    <div class="col-xl-4 col-md-6 col-sm-12">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Select Type<span class="text-danger">*</span></label>
                        <div class="form-group">
                          <select class="form-control form-select bg_input" name="service_type" id="myInput" required value="{{old('service_type')}}">
                            <option value="">Select Option</option>
                            <option value="One Way">One Way</option>
                            <option value="Two Way">Return/two way </option>
                          </select>
                          <div class="invalid-feedback">Please fill out One day and Return/Two-way.</div>
                          @if($errors->has('service_type'))
                          <span class="text-danger">{{ $errors->first('service_type') }}</span>
                          @endif
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                      <div class="form-input">
                        <label class="lh-1 text-16 text-light-1">Is Featured <span class="text-danger">*</span></label>
                        <select class="form-control form-select bg_input" required id="is_featured" name="is_featured">
                          <option value="No" {{ old('is_featured') === 'No' ? 'selected' : '' }}>No</option>
                          <option value="Yes" {{ old('is_featured') === 'Yes' ? 'selected' : '' }}>Yes</option>

                        </select>
                        <div class="invalid-feedback">Please fill out Featured.</div>
                        @if ($errors->has('is_featured'))
                        <span class="text-danger">{{ $errors->first('is_featured') }}</span>
                        @endif
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                          <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Meal<span class="text-danger">*</span></label>
                            <!-- <input type="text" class="form-control" placeholder="Enter Meal" required name="meal[0][meal]"> -->
                            <select class="form-control form-select bg_input" required id="meal" name="meal">
                              <option value="No" {{ old('meal') === 'No' ? 'selected' : '' }}>No</option>
                              <option value="Yes" {{ old('meal') === 'Yes' ? 'selected' : '' }}>Yes</option>
                            </select>
                            <div class="invalid-feedback">Please fill out Meal.</div>
                          </div>
                        </div>

                    <div class="col-xl-4 col-md-6 col-sm-12">
                      <div class="form-input">
                        <label class="lh-1 text-16 text-light-1"> Super Admin-Approval</label>
                        <select class="form-control form-select bg_input" required id="super_admin_approval" name="super_admin_approval">
                          <option value="No" {{ old('super_admin_approval') === 'No' ? 'selected' : '' }}>No</option>
                          <option value="Yes" {{ old('super_admin_approval') === 'Yes' ? 'selected' : '' }}>Yes</option>

                        </select>
                        <div class="invalid-feedback">Please fill out Approval.</div>
                      </div>
                    </div>
                    <div class="col-xl-12" id="add-child-policy">
                      <div class="row x-gap-20" style="margin-top: 20px;">
                        <div class="row">
                          <div class="col-auto">
                            <h3 class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button text-decoration-underline" data-tab-target=".-tab-item-2">Above Fare Setting:</h3>
                          </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12">
                          <div class="form-input">
                            <label class="lh-1 text-16 text-light-1">Fare Seats</label>
                            <input type="text" name="fare_seats" class="form-control" placeholder="Enter Fare Seats">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12" id="add-seat-policy">
                      <div class="row x-gap-20">
                        <div class="row">
                          <div class="col-auto">
                            <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button text-decoration-underline" data-tab-target=".-tab-item-2">Child Policy:</button>
                          </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12">
                          <div class="form-input">
                            <label class="lh-1 text-16 text-light-1">Seats Policy</label>
                            <input type="text" name="seats_policy" class="form-control" placeholder="Enter Child Seats Policy">
                          </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12">
                          <div class="form-input">
                            <label class="lh-1 text-16 text-light-1">Note</label>
                            <input type="text" name="note" class="form-control" placeholder="Enter Policy Note">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-12" id="add-sector">
                      <div class="row x-gap-20 y-gap-20" style="border:2px solid;color:#C5D2DB;border-radius: 14px;margin-top: 20px;">
                        <div class="row">
                          <div class="col-auto">
                            <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button " data-tab-target=".-tab-item-2">Sector Details</button>
                          </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12">
                          <div class="form-input">
                            <label class="lh-1 text-16 text-light-1">Flight No<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter Flight No" required name="flight_num[0][flight_num]">
                            <div class="invalid-feedback">Please fill out Flight No.</div>
                          </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-sm-12">
                        <label class="lh-1 text-16 text-light-1">Baggage<span class="text-danger">*</span></label>
                          <div class="input-group form-input">
                            <span class="input-group-text" id="basic-addon1">KG</span>
                            <input type="text" class="form-control" placeholder="Add a Baggage" required name="baggage[0][baggage]">
                            <div class="invalid-feedback">Please fill out Baggage.</div>
                          </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                          <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Departure<span class="text-danger">*</span></label>
                            <select class="form-control form-select bg_input" required id="js-example-basic-single" name="departure[0][departure]" value="{{ old('departure') }}">
                            {!! get_departure_title() !!}
                          </select>
                            <div class="invalid-feedback">Please fill out Departure.</div>
                          </div>
                        </div>
                        
                        
                        <div class="col-xl-4 col-md-6 col-sm-12">
                          <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Departure Time<span class="text-danger">*</span></label>
                            <input type="time" class="form-control" placeholder="Enter Time" required name="departure_time[0][departure_time]">
                            <div class="invalid-feedback">Please fill out Departure Time.</div>
                          </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="form-input">
                        <label class="lh-1 text-16 text-light-1">Departure Date<span class="text-danger">*</span></label>
                        <input type="text" placeholder="Enter Departure Date" class="form-control" id="datePickerInput" name="departure_date[0][departure_date]" required>
                        <div class="invalid-feedback">Please fill out Date.</div>
                        </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                          <div class="form-input">
                            <label class="lh-1 text-16 text-light-1">Destination<span class="text-danger">*</span></label>
                            <select class="form-control form-select bg_input" required id="js-example-basic-single" name="destination[0][destination]" value="{{ old('destination') }}">
                            {!! get_departure_title() !!}
                          </select>
                            <div class="invalid-feedback">Please fill out Destination.</div>
                          </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                          <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Arrival Time<span class="text-danger">*</span></label>
                            <input type="time" class="form-control" placeholder="Enter Time" required name="arrival_time[0][arrival_time]">
                            <div class="invalid-feedback">Please fill out Arrival Time.</div>
                          </div>
                        </div>
                        
                        <div class="col-xl-4 col-md-6 col-sm-12">
                          <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Arrival Date<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter Arrival Date" id="arrivalDatePickerInput" name="arrival_date[0][arrival_date]" required>
                            <div class="invalid-feedback">Please fill out Arrival Date.</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 text-center">

                  <div class="row justify-content-end">
                    <div class="col-auto">
                      <div class="d-inline-block pt-30" id="close-btn">
                        <i onclick="add_row()" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                          <i class="fa-solid fa-plus"></i>Sector
                        </i>
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="d-inline-block pt-30" id="tab-button">
                        <button type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                          Save
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      @include('admin.partials.validation-errors')
      <!--start page footer -->
      @include('admin.partials.footer')
      <!--start page footer -->
    </div>
  </div>
</div>

<script>
  var rowIdx = 1;
  var r = 1;

  function add_row() {
    var rowCount = rowIdx++;
    r++;
    // Create a new div element
    var div = document.createElement('div');
    div.className = 'col-xl-12';
    div.id = rowCount;
    // Create the inner HTML for the div
    div.innerHTML = `
    <div class="row x-gap-20 y-gap-20" style="border:2px solid;color:#C5D2DB;border-radius: 14px;margin-top: 20px;">
      <div class="row">
        <div class="d-flex justify-content-between">
          <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button" data-tab-target=".-tab-item-2">Sector Details</button>
          <button class="button py-10 px-15 -dark-1 bg-red-1 text-white" onclick="removeRow(${rowCount})"><i class="fa fa-times" aria-hidden="true"></i></button>
        </div>
      </div>
     
      <div class="col-xl-6 col-md-6 col-sm-12">
        <div class="form-input">
          <label class="lh-1 text-16 text-light-1">Flight No<span class="text-danger">*</span></label>
          <input type="text" class="form-control" required name="flight_num[${rowCount}][flight_num]">
          <div class="invalid-feedback">Please fill out Flight No.</div>
        </div>
      </div>
      <div class="col-xl-6 col-md-6 col-sm-12">
        <div class="form-input">
          <label class="lh-1 text-16 text-light-1">Baggage<span class="text-danger">*</span></label>
          <input type="text" class="form-control" required name="baggage[${rowCount}][baggage]">
          <div class="invalid-feedback">Please fill out Baggage.</div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="form-input ">
          <label class="lh-1 text-16 text-light-1">Departure<span class="text-danger">*</span></label>
          <select class="form-control form-select bg_input" required id="js-example-basic-single" name="departure[${rowCount}][departure]" value="{{ old('departure') }}">
          {!! get_departure_title() !!}
          </select>
          <div class="invalid-feedback">Please fill out Departure.</div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="form-input ">
          <label class="lh-1 text-16 text-light-1">Departure Time</label>
          <input type="time" class="form-control" required name="departure_time[${rowCount}][departure_time]">
          <div class="invalid-feedback">Please fill out Time.</div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="form-input ">
          <label class="lh-1 text-16 text-light-1">Departure Date<span class="text-danger">*</span></label>
          <input type="text" placeholder="Enter Departure Date" class="form-control datepicker-input" id="datePickerInput" name="departure_date[${rowCount}][departure_date]" required>
          <div class="invalid-feedback">Please fill out Departure Date.</div>
        </div>
      </div>
      
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="form-input ">
          <label class="lh-1 text-16 text-light-1">Destination<span class="text-danger">*</span></label>
          <select class="form-control form-select bg_input" required id="js-example-basic-single" name="destination[${rowCount}][destination]" value="{{ old('departure') }}">
          {!! get_departure_title() !!}
          </select>
          <div class="invalid-feedback">Please fill out Destination.</div>
        </div>
      </div>
      
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="form-input ">
          <label class="lh-1 text-16 text-light-1">Arrival Time</label>
          <input type="time" class="form-control" required name="arrival_time[${rowCount}][arrival_time]">
          <div class="invalid-feedback">Please fill out Time.</div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="form-input ">
          <label class="lh-1 text-16 text-light-1">Arrival Date<span class="text-danger">*</span></label>
          <input type="text" class="form-control datepicker-input" placeholder="Enter Arrival Date" id="arrivalDatePickerInput" name="arrival_date[${rowCount}][arrival_date]" required>
          <div class="invalid-feedback">Please fill out Arrival Date.</div>
        </div>
      </div>
    </div>`;
    // Append the created div to the "add-sector" div
    document.getElementById('add-sector').appendChild(div);
    const datePickers = document.querySelectorAll(".datepicker-input");
    datePickers.forEach(function (datePicker) {
      flatpickr(datePicker, {
        dateFormat: "D d M Y",
        altInput: true,
        altFormat: "D d M Y",
        enableTime: false,
        time_24hr: true,
      });
    });

  }

  

  function removeRow(rowId) {
    var elementToRemove = document.getElementById(rowId);
    if (elementToRemove) {
      elementToRemove.remove();
    }
  }
 
 
</script>

<script>
  
document.addEventListener("DOMContentLoaded", function() {
    const datePickerInput = document.getElementById("datePickerInput");
    const arrivalDatePickerInput = document.getElementById("arrivalDatePickerInput");
    
    flatpickr(datePickerInput, {
        dateFormat: "D d M Y", // Format for displaying the date
        altInput: true, // Enable displaying the date in an alternate input field
        altFormat: "D d M Y", // Format for capturing the date
        enableTime: false, // Disable time selection (date only)
        time_24hr: true, // Use 24-hour time format
    });
    flatpickr(arrivalDatePickerInput, {
        dateFormat: "D d M Y", // Format for displaying the date
        altInput: true, // Enable displaying the date in an alternate input field
        altFormat: "D d M Y", // Format for capturing the date in "yyyy-MM-dd"
        enableTime: false, // Disable time selection (date only)
        time_24hr: true, // Use 24-hour time format
    });
});
</script>





@endsection