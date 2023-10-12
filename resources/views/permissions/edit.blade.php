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
                    <h1 class="text-30 lh-14 fw-600">Add Roles</h1>
                </div>
                <div class="col-auto">
                </div>
            </div>

<div class="page-content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                {{ Form::model($permission, array('route' => array('permissions.update', $permission->id), 'method' => 'POST')) }}
                        <div class="form-group row">
                            <div class="col-sm-6 col-lg-4">

                                {{ Form::label('name', 'Permission Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-sm-12">
                                <div class="clearfix">&nbsp;</div>
                                {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
                            </div>
                        </div>

                        {{ Form::close() }}
                </div>
            </div>
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