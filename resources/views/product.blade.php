@dd($title)
@extends('layouts/frontend')
@section('content')
<main>
        <div class="cssCategory2">
          <h2 class="border-bottom text-center font-weight-bold" style="font-weight:bold">
            All Product
          </h2>
          <div class="card-group text-center">
            @foreach ($products as $pro)
            <div class="card1">
              <img src="/assets/img/produk/{{ $pro->slug }}.png" style="width:100%">
              <div class="container1">
                <h5><b>{{ $pro->name_product }}</b></h5> 
                <p>{{ $pro->price }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
</main>

@endsection 