<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>gitlar-登录</title>

<link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/datepicker3.css')}}" rel="stylesheet">
<link href="{{asset('admin/css/styles.css')}}" rel="stylesheet">

<!--[if lt IE 9]>
<script src="{{asset('js/html5shiv.js')}}"></script>
<script src="{{asset('admin/js/respond.min.js')}}"></script>
<![endif]-->

</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><a class="navbar-brand" href="#"><span>GIT</span>LAR--登录</a></div>
				<div class="panel-body text-center">
					<form role="form" action="{{url('login')}}" method="post">
						{!! csrf_field() !!}
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="用户名" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="密码" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="1" checked="true">记住我
								</label>
							</div>
						</fieldset>
						<button class="btn btn-primary"><span class="glyphicon glyphicon-user"></span>登录</button>
					</form>

				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
	<script src="{{asset('admin/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
	<script>

	</script>
</body>

</html>
