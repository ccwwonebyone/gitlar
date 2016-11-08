<div class="row">
<div class="panel panel-info col-xs-12">
    <div class="panel-heading">公司信息</div>
    <div class="panel-body">
		<form action="{{url('company/store')}}" id="companyForm" role="form" method="POST" enctype="multipart/form-data">
		{!! csrf_field() !!}
			<div class="row">
				<div class="form-group" style="display: none;">
				    <label for="name">id：</label>
				    <input type="text" class="form-control" name="id" value="{{$info->id}}">
				 </div>
				 <div class="col-xs-4">  
				  <div class="form-group">
				    <label for="name">公司名：</label>
				    <input type="text" class="form-control" name="name" value="{{$info->name}}">
				  </div>
				  <div class="form-group">
				    <label for="name">公司地址：</label>
				    <input type="text" name="address" value="{{$info->address}}" class="form-control">
				  </div>
				  
				  <div class="form-group">
				    <label for="name">归属人：</label>
				    <input type="text" name="belong" class="form-control" value="{{$info->belong}}">
				  </div>
				  <div class="form-group">
				    <label for="name">成立时间：</label>
				    <input type="text" name="create_time" class="form-control" value="{{$info->create_time}}">
				  </div>
				  <div class="form-group">
				    <label for="name">网站背景：</label>
				    <input type="text" id="is_change" name="is_change" style="display: none" value="unchange">
                  	<input type="file" class="form-control" name="background" id="background">
				  </div>		  
				</div>
				<div class="col-xs-1"></div>
				<div class="col-xs-7">
				  <div class="form-group col-xs-5">
				    <label for="name">手机：</label>
				    <input type="text" name="tel" class="form-control" value="{{explode(',',$info->tel)[0]}}">				    
				  </div>
				  <div class="form-group col-xs-7">
				  	<label for="name">二维码：</label>
				  	<input type="text" id="tel_change" name="tel_change" style="display: none" value="{{isset(explode(',',$info->tel)[1])? explode(',',$info->tel)[1] : ''}}">
                  	<input type="file" class="form-control" name="tel_img" id="tel_img">
				  </div>
					<div class="form-group col-xs-5">
				    <label for="name">QQ：</label>
				    <input type="text" name="qq" class="form-control" value="{{explode(',',$info->qq)[0]}}">				    
				  </div>
				  <div class="form-group col-xs-7">
				  	<label for="name">二维码：</label>
				  	<input type="text" id="qq_change" name="qq_change" style="display: none" value="{{isset(explode(',',$info->qq)[1])? explode(',',$info->qq)[1] : ''}}">
                  	<input type="file" class="form-control" name="qq_img" id="qq_img">
				  </div>
				  <div class="form-group col-xs-5">
				    <label for="name">微信：</label>
				    <input type="text" name="weixin" class="form-control" value="{{explode(',',$info->weixin)[0]}}">				    
				  </div>
				  <div class="form-group col-xs-7">
				  	<label for="name">二维码：</label>
                  	<input type="text" id="weixin_change" name="weixin_change" style="display: none" value="{{isset(explode(',',$info->weixin)[1])? explode(',',$info->weixin)[1] : ''}}">
                  	<input type="file" class="form-control" name="weixin_img" id="weixin_img">
				  </div>
				  <div class="form-group col-xs-5">
				    <label for="name">新浪：</label>
				    <input type="text" name="sina" class="form-control" value="{{explode(',',$info->sina)[0]}}">				    
				  </div>
				  <div class="form-group col-xs-7">
				  	<label for="name">二维码：</label>
                  	<input type="text" id="sina_change" name="sina_change" style="display: none" value="{{isset(explode(',',$info->sina)[1])? explode(',',$info->sina)[1] : ''}}">
                  	<input type="file" class="form-control" name="sina_img" id="sina_img">
				  </div>
				  <div class="form-group col-xs-12">
				    <label for="name">启用网站：</label>
				    <select name="web" id="web" class="form-control">
                		  @foreach($webs as $key => $web)
                		    @if($info->web == $key)
                		      <option value="{{$key}}" selected="true">{{$web}}</option>
                		    @else
                		      <option value="{{$key}}">{{$web}}</option>
                		    @endif
                		  @endforeach
                	</select>
				  </div>
				  <!-- <div class="form-group">
				    <label for="name">理念</label>
				    <input type="text" class="form-control">
				  </div> -->
				  
				</div>
				<!-- <div class="col-xs-2"></div> -->
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
$(function(){
	$.each($('#qq_img,#weixin_img,#sina_img,#tel_img,#background'),function(n,m){
		var file_type = $(this).attr('id');
		var previewPic,previewPicUrl,text;
		switch (file_type) {
			case 'qq_img':
				previewPic = "{{ isset(explode(',',$info->qq)[1])? explode(',',$info->qq)[1] : '' }}";
				previewPicUrl = "{{ isset(explode(',',$info->qq)[1])&&explode(',',$info->qq)[1]!=''? asset(explode(',',$info->qq)[1]) : '' }}";
				text = 'QQ';
				break;
			case 'weixin_img':
				previewPic = "{{ isset(explode(',',$info->weixin)[1])? explode(',',$info->weixin)[1] : '' }}";
				previewPicUrl = "{{ isset(explode(',',$info->weixin)[1])&&explode(',',$info->weixin)[1]!=''? asset(explode(',',$info->weixin)[1]) : '' }}";
				text = '微信';
				break;
			case 'sina_img':
				previewPic = "{{ isset(explode(',',$info->sina)[1])? explode(',',$info->sina)[1] : '' }}";
				previewPicUrl = "{{ isset(explode(',',$info->sina)[1])&&explode(',',$info->sina)[1]!=''? asset(explode(',',$info->sina)[1]) : '' }}";
				text = '新浪'; 
				break;
			case 'tel_img':
				previewPic = "{{ isset(explode(',',$info->tel)[1])? explode(',',$info->tel)[1] : '' }}";
				previewPicUrl = "{{ isset(explode(',',$info->tel)[1])&&explode(',',$info->tel)[1]!=''? asset(explode(',',$info->tel)[1]) : '' }}";
				text = '手机'; 
				break;
			case 'background':
				previewPic = "{{ $info->background!='' ? $info->background : '' }}";
				previewPicUrl = "{{ $info->background!='' ? asset($info->background) : '' }}";
				text = '背景'; 
				break;
		}
		$(this).fileinput({
			initialPreview: [
          		previewPicUrl
      		],
      		initialPreviewAsData: true,
      		initialPreviewConfig: [
      			{caption: previewPic, showDelete:false}
      		],
      		overwriteInitial: true,
      		initialCaption:text,
      		showUpload:false
		});
	});
	$('#save').click(function(){
		$('#companyForm').submit();
	});
	$('#background,#sina_img,#weixin_img,#qq_img,#tel_img').on('fileclear', function(event) {
		var contact_type = $(this).attr('id');
		if(contact_type!='background'){
			var contact = contact_type.split('_')[0];
			$('#'+contact+'_change').val('remove');
		}else{
			$('#is_change').val('remove');
		}	
 	});

	$('#background,#sina_img,#weixin_img,#qq_img,#tel_img').on('change', function(event) {
		var contact_type = $(this).attr('id');
		if(contact_type!='background'){
			var contact = contact_type.split('_')[0];
			$('#'+contact+'_change').val('change');
		}else{
			$('#is_change').val('change');
		}	
 	});

 	/*$('#background').on('change', function(event) {
    	$('#is_change').val('change');
  });*/
})
	
</script>