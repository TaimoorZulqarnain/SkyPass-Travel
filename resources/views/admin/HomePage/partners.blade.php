@extends('layouts.admin')

@section('content')
<div class="preloader js-preloader">
</div>
<div class="header-margin">
</div>

<!--start header -->
@include('admin.partials.navigation')
<!--end header -->
<div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
    <!--sidebar wrapper -->
    @include('admin.partials.sidebar')
    <!--end sidebar wrapper -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
    <div class="dashboard__main">
        <div class="dashboard__content">
            <div class="row y-gap-20 justify-between items-end pb-20 lg:pb-40 md:pb-32">
                <div class="col-auto">
                    <h1 class="text-30 lh-14 fw-600">Home Page</h1>
                </div>
                <div class="col-auto">
                    <a href="{{URL::to('/')}}" target=_blank class="button h-50 px-24 -dark-1 bg-blue-1 text-white">
                        <i class="fa-solid fa-plus"></i> View Page
                    </a>
                </div>
            </div>
            <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
                <div class="tabs -underline-2 js-tabs">
                    <div class="tabs__controls row x-gap-40 y-gap-10 lg:x-gap-20 js-tabs-controls">
                        <div class="row">
                            <h2>Our Parthners</h2>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="">Parthner 01</label>
                                    <img alt="Parthner Image" src="" onerror="this.style.display='none'" class="img-responsive mt-2" width="100%" height="100" id="">
                                    <input type="hidden" class="d-none" name="">
                                    <input type="file" class="form-control" id="" name="" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="">Parthner 02</label>
                                    <img alt="Parthner Image" src="" onerror="this.style.display='none'" class="img-responsive mt-2" width="100%" height="100" id="">
                                    <input type="hidden" class="d-none" name="">
                                    <input type="file" class="form-control" id="" name="" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="">Parthner 03</label>
                                    <img alt="Parthner Image" src="" onerror="this.style.display='none'" class="img-responsive mt-2" width="100%" height="100" id="">
                                    <input type="hidden" class="d-none" name="">
                                    <input type="file" class="form-control" id="" name="" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="">Parthner 04</label>
                                    <img alt="Parthner Image" src="" onerror="this.style.display='none'" class="img-responsive mt-2" width="100%" height="100" id="">
                                    <input type="hidden" class="d-none" name="">
                                    <input type="file" class="form-control" id="" name="" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="">Parthner 05</label>
                                    <img alt="Parthner Image" src="" onerror="this.style.display='none'" class="img-responsive mt-2" width="100%" height="100" id="">
                                    <input type="hidden" class="d-none" name="">
                                    <input type="file" class="form-control" id="" name="" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="">Parthner 06</label>
                                    <img alt="Parthner Image" src="" onerror="this.style.display='none'" class="img-responsive mt-2" width="100%" height="100" id="">
                                    <input type="hidden" class="d-none" name="">
                                    <input type="file" class="form-control" id="" name="" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="">Parthner 07</label>
                                    <img alt="Parthner Image" src="" onerror="this.style.display='none'" class="img-responsive mt-2" width="100%" height="100" id="">
                                    <input type="hidden" class="d-none" name="">
                                    <input type="file" class="form-control" id="" name="" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="">Parthner 08</label>
                                    <img alt="Parthner Image" src="" onerror="this.style.display='none'" class="img-responsive mt-2" width="100%" height="100" id="">
                                    <input type="hidden" class="d-none" name="">
                                    <input type="file" class="form-control" id="" name="" accept="image/*">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--start page footer -->
            @include('admin.partials.footer')
            <!--start page footer -->
            <script>
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
        </div>
    </div>
</div>
@endsection