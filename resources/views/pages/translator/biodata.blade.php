@extends('layouts.translator.master')

@section('title', 'Career')
@section('content')
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link disabled" href="#document" data-toggle="tab">Required Documents</a></li>
                  <li class="nav-item"><a class="nav-link disabled" href="#certificate" data-toggle="tab">Skills Certificate</a></li>
                  <li class="nav-item"><a class="nav-link disabled" href="#progress" data-toggle="tab">Progress</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="disabled tab-pane" id="progress">
                    <!-- Tab Activity di sini -->
                  </div>

                  <div class="active tab-pane" id="profile">
                    <form class="form-horizontal" method="POST" action="/career">
                    @csrf
                      <input type="hidden" name="id" value={{ Auth::user()->id }}>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="nik" placeholder="Nomor Induk Kependudukan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Keahlian</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="keahlian" placeholder="Keahlian">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Provinsi</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2" name="provinsi" placeholder="Kecamatan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Kota / Kabupaten</label>
                        <div class="col-sm-10">
                        <!-- <select name="city" id="city" class="form-control" name="kabupaten">
                            <option value="">Kota / Kabupaten</option>
                        </select> -->
                        <input type="text" class="form-control" id="inputName2" name="kabupaten" placeholder="Kecamatan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2" name="kecamatan" placeholder="Kecamatan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="kode_pos" placeholder="Kode Pos">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Detail Alamat</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="alamat" placeholder="Detail Lainnya (Cth:Blok / Unit No. dan Patokan)">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Nama Bank</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="nama_bank" placeholder="Nama Bank">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">No. Rekening</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="rekening_bank" placeholder="Nomor Rekening">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">A/N Rekening</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="nama_rekening" placeholder="A/N Rekening">
                        </div>
                      </div> 
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="tgl_lahir" placeholder="Tanggal Lahir">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio1" name="jenis_kelamin" value="laki-laki" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio1">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" id="customRadio2" name="jenis_kelamin" value="perempuan" class="custom-control-input">
                          <label class="custom-control-label" for="customRadio2">Perempuan</label>
                        </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">No. Telepon / HP</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" name="no_telp" placeholder="Nomor Telepon / Handphone">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="photo" class="col-sm-2 col-form-label">Foto KTP</label>
                        <div class="col-sm-10">
                          <input type="file" name="foto_ktp" class="form-input">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="disabled tab-pane" id="document">
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Curriculum Vitae</label>
                          <div class="col-sm-5">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" name="cv" for="exampleInputFile">Choose file</label>
                          </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Ijazah Terakhir</label>
                          <div class="col-sm-5">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" name="ijazah" for="exampleInputFile">Choose file</label>
                          </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Portofolio</label>
                          <div class="col-sm-5">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" name="portofolio" for="exampleInputFile">Choose file</label>
                          </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Surat Keterangan Sehat</label>
                          <div class="col-sm-5">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" name="sk" for="exampleInputFile">Choose file</label>
                          </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Surat Keterangan Berkelakuan Baik</label>
                          <div class="col-sm-5">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" name="skck" for="exampleInputFile">Choose file</label>
                          </div>
                    </div>
                    <div class="form-group row">
                        <div class=" col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>

                  </div>

                  <div class="disabled tab-pane" id="certificate">
                    <thead>
                        <form class="form-horizontal" id="dynamic_form">
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">Nama Sertifikat</label>
                                <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" id="inputName" placeholder="Nama Sertifikat">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Nomor Sertifikat</label>
                                <div class="col-sm-10">
                                <input type="text" name="nomor" class="form-control" id="inputEmail" placeholder="Nomor Sertifikat">
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
                                <input type="text" name="penerbit" class="form-control" id="inputEmail" placeholder="Diterbitkan Oleh">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">Masa Berlaku</label>
                                <div class="col-sm-10">
                                <input type="text" name="kadaluwarsa" class="form-control" id="inputEmail" placeholder="Masa Berlaku">
                                </div>
                            </div>
                        </form>
                    </thead>
                    <tbody>
                    <tbody>
                    <tfoot>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button class="btn btn-success add-more" type="button">
                                        <i class="nav-icon fas fa-plus"></i> Add
                                    </button> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                    </tfoot>
                  </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection

@push('scripts')
</script> -->
<script>
$(document).ready(function() {
  var count = 1;
  dinamyc_field(count);
  function dynamic_field(number){
    var html = '<tr>'
    html += '<td><input type="text" name="nama[]" class="form-control" /></td>';
    html += '<td><input type="text" name="nomor[]" class="form-control" /></td>';
    html += '<td><input type="file" name="photo[]" class="form-control" /></td>';
    html += '<td><input type="text" name="penerbit[]" class="form-control" /></td>';
    html += '<td><input type="text" name="kadaluwarsa[]" class="form-control" /></td>';

    if(number > 1){
      html += '<td><div class="col-sm-10"><button class="btn btn-danger" type="button" name="remove"><i class="nav-icon fas fa-times"></i>Remove</button></div></td></tr>';
      $('tbody').append(html);
    }else{
      html += '<td><div class="col-sm-10"><button class="btn btn-success" type="button" name="add"><i class="nav-icon fas fa-plus"></i>Add</button></div></td></tr>';
      $('tbody').html(html);
    }
  }

  $('#add').click(function(){ 
    count++;
    dynamic_field(count);
  });

  // saat tombol remove dklik control group akan dihapus 
  $(document).on("click", '#remove', function(){ 
      count--;
      dynamic_field(count);
  });
)};

$('#dynamic_form').on('submit', function(){
  event.preventDefault();
  $.ajax({
    url:'{{}}'
  })
});
</script>
@endpush

