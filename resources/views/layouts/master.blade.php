<!DOCTYPE html>
<html>
<head>
<title>{{$companyInfo['name']}}@yield('title')</title>
<link href="{{asset('font-music/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<!--theme-style-->
@yield('css')
<link href="{{asset('font-music/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('font-icon/iconfont.css')}}" rel="stylesheet" type="text/css" media="all" />
<style>
	.header{
	background: url({{asset($companyInfo['background'])}}) no-repeat ;
	width:100%;
	min-height: 750px;
	display: block;
	background-size: cover;
	}
	.header-main{
		background: url({{asset($companyInfo['background'])}}) no-repeat ;
		width:100%;
		min-height: 150px;
		display: block;
		background-size: cover;
	}
</style>
<!--//theme-style-->
<script src="{{asset('font-music/js/jquery.min.js')}}"></script>
<script src="{{asset('font-music/js/bootstrap.min.js')}}"></script>
@yield('js')
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
@include('layouts.hearder')
@yield('content')
@include('layouts.footer')
</body>
</html>