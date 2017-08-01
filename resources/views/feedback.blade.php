 @extends('layouts.web')
@section('content')
		<section class="ny-ban wow fadeInDown">
			<img src="img/ba.jpg"/>			
		</section>
		
		<section class="container wrap clearfix">
				<div class="title1 wow slideInLeft">
	    			<h1>ABOUT US</h1>
	    			<h3>关于我们</h3>
	    		</div>
	    		    		<div class="sub-nav clearfix wow fadeInUp">
    			<ul class="clearfix">
    				<li  ><a href="/about">公司简介</a></li>
    				<li class="dq"><a href="/feedback">在线留言</a></li>
    				<li><a href="/lxwm">联系我们</a></li>
    			</ul>
    			<div class="fr wz-box">
    				<a href="/">网站首页</a> > <a href="/about">关于我们</a> > <a href="#">在线留言</a>
    			</div>
    		</div>

	    		<div class="about-txt wow bounceInUp">
	    		</div>
		</section>
	   	    <script src="js/wow.js" type="text/javascript" charset="utf-8"></script>
	    <script>
			if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
				new WOW().init();
			};


</script>
 @endsection('content')