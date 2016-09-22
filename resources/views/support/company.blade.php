<div class="row">
<div class="panel panel-info col-xs-12">
    <div class="panel-heading">公司信息</div>
    <div class="panel-body">
		<form action="{{url('company/store')}}" id="companyForm" role="form" method="POST">
		{!! csrf_field() !!}
			<div class="row">
				<div class="form-group" style="display: none;">
				    <label for="name">id</label>
				    <input type="text" class="form-control" name="id" value="{{$info->id}}">
				 </div>
				 <div class="col-xs-4">  
				  <div class="form-group">
				    <label for="name">公司名</label>
				    <input type="text" class="form-control" name="name" value="{{$info->name}}">
				  </div>
				  <!-- <div class="form-group">
				    <label for="name">公司英文名</label>
				    <input type="text" class="form-control">
				  </div> -->
				  <!-- <div class="form-group">
				    <label for="name">公司地址</label>
				    <div class="row">
				    	<div class="col-xs-4"><input type="text" class="form-control"></div>
				    	<div class="col-xs-4"><input type="text" class="form-control"></div>
				    	<div class="col-xs-4"><input type="text" class="form-control"></div>		
				    </div>				    			    
				  </div> -->
				  <div class="form-group">
				    <label for="name">公司地址</label>
				    <input type="text" name="address" value="{{$info->address}}" class="form-control">
				  </div>
				  
				  <div class="form-group">
				    <label for="name">归属人</label>
				    <input type="text" name="belong" class="form-control" value="{{$info->belong}}">
				  </div>
				  <div class="form-group">
				    <label for="name">成立时间</label>
				    <input type="text" name="create_time" class="form-control" value="{{$info->create_time}}">
				  </div>
				  <!-- <div class="form-group">
				  			    <label for="name">座机</label>
				  			    <input type="text" class="form-control">
				  			  </div>	 -->			  
				</div>
				<div class="col-xs-2"></div>
				<div class="col-xs-4">
					<div class="form-group">
				    <label for="name">手机</label>
				    <input type="text" name="tel" class="form-control" value="{{$info->tel}}">
				  </div>
					<div class="form-group">
				    <label for="name">QQ</label>
				    <input type="text" name="qq" class="form-control" value="{{$info->qq}}">
				  </div>
				  <div class="form-group">
				    <label for="name">微信</label>
				    <input type="text" name="weixin" class="form-control" value="{{$info->weixin}}">
				  </div>
				  <div class="form-group">
				    <label for="name">新浪</label>
				    <input type="text" name="sina" class="form-control" value="{{$info->sina}}">
				  </div>
				  
				  <!-- <div class="form-group">
				    <label for="name">理念</label>
				    <input type="text" class="form-control">
				  </div> -->
				  
				</div>
				<div class="col-xs-2"></div>
			</div>
			<div class="row col-xs-12">
				<div class="form-group">
				   <label for="name">简介</label>
				   <textarea class="form-control" name="recommend" rows="8">{{$info->recommend}}</textarea>
				 </div>
			</div>
			
		</form>
    </div>
    <div class="panel-footer">
    	<span class="btn btn-success" id="save">保存</span>
    </div>

</div>
</div>
<script>
	$('#save').click(function(){
		$('#companyForm').submit();
	});
</script>