@extends('layouts/admin/template')

@section('title', 'Users & Permission List')

@section('container')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-3">
  <div class="card">
    
<!-- /.card-header -->
      <div class="card-body">
      
        <table id="example" class="table table-bordered table-hover">
        <thead>   
        <tr>
        
          <th>ID</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Role</th>
          <th>Created At</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{$user->id}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->role}}</td>
          <td>{{$user->created_at}}</td>
        </tr>
        @endforeach
        </tfoot>
      </table>
      
    </div>
<!-- /.card-body -->
  </div>
  </div>
  </div>
  </div>
<!-- /.card -->
</section>
<!-- /.content -->

@endsection