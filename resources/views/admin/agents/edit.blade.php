    
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

            <h1 class="text-30 lh-14 fw-600">Edit Agent</h1>
            <div class="text-15 text-light-1">Please add all required fields.</div>

          </div>

          <div class="col-auto">

          </div>
        </div>
        <script>
            // let Settings = {
            //     duration:  3000,
            //     showProgress: true,
            //     toastLocation: 'top'
            // };
            // Toast.success('Success! This is a success message.', Settings);
        </script>
        <div class="py-30 px-30 rounded-4 bg-white custom_shadow">            
        @include('admin.partials.errors')
            <form method="POST" action="{{ route('agents.update', $agent->agent_id) }}" id="main_author_form">
            @method('PUT')
            @csrf
                <input type="hidden" name="old_email" id="old_email" value="{{$agent->email}}" required>
                <input type="hidden" name="old_password" id="old_password" value="{{$agent->password}}" required>
                <div class="col-xl-12">
                    <div class="row x-gap-20 y-gap-20">
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Full Name<span class="text-danger">*</span></label>
                            <input type="text" name="name" id="name" value="{{$agent->name}}" required class="form-control">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Email<span class="text-danger">*</span></label>
                            <input type="text" name="email" id="email" value="{{$agent->email}}" required class="form-control">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Password</label>
                            <input type="password" name="password" id="password" value="" class="form-control">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Mobile No.<span class="text-danger">*</span></label>
                            <input type="text" name="mobile" id="mobile" value="{{$agent->mobile}}" required class="form-control">
                            @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                            @endif
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Organization/Company<span class="text-danger">*</span></label>
                            <input type="text" name="agent_company" id="agent_company" value="{{$agent->agent_company}}" required class="form-control">
                            @if ($errors->has('agent_company'))
                                <span class="text-danger">{{ $errors->first('agent_company') }}</span>
                            @endif
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Address<span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address" value="{{$agent->address}}" required class="form-control">
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">City<span class="text-danger">*</span></label>
                            <input type="text" name="city" id="city" value="{{$agent->city}}" required class="form-control">
                            @if ($errors->has('city'))
                                <span class="text-danger">{{ $errors->first('city') }}</span>
                            @endif
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-12">
                            <div class="form-input ">
                            <label class="lh-1 text-16 text-light-1">Country<span class="text-danger">*</span></label>
                            <select name="country" id="country" required  class="form-control">
                                <option value="">Select Country</option>
                                @foreach ($countries as $country)
                                    @if ($country == $agent->country)
                                        <option value="{{ $country }}" selected>{{ $country }}</option>
                                    @else
                                        <option value="{{ $country }}">{{ $country }}</option>
                                    @endif
                                @endforeach
                            </select>
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


       
        <!--start page footer -->
        @include('admin.partials.footer')
<!--start page footer -->
    
    </div>
    </div>
</div>
@endsection