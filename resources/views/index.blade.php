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
			<?php $count = count($picture['company']);?>
			<div class="col-md-{{ $count>0 ? 7 : '12' }} content-top1">
				<h3>{{$company['top']['title']}}</h3>
				<p>{{$company['top']['content']}}</p>
			</div>
			@if($count>0)
				<div class="col-md-5 top-col">
				@if($count < 3)
					@foreach($picture['company'] as $compic)
						<div class="col1">
							<div class="col-md-12 col{{rand(2,5)}}">
								<img src="{{$compic}}" alt="" >
							</div>
						</div>
						<div class="clearfix"> </div>
					@endforeach
				@elseif ($count < 4)
						<div class="col1">
						@for ($i = 0; $i < 2; $i++)
							<div class="col-md-6 col{{rand(2,5)}}">
								<img src="{{$picture['company'][$i]}}" alt="" >
							</div>
						@endfor
						<div class="clearfix"> </div>
						</div>
						<div class="col1">
							<div class="col-md-12 col{{rand(2,5)}}">
								<img src="{{$picture['company'][2]}}" alt="" >
							</div>
						</div>
						<div class="clearfix"> </div>					
				}
				@else
					<div class="col1">
						@for ($i = 0; $i < 2; $i++)
							<div class="col-md-6 col{{rand(2,5)}}">
								<img src="{{$picture['company'][$i]}}" alt="" >
							</div>
						@endfor
						<div class="clearfix"> </div>					
					</div>
					<div class="col1">
						@for ($i = 2; $i < 4; $i++)
							<div class="col-md-6 col{{rand(2,5)}}">
								<img src="{{$picture['company'][$i]}}" alt="" >
							</div>
						@endfor
						<div class="clearfix"> </div>					
					</div>					
				}
				@endif
				</div>
			}
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
	@if(isset($project))
		<div class="content-middle">
			<div class="container">
				<div class="content-mid-top">
					<h3>{{$project}}</h3>
				</div>
				<div class="news">
					@foreach($pros as $pro)
						<div class="col-md-3 new-more">
							<div class=" new-more1">
								<div class="col-md-2 six">						
									<img class="img-responsive" src="{{$pro['img']}}" alt="">
								</div>
								<div class="col-md-10 six1">
									<h5>{{$pro['title']}}</h5>
									<p>{{$pro['content']}}</p>
								<a href="{{$pro['url']}}"><i class="glyphicon glyphicon-circle-arrow-right"></i></a>
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
			<div class="content-bottom-top">
				<div class="col-md-6 content-bottom-top1">
					<h3>{{$company['buttom']['title']}}</h3>
					<p>{{$company['buttom']['content']}}</p>
				</div>
				<div class="col-md-6 bottom-co1">
					<img class="img-responsive" src="{{$company['buttom']['img']}}" alt="">

				</div>
			</div>
		</div>
	</div>
	<!---->
</div>

@endsection