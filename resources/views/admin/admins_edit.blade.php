@extends('layouts.admin')

@section('content')

<!--file upload-->
<link rel="stylesheet" type="text/css" href="/css/bootstrap-fileupload.min.css" />
 
<div class="wrapper wrapper1">
        <div class="row">
        <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <a href="/admin/admins"><i class="fa fa-reply">返回</i></a>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal"  id="infoform" role="form" action="{{ url('admin/admins/'.$row->id) }}"  method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">帐号</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputEmail1"  name="email" placeholder="输入帐号" value="{{$row->email}}" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputname" class="col-lg-2 col-sm-2 control-label">姓名</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputname"  name="name" placeholder="输入姓名" value="{{$row->name}}" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="password1" class="col-lg-2 col-sm-2 control-label">密码</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" id="password1"  name="title" placeholder="输入密码" value="" required>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="password2" class="col-lg-2 col-sm-2 control-label">重复密码</label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" id="password2"  name="password2" placeholder="重复密码" value="" required>
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="select" class="col-lg-2 col-sm-2 control-label">选择权限</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select" name="rtp" >
                                        <option value="1" @if ($row->rtp==1) selected = "selected" @endif> 超级管理员</option>
                                        <option value="0" @if ($row->rtp!=1) selected = "selected" @endif> 管理员</option>
                                    </select>
                                </div>
                            </div>                       
                             <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">头像</label>
                             
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="/uploads/admin/{{$row->pic}}" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                   <span class="btn btn-default btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> 选择图片</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> 更换</span>
                                                   <input type="file" name="pic" class="default"  value="/uploads/admin/{{$row->pic}}"/>
                                                   </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> 移除</a>
                                            </div>
                                        </div>
 
                                    </div>
                            
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