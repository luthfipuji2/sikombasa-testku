@extends('layouts.translator.master')

@section('title', 'Career')
@section('content')
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link disabled" href="#profile" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link disabled" href="#document" data-toggle="tab">Required Documents</a></li>
                  <li class="nav-item"><a class="nav-link active" href="#certificate" data-toggle="tab">Skills Certificate</a></li>
                  <li class="nav-item"><a class="nav-link disabled" href="#progress" data-toggle="tab">Progress</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="disabled tab-pane" id="progress">
                    <!-- Tab Activity di sini -->
                  </div>

                  <div class="disabled tab-pane" id="profile">
                    <!-- Tab Profile di sini -->
                  </div>

                  <div class="disabled tab-pane" id="document">
                   <!-- Tab Document di sini -->
                  </div>
                  
                  <div class="disabled tab-pane" id="add-on">
                  <div class="copy invisible">
                        <form class="form-horizontal" method="POST" action="/certificate">
                        @csrf
                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Nama Sertifikat</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_sertifikat[]" id="inputName" placeholder="Nama Sertifikat">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Nomor Sertifikat</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_sertifikat[]" id="inputEmail" placeholder="Nomor Sertifikat">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputName2" class="col-sm-2 col-form-label">Bukti Dokumen</label>
                                <div class="col-sm-10">
                                  <input type="file" name="bukti_dokumen[]" class="form-input">
                                </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Diterbitkan Oleh</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" name="diterbitkan_oleh[]" id="inputEmail" placeholder="Diterbitkan Oleh">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputEmail" class="col-sm-2 col-form-label">Masa Berlaku</label>
                              <div class="col-sm-10">
                                <input type="date" class="form-control" name="masa_berlaku[]" id="inputEmail" placeholder="Masa Berlaku">
                              </div>
                            </div>
                            <div class="form-group row col-sm-2">
                              <button class="btn btn-danger remove" type="button">
                              <i class="nav-icon fas fa-times"></i> Remove
                              </button>
                            </div>
                        </form>
                  </div>
                  </div>

                  <div class="active tab-pane" id="certificate">
                    <div class="head">
                      <!-- <div class="alternatif">
                        <tr>
                            <td><label for="inputName" class="col-form-label">Nama Sertifikat</label></td>
                            <td><input type="text" name="nama_sertifikat[]" class="col-sm-10 form-control" placeholder="Nama Sertifikat"></td>
                        </tr>
                        <tr>
                            <td><label for="inputName" class="col-form-label">Nomor Sertifikat</label></td>
                            <td><input type="text" name="no_sertifikat[]" class="col-sm-10 form-control" placeholder="Nomor Sertifikat"></td>
                        </tr>
                        <tr>
                            <td><label for="inputName" class="col-form-label">Bukti Dokumen</label></td>
                            <td>
                              <div class="col-sm-10">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" name="bukti_dokumen[]" for="exampleInputFile">Choose file</label>
                              </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="inputName" class="col-form-label">Diterbitkan Oleh</label></td>
                            <td><input type="text" name="diterbitkan_oleh[]" class="col-sm-10 form-control" placeholder="Diterbitkan Oleh"></td>
                        </tr>
                        <tr>
                            <td><label for="inputName" class="col-form-label">Masa Berlaku</label></td>
                            <td><input type="text" name="masa_berlaku[]" class="col-sm-10 form-control" placeholder="Masa Berlaku"></td>
                        </tr>
                        <br>
                        <tr>
                                <button class="btn btn-success addMore" type="button">
                                  <i class="nav-icon fas fa-plus"></i> Add
                                </button> 
                        </tr>
                      </div> -->

                    <form class="form-horizontal" method="POST" action="/certificate">
                        @csrf
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nama Sertifikat</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="nama_sertifikat[]" id="inputName" placeholder="Nama Sertifikat">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Nomor Sertifikat</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="no_sertifikat[]" id="inputEmail" placeholder="Nomor Sertifikat">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Bukti Dokumen</label>
                              <div class="col-sm-10">
                                <input type="file" name="bukti_dokumen[]" class="form-input">
                              </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Diterbitkan Oleh</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="diterbitkan_oleh[]" id="inputEmail" placeholder="Diterbitkan Oleh">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Masa Berlaku</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control" name="masa_berlaku[]" id="inputEmail" placeholder="Masa Berlaku">
                            </div>
                          </div>
                          <div class="form-group row col-sm-2">
                            <button class="btn btn-success addMore" type="button">
                            <i class="nav-icon fas fa-plus"></i> Add More
                            </button>
                          </div>
                    
                    <div class="body">
                    
                    </div>
                    <div class="foot">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
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
<script type="text/javascript">
$('.addMore').on('click', function(){
  addMore();
});
function addMore(){
  var html = $('.copy').html();
  $('.body').append(html);
  // alert('test');
};
$('body').on('click', '.remove', function(){
$(this).parents('.form-horizontal').remove();
});
</script>
@endpush

