<!--header-->
<div class="header @yield('header-main')">
	<div class="container">
			<div class="header-top">
				<div class="logo">
					<h1><a href="{{action('IndexController@index')}}">{{$companyInfo['name']}}</a></h1>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="{{asset('images/menu.png')}}" alt=""> </span>
					<ul>
						<li ><a href="{{action('IndexController@index')}}" class="hvr-sweep-to-bottom color">
						<i class="glyphicon glyphicon-home"></i>{{$menus[0]['menu']}}</a></li>
						<li ><a href="album" class="hvr-sweep-to-bottom color1"><i class="glyphicon glyphicon-picture"></i>Albums  </a> </li>
						<li><a href="blog"  class="hvr-sweep-to-bottom color2"><i class="glyphicon glyphicon-tags"></i>Blog</a></li>
						<li><a href="typo.html" class="hvr-sweep-to-bottom color3"><i class="glyphicon glyphicon-calendar"></i>Events </a></li>
						<li><a href="mail.html" class="hvr-sweep-to-bottom color4"><i class="glyphicon glyphicon-envelope"></i>Mail </a></li>
					<div class="clearfix"> </div>
					</ul>
					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>				
				</div>
			<div class="clearfix"> </div>
		</div>
		@yield('slides')
	</div>
</div>