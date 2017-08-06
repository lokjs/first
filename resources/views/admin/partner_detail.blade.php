@extends('layouts.admin')

@section('content')

<!--file upload-->
<link rel="stylesheet" type="text/css" href="/css/bootstrap-fileupload.min.css" />
<div class="wrapper wrapper1">
        <div class="row">
        <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <a href="/admin/partner"><i class="fa fa-reply">返回</i></a>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form"action="{{ url('admin/partner') }}"  method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">合作伙伴</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputEmail1"  name="title" placeholder="输入公司名字" required>
                                </div>
                            </div>
 
                            <div class="form-group">
                                <label for="url" class="col-lg-2 col-sm-2 control-label">公司网址</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="url" name="url" placeholder="跳转地址,不填则点击则不跳转"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="is_show" class="col-lg-2 col-sm-2 control-label">是否显示</label>
                                <div class="col-lg-10 slide-toggle">
                                    <input type="checkbox" class="js-switch"  name="is_show" checked/>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">logo图片</label>
                             
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                   <span class="btn btn-default btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> 选择图片</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> 更换</span>
                                                   <input type="file" name="pic" class="default" />
                                                   </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> 移除</a>
                                            </div>
                                        </div>
                             
                       
                                    </div>
                            
                            </div>
 
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary">新增</button>
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
@endsection('content')