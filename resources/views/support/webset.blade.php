<div class="row">
  <div class="col-md-4">
    <h1 class="page-header">
      <div class="btn-group">
          <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown">
            {{$fontMenus[$subColumn]}} <span class="caret"></span>
          </button>
        <ul class="dropdown-menu" role="menu">
            @foreach($fontMenus as $key=>$value)
              <li><a href="{{url('support/'.$view.'/'.$key)}}">{{$value}}</a></li>
            @endforeach
          </ul>
      </div>
    </h1>
  </div>
    <div class="panel panel-info" style="margin: 100px 0 0 0;">
    <div class="panel-heading">
      {{$fontMenus[$subColumn]}}前端详细配置
    </div>
        <div class="panel-body">
            <form action="{{url('webset/edit')}}" class="form-horizontal" id="websetform" role="form" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
              <div class="form-group" style="display: none;">
                <label for="name" class="col-md-2 control-label">id：</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" name="id" id="id" value="{{$info['id']}}">
                </div>                
              </div>
              <div class="form-group" style="display: none;">
                <label for="name" class="col-md-2 control-label">归属菜单：</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="menu-belong" id="menu-belong" value="{{$info['menu-belong']}}">
                </div>                
              </div>
              <div class="form-group">
              <label for="name" class="col-md-2 control-label">{{$fontMenus[$subColumn]}}-头部：</label>
              <div class="col-md-4">
                <select name="menu-header" id="menu-header" class="form-control">
                <option value="">无</option>
                  @foreach($getProset as $proset)
                    @if($info['menu-header'] == $proset)
                      <option value="{{$proset}}" selected="true">{{$proset}}</option>
                    @else
                      <option value="{{$proset}}">{{$proset}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              <label for="name" class="col-md-2 control-label">头部-名称：</label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="menu-header-name" id="menu-header-name" value="{{$info['menu-header-name']}}">
              </div>                 
              </div>
              <div class="form-group">
              <label for="name" class="col-md-2 control-label">{{$fontMenus[$subColumn]}}-中部：</label>
              <div class="col-md-4">
                <select name="menu-middle" id="menu-middle" class="form-control">
                <option value="">无</option>
                  @foreach($getProset as $proset)
                    @if($info['menu-middle'] == $proset)
                      <option value="{{$proset}}" selected="true">{{$proset}}</option>
                    @else
                      <option value="{{$proset}}">{{$proset}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              <label for="name" class="col-md-2 control-label">中部-名称：</label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="menu-middle-name" id="menu-middle-name" value="{{$info['menu-middle-name']}}">
              </div>                
              </div>
              <div class="form-group">
              <label for="name" class="col-md-2 control-label">{{$fontMenus[$subColumn]}}-尾部：</label>
              <div class="col-md-4">
                <select name="menu-footer" id="menu-footer" class="form-control">
                <option value="">无</option>
                  @foreach($getProset as $proset)
                    @if($info['menu-footer'] == $proset)
                      <option value="{{$proset}}" selected="true">{{$proset}}</option>
                    @else
                      <option value="{{$proset}}">{{$proset}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
              <label for="name" class="col-md-2 control-label">尾部-名称：</label>
              <div class="col-md-4">
                <input type="text" class="form-control" name="menu-footer-name" id="menu-footer-name" value="{{$info['menu-footer-name']}}">
              </div>                
              </div>
              <div class="form-group">
                <label for="name" class="col-md-2 control-label">{{$fontMenus[$subColumn]}}-背景1：</label>
                <div class="col-md-4">
                 <input type="text" id="is_change1" name="is_change1" style="display: none" value="unchange">
                 <input type="text" id="background1" name="background1" style="display: none" value="{{$info['background1']}}">
                  <input type="file" class="form-control" name="image1" id="image1">
                </div>
                <label for="name" class="col-md-2 control-label">{{$fontMenus[$subColumn]}}-背景2：</label>
                <div class="col-md-4">
                  <input type="text" id="is_change2" name="is_change2" style="display: none">
                  <input type="text" id="background2" name="background2" style="display: none" value="{{$info['background2']}}">
                  <input type="file" class="form-control" name="image2" id="image2">
                </div>
              </div>
              </form>
        </div>
        <div class="panel-footer">
          <div class="col-md-11"></div>
          <span class="btn btn-success btn-lg" id="sure">保存</span>
        </div>
    </div>
</div>
<script>
  //初始化预览
  $("#image1").fileinput({
      initialPreview: [
          "{{$info['background1']?asset($info['background1']):''}}"
      ],
      initialPreviewAsData: true,
      initialPreviewConfig: [
            {caption: "{{$info['background1']}}", showDelete:false}
      ],
      overwriteInitial: true,
      initialCaption: "{{$fontMenus[$subColumn]}}"+'背景1',
      showUpload:false
  });
  //初始化预览
  $("#image2").fileinput({
    initialPreview: [
          "{{$info['background2']?asset($info['background2']):''}}"
      ],
      initialPreviewAsData: true,
      initialPreviewConfig: [
            {caption: "{{$info['background2']}}", showDelete:false}
      ],
      overwriteInitial: true,
      initialCaption: "{{$fontMenus[$subColumn]}}"+'背景2',
      showUpload:false
  });
  
  //移除第一个的时候 第二个也一起移除
  $('#image1').on('fileclear', function(event) {
    $('#is_change1').val('remove');
    $('#is_change2').val('remove');
    $('#image2').fileinput('clear');
  });

  $('#image2').on('fileclear', function(event) {
  $('#is_change2').val('remove');
  });

  $('#image1').on('change', function(event) {
     $('#is_change1').val('change');
  });

  $('#image2').on('change', function(event) {
      $('#is_change2').val('change');
  });

  $('#sure').click(function(){
    $('#websetform').submit();
  });
</script>