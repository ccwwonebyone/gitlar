@extends('layouts.master')
@section('title','主页')
@section('slides')
	@if($slides)
			<div class="banner-main">
				<section class="slider">
          	 		<div class="flexslider">
             			<ul class="slides">
             				@foreach($slides as $slide)
							<li>
								<div class="banner-matter">
									<h3>{{$slide->title}}</h3>
									<p>{{$slide->content}}</p>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</section>
			</div>	
			<!--FlexSlider-->
		<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />
		<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
		<script type="text/javascript">
	/*    $(function(){
	      SyntaxHighlighter.all();
	    });*/
	    $(window).load(function(){
	      $('.flexslider').flexslider({
	        animation: "slide",
	        start: function(slider){
	          $('body').removeClass('loading');
	        }
	      });
	    });
	  </script>	
		@endif
@endsection
@section('content')
	<!--content-->
<div class="content">
	<div class="container">
		<!--content-top-->

		<div class="content-top">
			<?php $count = count($header['info'][0]->img);?>
			<div class="col-md-{{ $count>0 ? 7 : '12' }} content-top1">
				<h3>{{$header['name']}}</h3>
				<p>{{$header['info'][0]->content}}</p>
			</div>
			@if($count > 0)
			<div class="col-md-5 top-col">
				@foreach(explode(',',$header['info'][0]->img) as $img)
				<img src="{{asset($img)}}" class="img-responsive {{ count(explode(',',$header['info'][0]->img))>1 ? 'col-md-6' : '' }}">
				@endforeach
				<div class="clearfix"> </div>
			</div>
			@endif
			<div class="clearfix"> </div>
		</div>
		<!--content-mid-->
		<!-- <div class="content-mid">
			<div class="col-md-4 mid">
				<a href="single.html"><img src="images/1.jpg" alt="" class="img-responsive">
				<div class="mid1">
					<h4>My Album</h4>
					<i class="glyphicon glyphicon-circle-arrow-right"></i>
					<div class="clearfix"> </div>
				</div>
				</a>
			</div>
			<div class="col-md-4 mid">
				<a href="single.html"><img src="images/2.jpg" alt="" class="img-responsive">
				<div class="mid1">
					<h4>My Album</h4>
					<i class="glyphicon glyphicon-circle-arrow-right"></i>
					<div class="clearfix"> </div>
				</div>
				</a>
			</div>
			<div class="col-md-4 mid">
				<a href="single.html"><img src="images/4.jpg" alt="" class="img-responsive">
				<div class="mid1">
					<h4>My Album</h4>
					<i class="glyphicon glyphicon-circle-arrow-right"></i>
					<div class="clearfix"> </div>
				</div>
				</a>
			</div>
			<div class="clearfix"> </div>
		</div> -->
		<!--content-mid-->
	@if(isset($middle))
		<div class="content-middle">
			<div class="container">
				<div class="content-mid-top">
					<h3>{{$middle['name']}}</h3>
				</div>
				<div class="news">
					@foreach($middle['info'] as $pro)
						<div class="col-md-3 new-more">
							<div class=" new-more1">
								<div class="col-md-2 six">						
									<img class="img-responsive" src="{{$pro->img}}" alt="">
								</div>
								<div class="col-md-10 six1">
									<h5>{{$pro->title}}</h5>
									<p>{{$pro->content}}</p>
								<a href="{{$pro->url}}"><i class="glyphicon glyphicon-circle-arrow-right"></i></a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>					
					@endforeach
				</div>
			</div>
		</div>
	@endif
	<!---->
	<div class="content-bottom">
		<div class="container">
			<?php $count = count($footer['info'][0]->img);?>
			<div class="col-md-{{ $count>0 ? 7 : '12' }} content-top1">
				<h3>{{$footer['name']}}</h3>
				<p>{{$footer['info'][0]->content}}</p>
			</div>
			@if($count > 0)
			<div class="col-md-5 top-col">
				@foreach(explode(',',$footer['info'][0]->img) as $img)
				<img src="{{asset($img)}}" class="img-responsive {{ count(explode(',',$footer['info'][0]->img))>1 ? 'col-md-6' : '' }}">
				@endforeach
				<div class="clearfix"> </div>
			</div>
			@endif
			<div class="clearfix"> </div>
		</div>
	</div>
	<!---->
</div>

@endsection