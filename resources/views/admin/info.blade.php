@extends('layouts.admin')

@section('content')
<!--file upload-->
<link rel="stylesheet" type="text/css" href="/css/bootstrap-fileupload.min.css" />
<div class="wrapper wrapper1">
        <div class="row">
        <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                    个人设置
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" id="infoform" role="form" action="{{ url('admin/info') }}"  method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">用户名</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputEmail1"  name="title"  value="{{ $user->name }}" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">密码</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" id="password1"  name="password"   >
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">重复密码</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" id="password2"  name="password1"   >
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">头像</label>
                             
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="/uploads/admin/{{$user->pic}} " alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                   <span class="btn btn-default btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> 选择图片</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> 更换</span>
                                                   <input type="file" name="pic" class="default" value="{{$user->pic}}" />
                                                   </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> 移除</a>
                                            </div>
                                        </div>
                                        <br/>
                                    </div>
                            </div>
                            <div>

                            </div>
 
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="button" class="btn btn-primary" onclick="formsubmit('infoform')">修改</button>
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
<script type="text/javascript">
function formsubmit(aa){
    var p2=$("#password2").val();
    var p1=$("#password1").val();
    if(p1==p2)
    {
        $("#"+aa).submit();
    }
    else
    {
        layer.msg("密码不一致");
    }
}
</script>
@endsection('content')