    
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
            <h1 class="text-30 lh-14 fw-600">Add Airline</h1>
          </div>
          <div class="col-auto">
          </div>
        </div>
        <div class="py-15 px-30 rounded-4 bg-white custom_shadow">
          <div class="tabs -underline-2 js-tabs">
            <div class="tabs__content pt-30 js-tabs-content">
            <form action="{{ route('airline.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
              <div class="tabs__pane -tab-item-1 is-tab-el-active">
                <div class="col-xl-12">
                  <div class="row x-gap-20 y-gap-20">
                    <div class="col-12">
                      <div class="form-input ">
                        <label class="lh-1 text-16 text-light-1">Airline Name</label>
                        <span class="text-danger">*</span>
                        <input  type="text" name="name" class="form-control @error('title', 'post') is-invalid @enderror" id="name" placeholder="Enter Airline Name" value="{{old('name')}}">
                        @if ($errors->has('name'))
                       <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>

                  <div class="mt-30">
                    <div class="fw-500">Images<span class="text-danger">*</span></div>
                    <div class="row x-gap-20 y-gap-20 pt-15">
                    <div class="col-auto">
                        <div class="w-200">
                            <label for="imageUpload">
                                <div class="d-flex ratio ratio-1:1">
                                    <div class="flex-center flex-column text-center bg-blue-2 h-full w-1/1 absolute rounded-4 border-type-1">
                                        <div class="icon-upload-file text-40 text-blue-1 mb-10"></div>
                                        <label for="imageUpload" class="text-blue-1 fw-500">Upload Images</label>
                                        <input type="file" id="imageUpload" name="image" accept="image/png, image/jpeg" style="display: none;">
                                        <!-- Remove the 'required' attribute here -->
                                    </div>
                                </div>
                                <div class="text-center mt-10 text-14 text-light-1">PNG or JPG no bigger than 800px wide and tall.</div>
                            </label>
                            @if ($errors->has('image'))
                       <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                        </div>
                    </div>
                </div>
                   
                  </div>
                </div>
                <div class="col-12 text-center">
                <div class="d-inline-block pt-30">
                  <button type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                    Save changes
                </button>
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
    @endsection