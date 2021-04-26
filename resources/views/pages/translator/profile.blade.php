@extends('layouts.translator.master')

@section('title', 'Profile')
@section('content')
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1">
          </div>
          <!-- /.col -->
          <div class="col-md-12">
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
                          @error('no_foto_ktp')
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
                    <button class="btn btn-success add-more" type="button">
                        <i class="nav-icon fas fa-folder-plus"></i> Add More Certificates
                    </button>
                    <table class="table table-borderless">
                      <thead>
                        <tr>
                          <th scope="col">Nama Sertifikat</th>
                          <th scope="col">Nomor Sertifikat</th>
                          <th scope="col">Bukti Dokumen</th>
                          <th scope="col">Diterbitkan Oleh</th>
                          <th scope="col">Masa Berlaku</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($sertifikat as $sertif)
                          <tr>
                            <td>{{$sertif->nama_sertifikat}}</td>
                            <td>{{$sertif->no_sertifikat}}</td>
                            <td>{{$sertif->bukti_dokumen}}</td>
                            <td>{{$sertif->diterbitkan_oleh}}</td>
                            <td>{{$sertif->masa_berlaku}}</td>
                            <td>
                              <button class="btn btn-danger" type="button">
                              <i class="nav-icon fas fa-trash-alt"></i>
                              </button>

                              <button class="btn btn-primary" type="button">
                              <i class="nav-icon fas fa-edit"></i>
                              </button>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
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