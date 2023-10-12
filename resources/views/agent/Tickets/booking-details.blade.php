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

<div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
 <!--sidebar wrapper -->
 @include('agent.partials.sidebar')
  <div class="dashboard__main">
    <div class="dashboard__content">
        <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">
            <h1 class="text-30 lh-14 fw-600">Booking Details</h1>
          </div>
        </div>
          @include('admin.partials.errors')
        <div class="col-lg-12">
            <div class="flight_search_result_wrapper">
                <div class="flight_search_item_wrappper">
                    <div class="flight_search_items">
                        <div class="multi_city_flight_lists">
                            <div class="flight_multis_area_wrapper">
                                <div class="flight_search_left">
                                    <div class="flight_logo">
                                        <img src="{{asset('uploads/airline_images/'.$ticket->image)}}" alt="img">
                                    </div>
                                </div>
                                <div class="flight_search_middel">
                                    <div class="flight_search_destination">
                                        <p>Sector Information</p>                                                  
                                        @php 
                                            $count = 1; 
                                            $dep_date = "";    
                                        @endphp
                                        @foreach($ticket->sectors as $sector)            
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
                                </div>
                                <div class="flight_search_seats">
                                    <div class="flight_search_destination">
                                        <p>Dep Date</p>
                                        <span class="fw-bold">{{$dep_date}}</span>
                                    </div>
                                    <div class="flight_search_destination">
                                        <p>Meal</p>
                                       <span class="fw-bold">{{$ticket->meal}}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="flight_search_right">
                            <h2>PKR. {{$ticket->adult_price}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
            <form  class="needs-validation" id="myForm" novalidate action="{{ route('submit-ticket-booking') }}"  method="post">
              @csrf
              <input type="hidden" name="ticket_id" value="{{$ticket->id}}"/>
              <input type="hidden" name="correct_data_confirmation" id="correct_data_confirmation" value=""/>
              <table class="table-4 -border-bottom col-12">
                <thead class="bg-dark-4 text-white">
                    <tr>
                        <th> Passengers</th>
                        <th> Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td  class="pl-0">
                        <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Adult</label>
                            <input type="number" name="adult" id="adults" value="0" min="0" class="form-control">
                        </div>
                        <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Child</label>
                            <input type="number" name="child" id="children" value="0" min="0" class="form-control">
                        </div>
                        <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Infants</label>
                            <input type="number" name="infants" id="infants" value="0" min="0" class="form-control">
                        </div>
                    </td>
                    <td class="pr-0"> 
                        <table class="table table-striped">
                            <tr class="bg-dark-4 text-white">
                                <th></th>
                                <th>Price</th>
                                <th>Seats</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <th>Adult</th>
                                <td><b>PKR</b> {{$ticket->adult_price}}</td>
                                <td id="adult_seats">0</td>
                                <td><b>PKR</b> <span id="adult_price">0</span></td>
                            </tr>
                            <tr>
                                <th>Child</th>
                                <td><b>PKR</b> {{$ticket->child_price}}</td>
                                <td id="child_seats">0</td>
                                <td><b>PKR</b> <span id="child_price">0</span></td>
                            </tr>
                            <tr>
                                <th>Infants</th>
                                <td><b>PKR</b> {{$ticket->infants_price}}</td>
                                <td id="infants_seats">0</td>
                                <td><b>PKR</b> <span id="infants_price">0</span></td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td></td>
                                <td id="total_seats">0</td>
                                <td><b>PKR</b> <span id="total_price">0</span></td>
                            </tr>
                        </table>
                    </td>
                    </tr>
                </tbody>
                </table>
                <div class="table-responsive no-data">
                  <table class="table-4 -border-bottom col-12">
                      <thead class="bg-dark-4 text-white">
                          <tr>
                            <th>SR#</th>
                            <th> Title<span class="text-danger">*</span></th>
                            <th> SurName<span class="text-danger">*</span> </th>
                            <th>GivenName<span class="text-danger">*</span> </th>
                            <th>Passport Number<span class="text-danger">*</span> </th>
                            <th>Date Of Birth <span class="text-danger">*</span></th>
                            <th>Passport Expiry<span class="text-danger">*</span> </th>
                            <th>Nationality<span class="text-danger">*</span> </th>
                            <th>Mobile Number</th>
                            <th>Email </th>
                            <th>Whatsapp No </th>
                          </tr>
                      </thead>
                      <tbody id="dynamic-table-adult">
                      </tbody>
                      <tbody id="dynamic-table-child">
                      </tbody>
                      <tbody id="dynamic-table-infants">
                      </tbody>
                  </table>
                </div>
                <div class="col-12 text-center no-data">
                    <div class="d-inline-block pt-30">
                        <button type="submit" class="button h-40 px-24 -dark-1 bg-blue-1 text-white">
                            Confirm Booking
                        </button>
                    </div>
                </div>
            </form>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-xl" style="max-width:80%;">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Please confirm data before submitting</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive no-data">
                      <table class="table-4 -border-bottom col-12">
                          <thead class="bg-dark-4 text-white">
                              <tr>
                                <th>SR#</th>
                                <th>Title</th>
                                <th>SurName </th>
                                <th>GivenName </th>
                                <th>Passport Number </th>
                                <th>Date Of Birth </th>
                                <th>Passport Expiry </th>
                                <th>Nationality </th>
                                <th>Mobile Number</th>
                                <th>Email </th>
                                <th>Whatsapp No </th>
                              </tr>
                          </thead>
                          <tbody id="dynamic-table-confirm">
                          </tbody>
                      </table>
                    </div>
                    <div class="form-check mt-3">
                      <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" type="checkbox" id="confrimations-checkbox" required />
                          <strong> I hereby confirm that all the information I have provided in this form is accurate and complete.</strong></label>
                      </div>
                      <span class="text-danger" id="confirmation-required"></span>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn  h-40 px-24 btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="button h-40 px-24 -dark-1 bg-blue-1 text-white" id="submit-details">Submit</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        @include('admin.partials.validation-errors')
        @include('agent.partials.footer')
        <!--start page footer -->
      </div>
    </div>
    </div>
    <script>
      var preventDefaultSubmit = true;
      $('#submit-details').on('click', function () {
        $("#confirmation-required").html('');
        if($('#confrimations-checkbox').prop('checked') == true){
          preventDefaultSubmit = false;
          $("#myForm").submit();
        }
        else{
          $("#confirmation-required").html('Please confirm before submit');
        }
      });
      $("#myForm").submit(function (event) {
        if (preventDefaultSubmit) {
          event.preventDefault();
        }
        var adults = $(".adults").length;
        var child = $(".child").length;
        var infants = $(".infants").length;
        var tableHtml = '';
        if(adults>0){
          for(var i=1; i<=adults;i++){
            tableHtml+=`<tr>
              <td>Adult `+i+`</td>
              <td>`+$('#adult_title_'+i).val()+`</td>
              <td>`+$('#adult_sur_name_'+i).val()+`</td>
              <td>`+$('#adult_given_name_'+i).val()+`</td>
              <td>`+$('#adult_passport_number_'+i).val()+`</td>
              <td>`+$('#adult_dob_'+i).val()+`</td>
              <td>`+$('#adult_passport_expiry_'+i).val()+`</td>
              <td>`+$('#adult_nationality_'+i).val()+`</td>
              <td>`+$('#adult_mobile_number_'+i).val()+`</td>
              <td>`+$('#adult_email_'+i).val()+`</td>
              <td>`+$('#adult_whatsapp_number_'+i).val()+`</td>
            </tr>`;
          }
          // $('#dynamic-table-adult-confirm').html(tableHtml);
        }
        if(child>0){
          for(var i=1; i<=child;i++){
            tableHtml+=`<tr>
              <td>Child `+i+`</td>
              <td>`+$('#child_title_'+i).val()+`</td>
              <td>`+$('#child_sur_name_'+i).val()+`</td>
              <td>`+$('#child_given_name_'+i).val()+`</td>
              <td>`+$('#child_passport_number_'+i).val()+`</td>
              <td>`+$('#child_dob_'+i).val()+`</td>
              <td>`+$('#child_passport_expiry_'+i).val()+`</td>
              <td>`+$('#child_nationality_'+i).val()+`</td>
              <td>`+$('#child_mobile_number_'+i).val()+`</td>
              <td>`+$('#child_email_'+i).val()+`</td>
              <td>`+$('#child_whatsapp_number_'+i).val()+`</td>
            </tr>`;
          }
          // $('#dynamic-table-adult-confirm').html(tableHtml);
        }
        if(infants>0){
          for(var i=1; i<=infants;i++){
            tableHtml+=`<tr>
              <td>Infant `+i+`</td>
              <td>`+$('#infants_title_'+i).val()+`</td>
              <td>`+$('#infants_sur_name_'+i).val()+`</td>
              <td>`+$('#infants_given_name_'+i).val()+`</td>
              <td>`+$('#infants_passport_number_'+i).val()+`</td>
              <td>`+$('#infants_dob_'+i).val()+`</td>
              <td>`+$('#infants_passport_expiry_'+i).val()+`</td>
              <td>`+$('#infants_nationality_'+i).val()+`</td>
              <td>`+$('#infants_mobile_number_'+i).val()+`</td>
              <td>`+$('#infants_email_'+i).val()+`</td>
              <td>`+$('#infants_whatsapp_number_'+i).val()+`</td>
            </tr>`;
          }
          // $('#dynamic-table-adult-confirm').html(tableHtml);
        }
        $('#dynamic-table-confirm').html(tableHtml);
        const form = document.querySelector("form.needs-validation");
        if (form.checkValidity()) {
          $('#staticBackdrop').modal('show');
        }
      });
    document.addEventListener('DOMContentLoaded', function () {
        var elementsToHide = document.getElementsByClassName('no-data');
        for (var i = 0; i < elementsToHide.length; i++) {
          elementsToHide[i].style.display = 'none';
        }
        // Function to create input fields
        function createAdultFields()
        {
            var numAdults = parseInt(document.getElementById('adults').value);
            var numChildren = parseInt(document.getElementById('children').value);
            var numInfants = parseInt(document.getElementById('infants').value);
            if(document.getElementById('adults').value.length == 0){
              numAdults = 0;
            }
            if(document.getElementById('children').value.length == 0){
              numChildren = 0;
            }
            if(document.getElementById('infants').value.length == 0){
              numInfants = 0;
            }
            if(numInfants == 0 && numChildren == 0 && numAdults == 0){
              var elementsToHide = document.getElementsByClassName('no-data');
              for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = 'none';
              }
            }
            else{
              var elementsToHide = document.getElementsByClassName('no-data');
              for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = 'block';
              }

            }
            var adultPriceInput = '{{$ticket->adult_price}}';
            var childPriceInput = '{{$ticket->child_price}}';
            var infantsPriceInput ='{{$ticket->infants_price}}';

            document.getElementById('adult_seats').innerHTML = numAdults;
            document.getElementById('child_seats').innerHTML = numChildren;
            document.getElementById('infants_seats').innerHTML = numInfants;
            document.getElementById('total_seats').innerHTML = numAdults+numChildren+numInfants;

            document.getElementById('adult_price').innerHTML = numAdults*adultPriceInput;
            document.getElementById('child_price').innerHTML = (numChildren*childPriceInput);
            document.getElementById('infants_price').innerHTML = (numInfants*infantsPriceInput);
            document.getElementById('total_price').innerHTML = (numAdults*adultPriceInput) + (numChildren*childPriceInput) + (numInfants*infantsPriceInput);
            
            var tableBody = document.querySelector('#dynamic-table-adult');
            tableBody.innerHTML = ''; 
            for (var i = 1; i <= numAdults; i++) {
                var row = document.createElement('tr');
                row.innerHTML = `
                       <tr>
                        <td>Adult `+i+`</td>
                        <td><div class="form-input ">
                          <div class="form-group">
                            <select class="form-control form-select bg_input adults" id="adult_title_`+i+`" name="adult[title][]" required>
                            <option value="Mr">Mr</option>   
                            <option value="Mrs">Mrs</option>   
                            <option value="Ms">Ms</option>
                            </select>
                          </div>
                        </div></td>
                        <td> <div class="form-input ">
                          <input type="text" required id="adult_sur_name_`+i+`" name="adult[sur_name][]">
                          <div class="invalid-feedback">Please Enter Sur Name.</div>
                        </div></td>
                        <td>
                          <div class="form-input ">
                                    <input type="text" required id="adult_given_name_`+i+`" name="adult[given_name][]">
                          <div class="invalid-feedback">Please Enter Given Name.</div>
                                  </div>
                          </td>
                          <td> <div class="form-input">
                                    <input type="text" id="adult_passport_number_`+i+`" name="adult[passport_number][]" required>
                                    <div class="invalid-feedback">Please Enter Passport No.</div>
                                  </div>
                            </td>
                            <td>
                              <div class="form-input">
                                    <input type="date" id="adult_dob_`+i+`" name="adult[dob][]" required>
                                    <div class="invalid-feedback">Please Enter Date of Birth.</div>
                                  </div>
                              </td>
                            <td> 
                              <div class="form-input">
                                    <input type="date" id="adult_passport_expiry_`+i+`" name="adult[passport_expiry][]" required>
                                    <div class="invalid-feedback">Please Enter Date of Expiry.</div>
                                  </div>
                            </td>
                           
                          <td> <div class="form-input">
                                    <input type="text" id="adult_nationality_`+i+`" name="adult[nationality][]" required>
                                    <div class="invalid-feedback">Please Enter Nationality.</div>
                                  </div>
                            </td>
                          <td> <div class="form-input">
                                    <input type="text" id="adult_mobile_number_`+i+`" name="adult[mobile_number][]">
                                    <span id="passportNumberError" class="text-danger"></span>
                                  </div>
                            </td>
                          <td> <div class="form-input">
                                    <input type="text" id="adult_email_`+i+`" name="adult[email][]">
                                    <span id="passportNumberError" class="text-danger"></span>
                                  </div>
                            </td>
                          <td> <div class="form-input">
                                    <input type="text" id="adult_whatsapp_number_`+i+`" name="adult[whatsapp_number][]">
                                    <span id="passportNumberError" class="text-danger"></span>
                                  </div>
                            </td>
                      </tr>            
                `;
                tableBody.appendChild(row);
            }
        }
        function createChildFields()
        {
            var numAdults = parseInt(document.getElementById('adults').value);
            var numChildren = parseInt(document.getElementById('children').value);
            var numInfants = parseInt(document.getElementById('infants').value);
            if(document.getElementById('adults').value.length == 0){
              numAdults = 0;
            }
            if(document.getElementById('children').value.length == 0){
              numChildren = 0;
            }
            if(document.getElementById('infants').value.length == 0){
              numInfants = 0;
            }
            if(numInfants == 0 && numChildren == 0 && numAdults == 0){
              var elementsToHide = document.getElementsByClassName('no-data');
              for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = 'none';
              }
            }
            else{
              var elementsToHide = document.getElementsByClassName('no-data');
              for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = 'block';
              }

            }
            var adultPriceInput = '{{$ticket->adult_price}}';
            var childPriceInput = '{{$ticket->child_price}}';
            var infantsPriceInput ='{{$ticket->infants_price}}';

            document.getElementById('adult_seats').innerHTML = numAdults;
            document.getElementById('child_seats').innerHTML = numChildren;
            document.getElementById('infants_seats').innerHTML = numInfants;
            document.getElementById('total_seats').innerHTML = numAdults+numChildren+numInfants;

            document.getElementById('adult_price').innerHTML = numAdults*adultPriceInput;
            document.getElementById('child_price').innerHTML = (numChildren*childPriceInput);
            document.getElementById('infants_price').innerHTML = (numInfants*infantsPriceInput);
            document.getElementById('total_price').innerHTML = (numAdults*adultPriceInput) + (numChildren*childPriceInput) + (numInfants*infantsPriceInput);
            
            var tableBody = document.querySelector('#dynamic-table-child');
            tableBody.innerHTML = ''; 
            for (var i = 1; i <= numChildren; i++)
            {
                var row = document.createElement('tr');
                row.innerHTML = `
                <tr>
                        <td>Child `+i+`</td>
                        <td><div class="form-input ">
                          <div class="form-group">
                            <select class="form-control form-select bg_input child" id="child_title_`+i+`" name="child[title][]" required>
                            <option value="Mstr">Mstr</option>   
                            <option value="Miss">Miss</option>
                            </select>
                          </div>
                        </div></td>
                        <td> <div class="form-input ">
                          <input type="text" required id="child_sur_name_`+i+`" name="child[sur_name][]">
                          <div class="invalid-feedback">Please Enter Sur Name.</div>
                        </div></td>
                        <td>
                          <div class="form-input ">
                                    <input type="text" required id="child_given_name_`+i+`" name="child[given_name][]">
                          <div class="invalid-feedback">Please Enter Given Name.</div>
                                  </div>
                          </td>
                          <td> <div class="form-input">
                                    <input type="text" id="child_passport_number_`+i+`" name="child[passport_number][]" required>
                                    <div class="invalid-feedback">Please Enter Passport No.</div>
                                  </div>
                            </td>
                            <td>
                              <div class="form-input">
                                    <input type="date" id="child_dob_`+i+`" name="child[dob][]" required>
                                    <div class="invalid-feedback">Please Enter Date of Birth.</div>
                                  </div>
                              </td>
                            <td> 
                              <div class="form-input">
                                    <input type="date"id="child_passport_expiry_`+i+`" name="child[passport_expiry][]" required>
                                    <div class="invalid-feedback">Please Enter Date of Expiry.</div>
                                  </div>
                            </td>
                           
                          <td> <div class="form-input">
                                    <input type="text" id="child_nationality_`+i+`" name="child[nationality][]" required>
                                    <div class="invalid-feedback">Please Enter Nationality.</div>
                                  </div>
                            </td>
                          <td> <div class="form-input">
                                    <input type="text" id="child_mobile_number_`+i+`" name="child[mobile_number][]">
                                    <span id="passportNumberError" class="text-danger"></span>
                                  </div>
                            </td>
                          <td> <div class="form-input">
                                    <input type="text" id="child_email_`+i+`" name="child[email][]">
                                    <span id="passportNumberError" class="text-danger"></span>
                                  </div>
                            </td>
                          <td> <div class="form-input">
                                    <input type="text" id="child_whatsapp_number_`+i+`" name="child[whatsapp_number][]">
                                    <span id="passportNumberError" class="text-danger"></span>
                                  </div>
                            </td>
                      </tr>  
                `;
                tableBody.appendChild(row);
            }
        }
        function createInfantsFields()
        {
            var numAdults = parseInt(document.getElementById('adults').value);
            var numChildren = parseInt(document.getElementById('children').value);
            var numInfants = parseInt(document.getElementById('infants').value);
            if(document.getElementById('adults').value.length == 0){
              numAdults = 0;
            }
            if(document.getElementById('children').value.length == 0){
              numChildren = 0;
            }
            if(document.getElementById('infants').value.length == 0){
              numInfants = 0;
            }
            if(numInfants == 0 && numChildren == 0 && numAdults == 0){
              var elementsToHide = document.getElementsByClassName('no-data');
              for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = 'none';
              }
            }
            else{
              var elementsToHide = document.getElementsByClassName('no-data');
              for (var i = 0; i < elementsToHide.length; i++) {
                elementsToHide[i].style.display = 'block';
              }

            }
            var adultPriceInput = '{{$ticket->adult_price}}';
            var childPriceInput = '{{$ticket->child_price}}';
            var infantsPriceInput ='{{$ticket->infants_price}}';

            document.getElementById('adult_seats').innerHTML = numAdults;
            document.getElementById('child_seats').innerHTML = numChildren;
            document.getElementById('infants_seats').innerHTML = numInfants;
            document.getElementById('total_seats').innerHTML = numAdults+numChildren+numInfants;

            document.getElementById('adult_price').innerHTML = numAdults*adultPriceInput;
            document.getElementById('child_price').innerHTML = (numChildren*childPriceInput);
            document.getElementById('infants_price').innerHTML = (numInfants*infantsPriceInput);
            document.getElementById('total_price').innerHTML = (numAdults*adultPriceInput) + (numChildren*childPriceInput) + (numInfants*infantsPriceInput);
            
            var tableBody = document.querySelector('#dynamic-table-infants');
            tableBody.innerHTML = ''; 
            // Create rows for infants
            for (var i = 1; i <= numInfants; i++) {
                var row = document.createElement('tr');
                row.innerHTML =`
                <tr>
                        <td>infant `+i+`</td>
                        <td><div class="form-input ">
                          <div class="form-group">
                            <select class="form-control form-select bg_input infants" id="infants_title_`+i+`" name="infants[title][]" required>
                              <option value="INF">INF </option>
                            </select>
                          </div>
                        </div></td>
                        <td> <div class="form-input ">
                          <input type="text" required id="infants_sur_name_`+i+`" name="infants[sur_name][]">
                          <div class="invalid-feedback">Please Enter Sur Name.</div>
                        </div></td>
                        <td>
                          <div class="form-input ">
                                    <input type="text" required id="infants_given_name_`+i+`" name="infants[given_name][]">
                          <div class="invalid-feedback">Please Enter Given Name.</div>
                                  </div>
                          </td>
                          <td> <div class="form-input">
                                    <input type="text" id="infants_passport_number_`+i+`" name="infants[passport_number][]" required>
                                    <div class="invalid-feedback">Please Enter Passport No.</div>
                                  </div>
                            </td>
                            <td>
                              <div class="form-input">
                                    <input type="date" id="infants_dob_`+i+`" name="infants[dob][]" required>
                                    <div class="invalid-feedback">Please Enter Date of Birth.</div>
                                  </div>
                              </td>
                            <td> 
                              <div class="form-input">
                                    <input type="date"id="infants_passport_expiry_`+i+`" name="infants[passport_expiry][]" required>
                                    <div class="invalid-feedback">Please Enter Date of Expiry.</div>
                                  </div>
                            </td>
                           
                          <td> <div class="form-input">
                                    <input type="text" id="infants_nationality_`+i+`" name="infants[nationality][]" required>
                                    <div class="invalid-feedback">Please Enter Nationality.</div>
                                  </div>
                            </td>
                          <td> <div class="form-input">
                                    <input type="text" id="infants_mobile_number_`+i+`" name="infants[mobile_number][]">
                                    <span id="passportNumberError" class="text-danger"></span>
                                  </div>
                            </td>
                          <td> <div class="form-input">
                                    <input type="text" id="infants_email_`+i+`" name="infants[email][]">
                                    <span id="passportNumberError" class="text-danger"></span>
                                  </div>
                            </td>
                          <td> <div class="form-input">
                                    <input type="text" id="infants_whatsapp_number_`+i+`" name="infants[whatsapp_number][]">
                                    <span id="passportNumberError" class="text-danger"></span>
                                  </div>
                            </td>
                      </tr>
                `;
                tableBody.appendChild(row);
            }
        }
        
        document.getElementById('adults').addEventListener('input', createAdultFields);
        document.getElementById('children').addEventListener('input', createChildFields);
         document.getElementById('infants').addEventListener('input', createInfantsFields);
        //  createAdultFields();
        //  createChildFields();
        //  createInfantsFields();
    });
</script>

    @endsection

   