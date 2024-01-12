@extends('admin.layouts.app_admin')
@section('head')
    {{-- others styles here --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Create Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Product</li>
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
                            <h3 class="card-title">Create Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('product.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="product_name">Product Name <span class="text-danger">*</span></label>
                                    <input type="text" name="product_name" class="form-control" id="product_name"
                                        placeholder="Enter category name" value="{{ old('product_name') }}">
                                    @error('product_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="meta_title">Meta Title  <span class="text-danger">(max charecter: 70)</span></label>
                                    <input type="text" name="meta_title" maxlength="70" class="form-control"
                                        id="meta_title" placeholder="Enter title" value="{{ old('meta_title') }}">
                                    @error('meta_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" id="description" rows="5" class="form-control" placeholder="Enter meta description">{{ old('description') }}</textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="meta_description">Meta Description  <span class="text-danger">(max charecter: 170)</span></label>
                                    <textarea name="meta_description" maxlength="170" id="meta_description" rows="5" class="form-control"
                                        placeholder="Enter meta description">{{ old('meta_description') }}</textarea>
                                    @error('meta_description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="buying_price">Buying Price <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" placeholder="Enter buying price" class="form-control"
                                                id="buying_price" name="buying_price" value="{{ old('buying_price') }}">
                                            @error('buying_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="whole_sale_price">Whole Sale Price <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" placeholder="Enter whole sale price" class="form-control"
                                                id="whole_sale_price" name="whole_sale_price"
                                                value="{{ old('whole_sale_price') }}">
                                            @error('whole_sale_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="regular_price">Regular Price <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" placeholder="Enter whole sale price" class="form-control"
                                                id="regular_price" name="regular_price" value="{{ old('regular_price') }}">
                                            @error('regular_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="discount_type">Discount Type <span
                                                    class="text-danger">*</span></label>
                                            <select name="discount_type" class="form-control" id="discount_type">
                                                <option value="">Select Option</option>
                                                <option {{ old('discount_type') == 'flat' ? 'selected' : '' }} value="flat">Flat</option>
                                                <option {{ old('discount_type') == 'persentage' ? 'selected' : '' }} value="persentage">Persentage</option>
                                            </select>
                                            @error('discount_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="discount">Discount <span class="text-danger">*</span></label>
                                            <input type="number" step="1" min="1" name="discount"
                                                class="form-control" placeholder="Enter discount mount" value="{{ old('discount') }}">
                                            @error('discount')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="stock">Stock <span class="text-danger">*</span></label>
                                            <input type="number" step="1" min="1" name="stock"
                                                class="form-control" placeholder="Enter stock" value="{{ old('stock') }}">
                                            @error('stock')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="brand">Select Brand <span class="text-danger">*</span></label>
                                            <select name="brand" class="form-control" id="brand">
                                                <option value="">Select Brand</option>
                                                @foreach ($brands as $brand)
                                                    <option {{ old('brand') == $brand->id ? 'selected' : '' }}
                                                        value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('brand')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="category">Select Category <span
                                                    class="text-danger">*</span></label>
                                            <select name="category" class="form-control" id="category"
                                                onchange="setSubCategory(this);">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $category)
                                                    <option {{ old('category') == $category->id ? 'selected' : '' }}
                                                        value="{{ $category->id }}">{{ $category->category_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="sub_category">Select Sub-Category</label>
                                            <select name="sub_category" class="form-control" id="sub_category" disabled>
                                                <option value="">Select Sub-Category</option>
                                            </select>
                                            @error('sub_category')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="shiping_charge">Shiping Charge <span class="text-danger">*</span></label>
                                            <input type="number" step="1" min="1" name="shiping_charge" class="form-control" value="{{ old('shiping_charge') }}" placeholder="Enter shiping charge">
                                            @error('shiping_charge')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>




                                    <div class="col-lg-4">
                                        <div class="form-group" data-select2-id="29">
                                            <label>Meta Keywords</label>
                                            <input type="text" class="form-control" name="meta_keywords" placeholder="Enter meta keywords">
                                            @error('meta_keywords')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group" data-select2-id="29">
                                            <label>Focus Keywords</label>
                                            <input type="text" class="form-control" name="fous_keywords" placeholder="Enter meta keywords">
                                            @error('fous_keywords')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>
                                    </div>




                                    <div class="col-lg-4">
                                        <div class="form-group" data-select2-id="29">
                                            <label>Color</label>
                                            <select name="color" class="select2bs4 select2-hidden-accessible" multiple="" data-placeholder="Select Color" style="width: 100%;" data-select2-id="23" tabindex="-1" aria-hidden="true">
                                                @foreach ($colors as $color)
                                                    <option {{ old('color') == $color->id ? 'selected' : '' }} data-select2-id="{{ $color->id }}" value="{{ $color->id }}">{{ $color->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('color')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          </div>
                                    </div>

                                    <div class="col-lg-4">

                                    </div>



                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="thumbnails">Product Thubnails <span class="text-danger">*</span></label>
                                            <input type="file" accept="image/png, image/jpeg, image/jpg" name="thumbnails" class="form-control" onchange="document.getElementById('image_id').src = window.URL.createObjectURL(this.files[0])">
                                            @error('thumbnails')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="text-center">
                                            <img src="" id="image_id" alt="Product Thumbnails" class="img-fluid border rounded p-1 mt-2" width="100">
                                        </div>
                                    </div>









                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputFile">Product Gallury</label>
                                            <div class="input-group mb-30" id="before">
                                                <input type="file" class="form-control" name="galluries[]">
                                                <div class="input-group-append">
                                                    <span class="input-group-text text-success" id="add_gallury" style="cursor: pointer;"><i class="fa fa-plus"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="status"
                                                name="status" value="yes">
                                            <label class="custom-control-label" for="status">Status</label>
                                        </div>
                                    </div>
                                    @error('status')
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>

    <script>
        $('#add_gallury').click(function(){
            $('#before').after(`
            <div class="input-group mt-3">
                <input type="file" class="form-control" name=galluries[]>
                <div class="input-group-append">
                    <span class="input-group-text text-danger" onclick="remove_gallury(this)" style="cursor: pointer;"><i class="fa fa-trash"></i></span>
                </div>
            </div>
            `);
        });
    </script>
    <script>
        function remove_gallury(el){
            var parent = $(el).parent();
            var beforeParent = $(el).parent(parent);
            $(beforeParent).parent().remove()
        }


        // $('#add_gallury').click(function(){
        //     $('#before').after(`
        //     <div class="input-group mt-3">
        //         <input type="file" class="form-control">
        //         <div class="input-group-append">
        //             <span class="input-group-text" onclick="remove_gallury(this)" style="cursor: pointer;"><i class="fa fa-trash"></i></span>
        //         </div>
        //     </div>
        //     `);
        // });
    </script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2bs4').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })



        })
    </script>

    <script>
        function setSubCategory(el) {
            var catId = $(el).val();
            $.ajax({
                type: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "catId": catId,
                    "dataType": "json",
                },
                url: '{{ route('admin.product.getSubCategory') }}',
                success: function(data) {
                    $('#sub_category').removeAttr('disabled');
                    $('#sub_category').html(data);
                }
            });
        }


        $('#description').summernote({
            placeholder: 'Enter Description',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endsection
