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
	    		<form enctype="multipart/form-data" method="POST" class="ui-from  " name="myform" action="/feedback" id="feedback_form">
	    		{{ csrf_field() }}
				<div class="panel-heading">
						<strong class="lead">提交留言</strong>
					</div>
				<div class="  feedback_line">
				<div class="col-sm-2 control-label h5">姓名</div>
				<div class="col-sm-5 "><input name="name" type="text" class="form-control" placeholder="输入你的姓名" data-required="1"></div>
				<div class="clearfix"></div>
				</div>

				<div class="feedback_line">
				<div class="col-sm-2 control-label h5">电话号码</div>
				<div class="col-sm-5 "><input name="phone" type="text" class="form-control" placeholder="输入你的联系方式" data-required="1"></div>
				<div class="clearfix"></div>
				</div>

				<div class="feedback_line">
				<div class="col-sm-2 control-label h5">标题</div>
				<div class="col-sm-5 "><input name="title" type="text" class="form-control" placeholder="输入标题" data-required="1"></div>
				<div class="clearfix"></div>
				</div>


								<div class="feedback_line">
				<div class="col-sm-2 control-label h5">内容</div>
				<div class="col-sm-5 "><textarea class="form-control" rows="3" name="content" data-required="1" placeholder=""></textarea></div>
				<div class="clearfix"></div></div>
								<div class="feedback_line1">
				<div class="col-sm-2 control-label h5"></div>
				<div class="col-sm-5 "><input type="submit" value="提交" class="btn btn-primary"></div>
				<div class="clearfix"></div>

				</div>
				</form>

	    		</div>
		</section>
	   	    <script src="js/wow.js" type="text/javascript" charset="utf-8"></script>
	    <script>
			if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
				new WOW().init();
			};
			@if (session('ok'))
                    layer.msg("{{ session('ok') }}");
            @endif
</script>
 @endsection('content')