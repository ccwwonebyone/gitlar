<!DOCTYPE html>
<html>
<head>
<title>{{$companyInfo['name']}}--@yield('title')</title>
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<!--theme-style-->
@yield('css')
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<script src="{{asset('js/jquery.min.js')}}"></script>
@yield('js')
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
@include('layouts.hearder')
@yield('content')
@include('layouts.footer')
{{$success}}
</body>
</html>