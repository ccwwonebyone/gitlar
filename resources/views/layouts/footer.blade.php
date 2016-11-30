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
		<p>版权所有 &copy; {{$companyInfo['name']}}-{{$companyInfo['create_time']}} <a href="{{action('IndexController@index')}}" target="_blank" title="{{$companyInfo['name']}}">{{$companyInfo['name']}}</a></p>
		<p style="margin: 10px 0 0 0;">
			@foreach($contacts as $contact)
				<button type="button" class="btn btn-{{$status[rand(0,5)]}} gl_contact iconfont icon-{{$contact->icon}}"
					data-container="body"
					data-html="true"
					data-toggle="popover" data-placement="top"
					data-content="<img src='{{asset($contact->img)}}' class='img-responsive' alt='{{$contact->content}}'>">
						{{$contact->type}}
				</button>
			@endforeach
        </p>
	</div>
</div>
<script>
$(function(){
	$('.gl_contact').mouseenter (function(){
		$(this).popover('show');
	});
	$('.gl_contact').mouseout (function(){
		$(this).popover('hide');
	});
});
</script>
<!--//footer