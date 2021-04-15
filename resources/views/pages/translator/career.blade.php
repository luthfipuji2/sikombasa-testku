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
                  <li class="nav-item"><a class="nav-link" href="#document" data-toggle="tab">Required Documents</a></li>
                  <li class="nav-item"><a class="nav-link" href="#certificate" data-toggle="tab">Skills Certificate</a></li>
                  <li class="nav-item"><a class="nav-link" href="#activity" data-toggle="tab">Progress</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Shared publicly - 7:30 PM today</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <p>
                        <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                        <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                        <span class="float-right">
                          <a href="#" class="link-black text-sm">
                            <i class="far fa-comments mr-1"></i> Comments (5)
                          </a>
                        </span>
                      </p>

                      <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                        </span>
                        <span class="description">Sent you a message - 3 days ago</span>
                      </div>
                      <!-- /.user-block -->
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore the hate as they create awesome
                        tools to help create filler text for everyone from bacon lovers
                        to Charlie Sheen fans.
                      </p>

                      <form class="form-horizontal">
                        <div class="input-group input-group-sm mb-0">
                          <input class="form-control form-control-sm" placeholder="Response">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-danger">Send</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.post -->
                  </div>

                  <div class="active tab-pane" id="profile">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Nomor Induk Kependudukan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Keahlian</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Keahlian">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Provinsi</label>
                        <div class="col-sm-10">
                        <select name="province" id="province" class="form-control">
                            <option value="">Provinsi</option>
                            @foreach ($provinces as $id => $name)
                                <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Kota / Kabupaten</label>
                        <div class="col-sm-10">
                        <select name="city" id="city" class="form-control">
                            <option value="">Kota / Kabupaten</option>
                        </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2" placeholder="Kecamatan">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Kode Pos">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Detail Alamat</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Detail Lainnya (Cth:Blok / Unit No. dan Patokan)">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Nama Bank</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Nama Bank">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">No. Rekening</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Nomor Rekening">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">A/N Rekening</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="A/N Rekening">
                        </div>
                      </div> 
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Tanggal Lahir">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Jenis Kelamin">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">No. Telepon / HP</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Nomor Telepon / Handphone">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="photo" class="col-sm-2 col-form-label">Foto KTP</label>
                        <div class="col-sm-10">
                          <input type="file" name="photo" class="form-input">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="tab-pane" id="document">
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

                  <div class="tab-pane" id="certificate">
                    <div class="control-group after-add-more">
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
                        </form>
                    </div>

                    <div class="copy-invisible">
                        <div class="control-group">
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
                                <div class="col-sm-10">
                                    <button class="btn btn-success add-more" type="button">
                                        <i class="nav-icon fas fa-plus"></i> Add
                                    </button> 
                                    <button class="btn btn-danger remove" type="button">
                                        <i class="nav-icon fas fa-times"></i> Remove
                                    </button> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
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

@push('scripts')
<script>
$(function () {
    $('#province').on('change', function () {
        axios.post('{{ route('career.storeCities') }}', {id: $(this).val()})
            .then(function (response) {
                $('#city').empty();
                $.each(response.data, function (id, name) {
                    $('#city').append(new Option(name, id))
                })
            });
    });
});
$(document).ready(function() {
  $(".add-more").click(function(){ 
      var html = $(".copy").html();
      $(".after-add-more").after(html);
  });

  // saat tombol remove dklik control group akan dihapus 
  $("body").on("click",".remove",function(){ 
      $(this).parents(".control-group").remove();
  });
});
</script>
@endpush
