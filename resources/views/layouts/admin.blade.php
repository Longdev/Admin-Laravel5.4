<?php
$base_url = asset('admin');
?>
<!DOCTYPE html>
<!--

TABLE OF CONTENTS.

Use search to find needed section.

=====================================================

|  1. $BODY                 |  Body                 |
|  2. $MAIN_NAVIGATION      |  Main navigation      |
|  3. $NAVBAR_ICON_BUTTONS  |  Navbar Icon Buttons  |
|  4. $MAIN_MENU            |  Main menu            |
|  5. $CONTENT              |  Content              |

=====================================================

-->


<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    @section('css')
    <!-- Open Sans font from Google CDN -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&amp;subset=latin" rel="stylesheet" type="text/css">

    <!-- LanderApp's stylesheets -->
    <link href="{{ $base_url }}/assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ $base_url }}/assets/stylesheets/landerapp.min.css" rel="stylesheet" type="text/css">
    <link href="{{ $base_url }}/assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
    <link href="{{ $base_url }}/assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
    <link href="{{ $base_url }}/assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
    <link href="{{ $base_url }}/assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="{{ $base_url }}/assets/javascripts/ie.min.js"></script>
    <![endif]-->

    @show

</head>


<!-- 1. $BODY ======================================================================================

	Body

	Classes:
	* 'theme-{THEME NAME}'
	* 'right-to-left'      - Sets text direction to right-to-left
	* 'main-menu-right'    - Places the main menu on the right side
	* 'no-main-menu'       - Hides the main menu
	* 'main-navbar-fixed'  - Fixes the main navigation
	* 'main-menu-fixed'    - Fixes the main menu
	* 'main-menu-animated' - Animate main menu
-->
<body class="theme-default main-menu-animated">

<script>var init = [];</script>
<!-- Demo script --> <script src="{{ $base_url }}/assets/demo/demo.js"></script> <!-- / Demo script -->

