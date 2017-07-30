@extends('layouts.admin')

@section('content')

<div class="wrapper wrapper1">
        <div class="row">
        <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <a href="/admin/webconfig"><i class="fa fa-reply">返回</i></a>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal"  id="infoform" role="form" action="{{ url('admin/webconfig/'.$row->id) }}"  method="post" enctype="multipart/form-data">
                         {{ csrf_field() }}
                         {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="title" class="col-lg-2 col-sm-2 control-label">标题</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="title"  name="title" placeholder="输入标题" required value="{{$row->title}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="bnumber" class="col-lg-2 col-sm-2 control-label">备案号</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="bnumber"  name="bnumber" placeholder="输入备案号"  value="{{$row->bnumber}}" required>
                                </div>
                            </div>                       
                             <div class="form-group">
                                <label for="keywords" class="col-lg-2 col-sm-2 control-label">关键词</label>
                                <div class="col-lg-10">
                                    <textarea name="keywords"  class="form-control" id="keywords" >{{$row->keywords}}</textarea>
                                </div>
                            </div>      
                             <div class="form-group">
                                <label for="description" class="col-lg-2 col-sm-2 control-label">描述</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" id="description"   name="description" >{{$row->description}}</textarea>
                                </div>
                            </div>                      
                             
          
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-primary"   >修改 </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
        </div>

        </div>
</div>
 
@endsection('content')