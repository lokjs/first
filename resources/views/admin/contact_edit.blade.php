@extends('layouts.admin')

@section('content')

<!--file upload-->
<link rel="stylesheet" type="text/css" href="/css/bootstrap-fileupload.min.css" />
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=sP659Rzb7DsjeW23w92k5ISn37QNIeFN"></script>
<div class="wrapper wrapper1">
        <div class="row">
        <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <a href="/admin/contact"><i class="fa fa-reply">返回</i></a>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="{{ url('admin/contact/'.$row->id) }}"  method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                         {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">标题</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputEmail1"  name="title"  value="{{ $row->title }}" required>
                                </div>
                            </div>
 
                             <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">图片</label>
                             
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="/uploads/contact/{{$row->pic}} " alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                   <span class="btn btn-default btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> 选择图片</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> 更换</span>
                                                   <input type="file" name="pic" class="default" value="{{$row->pic}}" />
                                                   </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> 移除</a>
                                            </div>
                                        </div>
                                        <br/>
                                    </div>
                            
                            </div>
                         <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">内容</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control ckeditor" name="content" rows="6" >{{$row->content}}</textarea>
                                        </div>
                                    </div>
                                                             <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">坐标选取</label>
                                        <div class="col-sm-9">
                                            <div id="allmap"></div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                              <label for="pic" class="col-lg-2 col-sm-2 control-label">X坐标</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="x" class="form-control" id="bm_x" value="{{$row->x}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                 <label for="pic" class="col-lg-2 col-sm-2 control-label">y坐标</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="y" class="form-control" id="bm_y" value="{{$row->y}}">
                                        </div>
                                    </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary">修改</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
        </div>

        </div>
</div>

<!--file upload-->
<script type="text/javascript" src="/js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="/js/ckeditor/ckeditor.js"></script>
 <script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");    // 创建Map实例
    map.centerAndZoom(new BMap.Point({{$row->x}},{{$row->y}}), 15);  // 初始化地图,设置中心点坐标和地图级别
    map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
    map.setCurrentCity("深圳");          // 设置地图显示的城市 此项是必须设置的
    var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
    var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
       map.addControl(top_left_control);        
        map.addControl(top_left_navigation);     
    var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件 //左上角，添加默认缩放平移控件
        map.addEventListener("click",function(e){
        $("#bm_y").val(e.point.lat);
        $("#bm_x").val(e.point.lng);
        layer.msg("获取坐标点x:"+e.point.lng+"y:"+e.point.lat+"成功");
    });
</script>
@endsection('content')