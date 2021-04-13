@extends('layouts/admin/template')

@section('title', 'Users & Permission List')

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

      <form action="/bank" method="POST" id="editForm">

      {{ csrf_field() }}
      {{ method_field('PUT') }}

        <div class="modal-body">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" id="name" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" id="email" class="form-control" readonly>
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                    <select class="form-control @error('role') is-invalid @enderror" 
                    id="role" placeholder="Role" name="role">
                        <option value="admin">Admin</option>
                        <option value="klien">Client</option>
                        <option value="translator">Translator</option>
                    </select>
                    @error ('role')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
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
              

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>   
                  <tr>
                    <th>ID User</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                    <th>Edit Role</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $user)
                  <tr>
                    <td scope="row" class="text-center">{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                      <button type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#updateModal">Edit</i></button>
                      <a href="#" class="btn btn-danger delete" user-id="{{$user->id}}">Delete</a>
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

        Swal.fire({
          title: "Apakah anda yakin?",
          text: "Hapus data user "+user_id+"??",
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

    $('#name').val(data[1]);
    $('#email').val(data[2]);
    $('#role').val(data[3]);

    $('#editForm').attr('action', '/users/'+data[0]);
    $('#editModal').modal('show');
    
  });
});
</script>
@endpush