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
        </div>
         <div class="col-lg-6" style="padding-right: 0px">
              <form   action="/admin/feedback/search" class="input-group m-bot15" method="post">
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
            <th>姓名</th>
            <th>联系方式</th>
            <th>标题</th>
            <th>已阅</th>
            <th class="hidden-phone">查看</th>
        </tr>
        </thead>
        <tbody>
        @foreach($row as $value)
        <tr class="gradeX">
            <td> {{ $value->name }}</td>
            <td> {{ $value->phone }}</td>
            <td> {{ $value->title }}</td>
            <td> 
                @if ($value->is_read==1) 是@else 否@endif
            </td>
            <td class="center hidden-phone"><a href="/admin/feedback/{{$value->id}}" class="btn btn-info btn-xs">查看</a></td>
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
 
 
@endsection('content')