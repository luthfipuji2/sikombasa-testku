@extends('layouts/admin/template')

@section('title', 'Dashboard')

@section('container')
    <!-- Main content -->
    <section class="content">
        <div class="row mt-3">
    <div class="container-fluid">
        

    <div class="container col-10">
    <div class="section-header">
      <h1>Biodata Diri</h1>
    </div>
    
    <form method="post" action="/biodata/{{ $klien->id }}" autocomplete="off" >
        @csrf
        <input type="hidden" name="id">
        <div class="form-group">
            <label for="name">Nama</label>
            <!-- <input type="text" class="form-control" id="name" name="name"> -->
            <input type="text" class="form-control" id="name" name="name" readonly value="">
        </div>
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="{{ $klien->nik }}">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $klien->alamat }}">
        </div>
        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $klien->provinsi }}">
        </div>
        <div class="form-group">
            <label for="kabupaten">Kabupaten</label>
            <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="{{ $klien->kabupaten }}">
        </div>
        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $klien->kecamatan }}">
        </div>
        <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="{{ $klien->kode_pos }}">
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $klien->tgl_lahir }}">
        </div>
        <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <select class="custom-select form-control fstdropdown-select" name="jenis_kelamin"
            id="jenis_kelamin" required value="{{ $klien->jenis_kelamin }}">
        </select>
    </div>
        <div class="form-group">
            <label for="no_telp">Nomor Telephone</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $klien->no_telp }}">
        </div>
        <div class="form-group">
            <label>Unggah Foto KTP</label>
            <input type="file" class="form-control" name="foto_ktp">
        </div>
        <br>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
    </form>
</div>


            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- right col -->
        </div>
        <!-- /.row (main row) -->

    </section>
    <!-- /.content -->

@endsection