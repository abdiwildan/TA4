@extends('layout.frontend')
@section('content')
<main>
    {{-- <div class="cssCategory"> --}}
        <div class="cssCategory2">
          <h2 class="border-bottom text-center font-weight-bold" style="font-weight:bold">
            Kategori
          </h2>
          <div class="card-group text-center">
            @foreach ($produk as $categories)
            <div class="card1">
              <img src="assets/img/{{ $categories->img }}" style="width:100%">
              <div class="container1">
                <h5><b>{{ $categories->nama_produk }}</b></h5> 
                <p>{{ $categories->harga }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    {{-- </div> --}}
    
</main>
@endsection 