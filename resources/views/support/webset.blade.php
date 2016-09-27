<div class="row">
<div class="row">
  <div class="col-md-4">
    <h1 class="page-header">
      <div class="btn-group">
          <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown">
            首页配置 <span class="caret"></span>
          </button>
        <ul class="dropdown-menu" role="menu">
            @foreach($getProset as $key=>$value)
              <li><a href="{{url('support/'.$key)}}">{{$value}}</a></li>
            @endforeach
          </ul>
      </div>
    </h1>
  </div>
</div>
<script>
  $('#profile').tagsinput({
      itemValue: 'value',
      itemText: 'text'
  });
  $('#profile').tagsinput('add', { "value": 1 , "text": "Amsterdam"   , "continent": "Europe"    });

  $('#save').click(function(){
    console.log($("#profile").tagsinput('items'));

  });

  $('#profile').on('beforeItemAdd',function(event){
      console.log(event);
  });
</script>