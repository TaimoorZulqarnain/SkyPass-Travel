@extends('layouts.admin')

@section('content')

<div class="preloader js-preloader">
  
</div>
  <div class="header-margin"></div>

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
            <h1 class="text-30 lh-14 fw-600">All Tickets</h1>
            @include('admin.partials.errors')
          </div>
          <div class="col-auto">
          <a href="{{URL::to('/admin/create_ticket')}}" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                <i class="fa-solid fa-plus"></i> Add Ticket
            </a>
          </div>
        </div>
        <div class="px-30 rounded-4 bg-white custom_shadow">
    <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
        <div class="col-12">
            <form action="" method="GET" id="filterForm">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <div class="col-xl-10">
                        <div class="row x-gap-20 y-gap-20">
                        <div class="col-3">
                                <div class="form-input">
                                    <label class="lh-1 text-16 text-light-1">Search Keyword</label>
                                    <div class="form-group">
                                    <input type="text" name="searchInput" id="searchInput" placeholder="Type keywords..." />
                                    </div>
                                </div>
                            </div>
                       
                            <div class="col-3">
                                <div class="form-input">
                                    <label class="lh-1 text-16 text-light-1">Select Airline</label>
                                    <div class="form-group">
                                        <select class="form-control form-select bg_input" id="airline_id" name="airline_id">
                                            {!! get_airline_title() !!}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-input">
                                    <label class="lh-1 text-16 text-light-1">Select Type</label>
                                    <div class="form-group">
                                        <select class="form-control form-select bg_input" name="service_type" id="serviceTypeFilter">
                                            <option value="">Select Option</option>
                                            <option value="One Way">One Way</option>
                                            <option value="Two Way">Return/two way</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">
              
            </div>
            <div class="tabs__content pt-30 js-tabs-content">
              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-2">
                  <table class="table-4 -border-bottom col-12 yajra-datatable">
                    <thead class="bg-light-2">
                      <tr>
                        <th>#</th>
                        <th>Airline</th>
                        <th>Adult Price</th>
                        <th>Child Price</th>
                        <th>Infants Price</th>
                        <th>Adult Discount</th>
                        <th>Child Discount</th>
                        <th>Infants Discount</th>
                        <th>Seats</th>
                        <th>Is Featured</th>
                        <th>Meal</th>
                        <th>Note</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

<!-- Modal -->
            <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-xl" style="max-width:80%;">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel" style="color: #009bb2;">Tickets Sector Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="table-responsive no-data">
                      <table class="table-4 -border-bottom col-12" id="ticketDetailsTable">
                          <thead class="text-white" style="background-color: #009bb2;">
                          <tr>
                          <th scope="row">Flight Number</th>
                          <th scope="row">Departure</th>
                          <th scope="row">Baggage</th>
                          <th scope="row">Fare Seats</th>
                          <th scope="row">Seats Policy</th>
                          <th scope="row">Departure Date</th>
                          <th scope="row">Arrival Date</th>
                          </tr>
                          </thead>
                          <tbody>
                          </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn  h-40 px-24 btn-secondary" data-bs-dismiss="modal" style="background-color: #FF7A1A;">Close</button>
                  </div>
                </div>
              </div>
            </div>
        <script type="text/javascript">
            $(document).ready(function() {
      
                var table = $('.yajra-datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {  
                    url: "{{ route('ticket-data') }}",  
                    data: function (d) {
                        d.searchInput = $('#searchInput').val();
                        d.filter_option = $('#serviceTypeFilter').val();
                        d.airline_id = $('#airline_id').val();
                    }
                  },
                    columns: [
                        // {data: 'sr_no', name: 'sr_no'},
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'airline_id', name : 'airline_id'},
                        {data: 'adult_price', name: 'adult_price'},
                        {data: 'child_price', name: 'child_price'},
                        {data: 'infants_price', name: 'infants_price'},
                        {data: 'adult_discount', name: 'adult_discount'},
                        {data: 'child_discount', name: 'child_discount'},
                        {data: 'infants_discount', name: 'infants_discount'},
                        {data: 'service_type', name: 'service_type'},
                        {data: 'is_featured', name: 'is_featured'},
                        {data: 'meal', name: 'meal'},
                        {data: 'note', name: 'note'},
                        {
                            data: 'action', 
                            name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
                });
                table.ajax.reload();

            $('#serviceTypeFilter').on('change', function () {
            table.ajax.reload();
             });
            $('#airline_id').on('change', function () {
            table.ajax.reload();
            });
            $('#searchInput').on('keyup', function () {
            table.ajax.reload();
            });

            });

        </script>

<script>
  $(document).ready(function() {
    $(document).on('click', '.viewTicket', function() {
      var ticketId = $(this).data('id');
      var buttonElement = $(this);

      $.ajax({
        url: '/admin/ticket_sector/' + ticketId,
        type: 'GET',
        success: function(response) {
          console.log(response);

          // Clear any previous data
          $('#ticketDetailsTable tbody').empty();

          // Update the modal title
          $('#ticket_title').text('Ticket Details Sector-Wise');

          if (response.length === 0) {
  
  $('#ticketDetailsTable tbody').html('<tr><td colspan="7">Data Not Available</td></tr>');
} else {
  $.each(response, function(index, item) {
    var departureDate = new Date(item.departure_date);
    var arrivalDate = new Date(item.arrival_date);
    
    var options = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };
    
    var departureFormatted = departureDate.toLocaleDateString('en-US', options);
    var arrivalFormatted = arrivalDate.toLocaleDateString('en-US', options);

    var ticketRow = '<tr>';
    ticketRow += '<td>' + item.flight_num + '</td>';
    ticketRow += '<td>' + item.departure + '</td>';
    ticketRow += '<td>' + item.baggage + '</td>';
    ticketRow += '<td>' + item.fare_seats + '</td>';
    ticketRow += '<td>' + item.seats_policy + '</td>';
    ticketRow += '<td>' + departureFormatted + '</td>';
    ticketRow += '<td>' + arrivalFormatted + '</td>';
    // Add more fields as needed
    ticketRow += '</tr>';

    // Append the HTML content to the ticket details table
    $('#ticketDetailsTable tbody').append(ticketRow);
  });
}


          // Show the modal
          $('#ticketModal').modal('show');
        },
        error: function(xhr, status, error) {
          console.error(error);
        }
      });
    });
  });
</script>

    <script>
    $(document).ready(function () {
        $(document).on('click', '.deleteTicket', function () {
            var ticketId = $(this).data('id');
            var buttonElement = $(this);

            swal({
                title: "Are You Sure to delete this?",
                text: "You won't be able to revert this delete",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willCancel) => {
                if (willCancel) {
                    $.ajax({
                        url: '/admin/ticket_delete/' + ticketId,
                        type: 'GET',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function (response) {
                          console.log(response);
                            let Settings = {
                                duration: 3000,
                                showProgress: true,
                                toastLocation: 'top'
                            };
                            if (response.success) {
                                Toast.success("Success! " + response.message, Settings);
                                buttonElement.closest("tr").remove();
                            } else {
                                Toast.danger("Error! " + response.message, Settings);
                            }
                        },
                        error: function (xhr) {
                            let Settings = {
                                duration: 3000,
                                showProgress: true,
                                toastLocation: 'top'
                            };
                            Toast.danger("Error! Record not deleted.", Settings);
                        }
                    });
                }
            });
        });
    });
</script>

    <!--start page footer -->
    @include('admin.partials.footer')
    <!--start page footer -->
      </div>
    </div>
  </div>
    @endsection