<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="image/png">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!--icheck-->
  <link href="/js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
  <link href="/js/iCheck/skins/square/square.css" rel="stylesheet">
  <link href="/js/iCheck/skins/square/red.css" rel="stylesheet">
  <link href="/js/iCheck/skins/square/blue.css" rel="stylesheet">

  <!--dashboard calendar-->
  <link href="/css/clndr.css" rel="stylesheet">

  <!--Morris Chart CSS -->
  <link rel="/stylesheet" href="js/morris-chart/morris.css">

  <!--common-->
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/style-responsive.css" rel="stylesheet">

  <!--ios7-->
  <link rel="stylesheet" type="text/css" href="/js/ios-switch/switchery.css" />


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <script src="/js/jquery-1.10.2.min.js"></script>

<script type="text/javascript" src="/layer/layer.js"></script>
</head>

<body class="sticky-header">

<section>
    <!-- left side start-->
    <div class="left-side sticky-left-side">

        <!--logo and iconic logo start-->
        <div class="logo">
            <a href="index.html"><img src="/images/logo.png" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="/images/logo_icon.png" alt=""></a>
        </div>
        <!--logo and iconic logo end-->

        <div class="left-side-inner">

            <!-- visible to small devices only -->
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                    <img alt="" src="/images/photos/user-avatar.png" class="media-object">
                    <div class="media-body">
                        <h4><a href="#">{{Auth::guard('admin')->user()->name}}</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                  <li><a href="/admin/logout"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
             <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>内容管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="/admin/banner">全局管理</a></li>
                        <li><a href="basic_table.html">轮播图</a></li>
                        <li><a href="responsive_table.html">我的案例</a></li>
                        <li><a href="dynamic_table.html">关于我们</a></li>
                        <li><a href="editable_table.html">联系我们</a></li>
                        <li><a href="editable_table.html">留言板</a></li>
                    </ul>
                </li>
                <li><a href="/admin/logout"><i class="fa fa-sign-in"></i> <span>退出</span></a></li>

            </ul>
            <!--sidebar nav end-->

        </div>
    </div>
    <!-- left side end-->
    
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

 

            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    
                 
                   
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="/images/photos/user-avatar.png" alt="" />
                            {{Auth::guard('admin')->user()->name}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>个人信息</a></li>
                            <li><a href="/admin/config"><i class="fa fa-cog"></i>设置</a></li>
                            <li><a href="/admin/logout"><i class="fa fa-sign-out"></i>退出</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->

        </div>
        <!-- header section end-->

 
 

        @yield('content')

        <!--footer section start-->
        <footer>
            2017 &copy;   by lokjs
        </footer>
        <!--footer section end-->


    </div>
    <!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster -->
 
<script src="/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/modernizr.min.js"></script>
<script src="/js/jquery.nicescroll.js"></script>

<!--easy pie chart-->
<script src="/js/easypiechart/jquery.easypiechart.js"></script>
<script src="/js/easypiechart/easypiechart-init.js"></script>

<!--Sparkline Chart-->
<script src="/js/sparkline/jquery.sparkline.js"></script>
<script src="/js/sparkline/sparkline-init.js"></script>

<!--icheck -->
<script src="/js/iCheck/jquery.icheck.js"></script>
<script src="/js/icheck-init.js"></script>

<!-- jQuery Flot Chart-->
<script src="/js/flot-chart/jquery.flot.js"></script>
<script src="/js/flot-chart/jquery.flot.tooltip.js"></script>
<script src="/js/flot-chart/jquery.flot.resize.js"></script>


<!--Calendar-->
<script src="/js/calendar/clndr.js"></script>
<script src="/js/calendar/evnt.calendar.init.js"></script>
<script src="/js/calendar/moment-2.2.1.js"></script>

<!--common scripts for all pages-->
<script src="/js/scripts.js"></script>

<!--Dashboard Charts-->
<script src="/js/dashboard-chart-init.js"></script>


<!--ios7-->
<script src="/js/ios-switch/switchery.js" ></script>
<script src="/js/ios-switch/ios-init.js" ></script> 
 
</body>
</html>
