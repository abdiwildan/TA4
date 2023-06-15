@extends('dashboard.layouts.main')
@section('section')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Product</h1>
    </div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/products">
        @csrf
        <div class="mb-2">
          <label for="name_product" class="form-label">Name Product</label>
          <input type="text" class="form-control @error('name_product') is-invalid @enderror" id="name_product" name="name_product" required autofocus value="{{ old('name_product') }}">
            @error('name_product')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-2">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <div class="mb-2">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id" >
                @foreach ($categories as $category)
                    @if (old('category_id')== $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name_category}}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->name_category}}</option>
                    @endif
                @endforeach
              </select>
        </div>
        <div class="mb-2">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ old('price') }}">
            @error('price')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>

<script>
    const name_product = document.querySelector('#name_product');
    const slug = document.querySelector('#slug');

    name_product.addEventListener('change', function(){
        fetch('/dashboard/product/checkSlug?name_product' + name_product.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

</script>
@endsection