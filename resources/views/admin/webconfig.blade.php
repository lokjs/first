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
 
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>标题</th>
            <th>备案号</th>
            <th class="hidden-phone">编辑</th>
            <th class="hidden-phone">查看</th>
        </tr>
        </thead>
        <tbody>
        <tr class="gradeX">
            <td> {{ $row->title }}</td>
            <td> {{ $row->bnumber }}</td>
            <td class="center hidden-phone"><a href="/admin/webconfig/{{$row->id}}/edit" class="btn btn-warning btn-xs">编辑</a></td>
            <td class="center hidden-phone"><a href="/admin/webconfig/{{$row->id}}" class="btn btn-info btn-xs">查看</a></td>
        </tr>
        </tbody>
        </table>
        </div>
        </div>
        </section>
        </div>
        </div>
 
 
@endsection('content')