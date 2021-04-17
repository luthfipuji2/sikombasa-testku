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

                  <div class="active tab-pane" id="certificate">
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

