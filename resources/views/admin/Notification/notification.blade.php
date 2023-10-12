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
                        <h1 class="text-30 lh-14 fw-600">All Notifications</h1>
                    </div>
                    <div class="col-auto">
                    </div>
                </div>
                <div class="py-30 px-30 rounded-4 bg-white custom_shadow">
                    <div class="tabs -underline-2 js-tabs">
                        <div class="tabs__content js-tabs-content">
                            <div class="accordion -simple row y-gap-20 js-accordion">
                                <div class="col-12">
                                    <div class="accordion__item px-20 py-20 border-light rounded-4">
                                        <div class="accordion__button d-flex items-center">
                                            <div
                                                class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                                <i class="icon-plus"></i>
                                                <i class="icon-minus"></i>
                                            </div>

                                            <div class="button text-dark-1">It is a long established fact that a reader
                                                will be distracted by the readable content?</div>
                                        </div>
                                        <div class="accordion__content">
                                            <div class="pt-20 pl-60">
                                                <p class="text-15">There are many variations of passages of Lorem Ipsum
                                                    available, but the majority have suffered alteration in some form,
                                                    by injected humour, or randomised words which don't look even
                                                    slightly believable.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion__item px-20 py-20 border-light rounded-4">
                                        <div class="accordion__button d-flex items-center">
                                            <div
                                                class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                                <i class="icon-plus"></i>
                                                <i class="icon-minus"></i>
                                            </div>
                                            <div class="button text-dark-1">
                                                It is a long established fact that a reader will be distracted by the readable content?
                                            </div>
                                        </div>
                                        <div class="accordion__content">
                                            <div class="pt-20 pl-60">
                                                <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion__item px-20 py-20 border-light rounded-4">
                                        <div class="accordion__button d-flex items-center">
                                            <div
                                                class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                                <i class="icon-plus"></i>
                                                <i class="icon-minus"></i>
                                            </div>
                                            <div class="button text-dark-1">It is a long established fact that a reader will be distracted by the readable content?</div>
                                        </div>
                                        <div class="accordion__content">
                                            <div class="pt-20 pl-60">
                                                <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="accordion__item px-20 py-20 border-light rounded-4">
                                        <div class="accordion__button d-flex items-center">
                                            <div
                                                class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                                <i class="icon-plus"></i>
                                                <i class="icon-minus"></i>
                                            </div>

                                            <div class="button text-dark-1">It is a long established fact that a reader will be distracted by the readable content?</div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="pt-20 pl-60">
                                                <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="accordion__item px-20 py-20 border-light rounded-4">
                                        <div class="accordion__button d-flex items-center">
                                            <div
                                                class="accordion__icon size-40 flex-center bg-light-2 rounded-full mr-20">
                                                <i class="icon-plus"></i>
                                                <i class="icon-minus"></i>
                                            </div>

                                            <div class="button text-dark-1">It is a long established fact that a reader will be distracted by the readable content?
                                            </div>
                                        </div>

                                        <div class="accordion__content">
                                            <div class="pt-20 pl-60">
                                                <p class="text-15">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>


                <footer class="footer -dashboard mt-60">
                    <div class="footer__row row y-gap-10 items-center justify-between">
                        <div class="col-auto">
                            <div class="row y-gap-20 items-center">
                              <div class="col-auto">
                                <div class="text-14 lh-14 mr-30">Copyright © 2022 All Rights Reserved</div>
                              </div>
                            </div>
                          </div>
                        <div class="col-auto">
                            <div class="d-flex x-gap-5 y-gap-5 items-center">
                                <img src="img/avatars/card.png" alt="img">
                             </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

        @endsection