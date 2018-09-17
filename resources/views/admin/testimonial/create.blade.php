@extends('layouts.admin')
  @section('content')
  

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Add New Testimonial</h3>
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
                <form action="{{route('testimonial.store')}}" method="post" id="Slider-form" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Name</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <label class="col-sm-2 "><strong>Show Front</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="Y" id="active" checked> Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="N" id="inactive"> No</label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Comment</strong></label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                        </div>
                        <label class="col-sm-2 "><strong>Approved</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="is_approved" value="Y" id="approved" checked> Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="is_approved" value="N" id="unapproved"> No</label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Designation</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="designation" name="designation">
                        </div>
                        <label class="col-sm-2 "><strong>Rating</strong></label>
                        <div class="col-sm-4">
                            <select name="rating" id="rating" class="form-control">
                                <option value="">Select Rating</option>
                                <option value="1.0">1.0</option>
                                <option value="1.5">1.5</option>
                                <option value="2.0">2.0</option>
                                <option value="2.5">2.5</option>
                                <option value="3.0">3.0</option>
                                <option value="3.5">3.5</option>
                                <option value="4.0">4.0</option>
                                <option value="4.5">4.5</option>
                                <option value="5.0">5.0</option>
                            </select>
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
                            <a class="btn btn-default" href="{{route('testimonial.index')}}">Back</a>
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
            name: {
                required: true,
            },
            comment: {
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