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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#kriteriaModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Order Here</button>
                            <!-- <a href="/order-teks" class=" text-center btn btn-primary">Order Here</a> -->
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


            <!-- Modal Teks -->
            <div class="modal fade" id="teksModal" tabindex="-1" aria-labelledby="teksModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="teksModalLabel">Tambah Order</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form action="{{route('order-teks.store')}}" method="POST">
                        @csrf
                        <!-- <form action="{{ url('order-teks') }}" method="POST"> -->
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
                            
                            <label for="text">Teks</label>
                            <textarea rows="10" cols="70" form="usrform" type="text" class="form-control" placeholder="Masukkan Teks" 
                                name="text" value="{{ old('text') }}" id="text">
                            </textarea>
                            </div>
                        
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                
                    <!-- Card content -->

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
                    <div class="card shadow">
                    <div class="card-header py-3">
                        <div class="d-flex justify-content-between">
                        <div class="float-center">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#teksModal"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Order Teks</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
</div>

@endsection