<div id="main-wrapper">


    <!-- 2. $MAIN_NAVIGATION ===========================================================================

        Main navigation
    -->
    <div id="main-navbar" class="navbar navbar-inverse" role="navigation">
        <!-- Main menu toggle -->
        <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>

        <div class="navbar-inner">
            <!-- Main navbar header -->
            <div class="navbar-header">

                <!-- Logo -->
                <a href="index.html" class="navbar-brand">
                    <strong>Lander</strong>App
                </a>

                <!-- Main navbar toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

            </div> <!-- / .navbar-header -->

            <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
                <div>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">First item</a></li>
                                <li><a href="#">Second item</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Third item</a></li>
                            </ul>
                        </li>
                    </ul> <!-- / .navbar-nav -->

                    <div class="right clearfix">
                        <ul class="nav navbar-nav pull-right right-navbar-nav">

                            <!-- 3. $NAVBAR_ICON_BUTTONS =======================================================================

                                                        Navbar Icon Buttons

                                                        NOTE: .nav-icon-btn triggers a dropdown menu on desktop screens only. On small screens .nav-icon-btn acts like a hyperlink.

                                                        Classes:
                                                        * 'nav-icon-btn-info'
                                                        * 'nav-icon-btn-success'
                                                        * 'nav-icon-btn-warning'
                                                        * 'nav-icon-btn-danger'
                            -->
                            <li class="nav-icon-btn nav-icon-btn-danger dropdown">
                                <a href="#notifications" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="label">5</span>
                                    <i class="nav-icon fa fa-bullhorn"></i>
                                    <span class="small-screen-text">Notifications</span>
                                </a>

                                <!-- NOTIFICATIONS -->

                                <!-- Javascript -->
                                <script>
                                    init.push(function () {
                                        $('#main-navbar-notifications').slimScroll({ height: 250 });
                                    });
                                </script>
                                <!-- / Javascript -->

                                <div class="dropdown-menu widget-notifications no-padding" style="width: 300px">
                                    <div class="notifications-list" id="main-navbar-notifications">

                                        <div class="notification">
                                            <div class="notification-title text-danger">SYSTEM</div>
                                            <div class="notification-description"><strong>Error 500</strong>: Syntax error in index.php at line <strong>461</strong>.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-hdd-o bg-danger"></div>
                                        </div> <!-- / .notification -->

                                        <div class="notification">
                                            <div class="notification-title text-info">STORE</div>
                                            <div class="notification-description">You have <strong>9</strong> new orders.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-truck bg-info"></div>
                                        </div> <!-- / .notification -->

                                        <div class="notification">
                                            <div class="notification-title text-default">CRON DAEMON</div>
                                            <div class="notification-description">Job <strong>"Clean DB"</strong> has been completed.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-clock-o bg-default"></div>
                                        </div> <!-- / .notification -->

                                        <div class="notification">
                                            <div class="notification-title text-success">SYSTEM</div>
                                            <div class="notification-description">Server <strong>up</strong>.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-hdd-o bg-success"></div>
                                        </div> <!-- / .notification -->

                                        <div class="notification">
                                            <div class="notification-title text-warning">SYSTEM</div>
                                            <div class="notification-description"><strong>Warning</strong>: Processor load <strong>92%</strong>.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-hdd-o bg-warning"></div>
                                        </div> <!-- / .notification -->

                                    </div> <!-- / .notifications-list -->
                                    <a href="#" class="notifications-link">MORE NOTIFICATIONS</a>
                                </div> <!-- / .dropdown-menu -->
                            </li>
                            <li class="nav-icon-btn nav-icon-btn-success dropdown">
                                <a href="#messages" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="label">10</span>
                                    <i class="nav-icon fa fa-envelope"></i>
                                    <span class="small-screen-text">Income messages</span>
                                </a>

                                <!-- MESSAGES -->

                                <!-- Javascript -->
                                <script>
                                    init.push(function () {
                                        $('#main-navbar-messages').slimScroll({ height: 250 });
                                    });
                                </script>
                                <!-- / Javascript -->

                                <div class="dropdown-menu widget-messages-alt no-padding" style="width: 300px;">
                                    <div class="messages-list" id="main-navbar-messages">

                                        <div class="message">
                                            <img src="{{ $base_url }}/assets/demo/avatars/2.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                            <div class="message-description">
                                                from <a href="#">Robert Jang</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="{{ $base_url }}/assets/demo/avatars/3.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                            <div class="message-description">
                                                from <a href="#">Michelle Bortz</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="{{ $base_url }}/assets/demo/avatars/4.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                                            <div class="message-description">
                                                from <a href="#">Timothy Owens</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="{{ $base_url }}/assets/demo/avatars/5.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                            <div class="message-description">
                                                from <a href="#">Denise Steiner</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="{{ $base_url }}/assets/demo/avatars/2.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                                            <div class="message-description">
                                                from <a href="#">Robert Jang</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="{{ $base_url }}/assets/demo/avatars/2.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                            <div class="message-description">
                                                from <a href="#">Robert Jang</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="{{ $base_url }}/assets/demo/avatars/3.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                            <div class="message-description">
                                                from <a href="#">Michelle Bortz</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="{{ $base_url }}/assets/demo/avatars/4.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                                            <div class="message-description">
                                                from <a href="#">Timothy Owens</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="{{ $base_url }}/assets/demo/avatars/5.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                            <div class="message-description">
                                                from <a href="#">Denise Steiner</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="{{ $base_url }}/assets/demo/avatars/2.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                                            <div class="message-description">
                                                from <a href="#">Robert Jang</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                    </div> <!-- / .messages-list -->
                                    <a href="#" class="messages-link">MORE MESSAGES</a>
                                </div> <!-- / .dropdown-menu -->
                            </li>
                            <!-- /3. $END_NAVBAR_ICON_BUTTONS -->

                            <li>
                                <form class="navbar-form pull-left">
                                    <input type="text" class="form-control" placeholder="Search">
                                </form>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                    <img src="{{ $base_url }}/assets/demo/avatars/1.jpg" alt="">
                                    <span>John Doe</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profile <span class="label label-warning pull-right">new</span></a></li>
                                    <li><a href="#">Account <span class="badge badge-primary pull-right">new</span></a></li>
                                    <li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="pages-signin.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                                </ul>
                            </li>
                        </ul> <!-- / .navbar-nav -->
                    </div> <!-- / .right -->
                </div>
            </div> <!-- / #main-navbar-collapse -->
        </div> <!-- / .navbar-inner -->
    </div> <!-- / #main-navbar -->
    <!-- /2. $END_MAIN_NAVIGATION -->


    <!-- 4. $MAIN_MENU =================================================================================

            Main menu

            Notes:
            * to make the menu item active, add a class 'active' to the <li>
              example: <li class="active">...</li>
            * multilevel submenu example:
                <li class="mm-dropdown">
                  <a href="#"><span class="mm-text">Submenu item text 1</span></a>
                  <ul>
                    <li>...</li>
                    <li class="mm-dropdown">
                      <a href="#"><span class="mm-text">Submenu item text 2</span></a>
                      <ul>
                        <li>...</li>
                        ...
                      </ul>
                    </li>
                    ...
                  </ul>
                </li>
    -->
    <div id="main-menu" role="navigation">
        @include('layouts.admin.menu_left')
    </div> <!-- / #main-menu -->
    <!-- /4. $MAIN_MENU -->


    <div id="content-wrapper">
        <!-- 5. $CONTENT ===================================================================================

                Content
        -->

        <!-- Content here -->
        @yield('content')

    </div> <!-- / #content-wrapper -->
    <div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->

@section('js')
<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
<script type="text/javascript"> window.jQuery || document.write('<script src="{{ $base_url }}/assets/javascripts/jquery.min.js">'+"<"+"/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
<script type="text/javascript"> window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">'+"<"+"/script>"); </script>
<![endif]-->


<!-- LanderApp's javascripts -->
<script src="{{ $base_url }}/assets/javascripts/bootstrap.min.js"></script>
<script src="{{ $base_url }}/assets/javascripts/landerapp.min.js"></script>

<script type="text/javascript">
    init.push(function () {
        // Javascript code here
    })
    window.LanderApp.start(init);
</script>
@show

</body>
</html>