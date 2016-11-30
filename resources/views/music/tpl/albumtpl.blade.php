<div class="gallery">
	<div class="container">
		<h3>{{$album['name']}}</h3>
		<section>
			<ul id="da-thumbs" class="da-thumbs">
			@foreach($album['info'] as $brilliant)
				<li>
					<a href="{{$brilliant->url}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
						<img src="{{$brilliant->img}}" alt="" />
						<div>
							<h5>{{$brilliant->title}}</h5>
							<span>{{$brilliant->content}}</span>
						</div>
					</a>
				</li>
			@endforeach
				<div class="clearfix"> </div>
			</ul>
		</section>
    </div>		
</div>
<script type="text/javascript" src="{{asset('font-music/js/jquery.hoverdir.js')}}"></script>	
<script type="text/javascript">
	$(function() {
		$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
	});
</script>