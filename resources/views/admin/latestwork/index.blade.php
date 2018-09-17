@extends('layouts.admin')
  @section('content')
    <div class="row">
        <div class="col-md-6"><h3 class="inner-tittle two">Latest Work</h3></div>
        <div class="col-md-6" style="text-align:  right;"><a href="{{ route('latest_work.create') }}" class="btn btn-info">Add New Work</a></div>
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
            <table class="table table-hover" id="work-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Work Title</th>
                        <th>Work Category</th>
                        <th>Show Front</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#work-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('latest_work.getlatestwork') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'latestwork_title', name: 'latestwork_title'},
            {data: 'category_title', name: 'category_title'},
            {data: 'show_front', name: 'show_front'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
   $('#work-table').DataTable().on('click', '.delete-latestwork', function (e) {
      return confirm('Are you sure to delete this');
   });
});
</script>
@stop