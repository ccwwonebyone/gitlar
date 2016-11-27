<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>页面没有找到</title>
		
		<style type="text/css">
			body{ margin:0; padding:0; background:#efefef; font-family:Georgia, Times, Verdana, Geneva, Arial, Helvetica, sans-serif; }
			div#mother{ margin:0 auto; width:943px; height:572px; position:relative; }
			div#errorBox{width:943px; height:572px; margin:auto; }
			div#errorText{ color:#39351e; padding:146px 0 0 446px }
			div#errorText p{ width:303px; font-size:14px; line-height:26px; }
			div.link{ /*background:#f90;*/ height:50px; width:145px; float:left; }
			div#home{ margin:20px 0 0 444px;}
			div#contact{ margin:20px 0 0 25px;}
			h1{ font-size:40px; margin-bottom:35px; }
		</style>
		

		
	</head>
	<body style="background: url({{asset('img/404.jpg')}});
			filter:'progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale')';  
			-moz-background-size:100% 100%;  
    		background-size:100% 100%;">
		<div id="mother">
			<div id="errorBox">
				<div id="errorText">
					<h1>Sorry..页面没有找到！</h1>
					<p>
						似乎你所寻找的网页已移动或丢失了。
						<p>或者也许你只是键入错误了一些东西。</p>
						请不要担心，这没事。
					</p>

					<p>
						火星不太安全，我可以免费送你回地球 
					</p>
				</div>
				<a href="{{action('IndexController@index')}}" title="返回首页">
					<div class="link" id="home">返回首页</div>
				</a>
			</div>
		</div>
	</body>
</html>