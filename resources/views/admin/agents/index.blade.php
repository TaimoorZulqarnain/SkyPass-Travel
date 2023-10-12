    
@extends('layouts.admin')

@section('content')
<div class="preloader js-preloader">
  </div>
  <div class="header-margin"> </div>

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
            <h1 class="text-30 lh-14 fw-600">All Agents</h1>
            
          </div>
          <div class="col-auto">
            <a href="{{ route('agents.create') }}" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                <i class="fa-solid fa-plus"></i> Add Agent
            </a>
          </div>
        </div>
        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
            @include('admin.partials.errors')
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__content pt-30 js-tabs-content">

              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-2">
                  <table class="table-4 -border-bottom col-12 yajra-datatable">
                    <thead class="bg-light-2">
                      <tr>
                        <th>
                         Sr.
                        </th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Company</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Country</th>
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

          <!-- <div class="pt-30">
            <div class="row justify-between">
              <div class="col-auto">
                <button class="button -blue-1 size-40 rounded-full border-light">
                  <i class="icon-chevron-left text-12"></i>
                </button>
              </div>

              <div class="col-auto">
                <div class="row x-gap-20 y-gap-20 items-center">

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full">1</div>

                  </div>

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                  </div>

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full">3</div>

                  </div>

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full bg-light-2">4</div>

                  </div>

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full">5</div>

                  </div>

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full">...</div>

                  </div>

                  <div class="col-auto">

                    <div class="size-40 flex-center rounded-full">20</div>

                  </div>

                </div>
              </div>

              <div class="col-auto">
                <button class="button -blue-1 size-40 rounded-full border-light">
                  <i class="icon-chevron-right text-12"></i>
                </button>
              </div>
            </div>
          </div> -->
        </div>
        <script type="text/javascript">
            $(function () {

                var table = $('.yajra-datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('agents-data') }}",
                    columns: [
                        // {data: 'sr_no', name: 'sr_no'},
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'name', name: 'name'},
                        {data: 'email', name: 'email'},
                        {data: 'mobile', name: 'mobile'},
                        {data: 'agent_company', name: 'agent_company'},
                        {data: 'address', name: 'address'},
                        {data: 'city', name: 'city'},
                        {data: 'country', name: 'country'},
                        {
                            data: 'action', 
                            name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
                });

            });
        </script>
         <script>
            $(document).ready(function () {
                $(document).on('click','.deleteAgent', function () {
                    var agentId = $(this).data('id');
                    var buttonElement = $(this); 
                    swal({
                        title:"Are You Sure to delete this",
                        text: "You won't be able to revert this delete",
                        icon: "warning",
                        buttons: true,
                        dangerMode:true,
                    })
                    .then((willCancel)=>{
                        $.ajax({
                            url: '/admin/agents/' + agentId,
                            type: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            success: function (response) {
                                let Settings = {
                                    duration:  3000,
                                    showProgress: true,
                                    toastLocation: 'top'
                                };
                                Toast.success("Success! "+response.message+".", Settings);
                                buttonElement.closest("tr").remove();
                            },
                            error: function (xhr) {
                                let Settings = {
                                    duration:  3000,
                                    showProgress: true,
                                    toastLocation: 'top'
                                };
                                Toast.error("Error! Record not deleted.", Settings);
                            }
                        });
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