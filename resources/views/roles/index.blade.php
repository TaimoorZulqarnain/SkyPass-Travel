@extends('layouts.admin')

@section('content')
<div class="preloader js-preloader">
</div>
<div class="header-margin"> </div>
@include('admin.partials.navigation')
<div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
    @include('admin.partials.sidebar')
    <div class="dashboard__main">
        <div class="dashboard__content">
            <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
          <div class="col-auto">
            <h1 class="text-30 lh-14 fw-600">All Roles</h1>
            @include('admin.partials.errors')
          </div>
          <div class="col-auto">
          <a href="{{URL::to('/create_role')}}" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                <i class="fa-solid fa-plus"></i> Add Roles
            </a>
          </div>
        </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example2" class="table table-striped table-bordered ">
                            <thead>
                                <tr>
                                    <th>Role</th>
                                    <th>Permissions</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <!-- <td>{{ str_replace(array('[',']','"'),'',$role->permissions()->pluck('name')) }}</td> -->
                                    <td>{{ implode(', ', $role->permissions()->pluck('name')->toArray()) }}</td>
                                    {{-- Retrieve array of permissions associated to a role and convert to string --}}
                                    <td>
                                    <div class="row x-gap-10 y-gap-10 items-center">
                                        <a href="{{route('roles.edit',$role->id)}}" class="flex-center bg-light-2 rounded-4 size-35">
                                            <i class="icon-edit text-16 text-light-1"></i></a>
                                        <a href="{{route('roles.destroy',$role->id)}}" class="flex-center bg-light-2 rounded-4 size-35" onclick="confirmation(event)">
                                            <i class="icon-trash-2 text-16 text-light-1"></i></a>
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

        <!--start page footer -->
        @include('admin.partials.footer')
        <!--start page footer -->

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