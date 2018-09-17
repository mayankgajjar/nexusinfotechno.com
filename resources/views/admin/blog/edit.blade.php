@extends('layouts.admin')
  @section('content')
  

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit Blog</h3>
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
                <form action="{{route('blogs.update',$blog['id'])}}" method="post" id="portfolio-form" class="form-horizontal" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Blog Title</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="blog_title" name="blog_title" value="{{$blog['blog_title']}}">
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label  class="col-sm-2"><strong>Blog Content</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" id="blog_content" name="blog_content">{{$blog['blog_content']}}</textarea>
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Blog Content 1</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" id="blog_paragraph1" name="blog_paragraph1">{{$blog['blog_paragraph1']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Blog Content 2</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" id="blog_paragraph2" name="blog_paragraph2">{{$blog['blog_paragraph2']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Blog Content 3</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" id="blog_paragraph3" name="blog_paragraph3">{{$blog['blog_paragraph3']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Blog Category</strong></label>
                        <div class="col-sm-4">
                            <?php $cat_array = explode(",",$blog['blog_category']); ?>
                            <?php foreach ($category as $cat){ ?>
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="{{$cat['id']}}" name="blog_category[]" <?php if (in_array($cat['id'], $cat_array)){ echo 'checked'; } ?>>{{$cat['category_title']}}
                                </label>
                            <?php } ?>
                            <!--<select name="blog_category" id="blog_category" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($category as $cat)
                                    <option value="{{$cat['id']}}" <?php if($cat['id'] == $blog['blog_category']) { echo 'selected'; } ?>>{{$cat['category_title']}}</option>
                                @endforeach
                            </select>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2"><strong>Blog Photo</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle" name="blog_image" placeholder="Select Photo">
                        </div>
                        <?php if($blog['blog_image'] != ''){ ?>
                            <img src='{{ URL::asset('public/custom_image/blog/image/'.$blog['blog_image']) }}' class="img-rounded" width="300" height="200" >       
                        <?php } ?>
                    </div>
                
                    <div class="form-group">
                        <label class="col-sm-2"><strong>Blog Video</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle" name="blog_video" placeholder="Select video">
                        </div>
                        <?php if($blog['blog_video'] != ''){ ?>
                            <video width="300" height="200" controls preload="none">
                                <source src="{{ URL::asset('public/custom_image/blog/video/'.$blog['blog_video']) }}" type="video/mp4">
                            </video>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 "><strong>Show Front</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="Y" id="active"  <?php if($blog['show_front'] == 'Y') { echo 'checked'; } ?> > Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="N" id="inactive" <?php if($blog['show_front'] == 'N') { echo 'checked'; } ?>> No</label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-default">Submit</button>
                            <a class="btn btn-default" href="{{route('blogs.index')}}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function () {
    
    CKEDITOR.replace( 'blog_content' );
    
    function updateAllMessageForms() {
        for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
        }
    }

    $('#portfolio-form').validate({ // initialize the plugin
        rules: {
            blog_title: {
                required: true,
            },
            blog_paragraph1: {
                required: true,
            },
            blog_category: {
                required: true,
            }
        },
    });

});
</script>  
@stop