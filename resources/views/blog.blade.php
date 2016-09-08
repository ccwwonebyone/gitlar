@extends('layouts.master')
@section('title','详情')
@section('header-main')
	header-main
@endsection
@section('content')
<!--content-->
	<div class="blog">
		<div class="container">
			<h3>{{$showDetail}}</h3>
				<div class="col-md-9">
					<div class="blog-grid">
					<a href="single"><img class="img-responsive" src="{{$showContent['img']}}" alt="" /></a>
					<div class="lone-line">
						<h4>{{$showContent['title']}}</h4>
						<p>{{$showContent['content']}}</p>
					</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="grid-categories">
						<div class="cate-top">
						<h4>{{$subject}}</h4>
						<ul class="popular">
						@foreach($details as $detail)
							<li><a href="#"><i class="glyphicon glyphicon-chevron-right"> </i>{{$detail}} </a></li>
						@endforeach
						</ul>
					</div>				
				</div>
				</div>
			<div class="clearfix"> </div>
			
		</div>
	</div>

<!--//content-->
@endsection