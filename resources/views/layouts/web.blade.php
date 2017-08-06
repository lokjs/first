<!DOCTYPE html>
<html lang="zh-CN">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$config->title}}</title>
    <meta name="keywords" content="{{$config->keywords}}">
	<meta name="description" content="{{$config->description}}">    	
    <link rel="stylesheet" type="text/css" href="/css/animate.min.css"/>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/swiper.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/basis.css"/>
    <link rel="stylesheet" type="text/css" href="/css/rs.css"/>
    <script src="/js/jquery.js" type="text/javascript" charset="utf-8"></script>
    <script src="/layer/layer.js" type="text/javascript" charset="utf-8"></script>
    <script src="/js/respond.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/js/jquery.sidr.min.js"></script>
	<script>
		$(function(){
		   $('#left-menu').sidr({
		name: 'sidr-left',
		side: 'right'
		    });
		});
	</script>
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.min.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
		
		<header id="header">
			<section class="clearfix container nav-box">
				<div class="fl wow fadeInLeft logo">
					<a href="/"><img src="/img/logo.png"/></a>
				</div>
				<nav class="fr ">
					<div class="nav-logo hidden-lg hidden-sm hidden-md" id="left-menu">
						<img src="/img/nav.png"/>
					</div>
					<ul class="hidden-xs d-nav clearfix wow fadeInRight">
						<li @if ($link=='index') class="dq" @endif><a href="/">网站首页</a></li>
						<li @if ($link=='about') class="dq" @endif><a href="/about">关于我们</a></li>
						<li @if ($link=='news') class="dq" @endif><a href="/news">新闻中心</a></li>
						<li @if ($link=='user') class="dq" @endif><a href="/login">登录</a></li>
					</ul>
					<div class="clearfix xs-nav" id="sidr-left">
						<ul>
							<li class="dq"><a href="index.html">网站首页</a></li>
							<li><a href="about.html">关于我们</a></li>
							<li><a href="ffxm.html">服务项目</a></li>
							<li><a href="news.html">新闻中心</a></li>
							<li><a href="fflc.html">服务流程</a></li>
							<li><a href="lxwm.html">联系我们</a></li>
						</ul>
					</div>
				</nav>
			</section>
		</header>
         @yield('content')
	    
	    
	   <footer id="footer">
		   <div class="container foot-top">
		   		<div class="fl foot-lx wow bounceInLeft  hidden-xs">
		   			<div class="fl foot-rwm hidden-sm">
		   				<img src="/img/rwm.png"/>
		   			</div>
		   			<div class="fl foot-ltxt">
					<h3>我们的联系方式</h3>
					<h4>400-0000-000</h4>
					<p>地址：北京市海淀区蓟门桥西土城路6号（100088）</p>
					<div class="clearfix foot-ico">
						<a   class="icon-em">XXXXXXXX@163.com</a>
						<a   class="icon-qq">在线咨询客服</a>
					</div>
		   			</div>

		   		</div>
		   		<div class="fr foot-rbox wow bounceInRight">
		   			<div class="foot-nav">
		   				<a href="/">首页</a> |   
		   				<a href="/about">关于我们</a> |   
		   				<a href="/news">新闻中心</a> |    
		   				<a href="/login">登录</a> |
		   				<a href="/register">注册</a> 

		   			</div>
 		   			<div class="foot-sobox">
 		   			<form action="/search" method="post">
 		   			{{ csrf_field() }}
		   				<input type="text"  value="" name="title" />
		   				<button type="submit">搜索</button>
 		   			</form>
 
		   			</div>
		   		</div>
		   </div>
		   
		   <div class="copy wow fadeInUp">
		   	<p>北京市xxxx科技有限公司<span class="hidden-xs"> 专利检索咨询 经营许可证 京ICP备05061392号　京公备11010802010352号 QQ:10000000</span></p>
		  	 <p>Tel：010-88888888 88888888 <span class="hidden-xs">FAX：5552482 地址:北京市海淀区蓟门桥西土城路6号（100088）</span></p>
		   </div>
	   </footer>
	    
 
		
	</body>
</html>
