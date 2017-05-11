<div class="blog">
	<div class="container">
		@if($id!='')
			@foreach($blog['info'] as $detail)
				@if($detail->id == $id)
					<h3>{{$detail->title}}</h3>
					<div class="col-md-9">
						<div class="blog-grid">
							<img class="img-responsive" src="{{$detail->img}}" alt="" />
						<div class="lone-line">
							<h4>{{$detail->title}}</h4>
							<p>{{$detail->content}}</p>
						</div>
						</div>
					</div>
				@endif
			@endforeach
		@else
			<h3>{{$blog['info'][0]->title}}</h3>
			<div class="col-md-9">
				<div class="blog-grid">
					<img class="img-responsive" src="{{$blog['info'][0]->img}}" alt="" />
				<div class="lone-line">
					<h4>{{$blog['info'][0]->title}}</h4>
					<p>{{$blog['info'][0]->content}}</p>
				</div>
				</div>
			</div>
		@endif
			<div class="col-md-3">
				<div class="grid-categories">
					<div class="cate-top">
					<h4>{{$blog['name']}}</h4>
					<ul class="popular">
					@foreach($blog['info'] as $detail)
						<li>
						<a href="{{action('{URL}Controller@index')}}?id={{$detail->id}}">
						<i class="glyphicon glyphicon-chevron-right"> </i>{{$detail->title}}</a>
						</li>
					@endforeach
					</ul>
				</div>
			</div>
			</div>
		<div class="clearfix"> </div>
	</div>
</div>