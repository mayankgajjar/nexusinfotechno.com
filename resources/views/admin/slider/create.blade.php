@extends('layouts.admin')
  @section('content')
  

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Add New Slider</h3>
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
                <form action="{{route('Slider.store')}}" method="post" id="Slider-form" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Slider Title</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="title" name="slider_title">
                        </div>
                        <label class="col-sm-2 "><strong>Show Front</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="Y" id="active" checked> Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="N" id="inactive"> No</label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Slider Content</strong></label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="5" id="comment" name="slider_content"></textarea>
                        </div>
                        <label  class="col-sm-2"><strong>Slider URL</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="slider_url" name="slider_url">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2"><strong>Photo</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle" name="image" required placeholder="Select Photo">
                        </div>
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
            },
            image: {
                required: true,
                extension: "jpg|jpeg|png"
            }
        },
        messages: {
            image: {
                extension: "Please select a JPG or PNG file.",
            }
        }
    });

});
</script>  
@stop