<div class="sidebar-nav collapse navbar-collapse show" id="side-menu-wrapper">
    <ul class="nav navbar-nav navbar-collapse flex-column side-nav list-group" id="side-menu">
        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                                <button class="btn btn-white" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
            </div>
            <!-- /input-group -->
        </li>
        <li class="list-group-item">
            <a href="{{asset("/home")}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li class="list-group-item">
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category Info<span class="fa arrow"></span></a>
            <ul class="nav-second-level list-group nested">
                <li class="list-group-item">
                    <a href="{{ route('add-category') }}">Add Category</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('manage-category') }}">Manage Category</a>
                </li>

            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li class="list-group-item">
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Brand Info<span class="fa arrow"></span></a>
            <ul class="nav-second-level list-group nested">
                <li class="list-group-item">
                    <a href="{{ route('add-brand') }}">Add Brand</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('manage-brand') }}">Manage Brand</a>
                </li>

            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li class="list-group-item">
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Product Info<span class="fa arrow"></span></a>
            <ul class="nav-second-level list-group nested">
                <li class="list-group-item">
                    <a href="{{ route('add-product') }}">Add Product</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('manage-product') }}">Manage Product</a>
                </li>

            </ul>
            <!-- /.nav-second-level -->
        </li>

        <li class="list-group-item">
            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
        </li>
        <li class="list-group-item">
            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
        </li>
        <li class="list-group-item">
            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
            <ul class="nav-second-level list-group nested">
                <li class="list-group-item">
                    <a href="cards.html">Cards</a>
                </li>
                <li class="list-group-item">
                    <a href="buttons.html">Buttons</a>
                </li>
                <li class="list-group-item">
                    <a href="notifications.html">Notifications</a>
                </li>
                <li class="list-group-item">
                    <a href="typography.html">Typography</a>
                </li>
                <li class="list-group-item">
                    <a href="icons.html"> Icons</a>
                </li>
                <li class="list-group-item">
                    <a href="grid.html">Grid</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li class="list-group-item">
            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span
                        class="fa arrow"></span></a>
            <ul class="nav-second-level list-group nested">
                <li class="list-group-item">
                    <a href="#">Second Level Item</a>
                </li>
                <li class="list-group-item">
                    <a href="#">Second Level Item</a>
                </li>
                <li class="list-group-item">
                    <a href="#">Third Level <span class="fa arrow"></span></a>
                    <ul class="nav-third-level list-group nested">
                        <li class="list-group-item">
                            <a href="#">Third Level Item</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Third Level Item</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Third Level Item</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Third Level Item</a>
                        </li>
                    </ul>
                    <!-- /.nav-third-level -->
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li class="list-group-item">
            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
            <ul class="nav-second-level list-group nested">
                <li class="list-group-item">
                    <a href="blank.html">Blank Page</a>
                </li>
                <li class="list-group-item">
                    <a href="login.html">Login Page</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
    </ul>
</div>