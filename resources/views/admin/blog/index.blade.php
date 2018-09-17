@extends('layouts.admin')
  @section('content')
    <div class="row">
        <div class="col-md-6"><h3 class="inner-tittle two">Blog</h3></div>
        <div class="col-md-6" style="text-align:  right;"><a href="{{ route('blogs.create') }}" class="btn btn-info">Add New Blog</a></div>
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
            <table class="table table-hover" id="blog-table"> 
                <thead> 
                    <tr> 
                        <th>No.</th>
                        <th>Blog Title</th>
                        <th>Blog Category</th>
                        <th>Show Front</th>
                        <th>Action</th>
                    </tr> 
                </thead> 
            </table>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
        oTable = $('#blog-table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('blogs.getblog') }}",
        "columns": [
            {data: 'rownum', name: 'rownum'},
            {data: 'blog_title', name: 'blog_title'},
            {data: 'category_title', name: 'category_title'},
            {data: 'show_front', name: 'show_front'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });
   $('#blog-table').DataTable().on('click', '.delete-blog', function (e) {
      return confirm('Are you sure to delete this');
   });
});
</script>
@stop