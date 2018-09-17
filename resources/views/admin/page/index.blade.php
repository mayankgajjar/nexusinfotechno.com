@extends('layouts.admin')
  @section('content')
    <div class="row">
        <div class="col-md-6"><h3 class="inner-tittle two">Page</h3></div>
        <div class="col-md-6" style="text-align:  right;"><a href="{{ route('page.create') }}" class="btn btn-info">Add New Page</a></div>
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
            <table class="table table-hover" id="page-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Title</th>
                        <th>Menu</th>
                        <th>Slug</th>
                        <th>Mate Title</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#page-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('page.getpage') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'title', name: 'title'},
            {data: 'menu', name: 'menu'},
            {data: 'slug', name: 'slug'},
            {data: 'mate_title', name: 'mate_title'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
   $('#page-table').DataTable().on('click', '.delete-page', function (e) {
      return confirm('Are you sure to delete this');
   });
});
</script>
@stop