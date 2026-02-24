<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('web-admin.dashboard') }}" class="brand-link">
        <img src="{{asset('admin_assets/dist/img/cheflogo.jpg')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Rasoi-Wala</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin_assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
                @if(auth()->user()->hasRole('admin'))
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-tie"></i>
                        <p>
                            Chef Details
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('web-admin.chefadd')}}" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>Chef Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('web-admin.cheflist')}}" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Chef list</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User Details
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('web-admin.useradd')}}" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>
                                <p>User Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('web-admin.userlist')}}" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>User list</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Booking Details
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('web-admin.bookingadd')}}" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>

                                <p>Order Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('web-admin.bookinglist')}}" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Booking list</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fas fa-clipboard-list"></i>
                                <p>Total bookings</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-calendar-check"></i>


                        <p>
                            Events
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('web-admin.eventadd')}}" class="nav-link">
                                <i class="fas fa-plus nav-icon"></i>

                                <p>Event Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('web-admin.eventlist')}}" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Event list</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fas fa-calendar-check"></i>
                                <p>Upcomming Events</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-wallet"></i>


                        <p>
                            View Earnings
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-utensils"></i>


                        <p>
                            Dishes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('web-admin.categorylist')}}" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Categories</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('web-admin.dishlist')}}" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Dish list</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-credit-card"></i>


                        <p>
                            Payments
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Transaction list</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Refuncd Management</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-star"></i>


                        <p>
                            Reviews
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>View Ratings</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Remove Abuse Reviews</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bell"></i>


                        <p>
                            Notification
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Send offer Notification</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Reminder before Event</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>


                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Commision%</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Cancellation Policy</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Minimum Booking Hours</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/UI/icons.html" class="nav-link">
                                <i class="fas fa-bars nav-icon"></i>
                                <p>Support Contact Info</p>
                            </a>
                        </li>
                    </ul>
                </li>


                @endif
                <li class="nav-item">
                    <a href="{{route('web-admin.logout')}}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>