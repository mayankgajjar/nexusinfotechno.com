@extends('layouts.admin')
  @section('content')

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit About</h3>
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
                <form action="{{route('about.update',$about['id'])}}" method="post" id="about-form" class="form-horizontal" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Introduction Content</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control editer" id="elm1" rows="5" name="introduction_content">{{$about['introduction_content']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Introduction Image</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle form-control" name="introduction_image" placeholder="Select Photo">
                        </div>
                        <?php if($about['introduction_image'] != ''){ ?>
                            <img src='{{ URL::asset('public/custom_image/about_images/'.$about['introduction_image']) }}' class="img-rounded" width="250" height="130" >       
                        <?php } ?>
                    </div>
                
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Approach Work Content</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="elm1" rows="5" name="approach_work_content">{{$about['approach_work_content']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Approach Work Image</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle form-control" name="approach_work_image" placeholder="Select Photo">
                        </div>
                        <?php if($about['approach_work_image'] != ''){ ?>
                            <img src='{{ URL::asset('public/custom_image/about_images/'.$about['approach_work_image']) }}' class="img-rounded" width="250" height="130" >       
                        <?php } ?>
                    </div>
                
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Giving Back Content</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="elm1" rows="5" name="giving_back_content">{{$about['giving_back_content']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Giving Back Image</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle form-control" name="giving_back_image" placeholder="Select Photo">
                        </div>
                        <?php if($about['giving_back_image'] != ''){ ?>
                            <img src='{{ URL::asset('public/custom_image/about_images/'.$about['giving_back_image']) }}' class="img-rounded" width="250" height="130" >       
                        <?php } ?>
                    </div>
                
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Profitability Content</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="elm1" rows="5" name="profitability_content">{{$about['profitability_content']}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Profitability Image</strong></label>
                        <div class="col-sm-4">
                            <input type="file" class="filestyle form-control" name="profitability_image" placeholder="Select Photo">
                        </div>
                        <?php if($about['profitability_image'] != ''){ ?>
                            <img src='{{ URL::asset('public/custom_image/about_images/'.$about['profitability_image']) }}' class="img-rounded" width="250" height="130" >       
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 "><strong>Show Front</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="Y" id="active"  <?php if($about['show_front'] == 'Y') { echo 'checked'; } ?> > Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="N" id="inactive" <?php if($about['show_front'] == 'N') { echo 'checked'; } ?>> No</label></div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-default">Submit</button>
                            <a class="btn btn-default" href="{{route('about.index')}}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function () {
    
    //CKEDITOR.replace( 'introduction_content' );
    //CKEDITOR.replace( 'approach_work_content' );
    //CKEDITOR.replace( 'giving_back_content' );
    //CKEDITOR.replace( 'profitability_content' );
    
    /*function updateAllMessageForms() {
        for (instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].updateElement();
        }
    }*/

    $('#about-form').validate({ // initialize the plugin
        rules: {
            introduction_content: {
                required: true,
            },
            approach_work_content: {
                required: true,
            },
            giving_back_content: {
                required: true,
            },
            profitability_content: {
                required: true,
            }
        }
    });

});
</script>  
@stop