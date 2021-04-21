@extends('layouts.translator.master')

@section('title', 'Career')
@section('content')
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link disabled" href="#profile" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link active" href="#document" data-toggle="tab">Required Documents</a></li>
                  <li class="nav-item"><a class="nav-link disabled" href="#certificate" data-toggle="tab">Skills Certificate</a></li>
                  <li class="nav-item"><a class="nav-link disabled" href="#progress" data-toggle="tab">Progress</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="disabled tab-pane" id="progress">
                    <!-- Tab Progress di sini -->
                  </div>

                  <div class="disabled tab-pane" id="profile">
                    <!-- Tab Profile di sini -->
                  </div>

                  <div class="active tab-pane" id="document">
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Curriculum Vitae</label>
                          <div class="col-sm-5">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="cv" value="{{ old('cv') }}">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                    </div>
                    <div class="form-group row" method="POST" action="/document">
                    @csrf
                        <label for="inputName2" class="col-sm-3 col-form-label">Ijazah Terakhir</label>
                          <div class="col-sm-5">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="ijazah_terakhir" value="{{ old('ijazah_terakhir') }}">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Portofolio</label>
                          <div class="col-sm-5">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="portofolio" value="{{ old('portofolio') }}">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Surat Keterangan Sehat</label>
                          <div class="col-sm-5">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="sk_sehat" value="{{ old('sk_sehat') }}">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Surat Keterangan Berkelakuan Baik</label>
                          <div class="col-sm-5">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="skck" value="{{ old('skck') }}">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                    </div>
                    <div class="form-group row">
                        <div class=" col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>

                  </div>

                  <div class="disabled tab-pane" id="certificate">
                  <!-- Tab Certificate di sini -->
                  </div>
                  </div>
                  <!-- /.tab-pane -->
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
@endpush

