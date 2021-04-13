@extends('layouts.adminuniv')
@section('title', 'Admin Universitas')
@section('status-kriteria', 'active')
@section('status-kriteria-file', 'active')
@section('content')
    <div class="modal fade" id="kriteriaModal" tabindex="-1" aria-labelledby="kriteriaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="kriteriaModalLabel">Tambah Kriteria</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="{{route('admin.kriteria.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="kriteria">Id Kriteria</label>
                    <input type="text" class="form-control @error('id_jenis_kriteria') is-invalid @enderror" 
                    id="id_jenis_kriteria" placeholder="Masukkan Nama" name="id_jenis_kriteria" 
                    value="{{ old('id_jenis_kriteria') }}">
				@error('id_jenis_kriteria') 
					<div class="invalid-feedback"> {{ $message }}</div>
				@enderror
                </div>
                <div class="form-group">
                    <label for="nama_kriteria">Nama Kriteria</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Kriteria" 
                    name="nama_kriteria" value="{{ old('nama_kriteria') }}" id="nama_kriteria">
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    <div class="container ">
        <div class="section-header">
        <h1>Kriteria Penawaran</h1>
        </div>
        @include('includes.flashmessage')
        <div class="card shadow">
        <div class="card-header py-3">
            <div class="d-flex justify-content-between">
            <div class="float-right">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kriteriaModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Kriteria</button>
            </div>
        </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table id="kriteria-table" class="table table-bordered table-hover" width="100%" cellspacing="0" style="border:1px solid #e3e6f0">
                <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Id Kriteria</th>
                    <th scope="col" class="text-center">Nama Kriteria</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Id Kriteria</th>
                    <th scope="col" class="text-center">Nama Kriteria</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach ($refKriteria as $n)
                @if ($n->id_jenis_kriteria == "S01")
                    @continue
                @endif
                <tr>
                    <th scope="row" class="text-center">{{$loop->iteration}}</th>
                    <td scope="col" class="text-center">{{$n->id
                    _jenis_kriteria}}</td>
                    <td scope="col" class="text-center">{{$n->nama_kriteria}}</td>
                    <td scope="col" class="text-center">
                    <form action="{{route('admin.kriteria.destroy',$n->id_jenis_kriteria)}}" method="POST" class="d-inline">
                        @method('Delete')
                        @csrf
                        <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#lampiranUpdateModal{{$n->id_jenis_kriteria}}"><i class="fas fa-pencil-alt"></i></button>
                        <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash-alt"></i></button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
@endsection
    @section('modal')
    @foreach ($refKriteria as $n)    
    <div class="modal fade" id="lampiranUpdateModal{{$n->id_jenis_kriteria}}" tabindex="-1" aria-labelledby="lampiranModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="lampiranModalLabel">Edit lampiran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <form action="{{route('admin.kriteria.update', $n->id_jenis_kriteria)}}" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="idLampiran" value="{{$n->id_jenis_kriteria}}" hidden></td>
            <div class="form-group">
                <label for="kriteria">Id Jenis Kriteria</label>
                <input type="text" class="form-control" placeholder="Masukkan nama lampiran" name="id_jenis_kriteria" value="{{$n->id_jenis_kriteria}}">
            </div>
            <div class="form-group">
                <label for="kriteria">Nama Kriteria</label>
                <input type="text" class="form-control" placeholder="Masukkan nama lampiran" name="nama_kriteria" value="{{$n->nama_kriteria}}">
            </div>
            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
    </div>
    </div>
    </div>
    @endforeach
@endsection

@push('addon-script')
    <script>
        $(document).ready(function() {
            $('#kriteria-table').DataTable();
        } );
    </script>
@endpush

@extends('layouts.adminuniv')
@section('title', 'Admin Universitas')
@section('status-penawaran', 'active')
@section('status-jenis-beasiswa', 'active')
@section('content')

        <div class="container ">
            <div class="section-header">
            <h1>Daftar Jenis Beasiwa</h1>
            </div>
            <div class="card shadow">
            <div class="card-header py-3">
                <div class="d-flex justify-content-between">
                <div class="float-right">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#jenisBeasiswaModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Jenis Beasiswa</button>
                </div>
            </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table id="beasiswa" class="table table-bordered table-hover" width="100%" cellspacing="0" style="border:1px solid #e3e6f0">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Nama Beasiswa</th>
                        <th scope="col" class="text-center">Sumber Beasiswa</th>
                        <th scope="col" class="text-center">Jenis Beasiswa</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Nama Beasiswa</th>
                        <th scope="col" class="text-center">Sumber Beasiswa</th>
                        <th scope="col" class="text-center">Jenis Beasiswa</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach ($jenisbeas as $jenisbea)
                    <tr>
                        <th scope="row" class="text-center">{{$loop->iteration}}</th>
                        <td scope="col" class="text-center">{{$jenisbea->nama_beasiswa}}</td>
                        <td scope="col" class="text-center">{{$jenisbea->sumber_beasiswa}}</td>
                        <td scope="col" class="text-center">{{$jenisbea->jenis_beasiswa}}</td>
                        <td scope="col" class="text-center">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#jenisBeasiswaModal{{$jenisbea->id_jenis_beasiswa}}"><i class="fas fa-pencil-alt"></i></button>
                            <form action="{{route('admin.jenis-beasiswa.destroy',$jenisbea->id_jenis_beasiswa)}}" method="POST" class="d-inline" id="deleteJenisBeasiswa"“>
                            @method('Delete')
                            @csrf
                            </form>
                            <button class="btn btn-danger btn-sm" onclick="destroy()"><i class="fas fa-trash-alt"></i></button>
                        </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>

@endsection
@section('modal')
    <div class="modal fade" id="jenisBeasiswaModal" tabindex="-1" aria-labelledby="jenisBeasiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="jenisBeasiswaModalLabel">Tambah Jenis Beasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <form action="{{route('admin.jenis-beasiswa.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nama_beasiswa">Nama Beasiswa</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Beasiswa" name="nama_beasiswa">
                </div>
                <div class="form-group">
                    <label for="sumber_beasiswa">Sumber Beasiswa</label>
                    <input type="text" class="form-control" placeholder="Masukkan Sumber Beasiswa" name="sumber_beasiswa">
                </div>
                <div class="form-group">
                    <label for="jenis_beasiswa">Jenis Beasiswa</label>
                    <select name="jenis_beasiswa" id="jenis_beasiswa" class="custom-select fstdropdown-select">
                        <option value="prestasi">PRESTASI</option>
                        <option value="kurang mampu">KURANG MAMPU</option>
                        <option value="tidak terklasifikasi">TIDAK TERKLASIFIKASI</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
        </div>
    </div>
    @foreach ($jenisbeas as $jenisbea)
        <div class="modal fade" id="jenisBeasiswaModal{{$jenisbea->id_jenis_beasiswa}}" tabindex="-1" aria-labelledby="jenisBeasiswaModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="jenisBeasiswaModalLabel">Tambah Jenis Beasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <form action="{{route('admin.jenis-beasiswa.update', $jenisbea->id_jenis_beasiswa)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_jenis_beasiswa">Nama Beasiswa</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama beasiswa" name="nama_beasiswa" value="{{$jenisbea->nama_beasiswa}}">
                        </div>
                        <div class="form-group">
                            <label for="nama_jenis_beasiswa">Sumber Beasiswa</label>
                            <input type="text" class="form-control" placeholder="Masukkan sumber beasiswa" name="sumber_beasiswa" value="{{$jenisbea->sumber_beasiswa}}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_beasiswa">Jenis Beasiswa</label>
                            <select name="jenis_beasiswa" id="jenis_beasiswa" class="custom-select fstdropdown-select">
                                <option value="prestasi">PRESTASI</option>
                                <option value="kurang mampu">KURANG MAMPU</option>
                                <option value="tidak terklasifikasi">TIDAK TERKLASIFIKASI</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach 
@endsection
@push('addon-script')
    <script>
        $(document).ready(function() {
            $('#beasiswa').DataTable();
        } );
    </script>
@endpush
@push('addon-script')
    <script>
        function destroy(){
            swal({
                title: "Konfirmasi",
                text: "Apakah anda yakin menghapus jenis beasiswa ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    document.getElementById('deleteJenisBeasiswa').submit();
                } else {
                    swal("Jenis beasiswa batal dihapus");
                }
            });
        };
    </script>   
@endpush



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
<section class="content" id="app">
  <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-3">
        
        @if(count($errors) > 0)

        <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{error}}</li>
        @endforeach
        </ul>
        </div>
        @endif
    
        
  
  <div class="card">
    <div class="card-header">
      <div class="card-tools">
      
        <div class="float-left">
            <a href="/bank-exportExcel" class="btn btn-primary"><i aria-hidden="true"></i> Excel</a>
        </div>

        <div class="float-left">
            <a href="/bank-exportPDF" class="btn btn-primary"><i aria-hidden="true"></i> PDF</a>
        </div>
    
         <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Jenis Beasiswa
        </button>
      </div>
    </div>
  
<!-- /.card-header -->
      <div class="card-body">
      
        <table id="datatable" class="table table-bordered table-hover">
        <thead>   
        <tr>
          <th>ID</th>
          <th>Nama Bank</th>
          <th>Nama Rekening</th>
          <th>No Rekening</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bank as $bank)
        <tr>
          <td>{{$bank->id_bank}}</td>
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
  </div>
  </div>
  </div>
<!-- /.card -->
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
    lengthChange: false,
    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
  });

  table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );      

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



