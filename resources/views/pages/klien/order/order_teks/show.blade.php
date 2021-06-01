@extends('layouts.klien.sidebar')

@section('title', 'Show Order Teks')
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
                            <form action="/order-teks" method="POST" class="d-inline">
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
                                    <td>Jenis Teks</td>
                                    <td>{{$order->jenis_teks}}</td>
                                </tr>
                                <tr>
                                    <td>Durasi Pengerjaan</td>
                                    <td>{{$order->durasi_pengerjaan}} Hari</td>
                                </tr>
                                <tr>
                                    <td>Text</td>
                                    <td>{{$order->text}}</td>
                                </tr>
                                <tr>
                                    <td>Jumlah Karakter</td>
                                    <td>{{$order->jumlah_karakter}} Kata</td>
                                </tr>

                            </tbody>
                        </table>
                        <button class="btn btn-success mx-1 btn-icon" type="submit" onclick="return confirm('Are you sure ?')" class="text-right" style="float: right;"><i class="fas fa-sign-in-alt"></i>   Transaksi</button>
                    </div>
                </form>
            </div>

                


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
        <form action="{{route('update_order_teks', $order->id_order)}}" method="post">
            @csrf
            @method('PUT')
            <input type="text" name="idLampiran" value="{{$order->id_order}}" hidden></td>
            <div class="form-group">
                <label for="jenis_layanan">Jenis Layanan</label>
                <input type="text" class="form-control" placeholder="Masukkan jenis layanan" name="jenis_layanan" id="jenis_layanan" value="{{$order->jenis_layanan}}" readonly>
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
                <label for="jenis_teks">Jenis Teks</label>
                <input type="text" class="form-control" placeholder="Masukkan jenis teks" name="jenis_teks" id="jenis_teks" value="{{$order->jenis_teks}}" readonly>
            </div>

            <div class="form-check">
            <input class="form-check-input" type="radio" id="jenis_teks" name="jenis_teks" value="umum">
            <label class="form-check-label" for="jenis_teks">
                Umum
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" id="jenis_teks"  name="jenis_teks" value="khusus">
            <label class="form-check-label" for="jenis_teks">
                Khusus
            </label>
            </div>

            <br>
            <div class="form-group">
                <label for="durasi_pengerjaan">Durasi Pengerjaan</label>
                <input type="number" class="form-control" placeholder="Masukkan nama lampiran" name="durasi_pengerjaan" id="durasi_pengerjaan" value="{{$order->durasi_pengerjaan}}">
            </div>

            <label for="durasi_pengerjaan">Text</label>
            <div class="form-group">
                <textarea type="text" class="form-control @error('text') is-invalid @enderror" id="text" oninput="countWord()" placeholder="Tulis Text Disini" rows="10" name="text" required>{{$order->text}}</textarea>
                @error('text')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jml_karakter" class="col-form-label" value="{{$order->jumlah_karakter}}">Word Count : </label>
                <input type="hidden" name="jumlah_karakter" id="jumlah_karakter">
                <span type="text" id="jml_karakter" name="jml_karakter"  >
            </div>

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" onclick="countWord()">Save changes</button>
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