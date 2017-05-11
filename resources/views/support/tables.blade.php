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
        							url:"{{url('menu/getallData')}}",
        							showToggle:true,
        							showRefresh:true,
        							sortName:'id',
        							sortOrder:'asc',
        							showColumns:true,
        							search:true,
        							rowStyle:'rowStyle',
        							selectItemName:'toolbar1',
        							pagination:true,
        							pageList:"[10,20,30]",
        							columns:[
        								{field:'id',title:'菜单id'},
        								{field:'name',title:'名称'},
        								{field:'url',title:'链接'},
        								{field:'order',title:'排序'}
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