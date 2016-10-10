@if($subColumn=='')
	<div class="jumbotron">
	     <h1 class="text-center">目前没有栏目或已被隐藏</h1>
	     <p class="text-center">点击<span class="btn btn-success btn-md">栏位管理</span>添加或修改</p>
	</div>
@else
<div class="row">
	<div class="col-md-4">
		<h1 class="page-header">
			<div class="btn-group">
  				<button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown">
    				{{$getProset[$subColumn]}} <span class="caret"></span>
  				</button>
 				<ul class="dropdown-menu" role="menu">
  					@foreach($getProset as $key=>$value)
    					<li><a href="{{url('support/'.$view.'/'.$key)}}">{{$value}}</a></li>
    				@endforeach
  				</ul>
			</div>
		</h1>
	</div>
	<div class="col-md-8 text-right" style="margin: 30px 0 0 0;">
		<div class="dropdown pull-right">
		    <button type="button" class="btn dropdown-toggle btn-warning" id="dropdownMenu1" data-toggle="dropdown">状态
		        <span class="caret"></span>
		    </button>
		    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		        <li role="presentation">
		            <a role="menuitem" class="btn-sm" tabindex="-1" href="{{url('support/'.$view.'/'.$subColumn)}}?is_show=1">显示</a>
		        </li>
		        <li role="presentation">
		            <a role="menuitem"  tabindex="-1" href="{{url('support/'.$view.'/'.$subColumn)}}?is_show=0">隐藏</a>
		        </li>
		    </ul>
		</div>

		<button type="button" class="btn btn-success" id="add" style="float: right;"><span class="glyphicon glyphicon-plus"></span> 增加</button>	
		<div class="col-md-4" style="float: right;">
			<form action="{{url('support/'.$view.'/'.$subColumn)}}" id="searchProject" method="get">
			{!! csrf_field() !!}
        		 <div class="input-group">
        		     <input type="text" id="search_content" class="form-control" name="search_content" value="{{session('search')}}" placeholder="标题,内容,图片名">
        		     <span class="input-group-btn">
        		         <button class="btn btn-primary" type="button" id="search"><span class="glyphicon glyphicon-search"></span> 搜索</button>
        		     </span>
        		 </div><!-- /input-group -->
    		</form>			
		</div>
	</div>
</div><!--/.row-->
@if(count($info)>0)
	@foreach($info as $project)
	<div class="showProject">
		@include('projectHideForm')
		<div class="col-md-4">
			<div class="panel panel-{{$status[rand(0,5)]}}">
	    	<div class="panel-heading">
	    	    <div class="panel-title">
	    	       <h4 class="col-md-6">{{$project->title}}</h4>
	    	       <div style="float: right;margin: 17px 0 0 0;">   	       	   	
	    	       		<small class="btn btn-xs btn-warning is_show" title="点击切换">{{$project->is_show?'显示':'隐藏'}}</small>&nbsp&nbsp   	       	
	 	  	       		<span class="btn btn-xs btn-info glyphicon glyphicon-edit edit" title="编辑"></span>
	    	       		<span class="btn btn-xs btn-danger glyphicon glyphicon-remove remove" title="删除"></span> 
	    	       </div>	           	       
	    	    </div>
	    	</div>
	    	<div class="panel-body">
	    	    {{$project->content}}
	    	</div>
	    	<div class="panel-footer col-md-12">
				@foreach(explode(',',$project->img) as $imges)
	    			<img src="{{asset($imges)}}" class="img-responsive {{count(explode(',',$project->img))>1 ? 'col-md-6' : ''}}" alt="{{$project->title}}">
				@endforeach
	    	</div>
			</div>
		</div>
	</div>
	@endforeach
@else	
	<div class="jumbotron">
	     <h1 class="text-center">目前没有这类型信息</h1>
	     <p class="text-center">点击<span class="btn btn-success btn-md" id="oadd">增加</span>添加</p>
	</div>
@endif

