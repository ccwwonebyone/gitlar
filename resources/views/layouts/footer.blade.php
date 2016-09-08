<!--footer-->
<div class="footer">
	<div class="container">
		<h2><a href="{{action('IndexController@index')}}">{{$companyInfo['name']}}</a></h2>
		
					<ul>
						<li ><a href="{{action('IndexController@index')}}" >主页  </a> </li>
						<li ><a href="album.html" >Albums  </a> </li>
						<li><a href="blog.html"  >Blog</a></li>
						<li><a href="typo.html" >Events </a></li>
						<li><a href="mail.html" >Mail </a></li>
						<div class="clearfix"> </div>
					</ul>
					<p >版权所有 &copy; {{$companyInfo['name']}}-{{$companyInfo['create_time']}} <a href="{{action('IndexController@index')}}" target="_blank" title="{{$companyInfo['name']}}">{{$companyInfo['name']}}</a></p>
	</div>
</div>
<!--//footer-->