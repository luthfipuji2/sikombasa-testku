@extends('layouts/admin/template')

@section('title', 'Daftar Translator')

@section('container')

<!-- Modal Detail -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="/bank" method="POST" id="detailForm">

      {{ csrf_field() }}
      {{ method_field('PUT') }}

        <div class="modal-body">

        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
          <div class="form-group">
                <label>Nama Translator</label>
                <input type="text" name="name" id="name" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" id="email" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label>Role</label>
                <input type="text" name="role" id="role" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label>Keahlian</label>
                <textarea name="keahlian" id="keahlian" class="form-control" readonly></textarea>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label>Handphone</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label>Nama Bank</label>
                <input type="text" name="nama_bank" id="nama_bank" class="form-control" readonly>
            </div>
            
          </div>
          
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            <div class="form-group">
                <label>Nama Rekening</label>
                <input type="text" name="nama_rekening" id="nama_rekening" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label>Nomor Rekening</label>
                <input type="text" name="rekening_bank" id="rekening_bank" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label>NIK</label>
                <input type="text" name="nik" id="nik" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label>KTP</label>
                <br>
                @foreach($trans as $t)
                <button type="button" class="btn btn-success" 
                href="{{ route('translator.download', $t->id_translator) }}"> 
                <i class="fas fa-download"></i></button>
                @endforeach
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" readonly></textarea>
            </div>
            <div class="form-group">
                <label>Kecamatan</label>
                <input type="text" name="kecamatan" id="kecamatan" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label>Kabupaten</label>
                <input type="text" name="kabupaten" id="kabupaten" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label>Provinsi</label>
                <input type="text" name="provinsi" id="provinsi" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label>Kode Pos</label>
                <input type="text" name="kode_pos" id="kode_pos" class="form-control" readonly>
            </div>
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->            
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>   
                  <tr>
                    <th>No</th>
                    <th hidden>ID Translator</th>
                    <th>Nama Translator</th>
                    <th hidden>Email</th>
                    <th hidden>Role</th>
                    <th hidden>Keahlian</th>
                    <th hidden>Jenis Kelamin</th>
                    <th hidden>Tanggal Lahir</th>
                    <th hidden>Nomor Telepon</th>
                    <th hidden>Nama Bank</th>
                    <th hidden>Nama Rekening</th>
                    <th hidden>Nomor Rekening</th>
                    <th hidden>NIK</th>
                    <th hidden>Foto KTP</th>
                    <th hidden>Alamat</th>
                    <th hidden>Kecamatan</th>
                    <th hidden>Kabupaten</th>
                    <th hidden>Provinsi</th>
                    <th hidden>Kode Pos</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($trans as $trans)
                  <tr>
                    <th scope="row" class="text-center">{{$loop->iteration}}</th>
                    <td scope="row" class="text-center" hidden>{{$trans->id_translator}}</td>
                    <td>{{$trans->name}}</td>
                    <td hidden>{{$trans->email}}</td>
                    <td hidden>{{$trans->role}}</td>
                    <td hidden>{{$trans->keahlian}}</td>
                    <td hidden>{{$trans->jenis_kelamin}}</td>
                    <td hidden>{{$trans->tgl_lahir}}</td>
                    <td hidden>{{$trans->no_telp}}</td>
                    <td hidden>{{$trans->nama_bank}}</td>
                    <td hidden>{{$trans->nama_rekening}}</td>
                    <td hidden>{{$trans->rekening_bank}}</td>
                    <td hidden>{{$trans->nik}}</td>
                    <td hidden>{{$trans->foto_ktp}}</td>
                    <td hidden>{{$trans->alamat}}</td>
                    <td hidden>{{$trans->kecamatan}}</td>
                    <td hidden>{{$trans->kabupaten}}</td>
                    <td hidden>{{$trans->provinsi}}</td>
                    <td hidden>{{$trans->kode_pos}}</td> 
                    <td>
                    <button type="button" class="btn btn-sm btn-primary detail" data-toggle="modal" data-target="#detailModal"><i class="fas fa-info"></i></button>
                    </td>
                  </tr>
                  @endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection

@push('addon-script')

<script>
$(document).ready(function () {

  var table = $('#datatable').DataTable({
     dom: 'Bfrtip',
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "buttons": [
            {
                extend:    'copyHtml5',
                text:      '<i class="far fa-copy"></i>',
                titleAttr: 'Copy'
            },
            {
                extend:    'excelHtml5',
                text:      '<i class="far fa-file-excel"></i>',
                titleAttr: 'Excel'
            },
            {
                extend:    'csvHtml5',
                text:      '<i class="fas fa-file-csv"></i>',
                titleAttr: 'CSV'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="far fa-file-pdf"></i>',
                titleAttr: 'PDF',
                orientation: 'landscape',
                pageSize: 'LEGAL',
            }
    ]
  })
     
    table.on('click', '.detail', function(){

    $tr = $(this).closest('tr');
    if($($tr).hasClass('child')) {
      $tr = $tr.prev('.parent');
    }

    var data = table.row($tr).data();
    console.log(data);

    $('#name').val(data[2]);
    $('#email').val(data[3]);
    $('#role').val(data[4]); 
    $('#keahlian').val(data[5]);
    $('#jenis_kelamin').val(data[6]); 
    $('#tgl_lahir').val(data[7]); 
    $('#no_telp').val(data[8]); 
    $('#nama_bank').val(data[9]); 
    $('#nama_rekening').val(data[10]); 
    $('#rekening_bank').val(data[11]); 
    $('#nik').val(data[12]);
    $('#foto_ktp').val(data[13]);
    $('#alamat').val(data[14]); 
    $('#kecamatan').val(data[15]); 
    $('#kabupaten').val(data[16]); 
    $('#provinsi').val(data[17]); 
    $('#kode_pos').val(data[18]); 

    $('#detailForm').attr('action', '/daftar-translator/'+data[1]);
    $('#detailModal').modal('show');
    
  });
});
</script>
@endpush



