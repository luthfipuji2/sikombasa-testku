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
          <th>Nama Admin</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($admin as $admin)
        <tr>
          <td>{{$admin->id_admin}}</td>
          <td>{{$admin->alamat}}</td>
          <td>
          <button type="button" class="btn btn-primary btn-sm edit" data-toggle="modal" data-target="#updateModal"><i class="fas fa-pencil-alt"></i></button>
        </td>
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
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="updateModalLabel">Update Data Admin</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="/daftar-admin/{{$admin->id_admin}}">
            @method('PATCH')
            @csrf
                

                <div class="mb-3">
                    <label for="nama_rekening">Nama Rekening</label>
                    <input type="text" class="form-control @error('nama_rekening') is-invalid @enderror" 
                    id="nama_rekening" placeholder="Masukkan Nama Rekening" name="nama_rekening" value="{{ $admin->alamat }}">
                    @error ('nama_rekening')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            
            
            </div>
            </form>
        </div>
        </div>
</div>


@endsection



