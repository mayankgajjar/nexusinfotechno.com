@extends('layouts.admin')
  @section('content')
    <div class="row">
        <div class="col-md-6"><h3 class="inner-tittle two">Portfolio</h3></div>
        <div class="col-md-6" style="text-align:  right;"><a href="{{ route('portfolios.create') }}" class="btn btn-info">Add New Portfolio</a></div>
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
            <table class="table table-hover" id="portfolio-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Portfolio Title</th>
                        <th>Portfolio Category</th>
                        <th>Portfolio URL</th>
                        <th>Show Front</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#portfolio-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('portfolios.getportfolios') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'portfolio_title', name: 'portfolio_title'},
            {data: 'category_title', name: 'category_title'},
            {data: 'portfolio_url', name: 'portfolio_url'},
            {data: 'show_front', name: 'show_front'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
   $('#portfolio-table').DataTable().on('click', '.delete-portfolio', function (e) {
      return confirm('Are you sure to delete this');
   });
});
</script>
@stop