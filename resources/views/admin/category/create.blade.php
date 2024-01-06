@extends('admin.layouts.app_admin')
@section('head')
{{-- others styles here --}}
@endsection
@section('content')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Create Category</li>
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
                      <h3 class="card-title">Create Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="category_name">Category Name <span class="text-danger">*</span></label>
                          <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Enter category name" value="{{ old('category_name') }}">
                          @error('category_name')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="meta_title">Meta Title <span class="text-danger">(max charecter: 70)</span></label>
                          <input type="text" name="meta_title" maxlength="70" class="form-control" id="meta_title" placeholder="Enter category name" value="{{ old('meta_title') }}">
                          @error('meta_title')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group">
                          <label for="meta_description">Meta Description <span class="text-danger">(max charecter: 170)</span></label>
                          <textarea name="meta_description" id="meta_description" rows="5" maxlength="170" class="form-control" placeholder="Enter meta description">{{ old('meta_description') }}</textarea>
                          @error('meta_description')
                            <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="form-group row">
                            <div class="col-9">
                                <label for="image">Image <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" name="image" id="image" onchange="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-3 mt-3 text-center">
                                <img src="" id="image_id" alt="category image" class="img-fluid border rounded p-1 mt-2" width="100">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="status" name="status" value="yes">
                                    <label class="custom-control-label" for="status">Status</label>
                                </div>
                                </div>
                            @error('status')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="is_featured" name="is_featured" value="yes">
                                    <label class="custom-control-label" for="is_featured">Is Featured</label>
                                </div>
                                </div>
                            @error('is_featured')
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
