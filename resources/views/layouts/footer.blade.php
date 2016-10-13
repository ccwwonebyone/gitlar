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
					<p >公司地址 {{$companyInfo['address']}}</p>
					<p>联系方式 {{$companyInfo['tel']}}  {{$companyInfo['weixin']?'微信 '.$companyInfo['weixin']:''}} 
					{{$companyInfo['qq']?'QQ '.$companyInfo['qq']:''}} {{$companyInfo['sina']?'新浪 '.$companyInfo['sina']:''}}</p>
	</div>
</div>
<!--//footer-->