@extends('layouts.admin')
  @section('content')
    <div class="row">
        <div class="col-md-6"><h3 class="inner-tittle two">Service</h3></div>
        <div class="col-md-6" style="text-align:  right;"><a href="{{ route('services.create') }}" class="btn btn-info">Add New Service</a></div>
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
            <table class="table table-hover" id="service-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Service Title</th>
                        <th>Service Content</th>
                        <th>Show Front</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#service-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('services.getservices') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'service_title', name: 'service_title'},
            {data: 'service_content', name: 'service_content'},
            {data: 'show_front', name: 'show_front'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
   $('#service-table').DataTable().on('click', '.delete-Service', function (e) {
      return confirm('Are you sure to delete this');
   });
});
</script>
@stop