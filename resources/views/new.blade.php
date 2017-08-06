 @extends('layouts.web')
@section('content')			
  
		<section class="ny-ban wow fadeInDown">
			<img src="/img/ba.jpg"/>			
		</section>
		
		<section class="container wrap clearfix">
			<div class="title1 wow slideInLeft">
    			<h1>NEWS CENTER</h1>
    			<h3>新闻中心</h3>
    		</div>
    		
	    		<div class="sub-nav clearfix wow fadeInUp">
	    			<ul class="clearfix">
	    				<li @if($row->type==1)class="dq"@endif><a href="/news">公司新闻</a></li>
	    				<li @if($row->type==2)class="dq"@endif><a href="/actives">行业动态</a></li>
	    				<li @if($row->type==3)class="dq"@endif><a href="/laws">政策法规</a></li>
	    			</ul>
	    			<div class="fr wz-box">
	    				<a href="/">网站首页</a> > <a href="/news">新闻中心</a> >  
	    				@if($row->type==1)<a href="/news">公司新闻</a>@endif
	    				@if($row->type==2)<a href="/actives">行业动态</a>@endif
	    				@if($row->type==3)<a href="/laws">政策法规</a>@endif 
	    			</div>
	    		</div>
    		
    		<div class="ff-txt clearfix">
    			<div class="ff-titl wow pulse">
    				<h1>{{$row->title}}</h1>
    				<div class="inf-t">
    				作者：{{$row->author}} 		发布时间: {{$row->created_at}} 	
    				</div>
    			</div>
    			
    			<div class="ff-txtnr wow fadeInUp">
    				 {!!$row->content!!}
    			</div>

    			<div class="col-sm-12">
    				<div  class="news_pre">
    				<b>上一篇：</b>
					@if ($pre)
					<a href="/new/{{$pre->id}}"  >{{$pre->title}}</a>
					@else
					<a href="#" >这是第一篇了</a>
					@endif
    				</div>
 
					

					<div class="news_next">
					<b>下一篇：</b>
					@if ($next)
					<a  href="/new/{{$next->id}}">{{$next->title}}</a>
					@else
					<a href="#"   >这是最后一篇了</a>
					@endif
					</div>
					 
    			</div>
    		</div>
		</section>
@endsection('content')