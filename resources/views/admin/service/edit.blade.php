@extends('layouts.admin')
  @section('content')
  

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit Service</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="grid-1">
            <div class="form-body">
                <form action="{{route('services.update',$service['id'])}}" method="post" id="service-form" class="form-horizontal" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Service Title</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="service_title" name="service_title" value="{{$service['service_title']}}">
                        </div>
                        <label  class="col-sm-2"><strong>Services Icon</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="service_icon" name="service_icon" value="{{$service['service_icon']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 "><strong>Service Content</strong></label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="5" id="service_content" name="service_content">{{$service['service_content']}}</textarea>
                        </div>
                        <label class="col-sm-2 "><strong>Show Front</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="Y" id="active"  <?php if($service['show_front'] == 'Y') { echo 'checked'; } ?> > Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="N" id="inactive" <?php if($service['show_front'] == 'N') { echo 'checked'; } ?>> No</label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Services URL</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="service_url" name="service_url" value="{{$service['service_url']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-default">Submit</button>
                            <a class="btn btn-default" href="{{route('category.index')}}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function () {

    $('#service-form').validate({ // initialize the plugin
        rules: {
            service_title: {
                required: true,
            },
            service_icon: {
                required: true,
            },
            service_content: {
                required: true,
            },
            service_url: {
                required: true,
            },
        }
    });

});
</script>  
@stop