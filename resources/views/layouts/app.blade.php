<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lawrence') }} </title>

{{--    <style>body { display: none; }</style>--}}


    <link rel="stylesheet" href="{{ asset('assets/fonts/feather/feather.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/quill/dist/quill.core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/highlightjs/styles/vs2015.css') }}" />


    @yield('styles')

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/theme.min.css') }}" id="stylesheetLight" />
{{--    <link rel="stylesheet" href="{{ asset('/assets/css/theme-dark.min.css') }}" id="stylesheetDark" />--}}


</head>
<body>

@include('layouts.shared.nav')





<div class="main-content">

            <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
                <div class="container-fluid">

                    <div class="me-4 d-none d-md-flex"></div>


                    <!-- User -->
                    <div class="navbar-user me-4 my-2">

                        <!-- Dropdown -->
                        <div class="dropdown me-4 d-none d-md-flex">

                            <!-- Toggle -->
                            <a href="#" class="navbar-user-link" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <span class="icon active">
                                <i class="fe fe-bell"></i>
                              </span>
                            </a>

                            <!-- Menu -->
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                                <div class="card-header">

                                    <!-- Title -->
                                    <h5 class="card-header-title">
                                        Notifications
                                    </h5>

                                    <!-- Link -->
                                    <a href="#!" class="small">
                                        View all
                                    </a>

                                </div> <!-- / .card-header -->
                                <div class="card-body">

                                    <!-- List group -->
                                    <div class="list-group list-group-flush list-group-activity my-n3">
                                        <a class="list-group-item text-reset" href="#!">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm">
                                                        <img src="{{ asset('/assets/img/avatars/profiles/avatar-1.jpg') }}" alt="..." class="avatar-img rounded-circle" />
                                                    </div>

                                                </div>
                                                <div class="col ms-n2">

                                                    <!-- Content -->
                                                    <div class="small">
                                                        <strong>Diana Mugaisi</strong> Uploaded a new sample,
                                                        and 3 others.
                                                    </div>

                                                    <!-- Time -->
                                                    <small class="text-muted">
                                                        2m ago
                                                    </small>

                                                </div>
                                            </div> <!-- / .row -->
                                        </a>



                                        <a class="list-group-item text-reset" href="#!">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm">
                                                        <img src="{{asset('/assets/img/avatars/profiles/avatar-5.jpg') }}" alt="..." class="avatar-img rounded-circle" />
                                                    </div>

                                                </div>
                                                <div class="col ms-n2">

                                                    <!-- Content -->
                                                    <div class="small">
                                                        <strong>Miyah Myles</strong> Approved a your test sample
                                                    </div>

                                                    <!-- Time -->
                                                    <small class="text-muted">
                                                        2m ago
                                                    </small>

                                                </div>
                                            </div> <!-- / .row -->
                                        </a>
                                        <a class="list-group-item text-reset" href="#!">
                                            <div class="row">
                                                <div class="col-auto">

                                                    <!-- Avatar -->
                                                    <div class="avatar avatar-sm">
                                                        <img src="{{asset('/assets/img/avatars/profiles/avatar-6.jpg') }}" alt="..." class="avatar-img rounded-circle" />
                                                    </div>

                                                </div>
                                                <div class="col ms-n2">

                                                    <!-- Content -->
                                                    <div class="small">
                                                        <strong>Ryu Duke</strong> Rejected a sample by Donald
                                                    </div>

                                                    <!-- Time -->
                                                    <small class="text-muted">
                                                        2m ago
                                                    </small>

                                                </div>
                                            </div> <!-- / .row -->
                                        </a>

                                    </div>
                                </div>
                            </div> <!-- / .dropdown-menu -->
                        </div>



                    </div>

                </div>
            </nav>

            @yield('content')
        </div>


<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/%40shopify/draggable/lib/es5/draggable.bundle.legacy.js') }}"></script>
<script src="{{ asset('assets/libs/autosize/dist/autosize.min.js') }}"></script>
<script src="{{ asset('assets/libs/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
<script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/libs/highlightjs/highlight.pack.min.js') }}"></script>
<script src="{{ asset('assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
<script src="{{ asset('assets/libs/list.js/dist/list.min.js') }}"></script>
<script src="{{ asset('assets/libs/quill/dist/quill.min.js') }}"></script>
<script src="{{ asset('assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/libs/chart.js/Chart.extension.js') }}"></script>

<script src="{{ asset('assets/js/theme.min.js') }}"></script>
<script src="{{ asset('assets/js/dashkit.min.js') }}"></script>


@yield('scripts')



</body>
</html>
