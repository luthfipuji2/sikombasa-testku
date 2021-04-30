@extends('layouts.klien.sidebar')

@section('title', 'Show Order Dokumen')
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
                                <button class="btn btn-primary mx-1 btn-icon" type="button" data-toggle="modal" data-target="" class="text-right" style="float: right;"><i class="fas fa-pencil-alt"></i>   Update Order</button>
                                <br>
                                <br>
                                </form>
                                </td>
                            </tr>
                            </div>
                            <br>
                                <tr>
                                    <td style="width: 50%">Jenis Layanan</td>
                                    <td style="width: 50%"></td>
                                </tr>
                                <tr>
                                    <td>Jenis Layanan</td>
                                    <td>{{$klien->order->jenis_layanan}}</td>
                                </tr>
                                <tr>
                                    <td>Durasi Pengerjaan</td>
                                    <td>{{$klien->order->durasi_pengerjaan}}</td>
                                </tr>
                                <tr>
                                    <td>Nama Dokumen</td>
                                    <td>{{$klien->order->nama_dokumen}}</td>
                                </tr>
                                <tr>
                                    <td>Dokumen</td>
                                    <td>{{$klien->order->upload_dokumen}}</td>
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
@endsection



