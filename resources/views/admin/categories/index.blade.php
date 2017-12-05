@extends('master.layout')
@section('content')
     <div class="panel">
         <div class="panel-title">
             <div class="row">
                 <div class="col-sm-12">
                     <div class="col-sm-6"><h4>List of Categories</h4></div>
                     <div class="col-sm-6">
                         <a href="" type="button" class="btn btn-success pull-right">Add New Categories</a>
                     </div>
                 </div>
                 <div class="col-sm-12 category-display-form">

                 </div>
             </div>
         </div>
         <div class="panel-body">
             <table class="table table-inverse table-responsive">
                 <thead>
                    <tr>
                        <th>sn</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                        <td>1</td>
                        <td>Clothes</td>
                        <td>clothes</td>
                        <td>this just for desgin testing</td>
                        <td>
                            <button class="btn btn-info btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                 </tbody>
             </table>
         </div>
         <div class="panel-body">

         </div>
     </div>
@endsection
@section('custom_script')
    <script>
        alert('i am working here');
    </script>
    {{--@include('categories.validation');--}}
@endsection