<!--footer-->
<div class="footer">
	<div class="container">
		<h2><a href="#">{{$companyInfo['name']}}</a></h2>
		
					<ul>
						@foreach($menus as $menu)
							<li ><a href="{{$menu['url']}}">{{$menu['name']}}</a> </li>
						@endforeach
						<div class="clearfix"> </div>
					</ul>
					<p >版权所有 &copy; {{$companyInfo['name']}}-{{$companyInfo['create_time']}} <a href="{{action('IndexController@index')}}" target="_blank" title="{{$companyInfo['name']}}">{{$companyInfo['name']}}</a></p>
	</div>
</div>
<!--//footer-->