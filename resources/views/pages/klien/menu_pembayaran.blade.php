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
              

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="datatable" class="table table-bordered table-striped">
                  <thead>   
                  <tr>
                    <th>No</th>
                    <th>ID Order</th>
                    <th>Tanggal Order</th>
                    <th>Harga</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <tr>
                    <th scope="row" class="text-center"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button type="button" class="btn btn-primary detail" data-toggle="modal" data-target="#detailModal">Detail</i></button>
                      <button type="button" class="btn btn-danger upload" data-toggle="modal" data-target="#strukModal">Upload Struk Pembayaran</i></button>
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




@endpush



