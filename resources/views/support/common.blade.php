<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GITLAR - ADMIN</title>

<link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/styles.css')}}" rel="stylesheet">

<!--[if lt IE 9]>
<script src="{{asset('admin/js/html5shiv.js')}}"></script>
<script src="{{asset('admin/js/respond.min.js')}}"></script>
<![endif]-->
<script src="{{asset('admin/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/chart.min.js')}}"></script>
<script src="{{asset('admin/js/chart-data.js')}}"></script>
<script src="{{asset('admin/js/easypiechart.js')}}"></script>
<script src="{{asset('admin/js/easypiechart-data.js')}}"></script>
<script src="{{asset('admin/js/bootstrap-datepicker.js')}}"></script>
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="home"><span class="glyphicon glyphicon-dashboard"></span> 后台首页</a></li>
			<li><a href="widgets"><span class="glyphicon glyphicon-th"></span> 滑块管理</a></li>
			<li><a href="charts"><span class="glyphicon glyphicon-stats"></span> 内容管理</a></li>
			<li><a href="tables"><span class="glyphicon glyphicon-list-alt"></span> 细节管理</a></li>
			<li><a href="forms"><span class="glyphicon glyphicon-list"></span> 菜单管理</a></li>
			<li><a href="panels"><span class="glyphicon glyphicon-info-sign"></span> Alerts &amp; Panels</a></li>
			<li class="parent ">
				<a href="#">
					<span class="glyphicon glyphicon-list"></span> Dropdown <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><span class="glyphicon glyphicon-user"></span> Login Page</a></li>
		</ul>
		<div class="attribution">版权所有© <a href="http://gitlar.com/support" target="_blank" title="模板之家">gitlar</a> - 详情联系 <a href="http://gitlar.com/support" title="gitlar" target="_blank">gitlar</a></div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		@include($view)
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
	})		
	</script>	
</body>

</html>
