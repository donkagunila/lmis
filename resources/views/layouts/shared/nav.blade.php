<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="index.html">
            {{-- <img src="assets/img/logo.svg" class="navbar-brand-img mx-auto" alt="..."> --}}
            Logo
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg') }}" class="avatar-img rounded-circle" alt="...">
                    </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                    <a href="profile-posts.html" class="dropdown-item">Profile</a>
                    <a href="account-general.html" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

            </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">


            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*/home') ? 'active' : ''}}"
                       href="{{ route('admin.home') }}" >
                        <i class="fe fe-home"></i> Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*/application*') ? 'active' : ''}}"
                       href="{{ route('admin.application.index') }}" >
                        <i class="fe fe-book"></i> Applications
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*/tests*') ? 'active' : ''}}"
                       href="{{ route('admin.test.index') }}" >
                        <i class="fe fe-film"></i> Tests
                    </a>
                </li>





                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*/archives*') ? 'active' : ''}}"
                       href="{{ route('admin.category.index') }}" >
                        <i class="fe fe-archive"></i> Archives
                    </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*/categories*') ? 'active' : ''}}"
                       href="{{ route('admin.category.index') }}" >
                        <i class="fe fe-activity"></i> Categories
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*/samples*') ? 'active' : ''}}"
                       href="{{ route('admin.product.index') }}" >
                        <i class="fe fe-life-buoy"></i> Samples
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*/users*') ? 'active' : ''}}"
                       href="{{ route('admin.user.index') }}" >
                        <i class="fe fe-users"></i> Users
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*/labs*') ? 'active' : ''}}"
                       href="{{ route('admin.product.index') }}" >
                        <i class="fe fe-tag"></i> Laboratories
                    </a>
                </li>

            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <!-- Heading -->
            <h6 class="navbar-heading">
                Management
            </h6>


            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*/reports*') ? 'active' : ''}}"
                       href="{{ route('admin.category.index') }}" >
                        <i class="fe fe-book-open"></i> Reports
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*/reports*') ? 'active' : ''}}"
                       href="{{ route('admin.category.index') }}" >
                        <i class="fe fe-info"></i> Complains
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link {{ Request::is('*/configurations*') ? 'active' : ''}}"
                       href="{{ route('admin.category.index') }}" >
                        <i class="fe fe-settings"></i> Configurations
                    </a>
                </li>
            </ul>








            <!-- Push content down -->
            <div class="mt-auto"></div>


            <!-- Customize -->
            <div >
                <a href="{{ route('index') }}"
                   target="blank"
                   class="btn btn-block btn-primary mb-4">
                    <i class="fe fe-sliders mr-2"></i> View Site
                </a>
            </div>







        </div> <!-- / .navbar-collapse -->

    </div>
</nav>
