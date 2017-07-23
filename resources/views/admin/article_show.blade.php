@extends('layouts.admin')

@section('content')

<!--file upload-->
<div class="wrapper wrapper1">
        <div class="row">
        <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <a href="/admin/article"><i class="fa fa-reply">返回</i></a>
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

                                                <img src="/uploads/article/{{$row->pic}} " alt="" width="200" />
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">内容</label>
                             
                                    <div class="col-md-9 pt7">
                                        
                                       <textarea class="form-control ckeditor" name="content" rows="6" >{{$row->content}}</textarea>
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

@endsection('content')