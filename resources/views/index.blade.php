@extends('layouts.web')
@section('content')
		<section class="swiper-container wow fadeInDown" id="t-ban">
	        <div class="swiper-wrapper">
	        @foreach($banner as $value)
	            <div class="swiper-slide"><a href="{{$value->url}}"><img src="uploads/banner/{{$value->pic}}" height="430" /></a></div>
	           @endforeach
	        </div>
	   		 <!-- Add Pagination -->
	   		 <div class="swiper-pagination"></div>
	    </section>
	    
	    <section class="box1">
	    	<div class="container yw-box">
	    		<div class="title1 wow slideInLeft">
	    			<h1>MAIN BUSINESS</h1>
	    			<h3>我们的主营业务</h3>
	    		</div>
    		    <div class="swiper-container" id="yw-list">
			        <div class="swiper-wrapper">
			            <div class="swiper-slide wow lightSpeedIn" data-wow-delay="0.3s">
		            		<a href="#" class="yw-alist">
		            			<span>01</span>
		            			<h3>体系认证</h3>
		            			<p>SYSTEM CERTIFICATION</p>		            			
		            		</a>			            	
			            </div>
			            <div class="swiper-slide wow lightSpeedIn" data-wow-delay="0.5s">
		            		<a href="#" class="yw-alist">
		            			<span>02</span>
		            			<h3>专利版权</h3>
		            			<p>PATENT RIGHTS</p>		            			
		            		</a>			            	
			            </div>
			            <div class="swiper-slide wow lightSpeedIn" data-wow-delay="0.7s">
		            		<a href="#" class="yw-alist">
		            			<span>03</span>
		            			<h3>行业认证</h3>
		            			<p>INDUSTRY CERTIFICATION</p>		            			
		            		</a>			            	
			            </div>
			            <div class="swiper-slide wow lightSpeedIn" data-wow-delay="0.9s">
		            		<a href="#" class="yw-alist">
		            			<span>04</span>
		            			<h3>体系认证</h3>
		            			<p>SYSTEM CERTIFICATION</p>		            			
		            		</a>			            	
			            </div>
			            <div class="swiper-slide wow lightSpeedIn" data-wow-delay="1.1s">
		            		<a href="#" class="yw-alist">
		            			<span>05</span>
		            			<h3>体系认证</h3>
		            			<p>SYSTEM CERTIFICATION</p>		            			
		            		</a>			            	
			            </div>

			        </div>
			        <!-- Add Pagination -->
			        <div class="swiper-pagination"></div>
			    </div>
	    	</div>
	    </section>
	    
	    <section class="box2">	    	
	    	<div class="container clearfix sy-about">
	    		<div class="fl sy-abimg wow bounceInLeft">
	    			<a href="#"><img src="img/about.jpg" /></a>
	    		</div>
	    		<div class="fr sy-abtxt wow bounceInRight">
	    			<h2>关于{{$about->title}}</h2>
	    			<p>{{str_limit(strip_tags($about->content), $limit = 250, $end = '...')}}</p>
	    			<a href="/about" class="sy-gdbtn">查看详情</a>
	    		</div>
	    	</div>
	    	<div class="sy-tgff">
	    		<div class="container clearfix">
	    			<div class="tit-02 wow bounceInLeft" >
	    				<h2>提供一站式企业服务</h2>
	    				<p>ONE-STOP BUSINESS SERVICES</p>
	    			</div>
	    			<div class="fl sy-gtff-ico wow bounceInLeft" >
	    				<a href="#"><img src="img/wb.jpg"/></a>
	    				<a href="#"><img src="img/wb.jpg"/></a>
	    				<a href="#"><img src="img/wb.jpg"/></a>
	    			</div>	    			
	    			<ul class="sy-gtfflist">
	    				<li class="wow fadeInUp" data-wow-delay="0.3s">
	    					<a href="#">
	    						<h2>审</h2>
	    						<p>ANNUAL AUDIT</p>
	    					</a>
	    				</li>
	    				<li class="wow fadeInUp" data-wow-delay="0.5s">
	    					<a href="#">
	    						<h2>税</h2>
	    						<p>TAX BUSINESS</p>
	    					</a>
	    				</li>
	    				<li  class="wow fadeInUp" data-wow-delay="0.7s">
	    					<a href="#">
	    						<h2>表</h2>
	    						<p>REPORT LAYOUT</p>
	    					</a>
	    				</li>
	    				<li  class="wow fadeInUp" data-wow-delay="0.9s">
	    					<a href="#">
	    						<h2>账</h2>
	    						<p>OLD FINISHING</p>
	    					</a>
	    				</li>
	    			</ul>	    			
	    		</div>
	    	</div>
	    </section>
	    
	    <section class="box3">
	    	<div class="container clearfix">
	    		<div class="title1 wow slideInLeft">
	    			<h1>OUR ADVANTAGE</h1>
	    			<h3>我们的服务优势</h3>
	    		</div>	    		
	    		<div class="row">
	    			<ul class="clearfix syff-list">
	    				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow bounceInLeft">
	    					<div class="ff-img">
	    						<a href="#"><img src="img/ff.jpg"/></a>
	    					</div>
	    					<div class="ff-txt">
		    					<h3>专业服务一对一咨询</h3>
		    					<p>PROFESSIONAL SERVICES</p>	
	    					</div>	    					
	    				</li>
	    				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12  wow fadeInUp">
	    					<div class="ff-img">
	    						<a href="#"><img src="img/ff.jpg"/></a>
	    					</div>
	    					<div class="ff-txt">
		    					<h3>专业服务一对一咨询</h3>
		    					<p>PROFESSIONAL SERVICES</p>
	    					</div>	    					
	    				</li>
	    				<li class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow bounceInRight">
	    					<div class="ff-img">
	    						<a href="#"><img src="img/ff.jpg"/></a>
	    					</div>
	    					<div class="ff-txt">
		    					<h3>专业服务一对一咨询</h3>
		    					<p>PROFESSIONAL SERVICES</p>
	    					</div>	    					
	    				</li>
	    			</ul>
	    		</div>	    		
	    	</div>
	    </section>
	    
	    <section class="box4">
	    	<div class="container clearfix">
	    		<div class="title1 wow slideInLeft">
	    			<h1>NEWS CENTER</h1>
	    			<h3>公司新闻中心</h3>
	    		</div>
	    		
	    		<div class="synews-box clearfix row">
	    			<div class="news-img fl wow bounceInRight">
	    				    <div class="swiper-container" id="news-imgfoc">
						        <div class="swiper-wrapper">
						        @foreach($article_pic as $value)
						            <div class="swiper-slide">
						            <a href="/new/{{$value->id}}">
										<img src="/uploads/article/{{$value->pic}}" height="312" />
										<p><span>{{$value->title}}</span></p>
										</a>
						            </div>
						        @endforeach    
			 
						        </div>
						        <div class="swiper-button-next"></div>
						        <div class="swiper-button-prev"></div>
						    </div>	    				
	    			</div>
	    			<div class="synews-list fl wow bounceInLeft">
	    				<ul>
	    				@foreach($articles as $key=>$value)
	    					<li>
	    						<span>0{{$key+1 }}</span>
	    						 <a href="/new/{{$value->id}}">{{$value->title}}</a>
	    						<p>{{str_limit(strip_tags($value->content), $limit = 100, $end = '...')}}</p>
	    					</li>
	    					@endforeach
	    				</ul>
	    			</div>
	    		</div>
	    	</div>
	    </section>
	    
	    <section class="box5">
    		<div class="title1 wow slideInLeft">
    			<h1>OUR PARTNER</h1>
    			<h3>我们的合作伙伴</h3>
    		</div>
    		<div class="container clearfix hb-list wow fadeInUp">		
		        <div class="swiper-button-next"></div>
		        <div class="swiper-button-prev"></div>
			    <div class="swiper-container" id="hb-img">
			        <div class="swiper-wrapper">
			        @foreach($partners as $value)
			            <div class="swiper-slide"><a href="{{$value->url}}" title="{{$value->title}}"><img src="/uploads/partner/{{$value->pic}}"/></a></div>
			       @endforeach 
			        </div>
			    </div>
	    	</div>	    	
	    </section>
	    
	    <script src="/js/wow.js" type="text/javascript" charset="utf-8"></script>
	    <script>
			if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
				new WOW().init();
			};
		</script>

	    
	    
	    <!--首页焦点图 JS-->
	    <script>
		    var swiper = new Swiper('#t-ban', {
		        pagination: '#t-ban .swiper-pagination',
		        paginationClickable: true,
		        loop : true,
		    });
	    </script>
	    
	   <!--首页合作伙伴 JS-->     
    	<script>
    var swiper = new Swiper('#hb-img', {
        pagination: '#hb-img .swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 5,
        spaceBetween: 0,
        breakpoints: {
            1120: {
                slidesPerView: 4,
            },
            960: {
                slidesPerView: 3,
            },
            640: {
                slidesPerView: 2,
            },
            480: {
                slidesPerView: 1,
            }
        }
    });
    </script>

	    
	    <!--首页新闻图片 JS-->  
		<script>
	    var swiper = new Swiper('#news-imgfoc', {
	        pagination: '#news-imgfoc .swiper-pagination',
	        paginationClickable: '#news-imgfoc .swiper-pagination',
	        nextButton: '#news-imgfoc .swiper-button-next',
	        prevButton: '#news-imgfoc .swiper-button-prev',
	        spaceBetween: 30
	    });
	    </script>
	    
	    
		<!--首页主营业务 JS-->      
	    <script>
		    var swiper = new Swiper('#yw-list', {
		    pagination: '#yw-list .swiper-pagination',
	        paginationClickable: true,
	        slidesPerView: 5,
	        breakpoints: {
	            1200: {
	                slidesPerView: 4,
	                spaceBetween: 0
	            },
	            768: {
	                slidesPerView: 3,
	                spaceBetween: 0
	            },
	            640: {
	                slidesPerView: 2,
	                spaceBetween: 0
	            },
	            370: {
	                slidesPerView: 1,
	                spaceBetween: 0
	            }
	        }
	    });
	    </script>
@endsection('content')
