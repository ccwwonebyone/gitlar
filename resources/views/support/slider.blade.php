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
	</ol>
</div><!--/.row-->
<div class="row">
	<div class="col-md-4">
		<h1 class="page-header">滑块</h1>
	</div>

	<div class="col-md-8 text-right" style="margin: 30px 0 0 0;">
		<div class="btn-group">
		    <button type="button" class="btn btn-success" id="add"><span class="glyphicon glyphicon-plus"></span> 增加</button>
		    <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-edit"> 修改</button>
		    <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> 删除</button>
		</div>
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
<div class="col-md-4">
	<div class="panel panel-success">
    	<div class="panel-heading">
    	    <div class="panel-title">
    	       <h3>滑块标题</h3>
    	    </div>
    	</div>
    	<div class="panel-body">
    	    滑块内容
    	</div>
    	<div class="panel-footer">滑块图片</div>
	</div>
</div>
<div class="col-md-4">
	<div class="panel panel-warning">
    	<div class="panel-heading">
    	    <div class="panel-title">
    	       滑块标题
    	    </div>
    	</div>
    	<div class="panel-body">
    	    滑块内容
    	</div>
    	<div class="panel-footer">滑块图片</div>
	</div>
</div>
<div class="col-md-4">
	<div class="panel panel-info">
    	<div class="panel-heading">
    	    <div class="panel-title">
    	       滑块标题
    	    </div>
    	</div>
    	<div class="panel-body">
    	    滑块内容
    	</div>
    	<div class="panel-footer">滑块图片</div>
	</div>
</div>

<!-- 模态框（Modal） -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title " id="myModalLabel"><span class="label label-info"><i class="glyphicon glyphicon-plus"></i>菜单</span></h4>
            </div>
            <div class="modal-body">
            	<form action="{{url('project/addSlider')}}" class="form-horizontal" id="sliderform" role="form" method="post">
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
   	 					<div class="col-md-2">
   	 						<span class="btn btn-primary">确定</span>
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
	})
});
</script>