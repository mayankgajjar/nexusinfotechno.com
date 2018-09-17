@extends('layouts.admin')
  @section('content')

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Edit Job Opening</h3>
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
                <form action="{{route('jobopening.update',$jobopening['id'])}}" method="post" id="about-form" class="form-horizontal" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PATCH">
                {{csrf_field()}}
                
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Title</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="title" name="title" value="{{$jobopening['title']}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Job Description</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" id="elm1" name="job_description">{{$jobopening['job_description']}}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Qualification</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="qualification" name="qualification" value="{{$jobopening['qualification']}}">
                        </div>
                        <label  class="col-sm-2"><strong>Number Vacancy</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="number_vacancy" name="number_vacancy" value="{{$jobopening['number_vacancy']}}">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Salary</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="salary" name="salary" value="{{$jobopening['salary']}}">
                        </div>
                        <label  class="col-sm-2"><strong>Salary Negotiable</strong></label>
                        <div class="col-sm-4">
                            <select name="salary_negotiable" id="salary_negotiable" class="form-control">
                                <option value="Y" <?php if($jobopening['salary_negotiable'] == 'Y') { echo 'selected'; } ?>>Yes</option>
                                <option value="N" <?php if($jobopening['salary_negotiable'] == 'N') { echo 'selected'; } ?>>No</option>
                            </select>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Experience</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="experience" name="experience" value="{{$jobopening['experience']}}">
                        </div>
                        <label  class="col-sm-2"><strong>Location</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="location" name="location" value="{{$jobopening['location']}}">
                        </div>
                        
                    </div>
                
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Job Type</strong></label>
                        <div class="col-sm-4">
                            <select name="type" id="type" class="form-control">
                                <option >Select Type</option>
                                <option value="Full Time"  <?php if($jobopening['type'] == 'Full Time') { echo 'selected'; } ?>>Full Time</option>
                                <option value="Part Time" <?php if($jobopening['type'] == 'Part Time') { echo 'selected'; } ?>>Part Time</option>
                            </select>
                        </div>
                        <label class="col-sm-2 "><strong>Show Front</strong></label>
                        <div class="col-sm-4">
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="Y" id="active"  <?php if($jobopening['show_front'] == 'Y') { echo 'checked'; } ?> > Yes</label></div>
                            <div class="radio-inline"><label><input type="radio" name="show_front" value="N" id="inactive" <?php if($jobopening['show_front'] == 'N') { echo 'checked'; } ?>> No</label></div>
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