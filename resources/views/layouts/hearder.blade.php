 <!--header-->
<div class="header @yield('header-main')">
	<div class="container">
		<div class="header-top">
			<div class="logo">
				<a href="{{action('IndexController@index')}}">{{mb_substr($companyInfo['name'],0,round(mb_strlen($companyInfo['name'])/2))}}<span>{{mb_substr($companyInfo['name'],-mb_strlen($companyInfo['name'])/2)}}</span></a>
			</div>
			<div class="top-menu">
				<span class="menu"><img src="images/nav.png" alt=""/> </span>
				<ul>
					@foreach($menus as $menu)
						<li>
							<i class="glyphicon glyphicon-{{$menu['icon']}}" style="color: #fff"></i>
							<a href="{{$menu['url']}}" class="{{url()->current()==$menu['url']?'active':''}}">{{$menu['name']}}</a>
						</li>
					@endforeach
				</ul>
			</div>
			 <!--script-nav-->
			 <script>
			 $("span.menu").click(function(){
			 	$(".top-menu ul").slideToggle("slow" , function(){
			 	});
			 });
			 </script>
			<div class="clerfix"></div>
		</div>
		@yield('slides')
	</div>
</div>