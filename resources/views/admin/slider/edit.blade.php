@extends('layouts.admin')
  @section('content')
  

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit Slider</h3>
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
                <form action="{{route('Slider.update',$Slider['id'])}}" method="post" id="Slider-form" class="form-horizontal" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Slider Title</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="title" name="slider_title" value="{{$Slider['slider_title']}}">
                        </div>
                        <label class="col-sm-2 "><strong>Show Front</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="Y" id="active"  <?php if($Slider['show_front'] == 'Y') { echo 'checked'; } ?> > Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="N" id="inactive" <?php if($Slider['show_front'] == 'N') { echo 'checked'; } ?>> No</label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Slider Content</strong></label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="5" id="comment" name="slider_content">{{$Slider['slider_content']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2"><strong>Photo</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle" name="image" placeholder="Select Photo">
                        </div>
                        <?php if($Slider['slider_image'] != ''){ ?>
                            <img src='{{ URL::asset('public/custom_image/slieder_images/'.$Slider['slider_image']) }}' class="img-rounded" width="250" height="130" >       
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-default">Submit</button>
                            <a class="btn btn-default" href="{{route('Slider.index')}}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function () {

    $('#Slider-form').validate({ // initialize the plugin
        rules: {
            slider_title: {
                required: true,
            },
            slider_content: {
                required: true,
            }
        }
    });

});
</script>  
@stop