@extends('layouts/admin/template')

@section('title', 'Edit Data User')

@section('container')
<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('profile-admin.store')}}" method="POST">

      {{ csrf_field() }}
        <div class="modal-body">
                    <div class="form-group" hidden>
                            <label for="name">ID</label>
                            <input type="text" id="id" placeholder="Masukkan Tanggal Lahir" name="id" value="{{ $users->id }}">
                        </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control @error('jenis_kelamin') is-invalid @enderror" 
                            id="jenis_kelamin" placeholder="Pilih Jenis Kelamin" name="jenis_kelamin">
                                <option value="{{ old('jenis_kelamin') }}" hidden selected>{{ old('jenis_kelamin') }}</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-laki">Laki-laki</option>
                            </select>
                            @error ('jenis_kelamin')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                    </div>

                        <div class="form-group">
                            <label for="name">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" 
                            id="tgl_lahir" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                            @error ('tgl_lahir')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Nomor HP</label>
                            <input type="text" class="form-control @error('no_telp') is-invalid @enderror" 
                            id="no_telp" placeholder="Masukkan Nomor Telepon" name="no_telp" value="{{ old('no_telp') }}">
                            @error ('no_telp')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" 
                            id="alamat" placeholder="Masukkan Alamat" name="alamat">{{ old('alamat') }}</textarea>
                            @error ('alamat')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Kecamatan</label>
                            <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" 
                            id="kecamatan" placeholder="Masukkan Kecamatan" name="kecamatan" value="{{ old('kecamatan') }}">
                            @error ('kecamatan')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Kabupaten</label>
                            <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" 
                            id="kabupaten" placeholder="Masukkan Kabupaten" name="kabupaten" value="{{ old('kabupaten') }}">
                            @error ('kabupaten')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Provinsi</label>
                            <input type="text" class="form-control @error('provinsi') is-invalid @enderror" 
                            id="provinsi" placeholder="Masukkan Provinsi" name="provinsi" value="{{ old('provinsi') }}">
                            @error ('provinsi')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Kode Pos</label>
                            <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" 
                            id="kode_pos" placeholder="Masukkan Kode Pos" name="kode_pos" value="{{ old('kode_pos') }}">
                            @error ('kode_pos')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        
            
        </div>
      
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <!-- /.col -->
          <div class="col-md-12 mt-3">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#biodata" data-toggle="tab">Biodata</a></li>
                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                <p>Profil Anda belum lengkap, silahkan lengkapi terlebih dahulu!</p>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-plus-circle" aria-hidden="true"></i> Lengkapi profile
                  </button>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection