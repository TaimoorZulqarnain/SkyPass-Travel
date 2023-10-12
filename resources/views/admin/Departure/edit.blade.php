    
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
            <h1 class="text-30 lh-14 fw-600">Edit Departure</h1>
          </div>
          <div class="col-auto">
          </div>
        </div>
        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__content pt-30 js-tabs-content">
            <form action="{{ route('departure.edit',$departure->id) }}" method="post">
                    @csrf
              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="col-xl-12">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-6">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Departure Name</label>
                        <span class="text-danger">*</span>
                        <input  type="text" name="name" value="{{ $departure->name }}" class="form-control @error('title', 'post') is-invalid @enderror" id="name" placeholder="Enter Departure Name" value="{{old('name')}}">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                    </div>
                  </div>                   
                  </div>
                </div>

                <div class="d-inline-block pt-30">
                  <button type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                    Update changes
                </button>
                
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
  </div>
    @endsection