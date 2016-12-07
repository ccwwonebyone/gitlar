<link rel="stylesheet" href="{{asset('git-lar/jquery-ui/themes/base/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" media="all">
<style>
	.pointer{
		cursor:pointer;
	}
</style>
<script src="{{asset('git-lar/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
  $( function() {
    $( ".draggable" ).draggable({
     	connectToSortable: "#sortable",
     	helper: "clone",
     	revert: "invalid",
     	addClasses: false,
     	opacity: 0.35,
     	containment: "#containment-wrapper",
     	scroll: false,
     	stop: function( event, ui ) {
     		var change_dom = event.target;
     		ui.helper.removeAttr("style");
     	}
    });
        $( "#droppable" ).droppable({
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
            $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
  } );
 </script>
<div class="row">
   	<ul class="nav nav-tabs nav-justified">
	  	@foreach($fontMenus as $key=>$value)
            <li class="{{$subColumn==$key?'active':''}}"><a href="{{url('support/'.$view.'/'.$key)}}">{{$value}}</a></li>
        @endforeach
	</ul>
</div>
<div class="row">
	<div class="panel panel-default">
    	<div class="panel-body" id="containment-wrapper">
    	    <div class="col-md-2">
				<ul class="list-group">
				    <li class="list-group-item active">可选模版</li>
				    @foreach($info['tpls'] as $tpl)
              			<li class="list-group-item pointer draggable">{{$tpl}}</li>
        			@endforeach
				</ul>
			</div>
			<div class="col-md-5">
				<li class="list-group-item active" id="use_tpl">启用模版</li>
				<ul class="list-group" id="sortable" style="min-height: 150px;">
					@foreach($info as $key => $value)
						@if($key !== 'tpls')
              <li class="list-group-item pointer">{{$info['tpls'][$value->tpl_id]}}</li>
            @endif
          @endforeach
				</ul>
			</div>
			<div class="col-md-5">
				<li class="list-group-item active" id="use_tpl">模块详情设置</li>
			</div>
    	</div>
	</div>
</div>