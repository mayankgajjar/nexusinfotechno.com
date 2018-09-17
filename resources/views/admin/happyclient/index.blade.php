@extends('layouts.admin')
  @section('content')
    <div class="row">
        <div class="col-md-6"><h3 class="inner-tittle two">Happy Client</h3></div>
        <div class="col-md-6" style="text-align:  right;"><a href="{{ route('happyclient.create') }}" class="btn btn-info">Add New Happy Client</a></div>
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
            <table class="table table-hover" id="client-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Name</th>
                        <th>Show Front</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#client-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('happyclient.gethappyclient') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'name', name: 'name'},
            {data: 'show_front', name: 'show_front'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
   $('#client-table').DataTable().on('click', '.delete-client', function (e) {
      return confirm('Are you sure to delete this');
   });
});
</script>
@stop