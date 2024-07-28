<div class="left-side-menu">

    <div class="h-100" data-simplebar>


        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Dashboards </span>
                    </a>
                </li>

                <li class="menu-title mt-2">Component</li>

                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> User Management </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="ecommerce-dashboard.html">Permission</a>
                            </li>
                            <li>
                                <a href="ecommerce-products.html">Roles</a>
                            </li>
                            <li>
                                <a href="ecommerce-product-detail.html">Users</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('category') }}">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Category </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('question') }}">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Question </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('option') }}">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Option </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('result') }}">
                        <i class="mdi mdi-forum-outline"></i>
                        <span> Result </span>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
