<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">栏位管理</div>
			<div class="panel-body">
				<table id="prosetTable"></table>
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
            		<form action="{{url('proset/add')}}" class="form-horizontal" id="prosetform" role="form" method="post">
                {!! csrf_field() !!}
                  <div class="form-group" style="display: none;">
              <label for="name" class="col-md-2 control-label">id：</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="id" id="id">
              </div>
              </div>
              <div class="form-group">
              <label for="name" class="col-md-2 control-label">栏位名：</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="name" id="name" value="">
              </div>
              </div>
                  <div class="form-group">
              <label for="name" class="col-md-2 control-label">链接：</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="url" id="url">
              </div>
              </div>
            <div class="form-group">
              <label for="name" class="col-md-2 control-label">启用：</label>
              <div class="radio col-md-2">
              <label>
                <input type="radio" name="is_show" value="1" checked>启用
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






<link rel="stylesheet" href="{{asset('git-lar/bootstrap-table/dist/bootstrap-table.min.css')}}">
<script src="{{asset('git-lar/bootstrap-table/dist/bootstrap-table.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('git-lar/bootstrap-table/dist/locale/bootstrap-table-zh-CN.min.js')}}" type="text/javascript" charset="utf-8" ></script>

						<script>
						    $(function () {
    							$('#prosetTable').bootstrapTable({
    								toolbar:"#toolbar",
        							//showToggle:true,
        							showRefresh:true,
        							sortName:'id',
        							sortOrder:'asc',
                      queryParams:function(params) {        //不知道出了什么问题发送没有请求参数 要自己配置
                                    var paramsc = {};
                                    paramsc.limit =  params.pageSize;
                                    paramsc.offset =  (params.pageNumber-1)*(params.pageSize);
                                    paramsc.search =  params.searchText;
                                    paramsc.sort =  params.sortName;
                                    paramsc.order =  params.sortOrder;
                                    return paramsc;
                                  },
        							showColumns:true,
        							search:true,
        							showPaginationSwitch:true,
        							// rowStyle:"rowStyle",
        							striped:true,
        							pagination:true,
        							pageList:"[10,20,30,40]",
        							sidePagination:'server',
        							url:"{{url('proset/getallData')}}",
        							columns:[
        								{field: 'state',checkbox: true,align: 'center',valign: 'middle'},
        								{field:'id',title:'id',sortable: true,align:'center',visible:false},
        								{field:'name',title:'栏位名',align:'center'},
        								{field:'url',title:'链接',align:'center'},
        								{field:'is_show',title:'是否启用',formatter:is_show,align:'center'}
        							]
    							});

    							$('#add').click(function () {
                    $('#id').val();
                      $('#name').val('');
                      $('#url').val('');
                      $('input:radio[name=is_show]')[0].checked = true;
    								  $('#addModal').modal('show');
    							});
                  $('#sure').click(function(){
                    $('#prosetform').submit();
                  });

                  $('#remove').click(function(){
                    var data = $('#prosetTable').bootstrapTable('getSelections');
                    if(data.length > 0){
                        var ids = [];
                        var ban = false;
                        var info = '';
                        $.each(data,function(n,m){
                          if(m.url=='proset'){
                            ban = true;
                            info = m.name;
                          }
                          ids.push(m.id);
                        });
                        if(ban){
                          alert(info+'不可删除');
                          return false;
                        }
                        ids = ids.join(',');
                      $.ajax({
                        headers: {
                          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url:"{{url('proset/remove')}}",
                        type:'post',
                        data:{
                          id:ids
                        },
                        success:function(data){
                          //if(data=='success'){
                            $('#prosetTable').bootstrapTable('refresh');
                          //}
                        }
                      });
                    }
                  });

                  $('#edit').click(function(){
                    var data = $('#prosetTable').bootstrapTable('getSelections');
                    if(data.length != 1){
                      alert('请选中一条数据');
                    }else{
                      var formData = data[0];
                      $('#id').val(formData.id);
                      $('#name').val(formData.name);
                      $('#url').val(formData.url);
                      $('input:radio[name=is_show]')[formData.is_show==1?0:1].checked = true;
                      $('#addModal').modal('show');
                      $('#prosetform').attr('action',"{{url('proset/edit')}}");
                    }

                  });
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
						    function is_show(value){
						    	return value==1 ?'√' :'×';
						    }
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