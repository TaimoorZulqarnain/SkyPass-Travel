    
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

            <h1 class="text-30 lh-14 fw-600">Add Agent</h1>
            <div class="text-15 text-light-1">Please add all required fields.</div>

          </div>

          <div class="col-auto">

          </div>
        </div>
        <script>
        </script>
        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">     
        @include('admin.partials.errors')       
            <form class="needs-validation" novalidate method="POST" action="{{ route('agents.store') }}" id="main_author_form">
            @csrf
                <div class="col-xl-12">
                    <div class="row x-gap-20 y-gap-20">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Full Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" id="name" :value="old('name')" required>
                            <div class="invalid-feedback">Please Enter Full-Name.</div>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Email<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="email" id="email" :value="old('email')" required>
                            <div class="invalid-feedback">Please Add a Email.</div>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Password<span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" id="password" :value="old('password')" required>
                            <div class="invalid-feedback">Please fill out Password.</div>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Mobile No.<span class="text-danger">*</span></label>
                            <input type="text" name="mobile" class="form-control" id="mobile" :value="old('mobile')" required>
                            <div class="invalid-feedback">Please fill out Mobile No.</div>
                            @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                            @endif
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Organization/Company<span class="text-danger">*</span></label>
                            <input type="text" name="agent_company" class="form-control" id="agent_company" :value="old('agent_company')" required>
                            <div class="invalid-feedback">Please fill out Organization/Company.</div>
                            @if ($errors->has('agent_company'))
                                <span class="text-danger">{{ $errors->first('agent_company') }}</span>
                            @endif
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Address<span class="text-danger">*</span></label>
                            <input type="text" name="address" class="form-control" id="address" :value="old('address')" required>
                            <div class="invalid-feedback">Please fill out Address.</div>
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">City<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="city" id="city" :value="old('city')" required>
                            <div class="invalid-feedback">Please fill out City.</div>
                            @if ($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Country<span class="text-danger">*</span></label>
                            <select class="form-control" name="country" id="country" required>
                                <option value="">Select Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country }}">{{ $country }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Please fill out Country.</div>
                            @if ($errors->has('country'))
                                <span class="text-danger">{{ $errors->first('country') }}</span>
                            @endif
                            </div>
                        </div>                    
                    </div>
                    <div class="col-12 text-center">
                        <div class="d-inline-block pt-30">
                            <button type="submit" class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @include('admin.partials.validation-errors')
        <!--start page footer -->
        @include('admin.partials.footer')
<!--start page footer -->
    
    </div>
</div>
</div>
@endsection