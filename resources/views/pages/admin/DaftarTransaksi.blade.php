@extends('layouts/admin/template')

@section('title', 'Daftar Transaksi')

@section('container')

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

      <form action="/daftar-transaksi" method="POST" id="editForm">

      {{ csrf_field() }}
      {{ method_field('PUT') }}

        <div class="modal-body">
        
          
                
        </div>
       

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Detail -->
<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="/daftar-transaksi" method="POST" id="detailForm">

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
                    <label>Tanggal Order</label>
                    <input type="text" name="tgl_order" id="tgl_order" class="form-control" readonly>
                </div>
              
              <!--/.col (right) -->
            </div>
            </div><!-- /.row -->
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
                <div class="card-tools">
              
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>   
                  <tr>
                    <th>No</th>
                    <th hidden>ID Transaksi</th>
                    <th>Tanggal Order</th>
                    <th>Tanggal Transaksi</th>
                    <th>Nominal Transaksi</th>
                    <th>Bukti Transaksi</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksi as $t)
                  <tr>
                    <th scope="row" class="text-center">{{$loop->iteration}}</th>
                    <td scope="row" class="text-center" hidden>{{$t->id_transaksi}}</td>
                    <td>{{$t->tgl_order}}</td>
                    <td>{{$t->tgl_transaksi}}</td>
                    <td>{{$t->nominal_transaksi}}</td>
                    <td>{{$t->bukti_transaksi}}</td>
                    <td>{{$t->status_transaksi}}</td>
                    <td>
                      <button type="button" class="btn btn-success edit" data-toggle="modal" data-target="#updateModal">Edit Status</i></button>
                      <button type="button" class="btn btn-primary detail" data-toggle="modal" data-target="#updateModal">Detail</i></button>
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

      $('#tgl_order').val(data[2]);
      $('#tgl_transaksi').val(data[3]);
      $('#nominal_transaksi').val(data[4]); 
      $('#bukti_transaksi').val(data[5]); 
      $('#status_transaksi').val(data[6]); 

      $('#editForm').attr('action', '/daftar-transaksi/'+data[1]);
      $('#editModal').modal('show');
      
    });

    table.on('click', '.detail', function(){

      $tr = $(this).closest('tr');
      if($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      }

      var data = table.row($tr).data();
      console.log(data);

      $('#tgl_order').val(data[2]);
      $('#tgl_transaksi').val(data[3]);
      $('#nominal_transaksi').val(data[4]); 
      $('#bukti_transaksi').val(data[5]); 
      $('#status_transaksi').val(data[6]);

      $('#detailForm').attr('action', '/daftar-transaksi/'+data[1]);
      $('#detailModal').modal('show');

    });

});
</script>
@endpush