<!-- 模态框（Modal） -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title " id="myModalLabel"><span class="label label-info"><i class="glyphicon glyphicon-plus"></i>滑块</span></h4>
            </div>
            <div class="modal-body">
            	<form action="{{url('project/add')}}" class="form-horizontal" id="projectform" role="form" method="post" enctype="multipart/form-data">
            		{!! csrf_field() !!}
            		  <div class="form-group" style="display: none;">
   	 					<label for="name" class="col-md-2 control-label">id：</label>
   	 					<div class="col-md-10">
   	 						<input type="text" class="form-control" name="id" id="id">
   	 					</div>   	 						
  					  </div>
  					  <div class="form-group" style="display: none;">
   	 					<label for="name" class="col-md-2 control-label">属于：</label>
   	 					<div class="col-md-10">
   	 						<input type="text" class="form-control" name="belong" id="belong" value="{{$subColumn}}">
   	 					</div>   	 						
  					  </div>
            		  <div class="form-group">
   	 					<label for="name" class="col-md-2 control-label">标题：</label>
   	 					<div class="col-md-10">
   	 						<input type="text" class="form-control" name="title" id="title">
   	 					</div>   	 						
  					  </div>
  					  <div class="form-group">
   	 					<label for="name" class="col-md-2 control-label">内容：</label>
   	 					<div class="col-md-10">
   	 						<textarea class="form-control" rows="3" name="content" id="content"></textarea>
   	 					</div>   	 						
  					  </div>
  					  <div class="form-group">
   	 					<label for="name" class="col-md-2 control-label">图片：</label>
   	 					<!--  <div class="formRight">
   	 					                        	<input type="file" id="file" name="file" />
   	 					                        </div><div class="clear"></div> -->
   	 					    <div class="col-md-10">
   	 					    	<input type="file" class="form-control" id="image" name="image[]" multiple >
   	 					    </div>
   	 					</div>
					  <div class="form-group">
   	 					<label for="name" class="col-md-2 control-label">显示：</label>
   	 					<div class="radio col-md-2">
							<label>
								<input type="radio" name="is_show" value="1" checked>显示
							</label>
						</div>
						<div class="radio col-md-2">
							<label>
								<input type="radio" name="is_show" value="0">隐藏
							</label>
						</div>  	 						
  					  </div>
            	</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" id="sure">提交</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
@endif
<script>
$(function(){
	$("#image").fileinput({
		showUpload:false
	});
	//增加滑块
	$('#add,#oadd').click(function(){
		$('#id').val('');
		$('input:radio[name=is_show]')[0].checked = true;			
		$('#content').val('');

		$('#title').val('');
		$('#addModal').modal('show');
	});
	//提交增加内容
	$('#sure').click(function () {
		 $('#projectform').submit();
	});
	//改变是否在前端显示
	$('.is_show').click(function(){
    	var thisObiect = $(this);
		var project_id = thisObiect.parents('.showProject').find('.project_id').val();
		var is_show = thisObiect.parents('.showProject').find('.project_is_show').val();
    	is_show = is_show==1?0:1;
		$.ajax({
			headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
			url:"{{url('project/edit')}}",
			type:'post',
			data:{
				id:project_id,
				is_show:is_show
			},
			success:function(data){
       			data = eval(data);
       			thisObiect.parents('.showProject').find('.project_is_show').val(data.is_show);
       			var changeInfo = data.is_show==0?'隐藏':'显示';				
       			thisObiect.text(changeInfo);
			}
		});
		
	});
	//修改滑块
	$('.edit').click(function(){
		var thisObiect = $(this);
		var id = thisObiect.parents('.showProject').find('.project_id').val();
		var is_show = thisObiect.parents('.showProject').find('.project_is_show').val();
		var title = thisObiect.parents('.showProject').find('.project_title').val();
		var content = thisObiect.parents('.showProject').find('.project_content').val();

		$('#id').val(id);
		$('input:radio[name=is_show]')[is_show==1?0:1].checked = true;			//遍历元素 元素位于数组第几位 不是radio的value值
		$('#content').val(content);

		$('#title').val(title);
		$('#projectform').attr('action',"{{url('project/edit')}}");
		$('#addModal').modal('show');		
	});
	//删除滑块
	$('.remove').click(function(){
		var thisObiect = $(this);
		var id = thisObiect.parents('.showProject').find('.project_id').val();
		$.ajax({
			headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
			url:"{{url('project/remove')}}",
			type:'post',
			data:{
				id:id
			},
			success:function(data){
				if(data==1){
					thisObiect.parents('.showProject').remove();
				}else{
					$('.breadcrumb').append('<li>删除失败</li>');
				}
			}
		});
	});
	//搜索滑块
	$('#search').click(function(){
		/*var content = $.trim($('#search_content').val());
		if(content==''){
			$('#search_content').popover({
				title:'提示',
				container:'body',
				placement:'top',
				content:'搜索内容不能为空'
			});
			$('#search_content').popover('show');
		}else{
			$('#searchProject').submit();
		}*/
		$('#searchProject').submit();
	});
});
</script>