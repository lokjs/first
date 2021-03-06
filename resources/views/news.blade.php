 @extends('layouts.web')
@section('content')
		<section class="ny-ban wow fadeInDown">
			<img src="img/ba.jpg"/>			
		</section>
		
		
		<section class="container wrap clearfix">
				<div class="title1 wow slideInLeft">
	    			<h1>NEWS CENTER</h1>
	    			<h3>新闻中心</h3>
	    		</div>
	    		
	    		<div class="sub-nav clearfix wow fadeInUp">
	    			<ul class="clearfix">
	    				<li @if($type==1)class="dq"@endif><a href="/news">公司新闻</a></li>
	    				<li @if($type==2)class="dq"@endif><a href="/actives">行业动态</a></li>
	    				<li @if($type==3)class="dq"@endif><a href="/laws">政策法规</a></li>
	    			</ul>
	    			<div class="fr wz-box">
	    				<a href="/">网站首页</a> > <a href="/news">新闻中心</a> > <a href="#">
	    				@if($type==1)公司新闻@endif
	    				@if($type==2)行业动态@endif
	    				@if($type==3)政策法规@endif</a>
	    			</div>
	    		</div>
	    		
	    		<ul class="news-list wow bounceInUp">
	    		 @foreach($row as $value)
	    			<li>
	    				<a href="/new/{{$value->id}}">
	    					<h2>{{$value->title}}</h2>
	    					<div class="time hidden-xs">
	    						{{ date("Y-m-d",strtotime($value->created_at))}}
	    					</div>
	    					<p>{{str_limit(strip_tags($value->content), $limit = 100, $end = '...')}}</p>
	    				</a>
	    			</li>
	    		@endforeach
	    		</ul>
 
				<?php echo $row->appends(['title' => $title])->render(); ?>
		</section>
 @endsection('content')