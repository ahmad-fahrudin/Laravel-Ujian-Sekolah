        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-end mb-0">
                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <img src="{{ asset('assets/images/users/user-1.jpg') }}" alt="user-image"
                                class="rounded-circle">
                            @php
                                $user = Auth::user();
                            @endphp
                            <span class="pro-user-name ms-1">
                                {{ $user->name }} <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                            <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">

                    <a href="{{ url('/') }}" class="logo logo-light text-center">
                        <span class="logo-sm">
                            <h3>Start Test</h3>
                        </span>
                        <span class="logo-lg">
                            <h3>Start Test</h3>
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="fe-menu"></i>
                        </button>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
