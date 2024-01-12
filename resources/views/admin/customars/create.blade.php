@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Customars</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Create Customars</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Create Customars</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.customar.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name') }}">
                          @error('name')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="number">Number</label>
                          <input type="text" name="number" minlength="11" maxlength="11" class="form-control" id="number" placeholder="Enter number" value="{{ old('number') }}">
                          @error('number')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" value="{{ old('password') }}">
                          @error('password')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save & Create</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </section>
@endsection
@section('scripts')
{{-- others scripts here --}}
@endsection
