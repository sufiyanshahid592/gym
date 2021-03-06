<div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="{{ url('/dashboard') }}" class="site_title">
            <span>
                <img src="{{ url('adminassets/images/tcbuk-logo.png') }}" class="img-fluid" alt="">
            </span>
        </a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
            <img src="{{ url('adminassets/images/adminuser/user.jpg') }}" alt="..." class="img-circle profile_img" />
        </div>
        <div class="profile_info">
            <span>Welcome,</span>
            <?php
                    $adminuser=  Session::get('admin_user_name');
                        echo  "<h2 class='text-capitalize   font-weight-bold '>$adminuser</h2>" ;
            ?>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
            <h3>General</h3>
            <ul class="nav side-menu">

                <li>
                    <a href="{{ url('/dashboard') }}" ><i class="fa fa-home"></i>Dashboard <span class="fa fa-chevron-down"></span></a>

                </li>
                <li>
                    <a><i class="fa fa-home"></i> Home Slider<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ url('home-slider/') }}">add home slider</a></li>
                        <li><a href="{{ url('show-homeslider/') }}">Show home slider  </a></li>
                    </ul>
                </li>
                <li>
                    <a><i class="fa fa-file"></i> Add Blog<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ url('/addblog') }}">add blog</a></li>
                        <li><a href="{{ url('/showblog') }}">Show blog </a></li>
                    </ul>
                </li>
                <li>
                    <a><i class="fa fa-file"></i> Add Section<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ url('/add-section') }}">Add Section</a></li>
                        <li><a href="{{ url('/show-sections') }}">Show Sections </a></li>
                    </ul>
                </li>

                <li>
                    <a><i class="fa fa-columns"></i>Our Testimonial<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ url('/add-testimonial') }}"> Add Testimonial </a></li>
                        <li><a href="{{ url('/show-testimonial') }}"> Show Testimonial </a></li>
                    </ul>
                </li>

                <li>
                    <a><i class="fa fa-columns"></i>Our Socials <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ url('/add-socials') }}"> Add Socials </a></li>
                    </ul>
                </li>
            </ul>
        </div>
        {{-- <div class="menu_section">
            <h3>Live On</h3>
            <ul class="nav side-menu">
                <li>
                    <a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="e_commerce.html">E-commerce</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="project_detail.html">Project Detail</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="profile.html">Profile</a></li>
                    </ul>
                </li>
                <li>
                    <a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="page_403.html">403 Error</a></li>
                        <li><a href="page_404.html">404 Error</a></li>
                        <li><a href="page_500.html">500 Error</a></li>
                        <li><a href="plain_page.html">Plain Page</a></li>
                        <li><a href="login.html">Login Page</a></li>
                        <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                </li>
                <li>
                    <a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a></li>
                        <li>
                            <a>Level One<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li class="sub_menu"><a href="level2.html">Level Two</a></li>
                                <li><a href="#level2_1">Level Two</a></li>
                                <li><a href="#level2_2">Level Two</a></li>
                            </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                </li>
            </ul>
        </div> --}}
    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
        <a data-toggle="tooltip" data-placement="top" href="{{ url('/changepassword') }}" title="change Password">
            <i class="fa fa-key" aria-hidden="true"></i>
        </a>
        <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ url('/logout') }}">
            <i class="fa fa-sign-out " aria-hidden="true"></i>
        </a>
    </div>
    <!-- /menu footer buttons -->
</div>
