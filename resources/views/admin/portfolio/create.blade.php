@extends('layouts.admin')
  @section('content')
  

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Add New Portfolio</h3>
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
                <form action="{{route('portfolios.store')}}" method="post" id="portfolios-form" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Portfolio Title</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="portfolio_title" name="portfolio_title">
                        </div>
                        <label class="col-sm-2 "><strong>Show Front</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="Y" id="active" checked> Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="N" id="inactive"> No</label></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Portfolio Category</strong></label>
                        <div class="col-sm-4">
                            <select name="portfolio_category" id="portfolio_category" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($category as $cat)
                                    <option value="{{$cat['id']}}">{{$cat['category_title']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label class="col-sm-2"><strong>Portfolio URL</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="portfolio_url" name="portfolio_url">
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Portfolio Technology</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="portfolio_technology" name="portfolio_technology">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Portfolio Content</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" id="elm1" name="portfolio_content"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-sm-2"><strong>Photo</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle" name="portfolio_image" required placeholder="Select Photo">
                        </div>
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

    $('#portfolios-form').validate({ // initialize the plugin
        rules: {
            portfolio_title: {
                required: true,
            },
            portfolio_content: {
                required: true,
            },
            portfolio_category: {
                required: true,
            },
            portfolio_technology: {
                required: true,
            },
            portfolio_image: {
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