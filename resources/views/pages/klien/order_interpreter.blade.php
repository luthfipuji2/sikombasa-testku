@extends('layouts/klien/sidebar')

@section('title', 'Dashboard')

@section('container')
    
<div class="container">
        
        <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header">Menu List</div>
                        <div class="row"> 
                        <!-- Card -->
                        <div class="col-4 align-self-center">
                        <!-- Card image -->
                        <div class=card-body>
                            <img class="card-img-top"  height="150px" src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" alt="Card image cap">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                        <!-- Card content -->
                        <div class="card text-center">
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title-center">Transkrip</h4>
                            <hr>
                            <!-- Text -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                            <a href="#" class=" text-center btn btn-primary">Order Here</a>
                        </div>
                        </div>
                        </div>
                        <!-- Card -->

                        <!-- Card -->
                        <div class="col-4 align-self-center">
                        <!-- Card image -->
                        <div class=card-body>
                            <img class="card-img-top"  height="150px" src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" alt="Card image cap">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card content -->
                        <div class="card text-center">
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title-center">Interpreter</h4>
                            <hr>
                            <!-- Text -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#interpreterModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Order Interpreter</button>
                        </div>
                        </div>
                        </div>
                        <!-- Card -->

                        <!-- Card -->
                        <div class="col-4 align-self-center">
                        <!-- Card image -->
                        <div class=card-body>
                            <img class="card-img-top"  height="150px" src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" alt="Card image cap">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card content -->
                        <div class="card text-center">
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title-center">Dubbing</h4>
                            <hr>
                            <!-- Text -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                            <a href="#" class=" text-center btn btn-primary">Order Here</a>
                        </div>
                        </div>
                        </div>
                        <!-- Card -->
                    </div>

                    <div class="row">
                    <!-- Card -->
                        <div class="col-4 align-self-center">
                        <!-- Card image -->
                        <div class=card-body>
                            <img class="card-img-top"  height="150px" src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" alt="Card image cap">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card content -->
                        <div class="card text-center">
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title-center">Teks</h4>
                            <hr>
                            <!-- Text -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#teksModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Order Teks</button>
                            
                        </div>
                        </div>
                        </div>
                        <!-- Card -->

                        <!-- Card -->
                        <div class="col-4 align-self-center">
                        <!-- Card image -->
                        <div class=card-body>
                            <img class="card-img-top"  height="150px" src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" alt="Card image cap">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card content -->
                        <div class="card text-center">
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title-center">Dokumen</h4>
                            <hr>
                            <!-- Text -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                            <a href="#" class=" text-center btn btn-primary">Order Here</a>
                        </div>
                        </div>
                        </div>
                        <!-- Card -->

                        <!-- Card -->
                        <div class="col-4 align-self-center">
                        <!-- Card image -->
                        <div class=card-body>
                            <img class="card-img-top"  height="150px" src="https://mdbootstrap.com/img/Photos/Others/photo9.jpg" alt="Card image cap">
                            <a>
                            <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!-- Card content -->
                        <div class="card text-center">
                        <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title-center">Subtitle</h4>
                            <hr>
                            <!-- Text -->
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                            <a href="#" class=" text-center btn btn-primary">Order Here</a>
                        </div>
                        </div>
                        </div>
                        <!-- Card -->
                    </div>
                    </div>
                </div>
            </div>


            <!-- Modal Interpreter -->
            <div class="modal fade" id="interpreterModal" tabindex="-1" aria-labelledby="interpreterModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="interpreterModalLabel">Order Menu Interpreter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form action="{{route('order-interpreter.store')}}" method="POST">
                        @csrf
                       
                        <input type="hidden" name="id">
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
                            <label for="durasi_pertemuan">Durasi Pertemuan</label>
                                <select class="form-control @error('durasi_pertemuan') is-invalid @enderror" 
                                id="durasi_pertemuan" placeholder="Durasi Pertemuan" name="durasi_pertemuan">
                                    <option value="<=1 Day"><=1 Day</option>
                                    <option value="1 - 3 Day">1 - 3 Day</option>
                                    <option value="1 - 5 Day">1 - 5 Day</option>
                                </select>
                                @error ('durasi_pertemuan')
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>

                            <div>
                            <label for="text">Alamat</label>
                            <textarea type="text" class="form-control" placeholder="Masukkan Alamat" 
                                name="text" value="{{ old('text') }}" id="text">
                            </textarea>
                            </div>
                            
                            </br>
                            <label for="text">Select Your Location</label>
                            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
                            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
                            crossorigin=""/>

                            <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
                            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
                            crossorigin=""></script>

                            <style>#mapid { height: 180px; }</style>

                            <div id="mapid"></div>

                            <script>
                               var map = L.map('mapid').setView([-7.5557418, 110.8545274], 13);
                               L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
                                    maxZoom: 20,
                                    subdomains:['mt0','mt1','mt2','mt3'] 
                                }).addTo(map);
                            </script>
                        
                            <script>
                                var theMarker = {};
                                map.on('click', function(e){
                                    if (theMarker !=undefined){
                                    map.removeLayer(theMarker);
                                        $('#latitude').val(e.latlng.lat);
                                        $('#longitude').val(e.latlng.lng);
                                    };
                                    theMarker = L.marker([e.latlng.lat,e.latlng.lng]).addTo(map);
                                });
                            </script>

                            </br>
                            <label for="text">Longitude</label>
                            <input type="text" class="form-control"  id="e.latlng.lat" name="lat">
                            
                            </br>
                            <label for="text">Latitude</label>
                            <input type="text" class="form-control" id="e.latlng.lng" name="lng">
                            </div>

                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                
            </div>
</div>

@endsection