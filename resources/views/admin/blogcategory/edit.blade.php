@extends('layouts.admin')
  @section('content')
  

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit Category</h3>
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
                <form action="{{route('blogcategory.update',$category['id'])}}" method="post" id="category-form" class="form-horizontal" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Category Title</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="title" name="category_title" value="{{$category['category_title']}}">
                        </div>
                        <label class="col-sm-2 "><strong>Show Front</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="Y" id="active"  <?php if($category['show_front'] == 'Y') { echo 'checked'; } ?> > Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="N" id="inactive" <?php if($category['show_front'] == 'N') { echo 'checked'; } ?>> No</label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-default">Submit</button>
                            <a class="btn btn-default" href="{{route('blogcategory.index')}}">Back</a>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function () {

    $('#category-form').validate({ // initialize the plugin
        rules: {
            category_title: {
                required: true,
            }
        }
    });

});
</script>  
@stop