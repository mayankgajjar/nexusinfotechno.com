@extends('layouts.admin')
  @section('content')
    <div class="row">
        <div class="col-md-6"><h3 class="inner-tittle two">Inquiry</h3></div>
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
            <table class="table table-hover" id="Inquiry-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Inquiry Name</th>
                        <th>Inquiry Email</th>
                        <th>Inquiry Contact</th>
                        <th>Inquiry Subject</th>
                        <th>Inquiry Massage</th>
                        <th>Inquiry Date</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#Inquiry-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('inquirys.getinquirys') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'inquiry_name', name: 'inquiry_name'},
            {data: 'inquiry_email', name: 'inquiry_email'},
            {data: 'inquiry_contact_number', name: 'inquiry_contact_number'},
            {data: 'inquiry_subject', name: 'inquiry_subject'},
            {data: 'inquiry_massage', name: 'inquiry_massage'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
   $('#Inquiry-table').DataTable().on('click', '.delete-Inquiry', function (e) {
      return confirm('Are you sure to delete this');
   });
});
</script>
@stop