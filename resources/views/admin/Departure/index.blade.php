    
@extends('layouts.admin')

@section('content')
<div class="preloader js-preloader">
  </div>
  <div class="header-margin">
  </div>

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
            <h1 class="text-30 lh-14 fw-600">All Departure</h1>
            @include('admin.partials.errors')
          </div>
          <div class="col-auto">
            <a href="{{URL::to('/admin/create_departure')}}" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                <i class="fa-solid fa-plus"></i> Add Departure
            </a>
          </div>
        </div>


        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">

            </div>

            <div class="tabs__content pt-30 js-tabs-content">

              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="overflow-scroll scroll-bar-2">
                  <table class="table-4 -border-bottom col-12" id="departure_tbl">
                    <thead class="bg-light-2">
                      <tr>
                        <th>
                         #
                        </th>
                        <th>Departure Title</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($Departures as $departure)
                      <tr>
                      <td>{{ $loop->iteration }}</td>
                        <td>{{$departure->name}}</td>
                        <td>
                          <div class="row x-gap-10 y-gap-10 items-center">
                              <a href="{{route('departure.edit',$departure->id)}}" class="flex-center bg-light-2 rounded-4 size-35">
                                <i class="icon-edit text-16 text-light-1"></i>
                              </a>
                              <a href="{{ route('departure.delete', ['id' => $departure->id]) }}" class="flex-center bg-light-2 rounded-4 size-35" onclick="confirmation(event)">
                                <i class="icon-trash-2 text-16 text-light-1"></i>
                              </a>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    
          <!--start page footer -->
    @include('admin.partials.footer')
    <!--start page footer -->

      <script>
        $(document).ready(function (){
          $('#departure_tbl').DataTable();
        });
      </script>

    <script>
      function confirmation(e){
        e.preventDefault();
        var urlRedirect = e.currentTarget.getAttribute('href');
        console.log(urlRedirect);
        swal({
          title:"Are You Sure to delete this",
          text: "You won't be able to revert this delete",
          icon: "warning",
          buttons: true,
          dangerMode:true,
        })
        .then((willCancel)=>
        {
          if(willCancel){
            window.location.href=urlRedirect;
          }
        });
      }
    </script>
       
      </div>
    </div>
    </div>
    @endsection