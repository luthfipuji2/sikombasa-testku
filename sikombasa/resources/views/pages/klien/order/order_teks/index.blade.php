@extends('layouts.klien.sidebar')

@section('title', 'Order Teks')
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
                <li class="nav-item"><a class="nav-link active" href="#certificate" data-toggle="tab">Order Menu</a></li>
                <li class="nav-item"><a class="nav-link disabled" href="#certificate" data-toggle="tab">View Order</a></li>
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
                <form action="{{route('order-teks.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- layanan basic -->
        <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                <i class="nav-icon fas fa-star"></i>
                </div>
            </a>
            <div class="card-wrap">
                <div class="card-header">
                <div>
                <button onclick="layanan_basic()" class="btn btn-info">
                    <label for="basic">Layanan Basic</label>
                </button>
                </div>
                <div class="card-body">
                </div>
                <div id="basic"></div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="jenis_layanan" id="jenis_layanan" value="basic">
                <label class="form-check-label" for="jenis_layanan"><h5>Pilih Layanan Basic</label>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!--selesai layanan baisc -->

            <!-- layanan premium -->
            <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                <i class="nav-icon fas fa-star"></i>
                <i class="nav-icon fas fa-star"></i>
                </div>
            </a>
            <div class="card-wrap">
                <div class="card-header">
                <div>
                <button onclick="layanan_premium()" class="btn btn-info">
                    <label for="premium">Layanan Premium</label>
                </button>
                </div>
                <div class="card-body">
                </div>
                <div id="premium"></div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="jenis_layanan" value="premium" id="jenis_layanan">
                <label class="form-check-label" for="jenis_layanan"><h5>Pilih Layanan Premium</label>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!-- Selesai layanan premium -->
        <br>

        <div class="form-group">
                        <label for="durasi_pengerjaan">Durasi Pengerjaan</label>
                            <select class="form-control @error('durasi_pengerjaan') is-invalid @enderror" 
                            id="durasi_pengerjaan" placeholder="Durasi Pengerjaan" name="durasi_pengerjaan">
                                <option value="1">1 Day</option>
                                <option value="2">2 Day</option>
                                <option value="3">3 Day</option>
                                <option value="4">4 Day</option>
                            </select>
                            @error ('durasi_pengerjaan')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

        {{ csrf_field() }}
                    
                    {{-- text --}}
                    <label for="durasi_pengerjaan">Text</label>
                    <div class="form-group">
                        <textarea type="text" class="form-control" id="text" placeholder="Tulis text Disini" rows="20"
                            name="text" height="20">{{old('text')}}</textarea>
                    </div>

                    <hr>
                    </div>
                    <div class="col-sm-2">
                    <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                    <br>
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




@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
    $(".add-more").click(function(){ 
        var html = $(".copy").html();
        $(".after-add-more").after(html);
    });

    // saat tombol remove dklik control group akan dihapus 
    $("body").on("click",".remove",function(){ 
        $(this).parents(".control-group").remove();
    });
    });
</script>
@endpush

@push('scripts')
<script >		
    // membuat function tampilkan_nama
    function layanan_basic(){
        document.getElementById("basic").innerHTML = "Mendapatkan Garansi Selama 3 Bulan Saat Pertama Kali Order<hr>";
    }
    
</script>
@endpush

@push('scripts')
<script >		
    // membuat function tampilkan_nama
    function layanan_premium(){
        document.getElementById("premium").innerHTML = "<hr>* Free Video Editing <br> * Mendapatkan Garansi Selama 1 Tahun Saat Pertama Kali Order <hr> ";
    }
    
</script>
@endpush