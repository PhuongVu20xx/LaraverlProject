<!DOCTYPE html>
<html lang="en" class="fixed">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
    <title>Admin Home</title>

    @yield('css')
    <!-- Vendor CSS -->
		<link rel="stylesheet" href={{asset('css/bootstrap.css')}}>
		<script src="https://kit.fontawesome.com/8b058784b8.js" crossorigin="anonymous"></script> 
		<link rel="stylesheet" href={{asset('css/admin/layout/magnific-popup.css')}}> 
		<link rel="stylesheet" href={{asset('css/admin/layout/datepicker3.css')}}> 

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href={{asset('css/admin/layout/jquery-ui-1.10.4.custom.css')}}>
		<link rel="stylesheet" href={{asset('css/admin/layout/bootstrap-multiselect.css')}}>
		<link rel="stylesheet" href={{asset('css/admin/layout/morris.css')}}> 

		<!-- Theme CSS -->
		<link rel="stylesheet" href={{asset('css/admin/layout/theme.css')}}>

		<!-- Skin CSS -->
		<link rel="stylesheet" href={{asset('css/admin/layout/default.css')}}> 

		<!-- Head Libs -->
		<script src={{asset('js/admin/modernizr.js')}}></script> 
</head>
<body>
    <div>
        <div>
            @yield('header')
            <!-- start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="../" class="logo">
                        <img src="#" height="35" alt="JSOFT Admin" />
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <!-- start: search & user box -->
                <div class="header-right">
            
                    <form action="pages-search-results.html" class="search nav-form">
                        <div class="input-group input-search">
                            <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
            
                    <span class="separator"></span>
            
                    <ul class="notifications">
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="badge">3</span>
                            </a>
            
                            <div class="dropdown-menu notification-menu large">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">3</span>
                                    Tasks
                                </div>
            
                                <div class="content">
                                    <ul>
                                        <li>
                                            <p class="clearfix mb-xs">
                                                <span class="message pull-left">Generating Sales Report</span>
                                                <span class="message pull-right text-dark">60%</span>
                                            </p>
                                            <div class="progress progress-xs light">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </li>
            
                                        <li>
                                            <p class="clearfix mb-xs">
                                                <span class="message pull-left">Importing Contacts</span>
                                                <span class="message pull-right text-dark">98%</span>
                                            </p>
                                            <div class="progress progress-xs light">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                            </div>
                                        </li>
            
                                        <li>
                                            <p class="clearfix mb-xs">
                                                <span class="message pull-left">Uploading something big</span>
                                                <span class="message pull-right text-dark">33%</span>
                                            </p>
                                            <div class="progress progress-xs light mb-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="badge">4</span>
                            </a>
            
                            <div class="dropdown-menu notification-menu">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">230</span>
                                    Messages
                                </div>
            
                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="#" alt="Joseph Doe Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joseph Doe</span>
                                                <span class="message">Lorem ipsum dolor sit.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joseph Junior</span>
                                                <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joe Junior</span>
                                                <span class="message">Lorem ipsum dolor sit.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joseph Junior</span>
                                                <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                            </a>
                                        </li>
                                    </ul>
            
                                    <hr />
            
                                    <div class="text-right">
                                        <a href="#" class="view-more">View All</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="badge">3</span>
                            </a>
            
                            <div class="dropdown-menu notification-menu">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">3</span>
                                    Alerts
                                </div>
            
                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-thumbs-down bg-danger"></i>
                                                </div>
                                                <span class="title">Server is Down!</span>
                                                <span class="message">Just now</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-lock bg-warning"></i>
                                                </div>
                                                <span class="title">User Locked</span>
                                                <span class="message">15 minutes ago</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-signal bg-success"></i>
                                                </div>
                                                <span class="title">Connection Restaured</span>
                                                <span class="message">10/10/2014</span>
                                            </a>
                                        </li>
                                    </ul>
            
                                    <hr />
            
                                    <div class="text-right">
                                        <a href="#" class="view-more">View All</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
            
                    <span class="separator"></span>
            
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                            </figure>
                            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                                <span class="name">John Doe Junior</span>
                                <span class="role">administrator</span>
                            </div>
            
                            <i class="fa custom-caret"></i>
                        </a>
            
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->
        </div>

        <div>
            @yield('menu')
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">
                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav-active">
                                    <a href="index.html">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="mailbox-folder.html">
                                        <span class="pull-right label label-primary">182</span>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span>Mailbox</span>
                                    </a>
                                </li>

                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>Pages</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="/register">
                                                Sign Up
                                            </a>
                                        </li>

                                        <li>
                                            <a href="/login">
                                                Log In
                                            </a>
                                        </li>

                                        <li>                                            
                                            <a href="pages-recover-password.html">
                                                Recover Password
                                            </a>
                                        </li>
                                    
                                        <li>
                                            <a href="pages-user-profile.html">
                                                User Profile
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                                        <span>Forms</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li class="nav-parent">
                                            <a>Category</a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a href="/addcategory">Add Category</a>
                                                </li>
                                                <li>
                                                    <a href="allcategory">All Category</a>
                                                </li>
                                                <li>
                                                    <a href="/editcategory">Edit Category</a>
                                                </li>
                                            
                                            </ul>
                                        </li>

                                        <li class="nav-parent">
                                            <a href="#">Product</a>
                                            <ul class="nav nav-children">

                                                <li class="nav-parent">
                                                    <a href="#">Product</a>
                                                    <ul class="nav nav-children">
                                                        <li>
                                                            <a href="/addproduct">Add product</a>
                                                        </li>
                                                        <li>
                                                            <a href="/allproduct">All Product</a>
                                                        </li>
                                                        <li>
                                                            <a href="/editproduct">Edit Product</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-parent">
                                                    <a href="#">Import Product</a>
                                                    <ul class="nav nav-children">
                                                        <li>
                                                            <a href="/importproduct">Add Import Product</a>
                                                        </li>
                                                        <li>
                                                            <a href="editimportproduct">Edit Import Product</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-parent">
                                                    <a href="#">Stock</a>
                                                    <ul class="nav nav-children">
                                                        <li>
                                                            <a href="/importstock">Add Stock</a>
                                                        </li>
                                                        <li>
                                                            <a href="/allstock">Edit Stock</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                               
                                            </ul>
                                        </li>

                                        <li class="nav-parent">
                                            <a href="#">Payment</a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a href="/payment">All Payment</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="nav-parent">
                                            <a href="#">Promotion</a>
                                            <ul class="nav nav-children">
                                                <li>
                                                    <a href="/offer">All Promotion</a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </aside>
            <!-- end: sidebar -->
        </div>

        <div>
            @yield('bodycontent')
        </div>

    </div>

