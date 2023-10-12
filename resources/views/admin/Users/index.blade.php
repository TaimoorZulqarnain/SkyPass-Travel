@extends('layouts.admin')

@section('content')

<div class="preloader js-preloader"></div>
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
            <h1 class="text-30 lh-14 fw-600">All Users</h1>
            @include('admin.partials.errors')
          </div>
          <div class="col-auto">
          <a href="{{URL::to('/admin/create_user')}}" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                <i class="fa-solid fa-plus"></i> Add User
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
                                    <label class="lh-1 text-16 text-light-1">Type</label>
                                    <div class="form-group">
                                        <select class="form-control form-select bg_input" name="user_type" id="user_type">
                                            <option value="">Select Option</option>
                                            <option value="Agent">Agent</option>
                                            <option value="Admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-input">
                                    <label class="lh-1 text-16 text-light-1">User Status</label>
                                    <div class="form-group">
                                        <select class="form-control form-select bg_input" name="user_status" id="user_status">
                                            <option value="">Select Option</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Active">Active</option>
                                            <option value="InActive">InActive</option>
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
              <div class="col-auto">
                <button class="tabs__button text-18 lg:text-16 text-light-1 fw-500 pb-5 lg:pb-0 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">All Users</button>
              </div>
            </div>
            <div class="tabs__content pt-30 js-tabs-content">
              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-2">
                  <table class="table-4 -border-bottom col-12 yajra-datatable">
                    <thead class="bg-light-2">
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Contact No</th>
                        <th>Status</th>
                        <th>Image</th>
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
        <script type="text/javascript">
            $(document).ready(function() {
      
                var table = $('.yajra-datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {  
                    url: "{{ route('user-data') }}",  
                    data: function (d) {
                        d.searchInput = $('#searchInput').val();
                        d.filter_option = $('#user_type').val();
                        d.user_status = $('#user_status').val();
                    }
                  },
                    columns: [
                        // {data: 'sr_no', name: 'sr_no'},
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'name', name : 'name'},
                        {data: 'email', name: 'email'},
                        {data: 'user_type', name: 'user_type'},
                        {data: 'mobile', name: 'mobile'},
                        {data: 'user_status', name: 'user_status'},
                        {data: 'profile_photo_path', name: 'profile_photo_path'},
                        {
                            data: 'action', 
                            name: 'action', 
                            orderable: true, 
                            searchable: true
                        },
                    ]
                });
                table.ajax.reload();
                $('#user_type').on('change', function () {
                table.ajax.reload();
                });
                $('#user_status').on('change', function () {
                table.ajax.reload();
                });

                $('#searchInput').on('keyup', function () {
                table.ajax.reload();
                });
            });
        </script>

    <script>
    $(document).ready(function () {
        $(document).on('click', '.deleteUser', function () {
            
            var userId = $(this).data('id');
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
                        url: '/admin/user_delete/' + userId,
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
                                //table.reload();
            
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