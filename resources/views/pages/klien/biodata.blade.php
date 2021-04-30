@extends('layouts.klien.sidebar')

@section('title', 'biodata')
@section('content')
    <!-- Main content -->
    
        <div class="container-fluid">
            <div class="row">
            <div class="container ">
            {{-- status --}}
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <a href="#" style="display: block">
                    <div class="card-icon bg-info">
                    <i class="fas fa-users " aria-hidden="true"></i>
                    </div>
                </a>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4>Jumlah Kuota</h4>
                    </div>
                    <div class="card-body">
                    
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <a href="#" style="display: block">
                    <div class="card-icon bg-warning">
                    <i class="fas fa-user-plus" aria-hidden="true"></i>
                    </div>
                </a>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4>Jumlah Cadangan</h4>
                    </div>
                    <div class="card-body">
                    
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <a href="#" style="display: block">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-stamp    "></i>
                    </div>
                </a>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4>Finalisasi</h4>
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                <a href="#" style="display: block">
                    <div class="card-icon bg-success">
                    <i class="fas fa-check-circle"></i>
                    </div>
                </a>
                <div class="card-wrap">
                    <div class="card-header">
                    <h4>Terverifikasi</h4>
                    </div>
                    <div class="card-body">
                    
                    </div>
                </div>
                </div>
            </div>
        </div>
        {{-- end of status --}}
            
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
                    <div class="active tab-pane" id="profile">

                    <form method="POST" action="/profile/{{$user->id}}">
                        @method('patch')
                        @csrf
                        <form role="form">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                id="name" placeholder="Enter Name" name="name" value="{{ $user->name }}">
                                @error ('name')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text"class="form-control @error('email') is-invalid @enderror" 
                                id="email" placeholder="Enter Email" name="email" value="{{ $user->email }}">
                                @error ('email')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                id="password" placeholder="Password" name="password" >
                                @error ('password')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>  

                            <div class="form-group row">
                                <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="biodata">
                    <div class="card-body">
                    <div class="container my-2">
                    <form 
                        method="POST"
                        action="/biodata/{{$user->id}}"
                        enctype="multipart/form-data" 
                        id="form-penawaran"
                        name="penawaran" 
                        onsubmit="return validated()" 
                        autocomplete="off">
                        @csrf
                            <div class="alert alert-primary" role="alert">
                            Silahkan Melengkapi Biodata ...
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-outline-primary" add-more" id="value2" value="value2" name="pilihKuota" class="custom-control-input"
                                    {{old("pilihKuota") == "value2" ? 'checked':''}} >
                                    <i class="fas fa-pencil-alt"></i> Update Biodata
                                </button>
                            </div>

                            <br>
                            <div class="form-group fakultas" id="fakultas" style="display: none">
                            <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control @error('jenis_kelamin') is-invalid @enderror" 
                                id="jenis_kelamin" placeholder="Pilih Jenis Kelamin" name="jenis_kelamin">
                                    <option value="" hidden selected></option>
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
                                id="tgl_lahir" placeholder="Masukkan Tanggal Lahir" name="tgl_lahir" value="">
                                @error ('tgl_lahir')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Nomor HP</label>
                                <input type="text" class="form-control @error('no_telp') is-invalid @enderror" 
                                id="no_telp" placeholder="Masukkan Nomor Telepon" name="no_telp" value="">
                                @error ('no_telp')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Alamat</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" 
                                id="alamat" placeholder="Masukkan Alamat" name="alamat"></textarea>
                                @error ('alamat')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Kecamatan</label>
                                <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" 
                                id="kecamatan" placeholder="Masukkan Kecamatan" name="kecamatan" value="">
                                @error ('kecamatan')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Kabupaten</label>
                                <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" 
                                id="kabupaten" placeholder="Masukkan Kabupaten" name="kabupaten" value="">
                                @error ('kabupaten')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Provinsi</label>
                                <input type="text" class="form-control @error('provinsi') is-invalid @enderror" 
                                id="provinsi" placeholder="Masukkan Provinsi" name="provinsi" value="">
                                @error ('provinsi')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Kode Pos</label>
                                <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" 
                                id="kode_pos" placeholder="Masukkan Kode Pos" name="kode_pos" value="">
                                @error ('kode_pos')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Unggah Foto KTP</label>
                                <input type="file" class="form-control" name="foto_ktp">
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>

                            </div>

                    </form>
                    </div>
            </div>
        </div>
    </div>
                    </div>
                    </div>
                    </div>
                    <!-- /.tab-pane -->


        <!-- /.content -->
        @if(Session::has('message'))
        <div class="alert alert-{{ Session::get('status') }} status-box">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            {{ Session::get('message') }}
        </div>
    @endif 
@endsection

@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
                $("#value1").click(function(){
                    $("#fakultas").hide();
                    $("#nik").val(0);
                    $("#nik").val(0);
                    $("#lamat").val(0);
                    $("#provinsi").val(0);
                    $("#kabupaten").val(0);
                    $("#kecamatan").val(0);
                    $("#kode_pos").val(0);
                    $("#tgl_lahir").val(0);
                    $("#jenis_kelamin").val(0);
                    $("#no_telp").val(0);
                    $("#foto_ktp").val(0);
                });
            });

            $(document).ready(function(){
                $("#value2").click(function(){
                    $("#fakultas").show();
                    $("#nik").val(0);
                    $("#nik").val(0);
                    $("#lamat").val(0);
                    $("#provinsi").val(0);
                    $("#kabupaten").val(0);
                    $("#kecamatan").val(0);
                    $("#kode_pos").val(0);
                    $("#tgl_lahir").val(0);
                    $("#jenis_kelamin").val(0);
                    $("#no_telp").val(0);
                    $("#foto_ktp").val(0);
                });
            });
        
    </script>
@endpush

{{-- konfigurasi semester --}}
@push('scripts')
<script type="text/javascript">
        //semester
        var countSemester = 0;
        var myNameSemester = [];
        
        //menghapus semester
        function removeDataSemester(){
            var att = this.id;
            var ids = "#"+att;
            removeA(myNameSemester, att);
            document.getElementById("myCountSemester").value = myNameSemester;
            $(ids).remove();
        }
        
        //function remove element by value
        function removeA(arr) {
            var what, a = arguments, L = a.length, ax;
            while (L > 1 && arr.length) {
                what = a[--L];
                while ((ax= arr.indexOf(what)) !== -1) {
                    arr.splice(ax, 1);
                }
            }
            return arr;
        }

        
    </script>
@endpush

{{-- handle back button --}}
@push('scripts')
<script type="text/javascript">
        function preventBack(){window.history.forward();}
        setTimeout("preventBack()",0);
        window.onunload = function(){null};
    </script>
@endpush