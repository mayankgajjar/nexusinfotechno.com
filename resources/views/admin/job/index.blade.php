@extends('layouts.admin')
  @section('content')
    <div class="row">
        <div class="col-md-6"><h3 class="inner-tittle two">Job Opening</h3></div>
        <div class="col-md-6" style="text-align:  right;"><a href="{{ route('jobopening.create') }}" class="btn btn-info">Add New Job Opening</a></div>
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
            <table class="table table-hover" id="vacancy-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Title</th>
                        <th>Number Vacancy</th>
                        <th>Salary</th>
                        <th>Show Front</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#vacancy-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('jobopening.getjobopening') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'title', name: 'title'},
            {data: 'number_vacancy', name: 'number_vacancy'},
            {data: 'salary', name: 'salary'},
            {data: 'show_front', name: 'show_front'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
});
</script>
@stop