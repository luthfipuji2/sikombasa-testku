@extends('layouts/admin/template')

@section('title', 'Daftar Harga Menu Dubbing')

@section('container')

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Harga Dubbing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('daftar-harga-dubbing.store')}}" method="POST">

      {{ csrf_field() }}
        <div class="modal-body">
            <div class="form-group">
                  <label>Jenis Layanan</label>
                  <select type="text" name="jenis_layanan" class="form-control @error('jenis_layanan') is-invalid @enderror"
                  placeholder="" value="{{ old('jenis_layanan') }}">
                      <option value="{{old('jenis_layanan')}}" hidden selected>{{old('jenis_layanan')}}</option>
                      <option value="Basic">Basic</option>
                      <option value="Premium">Premium</option>
                  </select>
                  @error ('jenis_layanan')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{$message}}
                    </div>
                  @enderror
            </div>

            <div class="form-group">
                <label>Durasi File (menit) </label>
                <input type="text" name="durasi_file" class="form-control @error('durasi_file') is-invalid @enderror"
                 placeholder="Masukkan Range Durasi File ex. 0-20" value="{{ old('durasi_file') }}">
                @error ('durasi_file')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                      {{$message}}
                  </div>
                @enderror
            </div>

            <div class="form-group">
                <label>Jumlah Dubber</label>
                <input type="text" name="jumlah_dubber" class="form-control @error('jumlah_dubber') is-invalid @enderror"
                 placeholder="Masukkan Range Jumlah Dubber ex. 1-2" value="{{ old('jumlah_dubber') }}">
                @error ('jumlah_dubber')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                      {{$message}}
                  </div>
                @enderror
            </div>
            
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror"
                 placeholder="Masukkan harga ex. 100000" value="{{ old('harga') }}">
                @error ('harga')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                      {{$message}}
                  </div>
                @enderror
            </div>
        </div>
      

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Harga Dubbing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="/daftar-harga-dubbing" method="POST" id="editForm">

      {{ csrf_field() }}
      {{ method_field('PUT') }}

        <div class="modal-body">
          <div class="form-group">
                <label for="jenis_layanan">Jenis Layanan</label>
                    <select class="form-control @error('jenis_layanan') is-invalid @enderror" 
                    id="jenis_layanan" placeholder="Jenis Layanan" name="jenis_layanan">
                        <option value="Basic">Basic</option>
                        <option value="Premium">Premium</option>
                    </select>
                    @error ('jenis_layanan')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
            </div>

            <div class="form-group">
                <label>Durasi File (menit)</label>
                <input type="text" name="durasi_file" class="form-control @error('durasi_file') is-invalid @enderror"
                 placeholder="Masukkan Range Durasi File ex. 0-20" id="durasi_file">
                @error ('durasi_file')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                      {{$message}}
                  </div>
                @enderror
            </div>

            <div class="form-group">
                <label>Jumlah Dubber</label>
                <input type="text" name="jumlah_dubber" class="form-control @error('jumlah_dubber') is-invalid @enderror"
                 placeholder="Masukkan Range Jumlah Dubber ex. 1-2" id="jumlah_dubber">
                @error ('jumlah_dubber')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                      {{$message}}
                  </div>
                @enderror
            </div>
            
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control @error('harga') is-invalid @enderror"
                 placeholder="Masukkan harga ex. 100000" id="harga">
                @error ('harga')
                  <div id="validationServerUsernameFeedback" class="invalid-feedback">
                      {{$message}}
                  </div>
                @enderror
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
                <div class="card-tools">
              
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                  <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data Harga
                  </button>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>   
                  <tr>
                    <th>No</th>
                    <th hidden>ID Harga</th>
                    <th>Jenis Layanan</th>
                    <th>Durasi File (menit)</th>
                    <th>Jumlah Dubber</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($dubbing as $harga)
                  <tr>
                    <th scope="row" class="text-center">{{$loop->iteration}}</th>
                    <td scope="row" class="text-center" hidden>{{$harga->id_parameter_order}}</td>
                    <td>{{$harga->jenis_layanan}}</td>
                    <td>{{$harga->durasi_file}}</td>
                    <td>{{$harga->jumlah_dubber}}</td>
                    <td>{{$harga->harga}}</td>
                    <td>
                      <button type="button" class="btn btn-sm btn-primary edit" data-toggle="modal" data-target="#updateModal"><i class="fas fa-pencil-alt"></i></button>
                      <a href="#" class="btn btn-sm btn-danger delete" harga-num="{{$loop->iteration}}" harga-id="{{$harga->id_parameter_order}}"><i class="fas fa-trash-alt"></i></a>
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
    $('.delete').click(function(){

        var harga_id = $(this).attr('harga-id')
        var harga_num = $(this).attr('harga-num')

        Swal.fire({
          title: "Apakah anda yakin?",
          text: "Hapus data harga "+harga_num+"??",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "/daftar-harga-dubbing/"+harga_id+"/delete";  
            Swal.fire(
              'Berhasil!',
              'Data berhasil dihapus ',
              'success'
            )
          }
        })
    });
</script>

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
                titleAttr: 'PDF'
            }
    ]
  })
     
    table.on('click', '.edit', function(){

    $tr = $(this).closest('tr');
    if($($tr).hasClass('child')) {
      $tr = $tr.prev('.parent');
    }

    var data = table.row($tr).data();
    console.log(data);

    $('#jenis_layanan').val(data[2]);
    $('#durasi_file').val(data[3]);
    $('#jumlah_dubber').val(data[4]);
    $('#harga').val(data[5]); 

    $('#editForm').attr('action', '/daftar-harga-dubbing/'+data[1]);
    $('#editModal').modal('show');
    
  });
});
</script>
@endpush



