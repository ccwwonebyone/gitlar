@extends('layouts.adminMaster')
@section('title','后台首页')
@section('content')
	<div class="container-fluid" >
		<div class="row">			
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background-color: #29C4CA;">
			    <div class="container">
			    	<div class="navbar-header">
			    	    <a class="navbar-brand" href="#">GITLAR</a>
			    	</div>
			    </div>
			</nav>
		</div>
		<div class="row" style="margin-top:51px; ">
			<div class="col-md-3">
				<div class="btn-group-vertical col-md-12">
				    <button type="button" class="btn btn-success">菜单控制</button>
				    <button type="button" class="btn btn-success">滑块配置</button>
				    <button type="button" class="btn btn-success">精彩展示区</button>
				    <button type="button" class="btn btn-success">详细区配置</button>
				    <!-- <div class="btn-group-vertical"> -->
				    	<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
				    	    下拉
				    	    <span class="caret"></span>
				    	</button>
				    	<ul class="dropdown-menu col-md-12">
				    	    <li><a href="#">下拉链接 1</a></li>
				    	    <li><a href="#">下拉链接 2</a></li>
				    	</ul>
				    <!-- </div> -->
				</div>
			</div>
			<div class="col-md-9">内容显示区</div>
		</div>
	</div>
@endsection