@extends('layouts.admin')
  @section('content')
    <div class="row">
        <div class="col-md-6"><h3 class="inner-tittle two">About us</h3></div>
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
            <table class="table table-hover" id="about-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Introduction</th>
                        <th>Show Front</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#about-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('about.getabout') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'introduction_content', name: 'introduction_content'},
            {data: 'show_front', name: 'show_front'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@stop