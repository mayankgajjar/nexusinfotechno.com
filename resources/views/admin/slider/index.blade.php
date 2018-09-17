@extends('layouts.admin')
  @section('content')
    <div class="row">
        <div class="col-md-6"><h3 class="inner-tittle two">Front Slider</h3></div>
        <div class="col-md-6" style="text-align:  right;"><a href="{{ route('Slider.create') }}" class="btn btn-info">Add New Slider</a></div>
    </div>
@if(Session::has('message'))
<div class="content pt0">
    <div class="alert alert-success">
        <a class="close" data-dismiss="alert">×</a>
        <strong>{{ Session::get('message') }}</strong>
    </div>
</div>
@endif
<div class="graph">
    <div class="table-responsive">
            <table class="table table-hover" id="slider-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Slider Title</th>
                        <th>Slider Content</th>
                        <th>Show Front</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#slider-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('Slider.getSlider') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'slider_title', name: 'slider_title'},
            {data: 'slider_content', name: 'slider_content'},
            {data: 'show_front', name: 'show_front'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
   $('#slider-table').DataTable().on('click', '.delete-slider', function (e) {
      return confirm('Are you sure to delete this');
   });
});
</script>
@stop