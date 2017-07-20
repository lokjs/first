@extends('layouts.admin')

@section('content')
 
        <!-- page heading start-->
        <div class="page-heading">
			 <ul class="breadcrumb">
                <li>
                    <a href="/admin">首页</a>
                </li>
                <li>
                    <a href="/admin/banner">轮播图</a>
                </li>
            </ul>
  
        </div>
        <!-- page heading end-->
<div class="wrapper">
        <div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <div class="panel-body">
        <div class="col-lg-6" style="padding-left: 0px;">
			<button class="btn btn-default" data-toggle="button">
                <i class="fa fa-refresh">刷新</i>
	        </button>	
			<a href="/admin/banner/create">
            <button class="btn btn-default"  >
                <i class="fa fa-plus">新增</i>
	        </button>
            </a>
        </div>
        <div class="col-lg-6" style="padding-right: 0px">
        <div class="input-group m-bot15">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </span>
            <input type="text" class="form-control" placeholder="模糊搜索标题">
        </div>
        </div>
 
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>标题</th>
            <th>缩略图</th>
            <th>跳转地址</th>
            
            <th class="hidden-phone">是否显示</th>
            <th class="hidden-phone">编辑</th>
            <th class="hidden-phone">删除</th>
        </tr>
        </thead>
        <tbody>
        @foreach($row as $value)
        <tr class="gradeX">
            <td> {{ $value->title }}</td>
            <td><img src="/uploads/banner/{{$value->pic}}" style="width: 150px"></td>
            <td>{{ $value->url }}</td>
            <td class="center hidden-phone">@if ($value->is_show==1) 是@else否 @endif</td>
            <td class="center hidden-phone"><a href="/admin/banner/{{$value->id}}/edit"><i class="fa fa-edit"></i></a></td>
            <td class="center hidden-phone"><a><i class="fa fa-add"></i></a></td>
        </tr>
        @endforeach
 
 
        </tbody>
 
        </table>
        </div>
        </div>
        </section>
        </div>
        </div>
@endsection('content')