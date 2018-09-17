@extends('layouts.admin')
  @section('content')
    <div class="row">
        <div class="col-md-6"><h3 class="inner-tittle two">Testimonial</h3></div>
        <div class="col-md-6" style="text-align:  right;"><a href="{{ route('testimonial.create') }}" class="btn btn-info">Add New Testimonial</a></div>
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
            <table class="table table-hover" id="testimonial-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Name</th>
                        <th>Comment</th>
                        <th>Approved</th>
                        <th>Show Front</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#testimonial-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('testimonial.gettestimonial') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'name', name: 'name'},
            {data: 'comment', name: 'comment'},
            {data: 'is_approved', name: 'is_approved'},
            {data: 'show_front', name: 'show_front'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
   $('#testimonial-table').DataTable().on('click', '.delete-testimonial', function (e) {
      return confirm('Are you sure to delete this');
   });
});
</script>
@stop