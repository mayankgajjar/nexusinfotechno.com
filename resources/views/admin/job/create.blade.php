@extends('layouts.admin')
  @section('content')
  

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Add Job Opening</h3>
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
                <form action="{{route('jobopening.store')}}" method="post" id="client-form" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Title</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Job Description</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" id="elm1" name="job_description"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Qualification</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="qualification" name="qualification">
                        </div>
                        <label  class="col-sm-2"><strong>Number Vacancy</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="number_vacancy" name="number_vacancy">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Salary</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="salary" name="salary">
                        </div>
                        <label  class="col-sm-2"><strong>Salary Negotiable</strong></label>
                        <div class="col-sm-4">
                            <select name="salary_negotiable" id="salary_negotiable" class="form-control">
                                <option value="Y">Yes</option>
                                <option value="N">No</option>
                            </select>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Experience</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="experience" name="experience">
                        </div>
                        <label  class="col-sm-2"><strong>Location</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="location" name="location">
                        </div>
                        
                    </div>
                
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Job Type</strong></label>
                        <div class="col-sm-4">
                            <select name="type" id="type" class="form-control">
                                <option >Select Type</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                            </select>
                        </div>
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
                            <a class="btn btn-default" href="{{route('jobopening.index')}}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function () {

    $('#client-form').validate({ // initialize the plugin
        rules: {
            title: {
                required: true,
            },
            job_description: {
                required: true,
            },
            qualification: {
                required: true,
            },
            number_vacancy: {
                required: true,
            },
            salary: {
                required: true,
            },
            experience: {
                required: true,
            },
            location: {
                required: true,
            },
            type: {
                required: true,
            },
        }
    });

});
</script>  
@stop