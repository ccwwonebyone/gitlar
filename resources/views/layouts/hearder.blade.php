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
						@foreach($menus as $menu)

						<li ><a href="{{$menu['url']}}" class="hvr-sweep-to-bottom color">
						<i class="glyphicon glyphicon-{{$menu['icon']}}"></i>{{$menu['name']}}</a></li>
						@endforeach
						<!-- <li ><a href="album" class="hvr-sweep-to-bottom color1"><i class="glyphicon glyphicon-picture"></i>展示  </a> </li>
						<li><a href="blog"  class="hvr-sweep-to-bottom color2"><i class="glyphicon glyphicon-tags"></i>详情</a></li>
						<li><a href="typo" class="hvr-sweep-to-bottom color3"><i class="glyphicon glyphicon-calendar"></i>样式 </a></li>
						<li><a href="mail.html" class="hvr-sweep-to-bottom color4"><i class="glyphicon glyphicon-envelope"></i>Mail </a></li> -->
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