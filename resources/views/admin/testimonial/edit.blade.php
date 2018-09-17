@extends('layouts.admin')
  @section('content')
  

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit Testimonial</h3>
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
                <form action="{{route('testimonial.update',$testimonial['id'])}}" method="post" id="Slider-form" class="form-horizontal" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Name</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" name="name" value="{{$testimonial['name']}}">
                        </div>
                        <label class="col-sm-2 "><strong>Show Front</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="Y" id="active"  <?php if($testimonial['show_front'] == 'Y') { echo 'checked'; } ?> > Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="N" id="inactive" <?php if($testimonial['show_front'] == 'N') { echo 'checked'; } ?>> No</label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Comment</strong></label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="5" id="comment" name="comment">{{$testimonial['comment']}}</textarea>
                        </div>
                        <label class="col-sm-2 "><strong>Approved</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="is_approved" value="Y" id="approved" <?php if($testimonial['is_approved'] == 'Y') { echo 'checked'; } ?>> Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="is_approved" value="N" id="unapproved" <?php if($testimonial['is_approved'] == 'N') { echo 'checked'; } ?>> No</label></div>
                        </div>
                    </div>
                <div class="form-group">
                        <label  class="col-sm-2"><strong>Designation</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="designation" name="designation" value="{{$testimonial['designation']}}">
                        </div>
                        <label class="col-sm-2 "><strong>Rating</strong></label>
                        <div class="col-sm-4">
                            <select name="rating" id="rating" class="form-control">
                                <option value="">Select Rating</option>
                                <option value="1.0" <?php if($testimonial['rating'] == '1.0'){ echo 'selected';} ?>>1.0</option>
                                <option value="1.5" <?php if($testimonial['rating'] == '1.5'){ echo 'selected';} ?>>1.5</option>
                                <option value="2.0" <?php if($testimonial['rating'] == '2.0'){ echo 'selected';} ?>>2.0</option>
                                <option value="2.5" <?php if($testimonial['rating'] == '2.5'){ echo 'selected';} ?>>2.5</option>
                                <option value="3.0" <?php if($testimonial['rating'] == '3.0'){ echo 'selected';} ?>>3.0</option>
                                <option value="3.5" <?php if($testimonial['rating'] == '3.5'){ echo 'selected';} ?>>3.5</option>
                                <option value="4.0" <?php if($testimonial['rating'] == '4.0'){ echo 'selected';} ?>>4.0</option>
                                <option value="4.5" <?php if($testimonial['rating'] == '4.5'){ echo 'selected';} ?>>4.5</option>
                                <option value="5.0" <?php if($testimonial['rating'] == '5.0'){ echo 'selected';} ?>>5.0</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2"><strong>Photo</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle" name="image" placeholder="Select Photo">
                        </div>
                        <?php if($testimonial['image'] != ''){ ?>
                            <img src='{{ URL::asset('public/custom_image/testimonial_images/'.$testimonial['image']) }}' class="img-rounded" width="250" height="130" >       
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
            name: {
                required: true,
            },
            comment: {
                required: true,
            }
        }
    });

});
</script>  
@stop