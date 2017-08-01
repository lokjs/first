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
    				<li ><a href="/about">公司简介</a></li>
    				<li><a href="#">在线留言</a></li>
    				<li class="dq"><a href="/lxwm">联系我们</a></li>
    			</ul>
    			<div class="fr wz-box">
    				<a href="/">网站首页</a> > <a href="/about">关于我们</a> > <a href="#">联系我们</a>
    			</div>
    		</div>

	    		    		<div class="lx-txtbox clearfix wow fadeInUp">
	    			<div class="ffwd-box">
				 
								<div class="lx-map">
	    				 <div id="allmap" style="width: 100%;height: 400px;"></div>
	    			</div>
					</div>

	    	 	

	    		</div>
	    		
	    		 
	    		
			
			
		</section>

	 
	   	    <script src="js/wow.js" type="text/javascript" charset="utf-8"></script>
	   	    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=sP659Rzb7DsjeW23w92k5ISn37QNIeFN"></script>
	    <script>
			if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
				new WOW().init();
			};
    // 百度地图API功能
    var map = new BMap.Map("allmap");    // 创建Map实例
    var point=new BMap.Point({{$about->x}},{{$about->y}});
    map.centerAndZoom(point, 15);  // 初始化地图,设置中心点坐标和地图级别
    map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
    map.setCurrentCity("深圳");          // 设置地图显示的城市 此项是必须设置的
    var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
    var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
       map.addControl(top_left_control);        
        map.addControl(top_left_navigation);     
    var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件 //左上角，添加默认缩放平移控件
        var marker = new BMap.Marker(point);  // 创建标注
    map.addOverlay(marker);               // 将标注添加到地图中
    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
	var label = new BMap.Label("德瑞公司",{offset:new BMap.Size(20,-10)});
	marker.setLabel(label);


</script>
 @endsection('content')