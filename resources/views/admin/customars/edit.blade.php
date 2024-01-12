@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Customars</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Customars</li>
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
                      <h3 class="card-title">Edit Customars</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.customar.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="{{ old('name') ?? $user->name }}">
                          @error('name')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="phone">Number</label>
                          <input type="text" name="phone" minlength="11" maxlength="11" class="form-control" id="phone" placeholder="Enter phone" value="{{ old('phone') ?? $user->phone }}">
                          @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        {{-- <div class="form-group">
                          <label for="password">Password</label>
                          <input type="text" name="password" class="form-control" id="password" placeholder="Enter password" value="">
                          @error('password')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div> --}}
                        <div class="form-group">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="status" name="status" value="yes" {{ $user->status == 'active' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="status">Status</label>
                                </div>
                                </div>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Save & Update</button>
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
