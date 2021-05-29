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
                  <li class="nav-item"><a class="nav-link disabled" href="#document" data-toggle="tab">Required Documents</a></li>
                  <li class="nav-item"><a class="nav-link disabled" href="#certificate" data-toggle="tab">Skills Certificate</a></li>
                  <li class="nav-item"><a class="nav-link active" href="#progress" data-toggle="tab">Progress</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="progress">
                    <!-- Tab Progress di sini -->
                  </div>

                  <div class="disabled tab-pane" id="profile">
                    <!-- Tab Profile di sini -->
                  </div>

                  <div class="disabled tab-pane" id="document">
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

