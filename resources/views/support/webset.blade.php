<div class="row">
<div class="panel panel-info col-xs-12">
    <div class="panel-heading">前端配置</div>
    <div class="panel-body">
		<form action="{{url('company/store')}}" id="form" role="form" method="POST">
		{!! csrf_field() !!}
			<div class="row">
				 <div class="form-group">
				 <div class="col-xs-2">
   	 				<label for="bg" class="control-label">主页背景1</label> 
   	 			 </div>	 
   	 			 <div class="col-xs-2">
   	 				<div>
   	 					<a href="javascript:;" class="file">点击更换
    						<input type="file" class="form-control" name="bg1" id="bg1">
						</a>
   	 				</div>
   	 			 </div>
   	 			 <div class="col-xs-2"></div>
   	 			  <div class="col-xs-2">
   	 				<label for="bg" class="control-label">主页背景1</label> 
   	 			 </div>	 
   	 			 <div class="col-xs-2">
   	 				<div>
   	 					<a href="javascript:;" class="file">点击更换
    						<input type="file" class="form-control" name="bg2" id="bg2">
						</a>
   	 				</div>
   	 			 </div>
				</div>
			</div>
			<div class="row">
   	 			<div class="col-xs-6">
   	 				<img src="{{asset('images/back.jpg')}}" class="img-responsive" alt="主页背景"> 
   	 			</div> 
   	 			<div class="col-xs-6">
   	 				<img src="{{asset('images/back1.jpg')}}" class="img-responsive" alt="主页背景"> 
   	 			</div> 
			</div>
		</form>
    </div>
    <div class="panel-footer">
    	<span class="btn btn-success" id="save">保存</span>
    </div>

</div>
</div>