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
                        <form class="form-horizontal"  id="infoform" role="form"  enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">标题</label>
                                <div class="col-lg-10 pt7">
                                  {{$row->title}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputname" class="col-lg-2 col-sm-2 control-label">备案号</label>
                                <div class="col-lg-10 pt7">
                                   {{$row->bnumber}}
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="inputname" class="col-lg-2 col-sm-2 control-label">Seo关键词</label>
                                <div class="col-lg-10 pt7">
                                   {{$row->keywords}}
                                </div>
                            </div>
                                                        <div class="form-group">
                                <label for="inputname" class="col-lg-2 col-sm-2 control-label">Seo描述</label>
                                <div class="col-lg-10 pt7">
                                   {{$row->description}}
                                </div>
                      </div>
          
      
                        </form>
                    </div>
                </section>
        </div>

        </div>
</div>
 
 
@endsection('content')