@extends('layouts.admin')
  @section('content')
  

<div class="set-1">
    <div class="graph-2 general">
        <h3 class="inner-tittle two">Add New Page</h3>
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
                <form action="{{route('page.store')}}" method="post" id="page-form" class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Page Title</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <label  class="col-sm-2"><strong>Menu</strong></label>
                        <div class="col-sm-4">
                            <select name="menu" id="menu" class="form-control">
                                <option >Select Menu</option>
                                <option value="service">Service</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2"><strong>Meta Title</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="mate_title" name="mate_title">
                        </div>
                        <label class="col-sm-2"><strong>Meta Keywords</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="mate_keywords" name="mate_keywords">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Meta Description</strong></label>
                        <div class="col-sm-4">
                            <textarea class="form-control" rows="5" id="mate_description" name="mate_description"></textarea>
                        </div>
                        <label class="col-sm-2"><strong>Page Order</strong></label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="page_order" name="page_order">
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Sub Menu</strong></label>
                        <div class="col-sm-4">
                            <select name="sub_menu" id="sub_menu" class="form-control">
                                <option value="0">Select Sub Menu</option>
                                <?php foreach($service_menu as $smenu) { ?>
                                    <option value="<?php echo $smenu->id; ?>"><?php echo $smenu->title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  class="col-sm-2"><strong>Page Content</strong></label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" id="elm1" name="body"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-default">Submit</button>
                            <a class="btn btn-default" href="{{route('page.index')}}">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function () {

    $('#page-form').validate({ // initialize the plugin
        rules: {
            title: {
                required: true,
            },
            menu: {
                required: true,
            },
            mate_title: {
                required: true,
            },
            mate_keywords: {
                required: true,
            },
            mate_description: {
                required: true,
            },
            body: {
                required: true,
            },
        }
    });

});
</script>  
@stop