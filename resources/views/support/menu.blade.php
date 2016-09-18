		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="active">菜单</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">菜单</h1>
			</div>
		</div><!--/.row-->
				
		
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
<link rel="stylesheet" href="{{asset('git-lar/bootstrap-table/dist/bootstrap-table.min.css')}}">
<script src="{{asset('git-lar/bootstrap-table/dist/bootstrap-table.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('git-lar/bootstrap-table/dist/locale/bootstrap-table-zh-CN.min.js')}}" type="text/javascript" charset="utf-8" ></script>

						<script>
						    $(function () {
    							$('#menuTable').bootstrapTable({
        							showToggle:true,
        							showRefresh:true,
        							sortName:'id',
        							sortOrder:'asc',
        							showColumns:true,
        							search:true,
        							showPaginationSwitch:true,
        							rowStyle:"rowStyle",
        							selectItemName:'toolbar1',
        							pagination:true,
        							pageList:"[10,20,30,'所有']",
        							sidePagination:'server',
        							url:"{{url('menu/getallData')}}",
        							columns:[
        								{field:'id',title:'菜单id',sortable: true,align:'center'},
        								{field:'name',title:'名称',align:'center'},
        								{field:'url',title:'链接',align:'center'},
        								{field:'order',title:'排序',sortable: true,align:'center'},
        								{field:'belong',title:'属于',formatter:setbelong,align:'center'},
        								{field:'icon',title:'图标',formatter:seticon,align:'center'},
        								{field:'pid_name',title:'上级菜单',align:'center'}
        							]
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
						    }
						    function setbelong(value){
						    	if(value==1){
						    		return '前端';
						    	}else{
						    		return '后台';
						    	}
						    }

						    function seticon(value){
						    	return '<div class="glyphicon glyphicon-'+value+'"></div>  '+value;
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