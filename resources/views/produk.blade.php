
@extends('layout.frontend')
@section('content')
<main>
    {{-- <div class="cssCategory"> --}}
        <div class="cssCategory2">
          <h2 class="border-bottom text-center font-weight-bold" style="font-weight:bold">
            Kategori
          </h2>
          <div class="card-group text-center">
            @foreach ($produk as $pro)
            <div class="card1">
              <img src="assets/img/{{ $pro->img }}" style="width:100%">
              <div class="container1">
                <h5><b>{{ $pro->nama_produk }}</b></h5> 
                <p>{{ $pro->harga }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    {{-- </div> --}}
    
</main>
@endsection 