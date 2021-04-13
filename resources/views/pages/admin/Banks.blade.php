@extends('layouts/admin/template')

@section('title', 'Users & Permission List')

@section('container')
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="tambahModalLabel">Tambah Data Bank</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="{{route('bank.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="kriteria">Nama Bank</label>
                    <input type="text" class="form-control @error('nama_bank') is-invalid @enderror" 
                    id="nama_bank" placeholder="Masukkan Nama" name="nama_bank" 
                    value="{{ old('nama_bank') }}">
                    @error('nama_bank') 
                      <div class="invalid-feedback"> {{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama_rekening">Nama Rekening</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Rekening" 
                    name="nama_rekening" value="{{ old('nama_rekening') }}" id="nama_rekening">
                </div>

                <div class="form-group">
                    <label for="no_rekening">Nama Rekening</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nomor Rekening" 
                    name="no_rekening" value="{{ old('no_rekening') }}" id="no_rekening">
                </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
        </div>
    </div>


<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-3">
  
  <div class="card">
    <div class="card-header">
      <div class="card-tools">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Kriteria</button>
      </div>
    </div>
  
<!-- /.card-header -->
      <div class="card-body">
      
        <table id="example" class="table table-bordered table-hover">
        <thead>   
        <tr>
          <th>ID</th>
          <th>Nama Bank</th>
          <th>Nama Rekening</th>
          <th>No Rekening</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bank as $bank)
        <tr>
          <td>{{$bank->id_bank}}</td>
          <td>{{$bank->nama_bank}}</td>
          <td>{{$bank->nama_rekening}}</td>
          <td>{{$bank->no_rekening}}</td>
          <td>
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updateModal"><i class="fas fa-pencil-alt"></i></button>
          <form action="/bank/{{$bank->id_bank}}" method="post" class="d-inline">
              @method('delete')
              @csrf
          <button type="submit" class="btn btn-danger">Delete</button>
          </form>
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
            <h5 class="modal-title" id="updateModalLabel">Update Data Bank</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="/bank/{{$bank->id_bank}}">
            @method('PATCH')
            @csrf
                <div class="mb-3">
                    <label for="nama_bank">Nama</label>
                    <input type="text" class="form-control @error('nama_bank') is-invalid @enderror" 
                    id="nama_bank" placeholder="Masukkan Nama Bank" name="nama_bank" value="{{ $bank->nama_bank }}">
                    @error ('nama_bank')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nama_rekening">Nama Rekening</label>
                    <input type="text" class="form-control @error('nama_rekening') is-invalid @enderror" 
                    id="nama_rekening" placeholder="Masukkan Nama Rekening" name="nama_rekening" value="{{ $bank->nama_rekening }}">
                    @error ('nama_rekening')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="no_rekening">No Rekening</label>
                    <input type="text" class="form-control @error('no_rekening') is-invalid @enderror" 
                    id="no_re" placeholder="Masukkan Nomor Rekening" name="no_rekening" value="{{ $bank->no_rekening }}">
                    @error ('email')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            
            </div>
            </form>
        </div>
        </div>
</div>


@endsection