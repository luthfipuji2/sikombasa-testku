@extends('layouts/klien/sidebar')

@section('title', 'Daftar Menu Pembayaran')

@section('container')

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="" method="POST">

      {{ csrf_field() }}
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
                <label>Jumlah Karakter</label>
                <input type="text" name="jumlah_karakter" class="form-control" placeholder="Masukkan Range Jumlah Karakter ex. 0-200">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" placeholder="Masukkan harga ex. 100000">
            </div>
        </div>
      

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="/daftar-harga-teks" method="POST" id="editForm">

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
                <label>Jumlah Karakter</label>
                <input type="text" name="jumlah_karakter" id="jumlah_karakter" class="form-control" placeholder="Masukkan Range Jumlah Karakter ex. 0-200">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukkan harga ex. 100000">
            </div> 
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
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
                    <th hidden></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <tr>
                    <th scope="row" class="text-center"></th>
                    <td scope="row" class="text-center" hidden></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#updateModal">Edit</i></button>
                      <a href="#" class="btn btn-danger delete" harga-id="">Delete</a>
                    </td>
                  </tr>
                  
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

        Swal.fire({
          title: "Apakah anda yakin?",
          text: "Hapus data harga "+harga_id+"??",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "/daftar-harga-teks/"+harga_id+"/delete";  
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
    $('#jumlah_karakter').val(data[3]);
    $('#harga').val(data[4]); 

    $('#editForm').attr('action', '/daftar-harga-teks/'+data[1]);
    $('#editModal').modal('show');
    
  });
});
</script>
@endpush



