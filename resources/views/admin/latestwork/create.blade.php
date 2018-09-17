@extends('layouts.admin')
  @section('content')
  

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Add New Latestwork</h3>
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
                <form action="{{route('latest_work.store')}}" method="post" id="latestwork-form" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Latestwork Title</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="latestwork_title" name="latestwork_title">
                        </div>
                        <label class="col-sm-2 "><strong>Show Front</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="Y" id="active" checked> Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="N" id="inactive"> No</label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Latestwork Category</strong></label>
                        <div class="col-sm-4">
                            <select name="latestwork_category" id="latestwork_category" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($category as $cat)
                                    <option value="{{$cat['id']}}">{{$cat['category_title']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label  class="col-sm-2"><strong>Latestwork URL</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="latestwork_url" name="latestwork_url">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Latestwork Content</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" id="elm1" name="latestwork_content"></textarea>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Latestwork Technology</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="latestwork_technology" name="latestwork_technology">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2"><strong>Photo</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle" name="image" placeholder="Select Photo">
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

    $('#latestwork-form').validate({ // initialize the plugin
        rules: {
            latestwork_title: {
                required: true,
            },
            latestwork_category: {
                required: true,
            },
            latestwork_content: {
                required: true,
            },
            latestwork_technology: {
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