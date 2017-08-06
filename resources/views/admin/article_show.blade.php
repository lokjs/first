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
                                <label class="col-lg-10  col-sm-10 pt7">
                                    {{ $row->title }}
                                </label>
                            </div>
                            <div class="form-group">
                                <label  class="col-lg-2 col-sm-2 control-label">作者</label>
                                <label class="col-lg-10 pt7">
                                    {{ $row->author }}
                                </label>
                            </div>
                                                       <div class="form-group">
                                <label  class="col-lg-2 col-sm-2 control-label">类型</label>
                                <label class="col-lg-10 pt7">
                                     @if($row->type==1)公司新闻@endif
            @if($row->type==2)行业动态@endif
            @if($row->type==3)政策法规@endif
                                </label>
                            </div>
                              <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">缩略图</label>
                             
                                    <div class="col-md-9 pt7">
                                       <img src="/uploads/article/{{$row->pic}}"> 
                                    </div>
                            </div>

                            <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">内容</label>
                             
                                    <div class="col-md-9 pt7">
                                        
                                       {!!$row->content!!} 
                                    </div>
                            </div>
 
                        </form>
                    </div>
                </section>
        </div>

        </div>
</div>

<!--file upload-->

@endsection('content')