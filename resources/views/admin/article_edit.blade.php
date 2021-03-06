@extends('layouts.admin')

@section('content')

<!--file upload-->
<link rel="stylesheet" type="text/css" href="/css/bootstrap-fileupload.min.css" />
<div class="wrapper wrapper1">
        <div class="row">
        <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <a href="/admin/article"><i class="fa fa-reply">返回</i></a>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" action="{{ url('admin/article/'.$row->id) }}"  method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                         {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">标题</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputEmail1"  name="title"  value="{{ $row->title }}" required>
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="author" class="col-lg-2 col-sm-2 control-label">作者</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="author"  name="author"  value="{{ $row->author }}" required>
                                </div>
                            </div>
                                                        <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">类型</label>
                                <div class="col-lg-10">
                                     <select class="form-control" name="type">
                                        <option value="1" @if($row->type==1) checked @endif>公司新闻</option>
                                        <option value="2"  @if($row->type==2) checked @endif>行业动态</option>
                                        <option value="3"  @if($row->type==3) checked @endif>政策法规</option>
                                    </select>
                                </div>
                            </div>



                             <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">图片</label>
                             
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="/uploads/article/{{$row->pic}} " alt="" />
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
 
@endsection('content')