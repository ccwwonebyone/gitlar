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
						@foreach($contact as $key=>$value)
							@if($companyInfo[$key]!='')
								<button type="button" class="btn btn-{{$status[rand(0,5)]}} iconfont icon-{{explode('-',$value)[1]}}" id="{{$key}}"
            						data-container="body"
            						data-html="true"
            						data-toggle="popover" data-placement="top"
            						data-content="<img src='{{isset(explode(',',$companyInfo[$key])[1]) ? explode(',',$companyInfo[$key])[1] :''}}' class='img-responsive' alt='{{explode(',',$companyInfo[$key])[0]}}'>">
            					{{explode('-',$value)[0]}}
            					</button>
            				@endif
            			@endforeach  
            		</p>
	</div>
</div>
<script>
$(function(){
	$('#weixin,#sina,#tel,#qq').mouseenter (function(){
		$(this).popover('show');
	});
	$('#weixin,#sina,#tel,#qq').mouseout (function(){
		$(this).popover('hide');
	});
});
</script>
<!--//footer