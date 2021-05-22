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
                <div class="card-icon bg-primary">
                <i class="nav-icon fas fa-star"></i>
                </div>
            </a>
            <div class="card-wrap">
                <div class="card-header">
                <div>
                <a onclick="layanan_basic()" class="btn btn-outline-info">
                    <label for="basic">Layanan Basic</label>
                </a>
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
                <div class="card-icon bg-primary">
                <i class="nav-icon fas fa-star"></i>
                <i class="nav-icon fas fa-star"></i>
                </div>
            </a>
            <div class="card-wrap">
                <div class="card-header">
                <div>
                <a onclick="layanan_premium()" class="btn btn-outline-info">
                    <label for="premium">Layanan Premium</label>
                </a>
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
            <br><hr color="grey">
        <!-- Selesai layanan premium -->

        <!-- jenis teks umum -->
            <div class="card card-statistic-1">
                <div class="card-icon bg-secondary">
                &nbsp&nbsp<i class="nav-icon fas fa-file"></i>&nbsp&nbsp Teks Umum
                </div>
            </a>
            <div class="card-wrap">
                <div class="card-header">
                <div>
                <a onclick="teks_umum()" class="btn btn-outline-dark">
                    <label for="umum">Jenis Teks Umum</label>
                </a>
                </div>
                <div class="card-body">
                </div>
                <div id="umum"></div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="jenis_teks" value="umum" id="jenis_teks">
                <label class="form-check-label" for="jenis_teks"><h5>Pilih Jenis Teks Umum</label>
                </div>
                </div>
            </div>
            </div>
        </div>
        <!--selesai jenis teks umum -->

            <!-- jenis teks khusus -->
            <div class="card card-statistic-1">
                <div class="card-icon bg-secondary">
                &nbsp&nbsp<i class="nav-icon fas fa-file"></i>&nbsp&nbsp Teks Resmi
                </div>
            </a>
            <div class="card-wrap">
                <div class="card-header">
                <div>
                <a onclick="teks_khusus()" class="btn btn-outline-dark">
                    <label for="khusus">Jenis Teks Khusus</label>
                </a>
                </div>
                <div class="card-body">
                </div>
                <div id="khusus"></div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" name="jenis_teks" value="khusus" id="jenis_teks">
                <label class="form-check-label" for="jenis_teks"><h5>Pilih Jenis Teks Khusus</label>
                </div>
                </div>
            </div>
            </div>
        
        <!-- Selesai jenis teks -->

        <br><hr color="grey">
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
        document.getElementById("basic").innerHTML = " * Klien Dapat Memilih Penerjemah <br> * Tidak Terdapat Editor <br> * Tidak ada Garansi <hr>";
    }
    
</script>
@endpush

@push('scripts')
<script >		
    // membuat function tampilkan_nama
    function layanan_premium(){
        document.getElementById("premium").innerHTML = " * Translator Ditentukan <br> * Terdapat Proses Editing <br> *  Bergaransi <hr>";
    }
    
</script>
@endpush


@push('scripts')
<script >		
    // membuat function tampilkan_nama
    function teks_umum(){
        document.getElementById("umum").innerHTML = " * Teks Bebas/Bersifat Umum <br> <hr>";
    }
    
</script>
@endpush

@push('scripts')
<script >		
    // membuat function tampilkan_nama
    function teks_khusus(){
        document.getElementById("khusus").innerHTML = " * Teks Resmi/Bersifat Rahasia <br><hr>";
    }
    
</script>
@endpush

@push('scripts')
<script>
        function submit() {
  
            // Get the input text value
            var text = document
                .getElementById("text").value;
  
            // Initialize the word counter
            var numWords = 0;
  
            // Loop through the text
            // and count spaces in it 
            for (var i = 0; i < text.length; i++) {
                var currentCharacter = text[i];
  
                // Check if the character is a space
                if (currentCharacter == " ") {
                    numWords += 1;
                }
            }
  
            // Add 1 to make the count equal to
            // the number of words 
            // (count of words = count of spaces + 1)
            numWords += 1;
  
            // Display it as output
            document.getElementById("show")
                .innerHTML = numWords;
        }
    </script>
    @endpush