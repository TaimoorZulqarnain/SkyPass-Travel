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
                    <h1 class="text-30 lh-14 fw-600">Add Pernissions</h1>
                </div>
                <div class="col-auto">
                </div>
            </div>
            <!--sidebar wrapper -->
            <div class="page-content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                {!! Form::open(array('route' => 'permissions.store','method'=>'POST')) !!}
                                <div class="form-group">
                                    {{ Form::label('name', 'Name') }}
                                    {{ Form::text('name', '', array('class' => 'form-control')) }}
                                </div>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                                <br>
                                @if(!$roles->isEmpty())
                                <h4>Assign Permission to Roles</h4>

                                @foreach ($roles as $role)
                                {{ Form::checkbox('roles[]',  $role->id ) }}
                                {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                                @endforeach
                                @endif
                                <br>
                                {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

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