<!DOCTYPE html>
<html>
<head>
<title>{{$companyInfo['name']}}--@yield('title')</title>
<link href="{{asset('git-lar/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<style>
	body{
		background-color: #fff;
	}
</style>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<!--theme-style-->
@yield('css')
<!--//theme-style-->
<script src="{{asset('git-lar/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('git-lar/bootstrap/dist/js/bootstrap.min.js')}}"></script>
@yield('js')
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
@yield('content')
@include('layouts.footer')
</body>
</html>