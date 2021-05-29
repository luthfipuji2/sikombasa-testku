@extends('layouts/admin/template')

@section('title', 'Users & Permission List')

@section('container')

<!-- Modal Tambah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Harga Teks</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{route('daftar-harga-teks.store')}}" method="POST">

      {{ csrf_field() }}
        <div class="modal-body">
            <div class="form-group">
                <label for="jenis_layanan">Jenis Layanan</label>
                    <select class="form-control @error('jenis_layanan') is-invalid @enderror" 
                    id="jenis_layanan" placeholder="Jenis Layanan" name="jenis_layanan">
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
                <label>Jumlah Karakter</label>
                <input type="text" name="jumlah_karakter" class="form-control @error('jumlah_karakter') is-invalid @enderror"
                 placeholder="Masukkan Range Jumlah Karakter ex. 0-200" value="{{ old('jumlah_karakter') }}">
                @error ('jumlah_karakter')
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
        <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
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
                       
                        <option value="basic">Basic</option>
                        <option value="premium">Premium</option>
                    </select>
                    @error ('jenis_layanan')
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
              

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>   
                  <tr>
                    <th>No</th>
                    <th hidden>ID User</th>
                    <th>Jenis Layanan</th>
              
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($harga as $h)
                  <tr>
                    <th scope="row" class="text-center">{{$loop->iteration}}</th>
                    <td scope="row" class="text-center" hidden>{{$h->id_parameter_order}}</td>
                    <td>{{$h->jenis_layanan}}</td>
            
                    <td>
                      <button type="button" class="btn btn-primary btn-sm edit" data-toggle="modal" data-target="#updateModal"><i class="fas fa-pencil-alt"></i></button>
                      <a href="#" class="btn btn-danger btn-sm delete" user-id="{{$h->id_parameter_order}}" user-num="{{$loop->iteration}}"><i class="fas fa-trash-alt"></i></a>
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

        var user_id = $(this).attr('user-id')
        var user_num = $(this).attr('user-num')

        Swal.fire({
          title: "Apakah anda yakin?",
          text: "Hapus data user "+user_num+"??",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location = "/users/"+user_id+"/delete";  
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
function GetSelectedValue(){
                var e = document.getElementById("jenis_layanan");
                var result = e.options[e.selectedIndex].value;
}

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
    $('#email').val(data[3]);
    $('#role').val(data[4]);

    $('#editForm').attr('action', '/daftar-harga-teks/'+data[1]);
    $('#editModal').modal('show');
    
  });
});
</script>
@endpush