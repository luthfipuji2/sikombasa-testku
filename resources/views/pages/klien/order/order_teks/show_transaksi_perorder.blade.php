@extends('layouts.klien.sidebar')

@section('title', 'Show Transaksi Order Teks')
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
                <li class="nav-item"><a class="nav-link disabled" href="#certificate" data-toggle="tab">View Order</a></li>
                <li class="nav-item"><a class="nav-link active" href="#progress" data-toggle="tab">Transaksi</a></li>
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
                            <br>
                                <tr>
                                    <td>Jenis Layanan</td>
                                    <td scope="col" class="text-center">{{$order->parameterjenislayanan->p_jenis_layanan}}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Teks</td>
                                    <td scope="col" class="text-center">{{$order->parameterjenisteks->p_jenis_teks}}</td>
                                </tr>
                                <tr>
                                    <td>Durasi Pengerjaan</td>
                                    <td scope="col" class="text-center">{{$order->durasi_pengerjaan}} Hari</td>
                                </tr>
                                <tr>
                                    <td>Text</td>
                                    <td scope="col" class="text-center">{{$order->text}}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Karakter</td>
                                    <td scope="col" class="text-center">{{$order->jumlah_karakter}} Kata</td>
                                </tr>
                                <tr>
                                    <th scope="col">Total Harga</th>
                                    <th scope="col" class="text-center">{{$order->harga}}</th>
                                </tr>

                            </tbody>
                        </table>
                        <!-- <a href="{{ route('show_transaksi_perorder', ['id_order' => $order->id_order, 'status' => 'show-transaksi']) }}" class="btn btn-success mx-1 btn-icon" class="text-right" style="float: right;">Transaksi    <i class="fas fa-sign-in-alt"></i></a> -->
                    </div>
                </form>
            </div>
    
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

@push('scripts')
<script>
		function countWord() {
			var words = document
				.getElementById("text").value;
			var count = 0;

			var split = words.split(' ');

			for (var i = 0; i < split.length; i++) {
				if (split[i] != "") {
					count += 1;
				}
			}

            $('#jumlah_karakter').val(count)
			document.getElementById("jml_karakter")
				.innerHTML = count;
		}
	</script>
    @endpush