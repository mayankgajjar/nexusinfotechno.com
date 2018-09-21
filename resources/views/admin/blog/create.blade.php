@extends('layouts.admin')
  @section('content')
  

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Add New Blog</h3>
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
                <form action="{{route('blogs.store')}}" method="post" id="blog-form" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Blog Title</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="blog_title" name="blog_title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Blog Content</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" id="elm1" name="blog_content"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Blog Category</strong></label>
                        <div class="col-sm-4">
                            <?php foreach ($category as $cat){ ?>
                                <label class="checkbox-inline">
                                    <input type="checkbox" value="{{$cat['category_title']}}" name="blog_category[]">{{$cat['category_title']}}
                                </label>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2"><strong>Blog Photo</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle" name="blog_image" placeholder="Select Photo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2"><strong>Blog Video</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle" name="blog_video" placeholder="Select video">
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 "><strong>Show Front</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="Y" id="active" checked> Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="N" id="inactive"> No</label></div>
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
    
    $('#blog-form').validate({ // initialize the plugin
        rules: {
            blog_title: {
                required: true,
            },
            blog_content: {
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