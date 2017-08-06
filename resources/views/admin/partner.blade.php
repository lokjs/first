@extends('layouts.admin')

@section('content')
 
<div class="wrapper wrapper1">
        <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <div class="panel-body">
        <div class="col-lg-6" style="padding-left: 0px;">
			<button class="btn btn-default" data-toggle="button" onclick="reload()">
                <i class="fa fa-refresh">刷新</i>
	        </button>	
			<a href="/admin/partner/create">
            <button class="btn btn-default"  >
                <i class="fa fa-plus">新增</i>
	        </button>
            </a>
        </div>
        <div class="col-lg-6" style="padding-right: 0px">
              <form   action="/admin/partner/search" class="input-group m-bot15" method="post">
                {!! csrf_field() !!}
              <span class="input-group-btn">
                <button  type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </span>
            <input type="text" class="form-control" name="title" placeholder="模糊搜索标题">
            </form>
        </div>
 
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>标题</th>
            <th>缩略图</th>
            <th class="hidden-phone">是否显示</th>
            <th class="hidden-phone">查看</th>
            <th class="hidden-phone">编辑</th>
            <th class="hidden-phone">删除</th>
        </tr>
        </thead>
        <tbody>
        @foreach($row as $value)
        <tr class="gradeX">
            <td> {{ $value->title }}</td>
            <td><img src="/uploads/partner/{{$value->pic}}" style="width: 150px"></td>
            <td class="center hidden-phone">@if ($value->is_show==1) 是@else否 @endif</td>
            <td class="center hidden-phone"><a href="/admin/partner/{{$value->id}}" class="btn btn-info btn-xs">查看</a></td>
            <td class="center hidden-phone"><a href="/admin/partner/{{$value->id}}/edit" class="btn btn-warning btn-xs">编辑</a></td>
            <td class="center hidden-phone"> <form action="{{ URL('/admin/partner/'.$value->id) }}"  method="POST" style="display:inline;">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <a class="btn btn-danger btn-xs" onclick="dcheck(this)">删除</a>

                    </form></td>

        </tr>
        @endforeach
                     
 
        </tbody>
 
        </table>
<?php echo $row->appends(['title' => $title])->render(); ?>
        </div>
        </div>
        </section>
        </div>
        </div>
<script type="text/javascript">
function dcheck(aa){
    layer.confirm('是否要删除当前数据', {
  btn: ['确定','取消'] //按钮
}, function(){
    $(aa).parent("form").submit();
}, function(){
});

}
</script>
 
@endsection('content')
