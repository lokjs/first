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
                        <form class="form-horizontal" role="form"   >
                         {{ csrf_field() }}
                         {{ method_field('PUT') }}
                            <div class="form-group">
                                <label  class="col-lg-2 col-sm-2 control-label">标题</label>
                                <label class="col-lg-10 pt7">
                                    {{ $row->title }}
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="url" class="col-lg-2 col-sm-2 control-label">跳转地址地址</label>
                                <div class="col-lg-10 pt7">
                                    {{ $row->url }} 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="is_show" class="col-lg-2 col-sm-2 control-label">是否显示</label>
                                <div class="col-lg-10  pt7">
                                   
                                     @if( $row->is_show==1 ) 是@else 否 @endif               
                                     
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">图片</label>
                             
                                    <div class="col-md-9 pt7">
                                    @if ($row->pic)
                                                <img src="/uploads/partner/{{$row->pic}} " alt="" width="200" />
                                                @else
                                                <img src="/img/nopic.png">
                                    @endif

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