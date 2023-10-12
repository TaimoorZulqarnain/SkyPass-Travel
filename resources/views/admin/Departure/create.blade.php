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
              <h1 class="text-30 lh-14 fw-600">Add Departure</h1>
            </div>
            <div class="col-auto">
            </div>
          </div>
          <div class="py-15 px-30 rounded-4 bg-white custom_shadow">
            <div class="tabs -underline-2 js-tabs">
              <div class="tabs__content pt-30 js-tabs-content">
                <form class="needs-validation" novalidate action="{{ route('departure.store') }}" method="post">
                  @csrf
                  <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <div class="col-xl-12">
                      <div class="row x-gap-20 y-gap-20">
                        <div class="col-xl-6 col-md-6 col-sm-12">
                          <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Departure Name</label>
                            <span class="text-danger">*</span>
                            <input type="text" name="name" required class="form-control @error('title', 'post') is-invalid @enderror" id="name" placeholder="Enter Departure Name" value="{{old('name')}}">
                            <div class="invalid-feedback">Please Enter Departure-Title field.</div>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
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
          @include('admin.partials.validation-errors')
          @include('admin.partials.footer')
          <!--start page footer -->
        </div>
      </div>
    </div>
    @endsection