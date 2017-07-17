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
			<a href="/admin/banner/add">
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
        <tr class="gradeX">
            <td>Trident</td>
            <td>Internet
                Explorer 4.0</td>
            <td>Win 95+</td>
            <td class="center hidden-phone">4</td>
            <td class="center hidden-phone">X</td>
        </tr>
        <tr class="gradeC">
            <td>ray</td>
            <td>Internet
                Explorer 5.0</td>
            <td>Win 95+</td>
            <td class="center hidden-phone">5</td>
            <td class="center hidden-phone">C</td>
        </tr>
 
        </tbody>
 
        </table>
        </div>
        </div>
        </section>
        </div>
        </div>
@endsection('content')