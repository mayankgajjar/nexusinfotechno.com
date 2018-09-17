@extends('layouts.admin')
  @section('content')
  

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit Portfolio</h3>
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
                <form action="{{route('portfolios.update',$portfolio['id'])}}" method="post" id="portfolio-form" class="form-horizontal" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Slider Title</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="portfolio_title" name="portfolio_title" value="{{$portfolio['portfolio_title']}}">
                        </div>
                        <label class="col-sm-2 "><strong>Show Front</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="Y" id="active"  <?php if($portfolio['show_front'] == 'Y') { echo 'checked'; } ?> > Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="N" id="inactive" <?php if($portfolio['show_front'] == 'N') { echo 'checked'; } ?>> No</label></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Portfolio Category</strong></label>
                        <div class="col-sm-4">
                            <select name="portfolio_category" id="portfolio_category" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($category as $cat)
                                    <option value="{{$cat['id']}}" <?php if($cat['id'] == $portfolio['portfolio_category']) { echo 'selected'; } ?>>{{$cat['category_title']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label class="col-sm-2"><strong>Portfolio URL</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="portfolio_url" name="portfolio_url" value="{{$portfolio['portfolio_url']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Portfolio Technology</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="portfolio_technology" name="portfolio_technology" value="{{$portfolio['portfolio_technology']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Portfolio Content</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" id="elm1" name="portfolio_content">{{$portfolio['portfolio_content']}}</textarea>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2"><strong>Photo</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle" name="portfolio_image" placeholder="Select Photo">
                        </div>
                        <?php if($portfolio['portfolio_image'] != ''){ ?>
                            <img src='{{ URL::asset('public/custom_image/portfolio_images/'.$portfolio['portfolio_image']) }}' class="img-rounded" width="250" height="130" >       
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-default">Submit</button>
                            <a class="btn btn-default" href="{{route('portfolios.index')}}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function () {

    $('#portfolio-form').validate({ // initialize the plugin
        rules: {
            portfolio_title: {
                required: true,
            },
            portfolio_content: {
                required: true,
            },
            portfolio_technology: {
                required: true,
            },
            portfolio_category: {
                required: true,
            },
        },
    });

});
</script>  
@stop