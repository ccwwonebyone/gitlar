<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">菜单</div>
			<div class="panel-body">
				<table id="menuTable"></table>
			</div>
		</div>
	</div>
</div><!--/.row-->
<div id="toolbar">
	<button id="add" class="btn btn-success"> <i class="glyphicon glyphicon-plus"></i> 增加</button>
	<button id="edit" class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i> 修改</button>
    <button id="remove" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> 删除</button>       	
</div>


<!-- 模态框（Modal） -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-plus"></i>菜单</h4>
            </div>
            <div class="modal-body">

            		<form action="" class="form-horizontal" role="form">
            			  <div class="form-group">
   	 						<label for="name" class="col-sm-2 control-label">菜单名</label>
   	 						<div class="col-sm-4">
   	 							<input type="text" class="form-control" id="name" style="width: 200px;">
   	 						</div>   	 						
  						  </div>
  						  <div class="form-group">
   	 						<label for="name" class="col-sm-2 control-label">链接</label>
   	 						<div class="col-sm-4">
   	 							<input type="text" class="form-control" id="url" style="width: 200px;">
   	 						</div>   	 						
  						  </div>
  						  <div class="form-group">
   	 						<label for="name" class="col-sm-2 control-label">排序</label>
   	 						<div class="col-sm-4">
   	 							<input type="text" class="form-control" id="order" style="width: 200px;">
   	 						</div>   	 						
  						  </div>
  						  <div class="form-group">
   	 						<label for="name" class="col-sm-2 control-label">属于</label>
   	 						<div class="col-sm-4">
   	 							<input type="text" class="form-control" id="belong" style="width: 200px;">
   	 						</div>   	 						
  						  </div>
  						  <div class="form-group">
   	 						<label for="name" class="col-sm-2 control-label">图标</label>
   	 						<div class="col-sm-4">
   	 							<input type="text" class="form-control" id="icon" style="width: 200px;">
   	 						</div>   	 						
  						  </div>
  						  <div class="form-group">
   	 						<label for="name" class="col-sm-2 control-label">上级菜单</label>
   	 						<div class="col-sm-4">
   	 							<input type="text" class="form-control" id="pid_name" style="width: 200px;">
   	 						</div>   	 						
  						  </div>
  						  <div class="form-group">
   	 						<label for="name" class="col-sm-2 control-label">是否显示</label>
   	 						<div class="col-sm-4">
   	 							<input type="text" class="form-control" id="is_show" style="width: 200px;">
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






<link rel="stylesheet" href="{{asset('git-lar/bootstrap-table/dist/bootstrap-table.min.css')}}">
<script src="{{asset('git-lar/bootstrap-table/dist/bootstrap-table.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('git-lar/bootstrap-table/dist/locale/bootstrap-table-zh-CN.min.js')}}" type="text/javascript" charset="utf-8" ></script>

						<script>
						    $(function () {
    							$('#menuTable').bootstrapTable({
    								toolbar:"#toolbar",
        							showToggle:true,
        							showRefresh:true,
        							sortName:'id',
        							sortOrder:'asc',
        							showColumns:true,
        							search:true,
        							showPaginationSwitch:true,
        							// rowStyle:"rowStyle",
        							striped:true,
        							pagination:true,
        							pageList:"[10,20,30,'所有']",
        							sidePagination:'server',
        							url:"{{url('menu/getallData')}}",
        							columns:[
        								{field: 'state',checkbox: true,align: 'center',valign: 'middle'},
        								{field:'id',title:'菜单id',sortable: true,align:'center'},
        								{field:'name',title:'名称',align:'center'},
        								{field:'url',title:'链接',align:'center'},
        								{field:'order',title:'排序',sortable: true,align:'center'},
        								{field:'belong',title:'属于',formatter:setbelong,align:'center'},
        								{field:'icon',title:'图标',formatter:seticon,align:'center'},
        								{field:'pid_name',title:'上级菜单',align:'center'},
        								{field:'is_show',title:'是否显示',formatter:is_show,align:'center'}
        							]
    							});
    							$('#add').click(function () {
    								$('#addModal').modal('show');	
    							})
						    });
						
						    function rowStyle(row, index) {

						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
								
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};

						        // Math.round(Math.random()*4);
						    }
						    function setbelong(value){
						    	if(value==1){
						    		return '前端';
						    	}else{
						    		return '后台';
						    	}
						    }

						    function seticon(value){
						    	return '<div class="glyphicon glyphicon-'+value+'"></div>&nbsp&nbsp  &nbsp'+value;
						    }
						    function is_show(value){
						    	return value==1 ?'显示' :'隐藏';
						    }

						    /*function setpid(value){
						    	$.ajax({
						    		url:"{{url('menu/getallData')}}",
						    		type:'POST',
						    		data:{
						    			pid:value
						    		},
						    		success:function(data){
						    			return data;
						    		}
						    	});
						    }*/

						    $('#hover, #striped, #condensed').click(function () {
						         var classes = 'table';			
						         if ($('#hover').prop('checked')) {
						             classes += ' table-hover';
						         }
						         if ($('#condensed').prop('checked')) {
						             classes += ' table-condensed';
						         }
						         $('#table-style').bootstrapTable('destroy')
						             .bootstrapTable({
						                 classes: classes,
						                 striped: $('#striped').prop('checked')
						         });
						    });
						</script>

					</div>
				</div>
			</div>
		</div><!--/.row-->