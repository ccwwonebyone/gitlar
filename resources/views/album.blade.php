@extends('layouts.master')
@section('title','展示')
@section('js')
<script src="js/modernizr.custom.97074.js"></script>
<!--script-->
<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
@endsection
@section('header-main')
	header-main
@endsection
@section('content')
<!--gallery-->
	<div class="gallery">
		<div class="container">
			<h3>{{$project}}</h3>
			<section>
				<ul id="da-thumbs" class="da-thumbs">
				@foreach($brilliants as $brilliant)
					<li>
						<a href="{{$brilliant['img']}}" rel="title" class="b-link-stripe b-animate-go  thickbox">
							<img src="{{$brilliant['img']}}" alt="" />
							<div>
								<h5>{{$brilliant['title']}}</h5>
								<span>{{$brilliant['content']}}</span>
							</div>
						</a>
					</li>
				@endforeach
					<div class="clearfix"> </div>
				</ul>
			</section>
			<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>
        </div>
		
	</div>
<!--//gallery-->
@endsection