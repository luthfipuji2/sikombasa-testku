@extends('layouts/admin/template')

@section('title', 'Edit Data User')

@section('container')
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <!-- /.col -->
          <div class="col-md-12 mt-3">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Biodata</a></li>
                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                  <form method="POST" action="/profile/{{$user->id}}">
                    @method('patch')
                    @csrf
                    <form role="form">
                        
                        
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                            id="name" placeholder="Enter Name" name="name" value="{{ $user->name }}">
                            @error ('name')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text"class="form-control @error('email') is-invalid @enderror" 
                            id="email" placeholder="Enter Email" name="email" value="{{ $user->email }}">
                            @error ('email')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                            id="password" placeholder="Password" name="password" >
                            @error ('password')
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>  

                        <div class="form-group row">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        

                    

                        
                    </form>
                  
                      
                      
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection