@extends('layouts.admin')

@section('content')
<div class="preloader js-preloader"></div>
<style>
/* Add these styles to your CSS stylesheet */
.card-body-scrollable {
    max-height: 400px; /* Adjust the maximum height as needed */
    overflow-y: auto;
    padding-right: 15px; /* Add right padding to prevent content from overlapping scrollbar */
}

/* Style the checkboxes and labels inside the card body */
.custom-control-label {
    font-weight: normal; /* Adjust font weight as needed */
}

/* Add some margin between the checkboxes and labels */
.custom-checkbox {
    margin-bottom: 10px; /* Adjust the margin as needed */
}
</style>
<div class="header-margin"></div>
@include('admin.partials.navigation')

<div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
    @include('admin.partials.sidebar')
    <div class="dashboard__main">
        <div class="dashboard__content">
            <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
                <div class="col-auto">
                    <h1 class="text-30 lh-14 fw-600">Add Roles</h1>
                </div>
                <div class="col-auto"></div>
            </div>

            <div class="page-content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body card-body-scrollable"> <!-- Add the card-body-scrollable class -->
                                {!! Form::open(array('route' => 'roles.store','method'=>'POST','class'=>'needs-validation','novalidate')) !!}
                                <div class="form-group row">
                                    <div class="col-sm-6 col-lg-4">
                                        {{ Form::label('name', 'Role Name') }}
                                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                                    </div>
                                    <div class="card-body col-xl-12">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5><strong>Assign Permissions</strong></h5>
                                                <div class="custom-control custom-checkbox custom-control-primary">
                                                    <input type="checkbox" id="selectAll" class="custom-control-input">
                                                    <label for="selectAll" class="custom-control-label">Select All</label>
                                                </div>
                                                @error('permissions')
                                                {{ Form::label('', $message, array('class'=>'error')) }}
                                                @enderror()
                                            </div>
                                            @foreach ($permissions as $permission)
                                            <div class="col-sm-4 col-md-6 col-lg-4">
                                                <div class="custom-control custom-checkbox custom-control-primary">
                                                    {{ Form::checkbox('permissions[]',  $permission->id, null, array('class'=>'custom-control-input', 'id'=>$permission->name)) }}
                                                    {{ Form::label($permission->name, ucfirst($permission->name), array('class'=>'custom-control-label')) }}
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="clearfix">&nbsp;</div>
                                        {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
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

<script>
    $(document).ready(function () {
        $('#selectAll').change(function () {
            var checkboxes = $('.custom-control-input');
            checkboxes.prop('checked', $(this).prop('checked'));
        });

        $('.custom-control-input').change(function () {
            var allChecked = $('.custom-control-input:checked').length === $('.custom-control-input').length;
            $('#selectAll').prop('checked', allChecked);
        });
    });
</script>

@endsection
