@extends('\dashboard\layouts\main')

@section('section')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Product</h1>
  </div>
  @if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <div class="table-responsive col-lg-8">
    <a href="/dashboard/products/create" class="btn btn-primary">Add Product</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name Produk</th>
          <th scope="col">Qty</th>
          <th scope="col">Kategori</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $item)
        
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name_product }}</td>
            <td>data</td>
            <td>{{ $item->Category->name_category}}</td>
            <td>{{ $item->price }}</td>
            <td>
               
                <a href="/dashboard/products/{{ $item->slug }}" class="badge bg-info">
                    <i class="bi bi-eye-fill"></i>
                </a>
                <a href="/dashboard/products/{{ $item->slug }}/edit" class="badge bg-warning">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <form action="/dashboard/products/{{ $item->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><i class="bi bi-trash-fill"></i></button>
                </form>
            </td>
            </td>
            </td>
            </tr>

        @endforeach
      </tbody>
    </table>
  </div>
@endsection


