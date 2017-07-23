@extends('layouts.admin')

@section('content')
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=sP659Rzb7DsjeW23w92k5ISn37QNIeFN"></script>
<div class="wrapper wrapper1">
        <div class="row">
        <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <a href="/admin/feedback"><i class="fa fa-reply">返回</i></a>
                    </header>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form"   >
                         {{ csrf_field() }}
                            <div class="form-group">
                                <label  class="col-lg-2 col-sm-2 control-label">姓名</label>
                                <label class="col-lg-10 pt7">
                                    {{ $row->name }}
                                </label>
                            </div>
                             <div class="form-group">
                                <label  class="col-lg-2 col-sm-2 control-label">联系方式</label>
                                <label class="col-lg-10 pt7">
                                    {{ $row->phone }}
                                </label>
                            </div>
                         <div class="form-group">
                                <label  class="col-lg-2 col-sm-2 control-label">标题</label>
                                <label class="col-lg-10 pt7">
                                    {{ $row->title }}
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">内容</label>
                             
                                    <div class="col-md-9 pt7">
                                        
                                        {{$row->content}} 
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