@yield('scripts')
<!-- Vendor -->
<script src={{asset('js/admin/jquery.js')}}></script>
<script src={{asset('js/admin/jquery.browser.mobile.js')}}></script>
<script src={{asset('js/bootstrap.js')}}></script>
<script src={{asset('js/admin/bootstrap-datepicker.js')}}></script>
<script src={{asset('js/admin/magnific-popup.js')}}></script>
<script src={{asset('js/admin/jquery.placeholder.js')}}></script>

<!-- Specific Page Vendor -->
<script src={{asset('js/admin/jquery-ui-1.10.4.custom.js')}}></script>
<script src={{asset('js/admin/jquery.ui.touch-punch.js')}}></script>
<script src={{asset('js/admin/jquery.appear.js')}}></script>
<script src={{asset('js/admin/bootstrap-multiselect.js')}}></script>
<script src={{asset('js/admin/jquery.sparkline.js')}}></script>
<script src={{asset('js/admin/raphael.js')}}></script>
<script src={{asset('js/admin/morris.js')}}></script>
<script src={{asset('js/admin/gauge.js')}}></script>
<script src={{asset('js/admin/snap.svg.js')}}></script>

<!-- Theme Base, Components and Settings -->
<script src={{asset('js/admin/theme.js')}}></script>

<!-- Theme Initialization Files -->
<script src={{asset('js/admin/theme.init.js')}}></script>

<!-- Example -->
<script src={{asset('js/admin/examples.dashboard.js')}}></script>
</body>
</html>