<div class="row">
  <div class="col-md-4">
    <h1 class="page-header">
    </h1>
  </div>
  <div class="col-md-8 text-right" style="margin: 30px 0 0 0;">
    <button type="button" class="btn btn-success" id="add" style="float: right;"><span class="glyphicon glyphicon-plus"></span> 增加</button> 
    <div class="col-md-4" style="float: right;">
      <form action="{{url('support/'.$view)}}" id="searchcontact" method="get">
      {!! csrf_field() !!}
        <div class="input-group">
          <input type="text" id="search_content" class="form-control" name="search_content" value="{{session('search')}}" placeholder="标题,内容">
            <span class="input-group-btn">
              <button class="btn btn-primary" type="button" id="search"><span class="glyphicon glyphicon-search"></span> 搜索</button>
            </span>
        </div><!-- /input-group -->
      </form>     
    </div>
  </div>
</div><!--/.row-->

@if(count($info)>0)
  @foreach($info as $contact)
  <div class="showcontact">
    <div class="pshow" style="display:none;">
      <form class="showInfo">
        <input type="text"  class="contact_id" value="{{$contact->id}}">
        <input type="text"  class="contact_type" value="{{$contact->type}}">
        <input type="text"  class="contact_content" value="{{$contact->content}}">
        <input type="text"  class="contact_img" value="{{$contact->img}}">
      </form>
    </div>
    <div class="col-md-4">
      <div class="panel panel-{{$status[rand(0,5)]}}">
        <div class="panel-heading">
            <div class="panel-title">
               <h4 class="col-md-6">
                <button type="button" class="btn btn-{{$status[rand(0,5)]}} iconfont icon-{{$contact->icon}}">
                {{$contact->type}}  {{$contact->content}}
                </button>
               </h4>
               <div style="float: right;margin: 17px 0 0 0;">        
                  <span class="btn btn-xs btn-info glyphicon glyphicon-edit edit" title="编辑"></span>
                  <span class="btn btn-xs btn-danger glyphicon glyphicon-remove remove" title="删除"></span> 
               </div>                    
            </div>
        </div>
        <!-- <div class="panel-body">
            {{$contact->content}}
        </div> -->
        <div class="panel-footer col-md-12">
          <img src="{{asset($contact->img)}}" class="img-responsive" alt="{{$contact->content}}">
        </div>
      </div>
    </div>
  </div>
  @endforeach
@else 
  <div class="jumbotron">
       <h1 class="text-center">目前没有这类型信息</h1>
       <p class="text-center">点击<span class="btn btn-success btn-md" id="oadd">增加</span>添加</p>
  </div>
@endif
<!-- 模态框（Modal） -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title " id="myModalLabel"><span class="label label-info"><i class="glyphicon glyphicon-plus"></i>联系方式</span></h4>
            </div>
            <div class="modal-body">
              <form action="{{url('contact/add')}}" class="form-horizontal" id="contactform" role="form" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                  <div class="form-group" style="display: none;">
              <label for="name" class="col-md-2 control-label">id：</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="id" id="id">
              </div>                
              </div>
                  <div class="form-group">
              <label for="name" class="col-md-2 control-label">类型：</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="type" id="type">
              </div>                
              </div>
              <div class="form-group">
              <label for="name" class="col-md-2 control-label">联系方式：</label>
              <div class="col-md-10">
                <input class="form-control" name="content" id="content">
              </div>                
              </div>
              <div class="form-group">
              <label for="icon" class="col-md-2 control-label">图标：</label>
              <div class="col-md-1">
                <button type="button" class="btn btn-{{$status[rand(0,5)]}} iconfont icon-gift"></button>
              </div>
              <div class="col-md-6">

                <input class="form-control" name="icon" id="icon" placeholder="icon-">
              </div>
              <div class="col-md-3">
                <a href="{{asset('font-icon/demo_symbol.html')}}" class="btn btn-danger" target="_blank">可用图标</a>
              </div>                 
              </div>
              <div class="form-group">
              <label for="name" class="col-md-2 control-label">二维码：</label>
              <!--  <div class="formRight">
                                        <input type="file" id="file" name="file" />
                                      </div><div class="clear"></div> -->
                  <div class="col-md-10">
                    <input type="file" class="form-control" id="image" name="image">
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
  $("#image").fileinput({
    showUpload:false
  });
  //增加滑块
  $('#add,#oadd').click(function(){
    $('#id').val('');
    $('#content').val('');

    $('#type').val('');
    $('#addModal').modal('show');
  });
  //提交增加内容
  $('#sure').click(function () {
     $('#contactform').submit();
  });
  //修改滑块
  $('.edit').click(function(){
    var thisObiect = $(this);
    var id = thisObiect.parents('.showcontact').find('.contact_id').val();
    var type = thisObiect.parents('.showcontact').find('.contact_type').val();
    var content = thisObiect.parents('.showcontact').find('.contact_content').val();

    $('#id').val(id);
    $('#content').val(content);

    $('#type').val(type);
    $('#contactform').attr('action',"{{url('contact/edit')}}");
    $('#addModal').modal('show');   
  });
  //删除滑块
  $('.remove').click(function(){
    var thisObiect = $(this);
    var id = thisObiect.parents('.showcontact').find('.contact_id').val();
    $.ajax({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
      url:"{{url('contact/remove')}}",
      type:'post',
      data:{
        id:id
      },
      success:function(data){
        if(data==1){
          thisObiect.parents('.showcontact').remove();
        }else{
          $('.breadcrumb').append('<li>删除失败</li>');
        }
      }
    });
  });
  //搜索滑块
  $('#search').click(function(){
    /*var content = $.trim($('#search_content').val());
    if(content==''){
      $('#search_content').popover({
        title:'提示',
        container:'body',
        placement:'top',
        content:'搜索内容不能为空'
      });
      $('#search_content').popover('show');
    }else{
      $('#searchcontact').submit();
    }*/
    $('#searchcontact').submit();
  });
});
</script>