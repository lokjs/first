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
 

  <!--common-->
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/style-responsive.css" rel="stylesheet">

  <!--ios7-->
  <link rel="stylesheet" type="text/css" href="/js/ios-switch/switchery.css" />
  <link rel="stylesheet" type="text/css" href="/css/rs.css" />


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
                                 <img  @if (Auth::guard('admin')->user()->pic) src="/uploads/admin/{{Auth::guard('admin')->user()->pic}}"  @else src="/images/avatar-mini.jpg"  @endif alt="" />
                    <div class="media-body">
                        <h4><a href="#">{{Auth::guard('admin')->user()->name}}</a></h4>
                        <span>"Hello There..."</span>
                    </div>
                </div>

                <h5 class="left-nav-title">账户信息</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="/admin/info"><i class="fa fa-user"></i> <span>个人信息</span></a></li>
                  <li><a href="/admin/logout"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <!--sidebar nav start-->
            <ul class="nav nav-pills nav-stacked custom-nav">
             <li class="menu-list @if($group=='content') nav-active @endif"><a href="#"><i class="fa fa-th-list"></i> <span>内容管理</span></a>
                    <ul class="sub-menu-list">
                        <li @if ($uri=='banner') class="active" @endif><a    href="/admin/banner">轮播图</a></li>
                        <li @if ($uri=='article') class="active" @endif><a href="/admin/article">新闻中心</a></li>
                          <li @if ($uri=='contact') class="active" @endif><a href="/admin/contact">关于我们</a></li>
                        <li @if ($uri=='feedback') class="active" @endif><a href="/admin/feedback">留言板</a></li>
                        <li @if ($uri=='partner') class="active" @endif><a href="/admin/partner">合作伙伴</a></li>
                    </ul>
                </li>
             <li class="menu-list @if($group=='sys') nav-active @endif"><a href="#"><i class="fa fa-th-list"></i> <span>系统管理</span></a>
                    <ul class="sub-menu-list">
                        <li @if ($uri=='info') class="active" @endif><a    href="/admin/info">个人信息</a></li>
                    </ul>                    
                    <ul class="sub-menu-list">
                        <li @if ($uri=='webconfig') class="active" @endif><a    href="/admin/webconfig">网站配置</a></li>
                    </ul>
                    @if (Auth::guard('admin')->user()->rtp==1)
                    <ul class="sub-menu-list">
                        <li @if ($uri=='admins') class="active" @endif><a    href="/admin/admins">系统用户管理</a></li>
                    </ul>
                    @endif
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
                            <img  @if (Auth::guard('admin')->user()->pic) src="/uploads/admin/{{Auth::guard('admin')->user()->pic}}"  @else src="/images/avatar-mini.jpg"  @endif alt="" />

                            {{Auth::guard('admin')->user()->name}}
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <li><a href="/admin/info"><i class="fa fa-user"></i>个人信息</a></li>
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

 


<!--ios7-->
<script src="/js/ios-switch/switchery.js" ></script>
<script src="/js/ios-switch/ios-init.js" ></script> 
 
 <script type="text/javascript">
function reload()
{
  location.reload();
}

 </script>
</body>
</html>
