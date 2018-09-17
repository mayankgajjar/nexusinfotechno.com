@extends('layouts.website')

@section('content')

<!-- 
================================================== 
    Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Career</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li class="active">Career</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog-full-width" class="carer">
    <div class="container">
        <div class="row">
            @if(Session::has('message'))
                <div class="content pt0">
                    <div class="alert alert-success">
                        <a class="close" data-dismiss="alert">×</a>
                        <strong>{{ Session::get('message') }}</strong>
                    </div>
                </div>
            @endif
            <?php foreach ($jobopening as $value) { ?>
                <div class="col-md-6 map-area">
                    <div class="address wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                        <div class="blog-content">
                            <div class="blog-titel">
                                <h2 class="blogpost-title"><a href="">{{$value->title}}</a></h2>
                                <p><?php echo $value->experience; ?> Experience</p>
                            </div>
                            <p><b>Qualification : </b><?php echo $value->qualification; ?></p>
                            
                            <p><b>Number Of Vacancy : </b><?php echo $value->number_vacancy; ?></p>
                            <p><b>Salary : </b><?php echo $value->salary; ?> <?php
                                if ($value->salary_negotiable == 'Y') {
                                    echo 'Negotiable';
                                } else {
                                    echo 'Not Negotiable';
                                }
                                ?></p>
                            <p><b>Location : </b><?php echo $value->location; ?></p>
                            <p><?php echo $value->job_description; ?></p>
                            
                            <p><a href="" class="btn btn-dafault btn-details apply" data-custom-value="{{$value->title}}">APPLY NOW!</a></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="apply_now">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Apply Now</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="{{url('jobapply')}}" id="form_apply_now" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="position" id="apply_post" />
                    <div class="form-group">
                        <label class="control-label col-sm-4">Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Contact Number</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="contact_number" placeholder="Enter Contact Number" name="contact_number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Your Location</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="location" placeholder="Enter Your Location" name="location">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-4">Attached Resume</label>
                        <div class="col-sm-8">
                            <input type="file" name="resume" id="resume"> <p style="margin-top: 6px;font-style:  italic;">Allow only pdf, doc and docx file format.</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" id="btn_apply_now" class="btn btn-primary">Apply Now</button>
            </div>
        </div>
    </div>
</div>

@endsection


