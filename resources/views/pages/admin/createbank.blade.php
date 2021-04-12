@extends('layouts/admin/template')

@section('title', 'Add Data Users')

@section('container')
<!-- Main content -->
<section class="content">    
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="/users/">
              @csrf
              <form role="form">
                <div class="card-body">

                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                    id="name" placeholder="Enter Name" name="name"  value="{{ old('name') }}">
                    @error ('name')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text"class="form-control @error('email') is-invalid @enderror" 
                    id="email" placeholder="Enter Email" name="email"  value="{{ old('email') }}">
                    @error ('email')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                    id="password" placeholder="Password" name="password"  value="{{ old('password') }}">
                    @error ('password')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control @error('role') is-invalid @enderror" 
                    id="role" placeholder="Role" name="role"  value="{{ old('role') }}">
                        <option>Admin</option>
                        <option>Client</option>
                        <option>Translator</option>
                    </select>
                    @error ('role')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
@endsection