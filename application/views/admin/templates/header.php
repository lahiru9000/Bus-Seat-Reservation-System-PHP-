<!DOCTYPE HTML>
<html>

<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/assets/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/assets/css/core.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/assets/css/components.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/assets/icons/fontawesome/styles.min.css'); ?>">

    <script type="text/javascript" src="<?php echo base_url('assets/admin/dist/lib/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/dist/lib/js/tether.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/dist/lib/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/dist/assets/js/app.min.js'); ?>"></script>
    
    <!-- PAGE LEVEL STYLESHEETS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/lib/css/chartist.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin/dist/lib/css/jquery.dataTables.min.css'); ?>">
    <!-- /PAGE LEVEL STYLESHEETS -->
    
    <!-- PAGE LEVEL SCRIPTS -->
    <script type="text/javascript" src="<?php echo base_url('assets/admin/dist/lib/js/jquery.dataTables.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/dist/assets/js/pages_datatables.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/admin/dist/lib/js/chartist.min.js'); ?>"></script>
    <script type="text/javascript">
        $(function() {
            // Dashboard Sales Chart
            // ------------------------------------------------------------------

            var dataMain = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                series: [
                    [5, 4, 3, 7, 5, 10, 3, 4, 8, 10, 6, 8],
                    [3, 2, 9, 5, 4, 6, 4, 6, 7, 8, 7, 4]
                ]
            };

            var optionsMain = {
                seriesBarDistance: 10
            };

            var responsiveOptionsMain = [
                ['screen and (max-width: 640px)', {
                    seriesBarDistance: 5,
                    axisX: {
                        labelInterpolationFnc: function(value) {
                            return value[0];
                        }
                    }
                }]
            ];
            var chart = new Chartist.Bar('.ct-chart-dashboard', dataMain, optionsMain, responsiveOptionsMain);
        });
    </script>
    <!-- /PAGE LEVEL SCRIPTS -->

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-toggleable-md">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
            <span>
                <i class="fa fa-code-fork"></i>
            </span>
        </button>

        <button class="navbar-toggler navbar-toggler-left" type="button" id="toggle-sidebar">
            <span>
                <i class="fa fa-align-justify"></i>
            </span>
        </button>

        <a class="navbar-brand logo" href="#">
            <img src="<?php echo base_url('assets/admin/dist/assets/img/logo.png'); ?>" alt="Modish">
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <button class="sidebar-toggle btn btn-flat" id="toggle-sidebar-desktop">
                <span>
                    <i class="fa fa-align-justify"></i>
                </span>
            </button>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle nav-icon" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell-o"></i>
                        <span class="hidden-lg-up position-right">Notifications</span>
                        <span class="badge bg-danger-4">8</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right width-300 list-notifications">
                        <ul class="list-unstyled">
                            <li class="media notif-unread">
                                You have 3 unread notifications!
                            </li>
                            <li class="media">
                                <div class="notif-icon bg-primary-4">
                                    <i class="fa fa-bell-o"></i>
                                </div>
                                <div class="media-body notif-text">
                                    You may want to check this!
                                </div>
                            </li>
                            <li class="media mr-2">
                                <div class="notif-icon bg-danger-4">
                                    <i class="fa fa-exclamation"></i>
                                </div>
                                <div class="media-body notif-text text-danger-4">
                                    Server Banshee is not responding.
                                </div>
                            </li>
                            <li class="media">
                                <div class="notif-icon bg-success-4">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="media-body notif-text text-success-4">
                                    Backup completed successfully.
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-has-after" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo base_url('assets/admin/dist/assets/img/default-user.jpg'); ?>" alt="" class="user-img"> John Doe
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-user"></i> <span>Profile</span></a>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-comment"></i> <span>Messages</span></a>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-cog"></i> <span>Settings</span></a>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-sign-out"></i> <span>Logout</span></a>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /NAVBAR -->

    <div class="page-container">
        <div class="page-content">
            <!-- inject:SIDEBAR -->

            <div id="sidebar-main" class="sidebar sidebar-default">
                <div class="sidebar-content">
                    <ul class="navigation">
                        <li class="navigation-header">
                            <span>Main</span>
                            <i class="icon-menu"></i>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                        </li>

                        <li>
                            <a href="index.html"><i class="fa fa-road"></i> <span>Route</span></a>
                            <ul>
                                <li><a href="<?php echo base_url('route/add'); ?>">Add Route</a></li>
                                <li><a href="<?php echo base_url('route/all'); ?>">All Routes</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="index.html"><i class="fa fa-bus"></i> <span>Bus</span></a>
                            <ul>
                                <li><a href="<?php echo base_url('bus/add'); ?>">Add Buse</a></li>
                                <li><a href="<?php echo base_url('bus/all'); ?>">All Buses</a></li>
                            </ul>
                        </li>

                        <li class="navigation-header">
                            <span>Forms</span>
                            <i class="icon-menu"></i>
                        </li>

                        <li>
                            <a href="index.html"><i class="fa fa-pencil"></i> <span>Form Elements</span></a>
                            <ul>
                                <li><a href="inputs.html">Inputs</a></li>
                                <li><a href="input_groups.html">Input Groups</a></li>
                                <li><a href="layout_horizontal.html">Horizontal Layout</a></li>
                                <li><a href="layout_vertical.html">Vertical Layout</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="index.html"><i class="fa fa-th"></i> <span>Components</span></a>
                            <ul>
                                <li><a href="components_buttons.html">Buttons</a></li>
                                <li><a href="components_dropdowns.html">Dropdown Menus</a></li>
                                <li><a href="components_navs.html">Tabs, Accordions &amp; Navs</a></li>
                                <li><a href="components_badges.html">Labels &amp; Badges</a></li>
                                <li><a href="components_alerts.html">Alerts</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="index.html"><i class="fa fa-heart"></i> <span>Icons</span></a>
                            <ul>
                                <li><a href="icons_fontawesome.html">Font Awesome</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="index.html"><i class="fa fa-mouse-pointer"></i> <span>Pickers</span></a>
                            <ul>
                                <li><a href="pickers_date.html">Date Pickers</a></li>
                                <li><a href="pickers_time.html">Time Pickers</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="index.html"><i class="fa fa-table"></i> <span>Tables</span></a>
                            <ul>
                                <li><a href="tables_basic.html">Basic Tables</a></li>
                                <li><a href="tables_datatables.html">Data Tables</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="index.html"><i class="fa fa-area-chart"></i> <span>Charts</span></a>
                            <ul>
                                <li><a href="charts_chartist.html">Chartist.js</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="index.html"><i class="fa fa-magic"></i> <span>Appearence</span></a>
                            <ul>
                                <li><a href="appearence_panels.html">Content Panels</a></li>
                                <li><a href="appearence_typography.html">Typography</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="index.html"><i class="fa fa-edit"></i> <span>Editors</span></a>
                            <ul>
                                <li><a href="editors_ck.html">CK Editor</a></li>
                            </ul>
                        </li>

                        <li class="navigation-header">
                            <span>Pages</span>
                            <i class="icon-menu"></i>
                        </li>

                        <li>
                            <a href="index.html"><i class="fa fa-file-o"></i> <span>Pages</span></a>
                            <ul>
                                <li><a href="pages_login.html">Login</a></li>
                                <li><a href="pages_register.html">Register</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- inject:/SIDEBAR -->