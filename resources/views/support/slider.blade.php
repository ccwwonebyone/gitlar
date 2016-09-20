<style>
.file {
    position: relative;
    display: inline-block;
    background: #D0EEFF;
    border: 1px solid #99D3F5;
    border-radius: 4px;
    padding: 4px 12px;
    overflow: hidden;
    color: #1E88C7;
    text-decoration: none;
    text-indent: 0;
    line-height: 20px;
}
.file input {
    position: absolute;
    font-size: 100px;
    right: 0;
    top: 0;
    opacity: 0;
}
.file:hover {
    background: #AADFFD;
    border-color: #78C3F3;
    color: #004974;
    text-decoration: none;
}
</style>
<div class="row">
	<ol class="breadcrumb">
		<li><a href="{{url('support/home')}}"><span class="glyphicon glyphicon-home"></span></a></li>
		<li class="active">滑块</li>
		@if (count($errors) > 0)
    		<div class="alert alert-danger">
       			<ul>
            		@foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
            		@endforeach
        		</ul>
    		</div>
		@endif
	</ol>
</div><!--/.row-->
<div class="row">
	<div class="col-md-4">
		<h1 class="page-header">滑块</h1>
	</div>

	<div class="col-md-8 text-right" style="margin: 30px 0 0 0;">
		<button type="button" class="btn btn-success" id="add" style="float: right;"><span class="glyphicon glyphicon-plus"></span> 增加</button>	
		<div class="col-md-4" style="float: right;">
			<form>
        		 <div class="input-group">
        		     <input type="text" class="form-control">
        		     <span class="input-group-btn">
        		         <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search"></span> 搜索</button>
        		     </span>
        		 </div><!-- /input-group -->
    		</form>			
		</div>
	</div>
</div><!--/.row-->
@foreach($info as $slider)
<div class="showSlider">
	@include('projectHideForm')
	<div class="col-md-4">
		<div class="panel panel-{{$status[rand(0,5)]}}">
    	<div class="panel-heading">
    	    <div class="panel-title">
    	       <h3 class="col-md-6">{{$slider->title}}</h3>
    	       <div style="float: right;margin: 17px 0 0 0;">   	       	   	
    	       		<small class="btn btn-xs btn-warning is_show" title="点击切换">{{$slider->is_show?'显示':'隐藏'}}</small>&nbsp&nbsp   	       	
    	       		<span class="btn btn-xs btn-info glyphicon glyphicon-edit edit" title="编辑"></span>
    	       		<span class="btn btn-xs btn-danger glyphicon glyphicon-remove remove" title="删除"></span> 
    	       </div>	           	       
    	    </div>
    	</div>
    	<div class="panel-body">
    	    {{$slider->content}}
    	</div>
    	<div class="panel-footer"><img src="{{asset($slider->img)}}" class="img-responsive" alt="{{$slider->title}}" ></div>
		</div>
	</div>
</div>
@endforeach

<!-- 模态框（Modal） -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title " id="myModalLabel"><span class="label label-info"><i class="glyphicon glyphicon-plus"></i>滑块</span></h4>
            </div>
            <div class="modal-body">
            	<form action="{{url('project/addSlider')}}" class="form-horizontal" id="sliderform" role="form" method="post" enctype="multipart/form-data">
            		{!! csrf_field() !!}
            		  <div class="form-group">
   	 					<label for="name" class="col-md-2 control-label">标题：</label>
   	 					<div class="col-md-10">
   	 						<input type="text" class="form-control" name="title" id="title">
   	 					</div>   	 						
  					  </div>
  					  <div class="form-group">
   	 					<label for="name" class="col-md-2 control-label">内容：</label>
   	 					<div class="col-md-10">
   	 						<textarea class="form-control" rows="3" name="content"></textarea>
   	 					</div>   	 						
  					  </div>
  					  <div class="form-group">
   	 					<label for="name" class="col-md-2 control-label">图片：</label>
   	 					<div class="col-md-2">
   	 						<a href="javascript:;" class="file">浏览
    							<input type="file" class="form-control" name="image" id="image">
							</a>
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

<script>
$(function(){
	$('#add').click(function(){
		$('#addModal').modal('show');
	});
	$('#sure').click(function () {
		 $('#sliderform').submit();
	});
	$('.is_show').click(function(){
		var project_id = $(this).parents('.showSlider').find('.project_id').val();
		var is_show = $(this).parents('.showSlider').find('.project_is_show').val();
		$.ajax({
			headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
			url:"{{url('project/editSlider')}}",
			type:'post',
			data:{
				id:project_id,
				is_show:is_show,
				action:'changeShow'
			},
			success:function(data){
				alert(data);
			}
		});
		
	})
});
</script>