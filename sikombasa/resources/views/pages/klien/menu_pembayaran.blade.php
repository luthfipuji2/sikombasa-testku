@extends('layouts/klien/sidebar')

@section('title', 'Daftar Menu Pembayaran')

@section('container')

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



