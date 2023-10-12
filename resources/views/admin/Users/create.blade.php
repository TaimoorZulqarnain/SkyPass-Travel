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
                    <h1 class="text-30 lh-14 fw-600">Add Users</h1>
                </div>
                <div class="col-auto">
                </div>
            </div>
            <div class="py-15 px-30 rounded-4 bg-white custom_shadow">
                <div class="tabs -underline-2 js-tabs">
                    <div class="tabs__content pt-10 js-tabs-content">
                        <form class="needs-validation" novalidate action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row tabs__pane -tab-item-1 is-tab-el-active">
                                <div class="col-xl-9">
                                    <div class="row x-gap-20 y-gap-20">
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            <div class="form-input">
                                                <label class="lh-1 text-16 text-light-1">Title</label>
                                                <span class="text-danger">*</span>
                                                <input type="text" name="name" required class="form-control @error('title', 'post') is-invalid @enderror" id="name" placeholder="Enter Name" value="{{old('name')}}" />
                                                <div class="invalid-feedback">
                                                    Please Enter Name field.
                                                </div>
                                                @if ($errors->has('title'))
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            <div class="form-input">
                                                <label class="lh-1 text-16 text-light-1">Email</label>
                                                <span class="text-danger">*</span>
                                                <input type="text" name="email" required class="form-control @error('title', 'post') is-invalid @enderror" id="name" placeholder="Enter Email" value="{{old('email')}}" />
                                               
                                                <div class="invalid-feedback">
                                                    Please Enter Email field.
                                                </div>
                                                @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            <div class="form-input booking_input_fields">
                                                <label class="lh-1 text-16 text-light-1">User Type</label>
                                                <span class="text-danger">*</span>
                                                <div class="form-group">
                                                    <select class="form-control form-select bg_input" name="user_type" required>
                                                        <option value="">Select Option</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Agent">Agent/B2B</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                    Please Enter User-type field.
                                                </div>
                                                </div>
                                              
                                                @if ($errors->has('title'))
                                                <span class="text-danger">{{ $errors->first('user_type') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            <div class="form-input">
                                                <label class="lh-1 text-16 text-light-1">Password</label>
                                                <span class="text-danger">*</span>
                                                <input type="password" name="password" required class="form-control @error('title', 'post') is-invalid @enderror" id="name" placeholder="Enter Password" value="{{old('name')}}" />
                                                <div class="invalid-feedback">
                                                    Please Enter Password field.
                                                </div>
                                                @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            <div class="form-input">
                                                <label class="lh-1 text-16 text-light-1">Mobile</label>
                                                <span class="text-danger">*</span>
                                                <input type="text" name="mobile" required class="form-control @error('title', 'post') is-invalid @enderror" id="name" placeholder="Enter Mobile No" value="{{old('mobile')}}" />
                                                <div class="invalid-feedback">
                                                    Please Enter Mobile field.
                                                </div>
                                                @if ($errors->has('mobile'))
                                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                        <div class="form-input">
                                        <label class="lh-1 text-16 text-light-1">Select Roles</label>
                                        {{ Form::select('roles', $roles->pluck('name', 'id'), null, ['class' => 'form-control']) }}
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-xl-3">
                                    <div class="fw-500">Images</div>
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="w-200">
                                                <label for="imageUpload">
                                                    <div class="d-flex ratio ratio-1:1">
                                                        <div class="flex-center flex-column text-center bg-blue-2 h-full w-1/1 absolute rounded-4 border-type-1">
                                                            <div class="icon-upload-file text-40 text-blue-1 mb-10"></div>
                                                            <label for="imageUpload" class="text-blue-1 fw-500">Upload Images</label>
                                                            <input class="form-control" type="file" id="imageUpload" name="profile_photo_path" accept="image/png, image/jpeg" style="display: none;">
                                                        </div>
                                                    </div>
                                                    <div class="text-center mt-10 text-14 text-light-1">PNG or JPG no bigger than 800px wide and tall.</div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row content-justify-end">
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