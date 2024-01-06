<option value="">Select Sub-Category</option>
@foreach ($subCategories as $subCategory)
<option {{ old('sub_category') == $subCategory->id ? 'selected' : '' }} value="{{ $subCategory->id }}">{{ $subCategory->subcategory_name }}</option>
@endforeach
