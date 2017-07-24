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
                        <form class="form-horizontal"  id="infoform" role="form"  enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">帐号</label>
                                <div class="col-lg-10 pt7">
                                  {{$row->email}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputname" class="col-lg-2 col-sm-2 control-label">姓名</label>
                                <div class="col-lg-10 pt7">
                                   {{$row->name}}
                                </div>
                            </div>
 
                            <div class="form-group">
                                <label for="select" class="col-lg-2 col-sm-2 control-label">权限</label>
                                <div class="col-lg-10 pt7">
                          
                                    @if ($row->rtp==1) 超级管理员 @else 管理员 @endif
                                </div>
                            </div>                       
                             <div class="form-group">
                                <label for="pic" class="col-lg-2 col-sm-2 control-label">头像</label>
                             
                                    <div class="col-md-9 pt7">
                                            <img src="/uploads/admin/{{$row->pic}}" width="150">
 
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