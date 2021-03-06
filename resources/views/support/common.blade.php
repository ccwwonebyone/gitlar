<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>gitlar</title>

<link href="{{asset('git-lar/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/styles.css')}}" rel="stylesheet">
<!-- <link rel="stylesheet" href="{{asset('admin/css/file.css')}}"> -->
<link href="{{asset('git-lar/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet">
<link href="{{asset('git-lar/bootstrap-fileinput/css/fileinput.min.css')}}" rel="stylesheet">
<link href="{{asset('font-icon/iconfont.css')}}" rel="stylesheet" type="text/css" media="all" />
<!--[if lt IE 9]>
<script src="{{asset('admin/js/html5shiv.js')}}"></script>
<script src="{{asset('admin/js/respond.min.js')}}"></script>
<![endif]-->
<script src="{{asset('git-lar/jquery/dist/jquery.min.js')}}"></script>

<script src="{{asset('git-lar/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- 日期插件-->
<script src="{{asset('admin/js/bootstrap-datepicker.js')}}"></script>
<!-- 图表插件-->
<script src="{{asset('admin/js/easypiechart.js')}}"></script>
<script src="{{asset('admin/js/easypiechart-data.js')}}"></script>
<!--tagsinput -->
<script src="{{asset('git-lar/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
<!-- 文件上传 -->
<script src="{{asset('js/fileinput.js')}}"></script>

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>GIT</span>LAR</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="{{url('loginOut')}}"><span class="glyphicon glyphicon-log-out"></span> 登出</a>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<!-- <form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form> -->
		<ul class="nav menu">
			@foreach($menus as $menu)
			<li id="support_{{$menu->url}}">
				<a href="{{url('support/'.$menu->url)}}"><span class="glyphicon glyphicon-{{$menu->icon}}"></span> {{$menu->name}}</a>
			</li>
			@endforeach
		</ul>
		<div class="attribution">版权所有© <a href="http://gitlar.com/support" target="_blank" title="gitlar">gitlar</a> - 详情联系 <a href="http://gitlar.com/support" title="gitlar" target="_blank">gitlar</a></div>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
		<ol class="breadcrumb">
			<li><a href="{{url('support/'.$menus[0]->url)}}"><span class="glyphicon glyphicon-{{$menus[0]->icon}}"></span></a></li>
			<li class="active">{{$menuName[$view]}}</li>
			@if(isset($subMenu))
				@if(in_array($subColumn,array_keys($subMenu)))
					<li class="active">{{$subMenu[$subColumn]}}</li>
				@endif
			@endif
			@if (count($errors) > 0)
    	        @foreach ($errors->all() as $error)
    	            <li class="text-danger">{{ $error }}</li>
    	        @endforeach
			@endif
		</ol>
		</div><!--/.row-->
		@include('support.'.$view)
	</div>	<!--/.main-->
	<script>
	$(function(){
		$('#calendar').datepicker({

		});
		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){
		        $(this).find('em:first').toggleClass("glyphicon-minus");
		    });
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
		$('#support_'+"{{$view}}").addClass('active');
	})
	</script>

</body>

</html>
