<div class="row">
<div class="panel panel-info col-xs-12">
    <div class="panel-heading">前端配置</div>
    <div class="panel-body">
		<form action="{{url('company/store')}}" id="form" role="form" method="POST">
		{!! csrf_field() !!}
			<div class="row">
				<div class="form-group">
              <label for="name" class="col-md-1 control-label">标题：</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="profile" id="profile">
              </div>                
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
  $('#profile').tagsinput();
</script>