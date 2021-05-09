@extends('layouts.klien.sidebar')

@section('title', 'Show Order Dubbing')
@section('content')


<div class="container-fluid">
        <div class="row">
        <div class="container ">
        {{-- status --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link disabled" href="#certificate" data-toggle="tab">Order Menu</a></li>
                <li class="nav-item"><a class="nav-link active" href="#certificate" data-toggle="tab">View Order</a></li>
                <li class="nav-item"><a class="nav-link disabled" href="#progress" data-toggle="tab">Transaksi</a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                <div class="disabled tab-pane" id="progress">
                    <!-- Tab Activity di sini -->
                </div>

                <div class="disabled tab-pane" id="profile">
                    <!-- Tab Profile di sini -->
                </div>

                <div class="disabled tab-pane" id="document">
                <!-- Tab Document di sini -->
                </div>

                <div class="active tab-pane" id="certificate">
                    <form action="  " method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <div>
                            <form action="" method="POST" class="d-inline">
                                @method('Delete')
                                @csrf
                                <button class="btn btn-danger mx-1 btn-icon" type="submit" onclick="return confirm('Are you sure ?')" class="text-right" style="float: right;"><i class="fas fa-trash-alt"></i>  Batalkan Order</button>
                                <button type="button" class="btn btn-primary mx-1 btn-icon" data-toggle="modal" data-target="#exampleModal{{$order->id_order}}" class="text-right" style="float: right;"><i class="fas fa-pencil-alt"></i>    Update Order</button>
                                <br>
                                <br>
                                </form>
                                </td>
                            </tr>
                            </div>
                            <br>
                                <tr>
                                    <td>Jenis Layanan</td>
                                    <td>{{$order->jenis_layanan}}</td>
                                </tr>
                                <tr>
                                    <td>Durasi Pengerjaan</td>
                                    <td>{{$order->durasi_pengerjaan}} Hari</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Dubber</td>
                                    <td>{{$order->jumlah_dubber}} Orang</td>
                                </tr>
                                <tr>
                                    <td>Nama Dokumen</td>
                                    <td>{{$order->nama_dokumen}}</td>
                                </tr>
                                <tr>
                                    <td>Dokumen</td>
                                    <td>{{$order->path_file}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-success mx-1 btn-icon" type="submit" onclick="return confirm('Are you sure ?')" class="text-right" style="float: right;"><i class="fas fa-sign-in-alt"></i>   Transaksi</button>
                    </div>
                </div>
            </div>
        </div>
            <br>
                </div>
                
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->


<!-- Modal Edit -->
<div class="modal fade" id="exampleModal{{$order->id_order}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Order</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            
        <div class="modal-body">
        <form action="{{route('update_order_dubbing', $order->id_order)}}" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="idLampiran" value="{{$order->id_order}}" hidden></td>
            <div class="form-group">
                <label for="jenis_layanan">Jenis Layanan</label>
                <input type="text" class="form-control" placeholder="Masukkan Jenis Layanan" name="jenis_layanan" id="jenis_layanan" value="{{$order->jenis_layanan}}" readonly>
            </div>

            <div class="form-check">
            <input class="form-check-input" type="radio" id="jenis_layanan" name="jenis_layanan" value="basic">
            <label class="form-check-label" for="jenis_layanan">
                Basic
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" id="jenis_layanan"  name="jenis_layanan" value="premium">
            <label class="form-check-label" for="jenis_layanan">
                Premium
            </label>
            </div>
            <br>
            <div class="form-group">
                <label for="durasi_pengerjaan">Durasi Pengerjaan</label>
                <input type="number" class="form-control" placeholder="Masukkan Durasi Pengerjaan" name="durasi_pengerjaan" id="durasi_pengerjaan" value="{{$order->durasi_pengerjaan}}">
            </div>
            <br>
            <div class="form-group">
                <label for="jumlah_dubber">Jumlah Dubber</label>
                <input type="number" class="form-control" placeholder="Masukkan Jumlah Dubber Disini" name="jumlah_dubber" id="jumlah_dubber" value="{{$order->jumlah_dubber}}">
            </div>
            <br>
            {{ csrf_field() }}
                    <div class="form-group">
                        <label for="nama_dokumen" class="col-form-label">Nama Video</label>
                        <h6 for="durasi_pengerjaan"> * Video Anda = {{$order->path_file}}</h6>
                    <br>
                        <input type="text" class="form-control" id="nama_dokumen" name="nama_dokumen">
                    </div>
                    <div class="form-group">
                        <label for="path_file" class="col-form-label" value="{{$order->durasi_pengerjaan}}">Upload Video</label>
                        <div class="modal-body" value="{{$order->durasi_pengerjaan}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="file" name="path_file" required="required" value="{{$order->durasi_pengerjaan}}">
                                </div>
                            </div>
                    </div>
                    <br>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </div>

    </form>
    
    </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection

@push('addon-script')
    <script>
        $(document).ready(function() {
            $('#kriteria-table').DataTable();
        } );
    </script>
@endpush