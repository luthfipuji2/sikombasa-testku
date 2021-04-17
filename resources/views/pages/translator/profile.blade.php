@extends('layouts.translator.master')

@section('title', 'Profile')
@section('content')
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                <p class="text-muted text-center">{{ Auth::user()->role }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#certificate" data-toggle="tab">Skills Certificate</a></li>
                  <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Activity</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane" id="activity">
 
                  </div>

                  <div class="active tab-pane" id="profile">
                    <form class="form-horizontal" action="/profile" method="post">
                    @method('patch')
                    @csrf
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" id="inputName" placeholder="Nomor Induk Kependudukan" value="{{$data->nik}}">
                          @error('nik')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Keahlian</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('keahlian') is-invalid @enderror" name="keahlian" id="inputEmail" placeholder="Keahlian" value="{{$data->keahlian}}">
                          @error('keahlian')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Provinsi</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" id="inputName2" placeholder="Provinsi" value="{{$data->provinsi}}">
                          @error('provinsi')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Kota / Kabupaten</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('kabupaten') is-invalid @enderror" name="kabupaten" id="inputName2" placeholder="Kota / Kabupaten (Cth: Kota Kediri / Kabupaten Kediri)" value="{{$data->kabupaten}}">
                          @error('kabupaten')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" id="inputName2" placeholder="Kecamatan" value="{{$data->kecamatan}}">
                          @error('kecamatan')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" id="inputName2" placeholder="Kode Pos" value="{{$data->kode_pos}}">
                          @error('kode_pos')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Detail Alamat</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="inputName2" placeholder="Detail Lainnya (Cth:Blok / Unit No. dan Patokan)" value="{{$data->alamat}}">
                          @error('alamat')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Nama Bank</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('nama_bank') is-invalid @enderror" name="nama_bank" id="inputName2" placeholder="Nama Bank" value="{{$data->nama_bank}}">
                          @error('nama_bank')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">No. Rekening</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('rekening_bank') is-invalid @enderror" name="rekening_bank" id="inputName2" placeholder="Nomor Rekening" value="{{$data->rekening_bank}}">
                          @error('rekening_bank')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">A/N Rekening</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('nama_rekening') is-invalid @enderror" name="nama_rekening" id="inputName2" placeholder="A/N Rekening" value="{{$data->nama_rekening}}">
                          @error('nama_rekening')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                      </div> 
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                          <input type="date"  name="tgl_lahir"  class="form-control @error('tgl_lahir') is-invalid @enderror" value="{{$data->tgl_lahir}}">
                          @error('tgl_lahir')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        @if($data->jenis_kelamin=='laki-laki')
                        <div class="col-sm-10">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="jenis_kelamin" value="laki-laki" class="custom-control-input" checked>
                            <label class="custom-control-label" for="customRadio1">Laki-laki</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="jenis_kelamin" value="perempuan" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Perempuan</label>
                          </div>
                        </div>
                        @elseif($data->jenis_kelamin=='perempuan')
                        <div class="col-sm-10">
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="jenis_kelamin" value="laki-laki" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Laki-laki</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="jenis_kelamin" value="perempuan" class="custom-control-input" checked>
                            <label class="custom-control-label" for="customRadio2">Perempuan</label>
                          </div>
                        </div>
                        @endif
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">No. Telepon / HP</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('no_telp') is-invalid @enderror" name="no_telp" id="inputName2" placeholder="Nomor Telepon / Handphone" value="{{$data->no_telp}}">
                          @error('no_telp')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="photo" class="col-sm-2 col-form-label">Foto KTP</label>
                        <div class="col-sm-10">
                          <input type="file" name="foto_ktp @error('foto_ktp') is-invalid @enderror" class="form-input" value="{{$data->foto_ktp}}">
                          @error('no_telp')
                          <div id="validationServer03Feedback" class="invalid-feedback">
                            {{$message}}
                          </div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="tab-pane" id="certificate">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Sertifikat</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Nama Sertifikat">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Nomor Sertifikat</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" placeholder="Nomor Sertifikat">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Bukti Dokumen</label>
                          <div class="col-sm-10">
                            <input type="file" name="photo" class="form-input">
                          </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Diterbitkan Oleh</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" placeholder="Diterbitkan Oleh">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Masa Berlaku</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" placeholder="Masa Berlaku">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
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
@endsection