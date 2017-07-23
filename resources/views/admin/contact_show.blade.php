@extends('layouts.admin')

@section('content')
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=sP659Rzb7DsjeW23w92k5ISn37QNIeFN"></script>
<div class="wrapper wrapper1">
        <div class="row">
        <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <a href="/admin/contact"><i class="fa fa-reply">返回</i></a>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form"   >
                         {{ csrf_field() }}
                            <div class="form-group">
                                <label  class="col-lg-2 col-sm-2 control-label">标题</label>
                                <label class="col-lg-10 pt7">
                                    {{ $row->title }}
                                </label>
                            </div>
                             <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">图片</label>
                             
                                    <div class="col-md-9 pt7">

                                                <img src="/uploads/contact/{{$row->pic}} " alt="" width="200" />

                                    </div>
                            
                            </div>
                            <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">内容</label>
                             
                                    <div class="col-md-9 pt7">
                                        
                                       <textarea class="form-control ckeditor" name="content" rows="6" >{{$row->content}}</textarea>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">定位</label>
                             
                                    <div class="col-md-9 pt7">
                                        
                                         <div id="allmap"></div>
                                    </div>
                            </div>
                        </form>
                    </div>
                </section>
        </div>

        </div>
</div>
<!--file upload-->
<script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>
 <script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");    // 创建Map实例
    var point=new BMap.Point({{$row->x}},{{$row->y}});
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
</script>
@endsection('content')