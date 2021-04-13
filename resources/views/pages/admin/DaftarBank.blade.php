@extends('layouts/admin/template')

@section('title', 'Users & Permission List')

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

      <form action="{{route('bank.store')}}" method="POST">

      {{ csrf_field() }}
        <div class="modal-body">
            <div class="form-group">
                <label>Nama Bank</label>
                <input type="text" name="nama_bank" class="form-control" placeholder="Masukkan Nama Bank">
            </div>
            <div class="form-group">
                <label>Nama Rekening</label>
                <input type="text" name="nama_rekening" class="form-control" placeholder="Masukkan Nama Rekening">
            </div>
            <div class="form-group">
                <label>Nomor Rekening</label>
                <input type="text" name="no_rekening" class="form-control" placeholder="Masukkan Nomor Rekening">
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

      <form action="/bank" method="POST" id="editForm">

      {{ csrf_field() }}
      {{ method_field('PUT') }}

        <div class="modal-body">
            <div class="form-group">
                <label>Nama Bank</label>
                <input type="text" name="nama_bank" id="nama_bank" class="form-control" placeholder="Masukkan Nama Bank">
            </div>
            <div class="form-group">
                <label>Nama Rekening</label>
                <input type="text" name="nama_rekening" id="nama_rekening" class="form-control" placeholder="Masukkan Nama Rekening">
            </div>
            <div class="form-group">
                <label>Nomor Rekening</label>
                <input type="text" name="no_rekening" id="no_rekening" class="form-control" placeholder="Masukkan Nomor Rekening">
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
                  <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data Bank
                  </button>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>   
                  <tr>
                    <th>ID Bank</th>
                    <th>Nama Bank</th>
                    <th>Nama Rekening</th>
                    <th>No Rekening</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($bank as $bank)
                  <tr>
                    <td scope="row" class="text-center">{{$bank->id_bank}}</td>
                    <td>{{$bank->nama_bank}}</td>
                    <td>{{$bank->nama_rekening}}</td>
                    <td>{{$bank->no_rekening}}</td>
                    <td>
                      <button type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#updateModal">Edit</i></button>
                      <a href="#" class="btn btn-danger delete" bank-id="{{$bank->id_bank}}">Delete</a>
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

        var bank_id = $(this).attr('bank-id')

        Swal.fire({
          title: "Apakah anda yakin?",
          text: "Hapus data bank "+bank_id+"??",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "/bank/"+bank_id+"/delete";  
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

    $('#nama_bank').val(data[1]);
    $('#nama_rekening').val(data[2]);
    $('#no_rekening').val(data[3]); 

    $('#editForm').attr('action', '/bank/'+data[0]);
    $('#editModal').modal('show');
    
  });
});
</script>
@endpush



